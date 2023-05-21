<?php
/**
 * @var \App\View\AppView $this
 */
$lang = locale_get_default();
$countries = get_countries(true);
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lipis/flag-icon-css@3.3.0/css/flag-icon.min.css"/>
<style>
@media(max-width:767px) {
 }
.nav-new-tabs {
  border: 0;
  background: #fff;
  -webkit-box-shadow: 0 0 50px 5px rgba(214, 214, 214, 0.29);
  box-shadow: 0 0 50px 5px rgba(214, 214, 214, 0.29);
}
.nav-new {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    padding-left: 0;
    margin-bottom: 0;
    list-style: none;
}
section#services .container ul li {
    color: #91a6c1;
    padding: 5px;
    font-size: 17px;
    font-family: "Montserrat", sans-serif;
}
li.table-ban {
    margin: auto;
}
.btn:not(:disabled):not(.disabled) {
    cursor: pointer;
}
.btn {
    display: inline-block;
    font-weight: 400;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    border: 1px solid transparent;
    padding: 0.375rem 0.75rem;
    font-size: 1rem;
    line-height: 1.5;
    border-radius: 0.25rem;
    transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}
.btn {
    border-radius: 100px;
    font-size: 13px;
    font-weight: bold;
    letter-spacing: 1px;
    padding: 17px 39px;
    text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.14);
    text-transform: uppercase;
    box-shadow: 0 4px 9px 0 rgba(0, 0, 0, 0.2);
}

a {
    text-decoration: none !important;
    color: #3f345f;
    transition: all 0.3s ease 0s;
}


a.btn.btn-150 {
    padding: 7px 25px;
    margin: 5px;
    font-weight: 500;
    border-radius: 10rem;
    -webkit-box-shadow: none;
    box-shadow: none;
    border: 1px solid #eaeff4;
    background: #2985FD;
    color: white;
}

a.btn.btn-150:focus,a.btn.btn-150:hover {
    border: 1px solid #fff;
    background: #fff;
    border: 1px solid #eaeff4;
    color: #2985FD;
    opacity: 1;
}

.tab-content > .tab-pane {
    display: none;
}
.tab-content > .active {
    display: block;
}
.package {
    margin-top: 25px;
    background: #fff;
    padding: 0 15px;
    -webkit-box-shadow: 0 0 50px 5px rgba(214, 214, 214, 0.29);
    box-shadow: 0 0 50px 5px rgba(214, 214, 214, 0.29);
    display: flex;
    position: relative;
    flex-wrap: wrap;
    font-family: Montserrat,sans-serif;
}
.package .country {
    flex-grow: 4;
}
package .country {
    flex-grow: 4;
}
.package > div {
    margin-right: 0px;
}
.package > div {
    margin-right: 10px;
    display: block;
    position: relative;
    height: 80px;
    line-height: 49px;
}
.package > div h4 {
    position: relative;
    padding: 10px;
        padding-top: 10px;
    color: #2985FD;
    font-size: 18px;
    font-weight: 600;
    text-transform: capitalize;
    margin-top: 0.5rem;
}
.package .desktop {
    display: flex;
    position: relative;
    padding-right: 20px;
}

.package .icon {
    width: 80px;
    height: 80px;
}
.package > div {
    line-height: 49px;
}
.icon-desktop {
    width: 50px;
    height: 50px;
    background-image: url(../../img/pc.svg);
    display: inline-block;
    margin: 15px;
}
section#services .container p {
    font-size: 0.9rem;
    margin-bottom: 25px;
    color: #253145;
    font-family: Montserrat,sans-serif;
}
.package > div p {
    color: #253145;
    padding: 10px;
    margin: 0;
        margin-top: 0px;
        margin-bottom: 0px;
    font-size: 1.1rem;
    font-weight: 500;
}
p {
    color: #7d8b9b;
    font-size: 14px;
    line-height: 27px;
}
.package .mob {
    display: flex;
    position: relative;
    padding-right: 20px;
}

.icon-mob-tab {
    width: 50px;
    height: 50px;
    background-image: url(../../img/mob-tab.svg);
    display: inline-block;
    margin: 15px;
}

span.flag-icon.flag-icon {
    height: 47px;
    width: 63px;
    border-radius: 29px;
}
.package > div h4 small {
    display: block;
    color: #91a6c1;
    font-size: 15px;
    font-weight: 500;
}

