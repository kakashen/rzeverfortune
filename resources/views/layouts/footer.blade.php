<div class="footer">
    <div class="container">
        <p> Copyright &copy; Rizhao Everfortune Trading Co., Ltd. </p>
        <p> 日照莱珐贸易有限公司 </p>

        <div class="arrow">
            <a class="scroll" href="#home"><img src="images/top.png" alt=""></a>
        </div>
    </div>
</div>
<!---->

<a href="#home" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!---->

</body>

<script src="js/jquery.chocolat.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>


<script type="text/javascript">
    $(function () {
        $('.moments-bottom a').Chocolat();
    });
</script>

<script type="application/x-javascript"> addEventListener("load", function () {
        setTimeout(hideURLbar, 0);
    }, false);

    function hideURLbar() {
        window.scrollTo(0, 1);
    } </script>
<script src="js/jquery-1.11.1.min.js"></script>
<!--scrolling-->

<script type="text/javascript">
    $(document).ready(function () {
        /*
        var defaults = {
        containerID: 'toTop', // fading element id
        containerHoverID: 'toTopHover', // fading element hover id
        scrollSpeed: 1200,
        easingType: 'linear'
        };
        */
        $().UItoTop({easingType: 'easeOutQuart'});
    });
</script>
<script type="text/javascript">
    jQuery(document).ready(function ($) {
        $(".scroll").click(function (event) {
            event.preventDefault();
            $('html,body').animate({scrollTop: $(this.hash).offset().top}, 1200);
        });
    });
</script>
<!-- script-for-menu -->
<script>
    $("span.menu").click(function () {
        $(".top-menu ul").slideToggle("slow", function () {
        });
    });
</script>
<!-- script-for-menu -->
</html>