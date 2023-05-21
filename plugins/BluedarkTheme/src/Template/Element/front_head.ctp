<?php
/**
 * @var \App\View\AppView $this
 */
?>
<?= $this->Html->charset(); ?>
<title><?= h($this->fetch('title')); ?></title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="<?= h($this->fetch('description')); ?>">
<meta name="keywords" content="<?= h(get_option('seo_keywords')); ?>">
<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet"><?php echo $this->Assets->css('/build/css/styles1.min.css') ?><?= $this->Assets->favicon() ?>

<?php echo $this->Assets->css('/build/css/Material+Icons.css') ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
.overlay{position:fixed;visibility:hidden;opacity:0}.overlay:target{visibility:visible;opacity:1}
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<?php
echo $this->fetch('meta');
echo $this->fetch('css');
echo $this->fetch('script');
?>

<?= get_option('head_code'); ?>
<?= $this->fetch('scriptTop') ?>
