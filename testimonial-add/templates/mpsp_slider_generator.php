
<?php echo esc_attr( get_post_meta($id,'mpsp_slide_nav_button_position',true) );
$id = esc_attr($id);
?>
<style>
.owl-pagination{
}
.owl-buttons{
  color:<?php echo esc_attr( get_post_meta($id,'mpsp_slide_nav_button_color',true) );?>
  

}
.owl-buttons{
}





</style>


<style type="text/css">

  #tss_warppper{
    background: <?php echo esc_attr( get_post_meta($id,'mpsp_posts_bg_color',true) ); ?>;
    width: 200px;
    text-align: center;
    margin: 0 auto;
    padding: 10px;
  }

  #tss_image{
    max-width: 150px;
    border-radius:<?php echo esc_attr( get_post_meta($id,'tss_mpsp_slider_img_border',true) ); ?>px;
    text-align: center;
    display: initial !important;
  }

  .tss_p{
    font-size: 14px;
    font-weight: 100;
    color: <?php echo esc_attr( get_post_meta($id,'mpsp_posts_description_color',true) ); ?>;
  }
  #tss_name{
    font-weight: bold;
    font-size: 16px;
    text-align: center;
  }

  #tss_occupation{
    font-style: italic;
    text-align: center;

  }

  #tss_testimonial span{
    font-size: 29px;
    font-weight:bold;
    color: #dddddd;
  }
  #tss_testimonial{
    font-size: 15px;
    text-align: left;
  }
  </style>

  
             
              <div id="<?php echo 'tss_id'.$id; ?>" class="owl-carousel" style='text-align:center;'>
                
          <?php
               // WP_Query arguments
                  $args = array (
                    'post_type'              => 'tss_data',
                    'category_name'          => esc_attr( get_post_meta($id,'mpsp_posts_value',true) ), 
                    'posts_per_page'         => esc_attr( get_post_meta($id,'mpsp_posts_visible',true) ),
                    'order'                  => esc_attr( get_post_meta($id,'mpsp_posts_order',true) ),
                    'orderby'                => esc_attr( get_post_meta($id,'mpsp_posts_orderby',true) ),

                  );
// The Query
                  $the_query = new WP_Query( $args );

          while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
          
<div id='tss_warppper'>
  <div id='tss_content'>
    <img id='tss_image' src="<?php  
            $tss_img = esc_attr( get_post_meta(get_the_ID(),'tss_image',true) );
    
            if(!empty($tss_img)){
            echo esc_attr( get_post_meta(get_the_ID(),'tss_image',true) );
          }else{
            echo plugins_url('user-icon.jpg',__FILE__);
          } ?>">
    <p class='tss_p' id='tss_name'><?php echo esc_attr( get_post_meta(get_the_ID(),'tss_name',true) );  ?></p>
    <p class='tss_p' id='tss_occupation'><?php echo esc_attr( get_post_meta(get_the_ID(),'tss_ocupation',true) );  ?></p>
    <p class='tss_p' id='tss_testimonial'><?php echo esc_attr( get_post_meta(get_the_ID(),'tss_testimonial',true) );  ?></p>
  </div>  
</div>


<?php endwhile;?>


               
            </div>


<script>

jQuery(document).ready(function() {
          
 
  jQuery("<?php echo esc_attr('#tss_id'.$id); ?>").owlCarousel({
    items :<?php echo  esc_attr( get_post_meta($id,'mpsp_slide_single',true) ); ?>,
    singleItem: true,
    autoPlay : <?php echo esc_attr( get_post_meta($id,'mpsp_slide_autoplay',true) ); ?>,
    stopOnHover : true,
    navigation: <?php echo  esc_attr( get_post_meta($id,'mpsp_slide_navigation',true) ); ?>,
    paginationSpeed : <?php echo  esc_attr( get_post_meta($id,'mpsp_slide_speed',true) ); ?>00,
    goToFirstSpeed : <?php echo  esc_attr( get_post_meta($id,'mpsp_slide_speed',true) ); ?>00,
    singleItem : false,
    autoHeight : true,
    slideSpeed : <?php echo  esc_attr( get_post_meta($id,'mpsp_slide_speed',true) ); ?>000,
    transitionStyle: <?php echo  esc_attr( get_post_meta($id,'mpsp_slide_transistion',true) ); ?>,
    pagination : <?php echo  esc_attr( get_post_meta($id,'mpsp_slide_pagination',true) ); ?>,
    paginationNumbers :<?php echo  esc_attr( get_post_meta($id,'mpsp_slide_pagination_numbers',true) ); ?>,
    navigationText : ["<b><</b>", "<b>></b>"],

  });
});

</script>