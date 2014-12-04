<html>
<head>
<link rel = "stylesheet" type ="text/css" href = "css/style.css"/>
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
	<div class = "mainChatDiv" >
		<div  class = 'chatTopH'  >
			<div class  ="cmnDiv">
			<a style = 'text-decoration:none;' href = 'http://www.google.com'><span style = 'color:white;font-size:18px;text-decoration:none;' >User Profile</span></a>
			</div>
			<div>
				<div class = 'chatOpts cmnDiv ' >
				</div>
				<div class = 'cmnDiv chatLiOpt'>
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
		
		
		
		<div class = 'chatTopD'>
			<div class = 'cmnDiv chatMsgDiv'></div>
			<div class = 'cmnDiv chatWriteDiv'>
				<input style = 'width:100%;height:100%;' type = 'text' />
			</div>
		</div>
	</div>
	
</body>
</html>