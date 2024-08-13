<?php

   $nome = addslashes($_POST['nome']);
   $email = addslashes($_POST['e-mail']);
   $telefone = addslashes($_POST['Telefone']);
   $digite = addslashes($POST['digite'])

   $para = "pedroxdw97@gmail.com";
   $assunto = "Coleta de dados - Teste";

   $corpo = "Nome: ".$nome."\n"."e-mail".$email."\n" "Telefone ".$telefone."\n"."Mensagem ".$digite;
    
   $cabeca = "From: pedroxdw97@gmail.com"."\n"."Reply-to: ".$email."\n"."X=Mailer:PHP/".phpversion();

   if(mail($para,$assunto, $corpo, $cabeca)){
    echo("E-mail enviado com sucesso");
   }else{
    acho("Houve um erro");
   }
?>