<?php $this->load->view('myHeader'); ?>
         <div class="page_nav works-cat-page">
        <div class="Grid1k">
            <i class="page_left-icon2"><img width="263" height="236" src="<?=base_url()?>imgs/downloads.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="اعمال تصميم النور اون لاين" /></i>
            <div class="page_title">
            <?php if($type=="pdf"): ?>
                <h2>قسم التحميلات | داتا شيت طابعات</h2>
            <?php else: ?>
                <h2>قسم التحميلات | سوفتوير</h2>
            <?php endif; ?>   
           <p>لورم ایپسوم أبجد هوز هو مجرد دمية النص من التنضيد والطباعة والصناعة من مصممي الغرافيك. الطابعات والنصوص، ولكن أيضا أعمدة الصحف والمجلات و ما هو ضروري للحالة </p>
                <u class="arrow_"></u>
            </div>
            <span class="clear"><!--  --></span>
        </div>
    </div>
    <!-- // page nav -->

    <section class="w_items">
       <div class="Grid1k clfx">
        <ul>
	
    <?php foreach($results as $object): ?>
    <li>
                <a href="<?=$object->url?>">
                    <i><img src="<?=base_url()?>imgs/Downloads-icon.png" alt=""></i>
                    <span><?=$object->title?></span>
                </a>
     </li>
     <?php endforeach; ?>      
        </ul></div>

    </section>










  
          
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
           
            <a href="<?php echo base_url()?>index.php/Email/addMsg" class="OpenTicket">فتح تذكرة</a>
            <div class="Social">
            <a target="_blank" href="#" class="Facebook" id="Facebook"><span></span></a>
            <a target="_blank" href="#" class="Twitter" id="Twitter"><span></span></a>
            <a target="_blank" href="#" class="Youtube" id="Youtube"><span></span></a>
            <a target="_blank" href="#" class="LinkedIn" id="Linkedin"><span></span></a>
            </div>
        </div>
    </div>
</footer>
<div class="Copyright clfx">
    <div class="Grid1k">
        <span>جميع الحقوق محفوظة لشركة بروتك </span>
        <ul>
<div class="menu-%d8%a8%d8%a8%d8%a8-container"><ul id="menu-%d8%a8%d8%a8%d8%a8" class="menu"><li id="menu-item-2470" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2470"><a href="<?php echo base_url()?>index.php/About">عن بروتك</a></li>

<li id="menu-item-2472" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2472"><a href="<?php echo base_url()?>index.php/Email/addMsg"> اتصل بنا </a></li>
</ul>
            </div>  
        </ul>
    </div>
</div>
</div>
<div class="big-menu-overly"></div>
<script type='text/javascript' src='js/form-jquery.js'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var _wpcf7 = {"loaderUrl":"<?=base_url()?>imgs/ajax-loader.gif","sending":"\u062c\u0627\u0631\u064a \u0627\u0644\u0625\u0631\u0633\u0627\u0644 ..."};
/* ]]> */
</script>
<script type='text/javascript' src='<?php echo base_url()?>js/newscripta.js'></script>

<script type='text/javascript' src='<?php echo base_url()?>js/assest.js'></script>
<script type='text/javascript' src='//www.google.com/recaptcha/api.js?onload=onloadCallback&#038;render=explicit&#038;ver=1'></script>
<script type='text/javascript' src='<?php echo base_url()?>js/embed.js'></script>
<script src="<?php echo base_url()?>js/jquery.min.js"></script>
<script src="<?php echo base_url()?>js/scripts.js"></script>
<script src="<?php echo base_url()?>js/ea-scripts.js"></script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-62646818-2', 'auto');
  ga('send', 'pageview');

</script>
<script type="text/javascript" src="<?=base_url()?>js/subscribe.js"></script>


</body>
</html>