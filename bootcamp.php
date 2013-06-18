<?
require_once("lib/header.inc");
require_once("lib/footer.inc");
?>

<!DOCTYPE html>
<html>
<head>
    <title>LEARN - Summer Tech Series</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="lib/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
    <!-- <link href="lib/bootstrap/css/bootstrap-cedar.css" rel="stylesheet" media="screen"> -->
    <link href="lib/custom.css" rel="stylesheet" media="screen">
</head>
<body>
    <?php include_once("lib/ga.php"); ?>
    <?php display_header(3); ?>

    <div class="container-narrow">

    <div class="jumbotron">
        <h1>150,000 technology jobs are created <em>EVERY</em> year</h1>
        <p class="lead">
            If you're looking at programming as a career our 5 day coding
            bootcamp can give you the insight you need to make a decision.
        </p>
        <a class="btn btn-large btn-success" href="signup">Sign Up Today!</a>
    </div>

    <div class="row-fluid marketing">
        <div class="span6">
            <h2><del>Experience</del></h2>
            <p>Don't know the first thing about coding? No problem! No experience necessary.</p>

            <h2>Flexible</h2>
            <p>Our instruction and workgroup time lets you work at your own pace.</p>

            <h2>Proof</h2>
            <p>Develop your own web-based application and have something to call your own!</p>
        </div>

        <div class="span6">    
            <h2>The Web</h2>
            <p>Learn about the technologies that power the world wide web and are applicable just about anywhere!</p>
    
            <h2>Cheap</h2>
            <p>**FREE** gets you 5 days of instruction & mentorship, plus you will walk away with a project all your own.</p>    

            <h2>Building Blocks</h2>
            <p>You'll become an "excellent beginner" in things like HTML, CSS and Javascript.</p>        
        </div>
    </div>

    </div>

    <div class="container" class="rules_container">
        <h1 class="rules_header">Rules & Logistics</h1>
        
        <h3><img src="assets/icons/calendar.png" class='rules_image' alt="When" /> Summer time is busy.</h3>
        <p>
            We know this. That is why we're attempting to make participating in this bootcamp
            as easy as possible. The Development Bootcamp will run the week of July 13th.
            We will offer two periods of instruction each day; 9:00AM to 12:00PM
            as well as 2:00PM to 5:00PM. We hope that offering two different time slots will help
            those who have a busy schedule join in the fun.
        </p>
        
        <h3><img src="assets/icons/shocked.png" class='rules_image' alt="Babysitting" /> We aren't a babysitting service...</h3>
        <p>
            This bootcamp is going to be intense. If you <em>really</em> don't want to be here,
            it will be a struggle. 
            We're going to be covering a lot of content very quickly and we expect you to be engaged
            and active while you're present.
        </p>
        
        <h3><img src="assets/icons/cool.png" class='rules_image' alt="Fun" /> but we will have fun.</h3>
        <p>
            That last bullet point was a bit harsh. Please know that it is our desire to make
            learning how to code fun and exciting. The instruction time will include 'lectures',
            group projects and competitions- just to keep everyone on their toes.
        </p>
        
        <h3><img src="assets/icons/target.png" class='rules_image' alt="Aim" /> Our aim is to be passionate.</h3>
        <p>
            Make no mistake about it- when you complete the bootcamp you will be well versed and
            familiar with many crucial programming concepts. However, one of the amazing things about
            coding is that there is often multiple ways to solve the main problem. We're going to aim
            to educate you about the essentials in the easiest way possible. We may not be perfect,
            but we're passionate.
        </p>
               
        <h3><img src="assets/icons/book.png" class='rules_image' alt="Learnings" /> What you'll learn:</h3>
        <p>
            Only <strong>YOU</strong> can decide what you will learn, but the material that we will
            talk about will cover the basic building blocks of the web.
            <br />
            The topics that will be covered, even if ever so briefly:
            <ul>
                <li>HTML - the structure of the web</li>
                <li>CSS - making things stylish</li>
                <li>JavaScript - giving your site some attitude</li>
                <li>L.A.M.P. - and not the kind that needs a lightbulb</li>
            </ul>
        </p>
        
    </div>
    
    <div class="container-narrow">
    
    <h1 class="faq_header">Frequently Asked Questions</h1>
    
    <div class="accordion" id="accordion2">

    <div class="accordion-group">
        <div class="accordion-heading">
            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
            I want to learn how to code but can't afford the price tag.
            </a>
        </div>
        <div id="collapseOne" class="accordion-body collapse in">
            <div class="accordion-inner">
                <p>
                No problemo. Just contact us and let us know. Scholarships are available
                and we will do whatever we can to get you involved.
                </p>
            </div>
        </div>
    </div>
    
    <div class="accordion-group">
        <div class="accordion-heading">
            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
            I have a short attention span and don't think I can learn all of this in one week.
            </a>
        </div>
        <div id="collapseTwo" class="accordion-body collapse in">
            <div class="accordion-inner">
                <p>
                We're not going to lie, this bootcamp is going to be intense. We're aiming to introduce
                you to the major concepts of programming and by no means are we saying you have to be
                an expert in anything when you leave. If we kindle your curiosity and you go home
                after the bootcamp and do some tinkering and Google'ing on your own, we'll consider that
                a success for us.
                </p>
            </div>
        </div>
    </div>

    <div class="accordion-group">
        <div class="accordion-heading">
            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#collapseThree">
            There are ways we can learn to code online- for free. What gives?!
            </a>
        </div>
        <div id="collapseThree" class="accordion-body collapse in">
            <div class="accordion-inner">
                <p>
                This is true. Sites like Codecademy.com, TeamTreehouse.com or the Khan Academy
                allow you to learn how to code online for free. If you're the type of person who
                can be self motivated enough to sit down and learn to code by yourself, that's
                awesome! This bootcamp is really aimed toward people who need a more collaborative,
                structured environment.
                </p>
            </div>
        </div>
    </div>

    <div class="accordion-group">
        <div class="accordion-heading">
            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#collapseFour">
            What do I need to bring to the bootcamp?
            </a>
        </div>
        <div id="collapseFour" class="accordion-body collapse in">
            <div class="accordion-inner">
                <p>
                If you have a laptop that you can bring, bring it. The great thing about web technologies
                is that programs we will use are not large or intensive. You don't need a 1k dollar Macbook.
                An old, under-powered laptop may work just fine.
                <br />
                If you do not have a laptop available to bring, please let us know ahead of time so
                that we can try and secure one for you to use during the week.
                </p>
            </div>
        </div>
    </div>

    <div class="accordion-group">
        <div class="accordion-heading">
            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#collapseFive">
            Do I have to have any prior experience to participate?
            </a>
        </div>
        <div id="collapseFive" class="accordion-body collapse in">
            <div class="accordion-inner">
                <p>
                Not at all. All that we're going to assume is that you know how to run the
                computer, you know how to run a word processor (like Microsoft Word) and you
                know how to navigate the Internet. With those skills in hand, you can succeed. 
                </p>
            </div>
        </div>
    </div>

    </div> <!-- end accordion -->
    
    </div> <!-- end container -->

    <?php display_footer(); ?>
