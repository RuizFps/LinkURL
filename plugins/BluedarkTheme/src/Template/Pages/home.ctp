<?php
$this->assign('title', (get_option('site_meta_title')) ?: get_option('site_name'));
$this->assign('description', get_option('description'));
$this->assign('content_title', get_option('site_name'));
?>
<!-- Header -->

<div class="slide">
<header class="shorten">  
<div class="section-inner">
<div class="container" onmouseover="home()">

      <div class="row intro-1">
          
    <div class="col-lg-6 col-md-12 order-lg-first wow fadeInUp">
                                <div class="inlin ">
Shorten, Share & Earn Money </div>
<div class="inlin-1 wow ">
Shorten, share and track every link with Demo, the best URL shortener in the world. </div>
 <?php
                if (null !== $this->request->session()->read('Auth.User.id')) {
                    ?>
<div class="banner_btn ">
<a href="<?= build_main_domain_url('/member/dashboard'); ?>" class="ybtn ybtn-accent-color">Dashboard</a> </div>
</div>
   <?php
                } else {
                    ?>
<div class="banner_btn ">
<a href="/auth/signup" class="ybtn ybtn-accent-color">Get Started</a> </div>
</div>
   <?php
                }
                ?>
<div class="col-lg-6 col-md-12 order-first res-m-bttm-lg">
<div class="header-image-alt fadeInRight wow fadeInRight">
<img src="/img/header-image-blue.png" alt="header">
</div>
</div>
</div>
</div> </div>
</header></div>

<div class="container v_blue">
<div class="row align-items-center">
<div class="col-lg-5 col-md-12 col-sm-12 wow fadeInUp">
<div class="title_light ">
<h2 class="">How does it work? </h2>
<p class="">Demo is a link shortener with which you can earn money online by sharing links over the network. We pay for each person who visits one of your shortened links. </p>
</div>
<a href="/payout-rates" class="btn btn-default ">See Payment Rates</a> </div>
<div class="col-lg-7 col-md-12 col-sm-12 flex">
<div class="work_box wow fadeInUp">
<div class="box_inner"> <i class="fa fa-user-plus "></i>
<h4>1. Create your account </h4>
<p>In order to work with us, you must create a user account, where you can manage and create your shortened links and track your visits and earnings. </p>
</div>
</div>
<div class="work_box  wow fadeInUp">
<div class="box_inner"> <i class="fa fa-dollar"></i>
<h4>3. Earn Money </h4>
<p>Share your shortened links online and earn money for each visit that reaches your links. </p>
</div>
</div>
<div class="work_box  wow fadeInUp">
<div class="box_inner"> <i class="fa fa-random"></i>
<h4>2. Shorten your links </h4>
<p>From your user account, you can create, edit, customize and delete your links. </p>
</div>
</div>
</div>
</div>
</div>

