<?
require_once("lib/header.inc");
require_once("lib/footer.inc");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Drop Us A Line - Summer Tech Series</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="lib/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
    <!-- <link href="lib/bootstrap/css/bootstrap-cedar.css" rel="stylesheet" media="screen"> -->
    <link href="lib/custom.css" rel="stylesheet" media="screen">
</head>
<body>
    <?php include_once("lib/ga.php"); ?>
    <?php display_header(4); ?>

    <div class="container">

<?php
    require_once('lib/recaptchalib.php');
    $privatekey = "6Lf3It4SAAAAAAADFUdLnPcH-vRSy_Z-12nTfHd4";
    $resp = recaptcha_check_answer ($privatekey,
            $_SERVER["REMOTE_ADDR"],
            $_POST["recaptcha_challenge_field"],
            $_POST["recaptcha_response_field"]);

    if (!$resp->is_valid) {
        // What happens when the CAPTCHA was entered incorrectly
        print("The reCAPTCHA wasn't entered correctly. Go back and try it again." .
             "(reCAPTCHA said: " . $resp->error . ")");
    }else{
        // Your code here to handle a successful verification
        foreach($_POST as $key=>$value){
            $form[$key] = $value;
        }
    
        if($form['type'] == 1){
            //general contactus form
            $formtype = 'Drop Us A Line';
            $intcount = count($form['interest']);
            switch ($intcount){
                case 1:
                $intstatement = $form['interest'][0] . "!";
                break;
            
                case 2:
                $intstatement = $form['interest'][0] . " and the " . $form['interest'][1] . "!";
                break;
    
                case 3:
                $intstatement = $form['interest'][0] . " and the " . $form['interest'][1] . " and the " . $form['interest'][2] . "! WOW!";
                break;
            }

            print(" <div class='thankyou'> ");
            print(" <h1>Thank you!</h1> ");
            print(" <h1>You're awesome! <small>But you knew that already...</small></h1>");
            print(" <p> Thanks for filling out the form, " . $form['firstname'] . "</p> ");
            print(" <p> We're super excited that you're interested in the " . $intstatement . "</p> ");
            print(" <p>If it's cool with you, we'll shoot you an email here shortly just to chat and maybe answer a question or two. </p>");
            print(" </div> ");
    
            $to = "info@summertechseries.com";
            $subject = $formtype;
            $msg = "Name: " . $form['firstname'] . " " . $form['lastname'] . " (" . $form['email'] . ")\n\n";
            $msg .= "Address: " . $form['address'] . ", " . $form['city'] . " " . $form['state'] . "\n\n" ;
            $msg .= "Interested in: " . $intstatement . "\n\n";
            $msg .= "Question: " . $form['question'];
            $msg = wordwrap($msg, 80);
            $mail = mail($to, $subject, $msg);

        }elseif($form['type'] == 2){
            //accelerator form
            print(" <div class='thankyou'> ");
            print(" <h1>Thank you!</h1> ");
            print(" <h1>You're awesome! <small>But you knew that already...</small></h1>");
            print(" <p> Thanks for applying to the accelerator program, " . $form['firstname'] . "</p> ");
            print(" <p> We're super excited that you're interested in starting your own business!</p> ");
            print(" <p>If it's cool with you, we'll shoot you an email here shortly just to chat and maybe answer a question or two. </p>");
            print(" </div> ");
            
            $to = "info@summertechseries.com";
            $subject = "Accelerator Form";
            $msg = "Name: " . $form['firstname'] . " " . $form['lastname'] . " (" . $form['email'] . ")\n\n";
            $msg .= "Address: " . $form['address'] . ", " . $form['city'] . " " . $form['state'] . "\n\n" ;
            $msg .= "Business Idea: " . $form['businessidea'] . "\n\n";
            $msg = wordwrap($msg, 80);
            $mail = mail($to, $subject, $msg);

        }elseif($form['type'] == 3){
            //bootcamp form
            print(" <div class='thankyou'> ");
            print(" <h1>Thank you!</h1> ");
            print(" <h1>You're awesome! <small>But you knew that already...</small></h1>");
            print(" <p> Thanks for applying to the accelerator program, " . $form['firstname'] . "</p> ");
            print(" <p> We're super excited that you're interested in learning how to code!</p> ");
            print(" <p>If it's cool with you, we'll shoot you an email here shortly just to chat and maybe answer a question or two. </p>");
            print(" </div> ");
            
            $to = "info@summertechseries.com";
            $subject = "Bootcamp Form";
            $msg = "Name: " . $form['firstname'] . " " . $form['lastname'] . " (" . $form['email'] . ")\n\n";
            $msg .= "Address: " . $form['address'] . ", " . $form['city'] . " " . $form['state'] . "\n\n" ;
            $msg .= "Reason wanting to learn to code: " . $form['reason'] . "\n\n";
            $msg = wordwrap($msg, 80);
            $mail = mail($to, $subject, $msg);

        }elseif($form['type'] == 4){
            //hackathon form
            print(" <div class='thankyou'> ");
            print(" <h1>Thank you!</h1> ");
            print(" <h1>You're awesome! <small>But you knew that already...</small></h1>");
            print(" <p> Thanks for applying to the accelerator program, " . $form['firstname'] . "</p> ");
            print(" <p> We're super excited that you're interested in participating in the hackathon!</p> ");
            print(" <p>If it's cool with you, we'll shoot you an email here shortly just to chat and maybe answer a question or two. </p>");
            print(" </div> ");
            
            $to = "info@summertechseries.com";
            $subject = "Hackathon Form";
            $msg = "Name: " . $form['firstname'] . " " . $form['lastname'] . " (" . $form['email'] . ")\n\n";
            $msg .= "Address: " . $form['address'] . ", " . $form['city'] . " " . $form['state'] . "\n\n" ;
            $msg = wordwrap($msg, 80);
            $mail = mail($to, $subject, $msg);
        }

    }
?>

    </div>

    <?php display_footer(); ?>

