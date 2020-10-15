<?php get_header(); ?>
<main class="wrap">
  <section class="content-area content-full-width text-center">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
         <article id="cards" class="article-loop border border-info rounded">
             <header>
             <div class="text-center">
               <a class="text-center" href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a>
              </div>
                <h4 id="ctitulo"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="text-light"><?php the_title(); ?></a></h4>
               
            </header> 
            <div class="entry-footer">
              <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="btn btn-outline-light " id="btnread" role="button" aria-pressed="true"><?php _e( 'Ler mais', 'my-theme-with-bootstrap' ); ?></a>
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