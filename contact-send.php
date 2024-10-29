
<?php


require 'vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;
$mail = new PHPMailer(true);
date_default_timezone_set("Asia/Calcutta");

try {
    //Server settings
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.hostinger.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                   
    $mail->Username = 'info@skmatchworks.com';
    $mail->Password = 'SKmatch143@#&';                        //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    if(isset($_POST['contact_send']))
    {
    //Recipients
    $mail->setFrom('info@skmatchworks.com', 'Contact From Website');
    $mail->addAddress('ctaneesh008@gmail.com');    
    // $mail->addCC('jithindhudhu@gmail.com');
    date_default_timezone_set('Asia/Calcutta');

    $php = "https://skmatchworks.com/";
    $date = date("d-M-Y");	
    $time =  date("h:i:sa");
    $yr_name   = $_POST['yr-name'];
    $yr_email   = $_POST['yr-email'];
    $yr_phone   = $_POST['yr-phone'];
    $yr_subject = $_POST['yr-subject'];
    $comments       = $_POST['comments'];
    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mailContent = "<table>";
    $mailContent.= "<tr>";
    $mailContent.= "<td>Name</td>";
    $mailContent.= "<td>: ".$yr_name."</td>";
    $mailContent.= "</tr>";
    $mailContent.= "<tr>";
    $mailContent.= "<td>Email</td>";
    $mailContent.= "<td>: ".$yr_email."</td>";
    $mailContent.= "</tr>";
    $mailContent.= "<tr>";
    $mailContent.= "<td>Phone</td>";
    $mailContent.= "<td>: ".$yr_phone."</td>";
    $mailContent.= "</tr>";

    $mailContent.= "<tr>";
    $mailContent.= "<td>Subject</td>";
    $mailContent.= "<td>: ".$yr_subject."</td>";
    $mailContent.= "</tr>";

    $mailContent.= "<tr>";
    $mailContent.= "<td>Time </td>";
    $mailContent.= "<td>: ".date('h:i:sa d-m-Y')."</td>";
    $mailContent.= "</tr>";

    $mailContent.= "<tr>";
    $mailContent.= "<td>Date </td>";
    $mailContent.= "<td>: ".date('d-m-Y')."</td>";
    $mailContent.= "</tr>";
    
    if(!empty($comments))
    {
        $mailContent.= "<tr>";
        $mailContent.= "<td>Message </td>";
        $mailContent.= "<td>: ".$comments."</td>";
        $mailContent.= "</tr>";
    }

    $mailContent.= "</table>";
    $mail->Subject = 'Contact From Website';
    $mail->Body    = $mailContent;
    $mail->AltBody = '';

    $mail->send();
         echo '<h1 class="title">';
         echo 'Message has been sent successfully...';
         echo '</h1>';
         echo "<meta http-equiv=refresh content=2;URL=https://skmatchworks.com />"; 
         header("Refresh:2; url=https://skmatchworks.com");
    }
    else{
        echo '<h1 class="title">';
        echo 'Message not sent';
        echo '</h1>';
    }
   
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
echo "<meta http-equiv=refresh content=2;URL=https://skmatchworks.com />"; 
                                    

?>
