<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Contact Form</title>
<style>
body {
	background-color: #ffffff;
    color: #454545;
    font-family: Arial,Verdana,Helvetica,sans-serif;
    font-size: 13px;
    line-height: 1.5;
}
#contact_form {
	width:800px;
	margin:0 auto;
}
.wrap {
	padding:5px 0 5px 0;
}
#left_wrap {
	width:300px;
	float:left;
}
#right_wrap {
	width:350px;
	float:left;
}
.text_area, .text_areainputbox_complete {
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	border-radius: 5px; 
	-webkit-box-shadow: 1px 1px 1px 1px rgba(21, 61, 87, 0.3);
	-moz-box-shadow: 1px 1px 1px 1px rgba(21, 61, 87, 0.3);
	box-shadow: 1px 1px 4px 1px rgba(21, 61, 87, 0.3);
	background:#EFF5FC;
	border:3px solid #fff;
	font-family: Arial,Verdana,Helvetica,sans-serif;
    font-size: 13px;
    line-height: 1.5; 
}
#submit {
	margin:10px 0 0 0;
}
.inputbox_complete {
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	border-radius: 5px; 
	-webkit-box-shadow: 1px 1px 1px 1px rgba(21, 61, 87, 0.3);
	-moz-box-shadow: 1px 1px 1px 1px rgba(21, 61, 87, 0.3);
	box-shadow: 1px 1px 4px 1px rgba(21, 61, 87, 0.3); 
	height:20px;
	background:#EFF5FC;
	border:3px solid #fff;
}
.inputbox_required {
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	border-radius: 5px; 
	-webkit-box-shadow: 1px 1px 1px 1px rgba(21, 61, 87, 0.3);
	-moz-box-shadow: 1px 1px 1px 1px rgba(21, 61, 87, 0.3);
	box-shadow: 1px 1px 4px 1px rgba(21, 61, 87, 0.3); 
	height:20px;
	background:#e9b8c0;
	border:3px solid #A00000;
}
p#thankyou_message {
	font-size:14px;
	font-style:italic;
}
p#error_message {
	color:#A00000;
	font-size:14px;
	font-style:italic;
}
.content_end {
	clear:both;
}
</style>
</head>

<body>
<div id="contact_form">
	<?php include 'form.html.php'; ?>
</div>
</body>
</html>