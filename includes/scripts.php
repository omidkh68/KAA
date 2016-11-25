<script src="<?php echo DOMAIN_URL; ?>bower_components/jquery/dist/jquery.min.js"></script>
<script src="<?php echo DOMAIN_URL; ?>bower_components/bootstrap-3.3.6/js/bootstrap.min.js"></script>
<script src="<?php echo DOMAIN_URL; ?>assets/js/supersized.3.2.7.min.js"></script>
<script src="<?php echo DOMAIN_URL; ?>assets/js/supersized.shutter.min.js"></script>
<script src="<?php echo DOMAIN_URL; ?>assets/js/wow.min.js"></script>
<script src="<?php echo DOMAIN_URL; ?>assets/js/script.min.js"></script>

<script>
    $(function () {
        // setting fullscreen slider
        $.supersized({
            // Functionality
            slide_interval: 50000,		// Length between transitions
            transition: 1, 			    // 0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
            transition_speed: 700,		// Speed of transition
            keyboard_nav: 0,            // disable keyboard navigation
            slide_links: 'blank',	    // Individual links for each slide (Options: false, 'num', 'name', 'blank')
            slides: [			        // Slideshow Images
                <?php
                foreach ($slider as $k => $v) {
                    echo "
                        {
                            image: '" . DOMAIN_URL . 'assets/images/slider/' . $v['name'] . '.' . $v['type'] . "',
                            title: '" . $v['description'] . "',
                        },
                    ";
                }
                ?>
            ]

        });
    });
</script><!-- /all js scripts -->
