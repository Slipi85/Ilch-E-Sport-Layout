<!DOCTYPE html>
<html lang="de">
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
    <link href="<?=$this->getLayoutUrl('css/normalize.css') ?>" rel="stylesheet">
    <link href="<?=$this->getLayoutUrl('css/flexslider.css') ?>" rel="stylesheet">
    <link href="<?=$this->getLayoutUrl('css/style.css') ?>" rel="stylesheet">
    <?=$this->getCustomCSS() ?>
    <script src="<?=$this->getVendorUrl('twbs/bootstrap/dist/js/bootstrap.min.js') ?>"></script>
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
  </head>
  <body>
    <section id="main" class="user-panel">
      <div class="container">
        <div class="esport">
          <div class="row">
            <div class="col-xs-12">
              <?=$this->getContent() ?>
            </div>
          </div>
        </div>
      </div>
    </section>
  </body>
