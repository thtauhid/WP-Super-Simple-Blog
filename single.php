<?php get_header(); ?>
<!--Blog-->
        <div class="row"> 
             <?php if(have_posts()) : ?>

            <div class="col-8">
				<!--Blog Update-->
                <div class="row">


                            <?php while (have_posts()) : the_post(); ?>


					<!--Blog Update 01-->
                    <div class="col-12">
                        <div class="card mb-4"> <img class="img-thumbnail" src="<?php 
                              if(has_post_thumbnail()) {the_post_thumbnail_url();} else{ echo esc_html( get_template_directory_uri() . '/assets/img/binder-blank-book-bindings-479815.jpg'  ); } ?> ">
                            <br>
                            <div class="card-body">
                                <h3 class="card-title"><?php the_title() ?></h3>
                                <p><?php echo esc_html( __('On ', 'super-simple-blog') ); the_time('j F, Y');  echo esc_html( __(' by ', 'super-simple-blog') ); the_author_posts_link(); ?></p>
                                <p class="card-text">
                                    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                        <?php the_content() ?>
                                    </div>
                                </p>
                            </div>
                        </div>
					</div>
					
                    <?php endwhile; ?>

				</div>
            </div>

            <?php wp_link_pages( array(
                'before'      => '  <div class="col-8">
                    <div class="card mb-4">
                    <div class="card-body">' . __( 'Pages:', 'super-simple-blog' ) . '</span>',
                'after'       => '      </div>
                    </div>
                </div>',
                'link_before' => '<span>',
                'link_after'  => '</span>',
                ) );
                ?>

            <div class="col-8">
                <div class="col-12 border-area">
                     <p>
                        <?php echo esc_html( __('Categories: ', 'super-simple-blog') );  the_category( ', ' ); ?>
                    </p>
                </div>
                <br>
                <div class="col-12 border-area">
                    <p>
                        <?php echo esc_html( __('Tags: ', 'super-simple-blog') ) . get_the_tag_list('', ', ', ''); ?>
                    </p>
                </div>
                <br>
                <?php comments_template(); ?>
            </div>
                

            <?php endif; ?>

        </div>



<?php get_footer(); ?>