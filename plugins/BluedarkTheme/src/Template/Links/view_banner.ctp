<style>

.section-title {
  color: #4f56c0;
  font-size: 32px !important;
  font-weight: bold;
  text-align: center;
  text-transform: uppercase;
  padding: 35px 0;
  margin: 0;
}
@media (max-width: 767px) {
  .section-title {
    /* portrait && landscape */
    font-size: 2.6rem;
  }
}
@media (min-width: 768px) and (max-width: 1279px) {
  .section-title {
    /* tablets && small laptops */
  }
}

#faq {
  padding: 0;
  background: #fff;
  margin-bottom: -15px;
  margin-top: -20px;
}
#faq button{
  all:unset
}
#faq .accordion .card {
  border: 1px solid #C4C4C4;
  border-radius: 4px;
  overflow: hidden;
  margin: 0 0 15px;
  text-align: left;
}
#faq .accordion .card .card-header {
  border: none;
  padding: 0;
}
#faq .accordion .card .card-header button {
  background: #4f56c0 url("//icons.iconarchive.com/icons/icons8/ios7/512/User-Interface-Minus-icon.png") no-repeat 98.5% center/30px;
  color: #FFFFFF;
  width: 100%;
  padding: .5rem 0;
}
#faq .accordion .card .card-header button span {
  display: block;
  margin: 0 4rem 0 1.5rem;
  font-size: 16px;
}
#faq .accordion .card .card-header button:focus {
  box-shadow: none;
  outline: none;
}
#faq .accordion .card .card-header button.collapsed {
  background: #FFFFFF url("//image.flaticon.com/icons/png/128/61/61112.png") no-repeat 98% center/18px 18px;
  color: #4f56c0;
}
#faq .accordion .card .card-body {
  font-size: 14px;
  padding: 15px;
}
#faq .support-text {
  font-size: 1.6rem;
  letter-spacing: .05rem;
  margin: 0;
}

</style>

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
    window.top.location.href = window.location.href
  }
</script>
<?php $this->end(); ?>

<section class="short">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <div class="content">

<center>
    <?php if (!empty($banner_728x90)) : ?>
     <?= $banner_728x90; ?>
    <?php endif; ?>
    </center>
    
 
              
            </div>
          </div>
        </div>
      </div>
    </section>


<div class="box-main">

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

<div class="box">
<center>
        
    
    <!--tbl content-->
   <style>td{padding:15px 5px;border:1px solid;text-align:center}.btnlink{display:inline-block;background-color:#449d44;color:#fff;font-size:16px;padding:10px 30px;text-decoration:none;text-transform:uppercase;border-radius:2.5em;border-bottom:.25em solid #398439;-moz-transition:.1s;-webkit-transition:.1s;transition:.1s;box-shadow:0 2px 3px #ccc;position:relative;min-width:185px}.btnlink:focus,.btnlink:hover{color:#fff;background-color:#449d44;border-bottom-width:0;margin-top:.2em}.blue{background-color:#3f51b5;border-bottom:.25em solid #2c3a88}.blue:focus,.blue:hover{background-color:#3f51b5} </style>
   

    <?php if($post): ?>
        <div class="blog-item">
            <div class="page-header">
                <h3><small><a href="<?= build_main_domain_url('/blog') ?>"><?= __('From Our Blog') ?>:</a></small> <?= h($post->title) ?></h3>
            </div>
            <div class="blog-content"><?= $post->description ?></div>
        </div>
    <?php endif; ?>

  <h4><?= __('Your link is almost ready.') ?></h4>

    <span id="countdown" class="countdown">
        <span id="timer" class="timer">
            <?= get_option('counter_value', 5) ?>
        </span><br><?= __('Seconds') ?>
    </span>

    <?php if (!empty($banner_468x60)) : ?>
        <div class="banner banner-468x60">
            <div class="banner-inner">
                <?= $banner_468x60; ?>
            </div>
        </div>
    <?php endif; ?>

    <?php
    $hidden_class = '';
    if (empty($link->image) && empty($link->title) && empty($link->description)) {
        $hidden_class = 'hidden';
    }
    ?>

    <?php if (get_option('short_link_content', 'no') === 'yes') : ?>
        <div class="link-details <?= $hidden_class ?>">
            <div class="panel panel-default">
                <div class="panel-body">
                    <img class="link-image" src="<?= h($link->image) ?>"/>
                    <h4 class="link-title"><?= h($link->title) ?></h4>
                    <p class="link-description"><?= h($link->description) ?></p>
                </div>
            </div>
        </div>
    <?php endif; ?>


    <div style="margin-bottom: 10px;">
        <a href="javascript: void(0)" class="btn ybtn ybtn-accent-color get-link disabled">
            <?= __('Please wait...') ?>
        </a>
    </div>
 

    <?php if (!empty($banner_336x280)) : ?>
        <div class="banner banner-336x280">
            <div class="banner-inner">
                <?= $banner_336x280; ?>
            </div>
        </div>
    <?php endif; ?>




</div>


<?=
$this->Form->create(null, [
    'url' => ['controller' => 'Links', 'action' => 'go', 'prefix' => false],
    'id' => 'go-link',
    'class' => 'hidden'
]);
?>

<?= $this->Form->hidden('ad_form_data', ['value' => $ad_form_data]); ?>

<?=
$this->Form->button(__('Submit'), [
    'id' => 'go-submit',
    'class' => 'hidden'
]);
?>

<?= $this->Form->end(); ?>

<?php if (get_option('enable_popup', 'yes') == 'yes' && $show_pop_ad) : ?>
    <?=
    $this->Form->create(null, [
        'url' => ['controller' => 'Links', 'action' => 'popad', 'prefix' => false],
        'target' => "_blank",
        'id' => 'go-popup',
        'class' => 'hidden'
    ]);
    ?>

    <?= $this->Form->hidden('pop_ad', ['value' => $pop_ad]); ?>

    <?= $this->Form->end(); ?>
<?php endif; ?>

<?php $this->start('scriptBottom'); ?>
<?php $this->end(); ?>



