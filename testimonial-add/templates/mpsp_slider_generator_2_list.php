
<?php echo esc_attr( get_post_meta($id,'mpsp_slide_nav_button_position',true) ); 
$id = esc_attr($id);
?>
<style>
.owl-pagination{
}
.owl-buttons{
  color:<?php echo esc_attr( get_post_meta($id,'mpsp_slide_nav_button_color',true) );?>
}

.owl-buttons {
  margin-top: -20px !important;
}

.owl-item{
	text-align: center;
}
</style>



<div id="mpsp_wrapper" style= "padding:10px;border-radius:5px; width:<?php echo esc_attr( get_post_meta($id,'mpsp_slide_custom_width',true) ); ?>;  <?php echo esc_attr($mpsp_slide_gradient); ?>    ">



<style type="text/css">
  #tss_warppper{
    background: <?php echo esc_attr( get_post_meta($id,'mpsp_posts_bg_color',true) ); ?>;
    margin: 0 auto;
    padding: 20px;
    display: inline-block;
  }
  #ts_img{
    text-align: center;
  }
  #tss_content{
    background: <?php echo esc_attr( get_post_meta($id,'mpsp_posts_bg_color',true) ); ?>;
    text-align: center;
  }

 #tss_image{
    text-align: center;
    width: 100px;
    height: 100px;
    border-radius:<?php echo esc_attr( get_post_meta($id,'tss_mpsp_slider_img_border',true) ); ?>px;
    
  }

  .tss_p{
    font-weight:normal;
    color: <?php echo esc_attr( get_post_meta($id,'mpsp_posts_description_color',true) ); ?>;
  }
  #tss_name{
    font-weight: bold;
    font-size: 16px;
    margin-top: 5px;
    text-align: center;
  }

  #tss_occupation{
    font-style: italic;
    margin-top: -8px;
    text-align: center;

  }

  #tss_testimonial span{
    font-size: 35px;
    font-weight:bold;
    color: <?php echo esc_attr( get_post_meta($id,'mpsp_posts_description_color',true) ); ?>;
  }
  #tss_testimonial{
    font-size: 18px;
  }
  </style>

  
             
              <div id="owl-demo" class="owl-carousel" style='text-align:center;'>
                
          <?php


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
    <p class='tss_p' id='tss_testimonial'><?php echo esc_attr( get_post_meta(get_the_ID(),'tss_testimonial',true) );  ?></p>
  </div>
  <div id='ts_img'>
     <img id='tss_image' src="<?php  
            $tss_img = esc_attr( get_post_meta(get_the_ID(),'tss_image',true) );
    
            if(!empty($tss_img)){
            echo esc_attr( get_post_meta(get_the_ID(),'tss_image',true) );
          }else{
            echo plugins_url('user-icon.jpg',__FILE__);
          } ?>">
    <p class='tss_p' id='tss_name'><?php echo esc_attr( get_post_meta(get_the_ID(),'tss_name',true) );  ?></p>
    <p class='tss_p' id='tss_occupation'><?php echo esc_attr( get_post_meta(get_the_ID(),'tss_ocupation',true) );  ?></p>
    </div>  
    <hr class='tss_p'>
</div>


<?php endwhile;?>


               
            </div>

          </div>

    