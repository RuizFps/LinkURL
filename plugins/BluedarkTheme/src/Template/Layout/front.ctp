<?php
/**
 * @var \App\View\AppView $this
 */
?>
<!DOCTYPE html>
<html lang="<?= locale_get_primary_language(null) ?>">
<head>
    <?= $this->element('front_head'); ?>
</head>
<body class="<?= ($this->request->getParam('_name') === 'home') ? 'home' : 'inner-page' ?>">
<?= get_option('after_body_tag_code'); ?>

<!-- Navigation -->

   <?php
                if (null !== $this->request->session()->read('Auth.User.id')) {
                    ?>
                    
                     <nav id="mainNav" class="navbar navbar-default navbar-fixed-top wow fadeInDown">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="menu-h page-scroll">
            <button type="button" class="s-t" >
                <span class="sr-only">Toggle navigation</span>
                <span class="nv"></span>
                <span class="nv"></span>
                <span class="nv"></span>
            </button>

                        
            <?php
            $logo = get_logo();
            $class = '';
            if ($logo['type'] == 'image') {
                $class = 'logo-image';
            }
            ?>
            <a class="navbar-brand <?= $class ?>" href="<?= build_main_domain_url('/'); ?>"><?= $logo['content'] ?></a>
        </div>
  
        <!-- Collect the nav links, forms, and other content for toggling -->
             <div class="menu-fi" >
           <ul class="nav navbar-nav navbar-right"><li class=" "><a class="" href="<?= build_main_domain_url('/'); ?>"><span>Home</span></a></li><li class=" "><a class="" href="<?= build_main_domain_url('/'); ?>payout-rates"><span>Publisher Rates</span></a></li><li class=" dashboard"><a class="" href="<?= build_main_domain_url('/'); ?>member/dashboard"><span>Dashboard</span></a></li></ul>   
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>



   <?php
                } else {
                    ?>
                    
                 <nav id="mainNav" class="navbar navbar-default navbar-fixed-top wow fadeInDown">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="menu-h page-scroll">
            <button type="button" class="s-t" >
                <span class="sr-only">Toggle navigation</span>
                <span class="nv"></span>
                <span class="nv"></span>
                <span class="nv"></span>
            </button>
<?php
            $logo = get_logo();
            $class = '';
            if ($logo['type'] == 'image') {
                $class = 'logo-image';
            }
            ?>
            <a class="navbar-brand" href="<?= build_main_domain_url('/'); ?>"><?= $logo['content'] ?></a>
        </div>
  
  
  
        <!-- Collect the nav links, forms, and other content for toggling -->
             <div class="menu-fi" >
            <ul class="nav navbar-nav navbar-right"><li class=" "><a class="" href="<?= build_main_domain_url('/'); ?>"><span>Home</span></a></li><li class=" "><a class="" href="<?= build_main_domain_url('/'); ?>payout-rates"><span>Publisher Rates</span></a></li><li class=" login">
                <a class="" href="<?= build_main_domain_url('/'); ?>auth/signin"><span>Login</span></a></li><li class=" signup"><a class="" href="<?= build_main_domain_url('/'); ?>auth/signup"><span>Sign Up</span></a></li></ul>       
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>
  <?php
                }
                ?>
<?= $this->Flash->render() ?>
<?= $this->fetch('content') ?>

<?= $this->element('front_footer'); ?>

</body>

</html>
