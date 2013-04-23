<?
require_once("lib/header.inc");
require_once("lib/footer.inc");
?>

<!DOCTYPE html>
<html>
<head>
    <title>CREATE - Summer Tech Series</title>
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

    <div class="container-narrow">

    <div class="jumbotron">
        <h1>There is nothing like creating something from nothing.</h1>
        <p class="lead">
            If you already know how to code or have a great idea that involves some
            coding work, the hackathon is the place to be!
        </p>
        <a class="btn btn-large btn-success" href="rsvptoday">RSVP Right Now!</a>
    </div>

    <div class="row-fluid marketing">
        <div class="span6">
            <h2>Excitment</h2>
            <p>There is nothing like seeing your concept go from whiteboard to market in 48 hours.</p>

            <h2>Collaboration</h2>
            <p>Working in small teams means your project can be dynamic and agile.</p>

            <h2>Freedom</h2>
            <p>Idea for a website? A web service? An app? Doesn't matter what it is- just make it!</p>
        </div>

        <div class="span6">    
            <h2>Hybrid</h2>
            <p>Even if you don't know how to code, you can still contribute to the team with your business skillz.</p>
    
            <h2>Fun</h2>
            <p>Pizza, energy drinks and a laptops. Those three items have never been not fun together.</p>    

            <h2>Yours</h2>
            <p>You own your creation. If it has a market, you could make some real, cold, hard cash!</p>        
        </div>
    </div>

    </div>
    
    <div class="container" class="rules_container">
        <h1 class="rules_header">Rules & Logistics</h1>
        
        <h3><img src="assets/icons/enter.png" class='rules_image' alt="The Gathering" /> The Gatherings</h3>
        <p>
            Everyone that wants to participate in the hackathon will meet at the Sycamore Leaf Solutions
            headquarters (321 E. Military Ave) at 6pm on Friday evening. Please park in the back or use
            the overflow parking lot on Main and Broad (across from Runza) if the parking lot is full.
        </p>
        
        <h3><img src="assets/icons/bubbles4.png" class='rules_image' alt="The Pitching" /> The Pitching</h3>
        <p>
            "Idea Men" - the guys who have the ideas for the projects will each get 5 minutes to explain
            their vision and try to get coders to work with them. They will have access to a projector and
            laptop if they want to show some sketches or examples. 
        </p>
        
        <h3><img src="assets/icons/link.png" class='rules_image' alt="The Grouping" /> The Grouping</h3>
        <p>
            After all the ideas have been heard, teams will form up around the ideas. Each team
            will come up with a team name and be assigned a Git repo to keep their code. There
            is no limit to minimum amount of people on a team. If you're the only person who wants
            to work on an idea, if you think you can get it done, more power to you! There must be,
            however, <em>at least</em> two teams for any prizes to be awarded.
        </p>
        
        <h3><img src="assets/icons/keyboard.png" class='rules_image' alt="The Hacking" /> The Hacking</h3>
        <p>
            The next 48 hours will be a blur of typing, pizza eating and Redbull drinking. Your
            projects can be written in any coding language you wish to use (make sure your whole
            team is on the same page...) We will encourage small cat-naps, restroom breaks
            and trips for fresh air.
            <br />
            No production ready materials will be allowed. Do not work on any images, code snippets,
            or logic beforehand. Using assets that have been worked on ahead of time is grounds for
            disqualification. Please commit to your repo early and often as they will be monitored
            throughout the two days event.
            <br />
            All the code that is produced during the event is owned by the originator. We're not
            here to steal your ideas. We just want the ideas to come to fruition and to have fun.
        </p>
        
        <h3><img src="assets/icons/trophy.png" class='rules_image' alt="The Judging" /> The Judging</h3>
        <p>
            At 6pm on Sunday night each team will have an opportunity to present their project. You
            can use this time to demonstrate what it does, describe who would use it and how you would
            market it to them, as well as explain the revenue model if there is one.
            <br />
            The judges will be looking at the following criteria when picking a winner:
            <ul>
                <li>Originality</li>
                <li>UI / Ease of Use</li>
                <li>Completeness</li>
                <li>Usefulness</li>
            </ul>
            The winning team will be the winner of ____to be determined____.
        </p>
        
    </div>
    
    <div class="container-narrow">
    
    <h1 class="faq_header">Frequently Asked Questions</h1>

    <div class="accordion" id="accordion2">

    <div class="accordion-group">
        <div class="accordion-heading">
            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
            Isn't 'hacking' illegal?
            </a>
        </div>
        <div id="collapseOne" class="accordion-body collapse in">
            <div class="accordion-inner">
                <p>
                Yes, hacking is illegal. But that isn't what a hackathon is. In the programming world,
                a hacker is
                <blockquote>"A person who enjoys exploring the details of programmable systems and stretching their capabilities, as opposed to most users, who prefer to learn only the minimum necessary."</blockquote>
                So, by extension, a hackathon is an event where a GROUP of people who enjoy programming get together to make awesome things.
                </p>
            </div>
        </div>
    </div>
    
    <div class="accordion-group">
        <div class="accordion-heading">
            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
            Why would someone want to go to a hackathon?
            </a>
        </div>
        <div id="collapseTwo" class="accordion-body collapse in">
            <div class="accordion-inner">
                <p>
                Have you ever witnessed something impressive being created overnight? If not, you should want to come.
                Hackathons let people:
                <ul>
                    <li>hone their technical skills</li>
                    <li>network with other area computer geeks</li>
                    <li>learn about new technologies and strategies and</li>
                    <li>maybe even win some cool prizes!</li>
                </ul> 
                </p>
            </div>
        </div>
    </div>

    <div class="accordion-group">
        <div class="accordion-heading">
            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#collapseThree">
            What if I don't have any great ideas / don't know how to code?
            </a>
        </div>
        <div id="collapseThree" class="accordion-body collapse in">
            <div class="accordion-inner">
                <p>
                    Even if you don't know how to code, you can still participate and be a crucial part
                    of a team. Maybe you can use your business prowess to help design the marketing plan.
                    Maybe you can doctor up some photos or images to use in the app. Maybe you can help
                    walk through the logic with the coders and help make decisions. This is a hybrid
                    business/technology event- there will always be a way to contribute!
                </p>
            </div>
        </div>
    </div>

    <div class="accordion-group">
        <div class="accordion-heading">
            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#collapseFour">
            What do I need to bring to the hackathon?
            </a>
        </div>
        <div id="collapseFour" class="accordion-body collapse in">
            <div class="accordion-inner">
                <p>
                A laptop, some energy drinks and your GREAT ideas!
                </p>
            </div>
        </div>
    </div>

    <div class="accordion-group">
        <div class="accordion-heading">
            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#collapseFive">
            Do I have to pre-organize a team?
            </a>
        </div>
        <div id="collapseFive" class="accordion-body collapse in">
            <div class="accordion-inner">
                <p>
                Not at all. You can always come to the event with a team in mind but all
                teams will be officially created on Saturday morning after 'The Pitching'.
                </p>
            </div>
        </div>
    </div>

    </div> <!-- end accordion -->
    
    </div> <!-- end container -->
    
    <?php display_footer(); ?>
