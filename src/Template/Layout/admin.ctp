<?php
/**
 * @var \App\View\AppView $this
 */
?>
<?php $user = $this->request->getSession()->read('Auth.User'); ?>
<!DOCTYPE html>
<html lang="<?= locale_get_primary_language(null) ?>">
<head>
    <?= $this->Html->charset(); ?>
    <title><?= h($this->fetch('title')); ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?= h($this->fetch('description')); ?>">
<?= $this->Assets->css('/build/css/dashboard.admin.css?ver=' . APP_VERSION); ?>
   <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800,900" rel="stylesheet"><?= $this->Assets->favicon() ?><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://materialdesignicons.com/cdn/2.0.46/css/materialdesignicons.min.css" fullBase="1" /> 
<script>
            WebFont.load({
                google: {"families":["Montserrat:300,400,500,600,700"]},
                active: function() {
                    sessionStorage.fonts = true;
                }
            });
        </script>

    <?php
    echo $this->fetch('meta');
    echo $this->fetch('css');
    echo $this->fetch('script');
    ?>

    <?= get_option('admin_head_code'); ?>

    <?= $this->fetch('scriptTop') ?>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="admin-dashboard hold-transition <?= get_option('admin_adminlte_theme_skin', 'skin-blue') ?> sidebar-mini">
