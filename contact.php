<?php
	if(isset($_POST['submit'])) 
	{
		if(!empty($_POST['email']) && !empty($_POST['message']))
		{
			$to="abhishek291093@gmail.com";
			$text=$_POST['message'];
			$sub="Contact Request from ".$_POST['email'];
			$headers  = 'MIME-Version: 1.0' . "\r\n";
	        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
			$headers .= 'From: Team Cotanz' . "\r\n";
			$headers .= 'Reply-To: '.$_POST['email']."\r\n";
			$fpart="-f".$_POST['email'];
			if(mail($to,$sub,$text, $headers, $fpart))
				echo "Submitted";
			else
				echo "Error";
		}
		else
			echo "Error";
	}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Contact - Abhishek Kumar Singh</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="icon" type="icon/png" href="images/icon.png">
    <script type="text/javascript" src="js/main.js"></script>
    <link rel="stylesheet" href="css/poem1.css">
    <link rel="stylesheet" href="font-awesome-4.4.0/css/font-awesome.min.css">
</head>

<body>
    <div class="triangle-banner webgl">
        <div class="gradient"></div>
        <div class="gradient1"></div>
        <div class="overlay"></div>
    </div>
    <div id="header">
        <div id="second">
            <div id="third">
            </div>
            <ul id="navlist">
                <a href="index.html">
                    <li class="navlist" id="homelist">Home</li>
                </a>
                <a href="about.html">
                    <li class="navlist" id="aboutlist">About</li>
                </a>
                <a href="Blog.html">
                    <li class="navlist" id="bloglist">Blog</li>
                </a>
                <a href="Contact.html">
                    <li class="navlist" id="contactlist">Contact</li>
                </a>
            </ul>
        </div>
    </div>
    <hr id="firsthr">





	<form method="post" action="." id="formcontact">
		<input type="email" name="email" placeholder="Your Email Address" id="mailcontactinput"><br/>
		<textarea name="message" placeholder="Write your message here" id="areacontactinput"></textarea><br/>
		<input type="submit" name="submit" value="Send" id="subbuttoncontact">
	</form>








    <div id="social1">
        <div id="social2">
            <div is="social3">
                <div id="social4">
                    <a target="_blank" href="https://www.facebook.com/yabhis"><i class="fa fa-facebook-square fa-3x" id="fbicon"></i></a>
                    <a target="_blank" href="https://in.linkedin.com/in/yabhis"><i class="fa fa-linkedin-square fa-3x" id="linkedinicon"></i></a>
                    <a target="_blank" href="https://github.com/yabhis"><i class="fa fa-github-square fa-3x" id="giticon"></i></a>
                    <a target="_blank" href="https://www.flickr.com/photos/yabhis/"><i class="fa fa-flickr fa-3x" id="flickericon"></i></a>
                    <a target="_blank" href="https://twitter.com/yabhis"><i class="fa fa-twitter-square fa-3x" id="twittericon"></i></a>
                </div>
            </div>
        </div>
    </div>
  <div id="footer1">
        <div id="footer2">
            <div id="footer3">
                <div id="footer4">
                    <div id="menu">
                        <ul id="firstul">
                            <a href="index.html"><li class="listitems" id="firstli">Home</li></a>
                            <a href="about.html"><li class="listitems">About</li></a>
                            <a href="blog.html"><li class="listitems">Blog</li></a>
                            <a href="arts.html"><li class="listitems">Arts</li></a>
                            <a href="poems.html"><li class="listitems">Poetry</li></a>
                            <a href="contact.html"><li class="listitems">Contact</li></a>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
