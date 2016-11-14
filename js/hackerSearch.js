console.log('start search script');
	// hackerSearch
	// hackerSearchBar

$('#hackerSearchBar').keyup(function(){
	//event.preventDefault();
	$target = $(this);
	$myValue = $('#hackerSearchBar').val();
	$('.hackerSearch').each(function(key,value){
		if($myValue === "")
		{
			$(value).show();
		}
		else
		{
			var str = $(value).find('.hackerSearchAttr').html().toLowerCase();
			// console.log(str);
			// console.log($myValue);
			if(str.indexOf($myValue) > -1)
			{
				$(value).show();	
			}
			else
				$(value).hide();
		}
	});
});


console.log('end compiling search script');