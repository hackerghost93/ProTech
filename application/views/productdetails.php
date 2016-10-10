<?php $this->load->view('myHeader'); ?>




<div class="Grid1k des-menu"><div class="big-menu big-menu1"><section class="w_items"><div class="Grid1k clfx">
    <a href="#" class="close-menu-2"><b class="fa fa-close"></b></a>
    <ul>
        <li>
            <a href="<?php echo base_url()?>index.php/Plan">
                <i><img src="<?=base_url()?>imgs/tech-support-grey.png" alt=""></i>
                <span>الدعم الفني</span>
            </a>
        </li>
        <li>
            <a href="<?php echo base_url()?>index.php/Plan">
                <i><img src="<?=base_url()?>imgs/shopping-card-512.png" alt=""></i>
                <span> بيع و استبدال </span>
            </a>
        </li>
        <li>
            <a href="<?php echo base_url()?>index.php/Plan">
                <i><img src="<?=base_url()?>imgs/Icon_49-512.png" alt=""></i>
                <span>قطع غيار </span>
            </a>
        </li>

    </ul>
</div></section></div>




<div class="big-menu big-menu2"><section class="w_items"><div class="Grid1k clfx">
    <a href="#" class="close-menu-2"><b class="fa fa-close"></b></a>
    <ul>
        <li>
            <a href="downloads.html">
                <i><img src="<?=base_url()?>imgs/datasheet.png" alt=""></i>
                <span>داتا شيت </span>
            </a>
        </li>
        <li>
            <a href="downloads.html">
                <i><img src="<?=base_url()?>imgs/1287710488_folder_black_download512.png" alt=""></i>
                <span>سوفتوير</span>
            </a>
        </li>

    </ul>
</div></section></div>

<div class="big-menu big-menu3"><section class="w_items"><div class="Grid1k clfx">
    <a href="#" class="close-menu-2"><b class="fa fa-close"></b></a>
    <ul>
        <li>
            <a href="<?php echo base_url()?>index.php/Printer/showAll">
                <i><img src="<?=base_url()?>imgs/printer.png" alt=""></i>
                <span> الطابعات </span>
            </a>
        </li>
        <li>
            <a href="<?php echo base_url()?>index.php/Part/showAll">
                <i><img src="<?=base_url()?>imgs/supp-title.png" alt=""></i>
                <span>قطع الغيار</span>
            </a>
        </li>

    </ul>
</div></section></div>
</div>

<!-- // Header -->  



<div class="page_nav work-in-page">
    <div class="Grid1k">
        <div class="page_title">
         <h2><?=$product['name']?></h2>
     </div>
     <span class="clear"><!--  --></span>
 </div>
</div>
<!-- // page nav -->
<br>
<div class="Grid1k clfx">
    <div class="work-block clfx">
        <div class="work-bgr">

            <?php if(isset($images[0]['image_path'])): ?>
                <img width="404" height="440" src="<?=base_url().$images[0]['image_path']?>" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="<?=$product['name']?>" sizes="(max-width: 404px) 100vw, 404px" style="height: 440px;" />
            <?php endif; ?>
        </div>
        <div class="work-dtls">
            <strong><?=$product['name']?></strong>

            <p><?=$product['general_description']?></p>
            <ul class="dtls-butt">


                <li class="dt-b3">
                 <?php if(isset($images)): ?>
                     <?php foreach($images as $img): ?>
                <a class="imageToAppend" rel="<?=base_url().$img['image_path']?>">
                    <?php endforeach; ?>
                <?php endif; ?>
                    <!-- <a class="imageToAppend" rel="imgs/hero-640x440.png" href="#"> -->
                        <i></i>
                        <span>  شاهد صور اكثر </span>
                        <b>للطابعه</b>
                    </a>
                </li>

                <!-- // put the other paramter here  -->
            </ul>
        </div>
    </div>
</div>
<br><br><br><hr>


