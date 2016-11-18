<?php $this->load->view('myHeader'); ?>
<!-- // Header -->   
<style>.functions .demo {
  margin-bottom: 10px;
}

.functions .item {
  background-color: #FEFEFE;
  border-radius: 4px;
  display: inline-block;
  margin-bottom: 5px;
  padding: 5px 10px;
}

.functions .item a {
  border: 1px solid #CCC;
  margin-left: 10px;
  padding: 5px;
  text-decoration: none;
}

.functions .item input {
  display: inline-block;
  margin-left: 2px;
  padding: 5px 6px;
  width: 120px;
}

.functions .item label {
  display: inline-block;
  font-size: 1.1em;
  font-weight: bold;
}

.hint {
  text-align: center;
  width: 160px
}

div.hint {
  font-size: 1.4em;
  height: 46px;
  margin-top: 15px;
  padding: 7px
}
</style>
<div class="page_nav contact-page">
    <div class="Grid1k">
        <i class="page_left-icon2">
            <img width="300" height="200" src="<?=image_url()?>premium.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt=""  sizes="(max-width: 414px) 100vw, 414px" /></i>
            <div class="page_title">
                <h2>آراء العملاء</h2>
                
                <p>هدفنا الوحيد هو توفير الراحه لعملائنا وتجاوز توقعاتهم وفيما يلي بعض آراء عملائنا</p>
                
                <u class="arrow_"></u>
            </div>
            <span class="clear"><!--  --></span>
        </div>
    </div>
    <!-- // page nav -->
    
    
    <br><br>
