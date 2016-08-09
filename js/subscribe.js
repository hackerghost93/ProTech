
$('#subscribeMail').submit(function(event)
{
	event.preventDefault();
	$target = $(this);
	$mail = $target.find('.newsletter-email').val();
	console.log($mail);
	console.log(MyUrl+'index.php/subscribe/add');
	$.post(MyUrl+'index.php/subscribe/add',{email: $mail} , function(data){
		if(data.state == 'success')
		{
			console.log('successfuly subscribed');
		}
		else
		{
			alert('something went wrong with subscription');
		}
	},'json');
});

console.log('subscribe is running');