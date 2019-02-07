<?php get_header(); ?>
  <div <?php body_class('home')?>>
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="<?php echo get_theme_file_uri('/images/marketing1.jpg')?>" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="<?php echo get_theme_file_uri('/images/marketing2.jpeg')?>" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="<?php echo get_theme_file_uri('/images/marketing3.png')?>" alt="Third slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
<?php 
    while(have_posts()){
        the_post(); ?>
        <h2><a href="<?php the_permalink();?>"> <?php the_title(); ?> </a></h2>
        <p><?php the_content(); ?> </p>
        <hr>
    <?php    
    }
?>
<?php get_footer(); ?>