.package > div p small {
    font-weight: 600;
    position: relative;
    top: -2px;
    margin-right: 3px;
    font-size: 1.1rem;
}
.package > div p span {
    color: #91a6c1;
    display: block;
    font-size: 13px;
    text-transform: lowercase;
    font-weight: 400;
}




th {
    text-align: center;
}
.table td, .table th {
    vertical-align: middle!important;
}
.titel {
    margin-top: 10px !important;
    margin-bottom: 0px;
}

section#services .container p {
margin-top: 5px;
font-weight: 600;
}

.package > div h4 {
margin-top: .7rem;
}

span.flag-icon.flag-icon {
   margin-left: 8px;
}
.package > div {
    margin-right: 0px;
}


</style>




<?php if (get_option('earning_mode') === 'simple') : ?>
    <div class="payout-rates">

      <!-- nav-new tabs -->             
        <ul class="nav-new nav-new-tabs" role="tablist">
            <?php if (get_option('enable_banner', 'yes') === 'yes') : ?>
                 <li class="table-ban" role="presentation">
                    <a class="btn btn-150" href="#ban-ner-ads" aria-controls="ban-ner-ads" role="tab" data-toggle="tab" aria-expanded="true">
                    <?= __('Banner') ?>
                        
                    </a>
                 </li>
            <?php endif; ?>
            <?php if (get_option('enable_interstitial', 'yes') === 'yes') : ?>
              
                 <li class="table-ban" role="presentation">
                      <a class="btn btn-150" href="#interstitial" aria-controls="interstitial" role="tab" data-toggle="tab" aria-expanded="false">
                          <?= __('Interstitial') ?>
                        </a>
                </li>
            <?php endif; ?>
            <?php if (get_option('enable_popup', 'yes') === 'yes') : ?>
             
            <li class="table-ban" role="presentation">
                         <a class="btn btn-150" href="#popup-ads" aria-controls="popup-ads" role="tab" data-toggle="tab" aria-expanded="false">
                          <?= __('Popup') ?>  
                        </a>
                  </li>
            <?php endif; ?>
        </ul>


                           
        <!-- Tab panes -->
            <div class="tab-content">
            <?php if (get_option('enable_banner', 'yes') === 'yes') : ?>

                 <div role="tabpanel" class="tab-pane" id="ban-ner-ads">
                     
                    <div class="package">
                       <div class="country">
                          <div class="titel">
                            <h4 style="padding-top: 18px;"><?= __('Earnings per 1000 Views') ?></h4>
                          </div>
                       </div>
                     
                      <div class="desktop" style="margin-right: 35px;">
                         <div class="icon"><span class="icon-desktop"></span></div>
                            <div class="titel">
                               <p> <?= __("Desktop") ?></p>
                           </div>
                      </div>

                      <div class="mob">
                        <div class="icon"><span class="icon-mob-tab"></span></div>
                           <div class="titel">
                             <p> <?= __("Mobile / Tablet") ?></p>
                          </div>
                      </div>
                   </div> 
                  


                        <?php
                        $banner_price = get_option('payout_rates_banner', []);
                        uasort($banner_price, function ($a, $b) {
                            if (!isset($a[3]) || !isset($b[3])) {
                                return 0;
                            }
                            if ($a[3] === $b[3]) {
                                return 0;
                            }

                            return ($a[3] < $b[3]) ? 1 : -1;
                        });
                        ?>
                        <?php foreach ($banner_price as $key => $value) : ?>
                            <?php
                            if (empty($value[2]) && empty($value[3])) {
                                continue;
                            } ?>
                            
                            <div class="package">
                                    <div class="icon"><span class="flag-icon flag-icon-<?= strtolower($key) ?>"></span>
                                      </div>
                                          

                                     <div class="country">
                                        <h4> <?= $countries[$key] ?> <small>Per 1000 Views</small></h4>
                                     </div>

                                    <div class="desktop">
                                        <div class="icon"><span class="icon-desktop"></span></div>
                                           <p><small><?= display_price_currency($value[2]) ?></small><span>Desktop &amp; Laptop</span></p>
                                    </div>

                                   <div class="mob">
                                        <div class="icon"><span class="icon-mob-tab"></span></div>
                                               <p><small><?= display_price_currency($value[3]) ?></small><span>Mobile &amp; Tablet</span></p>
                                   </div>
                               </div>


                        <?php endforeach; ?>
                   

                </div>
            <?php endif; ?>

            
            <?php if (get_option('enable_interstitial', 'yes') === 'yes') : ?>
                <div role="tabpanel" class="tab-pane" id="interstitial">
                   <div class="package">
                       <div class="country">
                          <div class="titel">
                           <h4 style="padding-top: 18px;"><?= __('Earnings per 1000 Views') ?></h4>
                          </div>
                       </div>
                     
                      <div class="desktop" style="margin-right: 35px;">
                         <div class="icon"><span class="icon-desktop"></span></div>
                            <div class="titel">
                               <p> <?= __("Desktop") ?></p>
                           </div>
                      </div>

                      <div class="mob">
                        <div class="icon"><span class="icon-mob-tab"></span></div>
                           <div class="titel">
                             <p> <?= __("Mobile / Tablet") ?></p>
                          </div>
                      </div>
                   </div> 

                        <?php
                        $interstitial_price = get_option('payout_rates_interstitial', []);
                        uasort($interstitial_price, function ($a, $b) {
                            if (!isset($a[3]) || !isset($b[3])) {
                                return 0;
                            }
                            if ($a[3] === $b[3]) {
                                return 0;
                            }

                            return ($a[3] < $b[3]) ? 1 : -1;
                        });
                        ?>
                        <?php foreach ($interstitial_price as $key => $value) : ?>
                            <?php
                            if (empty($value[2]) && empty($value[3])) {
                                continue;
                            } ?>
                               
                               <div class="package">
                                    <div class="icon"><span class="flag-icon flag-icon-<?= strtolower($key) ?>"></span>
                                      </div>
                                          

                                     <div class="country">
                                        <h4> <?= $countries[$key] ?> <small>Per 1000 Views</small></h4>
                                     </div>

                                    <div class="desktop">
                                        <div class="icon"><span class="icon-desktop"></span></div>
                                           <p><small><?= display_price_currency($value[2]) ?></small><span>Desktop &amp; Laptop</span></p>
                                    </div>

                                   <div class="mob">
                                        <div class="icon"><span class="icon-mob-tab"></span></div>
                                               <p><small><?= display_price_currency($value[3]) ?></small><span>Mobile &amp; Tablet</span></p>
                                   </div>
                               </div>

                        <?php endforeach; ?>
                  
                </div>
            <?php endif; ?>
            <?php if (get_option('enable_popup', 'yes') === 'yes') : ?>
                <div role="tabpanel" class="tab-pane" id="popup-ads">

                      <div class="package">
                       <div class="country">
                          <div class="titel">
                           <h4 style="padding-top: 18px;"><?= __('Earnings per 1000 Views') ?></h4>
                          </div>
                       </div>
                     
                      <div class="desktop" style="margin-right: 35px;">
                         <div class="icon"><span class="icon-desktop"></span></div>
                            <div class="titel">
                               <p> <?= __("Desktop") ?></p>
                           </div>
                      </div>

                      <div class="mob">
                        <div class="icon"><span class="icon-mob-tab"></span></div>
                           <div class="titel">
                             <p> <?= __("Mobile / Tablet") ?></p>
                          </div>
                      </div>
                   </div> 

                        <?php
                        $popup_price = get_option('payout_rates_popup', []);
                        uasort($popup_price, function ($a, $b) {
                            if (!isset($a[3]) || !isset($b[3])) {
                                return 0;
                            }
                            if ($a[3] === $b[3]) {
                                return 0;
                            }

                            return ($a[3] < $b[3]) ? 1 : -1;
                        });
                        ?>
                        <?php foreach ($popup_price as $key => $value) : ?>
                            <?php
                            if (empty($value[2]) && empty($value[3])) {
                                continue;
                            } ?>
                            
                               <div class="package">
                                    <div class="icon"><span class="flag-icon flag-icon-<?= strtolower($key) ?>"></span>
                                      </div>
                                          

                                     <div class="country">
                                        <h4> <?= $countries[$key] ?> <small>Per 1000 Views</small></h4>
                                     </div>

                                    <div class="desktop">
                                        <div class="icon"><span class="icon-desktop"></span></div>
                                           <p><small><?= display_price_currency($value[2]) ?></small><span>Desktop &amp; Laptop</span></p>
                                    </div>

                                   <div class="mob">
                                        <div class="icon"><span class="icon-mob-tab"></span></div>
                                               <p><small><?= display_price_currency($value[3]) ?></small><span>Mobile &amp; Tablet</span></p>
                                   </div>
                               </div>

                        <?php endforeach; ?>
                   

                </div>
            <?php endif; ?>
        </div>

    </div>
