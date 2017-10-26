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
                    <?php the_content();?>
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