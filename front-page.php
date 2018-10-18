<?php get_header(); ?>

  <?php if ( have_posts() ) : ?>

    <div class="container">
      <div class="row">
        <div class="col">
          <?php while ( have_posts() ) : the_post(); ?>
            <?php the_title('<h1>', '</h1>'); ?>
            <?php the_content(); ?>
          <?php endwhile; ?>
          <?php wp_reset_postdata(); ?>
        </div>
      </div>
    </div>

  <?php else: ?>

    <div class="container">
      <div class="row">
        <div class="col">
          <p><?php _e( 'Nenhum post encontrado.', 'wp-boilerplate' ); ?></p>
        </div>
      </div>
    </div>

  <?php endif; ?>

<?php get_footer(); ?>
