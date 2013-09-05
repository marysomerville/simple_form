<?php

function message_submitted() {

	$output ='
		<p id="thankyou_message">"Thank you for your enquiry, we will get back to you shortly".</p>
	';
	
	return $output;

}
function message_error() {

	$output ='
		<p id="error_message">"Oops, you did not fill in all the required fields".</p>
	';
	
	return $output;

}
function validate_email($email_data) {
	
	if (ereg('^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$', $email_data)) {
	
		return true;
	
	} else {
	
		return false;
	
	}
}
 
//set the two variables to work with
$class_incomplete = 'inputbox_required';
$class_complete = 'inputbox_complete';
//set the default class for the form fields
$inputbox_required_name = $class_complete;
$inputbox_required_email = $class_complete;
//set the default value next to the field name
$required_field_name = '<span class="required">*</span>';
$required_field_email = '<span class="required">*</span>';


if($_POST['submit']) {
	
	if($_POST['name'] == '') { //check to see if they entered a name
		$required_field_name = 'Name required';
		$inputbox_required_name = $class_incomplete; 
	} else { 
		$required_field_name = ''; 
		$inputbox_required_name = $class_complete; 
	}
	if(($_POST['email'] == '') || (validate_email($_POST['email']) == false)) { //check to see if they entered an email address and if it is a valid email
		$required_field_email = 'Valid email required'; 
		$inputbox_required_email = $class_incomplete; 
	} else { 
		$required_field_email = ''; 
		$inputbox_required_email = $class_complete; 
	}
	
	if(validate_email($_POST['email']) && ($_POST['name'] != '')) { //if the two fields are filled in and the email is valid
	
		$form_status = true;
		
		include 'send_email.php'; //send the form contents
		
	} else { // if fields aren't filled in
	
		print(message_error());
	
	}
}
				
if($form_status == true) {
					
		print(message_submitted());
				
} else {
			
			
	print('

	<form action="" method="post">
		
		<div id="left_wrap">
			<div class="wrap">
				<div class="name">Name : '.$required_field_name.'</div>
				<input name="name" type="text" value="'.$_POST['name'].'" id="name" class="'.$inputbox_required_name.'" />
			</div>
			<div class="wrap">
				<div class="name">Email : '.$required_field_email.'</div>
				<input name="email" type="text" value="'.$_POST['email'].'" id="email" class="'.$inputbox_required_email.'" />
			</div>
		</div>
		<div id="right_wrap">
			<div class="wrap">
				<div class="comments">Enquiry :</div>
				<textarea name="enquiry" id="enquiry" cols="38" rows="5" class="text_area">'.$_POST['enquiry'].'</textarea>
			</div>
			<div class="wrap">
				<input type="submit" name="submit" id="submit" value="Send" />
			</div>
		</div>
		<div class="content_end"></div>
	</form>
	');
	
}
				
?>