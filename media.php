<?
require_once("lib/header.inc");
require_once("lib/footer.inc");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Summer Tech Series</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="lib/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
    <!-- <link href="lib/bootstrap/css/bootstrap-cedar.css" rel="stylesheet" media="screen"> -->
    <link href="lib/custom.css" rel="stylesheet" media="screen">
</head>
<body>
    <?php include_once("lib/ga.php"); ?>
    <?php display_header(7); ?>

    <div class="container">

    <div class="tabbable" id="mediatabs"> <!-- Only required for left/right tabs -->
        <ul class="nav nav-tabs">
            <li class="active"><a href="#tab1" data-toggle="tab">Press Releases</a></li>
            <li><a href="#tab2" data-toggle="tab">Promotional Materials</a></li>
            <li><a href="#tab3" data-toggle="tab">Logos</a></li>
        </ul>
    
        <div class="tab-content">
            <div class="tab-pane active" id="tab1">
                
                <div class="accordion" id="accordion1">

                <div class="accordion-group">
                    <div class="accordion-heading">
                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#mediaOne">
                        Press Release - April 11th, 2013 
                        </a>
                    </div>
                    <div id="mediaOne" class="accordion-body collapse">
                        <div class="accordion-inner">
                            <?php echo file_get_contents("./assets/documents/PR411.html"); ?>
                        </div>
                    </div>
                </div>
        
                </div> <!-- end accordion1 -->

            </div>
            <div class="tab-pane" id="tab2">
                <ul class="thumbnails" id="promothumbnails">

                    <li class="span6">
                        <div class="thumbnail">
                            <a href="/assets/documents/STSMailer.pdf"
                            download="Summer Tech Series Mailer.pdf"
                            class="thumbnail">  
                                <img src="assets/images/PromoTrifoldThumb.jpg"
                                class="img-polaroid img-rounded"
                                title="TriFold Mailer" />
                            </a>
                            <h3>Tri-Fold Mailer</h3>
                            <p>This tri-fold was mailed out to area teachers in order to get the word out about the Summer Tech Series.</p>
                        </div>
                    </li>

                    <li class="span6">
                        <div class="thumbnail">
                            <a href="/assets/documents/STSOnePage.pdf"
                            download="Summer Tech Series One Page Flier.pdf"
                            class="thumbnail">                      
                                <img src="assets/images/PromoTrifoldThumb.jpg"
                                class="img-polaroid img-rounded"
                                title="One Page Flier" />
                            </a>                            
                            <h3>One Page Flier</h3>
                            <p>This single page flier was created to display in local businesses and establishments to promote the Summer Tech Series.</p>
                        </div>
                    </li>

                </ul>
            </div>


            <div class="tab-pane" id="tab3">
                <ul class="thumbnails" id="promothumbnails">
                    <li class="span4">
                        <a href="#" class="thumbnail">
                        <img src="assets/images/logobanner.png" title="Banner Logo" />
                        </a>
                    </li>

                    <li class="span4">
                        <a href="#" class="thumbnail">
                        <img src="assets/images/logolarge.png" title="Large Logo" />
                        </a>                    
                    </li>

                    <li class="span4">
                        <a href="#" class="thumbnail">
                        <img src="assets/images/logosmall.png" title="Small Logo" />
                        </a>
                    </li>
                <ul>
            </div>
        </div>
    </div>

    </div> <!-- end container -->

    <?php display_footer(); ?>

</body>
</html>