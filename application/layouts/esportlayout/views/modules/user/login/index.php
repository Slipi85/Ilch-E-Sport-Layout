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
    <form method="post">
        <h1 class="text-center"><?=$this->getTrans('menuLogin') ?></h1>
        <?=$this->getTokenField() ?>
        <?php
        $escapedredirectUrl = $this->escape($this->get('redirectUrl'));
        ?>
        <input type="hidden" name="login_redirect_url" value="<?=(!empty($escapedredirectUrl)?$escapedredirectUrl:$this->getUrl(['module' => 'article', 'controller' => 'index', 'action' => 'index'])) ?>" />
        <div class="form-floating mb-3<?=$this->validation()->hasError('login_emailname') ? ' has-error' : '' ?>">
            <div class="col-lg-12">
                <div class="input-group inlog">
                    <input type="text"
                           class="form-control"
                           id="login_emailname"
                           required
                           pattern="\S+.*"
                           name="login_emailname" />
                    <label class="field-placeholder" for="login_emailname"><?=$this->getTrans('nameEmail') ?></label>
                </div>
            </div>
        </div>
        <div class="form-floating mb-3<?=$this->validation()->hasError('login_password') ? ' has-error' : '' ?>">
            <div class="col-lg-12">
                <div class="input-group inlog">
                    <input type="password"
                           class="form-control"
                           id="login_password"
                           required
                           pattern="\S+.*"
                           name="login_password" />
                    <label class="field-placeholder" for="login_password"><?=$this->getTrans('password') ?></label>
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-lg-6">
                <div class="checkbox form-check">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="rememberMe" value="rememberMe"> <?=$this->getTrans('rememberMe') ?>
                    </label>
                </div>
            </div>
            <div class="col-lg-6">
              <div class="checkbox text-end">
                <a href="<?=$this->getUrl(['module' => 'user', 'controller' => 'login', 'action' => 'forgotpassword']) ?>"><?=$this->getTrans('forgotPassword') ?></a><br />
              </div>
            </div>
        </div>
        <div class="row login-btn">
            <div class="col-lg-12 text-center">
                <button type="submit" name="login" class="btn btn-outline-secondary">
                    <i class="fa-solid fa-fw fa-right-to-bracket"></i>
                </button>
                <span class="social-logins">
                    <?php if (count($this->get('providers')) > 0): ?>
                        <i class="fa-solid fa-fw fa-angle-right"></i>
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
                            <i class="fa-2x fa-fw <?= $provider->getIcon() ?>"></i>
                        </a>
                    <?php endforeach; ?>
                </span>
            </div>
        </div>
    </form>
    <?php if ($this->get('regist_accept') == '1'): ?>
        <br>
        <div class="row">
            <h1><?=$this->getTrans('menuRegist') ?></h1>
            <p><?=$this->getTrans('registDescription') ?></p>
            <p>
                <a href="<?=$this->getUrl(['module' => 'user', 'controller' => 'regist', 'action' => 'index']) ?>" class="btn btn-outline-secondary float-start"><?=$this->getTrans('register') ?></a>
            </p>
        </div>
    <?php endif; ?>
<?php else: ?>
    <div class="mx-auto"><p><h4 class="text-center"><?=$this->getTrans('alreadyLoggedIn') ?></h4></p></div>
    <div class="row-esportlayout text-center">
        <a class="btn btn-outline-secondary" href="<?=$this->getUrl() ?>"><?=$this->getTrans('back') ?></a>
    </div>
<?php endif; ?>
