<legend><?=$this->getTrans('settingsSlider') ?></legend>

<?php $slider = $this->get('slider')?>

<form id="article_form" class="form-horizontal" method="POST" action="">
    <?=$this->getTokenField(); ?>
    <legend><?=$this->getTrans('options1') ?></legend>
    <div class="form-group col-lg-12">
        <label for="image" class="col-lg-2 control-label">
            <?=$this->getTrans('image'); ?>:
        </label>
        <div class="col-lg-6">
            <div class="input-group">
                <input class="form-control"
                       type="text"
                       name="slider1"
                       id="selectedImage_1"
                       value="<?php if ($slider->getSlider1() != '') { echo $this->escape($slider->getSlider1()); } ?>" />
                <span class="input-group-addon"><a id="media" href="javascript:media_1()"><i class="fa fa-picture-o"></i></a></span>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="input-group">
                <?php if ($slider->getSlider1() != '') {
                    echo '<img style="width:100%; height:140px;" src="'.$this->getUrl().'/'.$slider->getSlider1().'" alt="logo">';
                } else {
                    echo '<i class="fas fa-exclamation-triangle"></i>';
                } ?>
            </div>
        </div>
    </div>
    <div class="form-group col-lg-12">
        <label for="slider1heading" class="col-lg-2">
            <?=$this->getTrans('heading') ?>:
        </label>
        <div class="col-lg-6">
            <input class="form-control"
                    type="text"
                    name="slider1heading"
                    id="slider1heading"
                    maxlength="70"
                    value="<?php if ($slider->getSlider1Heading() != '') { echo $this->escape($slider->getSlider1Heading()); } ?>" />
        </div>
    </div>
    <div class="form-group col-lg-12">
      <label for="background" class="col-lg-2 control-label">
          <?=$this->getTrans('headingcolor') ?>:
      </label>
      <div class="col-lg-2 input-group date">
          <input class="form-control color {hash:true}"
                 id="slider1headingcolor"
                 name="slider1headingcolor"
                 value="<?php if ($slider->getSlider1HeadingColor() != '') { echo $this->escape($slider->getSlider1HeadingColor()); } else { echo '#ff000'; } ?>">
          <span class="input-group-addon">
              <span class="fa fa-undo" onclick="document.getElementById('color').color.fromString('32333B')"></span>
          </span>
      </div>
    </div>
    <div class="form-group col-lg-12">
        <label for="description" class="col-lg-2 control-label">
            <?=$this->getTrans('description') ?>:
        </label>
        <div class="col-lg-6">
            <input class="form-control"
                    type="text"
                    name="slider1text"
                    id="slider1text"
                    maxlength="170"
                    value="<?php if ($slider->getSlider1Text() != '') { echo $this->escape($slider->getSlider1Text()); } ?>" />
        </div>
    </div>
    <div class="form-group col-lg-12">
        <label for="button1" class="col-lg-2 control-label">
            <?=$this->getTrans('button1') ?>:
        </label>
        <div class="col-lg-2">
            <div class="flipswitch">
                <input type="radio" class="flipswitch-input" id="button1-on" name="button1Switch" value="1" <?php if ($slider->getButton1Switch() == '1') { echo 'checked="checked"'; } ?> />
                <label for="button1-on" class="flipswitch-label flipswitch-label-on"><?=$this->getTrans('on') ?></label>
                <input type="radio" class="flipswitch-input" id="button1-off" name="button1Switch" value="0" <?php if ($slider->getButton1Switch() != '1') { echo 'checked="checked"'; } ?> />
                <label for="button1-off" class="flipswitch-label flipswitch-label-off"><?=$this->getTrans('off') ?></label>
                <span class="flipswitch-selection"></span>
            </div>
        </div>
        <div class="col-lg-2">
            <input class="form-control"
                   type="text"
                   name="button1"
                   id="button1"
                   maxlength="20"
                   placeholder="<?=$this->getTrans('buttonName') ?>"
                   value="<?php if ($slider->getButton1() != '') { echo $this->escape($slider->getButton1()); } ?>" />
        </div>
        <div class="col-lg-6">
            <input class="form-control"
                   type="text"
                   name="button1Url"
                   id="button1Url"
                   placeholder="<?=$this->getTrans('buttonUrl') ?>"
                   value="<?php if ($slider->getButton1Url() != '') { echo $this->escape($slider->getButton1Url()); } ?>" />
        </div>
      </div>
      <div class="form-group col-lg-12">
        <label for="background" class="col-lg-2 control-label">
            <?=$this->getTrans('buttoncolor') ?>:
        </label>
        <div class="col-lg-2 input-group date">
            <input class="form-control color {hash:true}"
                   id="button1back"
                   name="button1back"
                   value="<?php if ($slider->getButton1Back() != '') { echo $this->escape($slider->getButton1Back()); } else { echo '#ff000'; } ?>">
            <span class="input-group-addon">
                <span class="fa fa-undo" onclick="document.getElementById('color').color.fromString('32333B')"></span>
            </span>
        </div>
        <label for="background" class="col-lg-2 control-label">
            <?=$this->getTrans('buttonhover') ?>:
        </label>
        <div class="col-lg-2 input-group date">
            <input class="form-control color {hash:true}"
                   id="button1hover"
                   name="button1hover"
                   value="<?php if ($slider->getButton1Hover() != '') { echo $this->escape($slider->getButton1Hover()); } else { echo '#000000'; } ?>">
            <span class="input-group-addon">
                <span class="fa fa-undo" onclick="document.getElementById('color').color.fromString('32333B')"></span>
            </span>
        </div>
      </div>
    <legend><?=$this->getTrans('options2') ?></legend>
    <div class="form-group col-lg-12">
        <label for="image" class="col-lg-2 control-label">
            <?=$this->getTrans('image'); ?>:
        </label>
        <div class="col-lg-6">
            <div class="input-group">
                <input class="form-control"
                       type="text"
                       name="slider2"
                       id="selectedImage_2"
                       value="<?php if ($slider->getSlider2() != '') { echo $this->escape($slider->getSlider2()); } ?>" />
                <span class="input-group-addon"><a id="media" href="javascript:media_2()"><i class="fa fa-picture-o"></i></a></span>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="input-group">
                <?php if ($slider->getSlider2() != '') {
                    echo '<img style="width:100%; height:140px;" src="'.$this->getUrl().'/'.$slider->getSlider2().'" alt="logo">';
                } else {
                    echo '<i class="fas fa-exclamation-triangle"></i>';
                } ?>
            </div>
        </div>
    </div>
    <div class="form-group col-lg-12">
        <label for="heading" class="col-lg-2 control-label">
            <?=$this->getTrans('heading') ?>:
        </label>
        <div class="col-lg-6">
            <input class="form-control"
                    type="text"
                    name="slider2heading"
                    id="slider2heading"
                    maxlength="70"
                    value="<?php if ($slider->getSlider2Heading() != '') { echo $this->escape($slider->getSlider2Heading()); } ?>" />
        </div>
    </div>
    <div class="form-group col-lg-12">
      <label for="background" class="col-lg-2 control-label">
          <?=$this->getTrans('headingcolor') ?>:
      </label>
      <div class="col-lg-2 input-group date">
          <input class="form-control color {hash:true}"
                 id="slider2headingcolor"
                 name="slider2headingcolor"
                 value="<?php if ($slider->getSlider2HeadingColor() != '') { echo $this->escape($slider->getSlider2HeadingColor()); } else { echo '#ff000'; } ?>">
          <span class="input-group-addon">
              <span class="fa fa-undo" onclick="document.getElementById('color').color.fromString('32333B')"></span>
          </span>
      </div>
    </div>
    <div class="form-group col-lg-12">
        <label for="description" class="col-lg-2 control-label">
            <?=$this->getTrans('description') ?>:
        </label>
        <div class="col-lg-6">
            <input class="form-control"
                    type="text"
                    name="slider2text"
                    id="slider2text"
                    maxlength="170"
                    value="<?php if ($slider->getSlider2Text() != '') { echo $this->escape($slider->getSlider2Text()); } ?>" />
        </div>
    </div>
    <div class="form-group col-lg-12">
        <label for="button2" class="col-lg-2 control-label">
            <?=$this->getTrans('button1') ?>:
        </label>
        <div class="col-lg-2">
            <div class="flipswitch">
                <input type="radio" class="flipswitch-input" id="button2-on" name="button2Switch" value="1" <?php if ($slider->getButton2Switch() == '1') { echo 'checked="checked"'; } ?> />
                <label for="button2-on" class="flipswitch-label flipswitch-label-on"><?=$this->getTrans('on') ?></label>
                <input type="radio" class="flipswitch-input" id="button2-off" name="button2Switch" value="0" <?php if ($slider->getButton2Switch() != '1') { echo 'checked="checked"'; } ?> />
                <label for="button2-off" class="flipswitch-label flipswitch-label-off"><?=$this->getTrans('off') ?></label>
                <span class="flipswitch-selection"></span>
            </div>
        </div>
        <div class="col-lg-2">
            <input class="form-control"
                   type="text"
                   name="button2"
                   id="button2"
                   maxlength="20"
                   placeholder="<?=$this->getTrans('buttonName') ?>"
                   value="<?php if ($slider->getButton1() != '') { echo $this->escape($slider->getButton2()); } ?>" />
        </div>
        <div class="col-lg-6">
            <input class="form-control"
                   type="text"
                   name="button2Url"
                   id="button2Url"
                   placeholder="<?=$this->getTrans('buttonUrl') ?>"
                   value="<?php if ($slider->getButton2Url() != '') { echo $this->escape($slider->getButton2Url()); } ?>" />
        </div>
      </div>
      <div class="form-group col-lg-12">
        <label for="background" class="col-lg-2 control-label">
            <?=$this->getTrans('buttoncolor') ?>:
        </label>
        <div class="col-lg-2 input-group date">
            <input class="form-control color {hash:true}"
                   id="button2back"
                   name="button2back"
                   value="<?php if ($slider->getButton2Back() != '') { echo $this->escape($slider->getButton2Back()); } else { echo '#ff0000'; } ?>">
            <span class="input-group-addon">
                <span class="fa fa-undo" onclick="document.getElementById('color').color.fromString('32333B')"></span>
            </span>
        </div>
        <label for="background" class="col-lg-2 control-label">
            <?=$this->getTrans('buttonhover') ?>:
        </label>
        <div class="col-lg-2 input-group date">
            <input class="form-control color {hash:true}"
                   id="button2hover"
                   name="button2hover"
                   value="<?php if ($slider->getButton2Hover() != '') { echo $this->escape($slider->getButton2Hover()); } else { echo '#000000'; } ?>">
            <span class="input-group-addon">
                <span class="fa fa-undo" onclick="document.getElementById('color').color.fromString('32333B')"></span>
            </span>
        </div>
    </div>
    <legend><?=$this->getTrans('options3') ?></legend>
    <div class="form-group col-lg-12">
        <label for="image" class="col-lg-2 control-label">
            <?=$this->getTrans('image'); ?>:
        </label>
        <div class="col-lg-6">
            <div class="input-group">
                <input class="form-control"
                       type="text"
                       name="slider3"
                       id="selectedImage_3"
                       value="<?php if ($slider->getSlider3() != '') { echo $this->escape($slider->getSlider3()); } ?>" />
                <span class="input-group-addon"><a id="media" href="javascript:media_3()"><i class="fa fa-picture-o"></i></a></span>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="input-group">
                <?php if ($slider->getSlider3() != '') {
                    echo '<img style="width:100%; height:140px;" src="'.$this->getUrl().'/'.$slider->getSlider3().'" alt="logo">';
                } else {
                    echo '<i class="fas fa-exclamation-triangle"></i>';
                } ?>
            </div>
        </div>
    </div>
    <div class="form-group col-lg-12">
        <label for="heading" class="col-lg-2 control-label">
            <?=$this->getTrans('heading') ?>:
        </label>
        <div class="col-lg-6">
            <input class="form-control"
                    type="text"
                    name="slider3heading"
                    id="slider3heading"
                    maxlength="70"
                    value="<?php if ($slider->getSlider3Heading() != '') { echo $this->escape($slider->getSlider3Heading()); } ?>" />
        </div>
    </div>
    <div class="form-group col-lg-12">
      <label for="background" class="col-lg-2 control-label">
          <?=$this->getTrans('headingcolor') ?>:
      </label>
      <div class="col-lg-2 input-group date">
          <input class="form-control color {hash:true}"
                 id="slider3headingcolor"
                 name="slider3headingcolor"
                 value="<?php if ($slider->getSlider3HeadingColor() != '') { echo $this->escape($slider->getSlider3HeadingColor()); } else { echo '#ff000'; } ?>">
          <span class="input-group-addon">
              <span class="fa fa-undo" onclick="document.getElementById('color').color.fromString('32333B')"></span>
          </span>
      </div>
    </div>
    <div class="form-group col-lg-12">
        <label for="description" class="col-lg-2 control-label">
            <?=$this->getTrans('description') ?>:
        </label>
        <div class="col-lg-6">
            <input class="form-control"
                    type="text"
                    name="slider3text"
                    id="slider3text"
                    maxlength="170"
                    value="<?php if ($slider->getSlider3Text() != '') { echo $this->escape($slider->getSlider3Text()); } ?>" />
        </div>
    </div>
    <div class="form-group col-lg-12">
        <label for="button3" class="col-lg-2 control-label">
            <?=$this->getTrans('button1') ?>:
        </label>
        <div class="col-lg-2">
            <div class="flipswitch">
                <input type="radio" class="flipswitch-input" id="button3-on" name="button3Switch" value="1" <?php if ($slider->getButton3Switch() == '1') { echo 'checked="checked"'; } ?> />
                <label for="button3-on" class="flipswitch-label flipswitch-label-on"><?=$this->getTrans('on') ?></label>
                <input type="radio" class="flipswitch-input" id="button3-off" name="button3Switch" value="0" <?php if ($slider->getButton3Switch() != '1') { echo 'checked="checked"'; } ?> />
                <label for="button3-off" class="flipswitch-label flipswitch-label-off"><?=$this->getTrans('off') ?></label>
                <span class="flipswitch-selection"></span>
            </div>
        </div>
        <div class="col-lg-2">
            <input class="form-control"
                   type="text"
                   name="button3"
                   id="button3"
                   maxlength="20"
                   placeholder="<?=$this->getTrans('buttonName') ?>"
                   value="<?php if ($slider->getButton1() != '') { echo $this->escape($slider->getButton3()); } ?>" />
        </div>
        <div class="col-lg-6">
            <input class="form-control"
                   type="text"
                   name="button3Url"
                   id="button3Url"
                   placeholder="<?=$this->getTrans('buttonUrl') ?>"
                   value="<?php if ($slider->getButton3Url() != '') { echo $this->escape($slider->getButton3Url()); } ?>" />
        </div>
      </div>
      <div class="forum-group col-lg-12">
        <label for="background" class="col-lg-2 control-label">
            <?=$this->getTrans('buttoncolor') ?>:
        </label>
        <div class="col-lg-2 input-group date">
            <input class="form-control color {hash:true}"
                   id="button3back"
                   name="button3back"
                   value="<?php if ($slider->getButton3Back() != '') { echo $this->escape($slider->getButton3Back()); } else { echo '#ff000'; } ?>">
            <span class="input-group-addon">
                <span class="fa fa-undo" onclick="document.getElementById('color').color.fromString('32333B')"></span>
            </span>
        </div>
        <label for="background" class="col-lg-2 control-label">
            <?=$this->getTrans('buttonhover') ?>:
        </label>
        <div class="col-lg-2 input-group date">
            <input class="form-control color {hash:true}"
                   id="button3hover"
                   name="button3hover"
                   value="<?php if ($slider->getButton3Hover() != '') { echo $this->escape($slider->getButton3Hover()); } else { echo '#000000'; } ?>">
            <span class="input-group-addon">
                <span class="fa fa-undo" onclick="document.getElementById('color').color.fromString('32333B')"></span>
            </span>
        </div>
    </div>
    <?=$this->getSaveBar('save') ?>
</form>
<?=$this->getDialog('mediaModal', $this->getTrans('media'), '<iframe frameborder="0"></iframe>'); ?>
<script>
    <?=$this->getMedia()
        ->addMediaButton($this->getUrl('admin/media/iframe/index/type/single/input/_1/'))
        ->addInputId('_1')
        ->addUploadController($this->getUrl('admin/media/index/upload'))
    ?>
    <?=$this->getMedia()
        ->addMediaButton($this->getUrl('admin/media/iframe/index/type/single/input/_2/'))
        ->addInputId('_2')
        ->addUploadController($this->getUrl('admin/media/index/upload'))
    ?>
    <?=$this->getMedia()
        ->addMediaButton($this->getUrl('admin/media/iframe/index/type/single/input/_3/'))
        ->addInputId('_3')
        ->addUploadController($this->getUrl('admin/media/index/upload'))
    ?>
</script>
<script src="<?=$this->getStaticUrl('js/jscolor/jscolor.js') ?>"></script>
