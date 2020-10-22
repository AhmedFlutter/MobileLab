<?php
include 'functions.php';
$connect = dbconnect();
 
 use PHPMailer\PHPMailer\PHPMailer;
 use PHPMailer\PHPMailer\Exception;
    
if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])){
    $user = $_POST['name'];
    $email = $_POST['email'];
    $msg = $_POST['message'];




    
 // Load Composer's autoloader
    require 'vendor/autoload.php';
    
    // Instantiation and passing `true` enables exceptions
    $mail = new PHPMailer(true);
    
   
        //Server settings
        //$mail->SMTPDebug = 2;                                       // Enable verbose debug output
        
        $mail->isSMTP();                                            // Set mailer to use SMTP
        $mail->Host       = 'smtp.gmail.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = 'mobilelab951753@gmail.com';                     // SMTP username
        $mail->Password   = 'mobilelab321';                               // SMTP password
        $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
        $mail->Port       = 587;                                    // TCP port to connect to
        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );
        //Recipients
        $mail->setFrom('mobilelab951753@gmail.com', 'Mobile Lab Team');
        $mail->addAddress ($email, $user);     // Add a recipient
        //$mail->addAddress('ellen@example.com');               // Name is optional
        //$mail->addReplyTo('info@example.com', 'Information');
        //$mail->addCC('cc@example.com');
        //$mail->addBCC('bcc@example.com');
    
        // Attachments
        //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
        //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
    
        // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Hello from Mobile lab!';
        $mail->Body    = $msg;
        //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    
        
        
        if($mail->send())
        {
            echo json_encode(['status' => 'success']);
        }


    } 

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function



?>