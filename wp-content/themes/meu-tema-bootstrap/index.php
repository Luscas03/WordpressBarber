<?php get_header(); ?>
<main class="wrap">
  <section class="content-area content-full-width text-center">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
         <article id="cards" class="article-loop">
             <header class="text-dark">
                <h4 id="ctitulo"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="text-light"><?php the_title(); ?></a></h4>
                Autor: <?php the_author(); ?>
            </header> 
           <div id="txtcard">
            <?php the_excerpt(); ?> 
           </div>
        </article> 
    <?php endwhile; else : ?>
    <article>
        <p>Desculpe, não existem Post!</p>
    </article>
    <?php endif; ?>
  </section>
  <?php get_sidebar(); ?>
</main>
<?php get_footer(); ?>