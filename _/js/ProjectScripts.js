$(document).ready(function ()
{
    $(document).on("click", "#SMI-Home", function ()
    {
        $(".SMenuItem").removeClass("active");
        $(this).addClass("active");
       // $("#DataSectionID").load("PageTopBar.php");
       window.location.href = "index.php";
    });
    $(document).on("click", "#SMI-BLog", function ()
    {
        $(".SMenuItem").removeClass("active");
        $(this).addClass("active");
       // $("#DataSectionID").load("Blog.php");
        window.location.href = "Category.php";
    });
    $(document).on("click", "#SMI-Store", function ()
    {
        $(".SMenuItem").removeClass("active");
        $(this).addClass("active");
      // $("#DataSectionID").load("Offers.php");
       window.location.href = "Offers.php";
    });
    $(document).on("click", "#SMI-Chat", function ()
    {
        $(".SMenuItem").removeClass("active");
        $(this).addClass("active");
     // $("#DataSectionID").load("Chat.php");
      window.location.href = "Chat.php";
    });
    $(document).on("click", "#SMI-Users", function ()
    {
        $(".SMenuItem").removeClass("active");
        $(this).addClass("active");
     //  $("#DataSectionID").load("Users.php");
       window.location.href = "Users.php";
    });

    //--------------------------------------------BLog Page-------
    $(document).on("click", "#SSMIBLog-Categories", function ()
    {
        $(".subSideBarPayrollMenuItemAnchor").removeClass("active");
        $(this).addClass("active");
       // $("#SidBarContentDiv").load("SubViews/BLog/Categories.php");
    //   window.location.href = "category.php";
    });
    $(document).on("click", "#SSMIBLog-Tags", function ()
    {
        $(".subSideBarPayrollMenuItemAnchor").removeClass("active");
        $(this).addClass("active");
       // $("#SidBarContentDiv").load("SubViews/BLog/Tags.php");
  //     window.location.href = "Tags.php";
    });
    $(document).on("click", "#SSMIBlog-Posts", function ()
    {
        $(".subSideBarPayrollMenuItemAnchor").removeClass("active");
        $(this).addClass("active");
       // $("#SidBarContentDiv").load("SubViews/Blog/Posts.php");
     //  window.location.href = "Posts.php";
    });
   $(document).on("click", "#SSMIBlog-VideoPosts", function ()
    {
        $(".subSideBarPayrollMenuItemAnchor").removeClass("active");
        $(this).addClass("active");
       // $("#SidBarContentDiv").load("SubViews/Blog/Authors.php");
    //   window.location.href = "VideoPosts.php";
    });
    $(document).on("click", "#SSMIBlog-Comments", function ()
    {
        $(".subSideBarPayrollMenuItemAnchor").removeClass("active");
        $(this).addClass("active");
      //  $("#SidBarContentDiv").load("SubViews/Blog/Comments.php");
    //    window.location.href = "Comments.php";
    });
    
    //-----------------------------------------------------------------

    //--------------------------------------------Store Page-------
    $(document).on("click", "#SSMIStore-Offers", function ()
    {
        $(".subSideBarPayrollMenuItemAnchor").removeClass("active");
        $(this).addClass("active");
     //   $("#SidBarContentDiv").load("SubViews/Store/Offers.php");
    });
    $(document).on("click", "#SSMIStore-Subscribers", function ()
    {
        $(".subSideBarPayrollMenuItemAnchor").removeClass("active");
        $(this).addClass("active");
     //   $("#SidBarContentDiv").load("SubViews/Store/Subscribers.php");
    });


//--------------------------------------------Editors-------
//---------PostEditor-------
//----------------------------------------------------------
    
});