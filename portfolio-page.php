    <?php global $portfolio_master; ?>
    <!-- Portfolio Section Start -->
    <section id="portfolio" class="portfolio section">
      <div class="container">
        <div class="section-title text-center uppercase">
          <h2 class="mb-60"><?php echo $portfolio_master['portfolio_heading']; ?></h2>
        </div>
        <div class="slider">
          <div class="portfolioFilter">
            <?php
                 $all_terms = get_terms('works_category', array(
                  'hide_empty' => false
                  ));
                  foreach ($all_terms as $single_term) {
                  echo '<a href="#" data-filter=".'.$single_term->slug.'">' .$single_term->name. '</a>';
                }
              ?>          
          </div>
           
          <div class="portfolioContainer ">
            <?php
                $ebit_post = null;
                $ebit_post = new WP_Query(array(
                    'post_type' => 'works',
                    'posts_per_page' => -1,
                ));
                if ($ebit_post->have_posts()){
                    while ( $ebit_post->have_posts() ){
                        $ebit_post->the_post();
                        $portfolio_link_text = get_post_meta( get_the_ID(),'_portfolio_master_portfolio_link_text', true);
                        $portfolio_link_url = get_post_meta( get_the_ID(),'_portfolio_master_portfolio_link_url', true);
                        $post_terms = get_the_terms(get_the_ID(), 'works_category' );                       
                        ?>  
                        <div class="<?php foreach ($post_terms as $post_terms){echo $post_terms->slug . ' ';}?> col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="2000ms">
                            <div class="hover">
                              <?php the_post_thumbnail('portfolio-img'); ?>
                              <div class="hover-slide">
                                <div class="view-button">
                                  <a href="<?php echo $portfolio_link_url;?>"><?php echo $portfolio_link_text;?></a>
                                </div>
                              </div>
                            </div>
                          </div>

                      <?php }
                        }else{
                            ?>
                              <div class="objects col-sm-4 col-xs-12 wow fadeInUp">
                              <div class="hover">
                                <img src="<?php echo get_template_directory_uri();?>/assets/img/1(2).jpg" alt="image">
                                <div class="hover-slide">
                                  <div class="view-button">
                                    <a href="#">view all</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                           
                              <div class="people places col-sm-4 col-xs-12">
                                <div class="hover">
                                  <img src="<?php echo get_template_directory_uri();?>/assets/img/2(2).jpg" alt="image">
                                  <div class="hover-slide">
                                    <div class="view-button">
                                      <a href="#">view all</a>
                                    </div>
                                  </div>
                                </div>
                              </div>    
                           
                              <div class="food col-sm-4 col-xs-12">
                                <div class="hover">
                                  <img src="<?php echo get_template_directory_uri();?>/assets/img/3(2).jpg" alt="image">
                                  <div class="hover-slide">
                                    <div class="view-button">
                                      <a href="#">view all</a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            <?php
              }
              wp_reset_postdata();
            ?> 

          </div>
        </div>
      </div>
    </section>
    <!-- Start Portfolio End -->