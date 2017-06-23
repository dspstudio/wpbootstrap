<?php get_header();?>

<?php get_template_part( 'template-parts/content', 'navbar' ); ?>
<?php get_template_part( 'template-parts/content', 'carousel' ); ?>

      <?php

          // If this was a search we display a page header with the results count. If there were no results we display the search form.
          if (is_search()) :

               $total_results = $wp_query->found_posts;

               echo "<h2 class='page-header'>" . sprintf( __('%s Rezultate de cautare pentru "%s"'),  $total_results, get_search_query() ) . "</h2>";

               if ($total_results == 0) :
                   get_search_form(true);
               endif;

          endif;

      ?>
          <?php // theloop
              if ( have_posts() ) : while ( have_posts() ) : the_post();

                  // single post
                  if ( is_single() ) : ?>

                      <div <?php post_class(); ?>>

                          <h2 class="page-header"><?php the_title() ;?></h2>

                          <?php if ( has_post_thumbnail() ) : ?>
                              <?php the_post_thumbnail('post-thumbnail', ['class' => 'img-responsive responsive--full', 'title' => get_the_title()]); ?>
                              <div class="clear"></div>
                          <?php endif; ?>
                          <?php the_content(); ?>
                          <?php //wp_link_pages(); ?>
                          <?php //get_template_part('template-part', 'postmeta'); ?>
                          <?php //comments_template(); ?>

                      </div>
                  <?php
                  // list of posts
                  else : ?>
                     <div <?php post_class(); ?>>

                          <h2 class="page-header">
                              <a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'devdmbootstrap3' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a>
                          </h2>

                          <?php if ( has_post_thumbnail() ) : ?>
                             <?php the_post_thumbnail(); ?>
                              <div class="clear"></div>
                          <?php endif; ?>
                          <?php the_content(); ?>
                          <?php wp_link_pages(); ?>
                          <?php get_template_part('template-part', 'postmeta'); ?>
                          <?php  if ( comments_open() ) : ?>
                                 <div class="clear"></div>
                                <p class="text-right">
                                    <a class="btn btn-success" href="<?php the_permalink(); ?>#comments"><?php comments_number(__('Leave a Comment','devdmbootstrap3'), __('One Comment','devdmbootstrap3'), '%' . __(' Comments','devdmbootstrap3') );?> <span class="glyphicon glyphicon-comment"></span></a>
                                </p>
                          <?php endif; ?>
                     </div>

                   <?php  endif; ?>

              <?php endwhile; ?>
              <?php posts_nav_link(); ?>
              <?php else: ?>

                  <?php get_404_template(); ?>

          <?php endif; ?>
    </div>
<?php get_sidebar(); ?>
  </div>
</div>
<?php get_footer(); ?>