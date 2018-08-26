<?php
/*
* College Education default footer file
*/
$footer_widget_style = get_theme_mod('footerWidgetStyle',3);
$hide_footer_widget_bar = get_theme_mod('hideFooterWidgetBar',1);
$hide_credit_links = get_theme_mod('hideCreditLinks'); ?>

    <footer>
        <?php if(($hide_footer_widget_bar == 1) || ($hide_footer_widget_bar == '')) : 
            $footer_widget_style = $footer_widget_style+1;
        $footer_column_value = floor(12/($footer_widget_style)); ?>
            <div class="footer-box">
                <div class="container">
                    <div class="row">
                        <?php $k = 1; ?>
                        <?php for( $i=0; $i<$footer_widget_style; $i++) { ?>
                            <?php if (is_active_sidebar('footer-'.$k)) { ?>
                                <div class="col-md-<?php echo esc_attr($footer_column_value); ?> col-sm-<?php echo esc_attr($footer_column_value); ?> col-xs-12"><?php dynamic_sidebar('footer-'.$k); ?></div>
                            <?php }
                            $k++;
                        } ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </footer>
<?php wp_footer(); ?>
<script>
	// for headroom, sliding header
	// grab an element
var elem = jQuery('.header-top.transparent.fixed-header');
var headroom = new Headroom(elem, {
  "tolerance": 5,
  "offset": 10,
  "classes": {
    "initial": "animated",
    "pinned": "slideDown",
    "unpinned": "slideUp",
    "top": "headroom--top",
    "notTop": "headroom--not-top"
  }
});
headroom.init(); </script>
</script>
</body>
</html>