<div class="container  ">
<div class="row align-items-center">
</div>
<div class="divider large_divider"></div>
<div class="row text-center">
<div class="col-md-12 offset-lg-2">
<div class="title_light wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
<span class=" " style="color: #7ab9ff;">Do you know why they choose us </span>
<h2 class=" ">+15.000 Publishers? </h2>
</div>
</div>
</div>
<div class="row text-center small_space benefit_wrap">
<div class="col-lg-2 col-md-4 col-6">
<div class="benefit_box  wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
<img src="/img/secure.png" alt="secure">
<h6 style="color: white;">Available 24/7/365 </h6>
</div>
</div>
<div class="col-lg-2 col-md-4 col-6">
<div class="benefit_box  wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
<img src="/img/app.png" alt="token">
<h6 style="color: white;">Statistics on RealTime </h6>
</div>
</div>
<div class="col-lg-2 col-md-4 col-6">
<div class="benefit_box  wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
<img src="/img/payment.png" alt="payment">
<h6 style="color: white;">Punctuality in Payments </h6>
</div>
</div>
<div class="col-lg-2 col-md-4 col-6">
<div class="benefit_box  wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
<img src="/img/case.png" alt="case">
<h6 style="color:white;">High Payment Rates </h6>
</div>
</div>
<div class="col-lg-2 col-md-4 col-6">
<div class="benefit_box wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
<img src="/img/adblock.png" alt="app">
<h6 style="color: white;">AntiAdBlock Solutions </h6>
</div>
</div>
<div class="col-lg-2 col-md-4 col-6">
<div class="benefit_box wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
<img src="/img/dilution.png" alt="dilution">
<h6 style="color: white;">Efficient Technical Support </h6>
</div>
</div>
</div>
</div>
<br>
<br>
<section id="token" class="section_token small_pt small_pb v_blue">
<div class="container  ">
<div class="row">
<div class="col-lg-7 col-md-12 col-sm-12 text_md_center">
<div class="title_light wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
<span class=" ">OUR PUBLISHERS </span>
<h2 class=" ">ENJOY IN EXCLUSIVITY OF ... </h2>
</div>
<div class="row">
<div class="col-md-6 col-sm-12">
<div class="pr_box wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
<h6>THE LATEST IN ANTIADBLOCK </h6>
<p>In all our solutions: Full Page Script and links, obtaining the maximum profits. </p>
</div>
</div>
<div class="col-md-6 col-sm-12">
<div class="pr_box wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
<h6>REFEREE PROGRAM </h6>
<p> Take advantage of 20% of the earnings of each friend you bring to <?= h(get_option('site_name')) ?>. </p>
</div>
</div>
<div class="col-md-6 col-sm-12">
<div class="pr_box wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
<h6>SECURITY </h6>
<p><?= h(get_option('site_name')) ?> provides the latest security news, enjoy our service 24 hours.
 </p></div>
</div>
<div class="col-md-6 col-sm-12">
<div class="pr_box wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
<h6>PERSONALIZED ATTENTION </h6>
<p>You have a problem? Our Support Team attends you quickly and personally. </p>
</div>
</div>
<div class="col-md-6 col-sm-12">
<div class="pr_box wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
<h6>VARIETY OF PAYMENT METHODS </h6>
<p>Paypal, Payoneer, Payza, AirTM, Bank Transfer, TransferWire ... Are we missing any? </p>
</div>
</div>
<div class="col-md-6 col-sm-12">
<div class="pr_box wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
<h6>MINIMUM PAYMENT </h6>
<p>Enjoy your payments from a minimum payment of 5 USD. </p>
</div>
</div>
</div>
</div>
<div class="col-lg-5 offset-lg-0 col-md-8 offset-md-2 text_md_center res_md_mt_30">
<div class="title_light">
<span class="wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">WE DO COUNT ALL YOUR REAL VISITS </span>
<h2 class="wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">UP TO 5 VISITS PER IP </h2>
</div>
<div class="tk_countdown text-center animation countdown_shape wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
<div class="tk_counter_inner"><p><font color="white">All legitimate visits you bring to <?= h(get_option('site_name')) ?> will be counted up to 1 visits per IP every 24 hours. You will earn more with <?= h(get_option('site_name')) ?> also to our exclusive 
 AdBlocks stop tools. </font></p>
<a href="/auth/signup" class="btn btn-default ">Join now! </a> </div>
</div>
</div>
</div>
<div class="divider large_divider"></div>
<div class="row text-center  wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
<div class="col-md-12">
<div class="title_light">
<h2 class="">Advertising <?= h(get_option('site_name')) ?></h2>
<p class="">Are you an advertiser? Start promoting your campaign to millions of users around the world </p>
<a align="center" href="/auth/signup" class="btn btn-default">Advertise now! <i class="ion-ios-arrow-thin-right"></i></a><br> <br>
</div>
</div>
</div>
<br>

