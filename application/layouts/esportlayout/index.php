<?php /** @var $this \Ilch\Layout\Frontend */ ?><!DOCTYPE html>
<html lang="de" data-bs-theme="dark">
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--><html class="no-js"><!--<![endif]-->

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <?=$this->getHeader() ?>
  <link href="<?=$this->getVendorUrl('twbs/bootstrap/dist/css/bootstrap.min.css') ?>" rel="stylesheet">
  <link href="<?=$this->getLayoutUrl('css/flexslider.css') ?>" rel="stylesheet">
  <link href="<?=$this->getLayoutUrl('css/style.css') ?>" rel="stylesheet">
  <?=$this->getCustomCSS() ?>
  <script src="<?=$this->getVendorUrl('twbs/bootstrap/dist/js/bootstrap.bundle.min.js') ?>"></script>
  <script src="<?=$this->getLayoutUrl('js/modernizr.min.js') ?>"></script>
  <script type="text/javascript">
    $(document).ready(function () {
      var top = $('header').offset().top - parseFloat($('header').css('marginTop').replace(/auto/, 10));
      $(window).scroll(function (event) {
        var y = $(this).scrollTop();
        if (y >= top) {
          $('header').addClass('fixed');
        } else {
          $('header').removeClass('fixed');
        }
        });
      });
  </script>
  <style>
  a {color:<?=$this->getLayoutSetting('linkColor') ?>;}
  a:hover {color:<?=$this->getLayoutSetting('linkHover') ?>;}
  </style>
</head>

<body id="top">

  <!-- top bar -->
  <div class="topbar">
    <div class="userpanel text-center">
      <?=$this->getBox('user', 'login', 'userpanel'); ?>
    </div>
  </div>

  <!-- header area -->
  <header class="header_slider">
    <div class="navigation">
      <div class="ilch-flex container">
          <!-- navigation area -->
          <div id="banner">
          <ul class="list-unstyled"><li><a href="/"><img id="logo" src="<?=$this->getBaseUrl($this->getLayoutSetting('logourl')) ?>" alt="logo"></a></li></ul>
          </div>
          <div id="topnav" role="navigation">
            <div class="menu-toggle float-end"><i class="fa-solid fa-bars" aria-hidden="true"></i></div>
            <ul class="srt-menu" id="menu-main-navigation">
            <?php
              echo $this->getMenu(1,
              '<li><a href="#" title="%s">%s</a>%c</li>',
              [
                'menus' => [
                  'ul-class-root' => '',
                  'ul-class-child' => '',
                  'allow-nesting' => false
                ],
                'boxes' => [
                  'render' => false
                ],
              ]);
            ?>
            </ul>
          </div><!-- end navigation -->
      </div>
    </div>

    <section id="slider" class="clearfix">
        <?php include('slider.php'); ?>
    </section>

  </header>
  <!-- end header -->
  <!-- main area -->
  <div id="main" class="container">
    <div class="esport">
      <div class="row-esportlayout">
        <div class="col-xs-12 col-sm-9 content">
          <div class="card">
            <div class="_main-bar"><?=$this->getHmenu() ?></div>
            <div class="card-body">
              <?=$this->getContent() ?>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-sm-3 sidebar-esportlayout">
          <?php
          echo $this->getMenu(2,
            '<div class="card">
            <div class="box-header">%s</div>
            <div class="box-body">%c</div>
            </div>');
          ?>
        </div>
      </div>
    </div>

  </div>
  <!-- end main  -->

  <!-- footer area -->
  <footer id="footer-esportlayout">
    <div class="container clearfix">
      <div class="row row-esportlayout">
        <div class="col-xs-12 col-sm-6 text-center">
          <ul>
            <li>&copy; Ilch 2.0</li>
            <li>Ilch E-Sport Layout</li>
            <li>CMS by <a href="https://www.ilch.de/">Ilch</a></li>
          </ul>
        </div>
        <div class="col-xs-12 col-sm-6 text-center">
          <ul>
            <li><a href="/"><?=$this->getTrans('home') ?></a></li>
            <li><a href="<?=$this->getUrl(['module' => 'contact', 'controller' => 'index', 'action' => 'index']) ?>"><?=$this->getTrans('contact') ?></a></li>
            <li><a href="<?=$this->getUrl(['module' => 'imprint', 'controller' => 'index', 'action' => 'index']) ?>"><?=$this->getTrans('imprint') ?></a></li>
            <li><a href="<?=$this->getUrl(['module' => 'privacy', 'controller' => 'index', 'action' => 'index']) ?>"><?=$this->getTrans('privacy') ?></a></li>
          </ul>
        </div>
        <a href="#top" class="totop"><div class="innertop"></div></a>
      </div>
    </div>
  </footer><!-- end footer area -->

  <?=$this->getFooter() ?>
  <script src="<?=$this->getLayoutUrl('js/jquery.flexslider.min.js') ?>" defer></script>
  <!-- settings -->
  <script src="<?=$this->getLayoutUrl('js/main.js') ?>"></script>

</body>
</html>
