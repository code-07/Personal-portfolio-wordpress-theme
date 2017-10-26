    <?php global $portfolio_master; ?>
    <!-- Blog Area Start -->
    <section id="blog" class="blog-section section">
      <div class="container">
        <div class="section-title text-center uppercase">
          <h2 class="mb-60">LATEST POSTS</h2>
        </div>
          <?php
            $ebit_post = null;
            $ebit_post = new WP_Query(array(
                'post_type' => 'post',
                'posts_per_page' => 3,
            ));
            if ($ebit_post->have_posts()){
                while ( $ebit_post->have_posts() ){
                    $ebit_post->the_post();  
                    ?>
                   <div class="col-sm-4 wow fadeInUp" data-wow-duration="2000ms">
                  <div class="single-post">
                    <div class="post-image mb-10">
                      <?php the_post_thumbnail('portfolio-img') ?>
                      <a href="<?php the_permalink(); ?>"><div class="image-shade"></div></a>
                    </div>
                    <div class="post-meta mb-15">
                      <a href="<?php the_permalink(); ?>" class="mr-20"><i class="fa fa-user mr-10"></i><?php the_author(); ?></a>
                      <a href="<?php the_permalink(); ?>"><i class="fa fa-calendar mr-10"></i><?php echo get_the_date(); ?></a>
                    </div>
                    <div class="post-details">
                      <a href="<?php the_permalink(); ?>"><h3 class="mb-20"><?php the_title(); ?></h3></a>
                      <p><?php echo wp_trim_words( get_the_content(), 20, '...' ); ?></p>
                    </div>
                  </div>
                </div>
                <?php }
             }else{
              ?>
                <div class="col-sm-4">
                  <div class="single-post">
                    <div class="post-image mb-10">
                      <img src="<?php echo get_template_directory_uri();?>/assets/img/1(2).jpg" alt="">
                      <div class="image-shade"></div>
                    </div>
                    <div class="post-meta mb-15">
                      <a href="#" class="mr-20"><i class="fa fa-user mr-10"></i>Admin</a>
                      <a href="#"><i class="fa fa-calendar mr-10"></i>Jan 14 2017</a>
                    </div>
                    <div class="post-details">
                      <a href="#"><h3 class="mb-20">Here Goes An Awesome Blog Title</h3></a>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae aut sed delectus vel distinctio odio. Odit non, ipsa facilis vero.</p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="single-post">
                    <div class="post-image mb-10">
                      <img src="<?php echo get_template_directory_uri();?>/assets/img/3(2).jpg" alt="">
                      <div class="image-shade"></div>
                    </div>
                    <div class="post-meta mb-15">
                      <a href="#" class="mr-20"><i class="fa fa-user mr-10"></i>Admin</a>
                      <a href="#"><i class="fa fa-calendar mr-10"></i>Jan 14 2017</a>
                    </div>
                    <div class="post-details">
                      <a href="#"><h3 class="mb-20">Here Goes An Awesome Blog Title</h3></a>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae aut sed delectus vel distinctio odio. Odit non, ipsa facilis vero.</p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="single-post">
                    <div class="post-image mb-10">
                      <img src="<?php echo get_template_directory_uri();?>/assets/img/2(2).jpg" alt="">
                      <div class="image-shade"></div>
                    </div>
                    <div class="post-meta mb-15">
                      <a href="#" class="mr-20"><i class="fa fa-user mr-10"></i>Admin</a>
                      <a href="#"><i class="fa fa-calendar mr-10"></i>Jan 14 2017</a>
                    </div>
                    <div class="post-details">
                      <a href="#"><h3 class="mb-20">Here Goes An Awesome Blog Title</h3></a>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae aut sed delectus vel distinctio odio. Odit non, ipsa facilis vero.</p>
                    </div>
                  </div>
                </div>
              <?php
           }
            wp_reset_postdata();
          ?>
        
        <div class="col-sm-12">
          <div class="blog-btn text-center mt-50">
            <a href="<?php echo get_posts_page_url(); ?>" class="common-btn"><?php echo $portfolio_master['blog_button']; ?></a>
          </div>
        </div>  
      </div>      
    </section>
    <!-- Blog Area End -->