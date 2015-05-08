<?php
//If the form is submitted
if(isset($_POST['submit'])) {

	//Check to make sure that the name field is not empty
	if(trim($_POST['contactname']) == '') {
		$hasError = true;
	} else {
		$name = trim($_POST['contactname']);
	}

	//Check to make sure that the subject field is not empty
	if(trim($_POST['subject']) == '') {
		$hasError = true;
	} else {
		$subject = trim($_POST['subject']);
	}

	//Check to make sure sure that a valid email address is submitted
	if(trim($_POST['email']) == '')  {
		$hasError = true;
	} else if (!eregi("^[A-Z0-9._%-]+@[A-Z0-9._%-]+\.[A-Z]{2,4}$", trim($_POST['email']))) {
		$hasError = true;
	} else {
		$email = trim($_POST['email']);
	}

	//Check to make sure comments were entered
	if(trim($_POST['message']) == '') {
		$hasError = true;
	} else {
		if(function_exists('stripslashes')) {
			$comments = stripslashes(trim($_POST['message']));
		} else {
			$comments = trim($_POST['message']);
		}
	}

	//If there is no error, send the email
	if(!isset($hasError)) {
		$emailTo = 'steven@sgaffin.com'; //Put your own email address here
		$body = "Name: $name \n\nEmail: $email \n\nSubject: $subject \n\nComments:\n $comments";
		$headers = 'From: My Site <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email;

		mail($emailTo, $subject, $body, $headers);
		$emailSent = true;
	}
}
?>
<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml"
      xmlns:og="http://opengraphprotocol.org/schema"
      xmlns:fb="https://www.facebook.com/2008/fbml">

<head>
	<title>Steven Gaffin / Contact</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta http-equiv="Content-Style-Type" content="text/css" />

<link rel="stylesheet" href="../style.css" type="text/css" media="screen" />
<link rel="shortcut icon" type="image/x-icon" href="../images/favicon.ico" />

<meta name="keywords" content="Web Developer, Web Designer, Graphic Designer, UX, Chattanooga, Tennessee, Web, Front End, Steven Gaffin, Experienced, Design, Portfolio, xHTML, HTML, HTML5, CSS, CSS3, XML, JavaScript, PHP, MySQL, WordPress, ActionScript, Flash, Portfolio, Twitter, Dribbble, Facebook" />
<meta name="description" content="Steven Gaffin - Graphic Designer and Web Developer from Chattanooga, TN." />
<meta property="og:title" content="Steven Gaffin / Design &amp; Development Portfolio" />
<meta property="og:type" content="website" />
<meta property="og:url" content="http://www.sgaffin.com" />
<meta property="og:image" content="http://www.sgaffin.com/images/og_image.jpg" />
<meta property="og:description" content="Steven Gaffin - Graphic Designer and Web Developer from Chattanooga, TN." />
<meta property="og:site_name" content="SGaffin.com." />
<meta name="author" content="Steven Gaffin" />


<script language="javascript" src="../js/jquery.min.js" type="text/javascript"></script>
<script language="javascript" src="../js/jquery.validate.min.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function(){
	$("#contactform").validate();
});
</script>

<style type="text/css">
#contact-wrapper {
width: 300px;
margin-top: -10px;
float: right;
}

#contact-wrapper label {
display:block;
margin-top: 5px;
margin-bottom: 5px;
width: 300px;
font-size:16px;
color: #808183;
}

#contact-wrapper label {
display:block;
margin-top: 5px;
margin-bottom: 5px;
width: 300px;
font-size:16px;
color: #808183;
}

#contact-wrapper label.error {
color: #f8931f;
}

.success {
font-size: .7em;
color: #808183;
}

.successAlert {
font-size: 1em;
color: #BBBDBF;
}

form#contactform input[type=text] {
font-family:  'Century Gothic', Futura, AppleGothic, sans-serif;
background-image:url('../images/input.jpg');
background-repeat: no-repeat;
width: 290px;
font-size: .7em;
padding: 5px;
border: 0px;
color: #808183;
height: 25px;
}

form#contactform textarea {
width: 286px;
height: 94px;
background-image:url('../images/textarea.jpg');
background-repeat: no-repeat;
font-family:  'Century Gothic', Futura, AppleGothic, sans-serif;
font-size: .7em;
color: #808183;
padding: 8px 7px 8px 7px;
margin-left: 0px;
border: 0px;
resize: none;
}

form#contactform input[type=submit] {
width: 180px;
text-indent: 200px;
overflow:hidden;
background-image:url('../images/submit.jpg');
background-repeat: no-repeat;
height: 35px;
padding: 0px;
margin: 20px 0px 20px 0px;;
border: 0px;
}

form#contactform input[type=submit]:hover {
background-position: 0 -35px;
cursor: pointer;
}

.contactCopy {
position: relative;
width: 290px;
height: 320px;
margin: -4px 30px 20px 0px;
float: left;
font-size: .7em;
line-height: 1.5em;
}

.contactCopy li {
margin-bottom: 10px;
}

img.contactIcons {
color: blue;
margin-right: 10px;
vertical-align:middle;
}



</style>




</head>
<body>
<div id="promo_bg"> </div>