<div class="Section09 row">
    <div class="Rating">
	<?php 

	foreach($CustomerReviews as $key){
		?>
			<div class="col-md-6"> <!-- -srart- -->
				<div class="CompanyDetails">
					<div class="CompanyLogo">
						<!--img src="<?//=base_url()?>imgs/xeroex.png" alt=""-->
						<div class="CompanyName"><?php  echo $key->client_name; ?></div>
					</div>
					
					
				</div>
				<div class="CompanyRate">
 <div class="inner">
 <!--div class="total">
       <span class="rating-num">4.0</span>
     <div class="rating-stars">
        <span><i class="fa fa-star" aria-hidden="true"></i></span>
        <span><i class="fa fa-star" aria-hidden="true"></i></span>
        <span><i class="fa fa-star" aria-hidden="true"></i></span>
        <span><i class="fa fa-star" aria-hidden="true"></i></span>
        <span><i class="fa fa-star" aria-hidden="true"></i></span>
        <span><i class="fa fa-star" aria-hidden="true"></i></span>

      </div>
      </div-->
    
    <div class="histo">
      <div class="five histo-rate">
        <span class="histo-star">
		<i class="fa fa-star" aria-hidden="true"></i>
		</span>
        <span class="bar-block">
          <span id="bar-five" class="bar">
            <span><?php 
			
			     
                       if($key->general_contact =="Excellent") {echo"ممتاز";}
                       elseif($key->general_contact=="verygood"){echo"جيد جدا";}  
                       elseif($key->general_contact=="good") {echo "جيد";}  
                       elseif($key->general_contact=="accepted"){echo "مقبول";}
                       elseif($key->general_contact=="bad"){echo"سىء";}
			
			?></span>&nbsp;
          </span> 
        </span>
      </div>
      
      <div class="four histo-rate">
        <span class="histo-star">
			<i class="fa fa-star" aria-hidden="true"></i>
		</span>
        <span class="bar-block">
          <span id="bar-four" class="bar">
            <span><?php  
               
                       if($key->general_elasticity =="Excellent") {echo"ممتاز";}
                       elseif($key->general_elasticity=="verygood"){echo"جيد جدا";}  
                       elseif($key->general_elasticity=="good") {echo "جيد";}  
                       elseif($key->general_elasticity=="accepted"){echo "مقبول";}
                       elseif($key->general_elasticity=="bad"){echo"سىء";}


			?></span>&nbsp;
          </span> 
        </span>
      </div> 
      
      <div class="three histo-rate">
        <span class="histo-star">
<i class="fa fa-star" aria-hidden="true"></i>
		</span>
        <span class="bar-block">
          <span id="bar-three" class="bar">
            <span><?php  
			
                       if($key->general_care=="Excellent") {echo"ممتاز";}
                       elseif($key->general_care=="verygood"){echo"جيد جدا";}  
                       elseif($key->general_care=="good") {echo "جيد";}  
                       elseif($key->general_care=="accepted"){echo "مقبول";}
                       elseif($key->general_care=="bad"){echo"سىء";}
			
			
			?></span>&nbsp;
          </span> 
        </span>
      </div>
      
      <div class="two histo-rate">
        <span class="histo-star">
<i class="fa fa-star" aria-hidden="true"></i>
		</span>
        <span class="bar-block">
          <span id="bar-two" class="bar">
            <span><?php  
			  
                       if($key->engineer_look=="Excellent") {echo"ممتاز";}
                       elseif($key->engineer_look=="verygood"){echo"جيد جدا";}  
                       elseif($key->engineer_look=="good") {echo "جيد";}  
                       elseif($key->engineer_look=="accepted"){echo "مقبول";}
                       elseif($key->engineer_look=="bad"){echo"سىء";}
			  
			  
			  ?></span>&nbsp;
          </span> 
        </span>
      </div>
      
      <div class="one histo-rate">
        <span class="histo-star">
<i class="fa fa-star" aria-hidden="true"></i>
		</span>
        <span class="bar-block">
          <span id="bar-one" class="bar">
            <span><?php  
			
                       if($key->engineer_behavior=="Excellent") {echo"ممتاز";}
                       elseif($key->engineer_behavior=="verygood"){echo"جيد جدا";}  
                       elseif($key->engineer_behavior=="good") {echo "جيد";}  
                       elseif($key->engineer_behavior=="accepted"){echo "مقبول";}
                       elseif($key->engineer_behavior=="bad"){echo"سىء";}
			
			?></span>&nbsp;
          </span> 
        </span>
      </div>   
	  <div class="one histo-rate">
         <span class="histo-star">
<i class="fa fa-star" aria-hidden="true"></i>
		</span>
        <span class="bar-block">
          <span id="bar-one" class="bar">
            <span><?php  
                    
                       if($key->service_speed=="Excellent") {echo"ممتاز";}
                       elseif($key->service_speed=="verygood"){echo"جيد جدا";}  
                       elseif($key->service_speed=="good") {echo "جيد";}  
                       elseif($key->service_speed=="accepted"){echo "مقبول";}
                       elseif($key->service_speed=="bad"){echo"سىء";}

			?></span>&nbsp;
          </span> 
        </span>
      </div>   
	  <div class="one histo-rate">
         <span class="histo-star">
<i class="fa fa-star" aria-hidden="true"></i>
		</span>
        <span class="bar-block">
          <span id="bar-one" class="bar">
            <span><?php  
			
                       if($key->service_quality=="Excellent") {echo"ممتاز";}
                       elseif($key->service_quality=="verygood"){echo"جيد جدا";}  
                       elseif($key->service_quality=="good") {echo "جيد";}  
                       elseif($key->service_quality=="accepted"){echo "مقبول";}
                       elseif($key->service_quality=="bad"){echo"سىء";}
			
			?></span>&nbsp;
          </span> 
        </span>
      </div>  
	  <div class="one histo-rate">
        <span class="histo-star">
<i class="fa fa-star" aria-hidden="true"></i>
		</span>
        <span class="bar-block">
          <span id="bar-one" class="bar">
            <span><?php   
			       
                       if($key->service_parts=="Excellent") {echo"ممتاز";}
                       elseif($key->service_parts=="verygood"){echo"جيد جدا";}  
                       elseif($key->service_parts=="good") {echo "جيد";}  
                       elseif($key->service_parts=="accepted"){echo "مقبول";}
                       elseif($key->service_parts=="bad"){echo"سىء";}
			
			?></span>&nbsp;
          </span> 
        </span>
      </div>
    </div>
	 <div class="rating">
		<h4>  سهولة الاتصال بالشركة عبر الهاتف وعبر البريد الالكتروني </h4>
		<h4>   المرونة في التعامل وفي اوقات تقديم الخدمات </h4>
		<h4>   الآهتمام والتفهم الذي يبدية موظفو الشركة تجاه العملاء  </h4>
		<h4>    الآهتمام بالمظهر الشخصي </h4>
		<h4>      حسن الخلق والتصرف في التعامل مع العميل </h4>
		<h4>      سرعة التلبية للمهندس والاستجابة للبلاغ  </h4>
		<h4>    كفاءة المهندس وقدرته علي انجاز المهمة </h4>
		<h4>     الآلتزام بتوفير قطع الغيار اللازمة في اسرع وقت  </h4>
  
     
    </div>

  </div>
				</div>
		</div><!--end--->
<?php } ?>
	<div id="default"></div>
	</div>
	</div>

