<?php
// Recebendo Dados pessoais

$name = $_POST["nome"];
$email = $_POST["email"];
$phone = $_POST["telefone"];
$state = $_POST["estado"];
$city = $_POST["cidade"];



$subject = "Formulário do Consumidor";
$headers = "Content-Type: text/html; charset=utf-8\r\n";
$headers .= "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";



// Dados que serão enviados
$message = "<strong>Nome: </strong>".$nome."<br> 
<strong>Email: </strong>".$email."<br> 
<strong>Telefone:</strong>". $telefone."<br> 
<strong>Cidade: </strong>".$cidade."<br> 
<strong>Estado: </strong>".$estado."<br> ";






// Forma de Atendimento
if(isset($_POST['fdc'])){
  $message .= "<strong>Forma de Contato:</strong>" . "<br> ";
  $opcoes_fdc = $_POST['fdc'];
  foreach ($opcoes_fdc as $fdc){
    $message .= "- " .$fdc . "<br> ";

  }
  
}else{
  echo "";

}
// Atendimento
if(isset($_POST['aten'])){
  $message .= "<strong>Atendimento:</strong><br>";
  $opcoes_aten = $_POST['aten'];
  foreach ($opcoes_aten as $aten){
    $message .= "- " .$aten . "<br>";

  }
  
}else{
  echo "";

}
// Cartão de Crédito
if(isset($_POST['cc'])){
  $message .= "<strong>Cartão de Crédito:</strong><br>";
  $opcoes_cc = $_POST['cc'];
  foreach ($opcoes_cc as $cc){
    $message .= "- " .$cc . "<br>";

  }
  
}else{
  echo "";

}
// Cobranças
if(isset($_POST['co'])){
  $message .= "<strong>Cobranças:</strong><br>";
  $opcoes_co = $_POST['co'];
  foreach ($opcoes_co as $co){
    $message .= "- " .$co . "<br>";

  }
  
}else{
  echo "";

}
// Contratos
if(isset($_POST['ct'])){
  $message .= "<strong>Contratos:</strong><br>";
  $opcoes_ct = $_POST['ct'];
  foreach ($opcoes_ct as $ct){
    $message .= "- " .$ct . "<br>";

  }
  
}else{
  echo "";

}
// Dados Pessoais ou Financeiros
if(isset($_POST['dpf'])){
  $message .= "<strong>Dados Pessoais ou Financeiros:</strong><br>";
  $opcoes_dpf = $_POST['dpf'];
  foreach ($opcoes_dpf as $dpf){
    $message .= "- " .$dpf . "<br>";

  }
  
}else{
  echo "";

}
// Empréstimos e Seguros Indevidos
if(isset($_POST['esi'])){
  $message .= "<strong>Atendimento:</strong><br>";
  $opcoes_esi = $_POST['esi'];
  foreach ($opcoes_esi as $esi){
    $message .= "- " .$esi . "<br>";

  }
  
}else{
  echo "";

}
// Negativação indevida nos cadastros restritivos ao crédito (SPC, Serasa, SCPC etc): 
if(isset($_POST['neg'])){
  $message .= "<strong>Negativação indevida nos cadastros restritivos ao crédito:</strong><br>";
  $opcoes_neg = $_POST['neg'];
  foreach ($opcoes_neg as $neg){
    $message .= "- " .$neg . "<br>";

  }
  
}else{
  echo "";

}
// Produtos
if(isset($_POST['pdt'])){
  $message .= "<strong>Produtos:</strong><br>";
  $opcoes_pdt = $_POST['pdt'];
  foreach ($opcoes_pdt as $pdt){
    $message .= "- " .$pdt . "<br>";

  }
  
}else{
  echo "";

}
// Suspensão ou Desligamento Invevido do Serviço
if(isset($_POST['sdi'])){
  $message .= "<strong>Suspensão ou Desligamento Invevido do Serviço</strong><br>";
  $opcoes_sdi = $_POST['sdi'];
  foreach ($opcoes_sdi as $sdi){
    $message .= "- " .$sdi . "<br>";

  }
  
}else{
  echo "";

}
// Transporte
if(isset($_POST['trans'])){
  $message .= "<strong>Transporte:</strong><br>";
  $opcoes_trans = $_POST['trans'];
  foreach ($opcoes_trans as $trans){
    $message .= "- " .$trans . "<br>";

  }
  
}else{
  echo "";

}
// Venda ou Publicidade Enganosa
if(isset($_POST['vpe'])){
  $message .= "<strong>Venda ou Publicidade Enganosa</strong><br>";
  $opcoes_vpe = $_POST['vpe'];
  foreach ($opcoes_vpe as $vpe){
    $message .= "- " .$vpe . "<br>";

  }
  
}else{
  echo "";

}
// Venda Casada
if(isset($_POST['vc'])){
  $message .= "<strong>Venda Casada:</strong><br>";
  $opcoes_vc = $_POST['vc'];
  foreach ($opcoes_vc as $vc){
    $message .= "- " .$vc . "<br>";

  }
  
}else{
  echo "";

}


// Email que receberá a mensagem
$email_to = 'contato@lsadvocaciaoficial.com.br';

// Enviando email
$status = mail($email_to, mb_encode_mimeheader($subject, "utf-8"), $message, $headers);

if ($status):
  // Enviada com sucesso
  header('location:index.php?status=sucesso');
else:
  // Se der erro
  header('location:index.php?status=erro');
endif;


?>