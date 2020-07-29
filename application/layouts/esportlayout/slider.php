<div class="flexslider">
  <ul class="slides">
    <?php if ($this->getLayoutSetting('slider1') != '') { ?>
    <li>
      <img src="<?=$this->getBaseUrl($this->getLayoutSetting('slider1')) ?>" alt="Picture 1" align="middle"/>
      <div class="container slider-content">
        <div class="flex-caption col-xs-12 col-sm-6">
          <h1 class="esporth1 h1_1"><?=$this->getLayoutSetting('slider1heading') ?></h1>
          <p><?=$this->getLayoutSetting('slider1text') ?></p>
            <?php if ($this->getLayoutSetting('button1switch') == '1') { ?>
                <a target="_blank" href="<?=$this->getLayoutSetting('button1url')?>" class="buttonlink btn btn1"><?=$this->getLayoutSetting('button1')?></a>
            <?php } ?>
        </div>
      </div>
    </li>
  <?php } ?>
  <?php if ($this->getLayoutSetting('slider2') != '') { ?>
    <li>
      <img src="<?=$this->getBaseUrl($this->getLayoutSetting('slider2')) ?>" alt="Picture 2" align="middle"/>
      <div class="container slider-content">
        <div class="flex-caption col-xs-12 col-sm-6">
          <h1 class="esporth1 h1_1"><?=$this->getLayoutSetting('slider2heading') ?></h1>
          <p><?=$this->getLayoutSetting('slider2text') ?></p>
            <?php if ($this->getLayoutSetting('button2switch') == '1') { ?>
                 <a target="_blank" href="<?=$this->getLayoutSetting('button2url')?>" class="buttonlink btn btn2"><?=$this->getLayoutSetting('button2')?></a>
            <?php } ?>
        </div>
      </div>
    </li>
  <?php } ?>
  <?php if ($this->getLayoutSetting('slider3') != '') { ?>
    <li>
      <img src="<?=$this->getBaseUrl($this->getLayoutSetting('slider3')) ?>" alt="Picture 3" align="middle"/>
      <div class="container slider-content">
        <div class="flex-caption col-xs-12 col-sm-6">
          <h1 class="esporth1 h1_1"><?=$this->getLayoutSetting('slider3heading') ?></h1>
          <p><?=$this->getLayoutSetting('slider3text') ?></p>
            <?php if ($this->getLayoutSetting('button3switch') == '1') { ?>
             <a target="_blank" href="<?=$this->getLayoutSetting('button3url')?>" class="buttonlink btn btn3"><?=$this->getLayoutSetting('button3')?></a>
            <?php } ?>
        </div>
      </div>
    </li>
    <?php } ?>
  </ul>
  <style>
    .btn1 {background:<?=$this->getLayoutSetting('button1color')?>;}.btn1:hover {background:<?=$this->getLayoutSetting('button1hover')?>;}
    .btn2 {background:<?=$this->getLayoutSetting('button2color')?>;}.btn2:hover {background:<?=$this->getLayoutSetting('button2hover')?>;}
    .btn3 {background:<?=$this->getLayoutSetting('button3color')?>;}.btn3:hover {background:<?=$this->getLayoutSetting('button3hover')?>;}
  </style>
</div>
