    <?php global $portfolio_master; ?>
    <!-- footer start-->
    <section class="foter-area">
      <footer>
        <div class="basic-footer text-center gray-bg ptb-20">
          <div class="container">
            <div class="footer-logo">
              <a href=""><h5><?php echo $portfolio_master['footer_heading']; ?></h5></a>
            </div>
            <div class="footer-social-icon">
            <?php
                if(is_array($portfolio_master['footer_icon'])){
                  foreach ($portfolio_master['footer_icon'] as $single) { ?>
                        <a href="<?php echo $single['url']; ?>"><i class="fa <?php echo $single['title']; ?>"></i></a>

                <?php  } }
              ?>
            </div>
            <div class="copyright mt-10">
              <p><?php echo $portfolio_master['footer_copy']; ?></p>
            </div>
          </div>
        </div>
      </footer>
    </section>
    <a href="#" class="go-up"><i class="fa <?php echo $portfolio_master['scrol_icon']; ?>" aria-hidden="true"></i></a>
    <!-- /Footer Area End -->




    <?php wp_footer(); ?>
  </body>
</html>