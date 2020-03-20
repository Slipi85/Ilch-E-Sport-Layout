<?php $slider = $this->get('slider')?>
<div class="flexslider">
  <ul class="slides">
    <?php if ($slider->getSlider1() != '') { ?>
    <li>
      <img src="<?=$this->getUrl().$slider->getSlider1() ?>" alt="Picture 1" align="middle"/>
      <div class="container slider-content">
        <div class="flex-caption col-xs-12 col-sm-6">
          <h1 class="esporth1 h1_1"><?=$slider->getSlider1Heading() ?></h1>
          <p><?=$slider->getSlider1Text() ?></p>
          <?php
          $buttons = '';
          if ($slider->getButton1Switch() == 1) {
              $buttons .= '<a target="_blank" href="'.$slider->getButton1Url().'" class="buttonlink btn1">'.$slider->getButton1().'</a>';
          }
          if ($slider->getButton1Switch() != 0) {
              echo '<p>'.$buttons.'</p>';
          }
           ?>
        </div>
      </div>
    </li>
    <?php } ?>
    <?php if ($slider->getSlider2() != '') { ?>
    <li>
      <img src="<?=$this->getUrl().$slider->getSlider2() ?>" alt="Picture 2" align="middle"/>
      <div class="container slider-content">
        <div class="flex-caption col-xs-12 col-sm-6">
          <h1 class="esporth1 h1_2"><?=$slider->getSlider2Heading() ?></h1>
          <p><?=$slider->getSlider2Text() ?></p>
          <?php
          $buttons = '';
          if ($slider->getButton2Switch() == 1) {
              $buttons .= '<a target="_blank" href="'.$slider->getButton2Url().'" class="buttonlink btn2">'.$slider->getButton2().'</a>';
          }
          if ($slider->getButton2Switch() != 0) {
              echo '<p>'.$buttons.'</p>';
          }
           ?>
        </div>
      </div>
    </li>
    <?php } ?>
    <?php if ($slider->getSlider3() != '') { ?>
    <li>
      <img src="<?=$this->getUrl().$slider->getSlider3() ?>" alt="Picture 3" align="middle"/>
      <div class="container slider-content">
        <div class="flex-caption col-xs-12 col-sm-6">
          <h1 class="esporth1 h1_3"><?=$slider->getSlider3Heading() ?></h1>
          <p><?=$slider->getSlider3Text() ?></p>
          <?php
          $buttons = '';
          if ($slider->getButton3Switch() == 1) {
              $buttons .= '<a target="_blank" href="'.$slider->getButton3Url().'" class="buttonlink btn3">'.$slider->getButton3().'</a>';
          }
          if ($slider->getButton3Switch() != 0) {
              echo '<p>'.$buttons.'</p>';
          }
           ?>
        </div>
      </div>
    </li>
    <?php } ?>
  </ul>
  <style>
    .btn1 {background:<?php echo $slider->getButton1Back()?>;}.btn1:hover {background:<?php echo $slider->getButton1Hover()?>;}
    .btn2 {background:<?php echo $slider->getButton2Back()?>;}.btn2:hover {background:<?php echo $slider->getButton2Hover()?>;}
    .btn3 {background:<?php echo $slider->getButton3Back()?>;}.btn3:hover {background:<?php echo $slider->getButton3Hover()?>;}
    .h1_1 {color:<?php echo $slider->getSlider1HeadingColor()?>;}
    .h1_2 {color:<?php echo $slider->getSlider2HeadingColor()?>;}
    .h1_3 {color:<?php echo $slider->getSlider3HeadingColor()?>;}
  </style>
</div>
