<legend><?=$this->getTrans('menuEsportlayout') ?></legend>

<div class="row">
    <div class="col-sm-6">
        <div class="thumbnail media">
            <div class="media-body">
                <h4 class="media-heading"><a href="<?=$this->getUrl(array('module' => 'esportlayout', 'controller' => 'index', 'action' => 'logo')) ?>"><?=$this->getTrans('settingsLogo') ?></a></h4>
                <hr>
                <p><?=$this->getTrans('settingsLogoInfo') ?></p>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="thumbnail media">
            <div class="media-body">
                <h4 class="media-heading"><a href="<?=$this->getUrl(array('module' => 'esportlayout', 'controller' => 'index', 'action' => 'slider')) ?>"><?=$this->getTrans('settingsSlider') ?></a></h4>
                <hr>
                <p><?=$this->getTrans('settingsSliderInfo') ?></p>
            </div>
        </div>
    </div>
</div>
