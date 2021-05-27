	</div>
</div>	

<div class="wrapper wrapper-flash">
	<div class="breadcrumb">
        <div class="home-icon"><i class="fa fa-home"></i></div>
            <ul class="breadcrumb">
				<li class="first-child" ><a href="index.php?page=home" itemprop="url"><span itemprop="title">Assabuur.Com</span></a></li>
				<li class="last-child"><i class="fa fa-angle-right"></i> <span itemprop="title">Contact Us</span></li>
			</ul>
    </div>
</div>
<br />
<div class="wrapper" id="content">
        <div id="main">
	
	
<div class="form-container form-vertical form-container-box">
    <div class="resp-wrapper">
        <div class="header"> 
			<h1>CONTACT US</h1>
            <hr>
        </div>
<?php 
if($_GET['success']){
	echo "<p class='alert alert-success'>".$_GET['success']."</p>"; 
}
if(isset($_POST['send_message'])){
	
		$sender_name 		= $_POST['name'];
		$sender_email 		= $_POST['email'];
		$sender_subject 	= $_POST['subject'];
		$sender_message 	= $_POST['message_body'];

	
	
// we'll begin by assigning the To address and message subject
   $to=$social['contact_email'];
   $subject= $sender_subject;

   // get the sender's name and email address
   // we'll just plug them a variable to be used later
   $from = stripslashes($sender_name)."<".stripslashes($sender_email).">";

   // generate a random string to be used as the boundary marker
   $mime_boundary="==Multipart_Boundary_x".md5(mt_rand())."x";

   // now we'll build the message headers
   $headers = "From: $from\r\n" .
   "MIME-Version: 1.0\r\n" .
      "Content-Type: multipart/mixed;\r\n" .
      " boundary=\"{$mime_boundary}\"";

   // here, we'll start the message body.
   // this is the text that will be displayed
   // in the e-mail

$message .= "\r\n

Name: $sender_name  \r\n  
Email: $sender_email  \r\n  
Subject: $sender_subject \r\n  

$sender_message \r\n  

";
   // next, we'll build the invisible portion of the message body
   // note that we insert two dashes in front of the MIME boundary 
   // when we use it
   $message = "This is a multi-part message in MIME format.\n\n" .
      "--{$mime_boundary}\n" .
      "Content-Type: text/plain; charset=\"iso-8859-1\"\n" .
      "Content-Transfer-Encoding: 7bit\n\n" .
   $message . "\n\n";

   // now we'll process our uploaded files
   foreach($_FILES as $userfile){
      // store the file information to variables for easier access
      $tmp_name = $userfile['tmp_name'];
      $type = $userfile['type'];
      $name = $userfile['name'];
      $size = $userfile['size'];

      // if the upload succeded, the file will exist
      if (file_exists($tmp_name)){

         // check to make sure that it is an uploaded file and not a system file
         if(is_uploaded_file($tmp_name)){

            // open the file for a binary read
            $file = fopen($tmp_name,'rb');

            // read the file content into a variable
            $data = fread($file,filesize($tmp_name));

            // close the file
            fclose($file);

            // now we encode it and split it into acceptable length lines
            $data = chunk_split(base64_encode($data));
         }

         // now we'll insert a boundary to indicate we're starting the attachment
         // we have to specify the content type, file name, and disposition as
         // an attachment, then add the file content.
         // NOTE: we don't set another boundary to indicate that the end of the 
         // file has been reached here. we only want one boundary between each file
         // we'll add the final one after the loop finishes.
         $message .= "--{$mime_boundary}\n" .
            "Content-Type: {$type};\n" .
            " name=\"{$name}\"\n" .
            "Content-Disposition: attachment;\n" .
            " filename=\"{$fileatt_name}\"\n" .
            "Content-Transfer-Encoding: base64\n\n" .
         $data . "\n\n";
      }
   }
   // here's our closing mime boundary that indicates the last of the message
   $message.="--{$mime_boundary}--\n";
   // now we just send the message

   if (@mail($to, $subject, $message, $headers))
	   echo '<script>window.location.href = "index.php?page=contact_us&success=Your Message Has Been Successfully Sent."</script>';
   else
		echo "<p class='alert alert-danger'> Error! Your Message Could Not Be Sent </p>"; 
}
?>
        <form name="contact_form" method="post" >
            <div class="control-group">
                <label class="control-label">
                    Your name<div class="req">*</div>
                </label>
                <div class="controls">
                    <input type="text" name="name" required />
				</div>
            </div>
            <div class="control-group">
                <label class="control-label"> 
                    Your email address <div class="req">*</div>
                </label>
                <div class="controls">
                    <input name="email" required />
				</div>
                <div class="small-info align-right">Using this email address we will contact you back</div>
            </div>
            <div class="control-group">
                <label class="control-label">
                    Subject <div class="req">*</div>
                </label>
                <div class="controls">
                    <input type="text" name="subject" required />
				</div>
                <div class="small-info align-right">Summary of reason to contact</div>
            </div>
            <div class="control-group">
                <label class="control-label" for="message">
                    Message <div class="req">*</div>
                </label>
                <div class="controls">
                    <textarea class='' name="message_body" rows="10" ></textarea>
				</div>
            </div>
			<div class="control-group">
                <div class="controls"><center>
                       <button type="submit" name='send_message' class="form-control btn btn-success"  ><li class='fa fa-send' ></li> Send Message</button>
                </center> </div>
            </div>
            <div class="req">*</div> Required
            <p>
                Do not hesitate to contact us again if you require further information about our site. We will reply soon.  </p>
        </form>
    </div>
</div>
<br>
		
	

		

	</div><!-- content -->
</div>