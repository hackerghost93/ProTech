<?php $this->load->view('myHeader') ; ?>

        
        
        <div class="page_nav works-cat-page">
        <div class="Grid1k">
            <i class="page_left-icon2">
<img width="318" height="200" src="<?=base_url()?>imgs/xerox%20logo%20fixed.png" class="attachment-full size-full" alt="tq-title copy" srcset="<?=base_url()?>imgs/xerox%20logo%20fixed.png 318w, <?=base_url()?>imgs/xerox%20logo%20fixed.png 300w" sizes="(max-width: 318px) 100vw, 318px" style="position: relative; top: 50px;" /></i>
            <div class="page_title">
               <h2>تعرف على احدث منتجات زيروكس لدينا </h2>
               
           <p>لورم ایپسوم أبجد هوز هو مجرد دمية النص من التنضيد والطباعة والصناعة من مصممي الغرافيك. الطابعات والنصوص، ولكن أيضا أعمدة الصحف والمجلات و ما هو ضروري للحالة </p>
                <u class="arrow_"></u>
            </div>
            <span class="clear"><!--  --></span>
        </div>
    </div>
    <!-- // page nav -->

    <section class="works-box">
        <div class="Grid1k clfx">
            <ul class="work-items">
                <!-- Work Block -->
                <?php foreach( $products as $key => $product): ?> 
                    <li>
                        <div class="Work-Block">
                            <div class="img-fill">
                                <img width="404" height="316" src="<?=base_url().$product['images'][0]['image_path']?>" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="<?=$product['name']?>" sizes="(max-width: 404px) 100vw, 404px" />
                                <?php if($type == 'printer'):?>                         
                                    <a href="<?=base_url().'index.php/printer/show/'.$product['printer_id']?>" class="info"><h3><?=$product['name']?></h3></a>
                                <?php else:?>
                                    <a href="<?=base_url().'index.php/part/show/'.$product['part_id']?>" class="info"><h3><?=$product['name']?></h3></a>
                                <?php endif; ?>
                                    
                            </div>
                        </div>
                    </li>

                <?php endforeach; ?>
                </ul>
               <span class="clear clr"><!--  --></span>
                <br>
                <ul class="navigation">
<li><span class='page-numbers current'>1</span>
<a class='page-numbers' href='#'>2</a>
<a class='page-numbers' href='#'>3</a>
<a class='page-numbers' href='#'>4</a>
<a class="next page-numbers" href="#">></a></li>
                </ul>

                <br>
        </div>
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
<form class="clear-after" method="post" action="" onsubmit="return newsletter_check(this)">

<input class="newsletter-email" type="email" name="ne" size="30" placeholder="البريد الإلكتروني" required>

<input class="newsletter-submit" type="submit" value="اشترك"/>

</form>
</div>
            
            
            
            
            
        </div>
        <div class="SiteInfo">
            <a href="<?php echo base_url()?>" class="logo"><span>بروتك <span>لخدمات زيروكس المتكامله</span></span> </a>
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

<?php $this->load->view('myFooter') ; ?>
