    <?php global $portfolio_master; ?>
    <!-- Slider Area Start -->
    <section id="home" class="slider-section" style="background-image: url(<?php echo $portfolio_master['header_image']['url']; ?>);">
      <div class="container">
        <div class="hero">
          <div class="slider-content">
            <h2 class="cd-headline clip is-full-width">
              <span class="cd-words-wrapper">
              <?php
                if(is_array($portfolio_master['animate_heading'])){
                  foreach ($portfolio_master['animate_heading'] as $single) { ?>
                        <b class="is-<?php echo $single['url']; ?>"><?php echo $single['title']; ?></b>

                <?php  } }
              ?>
              </span>
            </h2>
            <p class="wow <?php echo $portfolio_master['header_slogan_wow']; ?>"><?php echo $portfolio_master['header_slogan']; ?></p>
            <div class="slider-button mt-30 wow <?php echo $portfolio_master['header_button_wow']; ?>">
              <a href="#portfolio" class="common-btn"><?php echo $portfolio_master['header_button']; ?></a>
            </div>
            <div class="slider-icon wow fadeInDown" data-wow-iteration="infinite">
              <a href="#about"><i class="fa fa-angle-down"></i></a>
            </div>
          </div>  
        </div>
      </div>
    </section>
    <!-- Slider Area End -->