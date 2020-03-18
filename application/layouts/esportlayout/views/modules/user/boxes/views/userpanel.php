<?php if ($this->getUser() !== null): ?>
    
	<a class="button" href="<?=$this->getUrl(['module' => 'user', 'controller' => 'panel', 'action' => 'index']) ?>">
	    <i class="fa fa-user" aria-hidden="true"></i> <?=$this->getTrans('hello') ?> <?=$this->escape($this->getUser()->getName()) ?>
    </a>
        
    <?php if ($this->get('userAccesses') || $this->getUser()->isAdmin()): ?>
        <a class="button" href="<?=$this->getUrl(['module' => 'admin', 'controller' => 'admin', 'action' => 'index']) ?>">
            <i class="fa fa-cogs" aria-hidden="true"></i> <?=$this->getTrans('admincenter') ?>
        </a>
    <?php endif; ?>
    
    <a class="button" href="<?=$this->getUrl(['module' => 'admin/admin', 'controller' => 'login', 'action' => 'logout', 'from_frontend' => 1]) ?>">
        <i class="fa fa-sign-out" aria-hidden="true"></i> <?=$this->getTrans('logout') ?>
    </a>

<?php else: ?>

	<a class="button" href="<?=$this->getUrl(['module' => 'user', 'controller' => 'login', 'action' => 'index']) ?>">
	    <i class="fa fa-sign-in" aria-hidden="true"></i> <?=$this->getTrans('login') ?>
    </a>
    
	<?php if ($this->get('regist_accept') == '1'): ?>
        <a class="button" href="<?=$this->getUrl(['module' => 'user', 'controller' => 'regist', 'action' => 'index']); ?>">
            <i class="fa fa-user-plus" aria-hidden="true"></i> <?=$this->getTrans('register'); ?>
        </a>
    <?php endif; ?>

<?php endif; ?>