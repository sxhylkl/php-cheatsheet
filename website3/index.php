<?php
    // Message Vars
    $msg = '';
    $msgClass = '';

    // Check for Submit
    if(filter_has_var(INPUT_POST, 'submit')) {
       // Get Form Data
       $name = htmlspecialchars($_POST['name']);
       $email = htmlspecialchars($_POST['email']);
       $message = htmlspecialchars($_POST['message']);

       // Check Required Fields
       if(!empty($email) && !empty($name) && !empty($message)){
        // PASSED
        // Check Email
            if(filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
                // Failed
                $msg = 'Please use a valid email';
                $msgClass ='alert-danger';
            }
            else {
                // Passed
                $toEmail = 'winadiw@gmail.com';
                $subject = 'Contact Request From '.$name;
                $body = '<h2>Contact Request</h2>
                        <h4>Name</h4> <p>'.$name.'</p>
                        <h4>Email</h4> <p>'.$email.'</p>
                        <h4>Message</h4> <p>'.$message.'</p>';

                $headers =  'MIME-Version: 1.0' . "\r\n"; 
                $headers .= 'From: '.$name. '<'.$email.'>'."\r\n";
                $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 

                if(mail($toEmail, $subject, $body, $headers)) {
                    // Email Sent
                    $msg = 'Your email has been sent!';
                    $msgClass ='alert-success';
                    $_POST = array();  
                } else {
                     // Failed
                     $msg = 'Your email was not sent!';
                     $msgClass ='alert-danger';
                }
            }
       } else {
        //FAILED
            $msg = 'Please fill in all fields';
            $msgClass ='alert-danger';
       }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contact Us</title>
    <link rel="stylesheet" href="https://bootswatch.com/4/cosmo/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <a href="index.php" class="navbar-brand">My Website</a>
            </div>
        </div>
    </nav>
    <div class="container">
        <?php if($msg != ''): ?>
            <div class="alert <?php echo $msgClass; ?>"> 
                <?php echo $msg;?>
            </div>
        <?php endif; ?>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="contactform">
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" class="form-control" value="<?php echo isset($_POST['name']) ? $name : ''; ?>">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="text" name="email" class="form-control" value="<?php echo isset($_POST['email']) ? $email : ''; ?>">
            </div>
            <div class="form-group">
                <label>Message</label>
                <textarea name="message" class="form-control"><?php echo isset($_POST['message']) ? $message : ''; ?></textarea>
            </div>
            <br>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>