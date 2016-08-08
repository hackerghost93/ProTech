
$(document).ready(function(){

//Ready Function
$("html").niceScroll({cursorcolor:"#8e669f", background:"rgba(0,0,0,0.15)",cursorwidth:"10px",cursoropacitymin:0.2,cursoropacitymax:1,cursorborder:"0px solid #000",cursorborderradius:"0px",zindex:8888});
// Eng.Abdallah Unlimted Level's Menu 
$("header .Grid1k").prepend("<div class='menu-sm'><button class='menu-btn'></button></div>"); // Create Small Device Menu
$(".primary-menu ul").parent("li").addClass("ea-SubMenu") // If Have Submenu Add Class "ea-SubMenu"
$(".primary-menu .ea-SubMenu > a").attr({"href":"javascript:void(0);"}); // Change Link To Click Event
$(".Grid1k > .primary-menu").clone().appendTo(".menu-sm"); // Pot The Menu In The Small Device Element
//$(".Grid1k > .primary-menu ul > li > *:not(ul)").click(function(){ $(this).parent("li").children("ul").fadeToggle(500); }); // Dropdwon 
//$(".Grid1k > .primary-menu ul > li").mouseleave(function(){ $(this).children("ul").fadeOut(500);}); // Dropdwon
$(".menu-sm  .primary-menu ul > li > *:not(ul)").click(function(){ $(this).parent("li").children("ul").slideToggle(500); }); // Dropdwon
$(".menu-sm > button").click(function(){ $(this).parent(".menu-sm").toggleClass("open");$("body").toggleClass("MenuPush"); }) // Small Device Menu Open/Close
$('.ViewPort').viewportChecker({classToAdd:'visible ActiveView',offset:100,});
smoothScroll.init({speed:600,easing:'easeInOutCubic',updateURL:true,offset:0,});
$(".WorksSlider").slick({rtl:true,autoplay:true,autoplaySpeed:7000,speed:500,pauseOnHover:false,appendArrows:$(".WorkSlider-Control"),slidesToShow:4,responsive:[{breakpoint:800,settings:{slidesToShow:3,}},{breakpoint:640,settings:{slidesToShow:2,}},{breakpoint:480,settings:{slidesToShow:1,}},],})
/*
$(".ul").slick({infinite:false,rtl:true,autoplay:true,autoplaySpeed:7000,speed:500,pauseOnHover:false,appendArrows:$(".tabs-Control"),slidesToShow:5,responsive:[{breakpoint:800,settings:{slidesToShow:3,}},{breakpoint:640,settings:{slidesToShow:2,}},{breakpoint:480,settings:{slidesToShow:1,}},],})
*/
/*
$(".tabs01 .ul .li").click(function(){var tabsID = $(this).attr("id");$(this).addClass("activeTab").siblings().removeClass("activeTab");$(".tabs01 .tabs-content").hide();$("#" + tabsID + "-content").slideDown(1000).siblings(".tabs-content").slideUp(1000);});
*/
$(".Clinte-Slider").slick({rtl:true,autoplay:true,autoplaySpeed:7000,speed:500,pauseOnHover:false,slidesToShow:4,slidesToScroll:2,arrows:false,dots:true,cssEase:'linear',responsive:[{breakpoint:800,settings:{slidesToShow:3,}},{breakpoint:640,settings:{slidesToShow:2,}},{breakpoint:480,settings:{slidesToShow:1,slidesToScroll:1,}},],})
$(".News-Slider .TheSlider").slick({autoplay:true,autoplaySpeed:7000,speed:500,pauseOnHover:false,slidesToShow:1,slidesToScroll:1,vertical:true,cssEase:'linear',appendArrows:$(".News-Slider .Control"), })
//End Ready Function
});



