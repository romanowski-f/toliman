<div id="tolimanNewsCarousel" class="carousel slide">
  <ol class="carousel-indicators">

    <?php $i = 0; ?>
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <li data-target="#tolimanNewsCarousel" data-slide-to="<?php echo $i; ?>" <?php if ($i == 0) : ?>class="active"<?php endif;?>></li>
      <?php $i++; ?>
    <?php endwhile; endif; ?> 

  </ol>
  <div class="carousel-inner">

  <?php $i = 0; ?>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>



    <div class="carousel-item <?php if ($i == 0) : echo 'active'; endif; ?>">

      <?php if (get_field('site_name')) : ?>
        <a class="about" href="<?php the_field('url'); ?>" target="_blank"><?php the_field('site_name'); ?></a>
      <?php endif; ?>

      <h2><?php the_title(); ?></h2>

<!--       <?php $thumb = get_the_post_thumbnail_url(); ?>
      <?php if (isset($thumb) && !empty($thumb)) : ?>
      <div class="thumbnail">
        <img src="<?php echo $thumb; ?>" alt="">
      </div>
      <?php endif; ?> -->

      <?php the_content(); ?>

      <?php if (get_field('url')) : ?>
          <a href="<?php the_field('url'); ?>" class="btn btn-primary" target="_blank">Read More <i class="fas fa-external-link-square-alt" style="margin-left: 5px"></i></a>
       <?php endif; ?>

    </div>

    <?php $i++; ?>
  <?php endwhile; endif; ?> 

  </div>
  <a class="carousel-control-prev" href="#tolimanNewsCarousel" role="button" data-slide="prev">
    <div class="control prev"></div>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#tolimanNewsCarousel" role="button" data-slide="next">
    <div class="control next"></div>
    <span class="sr-only">Next</span>
  </a>
</div>