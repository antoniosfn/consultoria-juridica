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
$message = "<strong>Nome: </strong>".$nome."\n 
<strong>Email: </strong>".$email."\n
<strong>Telefone:</strong>". $telefone."\n 
<strong>Cidade: </strong>".$cidade."\n
<strong>Estado: </strong>".$estado."\n";






// Forma de Atendimento
if(isset($_POST['fdc'])){
  $message .= "<strong>Forma de Contato:</strong>" . "\n";
  $opcoes_fdc = $_POST['fdc'];
  foreach ($opcoes_fdc as $fdc){
    $message .= "- " .$fdc . "\n";

  }
  
}else{
  echo "";

}
// Pergunta 1
if(isset($_POST['p1'])){
  $message .= "<strong>Você saiu desse emprego há mais de 02 anos?</strong><br>";
  $resp_p1 = $_POST['p1'];
  $message .= "- " . $resp_p1 . "<br>";

  
  
}else{
  echo "";

}
// Pergunta 2
if(isset($_POST['p2'])){
  $message .= "<strong>VHá quanto tempo você trabalhou ou trabalha nesse emprego?</strong><br>";
  $resp_p2 = $_POST['p2'];
  $message .= "- " . $resp_p2 . "<br>";

  
  
}else{
  echo "";

}
// Pergunta 3
if(isset($_POST['p3'])){
  $message .= "<strong>O seu patrão assinou a sua carteira de trabalho?</strong><br>";
  $resp_p3 = $_POST['p3'];
  $message .= "- " . $resp_p3 . "<br>";

  
  
}else{
  echo "";

}
// Pergunta 4
if(isset($_POST['p4'])){
  $message .= "<strong>Quanto você recebia por mês?</strong><br>";
  $resp_p4 = $_POST['p4'];
  $message .= "- " . $resp_p4 . "<br>";

  
  
}else{
  echo "";

}
// Pergunta 5
if(isset($_POST['p5'])){
  $message .= "<strong>O seu patrão te deve salário, horas extras, férias, décimo terceiro ou verbas decorrentes da rescisão
  do
  contrato de trabalho?</strong><br>";
  $resp_p5 = $_POST['p5'];
  $message .= "- " . $resp_p5 . "<br>";

  
  
}else{
  echo "";

}
// Pergunta 6
if(isset($_POST['p6'])){
  $message .= "<strong>O FGTS e as contribuições do INSS estão sendo recolhidas corretamente?</strong><br>";
  $resp_p6 = $_POST['p6'];
  $message .= "- " . $resp_p6 . "<br>";

  
  
}else{
  echo "";

}
// Pergunta 7
if(isset($_POST['p7'])){
  $message .= "<strong>Qual a sua situação?</strong><br>";
  $resp_p7 = $_POST['p7'];
  $message .= "- " . $resp_p7 . "<br>";

  
  
}else{
  echo "";

}
// Pergunta 8
if(isset($_POST['p8'])){
  $message .= "<strong>Outro:</strong><br>";
  $resp_p8 = $_POST['p8'];
  $message .= "- " . $resp_p8 . "<br>";

  
  
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