/*===========================================================================*/
function initMenu() {
  $('.faqlist div').hide();
  $('.faqlist div:first').show();
  $('.faqlist li a').click(
    function() {
      var checkElement = $(this).next();
      if((checkElement.is('div')) && (checkElement.is(':visible'))) {
        return false;
        }
      if((checkElement.is('div')) && (!checkElement.is(':visible'))) {
        $('.faqlist div:visible').slideUp('fast');
        checkElement.slideDown('fast');
        return false;
        }
      }
    );
  }
$(document).ready(function() {
	initMenu();
/*===========================================================================*/
	$(".faqlist:first li:first-child a.list-title").addClass("current-list-title");
$(".list-title").click(function(){
	$(".list-title").removeClass("current-list-title");
	$(this).addClass("current-list-title");
});	
/*===========================================================================*/
$('.faqlist > li a').append($('<i>+</i><u>-</u>'));
$(".p-box li").each(function(i) {$(this).addClass("l_" + (i+1));});
/*===========================================================================*/
$('.plan1-dt').click(function() {  $('.plan1 .rw').slideToggle('slow');return false; });
$('.plan2-dt').click(function() {  $('.plan2 .rw').slideToggle('slow');return false; });
$('.plan3-dt').click(function() {  $('.plan3 .rw').slideToggle('slow');return false; });
/*===========================================================================*/
$('.plan1-dt').click(function() {  $('.plan1 .p-box').toggleClass('bgr-c'); });
$('.plan2-dt').click(function() {  $('.plan2 .p-box').toggleClass('bgr-c'); });
$('.plan3-dt').click(function() {  $('.plan3 .p-box').toggleClass('bgr-c'); });
/*===========================================================================*/
$('.c_post a').prepend($('<i></i>'));
/*===========================================================================*/
$(".w_items li").each(function(i) {$(this).addClass("dsn_" + (i+1));});
$(".about3 li").each(function(i) {$(this).addClass("gg_" + (i+1));});
$(".about2 div div h4").each(function(i) {$(this).addClass("h4_" + (i+1));});
$(".about2 div div p").each(function(i) {$(this).addClass("p_" + (i+1));});
$(".contact-form_ input").each(function(i) {$(this).addClass("ipt_" + (i+1));});
$(".host-a li,.seo3 li").each(function(i) {$(this).addClass("hi_" + (i+1));});
$(".seo2 li").each(function(i) {$(this).addClass("seo-it_" + (i+1));});
$(".work-items li").each(function(i) {$(this).addClass("w_items_" + (i+1));});
$("header .primary-menu > ul > li ul li a").addClass("hvr-overline-from-left");
$("header .primary-menu > ul > li ul li a span").addClass("hvr-underline-from-right");
/*===========================================================================*/
//$(".big-menu-overly").append('<a href="#" class="close"><i class="fa fa-close"></i></a>');
//$(".menu").append('<li class="ea-SubMenu ds_item"><a href="#" class="open-cat-menu">Ø§Ù‚Ø³Ø§Ù… Ø§Ù„ØªØµÙ…ÙŠÙ…</a></li>');
//$('.primary-menu #menu-item-2479').addClass('open-cat-menu');
$(".primary-menu #menu-item-2479,.primary-menu #menu-item-2476").addClass("ea-SubMenu");


$('#menu-item-2479 a').click(function() {
	$('.ds_item').toggleClass('hi_');
	$('.big-menu2').toggleClass('show_menu_');
	//$('.big-menu-overly').fadeIn(300);
$('.big-menu-overly').fadeToggle(300);
});
    
$('#menu-item-2507 a').click(function() {
	$('.ds_item').toggleClass('hi_');
	$('.big-menu3').toggleClass('show_menu_');
	//$('.big-menu-overly').fadeIn(300);
$('.big-menu-overly').fadeToggle(300);
});

$('#menu-item-2476 a').click(function(e) {
e.preventDefault();
	$('.ds_item').toggleClass('hi_');
	$('.big-menu1').toggleClass('show_menu_');
	//$('.big-menu-overly').fadeIn(300);
$('.big-menu-overly').fadeToggle(300);
});

$('.big-menu-overly').on('click', function() { 
	$('.ds_item').toggleClass('hi_');
	$('.big-menu').removeClass('show_menu_');
	$(this).fadeOut(300) 

});	
$('.close-menu-2').on('click', function() { 
	$('.ds_item').toggleClass('hi_');
	$('.big-menu').removeClass('show_menu_');$('.big-menu-overly').fadeOut(300) 

});	

/******
$(function () {
    $('.menu > li > a').click(function () {
        $(this).next('ul').addClass('submenu-open');
        $(this).parent().siblings().children().next().removeClass('submenu-open');
$('.big-menu-overly').fadeToggle(300);

        return false;
    });
});*/

$('.big-menu-overly .close').click(function(){ 
$('.big-menu-overly').fadeOut(300); 
$('.menu > li > ul').removeClass('submenu-open');
});	

$(function() {
    $('.menu > li > a').each(function() {
        if ( $(this).parent('li').children('ul').size() > 0 ) {
            $(this).addClass('menu-child');
        }           
    });
});
/*
$(".menu-item-209").append('<ul><li><a href="#"><i class="fa fa-home"></i>Ø§Ù‚Ø³Ø§Ù… Ø§Ø³ØªØ¶Ø§ÙÙ‡</a></li><li><a href="#"><i class="fa fa-home"></i>Ø§Ù‚Ø³Ø§Ù… Ø§Ø³ØªØ¶Ø§ÙÙ‡</a></li><li><a href="#"><i class="fa fa-home"></i>Ø§Ù‚Ø³Ø§Ù… Ø§Ø³ØªØ¶Ø§ÙÙ‡</a></li><li><a href="#"><i class="fa fa-home"></i>Ø§Ù‚Ø³Ø§Ù… Ø§Ø³ØªØ¶Ø§ÙÙ‡</a></li><li><a href="#"><i class="fa fa-home"></i>Ø§Ù‚Ø³Ø§Ù… Ø§Ø³ØªØ¶Ø§ÙÙ‡</a></li><li><a href="#">Ø§Ù‚Ø³Ø§Ù… Ø§Ø³ØªØ¶Ø§ÙÙ‡</a></li></ul>');

$(".menu-item-210").append('<ul><li><a href="#"><i class="fa fa-home"></i>Ø§Ø±Ø´ÙÙ‡</a></li><li><a href="#"><i class="fa fa-home"></i>Ø§Ø±Ø´ÙÙ‡</a></li><li><a href="#"><i class="fa fa-home"></i>Ø§Ø±Ø´ÙÙ‡</a></li><li><a href="#"><i class="fa fa-home"></i>Ø§Ø±Ø´ÙÙ‡</a></li><li><a href="#">Ø§Ø±Ø´ÙÙ‡</a></li><li><a href="#"><i class="fa fa-home"></i>Ø§Ø±Ø´ÙÙ‡</a></li></ul>');
*/





/*===========================================================================*/

$('.page_nav h2,.about1 h4, .about3 h4, .about5 h4,.ns_ h2,.vb0 h2,.vb1 h2,.host1 h2,.domn2 h3').attr('data-sr', 'enter left, move 200px  over 2s');
$('.text-host h5,.prog3 p,.banks p,.seo1 h3,.seo2 h3').attr('data-sr', 'enter left, move 200px  over 2s');
$('.page_nav p').attr('data-sr', 'wait 0.2s, enter left, move 200px  over 2s'); 
$('.h4_1,.about3 img,.domn1 span,.domn1 input,.domn1 select,.domn1 a').attr('data-sr', 'enter left, move 100px  over 2s'); 
$('.h4_2').attr('data-sr', 'wait 0.2s, enter left, move 200px  over 2s'); 
$('.page_left-icon2,.prog3 img,.trms-sec h2').attr('data-sr', 'wait 0.4s, enter right, move 100px  over 2s'); 
$('.arrow_,.wrnng_ p').attr('data-sr', 'wait 0.4s, enter top, move 50px  over 2s'); 
$('.about1 p,.vb0 p,.vb1 ul li,.domn2 p,.host1 p,.text-host li,.mrkng2 li,.prog2 p,.seo1 p,.spprt h2').attr('data-sr', 'enter bottom, move 200px  over 2s'); 
$('.about1 img,.banks i,.work-bgr').attr('data-sr', 'move 200px scale up 50%, over 2s'); 
$('.about2 img').attr('data-sr', 'scale up 50%, over 2s'); 
$('.p_1').attr('data-sr', 'ease-in-out 50px  over 2s');
$('.p_2').attr('data-sr', 'wait 0.2s, ease-in-out 50px  over 2s');
$('.gg_1,.seo-ordr,.domn2 img,.mrkng2 img,.prog2 img,.wrnng_ a,.seo1 img').attr('data-sr', 'enter left, move 200px  over 2s'); 
$('.gg_2,.show-lasts div a').attr('data-sr', 'wait 0.2s, enter left, move 200px  over 2s'); 
$('.gg_3').attr('data-sr', 'wait 0.4s, enter left, move 200px  over 2s'); 
$('.gg_4').attr('data-sr', 'wait 0.6s, enter left, move 200px  over 2s'); 
$('.gg_5').attr('data-sr', 'wait 0.8s, enter left, move 200px  over 2s'); 
$('.gg_6').attr('data-sr', 'wait 1s, enter left, move 200px  over 2s'); 
$('.gg_7').attr('data-sr', 'wait 1.2s, enter left, move 200px  over 2s');
$('.gg_8').attr('data-sr', 'wait 1.4s, enter left, move 200px  over 2s'); 
$('.about4 i,.wrnng_ i').attr('data-sr', 'enter bottom, roll 360deg, over 3s'); 
$('.about4 h5,.show-lasts div h4,.trms-sec,.work-dtls strong').attr('data-sr', 'enter bottom, hustle 100px, over 2s'); 
$('.work-dtls p').attr('data-sr', 'wait 0.5s, enter bottom, hustle 50px, over 2s'); 
$('.dt-b1').attr('data-sr', 'wait 1s, enter bottom, hustle 50px, over 2s'); 
$('.dt-b2').attr('data-sr', 'wait 1.5s, enter bottom, hustle 50px, over 2s'); 
$('.dt-b3').attr('data-sr', 'wait 2s, enter bottom, hustle 50px, over 2s'); 
$('.about4 p').attr('data-sr', 'enter top, hustle 100px, over 2s'); 
$('.about5 p,.contact-form_ h4').attr('data-sr', 'enter bottom, hustle 100px, over 2s'); 
$('.about5 img').attr('data-sr', 'scale up 50%, roll 360deg, over 2s'); 
$('.ct_1,.customrs li,.store3 h4').attr('data-sr', 'enter left, hustle 100px, over 2s'); 
$('.ct_2').attr('data-sr', 'wait 0.2s, enter left, hustle 100px, over 2s'); 
$('.ct_3').attr('data-sr', 'wait 0.4s, enter left, hustle 100px, over 2s'); 
$('.social .facebook,.share_b1').attr('data-sr', 'wait 0.9s, enter left, hustle 100px, over 2s'); 
$('.social .twitter,.share_b2').attr('data-sr', 'wait 0.6s, enter left, hustle 100px, over 2s'); 
$('.social .instagram,.share_b3').attr('data-sr', 'wait 0.3s, enter left, hustle 100px, over 2s'); 
$('.social .behance,.share_b4').attr('data-sr', 'enter left, hustle 100px, over 2s'); 
$('.show-lasts img').attr('data-sr', 'over 2s'); 
$('.c_it1').attr('data-sr', 'enter left, hustle 100px, over 2s');
$('.c_it2,.mrkng2 h3,.prog2 h3,.prog3 h3,.banks b, .banks strong,.seo2 img').attr('data-sr', 'enter right, hustle 100px, over 2s'); 
$('.c_it3,.mrkng2 i').attr('data-sr', 'wait 0.3s, enter left, hustle 100px, over 2s');
$('.c_it4,.store3 p').attr('data-sr', 'wait 0.3s, enter right, hustle 100px, over 2s');
$('.ipt_1,.hi_2,.plan2,.pg2,.wrnng_ h4').attr('data-sr', 'enter bottom, hustle 100px, over 2s');
$('.ipt_2,.trms-sec p').attr('data-sr', 'wait 0.3s, enter bottom, hustle 100px, over 2s');
$('.ipt_3,.hi_1,.hi_3,.plan1,.plan3,.pg1,.pg3').attr('data-sr', 'wait 0.6s, enter bottom, hustle 100px, over 2s');
$('.ipt_4,.tags-box a').attr('data-sr', 'wait 0.8s, enter right, hustle 300px, over 2s');
$('.contact-form_ textarea').attr('data-sr', 'wait 0.8s, enter left, hustle 100px, over 2s');
$('.vb1 img').attr('data-sr', 'enter bottom, hustle 200px, over 2s');
$('.vdb1,.tags-box,.faqlist > li').attr('data-sr', 'enter bottom, move 100px, over 2s');
$('.vdb2,.share-box').attr('data-sr', 'wait 0.2s,enter bottom, move 100px, over 2s');
$('.vdb3').attr('data-sr', 'wait 0.4s,enter bottom, move 100px, over 2s');
$('.vdb4').attr('data-sr', 'wait 0.6s,enter bottom, move 100px, over 2s');
$('.vdb5').attr('data-sr', 'wait 0.8s,enter bottom, move 100px, over 2s');
$('.store3 img').attr('data-sr', 'ease-in-out 100px  over 1s');
$('.seo-it_1').attr('data-sr', 'enter left, over 1s');
$('.seo-it_2').attr('data-sr', 'wait 0.3s, enter left, over 1s');
$('.seo-it_3').attr('data-sr', 'wait 0.6s, enter left, over 1s');
$('.seo-it_4').attr('data-sr', 'wait 0.9s, enter left, over 1s');
$('.seo-it_5').attr('data-sr', 'wait 1.2s, enter left, over 1s');
$('.seo-it_6').attr('data-sr', 'wait 1.5s, enter left, over 1s');
$('.seo-it_7').attr('data-sr', 'wait 1.8s, enter left, over 1s');
$('.seo-it_8').attr('data-sr', 'wait 2.1s, enter left, over 1s');
$('.seo-it_9').attr('data-sr', 'wait 2.4s, enter left, over 1s');
$('.seo-it_10').attr('data-sr', 'wait 2.7s, enter left, over 1s');
$('.seo-it_11').attr('data-sr', 'wait 3s, enter left, over 1s');
$('.seo-it_12').attr('data-sr', 'wait 3.3s, enter left, over 1s');
$('.seo-it_13').attr('data-sr', 'wait 3.6s, enter left, over 1s');
$('.trms-sec i').attr('data-sr', 'enter right, roll 1000deg, over 1s');
$('.c_post li').attr('data-sr', 'enter right, move 100px, over 1s');
$('.c_post li.prv-work').attr('data-sr', 'wait 0.5s, enter right, move 100px, over 1s');
$('.c_post li.next-work').attr('data-sr', 'wait 1s, enter right, move 100px, over 1s');
$('.dsn_2').attr('data-sr', 'enter bottom, move 100px, over 1s');
$('.dsn_1').attr('data-sr', 'wait 0.3s, enter left, move 200px, over 1s');
$('.dsn_3').attr('data-sr', 'wait 0.3s, enter right, move 200px, over 1s');
$('.dsn_5').attr('data-sr', 'enter top, move 100px, over 1s');
$('.dsn_4').attr('data-sr', 'wait 0.3s, enter left, move 200px, over 1s');
$('.dsn_6').attr('data-sr', 'wait 0.3s, enter right, move 200px, over 1s');
$('.work-items li').attr('data-sr', 'enter bottom, move 200px, over 1s');
$('.des-cat0 h1').attr('data-sr', 'enter bottom, move 30px, over 1s');
$('.des-cat0 img').attr('data-sr', 'enter bottom, move 30px, over 2s');
$('.des-box h2,.prnt1 p').attr('data-sr', 'enter bottom, move 100px, over 1s');
$('.des-box p').attr('data-sr', 'enter top, move 100px, over 1s');
$('.des-box a').attr('data-sr', 'wait 0.8s, enter right, hustle 300px, over 2s');
$('.des-1 img,.des-3 img,.des-5 img,.des-7 img,.des-9 img,.des-11 img,.des-13 img').attr('data-sr', 'wait 0.5s,enter right, move 200px, over 1s');
$('.des-2 img,.des-4 img,.des-6 img,.des-8 img,.des-10 img,.des-12 img,.des-14 img').attr('data-sr', 'wait 0.5s,enter left, move 200px, over 1s');
$('.d_section1 h3,.d_section2 p,.d_section3 ul li,.d_section4 img,.d_section5 .Grid1k > ul > li,.d_section5 h2,.d_section5 p').attr('data-sr', 'enter bottom, move 100px, over 1s');
$('.d_section1 img,.d_section2 h4,.d_section4 .Grid1k div,.art-tags div a').attr('data-sr', 'enter left, move 100px, over 1s');
$('.artcl-items li,.artcl-title,.artcl-page img,.artcl-page p,.art-tags span').attr('data-sr', 'enter bottom, move 100px, over 1s');


$('.big-menu .dsn_1,.big-menu .dsn_2,.big-menu .dsn_3,.big-menu .dsn_4,.big-menu .dsn_5,.big-menu .dsn_6').removeAttr("data-sr");
$(".appendHere").niceScroll({
cursorwidth: 10,
cursorcolor: "#000",
autohidemode: false,
cursoropacitymin: 1
});
/**************/
$('.big-img-work_box,.overly_').hide();
/***************/
$('.imageToAppend').bind('click', function(e) {
e.preventDefault();
$('body').addClass('open-big-img');
$('.big-img-work_box,.overly_').fadeToggle(200);
var url = $(this).attr('rel'),
    el = $('.appendHere');
el.fadeOut('slow', function() {
    el /*.empty().text('Loading...')*/ .fadeIn().delay('600').fadeOut(function() {
        $(this).empty();
        $('<img src="' + url + '" />').appendTo(el);
        $(this).fadeIn();
    });
});
});
/********/
$(".overly_").click(function() {
$('body').removeClass('open-big-img');
$(this).fadeOut(600);
$('.big-img-work_box').fadeOut(600);
$('.appendHere').fadeOut(300)

});
/*********/
$(".close0").click(function() {
$('body').removeClass('open-big-img');
$(this).fadeOut(600);
$('.big-img-work_box,.overly_').fadeOut(600);
$('.appendHere').fadeOut(300)

});
/********
$(".ul .item").click(function () {
$(".ul .item").removeClass('slick-current');
$(this).addClass('slick-current');
});	
*******/
            $('.tab_blocks_').slick({
                slidesToShow: 1,
                rtl: true,
                slidesToScroll: 1,
                arrows: false,
                fade: true,
                asNavFor: '.ul'
            });
            $('.ul').slick({
                slidesToShow: 5,
appendArrows:$(".tabs-Control"),
autoplaySpeed:4000,speed:1000,
                rtl: true,
                slidesToScroll: 1,
                asNavFor: '.tab_blocks_',
                autoplay: true,
                focusOnSelect: true,
                responsive: [{
                    breakpoint: 800,
                    settings: {
                        slidesToShow: 3,
                    }
                }, {
                    breakpoint: 640,
                    settings: {
                        slidesToShow: 2,
                    }
                }, {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                    }
                }, ]
            });

/***/
window.sr = new scrollReveal({mobile: true});
/***/




});
