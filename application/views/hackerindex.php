    <?php $this->load->view('myHeader') ;  ?>

    <style type="text/css">
        .hackerNo{
            padding-top: 39%;
        }
    </style>
<?php if(isset($slides) && count($slides) > 0):?>
    <!-- Section 01 -->

    <div id="contentarea" style="position: relative; right: 200px;">
        <div class="maincontainer">
            <div class="main">



                <div id="slider1" class="royalSlider rsDefault js-content">
                <?php foreach($slides as $slide):?>
                 <div>
                    <a href="<?=base_url()?>index.php/printer/showAll">
                        <img class="rsImg" data-rstmb="<?=base_url()?>imgs/4375e42c-d6c7-4d7b-909c-5b5900a08344_A.jpeg" src="<?=base_url().$slide['Slide_image']?>" alt="Weekend Deals" data-mobile-src="<?=base_url().$slide['Slide_image']?>" />
                    </a>
                </div>
                <?php endforeach; ?>

            </div>


        <script src='<?=base_url()?>js/p13n.js'></script>

<script>

    jQuery(document).ready(function ($) {
        $(".royalSlider2").each(function (i, e) {
            $(e).royalSlider({
                keyboardNavEnabled: true,
                controlNavigation: "none",
                arrowsNavAutoHide: false,
                loop: true

            });
        });

        

        $(".royalSlider2").css("visibility", "visible");
    });
</script>


<noscript>



    <!--Brands Slider-->
    <div class="prodslidercont js-content">
        <script>
            jQuery(document).ready(function ($) {
                $("#slider3").royalSlider({
                    keyboardNavEnabled: true,
                    controlNavigation: 'none',
                    arrowsNavAutoHide: false,
                });
                $('.royalSlider3').css('visibility', 'visible');
            });
        </script>

    </div>




    <noscript>





    </noscript>





    <script>
        //jQuery(document).ready(function ($) {
        //    debugger;
        //    $("#slider1").royalSlider({
        //        keyboardNavEnabled: true,
        //        autoPlay: {
        //            enabled: true,
        //            pauseOnHover: true,
        //        }
        //    });
        //    $('.royalSlider').css('visibility', 'visible');
        //});
        jQuery(document).ready(function ($) {

            $("#slider1").royalSlider({
                keyboardNavEnabled: true,
                autoPlay: {
                    enabled: true,
                    pauseOnHover: true,
                },

                video: {
                    // video options go gere
                    autoHideBlocks: true,
                    autoHideArrows: false
                }//,
                //fullscreen: {
                //    // fullscreen options go gere
                //    enabled: true,
                //    buttonFS: true,
                //    //nativeFS: false
                //}
            });
            $('.royalSlider').css('visibility', 'visible');


        });




    </script>




</noscript></div></div></div>

<?php endif; ?>
<!-- // Section 01 -->

<!-- Section 02 -->
<div class="Section02 ViewPort">
    <div class="Grid1k">
        <div class="info">
            <h3>   ليه تختار بروتك ؟</h3>
            <p>لورم ایپسوم أبجد هوز هو مجرد دمية النص من التنضيد والطباعة والصناعة من مصممي الغرافيك. الطابعات والنصوص، ولكن أيضا أعمدة الصحف والمجلات و ما هو ضروري للحالة </p>
            <a href="#OurWorks" data-scroll>شاهد اعمالنا</a>
            <a href="<?=base_url()?>index.php/Email/addMsg">اطلب الخدمة الان</a>
        </div>
    </div>
</div>
<!-- // Section 02 -->