<div class="shape shap5"></div>
<div class="shape shap6"></div>
</div></section>
<div class="divider large_divider"></div>
<div class="row text-center  wow fadeInUp">
<div class="col-md-12">
<div class="title_light">
<h2 class="">Advertising DEMO</h2>
<p class="">Are you an advertiser? Start promoting your campaign to millions of users around the world </p>
<a align="center" href="/auth/signup" class="btn btn-default">Advertise now! <i class="ion-ios-arrow-thin-right"></i></a><br> <br>
</div>
</div>
</div>
<br>
<div class="col-md-12">
<ul class="list_none chart_list">
<center>
<li class="color1 wow fadeInUp"style="visibility: visible; animation-name: fadeInUp; color: white;">WORLDWIDE GEO ADVERTISING </li>
<li class="color2 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;  color: white;">MULTIPLE ADVERTISING FORMATS </li>
<li class="color3 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp; color: white;">TRAFFIC ON PC, MOBILE AND TABLET </li>
<li class="color4 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;  color: white;">COMPETITIVE PRICES </li>
<li class="color5 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;  color: white;">HIGH ROI CAMPAIGNS </li>
</center></ul>
</div>
<div class="shape shap5"></div>
<div class="shape shap6"></div>
</div>
<br>
<section class="why-us-block bg-primary" id="why-us">
<div class="container ">
<div class="title_light  text-center wow fadeInUp">
<span class="">Numbers speak for themselves</span>
<h2 class="">Fast Growing</h2>
</div>
<div class="row">
<div class="col-md-4 wow  zoomIn">
<div class="why-us-item text-center text-white">
<i class="fa fa-usd" aria-hidden="true"></i>
<h1 class="mb-0 mt-3 text-white"><?= $totalClicks ?></h1>
<p class="mb-0 text-white">Total Clicks</p>
</div>
</div>
<div class="col-md-4 wow zoomIn">
<div class="why-us-item text-center text-white">
<i class="fa fa-link" aria-hidden="true"></i>
<h1 class="mb-0 mt-3 text-white"><?= $totalLinks ?></h1>
<p class="mb-0 text-white">Total URLs</p>
</div>
</div>
<div class="col-md-4 wow zoomIn">
<div class="why-us-item text-center text-white">
<i class="fa fa-users" aria-hidden="true"></i>
<h1 class="mb-0 mt-3 text-white"><?= $totalUsers ?></h1>
<p class="mb-0 text-white">Registered users</p>
</div>
</div>
</div>
</div>
</section>
<div id="message2" class="container-fluid message-area normal-bg wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
  <div class="container2">
    <div class="row">
      <div class="col-sm-12 col-md-6 ">
        <div class="text-other-color1">Are you ready?
        </div>
        <div class="text-other-color2">Get started in under a minute.
        </div>
      </div>
      <div class="col-sm-12 col-md-6  wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
           <?php
                if (null !== $this->request->session()->read('Auth.User.id')) {
                    ?>
        <div class="buttons-holder">
                    <a href="/member/dashboard" class="ybtn ybtn-accent-color">
            Dashboard          </a>
          <a href="#popup1" class="ybtn ybtn-white ybtn-shadow wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">Contact us
          </a>
                  </div>
                       <?php
                } else {
                    ?>
						
                   <div class="buttons-holder">
                         <a href="/auth/signup" class="ybtn ybtn-accent-color">
            Create Your Account          </a>
          <a href="/auth/signin" class="ybtn ybtn-white ybtn-shadow">
            Login          </a>
                  </div>
                   <?php
                }
                ?>
      </div>
    </div>
  </div>
</div>
<div class="payment-methods ">
            <div class="container text-center ">
                 <div class="col-md-12 wow zoomIn" style="visibility: visible; animation-name: zoomIn;">
                    <span> <img src="/img/paypal.png" alt=""> </span>
                    <span> <img src="/img/bitcoin.png" alt=""> </span>
                     <span> <img src="/img/payeer.png" alt=""> </span>
                   
                     </div>
            </div>
        </div>
<div id="popup1" class="overlay">
  <div class="popup">
    <a class="close" href="#">&times;
    </a>
    <div id="contact">
      <?= $this->element('contact'); ?>
    </div>
  </div>
</div>
