  <?php get_header(); 

  $opt_sorter = $portfolio_master['opt_sorter']['Active']; 


                if(is_array($opt_sorter)){
                  foreach ($opt_sorter as $key => $value) {
                     switch ($key) {
                       case 'slider':
                        get_template_part( 'slider', 'page' );
                         break;
                       case 'about':
                        get_template_part( 'about', 'page' );
                         break;
                       case 'process':
                        get_template_part( 'process', 'page' );
                         break;
                       case 'counter':
                        get_template_part( 'counter', 'page' );
                         break;
                       case 'sevices':
                        get_template_part( 'services', 'page' );
                         break;
                       case 'portfolio':
                        get_template_part( 'portfolio', 'page' );
                         break;
                       case 'testimonial':
                        get_template_part( 'testimonial', 'page' );
                         break;
                       case 'blog':
                        get_template_part( 'blog', 'page' );
                         break;
                       case 'hire':
                        get_template_part( 'hire', 'page' );
                         break;
                       case 'contact':
                        get_template_part( 'contact', 'page' );
                         break;
                     }
                  } 
                }
              ?>


  <?php get_footer(); ?>