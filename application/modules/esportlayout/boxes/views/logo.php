<?php $logo = $this->get('logo');

if ($logo->getLogoUrl() != '') {
    echo $this->getUrl().'/'.$logo->getLogoUrl();
} else {
    echo $this->getUrl().'/application/layouts/privatlayout/images/logo.png';
}

?>