<!-- Section 03 -->
<?php if(isset($printers) && count($printers) > 0):?>
    <div class="Section03" id="OurWorks">
        <div class="Grid1k">
            <!-- Section Head -->
            <div class="Section-Head ViewPort">
                <img src="<?=base_url()?>imgs/printer.png" alt="">
                <h3>الطابعات الاحدث و صولا</h3>
                <p>شاهد مجموعة من احدث الطابعات لدينا </p>
            </div>
            <!-- // Section Head -->

            <!-- Works -->
            <div class="WorksSlider">

                   <?php
                // var_dump($printers);
                   ?>
                   <!-- Work Block -->
                   <?php foreach($printers as $printer): ?>
               <div class="item" style=" border-right: 10px black !important;">
                    <a href="<?=base_url()?>index.php/printer/show/<?=$printer['printer_id']?>" class="i_1">
                        <div class="Work-Block">
                            <div class="img-fill">
                                <?php if(isset($printer['images'][0]['image_path'])): ?>
                                    <img width="404" height="316" src="<?=base_url().$printer['images'][0]['image_path']?>" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" 
                                    alt="printerImg" sizes="(max-width: 404px) 100vw, 404px" />                        
                                <div class="info"><h3><?=$printer['name']?></h3></div>
                                 <?php else: ?>
                                    <h4 class="hackerNo">no photo</h4>
                                <?php endif; ?>
                            </div>
                        </div>
                    </a>
                </div>
                <?php endforeach; ?>  


                    <!-- // Works -->
            </div>
                    <div class="WorkSlider-Control">
                        <a href="<?=base_url()?>index.php/printer/showAll">مشاهدة المزيد من الطابعات</a>
                    </div>
        </div>
    </div>
<?php endif;?> 
<!-- // Section 03 -->

<!-- Section 04 -->
<div class="Section04 ViewPort">
    <div class="Grid1k">
        <div class="info">
            <h3>هل تريد صيانة طابعتك ؟</h3>
            <h5>بتكلفة قليلة وفى خلال يوم واحد</h5>
            <a href="<?=base_url()?>index.php/Email/ViewMassage">اتصل بنا الان لتحديد موعد للصيانه</a>
        </div>
    </div>
</div>
</div>
<!-- // Section 04 -->

<!-- Section 05 -->
<?php if(isset($printers) && count($printers) > 0):?>
    <div class="Section05" id="OurWorks">
        <div class="Grid1k">
            <!-- Section Head -->
            <div class="Section-Head ViewPort">
                <img src="<?=base_url()?>imgs/icon9.png" alt="">
                <h3>عروض خاصة</h3>
                <p></p>
            </div>
            <!-- // Section Head -->

            <!-- Tabs Container -->
            <div class="tabs01">
                <!-- Tabs Buttons -->
                <div class="ul-out">
                    <div class="ViewPort ul">
                        <!-- activeTab -->
                        <?php foreach($printers as $key => $printer): ?>
                            <div class="item">
                                <div class="li" id="tab<?=$key?>">
                                    <?php if(isset($printer['images'][0]['image_path'])): ?>
                                    <span><img src="<?=base_url().$printer['images'][0]['image_path']?>" alt="">
                                        <span><?=$printer['name']?></span>
                                    </span>
                                     <?php else: ?>
                                    <h4>no photo</h4>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <div class="tabs-Control"></div>
                </div>
                <!-- // Tabs Buttons -->

                <!-- Tabs Content's -->
                <div class="tab_blocks_">
                    <?php foreach($printers as $key => $printer): ?>
                        <div class="tabs-content" id="tab<?=$key?>-content">
                            <div class="Offer-Block clear-after ViewPort">
                                <div class="info">
                                    <h2><?=$printer['name']?></h2>
                                    <?php if($printer['general_description']):?>
                                        <p><?=$printer['general_description']?> </p>
                                    <?php endif; ?>
                                    <a href="<?=base_url()?>index.php/printer/show/<?=$printer['printer_id']?>" class="more">تفاصيل العرض</a>
                                </div>
                                <?php if(isset($printer['images'][0]['image_path'])): ?>
                                <div class="image"><img src="<?=base_url().$printer['images'][0]['image_path']?>" alt="printer image"></div>
                                 <?php else: ?>
                                    <h4>no photo</h4>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <!-- // Tabs Content's -->
            </div>
            <!-- // Tabs Container -->
        </div>
    </div>
<?php endif;?>
<!-- // Section 05 -->

