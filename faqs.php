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
    <?php display_header(5); ?>

    <div class="container-narrow">
        
        <h1 class="rules_header">Frequently Asked Questions</h1>

        <h2>Accelerator</h2>

        <div class="accordion" id="accordion1">

        <div class="accordion-group">
            <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseOne">
                I have a great idea for a business but there is already a service/product
                out there that does almost the same thing.
                </a>
            </div>
            <div id="collapseOne" class="accordion-body collapse in">
                <div class="accordion-inner">
                    <p>
                    Part of being a successful business is sharing your story with your potential
                    customers. When you look at all the competitors in your market, you will learn
                    to accept that there are a lot of similarities and focus on what makes you different.
                    </p>
                </div>
            </div>
        </div>

        <div class="accordion-group">
            <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseTwo">
                I have a million dollar idea but I'm lazy. Can I just sell it to you?
                </a>
            </div>
            <div id="collapseTwo" class="accordion-body collapse in">
                <div class="accordion-inner">
                    <p>
                    No, you may not. Million dollar ideas are a dime a dozen. In fact, I thought
                    of 4 of them while in the shower this morning. What <strong>REALLY</strong>
                    matters is the execution of those ideas. And to execute properly, you can't be
                    lazy. Have a great summer! *waves*
                    </p>
                </div>
            </div>
        </div>

        <div class="accordion-group">
            <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseThree">
                I want to apply but I get nervous when giving presentations.
                </a>
            </div>
            <div id="collapseThree" class="accordion-body collapse in">
                <div class="accordion-inner">
                    <p>
                    Don't let that keep you from applying. We can always look past the stutters
                    and excessive sweat. If you've got a good head on your shoulders, a good idea
                    and the work ethic to succeed, you're golden.
                    </p>
                </div>
            </div>
        </div>

        <div class="accordion-group">
            <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseFour">
                So, what are the steps to participate again?
                </a>
            </div>
            <div id="collapseFour" class="accordion-body collapse in">
                <div class="accordion-inner">
                    <p>
                    <ol>
                    <li>Fill out online application to get started</li>
                    <li>If invited, prepare 5 minute presentation to give the investors</li>
                    <li>If accepted, show up a few days a week to get paid and work on your business</li>
                    </ol>
                    <br />
                    Please understand that this is a competetive event. There will only be a select few entries
                    that are selected to present and even fewer that are chosen to begin work. As much as we'd
                    like to give everyone a medal, we won't.
                    </p>
                </div>
            </div>
        </div>

        <div class="accordion-group">
            <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseFive">
                Do I have to have any prior experience to participate?
                </a>
            </div>
            <div id="collapseFive" class="accordion-body collapse in">
                <div class="accordion-inner">
                    <p>
                    Not at all. Throughout this experience, you will be taught how to develop your product
                    or serivce, do market research, generate a sales and/or pricing structure and market
                    effectively to your target audienc. No experience required. Just a good idea and a strong
                    work ethic.
                    </p>   
                </div>
            </div>
        </div>

    </div> <!-- end accordion1 -->

    <h2> Dev Bootcamp </h2>

    <div class="accordion" id="accordion2">

    <div class="accordion-group">
        <div class="accordion-heading">
            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse2One">
            I want to learn how to code but can't afford the price tag.
            </a>
        </div>
        <div id="collapse2One" class="accordion-body collapse in">
            <div class="accordion-inner">
                <p>
                No problemo. Just contact us and let us know. Scholarships are available
                and we will do whatever we can to you involved.
                </p>
            </div>
        </div>
    </div>
    
    <div class="accordion-group">
        <div class="accordion-heading">
            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse2Two">
            I have a short attention span and don't think I can learn all of this in one week.
            </a>
        </div>
        <div id="collapse2Two" class="accordion-body collapse in">
            <div class="accordion-inner">
                <p>
                We're not going to lie, this bootcamp is going to be intense. We're aiming to introduce
                you to the major concepts of programming and in no means are we saying you have to be
                an expert in anything when you leave. If you kindle your curiousity and you go home
                after the bootcamp and do some tinkering and Google'ing on your own, we'll consider that
                a success for us.
                </p>
            </div>
        </div>
    </div>

    <div class="accordion-group">
        <div class="accordion-heading">
            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#collapse2Three">
            There are ways we can learn to code online- for free. What gives?!
            </a>
        </div>
        <div id="collapse2Three" class="accordion-body collapse in">
            <div class="accordion-inner">
                <p>
                This is true. Sites like Codecademy.com, TeamTreehouse.com or the Khan Academy
                allow you to learn how to code online for free. If you're the type of person who
                can be self moticated enough to sit down and learn to code by youself, that's
                awesome! This bootcamp is really aimed toward people who need a more collaborative,
                structured environment.
                </p>
            </div>
        </div>
    </div>

    <div class="accordion-group">
        <div class="accordion-heading">
            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#collapse2Four">
            What do I need to bring to the bootcamp?
            </a>
        </div>
        <div id="collapse2Four" class="accordion-body collapse in">
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
            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#collapse2Five">
            Do I have to have any prior experience to participate?
            </a>
        </div>
        <div id="collapse2Five" class="accordion-body collapse in">
            <div class="accordion-inner">
                <p>
                Not at all. All that we're going to assume is that you know how to run the
                computer, you know how to run a word processor (like Microsoft Word) and you
                know how to navigate the Internet. With those skills in hand, you can succeed. 
                </p>
            </div>
        </div>
    </div>

    </div> <!-- end accordion2 -->

    <h2> Hackathon </h2>

    <div class="accordion" id="accordion3">

    <div class="accordion-group">
        <div class="accordion-heading">
            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#collapse3One">
            Isn't 'hacking' illegal?
            </a>
        </div>
        <div id="collapse3One" class="accordion-body collapse in">
            <div class="accordion-inner">
                <p>
                Yes, hacking is illegal. But that isn't what a hackathon is. In the programming world,
                a hacker is
                <blockquote>"A person who enjoys exploring the details of programmable systems and stretching their capabilities, as opposed to most users, who prefer to learn only the minimum necessary."</blockquote>
                So, by extension, a hackathon is an event where a GROUP of people who enjoy programing get together to make awesome things.
                </p>
            </div>
        </div>
    </div>
    
    <div class="accordion-group">
        <div class="accordion-heading">
            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#collapse3Two">
            Why would someone want to go to a hackathon?
            </a>
        </div>
        <div id="collapse3Two" class="accordion-body collapse in">
            <div class="accordion-inner">
                <p>
                Have you ever witnessed something imperssive being created overnight? If not, you should want to come.
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
            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#collapse3Three">
            What if I don't have any great ideas / don't know how to code?
            </a>
        </div>
        <div id="collapse3Three" class="accordion-body collapse in">
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
            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#collapse3Four">
            What do I need to bring to the hackathon?
            </a>
        </div>
        <div id="collapse3Four" class="accordion-body collapse in">
            <div class="accordion-inner">
                <p>
                A laptop, some energy drinks and your GREAT ideas!
                </p>
            </div>
        </div>
    </div>

    <div class="accordion-group">
        <div class="accordion-heading">
            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#collapse3Five">
            Do I have to pre-organize a team?
            </a>
        </div>
        <div id="collapse3Five" class="accordion-body collapse in">
            <div class="accordion-inner">
                <p>
                Not at all. You can always come to the event with a team in mind but all
                teams will be officially created on Saturday morning after 'The Pitching'.
                </p>
            </div>
        </div>
    </div>

    </div> <!-- end accordion3 -->

    </div> <!-- end container -->

    <?php display_footer(); ?>

</body>
</html>