    <footer role="contentinfo">
            
        <div class="footer__menus">
            <div class="max__width">

                <?php while(have_rows('footer_menus', 'options')) : the_row();

                        $footer_menu = get_sub_field('footer_menu');
                        ?>
                        <article class="footer__menu">
                            <h5><?php echo $footer_menu->name; ?> <span class="ion-ios-plus-empty"></span></h5>

                            <?php wp_nav_menu(array('menu' => $footer_menu->name, 'container' => false, 'walker' => new clean_walker)); ?>
                        </article>

                <?php endwhile; ?>

                <article class="footer__menu find-us">
                    <h5>Find Us</h5>

                    <div class="contact">
                        <a target="_blank" href="https://www.google.com/maps/place/The+Birdhouse+Therapy+Centre/@50.1532619,-5.0797484,15z/data=!4m6!3m5!1s0x486b3bea64cf14bf:0xca7d05b546b88857!8m2!3d50.1532586!4d-5.0671581!16s%2Fg%2F11s9vm0yyf?entry=ttu">
                            The Bird House Therapy Centre,<br>
                             12 Arwenack Street,<br>
                             Falmouth, TR11 3JD
                        </a>
                    </div>
                </article>

                <article class="footer__menu social">
                   <h5>Follow Us <span class="ion-ios-plus-empty"></span></h5>
                    <?php if(get_field('header_social', 'options')): ?>
                        <ul class="social-wrapper">
                            <?php while(have_rows('header_social', 'options')) : the_row(); ?>
                                <li>
                                    <a href="<?php the_sub_field('header_social_url'); ?>" title="<?php the_sub_field('header_social_platform'); ?>" target="_blank">
                                        <i class="<?php the_sub_field('header_social_icon'); ?>"></i>
                                    </a>
                                </li>
                            <?php endwhile; ?>
                        </ul><!-- header__social -->

                    <?php endif; ?>

                </article>

                <article class="footer__menu contact-info">
                    <h5>Contact Us <span class="ion-ios-plus-empty"></span></h5>

                    <ul>
                        <li><i class="fa fa-phone"></i><a href="tel:07543794335">07543794335</a></li>
                        <li><i class="fa fa-envelope"></i><a href="mailto:hello@embodiedclinicalpsychology.com">hello@embodiedclinicalpsychology.com</a></li>
                    </ul>
                </article>

            </div><!-- max__width -->

        </div><!-- footer__menus -->

        <div class="subfooter">
            <div class="subfooter__credits">
                <p class="credit"><a href="https://thomson-website-solutions.com/" target="_blank">Website by Thomson Website Solutions</a></p>
            </div><!-- subfooter__credits -->
        </div><!-- subfooter -->
            
    </footer>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
