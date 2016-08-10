function Add()
{
$( "#AddPlan" ).submit(function(e){
	e.preventDefault();
	var MyForm = $(this);
	console.log(MyForm);
	var plane_name=$('#plane_name').val();
	var plane_item=[];
	plane_item['0'] = $('#plane_item1').val();
	plane_item['1'] = $('#plane_item2').val();
	plane_item['2'] = $('#plane_item3').val();
	$.post('plans/Addplan',{plane_name:plane_name,plane_item:plane_item},function(data)
	{
		console.log(data);
	},'json');
  });
}
//------------------------------------------------------------------------------------

function Del()
{
	alert("delete");
}