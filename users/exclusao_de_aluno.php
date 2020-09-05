<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>

</body>
</html>
<?php
include "../bd.php";
$id = $_GET['id'];
$motivo = $_GET['motivo'];

        
        require "../PHPMailer/src/OAuth.php";
        require "../PHPMailer/src/POP3.php";
        
         
        require_once '../vendor/phpmailer/phpmailer/src/PHPMailer.php';
        require_once '../vendor/phpmailer/phpmailer/src/SMTP.php';
        require_once '../vendor/phpmailer/phpmailer/src/Exception.php';
        require_once '../vendor/autoload.php';

        use PHPMailer\PHPMailer\PHPMailer;
        use PHPMailer\PHPMailer\Exception;
        use PHPMailer\PHPMailer\SMTP;
$sql1 = "SELECT * FROM cadastro WHERE id = $id";
        $resultado = mysqli_query($conexao, $sql1);
        
        $linha = mysqli_fetch_array($resultado);
        $nome = $linha['nome'];
        $email = $linha['email'];
        

        
        $mail = new PHPMailer(true);
try {

   

     //Server settings
    $mail->SMTPDebug = 2;               
    $mail->isSMTP();                               
    $mail->Host = 'smtp.gmail.com';  
    $mail->SMTPAuth = true;             
    $mail->Username = 'pacotedehoteis@gmail.com';
    $mail->Password = 'senhafraca';     
    $mail->SMTPSecure = 'tls';               
    $mail->Port = 587;                    

    //Recipients
    $mail->setFrom($email, 'EDUCACONTABIL');
    $mail->addAddress($email, $nome);  
    
     //Aceitar carasteres especiais
    $mail->Charset = 'UTF-8';

    $mail->Subject = "Sua conta foi excluida em EducaContábil";
    $mail->msgHTML($motivo);
    

    if ($mail->send()) {
        $_SESSION["success"] = "Mensagem enviada com sucesso";
        echo "<script>alert('E-mail enviado com sucesso'); window.location.href='lista_alunos.php';</script>";
        
    } else {
        $_SESSION["danger"] = "Erro ao enviar mensagem ";
        echo "<script>alert('E-mail não foi enviado com sucesso; Procure entrar em contato com o aluno imediatamente'); window.location.href='lista_alunos.php';</script>";
        
    }
} catch (Exception $e) {
   echo "<script> alert('E-mail não foi enviado com sucesso; Procure entrar em contato com o aluno imediatamente'); window.location.href='lista_alunos.php'; </script>";
}


$sql = "DELETE FROM cadastro WHERE id=$id";
$resultado = mysqli_query($conexao, $sql);
 



?>