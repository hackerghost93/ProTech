<?php $this->load->view('myHeader') ;?> 


<div class="page_nav supp-page">
  <div class="Grid1k">
    <i class="page_left-icon2"><img width="291" height="293" src="<?=base_url()?>imgs/supp-title.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="الدعم الفني" sizes="(max-width: 291px) 100vw, 291px" /></i>
    <div class="page_title">
      <h2>الدعم الفني</h2>

      <p class="text-center">الدعم الفني نقوم به رغبة منا في تقديم أفضل الخدمات لعملائنا الكرام وأفضل متابعة لطابعتهم نقدم لكم خطط خاصة للدعم الفني يقوم بالعمل عليها فريق دعم فني متميز</p>

      <u class="arrow_"></u>
    </div>
    <span class="clear"><!--  --></span>
  </div>
</div>
<!-- // page nav -->


<br>
<br>
<section class="spprt">
  <div class="Grid1k clfx">
    <h2>نقدم لكم خدمة الدعم الفني لجميع طابعات زيروكس</h2>
    <br>
    <ul class="host-a clfx">
      <li>
        <div>
          <i><img src="" alt=""></i>
          <h5>متابعه مستمرة من خلال الاشتراك</h5>

          <p>لورم ایپسوم أبجد هوز هو مجرد دمية النص من التنضيد والطباعة والصناعة من مصممي الغرافيك. الطابعات والنصوص، ولكن أيضا أعمدة الصحف والمجلات و ما هو ضروري للحالة </p>

        </div>
      </li>
      <li>
        <div>
          <i><img src="" alt=""></i>
          <h5>امان تام</h5>

          <p>لورم ایپسوم أبجد هوز هو مجرد دمية النص من التنضيد والطباعة والصناعة من مصممي الغرافيك. الطابعات والنصوص، ولكن أيضا أعمدة الصحف والمجلات و ما هو ضروري للحالة </p>
        </div>
      </li>
      <li>
        <div>
          <i><img src="" alt=""></i>
          <h5>الدقة</h5>

          <p>لورم ایپسوم أبجد هوز هو مجرد دمية النص من التنضيد والطباعة والصناعة من مصممي الغرافيك. الطابعات والنصوص، ولكن أيضا أعمدة الصحف والمجلات و ما هو ضروري للحالة </p>
        </div>
      </li>
    </ul>

  </div>

</section>
<section class="host-plan supp-plan">
  <div class="Grid1k clfx">

    <ul class="plan clfx">
    <?php foreach($plans as $plan): ?>
      <li class="plan2">
        <h5>
         <b><i>الدعم الفني </i></b>
         <span><?=$plan['plane_name']?></span>
       </h5>
       <div class="p-box">
        <ul class="rw">
        <?php foreach($plan['items'] as $item): ?>
            <li><?=$item['plane_text']?></li>
        <?php endforeach; ?>
       </ul>
       <span class="buttons_ clfx">
         <a href="#" class="dtls_ plan2-dt">التفاصيل</a>
         <a href="<?php echo base_url()?>index.php/Email/ViewMassage">اطلب الان</a>
       </span>
     </div>

   </li>
  <?php endforeach; ?>
   </ul>


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

<div class="newsletter newsletter-subscription" id="subscribeMail">
  <form class="clear-after" method="post" action="" >

    <input class="newsletter-email" type="email" name="ne" size="30" placeholder="البريد الإلكتروني" required>

    <input class="newsletter-submit" type="submit" value="اشترك"/>

  </form>
</div>





</div>
<div class="SiteInfo">
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
<?php $this->load->view('myFooter') ; ?>
