    <?php global $portfolio_master; ?>
    <!-- Testimonial Section Start -->
    <section id="testimonial" class="testimonials" style="background-image: url(<?php echo $portfolio_master['testimonial_bg_image']['url']; ?>);">
      <div class="count-shade section">
        <div class="container">
          <div class="section-title text-center uppercase">
            <h2 class="mb-60"><?php echo $portfolio_master['testimonial_heading']; ?></h2>
          </div> 
          <div class="carousel-test">
            <div class="owl-carousel owl-theme">
              <?php
                  $ebit_post = null;
                  $ebit_post = new WP_Query(array(
                      'post_type' => 'testimonial',
                      'posts_per_page' => -1,
                  ));
                  if ($ebit_post->have_posts()){
                      while ( $ebit_post->have_posts() ){
                          $ebit_post->the_post(); 
                          
                          ?>
                          
                            <div class="item">
                              <div class="profile-pic">
                                <?php the_post_thumbnail(); ?>
                              </div> 
                              <p><?php the_excerpt(); ?></p>
                              <h4><?php the_title(); ?></h4>
                            </div>
                          

                        <?php }
                          }else{
                            ?>
                              <div class="item">
                                <div class="profile-pic">
                                  <img src="<?php echo get_template_directory_uri();?>/assets/img/girl.jpg" alt="">
                                </div> 
                                <p>“Lorem ipsum dolor sit amet, ea doming epicuri iudicabit nam, te usu virtute placerat. Purto brute disputando cu est, eam dicam soluta ei. Vel dicam vivendo accusata ei, cum ne periculis molestiae pri. Lorem ipsum dolor sit amet, ea doming epicuri iudicabit nam.”</p>
                                <h4>John Stone</h4>
                              </div>
                              <div class="item">
                                <div class="profile-pic">
                                  <img src="<?php echo get_template_directory_uri();?>/assets/img/girl.jpg" alt="">
                                </div>
                                <p>“Lorem ipsum dolor sit amet, ea doming epicuri iudicabit nam, te usu virtute placerat. Purto brute disputando cu est, eam dicam soluta ei. Vel dicam vivendo accusata ei, cum ne periculis molestiae pri. Lorem ipsum dolor sit amet, ea doming epicuri iudicabit nam.”</p>
                                <h4>patha bork</h4>
                              </div>
                            <?php
                }
                wp_reset_postdata();
              ?>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Testimonial End -->