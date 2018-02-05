 <div class="footer">
        <div class="container">
            <div class="col-4 wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
                <h3>Sitemap</h3>
                <ul class="sitemap">
                    <li><a href="http://microagility.com/our-solutions/">Solutions</a></li>
                    <li><a href="http://microagility.com/about/">About Us</a></li>
                    <li><a href="http://www.microagility.com/why-agility/">Why MicroAgility</a></li>
                    <li><a href="http://www.microagility.com/careers/">Careers</a></li>
                    <li><a href="http://blog.microagility.com">Blog</a></li>
                    <li><a href="http://microagility.com/contact-us/">Contact Us</a></li>
                </ul>
            </div>
            <div class="col-4 wow fadeIn" data-wow-duration="1s" data-wow-delay=".3s">
                <h3>Connect with us</h3>
                <ul>
                    <li><a href="tel:(212) 784-6217"> <i class="fa fa-phone" aria-hidden="true"></i>  (212) 784-6217</a></li>
                    <li><a href="mailto:info@microagility.com"> <i class="fa fa-envelope" aria-hidden="true"></i>  info@MicroAgility.com</a></li>
                    <li><a href="https://www.facebook.com/microagility?fref=ts" target="_blank"> <i class="fa fa-facebook" aria-hidden="true"></i>  Facebook</a></li>
                    <li><a href="https://twitter.com/MicroAgility" target="_blank"> <i class="fa fa-twitter" aria-hidden="true"></i>  Twitter</a></li>
                    <li><a href="https://plus.google.com/+MicroAgilityIncPrinceton" target="_blank"> <i class="fa fa-google-plus" aria-hidden="true"></i>  Google+</a></li>
                    <li><a href="https://www.linkedin.com/company/microagility?trk=tyah" target="_blank"> <i class="fa fa-linkedin" aria-hidden="true"></i>  LinkedIn</a></li>
                </ul>
            </div>
            <div class="col-4 wow fadeIn" data-wow-duration="1s" data-wow-delay=".5s">
                
                <h3>MicroAgility Blog</h3>

                <?php if ( is_active_sidebar( 'sidebar-1' )  ) : ?>
                <aside id="footer3" class="footer-subscribe" role="complementary">
                <?php dynamic_sidebar( 'sidebar-1' ); ?>
                </aside><!-- .sidebar .widget-area -->
                <?php endif; ?>
                
                <!-- <p class="subscribe-para">Sign up to receive our latest thoughts.</p>
                
                <?php echo do_shortcode( '[contact-form-7 html_class="footer-subscribe" id="2515" title="Subscription form"]' ); ?> -->
                <!--
                <input type="text" placeholder="Email Address">
                <button><i class="fa fa-arrow-circle-right" aria-hidden="true"></i></button>
                -->
            </div>
        </div>
    </div>

    <footer>
        <div class="container">
             <p>Copyright &copy; <?php echo date('Y');?> MicroAgility  |   All Rights Reserved <a href="http://microagility.com/privacy-policy" style="color:#fff;text-decoration:underline;">Privacy Policy</a>    |    <a href="http://www.microagility.com/terms" style="color:#fff; text-decoration:underline;">Terms of Use</a> </p>
        </div>
    </footer>
    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-88215608-1', 'auto');
  ga('send', 'pageview');
</script>


        
    <?php wp_footer(); ?>

</body>
</html>