<script type='text/javascript' src='<?=base_url()?>js/form-jquery.js'></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var _wpcf7 = {"loaderUrl":"<?=base_url()?>imgs/ajax-loader.gif","sending":"\u062c\u0627\u0631\u064a \u0627\u0644\u0625\u0631\u0633\u0627\u0644 ..."};
    /* ]]> */
</script>
<script type='text/javascript' src='<?=base_url()?>js/newscripta.js'></script>

<script type='text/javascript' src='<?=base_url()?>js/assest.js'></script>
<script type='text/javascript' src='//www.google.com/recaptcha/api.js?onload=onloadCallback&#038;render=explicit&#038;ver=1'></script>
<script type='text/javascript' src='<?=base_url()?>js/embed.js'></script>
<script src="<?=base_url()?>js/jquery.min.js"></script>
<script src="<?=base_url()?>js/scripts.js"></script>
<script src="<?=base_url()?>js/ea-scripts.js"></script>
<!--script src="<?//=base_url()?>js/jquery.raty.js"></script-->
<!--script src="<?//=base_url()?>js/labs.js"></script>
<!--script src="<?=//base_url()?>js/jquery.star.rating.js"></script-->

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-62646818-2', 'auto');
  ga('send', 'pageview');

</script>

<script type="text/javascript">
    var MyUrl = "<?=base_url()?>" ;
    console.log('here');
    $(document).ready(function(){
        $('#tab0').addClass('activeTab');
    });
</script>

<script type="text/javascript" src="<?=base_url()?>js/subscribe.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
            var nothing = "nothing";
            $.post('<?php echo base_url();?>index.php/Contacts/Get_Contact_Data',{nothing:nothing},function(data)
            {
     //`adress``telephone``mobile``whatsapp``skybe``youtube``email``Email_Password``facebook``twitter``linkedin`
                
                $('.Telephone').text(data.telephone);
                $('.Mobile').text(data.mobile);
                $('.Email').text(data.email);
                $('.WhatsApp').text(data.whatsapp);
                $('.Skypee').text(data.skybe);
                $(".Youtube").attr("href", data.youtube);
                $(".Twitter").attr("href", data.twitter);
                $(".Facebook").attr("href", data.facebook);
                $(".Linkedin").attr("href", data.linkedin);
            },'json');
        });
</script>
<script type="text/javascript" src="<?=base_url()?>js/hackerSearch.js"></script>

</body>
</html>