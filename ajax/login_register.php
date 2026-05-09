<?php
    require('../admin/inc/db_config.php');
    require('../admin/inc/essentials.php');
    require('../inc/PHPMailer/Exception.php');
    require('../inc/PHPMailer/PHPMailer.php');
    require('../inc/PHPMailer/SMTP.php');

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    function send_mail($email, $name, $token)
{
    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();                                            
        $mail->Host       = 'smtp.gmail.com';                     
        $mail->SMTPAuth   = true;                                   
        $mail->Username   = 'mail'; 
        $mail->Password   = 'Heslo';    
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            
        $mail->Port       = 587; 
        
        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );

        // Odesílatel a příjemce
        $mail->setFrom('mail', 'AD Hotel');
        $mail->addAddress($email, $name);

        // Obsah emailu
        $mail->isHTML(true);                                  
        $mail->Subject = 'Overeni uctu - AD Hotel';
        $mail->Body    = "
            Klikni na odkaz nize pro potvrzeni registrace: <br>
            <a href='".SITE_URL."email_confirm.php?email=$email&token=$token'>POTVRDIT EMAIL</a>
        ";

        $mail->send();
        return true;
    } 
    catch (Exception $e) 
    {
        echo "Mailer Error: {$mail->ErrorInfo}";
        return false; 
    }
}


    if (isset($_POST['register']))
    {
        $data = filteration($_POST);

        //match password and confirm password
        if($data['pass']!= $data['cpass'])
        {
            echo 'pass_mismatch';
            exit;
        }

        //check user exists or not
        $u_exist = select("SELECT * FROM `user_cred` WHERE `email`=? OR `phonenum`=? LIMIT 1", [$data['email'], $data['phonenum']], "ss");

        if(mysqli_num_rows($u_exist)!=0)
        {
            $u_exist_fetch = mysqli_fetch_assoc($u_exist);
            echo ($u_exist_fetch['email']==$data['email']) ? 'email_already' : 'phone_already';
            exit;
        }

        //upload user image to server
        $img = uploadUserImage($_FILES['profile']);

        if($img == 'inv_img')
        {
            echo 'inv_img';
            exit;
        }
        else if ($img == 'upd_failed')
        {
            echo 'upd_failed';
            exit;
        }

        //send confirmation link to user's email
        $token = bin2hex(random_bytes(16));
        if(!send_mail($data['email'], $data['name'], $token))
        {
            echo 'mail_failed';
            exit;
        }
        $enc_pass = password_hash($data['pass'], PASSWORD_BCRYPT);

        $query = "INSERT INTO `user_cred` (`name`, `email`, `address`, `phonenum`, `pincode`, `dob`, `profile`, `password`, `token`) VALUES (?,?,?,?,?,?,?,?,?)";

        $values = [$data['name'], $data['email'], $data['address'], $data['phonenum'], $data['pincode'], $data['dob'], $img, $enc_pass, $token];

        if(insert($query, $values, 'sssssssss'))
        {
            echo 1;
        }
        else
        {
            echo 'ins_failed';
        }
    }
?>