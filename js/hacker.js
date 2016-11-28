console.log('start script');

 $('#incrementAdd').click(function(event)
 {
    console.log('fired');
    $('#hackerAddImages').append(' <input type="file" name="image[]" class="form-control InputProduct" multiple=""/>');
 });

 $('#incrementAdd1').click(function(event)
 {
    console.log('fired');
    $('#hackerAddImages1').append(' <input type="file" name="image[]" class="form-control InputProduct" multiple=""/>');
 });

$('.deleteBtn').click(function(event){
  var $target = $(this);
  $('#deleteConfirm').val($target.attr('data-id'));
});

// delete specification
$('.editimgproduct').click(function(event){
  $target = $(this);
 // console.log($target.parent());
  //$target.parent().remove();
});


$('.editeBtn').click(function(event)
{
  var $target = $(this);
  var value  = $target.attr('data-id');
  var type  = $target.attr('data-type');
  console.log("Myid " +value);
  var path = MyUrl+"index.php/"+MyType+"/get/"+value ;
  // console.log(path);

	if(type == 'printer'){
    // for families 
    var familyPath = MyUrl+"index.php/family/getAll"
    //console.log(familyPath);
    $.get(familyPath,function(data){
      /// iterate families available
     // console.log(JSON.stringify(data,null,2));
      $.each(data.families , function(key,value){
        //console.log(value);
        $('#hackerSelect').append($('<option></option>').val(value.family_id).html(value.family_name));
      });
    },'json');
	
	} else {
		
    var familyPath = MyUrl+"index.php/family/getAllp"
    //console.log(familyPath);
    $.get(familyPath,function(data){
      /// iterate families available
     // console.log(JSON.stringify(data,null,2));
      $.each(data.families , function(key,value){
        //console.log(value);
        $('#hackerSelect').append($('<option></option>').val(value.printer_id).html(value.name));
      });
    },'json');
	
	
	}
    /// adjust edit form 


    $.get(path,
      function(data){
        console.log(JSON.stringify(data,null,2));
        /// iterate on images
        $("#hackerSelect option[value='"+data.data.family_id+"']").attr('selected','selected');
        $('#hackerTitle').val(data.data.name);
        $('#hackerSelectDiv').val(data.data.family_id);
        //console.log(data.data.family_id);
        if(MyType == 'printer')
          $('#hackerID').val(data.data.printer_id);
        else
          $('#hackerID').val(data.data.part_id);
        //$('#hackerPDF').val(data.data.pdf);
        $('#hackerDRIVER').val(data.data.driver);
        if(MyType == 'printer')
        {
          $('#hackerDescription').val(data.data.general_description);
          console.log('printer description');
        }
        else
          $('#hackerDescription').val(data.data.description);
        $('#hackerOldPDF').html(data.data.pdf);

        if(data.data.offer == 1)
          $('#hackerOffer').prop('checked',true);
        else
          $('#hackerOffer').prop('checked',false);


         var $x = $('<div>').addClass('prodImages');
        // image setting
        $('.myhackerImages').html("");
        $.each(data.images , function(key,value){
          // $x.append('<div class="mask hackerImage"><i class="fa fa-close"></i>');
          $x.append($('<img>').attr('src',MyUrl+value.image_path)
            .addClass('editimgproduct hackerIm').attr('data-path',value.image_path).click(EventImage));
        });
        $('.myhackerImages').append($x);
        
        /// set specification
        var $element = $('#hackerGuarantee');
        $element.empty();
       // console.log('looping');
        $.each(data.guarantee , function(key,value)
        {
        //  console.log(value.guarantee_text);
         $element.append(
           '<p data-id="'+value.guarantee_id+'"><input type="text" value="'+value.guarantee_text+'" name="guarantee[]" id="p_scents" class="form-control overlayproduct"/><a href="#" id="remScnt" class="removespecification  CloseBtn" ><i class="fa fa-close"></i></a></p>'
           );
        });

        $element = $('#hackerGeneral');
        $element.empty();
        $.each(data.general , function(key,value)
        {
          //console.log(value.general_text);
         $element.append(
          '<p><input type="text" value="'+value.general_text+'" name="general[]" id="p_scents" class="form-control overlayproduct" placeholder="Printing Specifications3" /><a href="#" id="remScnt" class="removespecification CloseBtn" ><i class="fa fa-close"></i></a></p>'
          );
        });


        $element = $('#hackerTyping');
        $element.empty();
        $.each(data.typing , function(key,value)
        {
         // console.log(value.typing_text);
          $element.append(
          '<p><input type="text" value="'+value.typing_text+'" name="typing[]" id="p_scents" class="form-control overlayproduct" placeholder="Printing Specifications3" /><a href="#" id="remScnt" class="removespecification CloseBtn" ><i class="fa fa-close"></i></a></p>'
          );
        });
    },'json');


});



$(document).on('click' , '.removespecification,.CloseBtn',EventSpec);

function EventSpec(event)
{
  $target= $(this);
  $target.parent().remove();
}

// done
function EventImage(event){
  console.log('fired');
  $target = $(this);
  console.log($(this));
  var path = MyUrl+"index.php/printer/deleteImage" ;
  $targetPath = $target.attr('data-path');
  console.log($targetPath);
  // delete request
  $.post(path,{image: $targetPath , type: MyType},function(data){
    console.log(data.state);
    $target.remove();
  });
}

$('#deleteConfirmed').submit(function(event){
  console.log('delete confirmations');
  event.preventDefault();
  var $target = $(this);
  var value = $('#deleteConfirm').val();
  console.log(value);
  var path = MyUrl+"index.php/"+MyType+"/delete" ;
  console.log(path);
  $.post(path,{id: value},function(data){
    $("tr[data-id='"+value+"']").remove();
    if(data.state == 'success')
    {
      console.log('success');
    }
    else
    {
      console.log('something went wrong');
    }
  } , 'json');
  $('#DeleteProductModal').modal('hide');
});

console.log('end script');