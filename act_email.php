<?php error_reporting(0) // tambahkan untuk menghilangkan notice ?>

<?php

//include "koneksi_db.php";

require 'PHPmailer/class.phpmailer.php';

$usermail= $_POST['usermail'];
$mail = new PHPMailer();
$mail->IsMail(true); // SMTP
$mail->SMTPAuth   = true;  // SMTP authentication
$mail->Host= "smtp.gmail.com";
$mail->SMTPSecure = 'tls';
$mail->Port = 587; 
$mail->SetFrom("email@gmail.com","email sender");
$mail->Username = "email@gmail.com";  // username gmail yang akan digunakan untuk mengirim email
$mail->Password = "*****";  // Password email
$mail->SetFrom($usermail, 'user');
$mail->AddReplyTo($usermail,'user');
$mail->Subject = $subject;
$mail->MsgHTML($body);
$address = $to;
$mail->AddAddress($address, $to);
$mail->AddAddress($usermail);
if(!$mail->Send())
return false;
else
return true;


$statusMsg = '';
$msgClass = '';

if(isset($_POST['Submit3'])){
    // Get the submitted form data
    $email = $_POST['email'];
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    
    // Cek apakah ada data yang belum diisi
    if(!empty($email) && !empty($name) && !empty($subject) && !empty($message)){
        
        if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
            $statusMsg = 'Please enter your valid email.';
            $msgClassk = 'errordiv';
        }else{
            // Pengaturan penerima email dan subjek email
            $toEmail = 'lutfiambarwati93@gmail.com'; // Ganti dengan alamat email yang Anda inginkan
            $emailSubject = 'Message website from '.$name;
            $htmlContent = '<h2> via Form Contact Website</h2>
                <h4>Name</h4><p>'.$name.'</p>
                <h4>Email</h4><p>'.$email.'</p>
                <h4>Subject</h4><p>'.$subject.'</p>
                <h4>Message</h4><p>'.$message.'</p>';
            
            // Mengatur Content-Type header untuk mengirim email dalam bentuk HTML
            /*$headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";*/
            
            // Header tambahan
            $headers .= 'From: '.$name.'<'.$email.'>'. "\r\n";
            
            // Send email
            if(mail($toEmail,$emailSubject,$htmlContent,$headers)){
                $statusMsg = 'Your message successful !';
                $msgClass = 'succdiv';
            }else{
                $statusMsg = 'Sorry your message failed. Please try again!';
                $msgClass = 'errordiv';
            }
        }
    }else{
        $statusMsg = 'Please full data!';
        $msgClass = 'errordiv';
    }
}


/*if(isset($_POST['Submit3'])){
    $admin = 'lutfiambarwati93@gmail.com'; //ganti email dg email admin (email penerima pesan)
    
    $nama   = $_POST['name'];
    $email  = $_POST['email'];
    $judul  = $_POST['subject'];
    $pesan  = $_POST['message'];
    
    $pengirim   = 'Dari: '.$nama.' <'.$email.'>';
    
    if(mail($admin, $judul, $pesan, $pengirim)){
        echo 'SUCCESS: Pesan anda berhasil di kirim. <a href="index.php">Kembali</a>';
    }else{
        echo 'ERROR: Pesan anda gagal di kirim silahkan coba lagi. <a href="details2.php">Kembali</a>';
    }
}else{
    header("Location: index.php");
}*/

?>