<style>

.inner {
    padding: 50px 20px 10px 10px;
    background-color: white;
    overflow: hidden;
    position: relative;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius: 4px;
}

.rating {
    float: right;
    padding-top: 6px;
    width: 45%;
    margin-right: 0%;
    text-align: right;
}

.rating-num {
    color: #333333;
    font-size: 68px;
    font-weight: 100;
    line-height: 1em;
    width: 14%;
}

.rating-stars {
    font-size: 17px;
    color: #E3E3E3;
    margin-bottom: 2.5em;
}
.rating-stars .active {
  color: #737373;
}

.rating-users {
  font-size: 14px;
}

.histo {
    float: left;
    width: 29%;
    font-size: 13px;
}
.histo-star {
    float: right;
    padding: 3px;
}
.histo-rate {
  width: 100%;
  display: block;
  clear: both;
}

.bar-block {
    margin-left: 5px;
    color: black;
    display: inline-block;
    float: right;
    width: 81%;
    position: relative;
    font-size: 9px;
}
.bar {
  padding: 4px;
  /* display: block; */
}

#bar-five {
  width: 0;
  background-color: #9FC05A;
}

#bar-four {
  width: 0;
  background-color: #ADD633;
}

#bar-three {
  width: 0;
  background-color: #FFD834;
}

#bar-two {
  width: 0;
  background-color: #FFB234;
}

#bar-one {
  width: 0;
  background-color: #FF8B5A;
}

<script>
/*
For stackoverflow question: http://stackoverflow.com/questions/17859134/how-do-i-create-rating-histogram-in-jquery-mobile-just-like-rating-bar-in-google#17859134
*/

