<header class="banner">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
         <ul class="list-inline header-options text-right">
            <li>
              <span class="click-to-call hidden-sm hidden-md hidden-lg"><span class="glyphicon glyphicon-earphone"></span> FALE CONOSCO: (62) 3928-1213</span>
              <span class="call-us hidden-xs"><span class="glyphicon glyphicon-earphone"></span> FALE CONOSCO: (62) 3928-1213</span>
            </li>
         </ul>
      </div>
    </div>
    <div class="navbar-header">

      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

      <div class="pull-right hidden-sm hidden-md hidden-lg xs-order">
        <ul id="menu-order-portugues" class="order-nav">
          <li class="btn-order menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-92053 active"><a title="Encomendar" class="page-scroll" href="#">Pe&ccedil;a Agora</a></li>
        </ul>
      </div>
      <a class="brand" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
    </div>
    <nav class="nav-primary navbar-collapse pull-right menu-topo-mobile">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav', 'menu_id' => 'menu-main-menu-portugues', 'container' => false]);
        ?>

        <div class="pull-right hidden-xs">
          <ul id="menu-order-portugues-1" class="nav order-nav">
            <li class="btn-order menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-92053 active"><a title="Encomendar" class="page-scroll" href="#">Pe&ccedil;a Agora</a></li>
          </ul>
        </div>
      <?php
      endif;
      ?>
    </nav>
  </div>
</header>
