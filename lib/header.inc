<? 

function display_header($link){
?>
   <!-- Navbar -->
    <div class="navbar navbar-static-top">
        <div class="navbar-inner">
            <a class="brand" href="index">Summer Tech Series</a>
            <ul class="nav">
                <?php
                if($link == 1) echo '<li class="active"><a href="index.php">Home</a></li>';
                else echo '<li><a href="index">Home</a></li>';

                if($link == 2) echo '<li class="active"><a href="accelerator.php">Grow</a></li>';
                else echo '<li><a href="accelerator">Grow</a></li>';

                if($link == 3) echo '<li class="active"><a href="bootcamp.php">Learn</a></li>';
                else echo '<li><a href="bootcamp">Learn</a></li>';

                if($link == 4) echo '<li class="active"><a href="hackathon.php">Create</a></li>';
                else echo '<li><a href="hackathon">Create</a></li>';
                ?>
            </ul>
            <a href="contactus" alt="Questions?" class="btn btn-success pull-right">Questions?</a>
            <ul class="nav pull-right">
                <?php if($link == 5) echo '<li class="active"><a href="faqs">FAQs</a></li>';
                else echo '<li><a href="faqs">FAQs</a></li>'; ?>
                
                <?php if($link == 6) echo '<li class="active"><a href="rules">Rules</a></li>';
                else echo '<li><a href="rules">Rules</a></li>'; ?>
            </ul>
        </div>
    </div>
    <!-- /Navbar -->

<?
}
?>