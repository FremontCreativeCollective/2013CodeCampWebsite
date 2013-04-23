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
    <?php display_header(1); ?>

    <!-- Slider -->
    <div id="frontslider" class="carousel slide">
        <ol class="carousel-indicators">
            <li data-target="#frontslider" data-slide-to="0" class="active"></li>
            <li data-target="#frontslider" data-slide-to="1"></li>
            <li data-target="#frontslider" data-slide-to="2"></li>
            <li data-target="#frontslider" data-slide-to="3"></li>
        </ol>
        <!-- Carousel items -->
        <div class="carousel-inner">

            <div class="active item">
                <img src='assets/images/frontslider/fremont.jpg' alt="Welcome to Fremont's Summer Tech Series!" />
                <div class="carousel-caption">
                    <h1 class="sliderheader">Welcome to Fremont's Summer Tech Series!</h1>
                    <p>Sponsored by Sycamore Leaf Solutions and First State Bank and Trust!</p>
                </div>
            </div>
                
            <div class="item">
                <img src='assets/images/frontslider/fremont1.jpg' alt="Welcome to Fremont's Summer Tech Series!" />
                <div class="carousel-caption">
                    <h1 class="sliderheader">Grow Your Own Business</h1>
                    <p>Summer Accelerator allows high school or college age students to grow their own business from concept to market!</p>                            </div>
            </div>

            <div class="item">
                <img src='assets/images/frontslider/fremont2.jpg' alt="Welcome to Fremont's Summer Tech Series!" />
                <div class="carousel-caption">
                    <h1 class="sliderheader">Learn Awesome Skills</h1>
                    <p>Take part in our 5 days Coding Bootcamp and take away some awesome, marketable skills!</p>
                </div>
            </div>

            <div class="item">
                <img src='assets/images/frontslider/fremont3.jpg' alt="Welcome to Fremont's Summer Tech Series!" />
                <div class="carousel-caption">
                    <h1 class="sliderheader">Create Something From Nothing</h1>
                    <p>Get together with others in our Hackathon to develop products from concept to creation!</p>
                </div>
            </div>

        </div>
        <!-- Carousel nav -->
        <a class="carousel-control left" href="#frontslider" data-slide="prev">&lsaquo;</a>
        <a class="carousel-control right" href="#frontslider" data-slide="next">&rsaquo;</a>
    </div>
    <!-- /Slider -->

    <!-- Three Icons -->
    <div class="container-fluid">
        <div class="page-header">
            <h1 id="tagline">Summer Tech Series <br /><small>Bringing the cutting edge of tech to Fremont</small></h1>
        </div>
        
        <div class="row-fluid">
            <div class="span4">
                <div class="frontimagebox">
                    <img class="frontimages" src="assets/images/businessplan.png" alt="Business Plan" />
                </div>
                <h2> Grow </h2>
                <p class="frontparagraphs">
                    The Summer Tech Series Accelerator program is aimed at high
                    school or college aged students who are interested in one
                    day starting their own business. We will take them through
                    the entire process of becoming an entrepreneur; creating
                    a business plan, developing a product and setting up a
                    marketing strategy. This is a competitive experience and only the
                    best and brightest ideas will become reality!
                </p>
            </div>
            <div class="span4">
                <div class="frontimagebox">
                    <img class="frontimages" src="assets/images/editor.png" alt="Business Plan" />
                </div>                    
                <h2> Learn </h2>
                <p class="frontparagraphs">
                    Unemployment rates are still at record highs even though the
                    United States has more Software and Web Development jobs
                    available than ever before! During this intense, 5 day bootcamp
                    you will learn the basics of computer programming and be able
                    to walk away with a solid understanding of core concepts and
                    principals. Great for students who are looking are programming
                    as a career or older folks who want to change careers!
                </p>
            </div>
            <div class="span4">
                <div class="frontimagebox">                
                    <img class="frontimages" src="assets/images/whiteboard.png" alt="Business Plan" />
                </div>                
                <h2> Create </h2>
                <p class="frontparagraphs">
                    Nothing brings out the best in people better than a little
                    friendly competition. If you know how to code, or maybe you
                    just have a great idea for a website or app, show up to our
                    2 day hack-a-thon! This event will team up business minds
                    with technical ninjas to create, invent or develop a product
                    or service from scratch! Grab your laptop and some RedBull
                    because it's going to be a crazy 48 hours!
                </p>
            </div>
        </div>

        <div class="row-fluid" id="ctabutton">
            <div class="span4">
                <div class="btn-group">
                    <a href="accelerator" class="btn" type="button">Learn More!</a>
                    <a href="applynow" class="btn btn-success" type="button">Apply Now!</a>
                </div>
            </div>
            <div class="span4">
                <div class="btn-group">
                    <a href="bootcamp" class="btn" type="button">Learn More</a>
                    <a href="signup" class="btn btn-success" type="button">Sign Up!</a>
                </div>            
            </div>
            <div class="span4">
                <div class="btn-group">
                    <a href="hackathon" class="btn" type="button">Learn More</a>
                    <a href="rsvptoday" class="btn btn-success" type="button">RSVP Today!</a>
                </div>            
            </div>
        </div>
    </div><!-- container -->
    <!-- /Three Icons -->

    <!-- Sponsors -->
    <div class="container-fluid" id="frontsponsors"> 
        <div class="row-fluid">
            <div class="span1"></div>
            <div class="span5">
                <h1 class="sponsorheader">Sponsors
                    <a href="sponsor.html">
                        <small style="padding-left: 15px; font-size: small;">Want to sponsor us?</small>
                    </a>                
                </h1>
            </div>
            <div class="span5">
            </div>
            <div class="span1"></div>
        </div>

        <div class="row-fluid">
            <div class="span4">
                <p class="zen">
                    <a href="http://www.sycamoreleaf.com" alt="Sycamore Leaf Solutions"><img src="assets/images/SLS.png" class="sponsorimage img-polaroid" alt="First State Bank and Trust" /></a>
                </p>
            </div>
            <div class="span4">
                <p class="zen">
                    <a href="http://www.firststatebankandtrust.com" alt="First State Bank and Trust"><img src="assets/images/FSBT.gif" class="sponsorimage img-polaroid" alt="First State Bank and Trust" /></a>
                </p>
            </div>
            <div class="span4">
                <p class="zen">
                    <a href="http://www.midlandu.edu" alt="Midland University"><img src="assets/images/midland.png" class="sponsorimage img-polaroid" alt="Midland University" /></a>
                </p>
            </div>
        </div>
    </div><!-- container -->
    <!-- /Sponsors -->

    <?php display_footer(); ?>

        <script src="http://code.jquery.com/jquery.js"></script>
        <script src="lib/bootstrap/js/bootstrap.min.js"></script>
        <script>
        $('document').ready(function(){
            $('.carousel').carousel();
        });
        </script>
    </div>
</body>
</html>
