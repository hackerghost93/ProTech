$(document).ready(function ()
{
    //--------------------------------------------initFunctions-------
    $("[data-toggle=tooltip]").tooltip();
    //------------------------------------------------------------------

    $(document).on("click", ".ExitBtn", function ()
    {
        $(this).closest(".OverLayForm").removeClass("show");
        $(this).closest(".OverLayForm").addClass("closed");
    });
    $(document).on("click", ".OverLayFormBtn", function ()
    {
        $(this).closest(".OverLayForm").removeClass("show");
        $(this).closest(".OverLayForm").addClass("closed");
    });
    $(document).on("click", ".SubItemBtnOpen", function ()
    {
        $(this).closest("td").children(".SubItem").collapse('toggle');
    });


    //-------------------------------------------Category-------------

    $(document).on("click", "#AddNewCategoryShow", function ()
    {
        $("#AddNewCategoryOverlayForm").removeClass("closed");
        $("#AddNewCategoryOverlayForm").addClass("show");
    });
    $(document).on("click", "#EditCategoryOverlayFormShow", function ()
    {
        $("#EditCategoryOverlayForm").removeClass("closed");
        $("#EditCategoryOverlayForm").addClass("show");
    });

    //----------------------------------------------------------------
		
		
    //-------------------------------------------Tags-------------
    $(document).on("click", "#AddNewTagShow", function ()
    {
        $("#AddNewTagOverlayForm").removeClass("closed");
        $("#AddNewTagOverlayForm").addClass("show");
    }); 
	$(document).on("click", "#AddNewSpareTagShow", function ()
    {
        $("#AddNewSpareTagOverlayForm").removeClass("closed");
        $("#AddNewSpareTagOverlayForm").addClass("show");
    });
/*     $(document).on("click", "#EditDTagOverlayFormShow", function ()
    {
        $("#EditTagOverlayForm").removeClass("closed");
        $("#EditTagOverlayForm").addClass("show");
    }); */

    //-------------------------------------------Posts-------------
    $(document).on("click", "#AddNewPostShow", function ()
    {
        $("#AddNewPostOverlayForm").removeClass("closed");
        $("#AddNewPostOverlayForm").addClass("show");
    });
    $(document).on("click", "#EditdPostOverlayFormShow", function ()
    {
        $("#EditPostOverlayForm").removeClass("closed");
        $("#EditPostOverlayForm").addClass("show");
    });
    //-------------------------------------------VideoPost-------------
    $(document).on("click", "#AddNewVideoPostShow", function ()
    {
        $("#AddNewVideoPostOverlayForm").removeClass("closed");
        $("#AddNewVideoPostOverlayForm").addClass("show");
    });
    $(document).on("click", "#EditVideoPostOverlayFormShow", function ()
    {
        $("#EditVideoPostOverlayForm").removeClass("closed");
        $("#EditVideoPostOverlayForm").addClass("show");
    });
    //-------------------------------------------Offers-------------
    $(document).on("click", "#AddNewOfferShow", function ()
    {
        $("#AddNewOfferOverlayForm").removeClass("closed");
        $("#AddNewOfferOverlayForm").addClass("show");
    });
    $(document).on("click", "#EditOfferOverlayFormShow", function ()
    {
        $("#EditOfferOverlayForm").removeClass("closed");
        $("#EditOfferOverlayForm").addClass("show");
    });
    //-------------------------------------------Users-------------
    $(document).on("click", "#AddNewUserShow", function ()
    {
        $("#AddNewUserOverlayForm").removeClass("closed");
        $("#AddNewUserOverlayForm").addClass("show");
    });
    $(document).on("click", "#EditUserOverlayFormShow", function ()
    {
        $("#EditUserOverlayForm").removeClass("closed");
        $("#EditUserOverlayForm").addClass("show");
    });
    //-------------------------------------------Products-------------
    $(document).on("click", "#AddNewProductShow", function ()
    {
        $("#AddNewProductOverlayForm").removeClass("closed");
        $("#AddNewProductOverlayForm").addClass("show");
    });
    $(document).on("click", "#EditProductOverlayFormShow", function ()
    {
        $("#EditProductOverlayForm").removeClass("closed");
        $("#EditProductOverlayForm").addClass("show");
    });   
	//-------------------------------------------SpareParts-------------
    $(document).on("click", "#AddNewSparePartsShow", function ()
    {
        $("#AddNewSparePartsOverlayForm").removeClass("closed");
        $("#AddNewSparePartsOverlayForm").addClass("show");
    });
    $(document).on("click", "#EditNewSparePartsShow", function ()
    {
        $("#EditSparePartsOverlayForm").removeClass("closed");
        $("#EditSparePartsOverlayForm").addClass("show");
    });	
	//-------------------------------------------Family-------------
    $(document).on("click", "#AddNewFamilyShow", function ()
    {
        $("#AddNewFamilyOverlayForm").removeClass("closed");
        $("#AddNewFamilyOverlayForm").addClass("show");
    });
    $(document).on("click", "#EditNewFamilyShow", function ()
    {
        $("#EditFamilyOverlayForm").removeClass("closed");
        $("#EditFamilyOverlayForm").addClass("show");
    });	
	//-------------------------------------------SlideShow-------------
    $(document).on("click", "#AddNewImageShow", function ()
    {
        $("#AddNewSlideShowOverlayForm").removeClass("closed");
        $("#AddNewSlideShowOverlayForm").addClass("show");
    });
    $(document).on("click", "#EditSlideShow", function ()
    {
        $("#EditSlideShowOverlayForm").removeClass("closed");
        $("#EditSlideShowOverlayForm").addClass("show");
    });
	//-------------------------------------------Contact-------------
    $(document).on("click", "#AddNewContactShow", function ()
    {
        $("#AddNewContactShowOverLay").removeClass("closed");
        $("#AddNewContactShowOverLay").addClass("show");
    });
    $(document).on("click", "#EditContactOverlayFormShow", function ()
    {
        $("#EditContactFormShow").removeClass("closed");
        $("#EditContactFormShow").addClass("show");
    });	
	//-------------------------------------------Services-------------
    $(document).on("click", "#AddNewServicesShow", function ()
    {
        $("#AddNewServicesOverlayForm").removeClass("closed");
        $("#AddNewServicesOverlayForm").addClass("show");
    });
    $(document).on("click", "#EditStageOverlayFormShow", function ()
    {
        $("#EditServicesOverlayForm").removeClass("closed");
        $("#EditServicesOverlayForm").addClass("show");
    });	
	//-------------------------------------------Cutomers-------------
    $(document).on("click", "#AddNewcustomerShow", function ()
    {
        $("#AddNewCutomerOverlayForm").removeClass("closed");
        $("#AddNewCutomerOverlayForm").addClass("show");
    });
    $(document).on("click", "#EditNewCustomersShow", function ()
    {
        $("#EditcutomersOverlayForm").removeClass("closed");
        $("#EditcutomersOverlayForm").addClass("show");
    });

    //-------------------------------------------------Chat----------
    $(document).on("change", "#SelectChatUser", function ()
    {
        var UserName = $(this).val();
        $(".ChatDetailsHeaderLeft").empty();
        $(".ChatDetailsHeaderLeft").append("<h3>" + UserName + "</h3>");

        var x = $(".ChatDetails").hasClass("in");

        if (UserName == "")
        {
            $(".ChatDetails").collapse("hide");
        }
        else
        {
            $(".ChatDetails").collapse("show");
          /*  if (x == true)
            {
                $(".ChatDetails").collapse("hide");
                $(".ChatDetails").collapse("show");
            }
            else if (x == false)
            {
                $(".ChatDetails").collapse("show");
            }*/
        }
    });
    //--------------Shadow When Hover on ServiceItem ---------------------
    $(document).on("mouseenter", ".ServiceBox", function ()
    {
        $(this).children(".ServiceImg").children(".ServiceFliterLayer").removeClass("ShadowOut");
        $(this).children(".ServiceImg").children(".ServiceFliterLayer").addClass("ShadowIn");

    });
    $(document).on("mouseleave", ".ServiceBox", function ()
    {
        //$(this).children(".FilterLayer").css("display", "none");    
        $(this).children(".ServiceImg").children(".ServiceFliterLayer").removeClass("ShadowIn");
        $(this).children(".ServiceImg").children(".ServiceFliterLayer").addClass("ShadowOut");
    });
    
});