

<footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <?php 
                        if ( is_active_sidebar( 'footer-left' ) ){
                            dynamic_sidebar('footer-left' );
                        } 
                    ?>
                </div>
                <div class="col-md-4 col-sm-12">
                    <?php 
                        if ( is_active_sidebar( 'footer-center' ) ){
                            dynamic_sidebar('footer-center' );
                        } 
                    ?>
                </div>
                <div class="col-md-4 col-sm-12 map-img">
                    <?php 
                        if ( is_active_sidebar( 'footer-right' ) ){
                            dynamic_sidebar('footer-right' );
                        } 
                    ?>

                </div>
            </div>
        </div>
        

    </footer>
    <div class="copy">
    <div class="container">
        2021 &copy; All Rights Reserved. LembarHarapan.id</a>
        
        <span>
        <a><i class="fab fa-github"></i></a>
        <a><i class="fab fa-google-plus-g"></i></a>
        <a><i class="fab fa-pinterest-p"></i></a>
        <a><i class="fab fa-twitter"></i></a>
        <a><i class="fab fa-facebook-f"></i></a>
        </span>
    </div>

</div>
    
        <?php wp_footer(); ?>
    </body>

</html>