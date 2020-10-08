<?php get_header(); ?>
<main class="wrap">
  <section class="content-area content-full-width">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <article id="post" class="article-full">
        <header>
          <h2><?php the_title(); ?></h2>
          De: <?php the_author(); ?>
        </header>
       <?php the_content(); ?>
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