

	</div>
</div>	

<div class="wrapper wrapper-flash">
	<div class="breadcrumb">
        <div class="home-icon"><i class="fa fa-home"></i></div>
            <ul class="breadcrumb">
				<li class="first-child" ><a href="index.php?page=home" itemprop="url"><span itemprop="title">Assabuur.Com</span></a></li>
				<li class="last-child"><i class="fa fa-angle-right"></i> <span itemprop="title">Login</span></li>
			</ul>
    </div>
</div>

<br />
<div class="wrapper" id="content">
        <div id="main">
        <div class="form-container form-vertical form-container-box">
    <div class="resp-wrapper">
        <div class="header">
            <h1>REGISTER AN ACCOUNT FOR FREE</h1>
            <hr>
        </div>
<?php 

if(isset($_POST['register']))
{
    // get data from form
	$first_name		= $_POST['first_name'];
	$last_name		= $_POST['last_name'];
	$username		= strtolower(rand(0,99999)."@".$first_name);
	$email			= $_POST['email'];
	$password_1		= $_POST['password'];
	$password		= md5($_POST['password']);
    $re_password	= md5($_POST['re_password']);
    $status = "Activated";
    $reason = " ";
    
    //set activation link (when user click on activation link then they will redirect to this link)
    $activation_link = $domain."index.php?page=login&act=".$username;
    
	 // check if password matched
	if($password==$re_password)
    {
		// check username
		$GetUsername = mysqli_query($con,"SELECT * FROM users WHERE username='$username'");	
        $NumRowsUser = mysqli_num_rows($GetUsername); 
        
        // check if row is not 0
        if($NumRowsUser!=0)
        {   
            // get data from query result
			while($row=mysqli_fetch_assoc($GetUsername))
            {   
                //get username
				$db_username =  $row['username'];
            }
            // check if user name already exists
		    if($db_username==$username)
            {
			     echo "<p style='color:Red; '><b>Your username already exists</b></p>";
		    }		
		}
        else
        {
			// check email
		    $Getemail = mysqli_query($con,"SELECT * FROM users WHERE email='$email'");	
            $NumRows = mysqli_num_rows($Getemail); 
            
			// check if row is not 0
		    if($NumRows!=0)
            {   
			     while($row=mysqli_fetch_assoc($Getemail))
                 {
				    $db_email =  $row['email'];
			     }
		         if($db_email==$email)
                 {
			         echo "<p style='color:Red; '><b>Your email already exists</b></p>";
		         }		
		     }
            else
            {
                 $sql_query="INSERT INTO users (firstname, lastname, username, email, password, status, reason)
                 VALUES ('$first_name', '$last_name', '$username', '$email', '$password', '$status', '$reason')";
			     $CeateAccount = mysqli_query($con,$sql_query);
        	
                 if($CeateAccount)
                    {
				       
                        // we'll begin by assigning the To address and message subject
                        $to=$email;
                        $subject= "Activation Link From Assabuur.com";
                    
                        // get the sender's name and email address
                        // we'll just plug them a variable to be used later
                        $from = stripslashes('ASSABUUR')."<".stripslashes('donotreply@assabuur.com').">";

                        // generate a random string to be used as the boundary marker
                        $mime_boundary="==Multipart_Boundary_x".md5(mt_rand())."x";

                        // now we'll build the message headers
                        $headers =  "From: $from\r\n" .
                                    "MIME-Version: 1.0\r\n" .
                                    "Content-Type: multipart/mixed;\r\n" .
                                    " boundary=\"{$mime_boundary}\"";

                        // here, we'll start the message body.
                        // this is the text that will be displayed
                        // in the e-mail

                            $message .= "\r\n
                                    Dear, $first_name $last_name !   \r\n  
                                    Username: $username \r\n  
                                    Email: $email \r\n  
                                    Password: $password_1 \r\n  
                                    Click on Activation Link Below: \r\n  
                                    ".$activation_link."    \r\n ";

                        // next, we'll build the invisible portion of the message body
                        // note that we insert two dashes in front of the MIME boundary 
                        // when we use it
                        $message = "This is a multi-part message in MIME format.\n\n" .
                                    "--{$mime_boundary}\n" .
                                    "Content-Type: text/plain; charset=\"iso-8859-1\"\n" .
                                    "Content-Transfer-Encoding: 7bit\n\n" .
                                    $message . "\n\n";

                        // now we'll process our uploaded files
                        foreach($_FILES as $userfile)
                          {
                             // store the file information to variables for easier access
                                $tmp_name = $userfile['tmp_name'];
                                $type = $userfile['type'];
                                $name = $userfile['name'];
                                $size = $userfile['size'];

                                // if the upload succeded, the file will exist
                                if (file_exists($tmp_name))
                                    {
                                        // check to make sure that it is an uploaded file and not a system file
                                        if(is_uploaded_file($tmp_name))
                                        {
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
                        {
                            echo "<p>  </p>";
                            echo '<script>alert("Email has been sent")</script>';
                        }
                        else
                        {
                            echo "Query Error...!";
                            echo '<script>alert("Email Not sent")</script>';
                        }
	
				        echo '<script>window.location.href = "index.php?page=login"</script>';
			         }
		    }
		}

    }
    else
    {
		echo "<p style='color:Red; '><b>Password does not match the confirm password.</b></p>";
	}
}

?>

        <form  method="post" >
       
            <ul id="error_list"></ul>
            <div class="control-group">
                <label class="control-label" for="name">First Name <div class="req">*</div></label>
                <div class="controls">
                    <input id="s_name" type="text" name="first_name" required />                
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="name">Last Name <div class="req">*</div></label>
                <div class="controls">
                    <input id="s_name" type="text" name="last_name" required />                
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="email">Email address <div class="req">*</div></label>
                <div class="controls">
                    <input id="s_email" type="text" name="email" required />                </div>
				<div class="small-info thm-clr2-txt">You will be sent an email on this address to activate your account</div>
            </div>
            <div class="control-group">
                <label class="control-label" for="password">Password <div class="req">*</div></label>
                <div class="controls">
                    <input id="s_password" type="password" name="password" required autocomplete="off" />               
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="password-2">Confirm password <div class="req">*</div></label>
                <div class="controls">
                    <input id="s_password2" type="password" name="re_password" required autocomplete="off" />               
                </div>
            </div>
            
			<div class="control-group">
                <div class="controls"><center>
                    <button type="submit" name='register' class="form-control  btn btn-primary"><li class='fa fa-user-plus'></li> Create account</button>
                </center></div>
            </div>
			<div class="req"></div> 
        </form>
    </div>
</div><br /><br />
</div><!-- content -->
<div id="sidebar">
		<div class="thm-clr2-txt">With a assabuur.com account,</div><br>
	<ul class="fa-ul">
		<li><i class="fa-li fa fa-thumb-tack fa-lg fa-fw thm-clr1-txt" aria-hidden="true"></i> Posting ads is faster and easier with pre-filled contact information.</li><br/>
		<li><i class="fa-li fa fa-pencil-square-o fa-lg fa-fw thm-clr1-txt" aria-hidden="true"></i> Edit or Delete your ads in one place.</li><br/>
		<li><i class="fa-li fa fa-repeat fa-lg fa-fw thm-clr1-txt" aria-hidden="true"></i> Republish your ads.</li><br/>
		<li><i class="fa-li fa fa-star-o fa-lg fa-fw thm-clr1-txt" aria-hidden="true"></i> See favourite ads.</li><br/>
		<li><i class="fa-li fa fa-bell-o fa-lg fa-fw thm-clr1-txt" aria-hidden="true"></i> Subscribe to alerts for your searches and never miss new ads.</li>
	</ul>
</div><!-- /sidebar --></div>