<div id="container">
     <div id="header">
          <a href="http://www.sgaffin.com/" title="Steven Gaffin Graphic and Web Design Portfolio"><img class="logo" src="../images/logo.jpg" alt="Steven Gaffin Design Portfolio" /></a>

          <ul class="nav">
              <li><a href="http://www.sgaffin.com/">HOME</a></li>
                      <li class="spacer"> / </li>

              <li><a href="http://www.sgaffin.com/about/">ABOUT</a></li>
                      <li class="spacer"> / </li>

              <li><a href="http://www.sgaffin.com/portfolio/">PORTFOLIO</a></li>
                      <li class="spacer"> / </li>

              <li><a class="current" href="http://www.sgaffin.com/contact/">CONTACT</a>
              <br /><img class="home_point" src="../images/point.png" alt="" /></li>
          </ul>
     </div>
               <div id="contactPromo">
                <h6>We should work together.</h6>
          </div>
     <h1 class="heading">GET IN TOUCH.</h1><br />
	<div class="contactCopy">
	<h3 class="aboutTopics">Thanks For Visiting!</h3>
	<p>Please feel free to contact me about anything: Job Inquiries, Questions, or just to say hello.
        I'd love to hear what you think of my work! If you wish to hire me or discuss a possible project,
        send me a message with your thoughts and ideas along with your contact information. We can discuss 
        projects, pricing, and other business to help you get a sense of what I can do for you. Once again, 
        thank you for checking out me and my work. I hope to hear from you soon.</p>
	</div>
	

	<div class="contactCopy">
	<h3 class="aboutTopics">A Few Ways To Reach Me.</h3>
        <ul>
        <li><a href="mailto:steven@sgaffin.com"><img class="contactIcons" src="../images/contact_email.png" alt="Email Steven Gaffin" />steven@sgaffin.com</a></li>
        <li><a href="#"><img class="contactIcons" src="../images/contact_phone.png" alt="Contact Steven Gaffin Via Phone" />423.667.3483</a></li>
        <li><a href="http://www.twitter.com/stevengaffin"  target="_blank"><img class="contactIcons" src="../images/contact_twitter.png" alt="Steven Gaffin on Twitter" />@stevengaffin</a></li>
        <li><a href="http://www.facebook.com/sgaffin"  target="_blank"><img class="contactIcons" src="../images/contact_facebook.png" alt="Steven Gaffin on Facebook" />facebook.com/sgaffin</a></li>
        <li><a href="http://www.dribbble.com/stevengaffin"  target="_blank"><img class="contactIcons" src="../images/contact_dribbble.png" alt="Steven Gaffin on Twitter" />dribble.com/stevengaffin</a></li>
        </ul>
	</div>

	<div id="contact-wrapper">
	<?php if(isset($hasError)) { //If errors are found ?>
		<p class="error">Please check if you've filled all the fields with valid information. Thank you.</p>
	<?php } ?>

	<?php if(isset($emailSent) && $emailSent == true) { //If email is sent ?>
		<p class="successAlert"><strong>Email Successfully Sent!</strong></p>
		<p class="success">Thank you <strong><?php echo $name;?></strong> for contacting me! I will be in touch with you soon.</p>
	<?php } ?>

	<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" id="contactform">
		<div>
		    <label for="name"><strong>Name:</strong></label>
			<input type="text" size="20" name="contactname" id="contactname" value="" class="required" />
		</div>
		<div>
			<label for="email"><strong>Email:</strong></label>
			<input type="text" size="20" name="email" id="email" value="" class="required email" />
		</div>
		<div>
			<label for="subject"><strong>Subject:</strong></label>
			<input type="text" size="20" name="subject" id="subject" value="" class="required" />
		</div>
		<div>
			<label for="message"><strong>Message:</strong></label>
			<textarea rows="5" cols="30" name="message" id="message" class="required"></textarea>
		</div>
	    <input type="submit" value="Send Message" name="submit" />
	</form>
	</div>


	

</div>
     <div id="footer">
          <div id="footer_content">
               <p>
                  <span class="bold">&copy; 2011 Steven Gaffin. All Rights Reserved.</span><br />
                  <a href="http://www.sgaffin.com/" title="Steven Gaffin Graphic Designer / Web Designer - Chattanooga, TN">HOME</a> /
                  <a href="http://www.sgaffin.com/about/" title="About Steven Gaffin"> ABOUT</a> /
                  <a href="http://www.sgaffin.com/portfolio/" title="Steven Gaffin Graphic Design and Web Design Portfolio"> PORTFOLIO</a> /
                  <a href="http://www.sgaffin.com/contact/" title="Contact Steven Gaffin"> CONTACT</a>
               </p>
               <ul class="social">
                    <li><a class="twitter_icon" href="http://twitter.com/stevengaffin" target="_blank">Steven Gaffin Graphic Designer and Web Developer on Twitter.</a></li>
                    <li><a class="facebook_icon" href="http://facebook.com/sgaffin" target="_blank">Steven Gaffin Graphic Designer and Web Developer on Facebook.</a></li>
                    <li><a class="dribbble_icon" href="http://dribbble.com/stevengaffin" target="_blank">Steven Gaffin Graphic Designer and Web Developer on Dribbble.</a></li>
                    <li><a class="hire_me" href="http://www.sgaffin.com/contact/">Steven is Availabe for Hire.</a></li>
               </ul>
          </div>
     </div>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-22772763-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</body>
</html>