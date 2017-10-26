            <?php global $portfolio_master; ?>
    <!-- Counter Area Start -->
    <section class="counter-section" style="background-image: url(<?php echo $portfolio_master['status_bg_image']['url']; ?>);">
      <div class="count-shade section">
        <div class="container">
          <div class="section-title text-center uppercase">
            <h2 class="mb-60"><?php echo $portfolio_master['status_heading']; ?></h2>
          </div>
           <?php
            $ebit_post = null;
            $ebit_post = new WP_Query(array(
                'post_type' => 'counter',
                'posts_per_page' => -1,
            ));
            if ($ebit_post->have_posts()){
                while ( $ebit_post->have_posts() ){
                    $ebit_post->the_post();
                    $countto_icon = get_post_meta( get_the_ID(),'_portfolio_master_countto_icon', true); 
                    $countto_number = get_post_meta( get_the_ID(),'_portfolio_master_countto_number', true); 
                    ?>
                   <div class="col-sm-3">
                      <div class="single-count text-center">
                        <div class="count-icon mb-10">
                          <i class="fa <?php echo $countto_icon;?>"></i>
                        </div>
                        <div class="count-number mb-10">
                          <h4 class="counter" data-count="<?php echo $countto_number;?>">1</h4>
                        </div>
                        <div class="count-title mb-10">
                          <h5><?php the_title(); ?></h5>
                        </div>
                      </div>
                    </div>
                <?php }
             }else{
              ?>
                <div class="col-sm-3 wow fadeInDown" data-wow-duration="2000ms">
                  <div class="single-count text-center">
                    <div class="count-icon mb-10">
                      <i class="fa fa-tasks"></i>
                    </div>
                    <div class="count-number mb-10">
                      <h4 class="counter" data-count="2150">1</h4>
                    </div>
                    <div class="count-title mb-10">
                      <h5>Projects Done</h5>
                    </div>
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="single-count text-center">
                    <div class="count-icon mb-10">
                      <i class="fa fa-users"></i>
                    </div>
                    <div class="count-number mb-10">
                      <h4 class="counter" data-count="150"></h4>
                    </div>
                    <div class="count-title mb-10">
                      <h5>happy clients</h5>
                    </div>
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="single-count text-center">
                    <div class="count-icon mb-10">
                      <i class="fa fa-clock-o"></i>
                    </div>
                    <div class="count-number mb-10">
                      <h4 class="counter" data-count="353"></h4>
                    </div>
                    <div class="count-title mb-10">
                      <h5>hours worked</h5>
                    </div>
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="single-count text-center">
                    <div class="count-icon mb-10">
                      <i class="fa fa-coffee"></i>
                    </div>
                    <div class="count-number mb-10">
                      <h4 class="counter" data-count="700"></h4>
                    </div>
                    <div class="count-title mb-10">
                      <h5>cups of coffee</h5>
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
    <!-- Counter Area End -->