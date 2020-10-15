<?php get_header(); ?>
<main class="wrap text-center">
  <section class="content-area content-full-width">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <article id="post" class="article-full">
        <header>
          <h2><?php the_title(); ?></h2>
          De: <?php the_author(); ?>
        </header>
       <div id="content">
        <?php the_content(); ?>
       </div>
      <div class="text-right">
       <a class="btn btn-outline-dark" href="<?php echo esc_url( home_url( '/' ) ); ?>" id="isingle" >Início</a>
      </div>
      </article>
<?php endwhile; else : ?>
      <article>
        <p>Desculpe, não existem Postagens!</p>
      </article>
<?php endif; ?>
  </section>
  <?php get_sidebar(); ?>
</main>
<?php get_footer(); ?>