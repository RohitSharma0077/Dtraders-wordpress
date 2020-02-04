<style type="text/css">


  .nav-menu a {
    padding: 0 8px 10px 8px !important;
    text-decoration: none !important;
    display: inline-block;
    color: black !important;
    font-family: "Poppins", sans-serif;
    font-weight: 400;
    text-transform: uppercase !important;
    font-size: 13px !important;
    outline: none !important;
    margin-top: 10px;
  }

  .nav-menu a:hover{
    color:coral!important;
  }

  .sf-arrows .sf-with-ul:after {
    content: "\f107";
    position: absolute;
    right: -2px !important;
    font-family: FontAwesome;
    font-style: normal;
    font-weight: normal;
  }

  .postcontainer{

    margin-top:20px;
    padding: 10px;
    border:1px solid black;
    text-align: center;
  }

  .postcontainer:hover{
    color:teal;
  }

    .gallery-icon{
      padding: 0px 30px; 
    }


</style>


<?php get_header(); ?>
<!--========================== Header ============================-->
<header id="header">
 <div class="container">

    <div id="logo" class="pull-left">
     <a href="#hero"><img src="<?php echo get_bloginfo('template_url'); ?>/img/favicon.png" alt="" title="" /></img></a>  
   </div>

   <nav id="nav-menu-container">

    <?php wp_nav_menu(array(

      'menu' => 'primary-menu' ,
      'container' => '',
      'items_wrap' => '<ul class= "nav justify-content-center nav-menu">%3$s</ul>'

    ));

    ?>

  </nav><!-- #nav-menu-container -->
</div>
</header><!-- #header -->


<br>
<!-- ==========Posts=============== -->
<div class="container-fluid">
  <div class="row">
   <?php 

   if (have_posts()) {

    while (have_posts()) {

      the_post();

      ?>
      
      <div class="col-sm-3 postcontainer">
        <?php
        if(has_post_thumbnail())
        {

         the_post_thumbnail("small-thumbnail"); 
       }

       else{
        ?>
        <img src="<?php echo get_template_directory_uri().'/noimage.png' ?>" style="height: 130px; width:160px;">


        <?php


      } ?>
    </div>

    <div class="col-sm-5 postcontainer">
      <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
      <p>  <?php the_content(); ?> </p>
    </div>


    <div class="col-sm-4">
      <?php get_sidebar('rsidebar');  ?>
    </div>


    <?php

  }

}

?>

<div class="row">

<div class="col-sm-12">

    <?php if ( is_active_sidebar( 'leftsidebar' ) ) : ?>
      <ul id="sidebar1">
        <?php dynamic_sidebar( 'leftsidebar' ); ?>
      </ul>
    <?php endif; ?>

  </div>
</div>
</div>

<?php get_footer();?>


