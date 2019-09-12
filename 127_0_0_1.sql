-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 23-Ago-2019 às 14:14
-- Tempo de geração: 06-Set-2019 às 16:44
-- Versão do servidor: 10.3.16-MariaDB
-- versão do PHP: 7.3.7

@@ -30,20 +30,25 @@ USE `sistemadelogin`;
--
-- Estrutura da tabela `usuario`
--
-- Criação: 23-Ago-2019 às 17:09
-- Última actualização: 23-Ago-2019 às 17:09
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE `usuario` (
  `idUsuario` int(10) UNSIGNED NOT NULL,
  `nome` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `nomeUsuario` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `senha` char(40) COLLATE utf8mb4_bin NOT NULL,
  `dataCriacao` datetime NOT NULL
  `dataCriacao` datetime NOT NULL,
  `avatar_url` varchar(220) COLLATE utf8mb4_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `nome`, `nomeUsuario`, `email`, `senha`, `dataCriacao`, `avatar_url`) VALUES
(1, 'Dinossauro Rexnux', 'dinonux', 'dinonux@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', '2019-09-06 16:07:23', 'https://tarcnux.files.wordpress.com/2011/12/tarcnux_dez_2011_com_a_cabec3a7a_nas_nuvens.jpg'),
(2, 'Topo Gigio', 'topogigio', 'gigio@bol.com.br', '7c4a8d09ca3762af61e59520943dc26494f8941b', '2019-09-06 16:23:38', 'https://3.bp.blogspot.com/_d-lesN9Fpho/TFIazIlq5VI/AAAAAAAAABs/3YxA0Zns9Wc/w1200-h630-p-k-no-nu/topo_gigio_08.jpg');

--
-- Índices para tabelas despejadas
--
@@ -63,7 +68,7 @@ ALTER TABLE `usuario`
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
  MODIFY `idUsuario` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
  26  index.php 
@@ -1,9 +1,9 @@
<?php
    
    session_start();
    if(isset($_SESSION['nomeUsuario']))
        //Bloqueando usuários logados    
        header("location: profile.php");
session_start();
if (isset($_SESSION['nomeUsuario']))
    //Bloqueando usuários logados    
    header("location: profile.php");
?>

<!DOCTYPE html>
@@ -97,6 +97,12 @@
                        <input type="email" name="emailUsuário" id="emailUsuário" class="form-control" placeholder="E-mail de Usuário" required>
                    </div>

                    <div class="form-group">
                        <input type="url" name="urlAvatar" id="urlAvatar" 
                        class="form-control" 
                        placeholder="URL para imagem do seu perfil" required>
                    </div>

                    <div class="form-group">
                        <input type="password" name="senhaUsuário" id="senhaUsuário" class="form-control" placeholder="Digite sua senha" minlength="6" required>
                    </div>
@@ -187,7 +193,7 @@
                        success: function(resposta) {
                            $('#alerta').show();
                            $('#resultado').html(resposta);
                            if(resposta === "ok"){
                            if (resposta === "ok") {
                                //Redirecinamento
                                window.location = "profile.php";
                            }
@@ -216,13 +222,13 @@
            //Formulário para mudar de senha
            $('#btnEnviarEmail').click(function(e) {
                let formSenha = document.querySelector('#formSenha');
                if(formSenha.checkValidity()){
                    e.preventDefault();//Não recarregar a página
                if (formSenha.checkValidity()) {
                    e.preventDefault(); //Não recarregar a página
                    $.ajax({
                        url: 'recebe.php',
                        method: 'post',
                        data: $('#formSenha').serialize()+'&action=senha',
                        success: function(resposta){
                        data: $('#formSenha').serialize() + '&action=senha',
                        success: function(resposta) {
                            $('#alerta').show();
                            $('#resultado').html(resposta);
                        }
  17  profile.php 
@@ -50,10 +50,19 @@
    </nav>

    <main class="container mt-4">
        <h1 class="text-light">Perfil de usuário</h1>
        <h2 class="text-light">Nome: <?= $nome ?></h2>
        <h2 class="text-light">E-mail: <?= $email ?></h2>
        <h2 class="text-light">Data de Cadastro: <?= $dataCriacao ?></h2>

        <div class="row">
            <div class="offset-lg-2 col-3">
                <img src="<?= $urlAvatar ?>" alt="Foto de <?= $usuario ?>" height="200" width="200" />
            </div>

            <div class="col-7">
                <h1 class="text-light">Perfil de usuário</h1>
                <h2 class="text-light">Nome: <?= $nome ?></h2>
                <h2 class="text-light">E-mail: <?= $email ?></h2>
                <h2 class="text-light">Data de Cadastro: <?= $dataCriacao ?></h2>
            </div>
        </div>
    </main>

    <!-- Optional JavaScript -->
  12  recebe.php 
@@ -45,7 +45,8 @@ function verificar_entrada($entrada)
    $emailUsuario = verificar_entrada($_POST['emailUsuário']);
    $senhaUsuario = verificar_entrada($_POST['senhaUsuário']);
    $senhaConfirma = verificar_entrada($_POST['senhaConfirma']);
    $concordar = $_POST['concordar'];
    $urlAvatar = verificar_entrada($_POST['urlAvatar']);
    //$concordar = $_POST['concordar'];
    $dataCriacao = date("Y-m-d H:i:s");
    
@@ -72,10 +73,11 @@ function verificar_entrada($entrada)
            echo "<p>E-mail já em uso, tente outro</p>";
        }else{ //Cadastro de usuário
            $sql = $conecta->prepare("INSERT into usuario 
            (nome, nomeUsuario, email, senha, dataCriacao) 
            values(?, ?, ?, ?, ?)");
            $sql->bind_param("sssss",$nomeCompleto, $nomeUsuario,
        $emailUsuario, $senha, $dataCriacao);
            (nome, nomeUsuario, email, senha, dataCriacao, 
            avatar_url) 
            values(?, ?, ?, ?, ?, ?)");
            $sql->bind_param("ssssss",$nomeCompleto, $nomeUsuario,
        $emailUsuario, $senha, $dataCriacao, $urlAvatar);
            if($sql->execute()){
                echo "<p>Registrado com sucesso</p>";
            }else{
  7  session.php 
@@ -16,7 +16,12 @@
    $nome = $linha['nome'];
    $email = $linha['email'];
    $dataCriacao = $linha['dataCriacao'];
    //Conversão de data e hora
    $d = $linha['dataCriacao'];
    $d = new DateTime($d);
    $dataCriacao = $d->format('d/m/Y H:i:s');
    $urlAvatar = $linha['avatar_url'];
}else{
    //Kick
    header("location: index.php");
