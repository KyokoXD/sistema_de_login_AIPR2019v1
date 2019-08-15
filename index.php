<! DOCTYPE html>
< html  lang = " pt-br " >

< cabeça >
    < meta  charset = " UTF-8 " >
    < meta  name = " viewport "  content = " largura = largura do dispositivo, escala inicial = 1.0 " >
    < Meta  http-equiv = " X-UA-Compatible "  conteúdo = " ie = bordo " >
    < link  rel = " stylesheet "  href = " https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css " >
    < link  rel = " stylesheet "  href = " https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css " >
    < link  rel = " stylesheet "  href = " https://jqueryvalidation.org/files/demo/site-demos.css " >
    < title > Sistema de Login Sistemas TNX </ title >
    < style >
        #caixaCadastro,
        #caixaRecuperarSenha,
        #alerta {
            exibir : nenhum ;
        }
    </ style >
</ head >
< body  class = " bg-dark " >
    < main  class = " contêiner mt-4 " >
        <! - Conteúdo Principal ->
        < section  class = " row " >
            < div  class = " col-lg-4 deslocamento-lg-4 "  id = " alerta " >
                < div  class = " alerta alerta-sucesso centro de texto " >
                    < strong  id = " resultado " >
                        Maravilhoso mundo sem o Sublime!
                    </ strong >
                </ div >
            </ div >
        </ section >
        <! - Formulário de Login ->
        < section  class = " linha mb-5 " >
            < div  classe = " col-lg-4 deslocamento-lg-4 bg-luz arredondada "  id = " caixaLogin " >
                < h2  classe = " texto-centro mt-2 " > Entrada no sistema </ h2 >
                < form  action = " # "  id = " formLogin "  classe = " p-2 " >
                    < div  class = " form-group " >
                        < input  type = " text "  nome = " nomeUsuario "  id = " nomeUsuario "  class = " formulário-controle "  espaço reservado = " Nome do usuário "  minlength = " 5 "  necessário >
                    </ div >
        
                    < div  class = " form-group " >
                        < input  type = " password "  nome = " senhaUsuario "  id = " senhaUsuario "  class = " forma-controle "  espaço reservado = " Senha "  required  minlength = " 6 " >
                    </ div >
        
                    < div  class = " grupo de forma mt-5 " >
                        < div  class = " caixa de seleção personalizada de controle personalizado " >
                            < input  type = " checkbox "  nome = " lembrar "  id = " lembrar "  class = " custom-control-input " >
                            < label  for = " lembrar "  class = " custom-control-label " >
                                Lembrar de mim.
                            </ label >
        
                            < A  href = " # "  id = " btnEsqueci "  class = " float-direita " >
                                Esqueci a senha!
                            </ a >
                        </ div >
                    </ div >
        
                    < div  class = " form-group " >
                        < input  type = " submit "  value = " :: Entrar :: "  nome = " btnEntrar "  id = " btnEntrar "  classe = " btn btn-primário btn-bloco " >
                    </ div >
        
                    < div  class = " form-group " >
                        < p  class = " center " > Novo usuário?
                            < A  href = " # "  id = " btnCadastrar " > Cadastre-se Aqui. </ A >
                        </ p >
                    </ div >
       
                </ form >
            </ div >
        </ section >
        
        <! - Formulário de Cadastro ->
        < section  class = " linha mb-5 " >
            < div  class = " col-lg-4 deslocamento-lg-4 bg-luz arredondada "  id = " caixaCadastro " >
                < h2  class = " text-center " > Cadastro de Usuário </ h2 >
                < form  action = " # "  class = " p-2 "  id = " formCadastro " >
                    < div  class = " form-group " >
                        < input  type = " text "  name = " nomeCompleto "  id = " nomeCompleto "  class = " forma-controle "  espaço reservado = " Nome completo "  required  minlength = " 5 " >
                    </ div >
        
                    < div  class = " form-group " >
                        < input  type = " text "  nome = " nomeUsuário "  id = " nomeUsuário "  class = " forma-controle "  espaço reservado = " Nome do Usuário "  minlength = " 5 "  requerido >
                    </ div >
        
                    < div  class = " form-group " >
                        < input  type = " email "  nome = " emailUsuário "  id = " emailUsuário "  class = " forma-controle "  espaço reservado = " E-mail do Usuário "  necessário >
                    </ div >
        
                    < div  class = " form-group " >
                        < input  type = " password "  nome = " senhaUsuário "  id = " senhaUsuário "  class = " forma-controle "  espaço reservado = " Digite sua senha "  minlength = " 6 "  required >
                    </ div >
        
                    < div  class = " form-group " >
                        < input  type = " password "  nome = " senhaConfirma "  id = " senhaConfirma "  class = " forma-controle "  espaço reservado = " Confirme a sua senha "  minlength necessário  = " 6 " >
                    </ div >
        
                    < div  class = " grupo de forma mt-5 " >
                        < div  class = " caixa de seleção personalizada de controle personalizado " >
                            < input  type = " checkbox "  nome = " concordar "  id = " concordar "  class = " entrada de controle personalizado " >
                            < label  for = " concordar "  class = " custom-control-label " >
                                Eu concordo com os
                                < A  href = " # " > TERMOS e condições. </ A >
                            </ label >
                        </ div >
                    </ div >
        
                    < div  class = " form-group " >
                        < input  type = " submit "  value = " :: Cadastrar :: "  class = " btn btn-primário btn-block "  id = " btnRegistrar " >
                    </ div >
        
                    < div  class = " form-group " >
                        < p  class = " text-center " >
                            Já cadastrado?
                            < A  href = " # "  id = " btnJáCadastrado " >
                                Entrar aqui
                            </ a >
                        </ p >
                    </ div >
                </ form >
            </ div >
        </ section >
        
        <! - Formulário de recuperação de senha ->
        < section  class = " linha mb-5 " >
            < div  class = " col-lg-4 deslocamento-lg-4 bg-luz arredondada "  id = " caixaRecuperarSenha " >
                < h2  class = " centro de texto " > Gerar nova senha </ h2 >
                < form  action = " # "  id = " formSenha " >
        
                    < div  class = " form-group " >
                        < small  class = " text-muted " >
                            Para gerar uma nova senha, digite seu e-mail
                            e receba as instruções.
                        </ small >
                    </ div >
        
                    < div  class = " form-group " >
                        < input  type = " email "  nome = " emailSenha "  id = " emailSenha "  class = " forma-controle "  espaço reservado = " E-mail "  necessário >
                    </ div >
        
                    < div  class = " form-group " >
                        < input  type = " submit "  value = " :: Enviar e-mail :: "  id = " btnEnviarEmail "  class = " btn btn-primário btn-block " >
                    </ div >
        
                    < div  class = " grupo de formulários float-right " >
                        < A  href = " # "  id = " btnVoltar " > Voltar </ a >
                    </ div >
                </ form >
            </ div >
        </ section >
        
    </ main >
        
    < script  src = " https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js " > </ script >
    < script  src = " https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js " > </ script >
    < script  src = " https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js " > </ script >
        
    < script  src = " https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js " > </ script >
        
    < script >
        / * jQuery * /
        $ (function () {
            
            // Trocar da Tela de Login para Recuperar a Senha
            $ ( " #btnEsqueci " ) . clique ( function () {
                $ ( " #caixaLogin " ) . ocultar();
                $ ( " #caixaRecuperarSenha " ) . exposição();
            } );
            
            // Voltar para a tela de Login
            $ ("# btnVoltar"). click (function () {
                $ ( " #caixaLogin " ) . exposição();
                $ ( " #caixaRecuperarSenha " ) . ocultar();
            } );
            
            // Trocar de tela de Login para cadastramento do usuário
            $ ('# btnCadastrar'). click (function () {
                $ ( " #caixaLogin " ) . ocultar();
                $ ( " #caixaCadastro " ) . exposição();
            } );
            
            // Voltar para a tela de Login
            $ ('# btnJáCadastrado'). click (function () {
                $ ( " #caixaLogin " ) . exposição(); // mostrar
                $ ( " #caixaCadastro " ) . ocultar(); // hide
            } );
            
            // jQuery Validation solo chão
            $ ("# formLogin"). validate ();
            $ ("# formSenha"). validate ();
            $ .validator.setDefaults ( {
                sucesso : " válido "
            } );
            
            $ ("# formCadastro"). validate ( {
                regras : {
                    senhaConfirma : {
                        equalTo : " # senhaUsuário "
                    }
                }
            } );
            
            
        });
        / *
         * Mensagens padrão traduzidas para o plugin de validação jQuery.
         * Localidade: PT_BR
         * https://gist.github.com/diegoprates/5047663
         * /
        jQuery.extend (jQuery.validator.messages, {
            necessário : " Este campo & requerido. " ,
            remoto : " Por favor, corrija este campo. " ,
            email : " Por favor, forne & ccedil; um endereço eletrônico & eletrônico; lido & ldquo; " ,
            url : " Por favor, forne & ccedil; uma uma URL v & aacute; lida. " ,
            data : " Por favor, forne & ccedil; uma uma data v & aacute; lida. " ,
            dateISO : " Por favor, forne & ccedil; uma uma data v & aacute; lida (ISO). " ,
            número : " Por favor, forne & ccedil; um n & uacute; mero v & aacute; lido. " ,
            dígitos : " Por favor, forne & ccedil; a somente d & iacute; gitos. " ,
            cartão de crédito : " Por favor, forne & ccedil; um carrinho & atilde; o de cr & eacute; dito v & aacute; lido. " ,
            igualTo : " Por favor, forne & ccedil; ao mesmo valor novamente " ,
            aceite : " Por favor, forne & ccedil; a um valor com uma extensa & atilde; o v & aacute; lida. " ,
            maxlength : jQuery . validador . format ( " Por favor, forne & ccedil; a n & atilde; o mais que {0} caracteres. " ),
            minlength : jQuery . validador . format ( " Por favor, forne & ccedil; um ao menos {0} caracteres. " ),
            rangelength : jQuery . validador . format ( " Por favor, forne & ccedil; um valor entre {0} e {1} caracteres de comprimento. " ),
            intervalo : jQuery . validador . format ( " Por favor, forne & ccedil; um valor entre {0} e {1}. " ),
            max : jQuery . validador . format ( " Por favor, forne & ccedil; a um valor menor ou igual a {0}. " ),
            min : jQuery . validador . format ( " Por favor, forne & ccedil; um valor maior ou igual a {0}. " )
        } );
    </ script >
</ body >
        
</ html >
