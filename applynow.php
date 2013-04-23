<?
require_once("lib/header.inc");
require_once("lib/footer.inc");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Accelerator Registration - Summer Tech Series</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="lib/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
    <!-- <link href="lib/bootstrap/css/bootstrap-cedar.css" rel="stylesheet" media="screen"> -->
    <link href="lib/custom.css" rel="stylesheet" media="screen">
</head>
<body>
    <?php include_once("lib/ga.php"); ?>
    <?php display_header(2); ?>

    <div class="container-narrow">
    
    <form class="form-horizontal" id="dropusaline" action='thankyou.php' method="POST" name="dropusaline"> 
    <input type="hidden" name="type" value=2 />    
    <fieldset>
        <div id="legend" class="">
            <legend class="">Accelerator Program - Registration</legend>
        </div>
        <div class="control-group">
            <label class="control-label" for="firstname">First Name</label>
            <div class="controls">
              <input type="text" placeholder="John" name="firstname" class="input-xlarge">
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="lastname">Last Name</label>
            <div class="controls">
                <input type="text" placeholder="Smith" name="lastname" class="input-xlarge">
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="address">Address</label>
            <div class="controls">
                <input type="text" placeholder="321 Main Street" name="address" class="input-xlarge">
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="city">City</label>
            <div class="controls">
                <input type="text" placeholder="Fremont" name="city" class="input-xlarge">
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="state">State</label>
            <div class="controls">
                <select placeholder="NE" name="state">
                    <option value="AL">Alabama</option>
                    <option value="AK">Alaska</option>
                    <option value="AZ">Arizona</option>
                    <option value="AR">Arkansas</option>
                    <option value="CA">California</option>
                    <option value="CO">Colorado</option>
                    <option value="CT">Connecticut</option>
                    <option value="DE">Delaware</option>
                    <option value="DC">District of Columbia</option>
                    <option value="FL">Florida</option>
                    <option value="GA">Georgia</option>
                    <option value="HI">Hawaii</option>
                    <option value="ID">Idaho</option>
                    <option value="IL">Illinois</option>
                    <option value="IN">Indiana</option>
                    <option value="IA">Iowa</option>
                    <option value="KS">Kansas</option>
                    <option value="KY">Kentucky</option>
                    <option value="LA">Louisiana</option>
                    <option value="ME">Maine</option>
                    <option value="MD">Maryland</option>
                    <option value="MA">Massachusetts</option>
                    <option value="MI">Michigan</option>
                    <option value="MN">Minnesota</option>
                    <option value="MS">Mississippi</option>
                    <option value="MO">Missouri</option>
                    <option value="MT">Montana</option>
                    <option selected value="NE">Nebraska</option>
                    <option value="NV">Nevada</option>
                    <option value="NH">New Hampshire</option>
                    <option value="NJ">New Jersey</option>
                    <option value="NM">New Mexico</option>
                    <option value="NY">New York</option>
                    <option value="NC">North Carolina</option>
                    <option value="ND">North Dakota</option>
                    <option value="OH">Ohio</option>
                    <option value="OK">Oklahoma</option>
                    <option value="OR">Oregon</option>
                    <option value="PA">Pennsylvania</option>
                    <option value="RI">Rhode Island</option>
                    <option value="SC">South Carolina</option>
                    <option value="SD">South Dakota</option>
                    <option value="TN">Tennessee</option>
                    <option value="TX">Texas</option>
                    <option value="UT">Utah</option>
                    <option value="VT">Vermont</option>
                    <option value="VA">Virginia</option>
                    <option value="WA">Washington</option>
                    <option value="WV">West Virginia</option>
                    <option value="WI">Wisconsin</option>
                    <option value="WY">Wyoming</option>
                </select>
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="email">Email</label>
            <div class="controls">
                <input type="text" name="email" placeholder="info@summertechseries.com" class="input-xlarge">
            </div>
        </div>

        <div class="control-group">
            <label class="control-label">My business idea is: </label>
            <div class="controls">
                <div class="textarea">
                    <textarea name="businessidea" type="" class="" style="margin-left: 0px; margin-right: 0px; width: 262px; height: 150px;"> </textarea>
                </div>
            <p class="help-block" style='font-size: 10px;'><em>Please keep your descripton fairly brief...</em></p> 
            </div>
        </div>

        <div class="control-group">
            <label class="control-label">Captcha to make sure you're a human... </label>
            <div class="controls">
                <?php
                    require_once('lib/recaptchalib.php');
                    $publickey = "6Lf3It4SAAAAAFNbHg5lQzNHNNdD8UdoXlHr3gR6"; 
                    echo recaptcha_get_html($publickey);
                ?>
            </div>
        </div> 

        <div class="control-group">
            <label class="control-label"></label>
            <div class="controls">
                <button class="btn btn-primary">Send It Off!</button>
            </div>
        </div>

    </fieldset>
    </form>

    </div>

    <?php display_footer(); ?>
