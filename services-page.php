    <?php global $portfolio_master; ?>
    <!-- Services Area Start -->
    <section id="service" class="services-section section">
      <div class="container">
        <div class="section-title text-center uppercase">
          <h2 class="mb-60"><?php echo $portfolio_master['services_heading']; ?></h2>
        </div>
          <?php
            $ebit_post = null;
            $ebit_post = new WP_Query(array(
                'post_type' => 'services',
                'posts_per_page' => -1,
            ));
            if ($ebit_post->have_posts()){
                while ( $ebit_post->have_posts() ){
                    $ebit_post->the_post();
                    $services_icon = get_post_meta( get_the_ID(),'_portfolio_master_services_icon', true);  
                    ?>
                   <div class="col-sm-4 wow fadeInLeft" data-wow-duration="2000ms">
                    <div class="services-content">
                      <div class="srvices-icon mb-15">
                        <i class="fa <?php echo $services_icon;?>"></i>
                      </div>
                      <div class="srvices-title">
                        <h3 class="mb-15"><?php the_title(); ?></h3>
                      </div>
                      <div class="srvices-para">
                        <p><?php echo wp_trim_words( get_the_content(), 18, '' ); ?> <a href="<?php the_permalink();?>">. . .</a></p>
                      </div>
                    </div>
                  </div>
                <?php }
             }else{
              ?>
                  <div class="col-sm-4">
                  <div class="services-content">
                    <div class="srvices-icon mb-15">
                      <i class="fa fa-desktop"></i>
                    </div>
                    <div class="srvices-title">
                      <h3 class="mb-15">PERFECT DESIGN</h3>
                    </div>
                    <div class="srvices-para">
                      <p>Nullam fermentum nisl diam, ut faucibus justo aliquam id. Sed volutpat est id ligula eu vari massa pretium something like.</p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="services-content">
                    <div class="srvices-icon mb-15">
                      <i class="fa fa-code"></i>
                    </div>
                    <div class="srvices-title">
                      <h3 class="mb-15">WEB DEVELOPMENT</h3>
                    </div>
                    <div class="srvices-para">
                      <p>Nullam fermentum nisl diam, ut faucibus justo aliquam id. Sed volutpat est id ligula eu vari massa pretium something like.</p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="services-content">
                    <div class="srvices-icon mb-15">
                      <i class="fa fa-user-o"></i>
                    </div>
                    <div class="srvices-title">
                      <h3 class="mb-15">SOCIAL MEDIA</h3>
                    </div>
                    <div class="srvices-para">
                      <p>Nullam fermentum nisl diam, ut faucibus justo aliquam id. Sed volutpat est id ligula eu vari massa pretium something like.</p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="services-content">
                    <div class="srvices-icon mb-15">
                      <i class="fa fa-pie-chart"></i>
                    </div>
                    <div class="srvices-title">
                      <h3 class="mb-15">RELIABLE RESULTS</h3>
                    </div>
                    <div class="srvices-para">
                      <p>Nullam fermentum nisl diam, ut faucibus justo aliquam id. Sed volutpat est id ligula eu vari massa pretium something like.</p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="services-content">
                    <div class="srvices-icon mb-15">
                      <i class="fa fa-weixin"></i>
                    </div>
                    <div class="srvices-title">
                      <h3 class="mb-15">PUBLIC RELATIONS</h3>
                    </div>
                    <div class="srvices-para">
                      <p>Nullam fermentum nisl diam, ut faucibus justo aliquam id. Sed volutpat est id ligula eu vari massa pretium something like.</p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="services-content">
                    <div class="srvices-icon mb-15">
                      <i class="fa fa-envelope-open"></i>
                    </div>
                    <div class="srvices-title">
                      <h3 class="mb-15">EMAIL MARKETING</h3>
                    </div>
                    <div class="srvices-para">
                      <p>Nullam fermentum nisl diam, ut faucibus justo aliquam id. Sed volutpat est id ligula eu vari massa pretium something like.</p>
                    </div>
                  </div>
                </div>
              <?php
           }
            wp_reset_postdata();
          ?>
        
      </div>
    </section>
    <!-- Services Area End -->

