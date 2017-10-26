    <?php global $portfolio_master; ?>
    <!-- About Area Start -->
    <section id="about" class="about-section section" id="s">
      <div class="container">
        <div class="section-title text-center uppercase">
          <h2 class="mb-60"><?php echo $portfolio_master['about_heading']; ?></h2>
        </div>
        <div class="col-sm-6">
          <div class="about-me">
            <h3 class="mb-20"><?php echo $portfolio_master['about_profile_title']; ?></h3>
            <p><?php echo $portfolio_master['about_profile_desc']; ?></p><br>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="skill-title">
            <h3 class="mb-20"><?php echo $portfolio_master['about_skill_title']; ?></h3>
          </div>
          <div class="col-sm-12 col-xs-12">
            <?php
                if(is_array($portfolio_master['skill_bar'])){
                  foreach ($portfolio_master['skill_bar'] as $single) { ?>

                        <div class="progress skill-bar wow fadeInRight" data-wow-duration="2000ms">
                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="<?php echo $single['description']; ?>" aria-valuemin="0" aria-valuemax="100">
                                <span class="skill"><?php echo $single['title']; ?> <i class="val"><?php echo $single['url']; ?></i></span>
                            </div>
                        </div>

                <?php  } }
              ?>
          </div>
        </div>
      </div>
    </section>
    <!-- About Area End -->