<!-- Section 07 -->
<?php if(count($partners) > 0):?>
<div class="Section07" id="sec7">
    <div class="Grid1k">
        <!-- Section Head -->
        <div class="Section-Head ViewPort">
            <img src="<?=base_url()?>imgs/icon15.png" alt="">
            <h3>عملاء نفتخر بخدمتهم</h3>
            <p>لورم ایپسوم أبجد هوز هو مجرد دمية النص من التنضيد والطباعة والصناعة من مصممي الغرافيك. الطابعات والنصوص، ولكن أيضا أعمدة الصحف والمجلات و ما هو ضروري للحالة </p>
        </div>
        <!-- // Section Head -->

        <!-- Clinte's Slider -->
        <div class="Clinte-Slider">
            <!-- Item -->
            <?php foreach ($partners as $partner): ?>
                <div class="item">
                    <div class="theBlock">
                        <img src="<?=base_url().$partner['partner_image']?>" alt="">
                        <div class="info"><a href="#"><?=$partner['partner_name']?></a></div>
                    </div>
                </div>
            <?php endforeach; ?>
            <!-- // Item -->

        </div>
        <!-- // Clinte's Slider -->
    </div>
</div>
<?php endif;?>
<!-- // Section 07 -->

<!-- Section 08 -->
<div class="Section08">
    <div class="Grid1k">
        <!-- Section Head -->
        <div class="Section-Head ViewPort">
            <img src="<?=base_url()?>imgs/icon16.png" alt="">
            <h3>بروتك فى سطور</h3>

            <p>
              لورم ایپسوم أبجد هوز هو مجرد دمية النص من التنضيد والطباعة والصناعة من مصممي الغرافيك. الطابعات والنصوص، ولكن أيضا أعمدة الصحف والمجلات و ما هو ضروري للحال لورم ایپسوم أبجد هوز هو مجرد دمية النص من التنضيد والطباعة والصناعة من مصممي الغرافيك. الطابعات والنصوص، ولكن أيضا أعمدة الصحف والمجلات و ما هو ضروري للحالة </p>
          </div>
          <!-- // Section Head -->

          <!-- Elnoor Online -->
          <div class="Elnoor-I clear-after ViewPort">
            <!-- Item -->
            <div class="Elnoor-Block">
                <img src="<?=base_url()?>imgs/icon19.png" alt="">
                <h3>لورم ایپسوم أبجد هوز هو مجرد دمية النص من التنضيد والطباعة والصناعة من مصممي الغرافيك.</h3>
            </div>
            <!-- // Item -->
            <!-- Right -->
            <div class="Right-Blocks">
                <!-- Item -->
                <div class="Elnoor-Block">
                    <img src="<?=base_url()?>imgs/icon19.png" alt="">
                    <h3>لورم ایپسوم أبجد هوز هو مجرد دمية النص من التنضيد والطباعة والصناعة من مصممي الغرافيك.</h3>
                </div>
                <!-- // Item -->
                <!-- Item -->
                <div class="Elnoor-Block">
                    <img src="<?=base_url()?>imgs/icon19.png" alt="">
                    <h3>لورم ایپسوم أبجد هوز هو مجرد دمية النص من التنضيد والطباعة والصناعة من مصممي الغرافيك.</h3>
                </div>
                <!-- // Item -->
            </div>
            <!-- // Right -->

            <!-- Center -->
            <div class="Center-Block"></div>
            <!-- // Center -->

            <!-- Left -->
            <div class="Left-Blocks">
                <!-- Item -->
                <div class="Elnoor-Block">
                    <img src="<?=base_url()?>imgs/icon19.png" alt="">
                    <h3>لورم ایپسوم أبجد هوز هو مجرد دمية النص من التنضيد والطباعة والصناعة من مصممي الغرافيك.</h3>
                </div>
                <!-- // Item -->
                <!-- Item -->
                <div class="Elnoor-Block">
                    <img src="<?=base_url()?>imgs/icon19.png" alt="">
                    <h3>لورم ایپسوم أبجد هوز هو مجرد دمية النص من التنضيد والطباعة والصناعة من مصممي الغرافيك.</h3>
                </div>
                <!-- // Item -->
            </div>
            <!-- // Left -->
            <span class="clear"></span>
            <!-- Item -->
            <div class="Elnoor-Block">
                <img src="<?=base_url()?>imgs/icon19.png" alt="">
                <h3>لورم ایپسوم أبجد هوز هو مجرد دمية النص من التنضيد والطباعة والصناعة من مصممي الغرافيك.</h3>
            </div>
            <!-- // Item -->
        </div>
        <!-- // Elnoor Online -->
    </div>
</div>
<!-- // Section 08 -->

