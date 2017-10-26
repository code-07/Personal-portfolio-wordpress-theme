        <?php global $portfolio_master; ?>
    <!-- Process Area Start -->
    <section id="process" class="process-section section">
      <div class="container">
        <div class="col-sm-3">
          <div class="process-title">
            <h3 class="mb-40"><?php echo $portfolio_master['about_process_title']; ?></h3>
            <p><?php echo $portfolio_master['about_process_details']; ?></p>
          </div>
        </div>
        <div class="col-sm-9">
          
            <?php
            $ebit_post = null;
            $ebit_post = new WP_Query(array(
                'post_type' => 'about',
                'posts_per_page' => -1,
            ));
            if ($ebit_post->have_posts()){
                while ( $ebit_post->have_posts() ){
                    $ebit_post->the_post();
                    $icon_metafield = get_post_meta( get_the_ID(),'_portfolio_master_icon_metafield', true); 
                    ?>
                    <div class="col-md-4 col-sm-6 wow fadeInRight" data-wow-duration="2000ms">
                       <div class="single-process ptrbl-20">
                        <span class="service-bar"></span>
                        <div class="service-icon mb-10">
                          <i class="fa <?php echo $icon_metafield;?>"></i>
                        </div>
                        <div class="process-content">
                          <h4 class="mb-10"><?php the_title(); ?></h4>
                          <p><?php echo wp_trim_words( get_the_content(), 15, '' ); ?> <a href="<?php the_permalink();?>">. . .</a></p>
                        </div>
                      </div>
                    </div>
                  <?php }
             }else{
              ?>
                  <div class="col-md-4 col-sm-6 wow fadeInRight" data-wow-duration="2000ms">
                     <div class="single-process ptrbl-20">
                      <span class="service-bar"></span>
                      <div class="service-icon mb-10">
                        <i class="fa fa-bar-chart"></i>
                      </div>
                      <div class="process-content">
                        <h4 class="mb-10"><?php the_title(); ?></h4>
                        <p>Praesent dapibus nec justo at convallis. Maecenas aliquet rutrum aliquet. Class aptent taciti sociosqu ad litora torquent.</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-6">
                  <div class="single-process ptrbl-20">
                    <span class="service-bar"></span>
                    <div class="service-icon mb-10">
                      <i class="fa fa-pencil"></i>
                    </div>
                    <div class="service-content">
                      <h4 class="mb-10">Book</h4>
                      <p>Praesent dapibus nec justo at convallis. Maecenas aliquet rutrum aliquet. Class aptent taciti sociosqu ad litora torquent.</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 col-sm-6">
                  <div class="single-process ptrbl-20">
                    <span class="service-bar"></span>
                    <div class="service-icon mb-10">
                      <i class="fa fa-code"></i>
                    </div>
                    <div class="service-content">
                      <h4 class="mb-10">Plan</h4>
                      <p>Praesent dapibus nec justo at convallis. Maecenas aliquet rutrum aliquet. Class aptent taciti sociosqu ad litora torquent.</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 col-sm-6">
                  <div class="single-process ptrbl-20">
                    <span class="service-bar"></span>
                    <div class="service-icon mb-10">
                      <i class="fa fa-laptop"></i>
                    </div>
                    <div class="service-content">
                      <h4 class="mb-10">Design</h4>
                      <p>Praesent dapibus nec justo at convallis. Maecenas aliquet rutrum aliquet. Class aptent taciti sociosqu ad litora torquent.</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 col-sm-6">
                  <div class="single-process ptrbl-20">
                    <span class="service-bar"></span>
                    <div class="service-icon mb-10">
                      <i class="fa fa-cog"></i>
                    </div>
                    <div class="service-content">
                      <h4 class="mb-10">Development</h4>
                      <p>Praesent dapibus nec justo at convallis. Maecenas aliquet rutrum aliquet. Class aptent taciti sociosqu ad litora torquent.</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 col-sm-6">
                  <div class="single-process ptrbl-20">
                    <span class="service-bar"></span>
                    <div class="service-icon mb-10">
                      <i class="fa fa-paper-plane-o"></i>
                    </div>
                    <div class="service-content">
                      <h4 class="mb-10">Launch</h4>
                      <p>Praesent dapibus nec justo at convallis. Maecenas aliquet rutrum aliquet. Class aptent taciti sociosqu ad litora torquent.</p>
                    </div>
                  </div>
                </div>
              <?php
           }
            wp_reset_postdata();
          ?>
        
        
        </div> 
      </div>
    </section>
    <!-- Process Area End -->