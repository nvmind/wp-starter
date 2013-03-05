<div class="container">
  <div class="row">

    <div class="content-area home span12">
      <div class="row">
       
        <div class="span4">
          <div class="col">
            <h3>A little about us</h3>
            <p>
              Promenade cowpoke dumb rustle plumb, highway, redblooded, ails tobaccee, has, tonic buy. Plug-nickel caboodle hoosegow caught hobo grandpa aunt. Go hauled hillbilly beer hollarin', cow truck. 
            </p>
            <div class="spacer"></div>
            <h3>Special of the month</h3>
            <p>
              Promenade cowpoke dumb rustle plumb, highway, redblooded, ails tobaccee, has, tonic buy. Plug-nickel caboodle hoosegow caught hobo grandpa aunt. Go hauled hillbilly beer hollarin', cow truck. Ain't shed uncle, hillbilly skanky wild. Mule gritts catfish, drinkin' heapin' fer.
            </p>
          </div>
        </div>

        <div class="span4">
          <div class="col">
            <h3>Full of flavor</h3>
            <p>
              Promenade cowpoke dumb rustle plumb, highway, redblooded, ails tobaccee, has, tonic buy. Plug-nickel caboodle hoosegow caught hobo grandpa aunt. Go hauled hillbilly beer hollarin', cow truck.
            </p>
            <div class="spacer"></div>
            <h3>Our Gallery</h3>
            <p>
              Promenade cowpoke dumb rustle plumb, highway, redblooded, ails tobaccee, has, tonic buy. Plug-nickel caboodle hoosegow caught hobo grandpa aunt. Go hauled hillbilly beer hollarin', cow truck. Ain't shed uncle, hillbilly skanky wild. Mule gritts catfish, drinkin' heapin' fer.
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
        </div>

        <aside class="span4">
          <div class="col">
            <h3><img class="cafe-icon hidden-tablet" width=30 src="<?php echo get_bloginfo("template_url");?>/inc/images/cafe.png" alt="icon"/>Contact Restaurant</h3>
            <p>
              Call us on 1-800-4432 <br/> 
              e-mail us at info@restaurant.com. <br/>
              For job enquiries jobs@restaurant.com
            </p>
            <div class="spacer"></div>
            
            <h3>Opening Hours</h3>
            <p>
              Lorem ipsum dolor sit amet, consectetur.<br/>
              <ul>
                <li>Monday : 0:00 - 20:00</li>
                <li>Tuesday : 0:00 - 20:00</li>
                <li>Wednesday: 0:00 - 20:00</li>
                <li>Thursday : 0:00 - 20:00</li>
                <li>Friday : 0:00 - 20:00</li>
                <li>Saturday : 0:00 - 20:00</li>
              </ul>            
            </p>
          </div>

        </aside>
      </div>
    </div>



  </div> <!-- row -->
</div>