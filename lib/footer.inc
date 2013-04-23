<?

function display_footer(){

?>    

    <!-- Footer -->
    <div class="row-fluid footer">
        <div class="span3">
            <h4 class="footerheader">Get Connected!</h4>
            <p class="zen">
                <a href="http://www.facebook.com/SummerTechSeries"><img src="assets/icons/facebook.png" alt="Facebook!" class="img-polaroid footericon" /></a>
                <a href="http://www.twitter.com/SummrTechSeries"><img src="assets/icons/twitter.png" alt="Twitter!" class="img-polaroid footericon" /></a>
            </p>
            <p class="zen">
                <a href="https://www.github.com/TheBrockEllis/SummerTechSeries" alt="github Repo"><img src="assets/icons/github.png" alt="Github!" class="img-polaroid footericon" /></a>
                <img src="assets/icons/youtube.png" alt="YouTube!" class="img-polaroid footericon" />
            </p>
        </div>
        <div class="span3">
            <h4 class="footerheader">About Sycamore Leaf</h4>
            <p class="footertext">
            Sycamore Leaf Solutions is a provider of educational information
            systems located in Fremont, NE. They absolutely love Fremont's
            small town atmosphere and believe that it can be a hub of tech
            minded individuals in the future.
            </p>
        </div>
        <div class="span3">
            <h4 class="footerheader">About First State Bank</h4>
            <p class="footertext">
            First State Bank and Trust has been in business
            for over 55 years and Fremont's only 100% locally owned community 
            bank. Investing in Fremont is more than their tagline and they're 
            partnership and help in the Summer Tech Series is proof of that.
            </p>
        </div>
        <div class="span3">
            <h4 class="footerheader">About Midland University</h4>
            <p class="footertext">
            Midland University is located in Fremont, NE and is the fastest 
            growing education institution in the state. 
            Midland hosts numerous community related events on their beautiful
            campus every year and is proud to be a part of the Summer Tech
            Series.
            </p>
        </div>
    </div>
    <!-- /Footer -->

    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="lib/bootstrap/js/bootstrap.min.js"></script>
    <script>
    $('document').ready(function(){
        $(".collapse").collapse();

        $(".footericon").mouseover(function(){

            $(this).addClass("footericon_hover");

        }).mouseout(function(){

            $(this).removeClass("footericon_hover");

        });
    });
    </script>

</body>
</html>


<?

}

?>
