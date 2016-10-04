<header class="banner">
  
    <div class="header1">  
      <nav class="navbar navbar-default">
                <div class="container mycontainer">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header page-scroll">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                       
                        <a class="navbar-brand" href="<?php bloginfo('url'); ?>"><img class="logo" src="<?php bloginfo('template_directory'); ?>/cssJs/pruebas.png" alt="" /></a>

                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                                 <?php /* Primary navigation */
                              wp_nav_menu( array(
                                'menu' => 'top_menu',
                                'depth' => 2,
                                'container' => false,
                                'menu_class' => 'nav',
                                //Process nav menu using our custom nav walker
                                'walker' => new wp_bootstrap_navwalker())
                              );
                              ?>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
                <!-- /.container-fluid -->
            </nav>
          </div>
          <br><br><br><br>
        <header id="page-title">
            <div class="container">
                  <?php
                  
                      $site_title = get_bloginfo( 'name' );
                      $site_url = network_site_url( '/' );
                      $site_description = get_bloginfo( 'description' );
                      echo '<a href="' . $site_url . '"> <h1>'   .$site_title. '</h1></a>' 

                  
                  ?>

                      <ul class="breadcrumb">
                        <li><a href="http://psycoware.com/Publica/Default.aspx">Inicio</a></li>
                        <li class="active">Blog</li>
                      </ul>
            </div>
        </header>


        
</header>