<section class="host-plan supp-plan">
    <div class="Grid1k clfx">

        <ul class="plan clfx">
            <li class="plan1">
                <h5>
                   <b><i> المواصفات العامه </i></b>

               </h5>
               <div class="p-box">
                <ul class="rw">
                <?php foreach($generals as $gen):?>
                    <li><?=$gen['general_text']?></li>
                <?php endforeach; ?>

             </ul>
             <span class="buttons_ clfx">
                 <a href="#" class="dtls_ plan1-dt">التفاصيل</a>

             </span>
         </div>

     </li>
     <li class="plan2">
        <h5>
           <b><i> مواصفات الطباعه </i></b>

       </h5>
       <div class="p-box">
        <ul class="rw">
                <?php foreach($typing as $gen):?>
                    <li><?=$gen['typing_text']?></li>
                <?php endforeach; ?>

        </ul>
        <span class="buttons_ clfx">
         <a href="#" class="dtls_ plan2-dt">التفاصيل</a>

     </span>
 </div>

</li>
<li class="plan3">
    <h5>
       <b><i> الضمان </i></b>

   </h5>
   <div class="p-box">
    <ul class="rw">
        <?php foreach($guarantee as $gen):?>
            <li><?=$gen['guarantee_text']?></li>
                <?php endforeach; ?>
    </ul>
    <span class="buttons_ clfx">
     <a href="#" class="dtls_ plan3-dt">التفاصيل</a>

 </span>
</div>

</li>
</ul>


<ul class="c_post">

    <li>
        <?php if($type == 'printer'): ?>
         <a href="<?=base_url()?>index.php/printer/showAll">المزيد من الطابعات</a>
        <?php else: ?>
         <a href="<?=base_url()?>index.php/part/showAll">المزيد من الطابعات</a>
        <?php endif; ?>
   </li>
</ul>
</div>


</section>

</div>


<!-- the photos goes here -->

<div class="big-img-work_box"><a href="#" class="close0">X</a>
    <div class="appendHere">
        <div class="loader0">

        
        </div>
    </div>
</div><div class="overly_"></div>




<br>

<div class="tags-box clfx">
    <h5>كلمات دلالية</h5>
    <br>
    <?php foreach ($tags as $tag): ?>
       <a href="<?=base_url().'index.php/'.$type.'/searchTag/'.$tag['tag_name']?>"><h4><?=$tag['tag_name']?></h4></a>
    <?php endforeach ?>

</div>
<br>
<br>
<br>


<!-- Section 09 -->
<div class="Section09">
    <div class="Grid1k">
        <!-- Contact Area -->
        <div class="ContactArea clear-after ViewPort">
            <div class="Center"><img src="<?=base_url()?>imgs/icon26.png" alt=""></div>
            <div class="Right clear-after">
                <img src="<?=base_url()?>imgs/icon24.png" alt="">
                <div class="info">
                    <div><h3 class="Mobile"><?=$contact['mobile']?></h3>
                        <h5>متاح واتس اب - فايبر - لاين</h5></div>
                    </div>
                </div>
                <div class="Left clear-after">
                    <img src="<?=base_url()?>imgs/icon25.png" alt="">
                    <div class="info"><h3 class="Email"><?=$contact['email']?></h3></div>
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
                    <a href="products.html" class="more">المزيد من المنتجات</a>
                </div>
            </div>
        </div>
        <div class="Footer-Container Grid1k">
            <div class="Contact-Info">
                <h3>اتصل بنا</h3>
                <h4 class="Mobile"><?=$contact['mobile']?></h4>
                <h4 class="Skypee"><?=$contact['skybe']?></h4>
                <h4 class="WhatsApp"><?=$contact['whatsapp']?></h4>
                <h4 class="Telephone"><?=$contact['telephone']?></h4>
            </div>
            <div class="SendMail">
                <h3>القائمة البريدية</h3>
                <p>سجل بريدك الالكترونى لدينا للحصول على اخر العروض الخاصة المتاحة و اخر اخبار الشركة</p>



<div class="newsletter newsletter-subscription">
    <form class="clear-after" id="subscribeMail" method="post" action="" onsubmit="return newsletter_check(this)">

        <input class="newsletter-email" type="email" name="email" size="30" placeholder="البريد الإلكتروني" required>

        <input class="newsletter-submit" type="submit" value="اشترك"/>

    </form>
</div>





</div>
<div class="SiteInfo">
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


<?php $this->load->view('myFooter') ; ?>