$(document).ready(function() {
  $('.bar span').hide();
  $('#bar-five').animate({
     width: '75%'}, 1000);
  $('#bar-four').animate({
     width: '35%'}, 1000);
  $('#bar-three').animate({
     width: '20%'}, 1000);
  $('#bar-two').animate({
     width: '15%'}, 1000);
  $('#bar-one').animate({
     width: '30%'}, 1000);
  
  setTimeout(function() {
    $('.bar span').fadeIn('slow');
  }, 1000);
  
});
</script>
</style>





    <div class="row">
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
</div>
<div class="Copyright clfx">
    <div class="Grid1k">
            <span>All Copyright©<a href="http://agedsystems.com/" target="_blank">AGEDSYSTEMS.com</a></span>
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
  <script>
  $.fn.raty.defaults.path = '../lib/images';

  $(function() {
    $('#default').raty();

$('#score').raty({ score: 3 });

$('#score-callback').raty({
  score: function() {
    return $(this).attr('data-score');
  }
});

$('#scoreName').raty({ scoreName: 'entity[score]' });

$('#number').raty({ number: 10 });

$('#number-callback').raty({
  number: function() {
    return $(this).attr('data-number');
  }
});

$('#numberMax').raty({
  numberMax : 5,
  number    : 100
});

$('#readOnly').raty({ readOnly: true, score: 3 });

$('#readOnly-callback').raty({
  readOnly: function() {
    return 'true becomes readOnly' == 'true becomes readOnly';
  }
});

$('#noRatedMsg').raty({
  readOnly   : true,
  noRatedMsg : "I'am readOnly and I haven't rated yet!"
});

$('#halfShow-true').raty({ score: 3.26 });

$('#halfShow-false').raty({
  halfShow : false,
  score    : 3.26
});

$('#round').raty({
  round : { down: .26, full: .6, up: .76 },
  score : 3.26
});

$('#half').raty({
  half  : true,
  hints : [['bad 1/2', 'bad'], ['poor 1/2', 'poor'], ['regular 1/2', 'regular'], ['good 1/2', 'good'], ['gorgeous 1/2', 'gorgeous']]
});

$('#starHalf').raty({
  half     : true,
  path     : null,
  starHalf : 'demo/images/star-half-mono.png',
  starOff  : '../lib/images/star-off.png',
  starOn   : '../lib/images/star-on.png'
});

$('#click').raty({
  click: function(score, evt) {
    alert('ID: ' + this.id + "\nscore: " + score + "\nevent: " + evt.type);
  }
});

$('#click-prevent').raty({
  click: function(score, evt) {
    alert('Score will not change.')
    return false;
  }
});

$('#hints').raty({ hints: ['a', null, '', undefined, '*_*']});

$('#star-off-and-star-on').raty({
  path    : 'demo/images',
  starOff : 'off.png',
  starOn  : 'on.png'
});

$('#cancel').raty({ cancel: true });

$('#cancelHint').raty({
  cancel     : true,
  cancelHint : 'My cancel hint!'
});

$('#cancelPlace').raty({
  cancel      : true,
  cancelPlace : 'right'
});

$('#star-off-and-star-on').raty({
  path    : 'demo/images',
  starOff : 'off.png',
  starOn  : 'on.png'
});

$('#cancel-off-and-cancel-on').raty({
  cancel    : true,
  cancelOff : 'demo/images/cancel-custom-off.png',
  cancelOn  : 'demo/images/cancel-custom-on.png',
  path      : null,
  starOff   : '../lib/images/star-off.png',
  starOn    : '../lib/images/star-on.png'
});

$('#iconRange').raty({
  path      : null,
  starOff   : '../lib/images/star-off.png',
  iconRange : [
    { range: 1, on: 'demo/images/1.png', off: 'demo/images/0.png' },
    { range: 2, on: 'demo/images/2.png', off: 'demo/images/0.png' },
    { range: 3, on: 'demo/images/3.png', off: 'demo/images/0.png' },
    { range: 4, on: 'demo/images/4.png', off: 'demo/images/0.png' },
    { range: 5, on: 'demo/images/5.png', off: 'demo/images/0.png' }
  ]
});

$('#size').raty({
  path      : 'demo/images',
  cancel    : true,
  cancelOff : 'cancel-off.png',
  cancelOn  : 'cancel-on.png',
  half      : true,
  starHalf  : 'star-half.png',
  starOff   : 'star-off.png',
  starOn    : 'star-on.png'
});

$('#target-div').raty({
  cancel : true,
  target : '#target-div-hint'
});

$('#target-text').raty({
  cancel : true,
  target : '#target-text-hint'
});

$('#target-textarea').raty({
  cancel : true,
  target : '#target-textarea-hint'
});

$('#target-select').raty({
  cancel : true,
  target : '#target-select-hint'
});

$('#targetType').raty({
  cancel     : true,
  target     : '#targetType-hint',
  targetType : 'score'
});

$('#targetKeep').raty({
  cancel     : true,
  target     : '#targetKeep-hint',
  targetKeep : true
});

$('#targetText').raty({
  target     : '#targetText-hint',
  targetText : '--'
});

$('#targetFormat').raty({
  target       : '#targetFormat-hint',
  targetFormat : 'Rating: {score}'
});

$('#targetScore').raty({
  targetScore: '#target-score'
});

$('#mouseover').raty({
  mouseover: function(score, evt) {
    alert('ID: ' + this.id + "\nscore: " + score + "\nevent: " + evt.type);
  }
});

$('#mouseout').raty({
  mouseout: function(score, evt) {
    alert('ID: ' + this.id + "\nscore: " + score + "\nevent: " + evt.type);
  }
});

$('#precision').raty({
  cancel     : true,
  cancelOff  : 'cancel-off.png',
  cancelOn   : 'cancel-on.png',
  path       : 'demo/images',
  starHalf   : 'star-half.png',
  starOff    : 'star-off.png',
  starOn     : 'star-on.png',
  target     : '#precision-hint',
  targetKeep : true,

  precision  : true
});

$('#space').raty({ space: false });

$('#single').raty({ single: true });

$('#starType').raty({
  cancel   : true,
  half     : true,
  starType : 'i'
});

$('#functions').raty({
  cancel     : true,
  cancelOff  : 'cancel-off.png',
  cancelOn   : 'cancel-on.png',
  path       : 'demo/images',
  precision  : true,
  starHalf   : 'star-half.png',
  starOff    : 'star-off.png',
  starOn     : 'star-on.png',
  target     : '#functions-hint',
  targetKeep : true,
  click: function(score, evt) {
    alert('ID: ' + this.id + "\nscore: " + score + "\nevent: " + evt.type);
  },
  hints: [
    ['bad 1'      , 'bad 2'      , 'bad 3'      , 'bad 4'      , 'bad 5'      , 'bad 6'      , 'bad 7'      , 'bad 8'      , 'bad 9'      , 'bad'      ],
    ['poor 1'     , 'poor 2'     , 'poor 3'     , 'poor 4'     , 'poor 5'     , 'poor 6'     , 'poor 7'     , 'poor 8'     , 'poor 9'     , 'poor'     ],
    ['regular 1'  , 'regular 2'  , 'regular 3'  , 'regular 4'  , 'regular 5'  , 'regular 6'  , 'regular 7'  , 'regular 8'  , 'regular 9'  , 'regular'  ],
    ['good 1'     , 'good 2'     , 'good 3'     , 'good 4'     , 'good 5'     , 'good 6'     , 'good 7'     , 'good 8'     , 'good 9'     , 'good'     ],
    ['gorgeous 1' , 'gorgeous 2' , 'gorgeous 3' , 'gorgeous 4' , 'gorgeous 5' , 'gorgeous 6' , 'gorgeous 7' , 'gorgeous 8' , 'gorgeous 9' , 'gorgeous' ]
  ]
});

$('#score-function-run').on('click', function() {
  $('#functions').raty('score', $('#' + this.id.replace('-run', '')).val());
});

$('#click-function-run').on('click', function() {
  $('#functions').raty('click', $('#' + this.id.replace('-run', '')).val());
});

$('#readOnly-function-run').on('click', function() {
var isReadOnly = $('#' + this.id.replace('-run', '')).val() === 'true';

  $('#functions').raty('readOnly', isReadOnly);
});

$('#cancel-function-run').on('click', function() {
var isTrigger = $('#' + this.id.replace('-run', '')).val() === 'true';

  $('#functions').raty('cancel', isTrigger);
});

$('#reload-function-run').on('click', function() {
  $('#functions').raty('reload');
});

$('#get-score-function-run').on('click', function() {
  alert('score: ' + $('#functions').raty('score'));
});

$('#set-score-function-run').on('click', function() {
  $('#functions').raty('score', $('#' + this.id.replace('-run', '')).val());
});

$('#set-function-run').on('click', function() {
  var options = $('#' + this.id.replace('-run', '').val()),
      command = "$('#functions').raty('set', " + options + ");";

  eval(command);
});

$('#destroy-function-run').on('click', function() {
  $('#functions').raty('destroy');
});

$('#move-function-run').on('click', function() {
  $('#functions').raty('move', $('#' + this.id.replace('-run', '')).val());
});
  });
</script>