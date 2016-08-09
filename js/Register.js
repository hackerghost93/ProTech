$(document).ready(function()
{
$( "#Register" ).submit(function(e){
	e.preventDefault();
	var MyForm = $(this);
	console.log(MyForm);
	var username=$('#username').val();
	var password=$('#password').val();
	var email=$('#email').val();
	$.post('Login/Add',{username:username,password:password,email:email},function(data)
	{
		console.log(data);
	},'json');
  });
});