<footer class="footer-distributed">
    <div class="footer-left">
        <img class="img-footer" src="img/logo.png" width="100%">
    </div>
    <div class="footer-center">
        <div>
            <i class="fa fa-map-marker"></i>
            <p><span>72 Boulevard de Clichy</span> Paris, France</p>
        </div>
        <div>
            <i class="fa fa-phone"></i>
            <p>+1 555 123456</p>
        </div>
        <div>
            <i class="fa fa-envelope"></i>
            <p><a href="contact@adopteunpoivrot.fr">altran@gmail.com</a></p>
        </div>
    </div>
    <div class="footer-right">
        <p class="footer-company-about">
            <span>A propos de nous :</span>
            Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor lacus
            vehicula sit amet.
        </p>
        <div class="footer-icons">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
        </div>
    </div>
</footer>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript">


    $(document).ready(function(){
        $(".tilt").click(function(){
            $(".bonjour").fadeOut(100);
            $(".reveal").slideDown()(1000);
        });

        $(".retour").click(function(){
            $(".bonjour").fadeIn(1000);
            $(".reveal").hide();
        });
    });

</script>
<script type="text/javascript">


    $(document).ready(function(){
        $(".tilt2").click(function(){
            $(".bonjour2").fadeOut(100);
            $(".reveal2").slideDown()(1000);
        });

        $(".retour2").click(function(){
            $(".bonjour2").fadeIn(1000);
            $(".reveal2").hide();
        });
    });

</script>
</body>
</html>