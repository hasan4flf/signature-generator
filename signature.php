<?php
// Use htmlspecialchars to prevent XSS attacks by escaping HTML entities
$fileUrl = isset($_GET['fileUrl']) ? htmlspecialchars($_GET['fileUrl']) : 'Not provided';
$phone = isset($_GET['phone']) ? htmlspecialchars($_GET['phone']) : 'Not provided';
$phone_link = preg_replace('/\D+/', '', $phone);
$ext = isset($_GET['ext']) ? htmlspecialchars($_GET['ext']) : 'Not provided';
$email = isset($_GET['email']) ? htmlspecialchars($_GET['email']) : 'Not provided';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta property="" content="" />
        <title>FLF Signature Generator</title>
		<style type="text/css">
			#outlook a{padding:0;}
			body{width:100% !important;} .ReadMsgBody{width:100%;} .ExternalClass{width:100%;}
			body{-webkit-text-size-adjust:none;}
			body{margin:0; padding:0;}
			img{border:0; height:auto; line-height:100%; outline:none; text-decoration:none;}
			table td{border-collapse:collapse;}
			#backgroundTable{height:100% !important; margin:0; padding:0; width:100% !important;}
			body, #backgroundTable{
				background-color: transparent;
			}
			#templateContainer{
				border: none;
			}
			#templateContainer, .bodyContent{
				background-color:#FFFFFF;
			}
			.bodyContent div{
				color:#111;
				font-family:Arial;
				font-weight: 600;
				font-size:12px;
				line-height:150%;
				text-align:right;
			}
			.bodyContent div a:link, .bodyContent div a:visited, .bodyContent div a .yshortcuts {
				color: #1155cc;
				font-weight:normal;
				text-decoration:underline;
				font-weight: 600;
			}
			.bodyContent img {
				display:inline;
				height:auto;
			}
			#templateSidebar{
				background-color:#FFFFFF;
				border-right:0;
			}
			.sidebarContent div{
				color:#111111;
				font-family:Arial;
				font-size:12px;
				line-height:150%;
				text-align:left;
			}
			.sidebarContent div a:link, .sidebarContent div a:visited, .sidebarContent div a .yshortcuts {
				color:#336699;
				font-weight:normal;
				text-decoration:underline;
			}
			.sidebarContent img{
				display:inline;
				height:auto;
			}
			#templateFooter{
				background-color:#FFFFFF;
				border-top:0;
			}
			.footerContent div{
				color:#707070;
				font-family:Arial;
				font-size:12px;
				line-height:125%;
				text-align:left;
			}
			.footerContent div a:link, .footerContent div a:visited, .footerContent div a .yshortcuts {
				color:#336699;
				font-weight:normal;
				text-decoration:underline;
			}
			.footerContent img{
				display:inline;
			}
			#utility{
				background-color:#FFFFFF;
				border:0;
				padding-top: 20px;
			}
			#utility div{
				text-align:center;
			}
			.flf-logo {
				margin-bottom: 15px;
			}
			.user-photo {
				padding-top: 10px;
			}
		</style>
	</head>
    <body leftmargin="0" marginwidth="0" topmargin="0" marginheight="0" offset="0">
    	<center>
        	<table border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" id="backgroundTable">
            	<tr>
                	<td align="center" valign="top">
                    	<table border="0" cellpadding="0" cellspacing="0" width="600" id="templateContainer">
                        	<tr>
                            	<td align="center" valign="top">
                                	<table border="0" cellpadding="0" cellspacing="0" width="600" id="templateBody">
                                    	<tr>
                                        	<td valign="top" width="280" id="templateSidebar">
                                            	<table border="0" cellpadding="0" cellspacing="0" width="280">
                                                	<tr>
                                                    	<td valign="top" class="sidebarContent">
                                                            <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                                                <tr>
                                                                    <td valign="top">
                                                                        <img src="<?php echo $fileUrl ?>" class="user-photo" alt="User Photo" style="width:100%;"/>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        	<td valign="top" width="320">
                                                <table border="0" cellpadding="0" cellspacing="0" width="320">
                                                    <tr>
                                                        <td valign="top" class="bodyContent">
                                                            <table border="0" cellpadding="10" cellspacing="0" width="100%">
                                                                <tr>
                                                                    <td valign="top">
			                                                            <div>
			                                                                <a href="https://justinforjustice.com/"><img class="flf-logo" src="https://raw.githubusercontent.com/hasan4flf/email-signature/main/FLF-Logo-with-tagline.jpg" style="max-width:270px;"/></a><br>
																			Tel: <a href="tel:+1<?php echo $phone_link ?>"><?php echo $phone ?></a> 
																			<?php
																				if($ext != "") {
																					echo "ext " . $ext;
																				}
																			?>
																			<br>
																			Fax: (424) 295-0557<br>
																			<a href="mailto:<?php echo $email ?>"><?php echo $email ?></a><br>
																			<a href="https://www.facebook.com/calljustinforjustice/">Facebook</a> <span>|</span> <a href="https://www.instagram.com/calljustinforjustice/">Instagram</a> <span>|</span> <a href="https://twitter.com/justin_4justice">Twitter</a><br>
																			<a href="https://justinforjustice.com/">JustinForJustice.com</a><br>
																			<a href="https://goo.gl/maps/zLTMzPyQBBfD9atw9">12079 W. Jefferson Blvd. Los Angeles, CA 90230</a>
			                                                            </div>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        	<tr>
                            	<td align="center" valign="top">
                                	<table border="0" cellpadding="10" cellspacing="0" width="600" id="templateFooter">
                                    	<tr>
                                        	<td valign="top" class="footerContent">
                                                <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                                    <tr>
                                                        <td colspan="2" valign="middle" id="utility">
                                                            <div>
																<?php
																	if($email == "liz@farahilaw.com") {
																		$award_img_url = "https://raw.githubusercontent.com/hasan4flf/signature-generator/main/images/awards-2.png";
																	} else {
																		$award_img_url = "https://raw.githubusercontent.com/hasan4flf/email-signature/main/awards.png";
																	}
																?>
                                                                <img src="<?php echo $award_img_url; ?>" style="width:100%;"/>
																<br>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                        <br />
                    </td>
                </tr>
            </table>
        </center>
    </body>
</html>