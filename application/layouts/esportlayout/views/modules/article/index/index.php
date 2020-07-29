<?php
$articles = $this->get('articles');
$categoryMapper = $this->get('categoryMapper');
$commentMapper = $this->get('commentMapper');

$adminAccess = null;
if ($this->getUser()) {
    $adminAccess = $this->getUser()->isAdmin();
}
?>

<h1><?=$this->getTrans('menuArticle') ?></h1>
<?php if ($articles != ''):
    $displayedArticles = 0;

    foreach ($articles as $article):
        if (!is_in_array($this->get('readAccess'), explode(',', $article->getReadAccess())) && $adminAccess == false) {
            continue;
        }

        $displayedArticles++;

        $date = new \Ilch\Date($article->getDateCreated());
        $commentsCount = $commentMapper->getCountComments(sprintf(Modules\Article\Config\Config::COMMENT_KEY_TPL, $article->getId()));
        $image = $article->getImage();
        $imageSource = $article->getImageSource();

        $catIds = explode(",", $article->getCatId());
        $categories = '';
        foreach ($catIds as $catId) {
            $articlesCats = $categoryMapper->getCategoryById($catId);
            $categories .= '<a href="'.$this->getUrl(['controller' => 'cats', 'action' => 'show', 'id' => $catId]).'">'.$this->escape($articlesCats->getName()).'</a>, ';
        }
    ?>
    <div class="col-xs-12 col-sm-6">
      <div class="news-box">
        <div class="news-img">
          <?php if (!empty($image)): ?>
              <figure>
                  <img class="article_image" src="<?=$this->getBaseUrl($image) ?>">
                  <?php if (!empty($imageSource)): ?>
                      <figcaption class="article_image_source"><?=$this->getTrans('imageSource') ?>: <?=$this->escape($imageSource) ?></figcaption>
                  <?php endif; ?>
              </figure>
          <?php else: ?>
            <img class="article_image" src="<?=$this->getBaseUrl('application/layouts/esportlayout/images/news.png') ?>">
          <?php endif; ?>
        </div>
        <div class="news-body">
          <i class="fa fa-calendar" title="<?=$this->getTrans('date') ?>"></i> <a href="<?=$this->getUrl(['controller' => 'archive', 'action' => 'show', 'year' => $date->format("Y", true), 'month' => $date->format("m", true)]) ?>"><?=$date->format('d.', true) ?> <?=$this->getTrans($date->format('F', true)) ?> <?=$date->format('Y', true) ?></a>
          &nbsp;&nbsp;<i class="fa fa-folder-open-o" title="<?=$this->getTrans('cats') ?>"></i> <?=rtrim($categories, ', '); ?>
          &nbsp;&nbsp;<i class="fa fa-eye" title="<?=$this->getTrans('hits') ?>"></i> <?=$article->getVisits() ?>
          <?php if ($article->getTeaser()): ?>
              <h3><?=$this->escape($article->getTeaser()) ?></h3>
          <?php endif; ?>
          <h2><?=$this->escape($article->getTitle()) ?></h2><br />
          <a href="<?=$this->getUrl(['action' => 'show', 'id' => $article->getId()]) ?>" class="read-more"><?=$this->getTrans('readMore') ?></a>

          <?php $content = $article->getContent(); ?>

          <?php if (strpos($content, '[PREVIEWSTOP]') !== false): ?>
              <?php $contentParts = explode('[PREVIEWSTOP]', $content); ?>
              <?=$this->purify(reset($contentParts)) ?>
              <br />
              <a href="<?=$this->getUrl(['action' => 'show', 'id' => $article->getId()]) ?>" class="pull-right"><?=$this->getTrans('readMore') ?></a>
          <?php else: ?>
            <!--  <?=$this->purify($content) ?>-->
          <?php endif; ?>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
    <?php if ($displayedArticles > 0) : ?>
        <div class="pull-right">
            <?=$this->get('pagination')->getHtml($this, ['action' => 'index']) ?>
        </div>
    <?php else: ?>
        <?=$this->getTrans('noArticles') ?>
    <?php endif; ?>
<?php else: ?>
    <?=$this->getTrans('noArticles') ?>
<?php endif; ?>
