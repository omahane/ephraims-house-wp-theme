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
<script src="/eh/wp-content/themes/ephraimshouse/scrollreveal.min.js"></script>
<script>
/*
var purposediv = jQuery("#panel-108-2-0-0");
purposediv.css("display","none");
purposediv.css("position","absolute");
purposediv.css("top","260");
jQuery("#panel-108-2-0-0 blockquote p").css("font-size",24);
jQuery("#panel-108-2-0-0 blockquote p").css("color","white");
jQuery( "#panel-108-1-1-0" ).prepend( purposediv );

      var hero = {
        origin   : "top",
        distance : "24px",
        duration : 1500,
        scale    : 1.05,
      }
*/

//purposediv.css("display","block");
// jQuery("#pgc-108-4-1").css("display","none");
//window.sr = ScrollReveal();
//sr.reveal("pgc-108-4-1");

function revealQuote(txtShow, txtTarg) {
	if (jQuery(txtShow) && jQuery(txtTarg)) {
	    var text_to_show = jQuery(txtShow);
	    var text_container = jQuery(txtTarg);

        text_to_show.hide();
        text_container.css("position","relative");
        text_to_show.css("position","absolute");


        text_container.prepend(text_to_show);
          //init scrolling event handler
        jQuery(document).scroll(function(){

            var docScroll = jQuery(document).scrollTop(),
                boxCntOfset = jQuery(txtTarg).offset().top - 300;


            //when rich top of boxex than fire
            if(docScroll >= boxCntOfset ) {

              jQuery(txtShow).fadeIn(200)

            } else {
             jQuery(txtShow).fadeOut(200)

            }
        });
    }
}


</script>
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
</body>
</html>