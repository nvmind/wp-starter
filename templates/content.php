<div class="container">
  <div class="row">

    <div class="content-area span12">
      <div class="row">
        <div class="span4 col">
          <h3>Lorem Title</h3>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.
          </p>

          <h3>Lorem Title</h3>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.
          </p>
        </div>
        <div class="span4 col">
          <h3>Lorem Title</h3>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.
          </p>

          <h3>Lorem Title</h3>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.
          </p>

          <?php /* if (!have_posts()) : ?>
            <div class="alert alert-block fade in">
              <a class="close" data-dismiss="alert">&times;</a>
              <p><?php _e('Sorry, no results were found.', 'roots'); ?></p>
            </div>
            <?php get_search_form(); ?>
          <?php endif; ?>

          <?php while (have_posts()) : the_post(); ?>
            <article <?php post_class(); ?>>
              <header>
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <?php get_template_part('templates/entry-meta'); ?>
              </header>
              <div class="entry-summary">
                <?php the_excerpt(); ?>
              </div>
              <footer>
                <?php the_tags('<ul class="entry-tags"><li>','</li><li>','</li></ul>'); ?>
              </footer>
            </article>
          <?php endwhile; ?>

          <?php if ($wp_query->max_num_pages > 1) : ?>
            <nav class="post-nav">
              <ul class="pager">
                <?php if (get_next_posts_link()) : ?>
                  <li class="previous"><?php next_posts_link(__('&larr; Older posts', 'roots')); ?></li>
                <?php else: ?>
                  <li class="previous disabled"><a><?php _e('&larr; Older posts', 'roots'); ?></a></li>
                <?php endif; ?>
                <?php if (get_previous_posts_link()) : ?>
                  <li class="next"><?php previous_posts_link(__('Newer posts &rarr;', 'roots')); ?></li>
                <?php else: ?>
                  <li class="next disabled"><a><?php _e('Newer posts &rarr;', 'roots'); ?></a></li>
                <?php endif; ?>
              </ul>
            </nav>
          <?php endif; */ ?>
        </div>
        <aside class="span4 col">
          <h3>Title</h3>
          <img src="holder.js/320x150/" alt=""/>
          <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. 
          </p>
        </aside>
      </div>
    </div>



  </div> <!-- row -->
</div>