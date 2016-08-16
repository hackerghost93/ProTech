
console.log('start script');

$('.deleteBtn').click(function(event){
  var $target = $(this);
  $('#deleteConfirm').val($target.attr('data-id'));
});

// delete specification
$('.removespecification').click(function(event){
  $target = $(this);
  $target.parent().remove();
});


$('.editeBtn').click(function(event)
{
  var $target = $(this);
  var value  = $target.attr('data-id');
  var path = MyUrl+"index.php/"+MyType+"/get/"+value ;
  // console.log(path);


    // for families 
    var familyPath = MyUrl+"index.php/family/getAll"
    //console.log(familyPath);
    $.get(familyPath,function(data){
      /// iterate families available
      console.log(JSON.stringify(data,null,2));
      $.each(data.families , function(key,value){
        console.log(value);
        $('#hackerSelect').append($('<option></option>').val(value.family_id).html(value.family_name));
      });
    },'json');
    /// adjust edit form 


    $.get(path,
      function(data){
        console.log(JSON.stringify(data,null,2));
        /// iterate on images
        $("#hackerSelect option[value='"+data.data.family_id+"']").attr('selected','selected');
        $('#hackerTitle').val(data.data.name);
        //$('#hackerPDF').val(data.data.pdf);
        $('#hackerDRIVER').val(data.data.driver);
        $('#hackerDescription').val(data.data.general_description);
        $.each(data.images , function(key,value){
          $('.prodImages').append($('<img>').attr('src',MyUrl+value.image_path)
            .addClass('editimgproduct').attr('data-path',value.image_path));
        });
        
        /// set specification
        var $element = $('#hackerGuarantee');
        console.log('looping');
        $.each(data.guarantee , function(key,value)
        {
          console.log(value.guarantee_text);
         $element.append(
           '<p data-id="'+value.guarantee_id+'"><input type="text" value="'+value.guarantee_text+'" name="guarantee[]" id="p_scents" class="form-control overlayproduct"/><a href="#" id="remScnt" class="removespecification  CloseBtn" ><i class="fa fa-close"></i></a></p>');
        });
    },'json');


});


$('.editimgproduct').click(function(event){
  $target = $(this);
  var path = MyUrl+"index.php/printer/deleteImage" ;
  $targetPath = $target.attr('data-path');
  $.post(path,{image: $targetPath , type: MyType},function(data){
    console.log(data.state);
    $target.remove();
  });
}); 

$('#deleteConfirmed').submit(function(event){
  console.log('delete confirmations');
  event.preventDefault();
  var $target = $(this);
  var value = $('#deleteConfirm').val();
  console.log(value);
  var path = MyUrl+"index.php/"+MyType+"delete" ;
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