<?php endif; ?>


<?php if (get_option('earning_mode') === 'campaign') : ?>
    <div class="payout-rates">

              <!-- nav-new tabs -->             
        <ul class="nav-new nav-new-tabs" role="tablist">
            <?php if (get_option('enable_banner', 'yes') === 'yes') : ?>
                 <li class="table-ban" role="presentation">
                    <a class="btn btn-150" href="#ban-ner-ads" aria-controls="ban-ner-ads" role="tab" data-toggle="tab" aria-expanded="true">
                    <?= __('Banner') ?>
                        
                    </a>
                 </li>
            <?php endif; ?>
            <?php if (get_option('enable_interstitial', 'yes') === 'yes') : ?>
              
                 <li class="table-ban" role="presentation">
                      <a class="btn btn-150" href="#interstitial" aria-controls="interstitial" role="tab" data-toggle="tab" aria-expanded="false">
                          <?= __('Interstitial') ?>
                        </a>
                </li>
            <?php endif; ?>
            <?php if (get_option('enable_popup', 'yes') === 'yes') : ?>
             
            <li class="table-ban" role="presentation">
                         <a class="btn btn-150" href="#popup-ads" aria-controls="popup-ads" role="tab" data-toggle="tab" aria-expanded="false">
                          <?= __('Popup') ?>  
                        </a>
                  </li>
            <?php endif; ?>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
            <?php if (get_option('enable_banner', 'yes') === 'yes') : ?>
                <div role="tabpanel" class="tab-pane" id="ban-ner-ads">


                    <div class="package">
                       <div class="country">
                          <div class="titel">
                            <h4 style="padding-top: 18px;"><?= __('Earnings per 1000 Views') ?></h4>
                          </div>
                       </div>
                     
                      <div class="desktop" style="margin-right: 35px;">
                         <div class="icon"><span class="icon-desktop"></span></div>
                            <div class="titel">
                               <p> <?= __("Desktop") ?></p>
                           </div>
                      </div>

                      <div class="mob">
                        <div class="icon"><span class="icon-mob-tab"></span></div>
                           <div class="titel">
                             <p> <?= __("Mobile / Tablet") ?></p>
                          </div>
                      </div>
                   </div> 
                        

                        <?php
                        $banner_price = get_option('banner_price');
                        uasort($banner_price, function ($a, $b) {
                            if (!isset($a[3]['publisher']) || !isset($b[3]['publisher'])) {
                                return 0;
                            }
                            if ($a[3]['publisher'] == $b[3]['publisher']) {
                                return 0;
                            }

                            return ($a[3]['publisher'] < $b[3]['publisher']) ? 1 : -1;
                        });
                        ?>
                        <?php foreach ($banner_price as $key => $value) : ?>
                            <?php
                            if (empty($value[2]['publisher']) &&
                                empty($value[3]['publisher'])
                            ) {
                                continue;
                            } ?>

                            <div class="package">
                                    <div class="icon"><span class="flag-icon flag-icon-<?= strtolower($key) ?>"></span>
                                      </div>
                                          

                                     <div class="country">
                                        <h4> <?= $countries[$key] ?> <small>Per 1000 Views</small></h4>
                                     </div>

                                    <div class="desktop">
                                        <div class="icon"><span class="icon-desktop"></span></div>
                                           <p><small><?= display_price_currency($value[2]['publisher']) ?></small><span>Desktop &amp; Laptop</span></p>
                                    </div>

                                   <div class="mob">
                                        <div class="icon"><span class="icon-mob-tab"></span></div>
                                               <p><small><?= display_price_currency($value[3]['publisher']) ?></small><span>Mobile &amp; Tablet</span></p>
                                   </div>
                               </div>

                        <?php endforeach; ?>
                 
                </div>
            <?php endif; ?>

            <?php if (get_option('enable_interstitial', 'yes') === 'yes') : ?>
                <div role="tabpanel" class="tab-pane" id="interstitial">
                    <div class="package">
                       <div class="country">
                          <div class="titel">
                            <h4 style="padding-top: 18px;"><?= __('Earnings per 1000 Views') ?></h4>
                          </div>
                       </div>
                     
                      <div class="desktop" style="margin-right: 35px;">
                         <div class="icon"><span class="icon-desktop"></span></div>
                            <div class="titel">
                               <p> <?= __("Desktop") ?></p>
                           </div>
                      </div>

                      <div class="mob">
                        <div class="icon"><span class="icon-mob-tab"></span></div>
                           <div class="titel">
                             <p> <?= __("Mobile / Tablet") ?></p>
                          </div>
                      </div>
                   </div> 
                        <?php
                        $interstitial_price = get_option('interstitial_price', []);
                        uasort($interstitial_price, function ($a, $b) {
                            if (!isset($a[3]['publisher']) || !isset($b[3]['publisher'])) {
                                return 0;
                            }
                            if ($a[3]['publisher'] == $b[3]['publisher']) {
                                return 0;
                            }

                            return ($a[3]['publisher'] < $b[3]['publisher']) ? 1 : -1;
                        });
                        ?>
                        <?php foreach ($interstitial_price as $key => $value) : ?>
                            <?php
                            if (empty($value[2]['publisher']) &&
                                empty($value[3]['publisher'])
                            ) {
                                continue;
                            } ?>
                            <div class="package">
                                    <div class="icon"><span class="flag-icon flag-icon-<?= strtolower($key) ?>"></span>
                                      </div>
                                          

                                     <div class="country">
                                        <h4> <?= $countries[$key] ?> <small>Per 1000 Views</small></h4>
                                     </div>

                                    <div class="desktop">
                                        <div class="icon"><span class="icon-desktop"></span></div>
                                           <p><small><?= display_price_currency($value[2]['publisher']) ?></small><span>Desktop &amp; Laptop</span></p>
                                    </div>

                                   <div class="mob">
                                        <div class="icon"><span class="icon-mob-tab"></span></div>
                                               <p><small><?= display_price_currency($value[3]['publisher']) ?></small><span>Mobile &amp; Tablet</span></p>
                                   </div>
                               </div>
                        <?php endforeach; ?>
                   

                </div>
            <?php endif; ?>

            <?php if (get_option('enable_popup', 'yes') === 'yes') : ?>
                <div role="tabpanel" class="tab-pane" id="popup-ads">
                    <div class="package">
                       <div class="country">
                          <div class="titel">
                           <h4 style="padding-top: 18px;"><?= __('Earnings per 1000 Views') ?></h4>
                          </div>
                       </div>
                     
                      <div class="desktop" style="margin-right: 35px;">
                         <div class="icon"><span class="icon-desktop"></span></div>
                            <div class="titel">
                               <p> <?= __("Desktop") ?></p>
                           </div>
                      </div>

                      <div class="mob">
                        <div class="icon"><span class="icon-mob-tab"></span></div>
                           <div class="titel">
                             <p> <?= __("Mobile / Tablet") ?></p>
                          </div>
                      </div>
                   </div> 
                        <?php
                        $popup_price = get_option('popup_price');
                        uasort($popup_price, function ($a, $b) {
                            if (!isset($a[3]['publisher']) || !isset($b[3]['publisher'])) {
                                return 0;
                            }
                            if ($a[3]['publisher'] == $b[3]['publisher']) {
                                return 0;
                            }

                            return ($a[3]['publisher'] < $b[3]['publisher']) ? 1 : -1;
                        });
                        ?>
                        <?php foreach ($popup_price as $key => $value) : ?>
                            <?php
                            if (empty($value[2]['publisher']) &&
                                empty($value[3]['publisher'])
                            ) {
                                continue;
                            } ?>
                            <div class="package">
                                    <div class="icon"><span class="flag-icon flag-icon-<?= strtolower($key) ?>"></span>
                                      </div>
                                          

                                     <div class="country">
                                        <h4> <?= $countries[$key] ?> <small>Per 1000 Views</small></h4>
                                     </div>

                                    <div class="desktop">
                                        <div class="icon"><span class="icon-desktop"></span></div>
                                           <p><small><?= display_price_currency($value[2]['publisher']) ?></small><span>Desktop &amp; Laptop</span></p>
                                    </div>

                                   <div class="mob">
                                        <div class="icon"><span class="icon-mob-tab"></span></div>
                                               <p><small><?= display_price_currency($value[3]['publisher']) ?></small><span>Mobile &amp; Tablet</span></p>
                                   </div>
                               </div>
                        <?php endforeach; ?>
                  

                </div>
            <?php endif; ?>
        </div>

    </div>
<?php endif; ?>