	function getter()
	{
	nothing="nothing";
	$.get('product_cms/family',{nothing:nothing},function(data)
	{
		$.each($(data), function(key, value) {
    	 $('#S')
         .append($("<option></option>")
                    .attr("value",key)
                    .text(value.family_name)); 
	});
	},'json');
	}
	function submitter()
	{
		console.log("submitter");
		var AddProduct=$('#productAdd');
		console.log(AddProduct);
		var input =new Array;
		input['family_name'] = $('#S').val();
		input['printer_name'] = $('#printer_name').val();
		input['printer_pdf'] = $('#printer_pdf').val();
		input['printer_driver'] = $('#printer_driver').val();
		input['general_description'] = $('#general_description').val();
		console.log(input);
		var none="none";
		$.post('product_cms/insert',{none:none},function(data)
		{
			console.log("returned from contoller");
			console.log(data);
		},'json');
	}