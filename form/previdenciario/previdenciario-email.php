<?php
// Recebendo Dados pessoais

$name = $_POST["nome"];
$email = $_POST["email"];
$phone = $_POST["telefone"];
$state = $_POST["estado"];
$city = $_POST["cidade"];



$subject = "Formulário Previdênciario";
$headers = "Content-Type: text/html; charset=utf-8\r\n";
$headers .= "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";



// Dados que serão enviados
$message = "<strong>Nome: </strong>".$name."<br> 
<strong>Email: </strong>".$email."<br> 
<strong>Telefone:</strong>". $phone."<br> 
<strong>Cidade: </strong>".$city."<br> 
<strong>Estado: </strong>".$state."<br> ";






// Forma de Atendimento
if(isset($_POST['fdc'])){
  $message .= "<strong>Forma de Contato:</strong>" . "<br> ";
  $opcoes_fdc = $_POST['fdc'];
  foreach ($opcoes_fdc as $fdc){
    $message .= "- " .$fdc . "<br> ";

  }
  $message .= "<br>";
  
}else{
  echo "";

}
// Situação 1
if(isset($_POST['p1'])){
  $message .= "<strong>Quero me Aposentar!</strong><br>";
  $resp_p1 = $_POST['p1'];
  $message .= "- " . $resp_p1 . "<br>";

  
  
}else{
  echo "";

}
// Situação 2
if(isset($_POST['p2'])){
  $message .= "<strong>Quero me aposentar por
  invalidez!</strong><br>";
  $resp_p2 = $_POST['p2'];
  $message .= "- " . $resp_p2 . "<br>";

  
  
}else{
  echo "";

}
// Situação 3
if(isset($_POST['p3'])){
  $message .= "<strong>Quero receber o benefício
  de Amparo Social ao idoso ou à pessoa com deficiência!</strong><br>";
  $resp_p3 = $_POST['p3'];
  $message .= "- " . $resp_p3 . "<br>";

  
  
}else{
  echo "";

}
// Situação 4
if(isset($_POST['p4'])){
  $message .= "<strong>Quero receber o benefício
  de Salário – Maternidade.</strong><br>";
  $resp_p4 = $_POST['p4'];
  $message .= "- " . $resp_p4 . "<br>";

  
  
}else{
  echo "";

}
// Situação 5
if(isset($_POST['p5'])){
  $message .= "<strong>Quero receber o benefício
  de auxílio-doença!</strong><br>";
  $resp_p5 = $_POST['p5'];
  $message .= "- " . $resp_p5 . "<br>";

  
  
}else{
  echo "";

}
// Situação 6
if(isset($_POST['p6'])){
  $message .= "<strong>Quero receber o benefício
  de pensão por morte!</strong><br>";
  $resp_p6 = $_POST['p6'];
  $message .= "- " . $resp_p6 . "<br>";

  
  
}else{
  echo "";

}
// Situação 7
if(isset($_POST['p7'])){
  $message .= "<strong>Outros serviços:</strong><br>";
  $resp_p7 = $_POST['p7'];
  $message .= "- " . $resp_p7 . "<br>";

  
  
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