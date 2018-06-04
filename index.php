<?php get_header(); ?>
<!--Blog-->
        <div class="row"> 
            <div class="col-8">
				<!--Blog Update-->
                <div class="row">


    <?php if(have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>


					<!--Blog Update 01-->
                    <div class="col-12">
                        <div class="card mb-4"> <img class="img-thumbnail" src="<?php 
      if(has_post_thumbnail()) {the_post_thumbnail_url();} else{ echo esc_html( get_template_directory_uri() . '/assets/img/binder-blank-book-bindings-479815.jpg'  ); } ?> ">
                            <br>
                            <div class="card-body">
                                <h3 class="card-title"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>
                                <p><?php echo esc_html( __('On ', 'super-simple-blog') ); the_time('j F, Y');  echo esc_html( __(' by ', 'super-simple-blog') ); the_author_posts_link(); ?></p>
                                <p class="card-text"><?php the_excerpt() ?></p>
                                <a href="<?php the_permalink() ?>"><?php echo esc_html( __('More >>', 'super-simple-blog') ); ?></a><br>
                            </div>
                        </div>
                        <hr> <hr>  <br> 
					</div>
					
                    <?php endwhile; ?>

				</div>
            </div>
        </div>
        
        <div class="row">
    <div class="col-8">
      <div class="text-right">
        <?php previous_posts_link(__('Newer', 'super-simple-blog')); ?>
      </div>
      <div class="text-left">
        <?php next_posts_link(__('Older', 'super-simple-blog')); ?>
      </div>
    </div>
  </div>
        <?php else : ?>
      <p><?php echo esc_html( __('No Posts Found', 'super-simple-blog') ); ?></p>
    <?php endif; ?>


<?php get_footer(); ?>