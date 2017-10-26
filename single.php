<?php get_header('new'); ?>


    <section class="single-section">
    <div class="single-bg">
      <img src="<?php echo $portfolio_master['single_image']['url']; ?>" alt="">
    </div>
      
    </section>
    <!-- Blog Area Start -->
    <section>
      <div class="container">
        <div class="main-blog-area mt-30">
          <div class="col-sm-12 mb-30">
            <div class="row">
              <div class="col-sm-12 ptrbl-30 blog-post-area">
                <?php

                    if (have_posts()){
                      while (have_posts() ){
                        the_post();
                    ?>
                    <div class="single-post mb-30">
                      <div class="post-details">
                        <a href="#"><h3 class="mb-15"><?php the_title(); ?></h3></a>
                        
                      </div>
                      <div class="post-image">
                        <?php the_post_thumbnail() ?>
                        <div class="image-shade"></div>
                      </div>
                      <div class="post-content ptrbl-30">
                        <div class="post-meta mb-10 ">
                          <a href="#" class="mr-20"><i class="fa fa-user mr-10"></i><?php the_author(); ?></a>
                          <a href="#"><i class="fa fa-calendar mr-10"></i><?php echo get_the_date(); ?></a>
                        </div>
                        <p><?php the_content(); ?></p>
                      </div>
                      <div class="comments-box mt-30">
                        <?php comments_template(); ?>
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
          
        </div>
      </div>
    </section>
    <!-- Blog Area End -->


<?php get_footer(); ?>

