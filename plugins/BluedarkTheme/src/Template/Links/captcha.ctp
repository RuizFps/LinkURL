<?php
$this->assign('title', get_option('site_name'));
$this->assign('description', get_option('description'));
$this->assign('content_title', get_option('site_name'));
$this->assign('og_title', $link->title);
$this->assign('og_description', $link->description);
$this->assign('og_image', $link->image);
?>

<?php $this->start('scriptTop'); ?>
<script type="text/javascript">
    if (window.self !== window.top) {
        window.top.location.href = window.location.href;
    }
</script>
<?php $this->end(); ?>

<div class="box-main" >
    
       <div class="box inst">
<div class="text-left">

    <h3> What Is MOD? </h3>
    <p> MOD APK or MODDED APK are modified version of their original Apps. Mod APKs are modified in a sense to provide better features and it also unlocks all the paid features.</p>



</div>
  </div>
  
           <div class="box inst">
<div class="text-left">

    <h3>What It's Safe? </h3>
    <p>Theres no straight answer to this but mostly mod apks aren't that safe they might interfere with vulnerable and sensitive data of your device but wait you are safe with downloading mods from the below mentioned websites.</p>

 
  </div>
  </div>


    <?php if($post): ?>
        <div class="blog-item">
            <div class="page-header">
                <h3><small><a href="<?= build_main_domain_url('/blog') ?>"><?= __('From Our Blog') ?>:</a></small> <?= h($post->title) ?></h3>
            </div>
            <div class="blog-content"><?= $post->description ?></div>
        </div>
    <?php endif; ?>

    <?php
    $col_num = 6;
    $table_row = 'is-table-row';
    $hidden_class = '';
    if (empty($link->image) && empty($link->title) && empty($link->description)) {
        $col_num = 12;
        $table_row = '';
        $hidden_class = 'hidden';
    }
    if (get_option('short_link_content', 'no') === 'no') {
        $col_num = 12;
        $table_row = '';
        $hidden_class = 'hidden';
    }
    ?>

    <div class="row <?= $table_row ?>">
        <div class="col-md-<?= $col_num ?> <?= $hidden_class ?>">
            <?php if (get_option('short_link_content', 'no') === 'yes') : ?>
                <div class="link-details">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <img class="link-image" src="<?= h($link->image) ?>"/>
                            <h4 class="link-title"><?= h($link->title) ?></h4>
                            <p class="link-description"><?= h($link->description) ?></p>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div></div>
        
        <div class="col-md-<?= $col_num ?>">

            <?= $this->Flash->render() ?>

            <?= $this->Form->create(null, ['id' => 'link-view']); ?>

            <p style="font-size: 17px;">
                <?= __('Please check the captcha box to proceed') ?>
            </p>

            <?= $this->Form->hidden('ref', ['value' => strtolower(env('HTTP_REFERER'))]); ?>

            <?= $this->Form->hidden('f_n', ['value' => 'slc']); ?>

            <div class="form-group text-center">
                <div id="captchaShortlink" style="display: inline-block;"></div>
            </div>

            <?= $this->Form->button(__('Click here to continue'), [
                'class' => 'btn ybtn ybtn-accent-color btn-captcha',
                'id' => 'invisibleCaptchaShortlink'
            ]); ?>

            <?= $this->Form->end() ?>
        </div>

    <?php if (!empty($ad_captcha_below)) : ?>
        <div class="banner banner-captcha">
            <div class="banner-inner">
                <?= $ad_captcha_below; ?>
            </div>
        </div>
    <?php endif; ?>

</div>