<div class="wrapper">

    <!-- Main Header -->
    <header class="main-header">

        <!-- Logo -->
        <a href="<?= $this->Url->build('/'); ?>" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini">
                <?= h(preg_replace('/(\B.|\s+)/', '', get_option('site_name'))) ?>
            </span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><?= h(get_option('site_name')) ?></span>
        </a>

        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only"><?= __('Toggle navigation') ?></span>
            </a>
            <!-- Navbar Right Menu -->
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">

                    <?php if (in_array($user['role'], ['admin', 'demo'])) : ?>
                        <li class="dropdown messages-menu">
                            <!-- Menu toggle button -->
                            <a href="<?= $this->Url->build([
                                'controller' => 'Users',
                                'action' => 'dashboard',
                                'prefix' => 'member',
                            ]); ?>">
                                <i class="fa fa-dashboard"></i> <?= __('Member Area') ?>
                            </a>
                        </li>
                    <?php endif; ?>

                            <li class="dropdown messages-menu">
                                     <a href="<?= $this->Url->build([
                                        'controller' => 'Users',
                                        'action' => 'logout',
                                        'prefix' => 'auth',
                                    ]); ?>" ><?= __('Log out') ?></span>
                        
                                </a>
                            </li>


                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>


    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

    <li class="nav-item nav-profile">
        <a href="<?= $this->Url->build([
                                        'controller' => 'Users',
                                        'action' => 'profile',
                                        'prefix' => 'member',
                                    ]); ?>" class="nav-link">
     <div class="profile-image"><img src="/img/member-avatar.png">
      <span class="online-status online"></span>
       </div>
    <div class="profile-name"><p class="name"><?= h($logged_user->username); ?></p></div>
  </a>
 </li>


            <?php if (in_array($user['role'], ['admin']) && require_database_upgrade()) : ?>
                <div class="text-center" style="padding: 10px 0;">
                    <button class="btn btn-danger" onclick="location.href='<?= $this->Url->build([
                        'controller' => 'Upgrade',
                        'action' => 'index',
                        'prefix' => 'admin',
                    ]); ?>'"><i class="fa fa-refresh"></i> <?= __('Complete Upgrade Process') ?></button>
                </div>
            <?php endif; ?>

            <!-- Sidebar Menu -->
            <ul class="sidebar-menu">
                <li><a href="<?= $this->Url->build(['controller' => 'Users', 'action' => 'dashboard']); ?>"><i
                                class="fa fa-dashboard"></i> <span><?= __('Statistics') ?></span></a></li>

                <li class="treeview">
                    <a href="#"><i class="fa fa-link"></i> <span><?= __('Manage Links') ?></span> <i
                                class="fa fa-angle-left pull-right"></i></a>
                    <ul class="treeview-menu">
                        <li><a href="<?php echo $this->Url->build([
                                'controller' => 'Links',
                                'action' => 'index',
                            ]); ?>"><?= __('All Links') ?></a></li>
                        <li><a href="<?php echo $this->Url->build([
                                'controller' => 'Links',
                                'action' => 'hidden',
                            ]); ?>"><?= __('Hidden Links') ?></a></li>
                        <li><a href="<?php echo $this->Url->build([
                                'controller' => 'Links',
                                'action' => 'inactive',
                            ]); ?>"><?= __('Inactive Links') ?></a></li>
                    </ul>
                </li>

                <?php if (get_option('earning_mode', 'campaign') === 'campaign') : ?>
                    <li class="treeview">
                        <a href="#"><i class="fa fa-database"></i> <span><?= __('Campaigns') ?></span> <i
                                    class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="<?php echo $this->Url->build([
                                    'controller' => 'Campaigns',
                                    'action' => 'index',
                                ]); ?>"><?= __('List') ?></a></li>
                            <li><a href="<?php echo $this->Url->build([
                                    'controller' => 'Campaigns',
                                    'action' => 'createInterstitial',
                                ]); ?>"><?= __('Create Interstitial Campaign') ?></a></li>
                            <li><a href="<?php echo $this->Url->build([
                                    'controller' => 'Campaigns',
                                    'action' => 'createBanner',
                                ]); ?>"><?= __('Create Banner Campaign') ?></a></li>
                            <li><a href="<?php echo $this->Url->build([
                                    'controller' => 'Campaigns',
                                    'action' => 'createPopup',
                                ]); ?>"><?= __('Create Popup Campaign') ?></a></li>

                            <li class="treeview">
                                <a href="#"><?= __('Prices') ?>
                                    <span class="pull-right-container"><i
                                                class="fa fa-angle-left pull-right"></i></span>
                                </a>
                                <ul class="treeview-menu" style="display: none;">
                                    <li><a href="<?php echo $this->Url->build([
                                            'controller' => 'Options',
                                            'action' => 'interstitial',
                                            'prefix' => 'admin',
                                        ]); ?>"><?= __('Interstitial') ?></a></li>
                                    <li><a href="<?php echo $this->Url->build([
                                            'controller' => 'Options',
                                            'action' => 'banner',
                                            'prefix' => 'admin',
                                        ]); ?>"><?= __('Banner') ?></a></li>
                                    <li><a href="<?php echo $this->Url->build([
                                            'controller' => 'Options',
                                            'action' => 'popup',
                                            'prefix' => 'admin',
                                        ]); ?>"><?= __('Popup') ?></a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                <?php endif; ?>

                <?php if (get_option('earning_mode', 'campaign') === 'simple') : ?>
                    <li class="treeview">
                        <a href="#"><i class="fa fa-usd"></i> <span><?= __('Payout Rates') ?></span> <i
                                    class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="<?php echo $this->Url->build([
                                    'controller' => 'Options',
                                    'action' => 'payoutInterstitial',
                                    'prefix' => 'admin',
                                ]); ?>"><?= __('Interstitial') ?></a></li>
                            <li><a href="<?php echo $this->Url->build([
                                    'controller' => 'Options',
                                    'action' => 'payoutBanner',
                                    'prefix' => 'admin',
                                ]); ?>"><?= __('Banner') ?></a></li>
                            <li><a href="<?php echo $this->Url->build([
                                    'controller' => 'Options',
                                    'action' => 'payoutPopup',
                                    'prefix' => 'admin',
                                ]); ?>"><?= __('Popup') ?></a></li>
                        </ul>
                    </li>
                <?php endif; ?>

                <li class="treeview">
                    <a href="#"><i class="fa fa-dollar"></i> <span><?= __('Withdraws') ?></span> <i
                                class="fa fa-angle-left pull-right"></i></a>
                    <ul class="treeview-menu">
                        <li><a href="<?php echo $this->Url->build([
                                'controller' => 'Withdraws',
                                'action' => 'index',
                            ]); ?>"><?= __('List') ?></a></li>
                        <li><a href="<?php echo $this->Url->build([
                                'controller' => 'Withdraws',
                                'action' => 'export',
                            ]); ?>"><?= __('Export') ?></a></li>
                    </ul>
                </li>

                <li class="treeview">
                    <a href="#"><i class="fa fa-users"></i> <span><?= __('Users') ?></span> <i
                                class="fa fa-angle-left pull-right"></i></a>
                    <ul class="treeview-menu">
                        <li><a href="<?php echo $this->Url->build([
                                'controller' => 'Users',
                                'action' => 'index',
                            ]); ?>"><?= __('List') ?></a></li>
                        <li><a href="<?php echo $this->Url->build([
                                'controller' => 'Users',
                                'action' => 'add',
                            ]); ?>"><?= __('Add') ?></a></li>
                        <li><a href="<?php echo $this->Url->build([
                                'controller' => 'Users',
                                'action' => 'referrals',
                            ]); ?>"><?= __('Referrals') ?></a></li>
                        <li><a href="<?php echo $this->Url->build([
                                'controller' => 'Users',
                                'action' => 'export',
                            ]); ?>"><?= __('Export') ?></a></li>
                    </ul>
                </li>

                <li>
                    <a href="<?php echo $this->Url->build(['controller' => 'Reports', 'action' => 'campaigns']); ?>">
                        <i class="fa fa-pie-chart"></i> <span><?= __('Reports') ?></span>
                    </a>
                </li>

                <li class="treeview">
                    <a href="#"><i class="fa fa-bars"></i> <span><?= __('Membership Plans') ?></span> <i
                                class="fa fa-angle-left pull-right"></i></a>
                    <ul class="treeview-menu">
                        <li><a href="<?php echo $this->Url->build([
                                'controller' => 'Plans',
                                'action' => 'index',
                            ]); ?>"><?= __('List') ?></a></li>
                        <li><a href="<?php echo $this->Url->build([
                                'controller' => 'Plans',
                                'action' => 'add',
                            ]); ?>"><?= __('Add') ?></a></li>
                    </ul>
                </li>

                <li><a href="<?php echo $this->Url->build(['controller' => 'Invoices', 'action' => 'index']); ?>"><i
                                class="fa fa-credit-card"></i> <span><?= __('Invoices') ?></span></a></li>

                <li class="treeview">
                    <a href="#"><i class="fa fa-file-text-o"></i> <span><?= __('Blog') ?></span> <i
                                class="fa fa-angle-left pull-right"></i></a>
                    <ul class="treeview-menu">
                        <li><a href="<?php echo $this->Url->build([
                                'controller' => 'Posts',
                                'action' => 'index',
                            ]); ?>"><?= __('Posts List') ?></a></li>
                        <li><a href="<?php echo $this->Url->build([
                                'controller' => 'Posts',
                                'action' => 'add',
                            ]); ?>"><?= __('Add Post') ?></a></li>
                    </ul>
                </li>

                <li class="treeview">
                    <a href="#"><i class="fa fa-files-o"></i> <span><?= __('Pages') ?></span> <i
                                class="fa fa-angle-left pull-right"></i></a>
                    <ul class="treeview-menu">
                        <li><a href="<?php echo $this->Url->build([
                                'controller' => 'Pages',
                                'action' => 'index',
                            ]); ?>"><?= __('List') ?></a></li>
                        <li><a href="<?php echo $this->Url->build([
                                'controller' => 'Pages',
                                'action' => 'add',
                            ]); ?>"><?= __('Add') ?></a></li>
                    </ul>
                </li>

                <li class="treeview">
                    <a href="#"><i class="fa fa-quote-left"></i> <span><?= __('Testimonials') ?></span> <i
                                class="fa fa-angle-left pull-right"></i></a>
                    <ul class="treeview-menu">
                        <li><a href="<?php echo $this->Url->build([
                                'controller' => 'Testimonials',
                                'action' => 'index',
                            ]); ?>"><?= __('List') ?></a></li>
                        <li><a href="<?php echo $this->Url->build([
                                'controller' => 'Testimonials',
                                'action' => 'add',
                            ]); ?>"><?= __('Add') ?></a></li>
                    </ul>
                </li>

                <li class="treeview">
                    <a href="#"><i class="fa fa-bullhorn"></i> <span><?= __('Announcements') ?></span> <i
                                class="fa fa-angle-left pull-right"></i></a>
                    <ul class="treeview-menu">
                        <li><a href="<?php echo $this->Url->build([
                                'controller' => 'Announcements',
                                'action' => 'index',
                            ]); ?>"><?= __('List') ?></a></li>
                        <li><a href="<?php echo $this->Url->build([
                                'controller' => 'Announcements',
                                'action' => 'add',
                            ]); ?>"><?= __('Add') ?></a></li>
                    </ul>
                </li>

                <li>
                    <a href="<?php echo $this->Url->build(['controller' => 'Options', 'action' => 'menu']); ?>">
                        <i class="fa fa-caret-square-o-down"></i> <span><?= __('Menu Manger') ?></span>
                    </a>
                </li>

                <li class="treeview">
                    <a href="#"><i class="fa fa-exclamation-triangle"></i> <span><?= __('Advanced') ?></span> <i
                                class="fa fa-angle-left pull-right"></i></a>
                    <ul class="treeview-menu">
                        <li><a href="<?php echo $this->Url->build([
                                'controller' => 'Advanced',
                                'action' => 'statistics',
                            ]); ?>"><?= __('Statistics Table') ?></a></li>
                        <li><a href="<?php echo $this->Url->build([
                                'controller' => 'Options',
                                'action' => 'system',
                            ]); ?>" target="_blank"><?= __('System Info') ?></a></li>
                    </ul>
                </li>

                <li class="treeview">
                    <a href="#"><i class="fa fa-gears"></i> <span><?= __('Settings') ?></span> <i
                                class="fa fa-angle-left pull-right"></i></a>
                    <ul class="treeview-menu">
                        <li><a href="<?php echo $this->Url->build([
                                'controller' => 'Options',
                                'action' => 'index',
                            ]); ?>"><?= __('Settings') ?></a></li>
                        <li><a href="<?php echo $this->Url->build([
                                'controller' => 'Options',
                                'action' => 'ads',
                            ]); ?>"><?= __('Ads') ?></a></li>
                        <li><a href="<?php echo $this->Url->build([
                                'controller' => 'Options',
                                'action' => 'withdraw',
                            ]); ?>"><?= __('Withdraw') ?></a></li>
                        <li><a href="<?php echo $this->Url->build([
                                'controller' => 'Options',
                                'action' => 'email',
                            ]); ?>"><?= __('Email') ?></a></li>
                        <li><a href="<?php echo $this->Url->build([
                                'controller' => 'Options',
                                'action' => 'socialLogin',
                            ]); ?>"><?= __('Social Login') ?></a></li>
                        <li><a href="<?php echo $this->Url->build([
                                'controller' => 'Options',
                                'action' => 'payment',
                            ]); ?>"><?= __('Payment Methods') ?></a></li>
                    </ul>
                </li>

            </ul>
            <!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1><?= h($this->fetch('content_title')); ?></h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> <?= __('Dashboard') ?></a></li>
                <li class="active"><?= h($this->fetch('content_title')); ?></li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">

            <?php if (version_compare(PHP_VERSION, '7.2.0') < 0) : ?>
                <div class="alert alert-danger" role="alert">
                    <?= __("AdLinkFly will work only on PHP <b>7.2.0</b> or higher starting from the next update so please ask your hosting company to upgrade the PHP version for you as soon as possible.") ?>
                </div>
            <?php endif; ?>

            <?= $this->Flash->render() ?>
            <?= $this->fetch('content') ?>

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Main Footer -->
    <footer class="main-footer">
        <!-- To the right -->
        <div class="pull-right hidden-xs">
            <?= __('Version') ?> <?= APP_VERSION ?>
        </div>
        <!-- Default to the left -->
        <?= __('Copyright &copy;') ?> <?= h(get_option('site_name')) ?> <?= date("Y") ?>
    </footer>

    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>


</div>

<?= $this->element('js_vars'); ?>

<script data-cfasync="false" src="<?= $this->Assets->url('/js/ads.js') ?>"></script>

<?php
if ((bool)get_option('combine_minify_css_js', false)) {
    echo $this->Assets->script('/build/js/dashboard.min.js?ver=' . APP_VERSION);
} else {
    echo $this->Assets->script('/vendor/jquery.min.js?ver=' . APP_VERSION);
    echo $this->Assets->script('/vendor/bootstrap/js/bootstrap.min.js?ver=' . APP_VERSION);
    echo $this->Assets->script('/vendor/clipboard.min.js?ver=' . APP_VERSION);
    echo $this->Assets->script('/vendor/conditionize.jquery.js?ver=' . APP_VERSION);
    echo $this->Assets->script('/js/app.js?ver=' . APP_VERSION);
    echo $this->Assets->script('/vendor/dashboard/js/app.min.js?ver=' . APP_VERSION);
}
?>

<?= $this->fetch('scriptBottom') ?>
</body>
</html>
