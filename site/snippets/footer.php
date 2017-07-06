
<footer>
    <div class="footerContainer">
        <div class="title-footer">Portelli Jeremy 2017</div>
        <div class="container">
            <ul>
                <li><a target="_blank" href="https://www.facebook.com/jeremy.portelli.92" ><img src="assets/images/icon/facebook.png" ></a></li>
                <li><a target="_blank" href="https://twitter.com/Baliig" class="icon"><img src="assets/images/icon/twitter.png" ></a></li>
                <li><a target="_blank" href="https://www.linkedin.com/in/j%C3%A9r%C3%A9my-portelli-51a82512a/" class="icon"><img src="assets/images/icon/linkedin.png" ></a></li>
            </ul>
        </div>
    </div>
</footer>



<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>>-->
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script
<script src="assets/js/jquery-3.2.1.min.js" ></script>
<script src="assets/js/jquery.slicknav.min.js" ></script>
<script src="assets/js/slick.min.js"></script>
<script type="text/javascript">
    $(function () {
        $('#menu').slicknav();
    });

    $(document).ready(function(){
        $('.home-carousel').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 3000,
            dots: true,
            infinite: true,
            speed: 500,
            fade: true,
            cssEase: 'linear'
        });
    });

</script>

</body>

</html>