<!-- Section 09 -->
<div class="Section09">
    <div class="Grid1k">
        <!-- Contact Area -->
        <div class="ContactArea clear-after ViewPort">
            <div class="Center"><img src="<?=base_url()?>imgs/icon26.png" alt=""></div>
            <div class="Right clear-after">
                <img src="<?=base_url()?>imgs/icon24.png" alt="">
                <div class="info">
                    <div><h3 class="Mobile"></h3>
                        <h5>متاح واتس اب - فايبر - لاين</h5></div>
                    </div>
                </div>
                <div class="Left clear-after">
                    <img src="<?=base_url()?>imgs/icon25.png" alt="">
                    <div class="info"><h3 class="Email"></h3></div>
                </div>
            </div>
            <!-- // Contact Area -->
        </div>
    </div>
    <!-- // Section 09 -->

    <footer>
        <div class="News-Slider">
            <div class="Grid1k clear-after">
                <div class="Title"> احدث العروض</div>
                <div class="TheSlider">

                </div>
                <div class="Control clear-after">
                    <a href="<?=base_url()?>index.php/printer/showAll" class="more">المزيد من المنتجات</a>
                </div>
            </div>
        </div>
        <div class="Footer-Container Grid1k">
            <div class="Contact-Info">
                 <h3>اتصل بنا</h3>
            <h4 class="Mobile"></h4>
            <h4 class="Skypee"></h4>
            <h4 class="WhatsApp"></h4>
            <h4 class="Telephone"></h4>
            </div>
            <div class="SendMail">
                <h3>القائمة البريدية</h3>
                <p>سجل بريدك الالكترونى لدينا للحصول على اخر العروض الخاصة المتاحة و اخر اخبار الشركة</p>



                <script type="text/javascript">
//<![CDATA[
if (typeof newsletter_check !== "function") {
    window.newsletter_check = function (f) {
        var re = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-]{1,})+\.)+([a-zA-Z0-9]{2,})+$/;
        if (!re.test(f.elements["email"].value)) {
            alert("The email is not correct");
            return false;
        }
        for (var i=1; i<20; i++) {
            if (f.elements["np" + i] && f.elements["np" + i].required && f.elements["np" + i].value == "") {
                alert("");
                return false;
            }
        }
        if (f.elements["ny"] && !f.elements["ny"].checked) {
            alert("You must accept the privacy statement");
            return false;
        }
        return true;
    }
}
//]]>
</script>

<div class="newsletter newsletter-subscription">
    <form class="clear-after" id="subscribeMail" method="post" action="" onsubmit="return newsletter_check(this)">

        <input class="newsletter-email" type="email" name="email" size="30" placeholder="البريد الإلكتروني" required>

        <input class="newsletter-submit" type="submit" value="اشترك"/>

    </form>
</div>





</div>
<div class="SiteInfo">
    <a href="<?=base_url()?>" class="logo"><span>بروتك <span>لخدمات زيروكس المتكامله</span></span> </a>
    <a href="<?php echo base_url()?>index.php/Email/ViewMassage" class="OpenTicket">فتح تذكرة</a>
    <div class="Social">
        <a target="_blank" href="<?=$contact['facebook']?>" class="Facebook" id="Facebook"><span></span></a>
        <a target="_blank" href="<?=$contact['twitter']?>" class="Twitter" id="Twitter"><span></span></a>
        <a target="_blank" href="<?=$contact['youtube']?>" class="Youtube" id="Youtube"><span></span></a>
        <a target="_blank" href="<?=$contact['linkedin']?>" class="LinkedIn" id="Linkedin"><span></span></a>
    </div>
</div>
</div>
</footer>
<div class="Copyright clfx">
    <div class="Grid1k">
        <span>جميع الحقوق محفوظة لشركة بروتك </span>
        <ul>
            <div class="menu-%d8%a8%d8%a8%d8%a8-container"><ul id="menu-%d8%a8%d8%a8%d8%a8" class="menu"><li id="menu-item-2470" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2470"><a href="<?php echo base_url()?>index.php/About">عن بروتك</a></li>

                <li id="menu-item-2472" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2472"><a href="<?php echo base_url()?>index.php/Email/ViewMassage"> اتصل بنا </a></li>
            </ul>
        </div>  
    </ul>
</div>
</div>
</div>
<div class="big-menu-overly"></div>

<?php $this->load->view('myFooter') ;  ?>
