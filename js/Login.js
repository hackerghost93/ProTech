$(document).ready(function()
{
$( "#Login" ).submit(function(e){
	e.preventDefault();
	var MyForm = $(this);
	console.log(MyForm);
	var username=$('#username').val();
	var password=$('#password').val();
	$.post('Login/Log',{username:username,password:password},function(data)
	{
		console.log(data);
	},'json');
  });
});