<?php $this->load->view('myHeader'); ?>
<!-- // Header -->   

<div class="page_nav contact-page">
    <div class="Grid1k">
        <i class="page_left-icon2">
            <img width="414" height="289" src="<?=image_url()?>contct.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt=""  sizes="(max-width: 414px) 100vw, 414px" /></i>
            <div class="page_title">
                <h2>تواصل معنا</h2>
                
                <p>تواصل معنا من خلال الايميل . سكايب .</p>
                <p>او من خلال ارقامنا المتوفرة &#8211; ومتوفر بها ( واتس اب &#8211; فايبر &#8211; لاين )</p>
                
                <u class="arrow_"></u>
            </div>
            <span class="clear"><!--  --></span>
        </div>
    </div>
    <!-- // page nav -->
    
    
    <br><br>

    <div class="Grid1k">
        <ul class="contact-it">
            <li class="c_it1" ><i></i>الجوال <span class="Mobile"></span></li>
            <li class="c_it2"><i></i>الايميل <span  class="Email"></span></li>
            <li class="c_it3" ><i></i>سكايب <span class="Skypee"></span></li>
            <li class="c_it4" ><i></i>واتس اب <span class="WhatsApp"></span></li>
        </ul>
        <div class="contact-form_">
         <h4>يمكنك ارسال رسالة</h4>
    <form method="post" action="<?php echo base_url()?>index.php/Email/addMsg">
    <input type="text" name="your-name"  placeholder="الإسم" />
    <input type="text" name="your-email"  placeholder="البريد الالكتروني" />
    <input type="text" name="your-subject"  placeholder="العنوان" />
    <textarea type="text" name="your-message"  placeholder="الرسالة" ></textarea>
    <input type="submit" value="إرسال" />
    </form>
    
    <span class="clear"><!--  --></span>
</div>
</div>







<!-- Section 09 -->
<div class="Section09">
    <div class="Grid1k">
        <!-- Contact Area -->
        <div class="ContactArea clear-after ViewPort">
            <div class="Center"><img src="<?=image_url()?>icon26.png" alt=""></div>
            <div class="Right clear-after">
                <img src="<?=image_url()?>icon24.png" alt="">
                <div class="info">
                    <div><h3 class="Mobile"></h3>
                        <h5>متاح واتس اب - فايبر - لاين</h5></div>
                    </div>
                </div>
                <div class="Left clear-after">
                    <img src="<?=image_url()?>icon25.png" alt="">
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
                    <a href="products.html" class="more">المزيد من المنتجات</a>
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
        if (!re.test(f.elements["ne"].value)) {
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
    <form class="clear-after" method="post" id="subscribeMail" action="" onsubmit="return newsletter_check(this)">

        <input class="newsletter-email" type="email" name="ne" size="30" placeholder="البريد الإلكتروني" required>

        <input class="newsletter-submit" type="submit" value="اشترك"/>

    </form>
</div>





</div>
<div class="SiteInfo">
    <!--a href="<?php //echo base_url()?>" class="logo"><span>بروتك <span>لخدمات زيروكس المتكامله</span></span> </a-->
    <a href="<?php echo base_url()?>index.php/Email/ViewMassage" class="OpenTicket">فتح تذكرة</a>
    <div class="Social">
        <a target="_blank" href="" class="Facebook" id="Facebook"><span></span></a>
        <a target="_blank" href="" class="Twitter" id="Twitter"><span></span></a>
        <a target="_blank" href="" class="Youtube" id="Youtube"><span></span></a>
        <a target="_blank" href="" class="LinkedIn" id="Linkedin"><span></span></a>
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

<?php $this->load->view('myFooter'); ?>
