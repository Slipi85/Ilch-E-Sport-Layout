<legend><?=$this->getTrans('settingsLogo') ?></legend>

<?php $logo = $this->get('logo')?>

<form id="article_form" class="form-horizontal" method="POST" action="">
    <?=$this->getTokenField(); ?>
    <div class="form-group">
        <label for="logo" class="col-lg-2 control-label">
            <?=$this->getTrans('logo'); ?>:
        </label>
        <div class="col-lg-6">
            <div class="input-group">
                <input class="form-control"
                       type="text"
                       name="logoUrl"
                       id="selectedImage"
                       value="<?php if ($logo->getLogoUrl() != '') { echo $this->escape($logo->getLogoUrl()); } ?>" />
                <span class="input-group-addon"><a id="media" href="javascript:media()"><i class="fa fa-picture-o"></i></a></span>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="input-group">
                <?php if ($logo->getLogoUrl() != '') {
                    echo '<img style="width:100%;max-height:65px;" src="'.$this->getUrl().'/'.$logo->getLogoUrl().'" alt="logo">';
                } else {
                    echo '<img style="width:100%;max-height:65px;" src="'.$this->getUrl().'/application/layouts/privatlayout/images/logo.png" alt="logo">';
                } ?>
            </div>
        </div>
    </div>
    <?=$this->getSaveBar('save') ?>
</form>
<?=$this->getDialog('mediaModal', $this->getTrans('media'), '<iframe frameborder="0"></iframe>'); ?>
<script>
    <?=$this->getMedia()
        ->addMediaButton($this->getUrl('admin/media/iframe/index/type/single/'))
        ->addUploadController($this->getUrl('admin/media/index/upload'))
    ?>
</script>