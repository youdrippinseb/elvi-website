<?php
      if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $subject = $_POST['subject'];
        $mailForm = $_POST['mail'];
        $message = $_POST['name'];

        $mailTo = "s.dragomiristeanu.1302@vallauri.edu";
        $headers = "From: ".$mailFrom;
        $txt = "Hai ricevuto un'e-mail da ".$name.".\n\n".$message;

        mail($mailTo, $subject, $txt, $headers);
        header("Location: index.php?mailsend");
      }
?>





<!---

<form action="contact.php" method="post">
                <table id="contact_table">
                  <tr> 
                    <td><label for="name"> Name: </label> </td> 
                    <td><input type="text" name="name"/></td>
                  </tr>
                  <tr> 
                    <td><label for="emailaddress">  Email Address: </label> </td> 
                    <td><input type="text" name="emailaddress"/></td>
                  </tr>
                  <tr> 
                    <td><label for="message"> Message: </label> </td>
                    <td><input type="text" name="message"/></td>
                  </tr>
                  <tr><td></td> <td><input type="submit" value="Submit" /> </td> </tr>
                </table>   
              </form>

PHPMailer
              
?php
              require 'PATH TO CLASS.PHPMAILER.PHP';
              if(isset($_POST["name"]))
              {
              $mail = new PHPMailer(); // create a new object
              $mail->IsSMTP(); // enable SMTP
              $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
              $mail->SMTPAuth = true; // authentication enabled
              $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
              $mail->Host = "smtp.gmail.com";
              $mail->Port = 465; // or 587
              $mail->IsHTML(true);
              $mail->Username = "EMAIL@EXAMPLEEMAIL.COM";
              $mail->Password = "PASSWORDEXAMPLE";
              $mail->SetFrom("EMAIL@EXAMPLEEMAIL.COM");
              $mail->Subject = "Contact Page Submission - " . $_POST["name"] ;
              $mail->Body = $_POST["message"] . "<br/>" . $_POST["emailaddress"];
              $mail->AddAddress("EMAIL@EXAMPLEEMAIL.COM");
              if(!$mail->Send())
              {
                echo "<h3> Mailer Error: " . $mail->ErrorInfo . "</h3>";
              }
              else
              {
                echo "<h3> Message has been sent </h3>";
              }
            }
?> 

 Prova 1 presi da progetti online

Metodo 1: Messaggi mandate al server SQL che le custodisce 


< ?php
require_once("config.php");
if((isset($_POST['your_name'])&& $_POST['your_name'] !='') &&
(isset($_POST['your_email'])&& $_POST['your_email'] !=''))
{
    require_once("contact_mail.php");

    $yourName = $conn->real_escape_string($_POST['nome']);
    $yourEmail = $conn->real_escape_string($_POST['email']);
    $yourObject = $conn->real_escape_string($_POST['object']);
    $yourMessage = $conn->real_escape_string($_POST['messaggio']);

    $sql="INSERT INTO contact_form_info (name, email, object, messaggio) VALUES 
    ('".$yourName."','".$yourEmail."', '".$yourObject."', '".$comments."')";

    if(!$result = $conn->query($sql)){
        die('There was an error running the query [' . $conn->error . ']');
    }
    else
    {
    echo "Grazie! Ti contatteremo molto presto.";
    }
    }
    else
    {
    echo "Inserisci il tuo Nome e l'Email.";
    }
?>



// Metodo 2: Email mandate direttamente alla casa Email collegata



< ?php
$toEmail = "elviservizi@aruba.it";
$mailHeaders = "From: " . $_POST["your_name"] . "<". $_POST["your_email"] .">\r\n";
if(mail($toEmail, $_POST["object"], $_POST["messaggio"], $mailHeaders)) {
echo"<p class='success'>Contact Mail Sent.</p>";
} else {
echo"<p class='Error'>Problem in Sending Mail.</p>";
}
?>




-->


