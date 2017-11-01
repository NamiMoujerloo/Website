<!DOCTYPE html>
<html lang="en">
<html>
	<link rel="stylesheet" href="form.css" type="text/css">
	<div class="contact-form">
		<h1>Contact Form</h1>
  
		<form method="post" role="form">
		<div class="controls">
		<div class="form-group">
			<p>Full Name</p>
			<input type="text" name="name" class="form-input-text form-control"  required="required">                              
		</div>
	   
			<div class="form-group">
			 <p >Email</p>
			<input type="email" name="email" class="form-input-text form-control"  required="required">                           
			</div>
	   
		 <div class="form-group">
		   <p>Company</p>
		   <input type="text" name="name" class="form-input-text form-control" >                       
		</div>
		
		<div class="form-group">
		   <p>Country</p>
		   <input type="text" name="name" class="form-input-text form-control"  required="required">
		</div>
	
			<div class="form-group">
		   <p>Message</p>
		   <textarea name="message" class="form-input-text form-control" rows="4" required="required"></textarea>
			</div>
			<div class="send-button bottom-margin">
			<button type="submit" class="btn btn-send send-msg">SEND MESSAGE</button>
			</div>
		</div>
		</form>
	</div>

</html>