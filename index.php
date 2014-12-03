<html>
<head>
<script src = "https://code.jquery.com/jquery-2.1.1.min.js" ></script>
<script>
$(function(){
$('.chatTopH').on('click', function(){
	$(this).siblings('.chatTopD').toggle();
	var disp = $(this).siblings('.chatTopD').css('display');
	
	if ( disp == 'none')
	{
		$(this).css('margin-top','100%');
	}
	else if ( disp == 'block' )
	{
		$(this).css('margin-top','0%');
	}
});
$('.chatOpts').on('click', function(){

$('.chatLiOpt').slideToggle('slow');

return false ;/*We are using the return false here because if do not use then when the options div with the class class = "chatOpts" will work, but as it is contained inside the div with class = "chatTopH" it is getted minimized, to prevent that from happening we are using the return false*/
});
})
</script>
</head>
<body>
	<div style = 'float:left;display:block;' >
		<div  class = 'chatTopH' style = 'float:left;display:block;height:30px;width:300px;background-color:gray;cursor:pointer;box-shadow: 4px 4px 4px lightblue;'  >
			<div style = 'float:left;display:block;'>
			<a style = 'text-decoration:none;" href = "javascript:void(0)'><span style = 'color:white;font-size:18px;text-decoration:none;' >User Profile</span></a>
			</div>
			<div>
				<div class = 'chatOpts' style = 'float:left;display:block;height:30px;width:30px;margin: 0 0 0 60%;0background-repeat:no-repeat;background-image:url(images/settings.png);background-size: 100% 100%;background-color:cyan;cursor:pointer;' >
				</div>
				<div class = 'chatLiOpt' style = 'float:left;display:block;width:140px;display:none;position:relative;top:2px;left:269px;background-color:white;'>
					<div style = 'width:100%;background-color:lightblue;'>
					Report Abusive
					</div>
					<div style = 'width:100%;background-color:lightgray;'>
					Report Spam
					</div>
					<div style = 'width:100%;background-color:lightblue;'>
					Delete
					</div>
				</div>
			</div>
		</div>
		
		
		
		<div class = 'chatTopD' style = 'width:300px;height:300px;background-color:lightblue;box-shadow: 4px 4px 4px lightblue;'>
			<div style = 'float:left;display:block;overflow-y:auto;width:300px;height:260px;'></div>
			<div style = 'float:left;display:block;width:300px; height:40px;box-shadow: 4px 4px 4px lightblue;'>
				<input style = 'width:100%;height:100%;font-size:21px;' type = 'text' />
			</div>
		</div>
	</div>
	
</body>
</html>