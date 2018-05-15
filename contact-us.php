<!DOCTYPE>

<html>
	<head>
		<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/> -->
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0;">
		<link rel="stylesheet" href="css/style.css"/>
		<link rel="stylesheet" href="lib/css/bootstrap.min.css"/>
		<link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200" rel="stylesheet">
		<link href="lib/slick/slick.css" rel="stylesheet">
		<link href="lib/slick/slick-theme.css" rel="stylesheet">
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
        
        <link rel="icon" href="Favicon.ico/favicon-16x16.png" type="image/x-icon" />
        
	    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css"> -->
	    <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer></script>
	    <script type="text/javascript">
	    	window.onloadCallback = function() {
	    		 grecaptcha.render('html_element', {
			      'sitekey' : '6Ld501EUAAAAAFof-Xev8B2VU-j7UDQkBUkx_PGX',
			      'callback' : correctCaptcha
			    });
	    	} 

	    	var correctCaptcha = function(response) {
			    console.log(response);
			};
	    </script>

	</head>	
	
	<body id="dom-body">
		<iframe id="myFrame" src='contact-form.html' onLoad="renderIframe()"></iframe>
		<?php include("header.php") ?>
		<div class="pc-cover-img">
			<div class="landing-text">
				<div class="landing-header">Contact Platinum Corp.</div>
				<p class="landing-det">Get in touch with the new age real estate development specialists.<br>We are proud to serve you with a priceless lifestyle that you deserve.</p>
			</div>
			<div class="pc-contact-form">
				<div class="buy-home-success">
					<img src ="images/buy-success.png" class="buy-success"/>
					<div>
						<p class='text-center download-pdf life' >Download Brochure for Platinum Life</p>
						<p class='text-center download-pdf' >Download Brochure for Platinum Towers</p>
					</div>
				</div>
				
				<div class="container-fluid buy-form-form"   style="padding-right:0px; height:1000px;">
					<div class="row zero-margin" >
						<div class="col-md-9 col-xs-12 padder">
							<div class="row zero-margin  pad-container">
								<div class="col-sm-12">
									<p class="pc-contact-form-header"> Send us a message </p>
								</div>
							</div>
							
							<div class="row">
								<div class="col-sm-6 pad-form">
									<div>Name *</div>
									<input type="text" id="name"/>
								</div>
								<div class="col-sm-6 pad-form">
									<div>E-mail Addres *</div>
									<input type="text" id="email"/>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-6 pad-form">
									<div>Phone Number *</div>
									<input type="text" id="phone"/>
								</div>
								<div class="col-sm-6 pad-form">
									<div>Company *</div>
									<input type="text" id="company"/>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-8 pad-form">
									<div>Message *</div>
									<input type="text" id="message"/>
								</div>
							</div>
							<div class='row'>
								<div class="col-sm-12 pad-form">
									<span class="star-span">*</span> Marked fields are mandatory to continue
								</div>
							</div>
							<!-- <div class="row">
								 <div class="g-recaptcha" data-sitekey="6Ld501EUAAAAAFof-Xev8B2VU-j7UDQkBUkx_PGX"></div>
							</div> -->
							<div class="row">
								<div class="col-sm-12 pad-form">
									<div id='html_element'></div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-6 pad-form">
									<div>
										<button  id="submit-contact-form">Submit</button>
										<span id="success-msg">Your response has been recorded</span>
									</div>
								</div>
							</div>

						</div>
						<div class="col-md-3 col-xs-12 padder"  style="height:100%;">
							<div class="pc-contact-form-details">
								<img src="images/form-filler.png" class="form-filler hidden-xs hidden-sm"/>
								<div class="container-fluid">
									<div class="row zero-margin  pad-container">
										<div class="col-sm-12">
											<p class="contact-right-form-header">
												<span class="active nav-link" data-rel="corporate">CORPORATE &nbsp &nbsp |</span>
												<span class="nav-link" data-rel="sales">&nbsp &nbspSALES</span>
											</p>
										</div>
									</div>
									<div class="active corporate contact-details" data-nav="corporate">
										<div class="row zero-margin">
											<div class="col-sm-12">
												<p class="contact-right-form-header">
													<strong>Address</strong>
												</p>
												<p>8th Floor, Peninsula Heights,<br> C.D. Barfiwala Marg, Juhu Lane,<br> Andheri (West), Mumbai - 4000058.</p>
											</div>
										</div>
										<div class="row zero-margin">
											<div class="col-sm-12">
												<p class="contact-right-form-header">
													<strong>Telephone</strong>
												</p>
												<p>+91 (22) 2621 6000</p>
											</div>
										</div>
										<div class="row zero-margin pc-padder last-detail">
											<div class="col-sm-12">
												<p class="contact-right-form-header">
													<strong>Email Address</strong>
												</p>
												<p>info@platinumcorp.in</p>
											</div>
										</div>
									</div>
									<div class="sales contact-details" data-nav="sales">
										<div class="row zero-margin">
											<div class="col-sm-12">
												<p class="contact-right-form-header">
													<strong> Sales Address</strong>
												</p>
												<p>1st Floor, Platinum Tower 7,<br> Tirupati CHSL, Off J P. Road, D. N. Nagar,<br> Andheri (West), Mumbai - 400053.</p>
											</div>
										</div>
										<div class="row zero-margin">
											<div class="col-sm-12">
												<p class="contact-right-form-header">
													<strong>Telephone</strong>
												</p>
												<p>+91 (22) 2621 6600</p>
											</div>
										</div>
										<div class="row zero-margin pc-padder last-detail">
											<div class="col-sm-12">
												<p class="contact-right-form-header">
													<strong>Email Address</strong>
												</p>
												<p>sales@platinumcorp.in</p>
											</div>
										</div>
									</div>
									<div class="row pc-social-media zero-margin hidden-xs hidden-sm">
										<div class="col-sm-3 text-center">
											<img src="images/youtube.png" class="social-media-img"/>
										</div>
										<div class="col-sm-3 text-center">
											<img src="images/instagram.png" class="social-media-img"/>
										</div>
										<div class="col-sm-3 text-center">
											<img src="images/twitter.png" class="social-media-img"/>
										</div>
										<div class="col-sm-3 text-center">
											<img src="images/facebook.png" class="social-media-img"/>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					
				
				</div>
			</div>
		</div>
		<div class="spacer"></div>

	
	</body>
	<script src="lib/js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="js/homepage.js"></script>
	<script src="lib/slick/slick.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
    <script type="text/javascript">
		var iFrameSubmitted = false;
		var iFrameCounter = 0;
		function renderIframe() {
			if(iFrameCounter == 0) {
				++iFrameCounter; 
			}
			else {
				//destroy iframe
				if(iFrameSubmitted) {
					var MyIFrame = document.getElementById("myFrame");
					MyIFrame.parentNode.removeChild(MyIFrame);
					/// append new iframe

					var iframe = document.createElement('iframe');		
					iframe.src = 'contact-form.html';
					iframe.id = 'myFrame';
					var body = document.getElementById("dom-body");
					body.appendChild(iframe);
					document.getElementById("myFrame").addEventListener('load', renderIframe, false);
					iFrameSubmitted = false;
				}
				
			}
		}

		$(function() {
			$("#submit-contact-form").on('click', function() {
				var name = $("#name").val();
				var email = $("#email").val();
				var phone = $("#phone").val();
				var company = $("#company").val();
				var message = $("#message").val();

				console.log(name, email, phone, company, message);
				if(name.length > 0 && email.length > 0 && phone.length > 0 && company.length > 0 && message.length > 0 ) {
					if(validateForPhone(phone) && validateForEmail(email)) {
						var MyIFrame = document.getElementById("myFrame");
						MyIFrame.src = 'contact-form.html';
						
						var MyIFrameDoc = (MyIFrame.contentWindow || MyIFrame.contentDocument);
						if (MyIFrameDoc.document) MyIFrameDoc = MyIFrameDoc.document
						MyIFrameDoc.getElementById("name").value = name;
						MyIFrameDoc.getElementById("email").value = email;
						MyIFrameDoc.getElementById("phone").value = phone;
						MyIFrameDoc.getElementById("company").value = company;
						MyIFrameDoc.getElementById("message").value = message;

						MyIFrameDoc.getElementById("pc-contact-form").submit();
						iFrameSubmitted = true;		
						// document.getElementById("success-msg").style.opacity = 1;
						// setTimeout(function(){
						// 	document.getElementById("success-msg").style.opacity = 0;
						// }, 4000);
						$(".buy-home-success").show();
						
						$(".buy-form-form").css({'opacity':0});
						$("html, body").animate({ scrollTop: 0 }, "slow");

					}
					else if (!validateForPhone(phone)) {
						alert("Please Enter a valid phone number");
					}
					else if (!validateForEmail(phone)) {
						alert("Please Enter a valid email ID");
					} 
				}
				else {
					alert("No field can be empty");
				}
				

			})
		});

		var validateForPhone = function(phoneNumberString) {
			var regex = /^((\+\d{1,3}(-| )?\(?\d\)?(-| )?\d{1,3})|(\(?\d{2,3}\)?))(-| )?(\d{3,4})(-| )?(\d{4})(( x| ext)\d{1,5}){0,1}$/;
			return regex.test(phoneNumberString);
		}
		var validateForEmail = function(emailString) {
			 var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(emailString).toLowerCase());
		}

		$(".nav-link").on('click', function(e) {
			$(".nav-link").removeClass('active');
			$(this).addClass('active');

			var divToShow = $(this).attr('data-rel');
			console.log(divToShow);

			var contactDetails = $(".contact-details")
			
			$.each(contactDetails, function(index, item) {
				$(this).removeClass('active');
				if($(this).attr('data-nav') == divToShow) {
					$(this).addClass('active');
				}
			});

		});

    </script>
	
</html>
