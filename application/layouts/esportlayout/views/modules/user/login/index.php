<?php if ($this->getUser() == null): ?>
    <script>$(document).ready(function(){
    $('.providers').on('click', function (e) {
        e.preventDefault();

        var myForm = $(this).closest('form')[0];
        myForm.action = this.href;// the href of the link
        myForm.method = "POST";
        myForm.submit();
        return false; // cancel the actual link
    });
    });</script>
    <script>
      const input = document.querySelector('input');
      input.addEventListener('input', evt => {
        const value = input.value;

        if (!value) {
          input.dataset.state = '';
          return;
        }

        const trimmed = value.trim();

        if (trimmed) {
          input.dataset.state = 'valid';
        } else {
          input.dataset.state = 'invalid';
        }
      });
      //# sourceURL=pen.js
    </script>
    <form class="form-horizontal" method="post">
        <h1 class="text-center"><?=$this->getTrans('menuLogin') ?></h1>
        <?=$this->getTokenField() ?>
        <?php
        $escapedredirectUrl = $this->escape($this->get('redirectUrl'));
        ?>
        <input type="hidden" name="login_redirect_url" value="<?=(!empty($escapedredirectUrl)?$escapedredirectUrl:$this->getUrl(['module' => 'article', 'controller' => 'index', 'action' => 'index'])) ?>" />
        <div class="form-group <?=$this->validation()->hasError('login_emailname') ? 'has-error' : '' ?>">
            <div class="col-lg-12" for="login_emailname">
                <div class="input-group inlog">
                    <input type="text"
                           class="form-control"
                           id="login_emailname"
                           required
                           pattern="\S+.*"
                           name="login_emailname" />
                           <label class="field-placeholder"><?=$this->getTrans('nameEmail') ?></label>
                </div>
            </div>
        </div>
        <div class="form-group <?=$this->validation()->hasError('login_password') ? 'has-error' : '' ?>">
            <div class="col-lg-12" for="login_password">
                <div class="input-group inlog">
                    <input type="password"
                           class="form-control"
                           id="login_password"
                           required
                           pattern="\S+.*"
                           name="login_password" />
                           <label class="field-placeholder"><?=$this->getTrans('password') ?></label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-lg-6">
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="rememberMe" value="rememberMe"> <?=$this->getTrans('rememberMe') ?>
                    </label>
                </div>
            </div>
            <div class="col-lg-6">
              <div class="checkbox text-right">
                <a href="<?=$this->getUrl(['module' => 'user', 'controller' => 'login', 'action' => 'forgotpassword']) ?>"><?=$this->getTrans('forgotPassword') ?></a><br />
              </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-lg-12 text-center">
                <button type="submit" name="login" class="btn btn-default">
                    <i class="fa fa-fw fa-sign-in"></i>
                </button>
                <span class="social-logins">
                    <?php if (count($this->get('providers')) > 0): ?>
                        <i class="fa fa-fw fa-angle-right"></i>
                    <?php endif; ?>
                    <?php foreach ($this->get('providers') as $provider): ?>
                        <a
                            class="btn btn-link providers provider-<?= $provider->getKey() ?>"
                            href="<?= $this->getUrl([
                                'module' => $provider->getModule(),
                                'controller' => $provider->getAuthController(),
                                'action' => $provider->getAuthAction()
                            ]) ?>"
                        >
                            <i class="fa fa-2x fa-fw <?= $provider->getIcon() ?>"></i>
                        </a>
                    <?php endforeach; ?>
                </span>
            </div>
        </div>
    </form>
    <?php if ($this->get('regist_accept') == '1'): ?>
        <br /><br /><br />
        <h1><?=$this->getTrans('menuRegist') ?></h1>
        <p>
            <?=$this->getTrans('registDescription') ?>
        </p>
        <p>
            <a href="<?=$this->getUrl(['module' => 'user', 'controller' => 'regist', 'action' => 'index']) ?>" class="btn btn-default pull-left">
                <?=$this->getTrans('register') ?>
            </a>
        </p>
    <?php endif; ?>
<?php else: ?>
    <div class="center-block"><p><h4 class="text-center"><?=$this->getTrans('alreadyLoggedIn') ?></h4></p></div>
    <div class="row text-center">
        <a class="btn btn-default" href="<?=$this->getUrl() ?>"><?=$this->getTrans('back') ?></a>
    </div>
<?php endif; ?>
