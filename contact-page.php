        <?php global $portfolio_master; ?>
    <!-- Contact Area Start -->
    <section id="contact" class="contact-section section" style="background-image: url(<?php echo $portfolio_master['contact_bg_image']['url']; ?>);">
      <div class="container">
        <div class="section-title text-center uppercase">
          <h2 class="mb-60"><?php echo $portfolio_master['contact_heading']; ?></h2>
        </div>
        <div class="col-sm-12">
          <div class="row">
            <div class="col-sm-6">
              <div class="row">
              <?php
                if(is_array($portfolio_master['contact_address'])){
                  foreach ($portfolio_master['contact_address'] as $single) { ?>
                        <div class="col-sm-6">
                          <div class="contact-box wow fadeInLeft" data-wow-duration="2000ms">
                            <div class="contact-icon mb-10">
                              <i class="fa <?php echo $single['url']; ?>"></i>
                            </div>
                            <div class="contact-address mb-20">
                              <h3 class="mb-10"><?php echo $single['title']; ?></h3>
                              <p><?php echo $single['description']; ?></p>
                            </div>
                          </div>
                        </div>

                <?php  } }
              ?>
              </div> 
            </div>
            <div class="col-sm-6">
              <div class="contact-form wow fadeInRight" data-wow-duration="2000ms">
                <form action="">
                  <div class="form-group">
                    <div class="col-sm-6 mb-30">
                      <input type="text" class="form-control" placeholder="Your Name">
                    </div>
                    <div class="col-sm-6 mb-30">
                      <input type="email" class="form-control" placeholder="Your Email">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-12 mb-30">
                      <textarea class="form-control auto" rows="3" placeholder="Type your message"></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-12">
                      <button class="common-btn" type="submit">Submit</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
               
      </div>
    </section>
    <!-- Contact Area End -->