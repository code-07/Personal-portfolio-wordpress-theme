<?php get_header('new'); ?>


    <section class="single-section">
    <div class="single-bg">
      <img src="<?php echo $portfolio_master['single_image']['url']; ?>" alt="">
    </div>
      
    </section>
    <!-- Blog Area Start -->
    <section>
      <div class="container">
        <div class="main-blog-area search-area mt-30">
          <div class="col-sm-8 mb-30">
            <div class="row">
              <div class="col-sm-12 ptrbl-30 blog-post-area">
                <?php

                    if (have_posts()){
                      while (have_posts() ){
                        the_post();
                    ?>
                    <div class="single-post mb-30">
                      <div class="post-image">
                        <?php the_post_thumbnail('blog-img') ?>
                        <a href="<?php the_permalink(); ?>"><div class="image-shade"></div></a>
                      </div>
                      <div class="post-content ptrbl-20">
                        <div class="post-meta mb-10 ">
                          <a href="<?php the_permalink(); ?>" class="mr-20"><i class="fa fa-user mr-10"></i><?php the_author(); ?></a>
                          <a href="<?php the_permalink(); ?>"><i class="fa fa-calendar mr-10"></i><?php echo get_the_date(); ?></a>
                        </div>
                        <div class="post-details">
                          <a href="<?php the_permalink(); ?>"><h3 class="mb-15"><?php the_title(); ?></h3></a>
                          <p><?php echo wp_trim_words( get_the_content(), 50, '...' ); ?></p>
                        </div>
                      </div> 
                    </div>
                  <?php }
             }else{
              echo "No Post";
           }
            wp_reset_postdata();
          ?>   
              </div>
            
            </div>
          </div>
          <?php get_sidebar(); ?>
        </div>
      </div>
    </section>
    <!-- Blog Area End -->


<?php get_footer(); ?>

