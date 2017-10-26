<?php get_header('new'); ?>


    <!-- Slider Area Start -->
    <section class="blog-slider">
      <div class="main-slider">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
            <?php
            $x=0;
            $ebit_post = null;
            $ebit_post = new WP_Query(array(
                'post_type' => 'slider',
                'posts_per_page' => -1,
            ));
            
            if ($ebit_post->have_posts()){
              $x=0;
                while ( $ebit_post->have_posts() ){
                  $x++;
                    $ebit_post->the_post();                    
                    $slider_heading = get_post_meta( get_the_ID(),'_portfolio_master_slider_heading', true); 
                    $slider_button = get_post_meta( get_the_ID(),'_portfolio_master_slider_button', true); 
                    $slider_heading_wow = get_post_meta( get_the_ID(),'_portfolio_master_slider_heading_wow', true); 
                    $slider_title_wow = get_post_meta( get_the_ID(),'_portfolio_master_slider_title_wow', true); 
                    $slider_content_wow = get_post_meta( get_the_ID(),'_portfolio_master_slider_content_wow', true); 
                    $slider_button_wow = get_post_meta( get_the_ID(),'_portfolio_master_slider_button_wow', true); 
                    ?>
                    <div class="item <?php if ($x==1){ echo 'active';} ?>">
                      <?php the_post_thumbnail() ?> 
                        <div class="slide-animate2">
                          <h3 class="wow <?php echo $slider_heading_wow; ?>" data-wow-duration="2s"><?php echo $slider_heading; ?></h3>
                          <a href="<?php the_permalink(); ?>"><h2 class="wow <?php echo $slider_title_wow; ?>" data-wow-duration="2s"><?php the_title(); ?></h2></a>
                          <h4 class="wow <?php echo $slider_content_wow; ?>" data-wow-duration="2s"><?php echo wp_trim_words( get_the_content(), 10, '...' ); ?></h4><br>
                          <button class="common-btn wow <?php echo $slider_button_wow; ?>" data-wow-duration="2s"><?php echo $slider_button; ?></button>
                      </div>         
                    </div>
                  <?php }
             }else{
              ?>
                <div class="item active">
                  <img src="<?php echo get_template_directory_uri();?>/assets/img/1.jpg" alt="..."> 
                    <div class="slide-animate2">
                      <h3 class="wow bounceInLeft" data-wow-duration="2s">Welcome My Blog</h3>
                      <h2 class="wow bounceInRight" data-wow-duration="2s">want to change world</h2>
                      <h4 class="wow bounceIn" data-wow-duration="2s">A Small Never Named Duden Flows..</h4><br>
                      <button class="common-btn wow bounceInUp" data-wow-duration="2s">See More</button>
                  </div>         
                </div>
                <div class="item">
                  <img src="<?php echo get_template_directory_uri();?>/assets/img/2.jpg" alt="...">
                  <div class="slide-animate2">
                    <h3 class="wow bounceInLeft" data-wow-duration="2s">Welcome To My Blog</h3>
                    <h2 class="wow bounceInRight" data-wow-duration="2s">want to change world</h2>
                    <h4 class="wow bounceIn" data-wow-duration="2s">A Small Never Named Duden Flows..</h4><br>
                    <button class="common-btn wow bounceInUp" data-wow-duration="2s">See More</button>
                  </div>  
                </div>
                 <div class="item">
                  <img src="<?php echo get_template_directory_uri();?>/assets/img/1(2).jpg" alt="...">
                  <div class="slide-animate2">
                    <h3 class="wow bounceInLeft" data-wow-duration="2s">Welcome My Blog</h3>
                    <h2 class="wow bounceInRight" data-wow-duration="2s">want to change world</h2>
                    <h4 class="wow bounceIn" data-wow-duration="2s">A Small Never Named Duden Flows..</h4><br>
                    <button class="common-btn wow bounceInUp" data-wow-duration="2s">See More</button>
                  </div>
                </div> 
              <?php
           }
            wp_reset_postdata();
          ?>
           
          </div> 

          <!-- Controls -->
          <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>

      </div>
    </section>
    <!-- Slider Area End -->

    <!-- Blog Area Start -->
    <section>
      <div class="container">
        <div class="main-blog-area mt-30">
          <div class="col-sm-12 mb-30">
            <div class="row">
              <div class="col-sm-8 ptrbl-30 blog-post-area">
                <div class="blog-heading mb-40"> 
                  <h2>Latest Post</h2>
                </div>
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
              ?>
                <div class="single-post mb-30">
                  <div class="post-image">
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/2(2).jpg" alt="">
                    <div class="image-shade"></div>
                  </div>
                  <div class="post-content ptrbl-20">
                    <div class="post-meta mb-10 ">
                      <a href="#" class="mr-20"><i class="fa fa-user mr-10"></i>Admin</a>
                      <a href="#"><i class="fa fa-calendar mr-10"></i>Jan 14 2017</a>
                    </div>
                    <div class="post-details">
                      <a href="#"><h3 class="mb-15">Here Goes An Awesome Blog Title</h3></a>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae aut sed delectus vel distinctio odio. Odit non, ipsa facilis vero. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa possimus repellendus fugiat magni minus laboriosam quia quae, doloremque corrupti harum nostrum recusandae? Quaerat suscipit quae a consequatur perspiciatis nam neque dolor dolorem beatae pariatur eius natus atque necessitatibus voluptates dolorum quibusdam quidem soluta, accusantium iure est nulla odit veniam qui!</p>
                    </div>
                  </div> 
                </div>
                
              <?php
           }
            wp_reset_postdata();
          ?>
                
                <div class="blog-pagi text-center">
                    <?php the_posts_pagination(array(
                                      'prev_text' => 'PREVIOUS',
                                      'next_text' => 'NEXT',
                                      'screen_reader_text' => ' ',
                                    ));
                    ?>
                  </div>    
              </div>
              <?php get_sidebar(); ?>
            </div>
          </div>
          
        </div>
      </div>
    </section>
    <!-- Blog Area End -->


    <?php get_template_part( 'contact', 'page' ); ?>

<?php get_footer(); ?>

