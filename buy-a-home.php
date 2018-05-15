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
        
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
		<script src="https://apis.google.com/js/platform.js?onload=onLoadCallback" async defer></script>
		<script type='text/javascript'>
			function renderPageIframe() {
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
						iframe.src = 'buy-home-form.html';
						iframe.id = 'myFrame';
						var body = document.getElementById("buy-home-body");
						body.appendChild(iframe);
						document.getElementById("myFrame").addEventListener('load', renderPageIframe, false);
						iFrameSubmitted = false;
					}
					
				}
			}

		
		</script>
	</head>
	<body id="buy-home-body">
		<iframe id="myFrame" src='buy-home-form.html' onLoad="renderPageIframe()"></iframe>
		<iframe id="my_iframe" style="display:none;"></iframe>
		<?php include("header.php") ?>
		<div class="pc-header-spacer"></div>
		<div class="pc-buy-home-cover-img">
			<div class="buy-home-form">
				<div class="buy-home-success">
					<img src ="images/buy-success.png" class="buy-success"/>
					<div>
						<p class='text-center download-pdf life' >Download Brochure for Platinum Life</p>
                        <br/>
						<p class='text-center download-pdf' >Download Brochure for Platinum Towers</p>
					</div>
				</div>
				<div class="container-fluid buy-form-form" style="padding-top: 30px;">
					<div class="row">	
						<div class="col-sm-12">
							<p class="text-center pc-buy-home-form-header">Tell us a little bit more about yourself so that we can help you better!</p>
							<br>
							<!-- <p class="text-center pc-buy-home-subtext">Tell us a little bit more about yourself so that we can help you better.</p> -->
						</div>
					</div>
					<div class="row">
						<form class="buy-form">
							<div class="col-sm-6 pad-form">
								<span>Name</span>*
									<input type="text" id="name"/>
							</div>
							<div class="col-sm-6 pad-form">
								<span>Surname</span>*
								<input type="text" id="surname"/>
							</div>
							<div class="clearfix"></div>
							<div class="col-sm-6 pad-form">
								<span>Contact Number</span>*
								<input type="text" id="contact"/>
							</div>
							<div class="col-sm-6 pad-form">
								<span>E-mail ID</span>
								<input type="text" id="email"/>
							</div>
							<div class="clearfix"></div>
							<div class="col-sm-6 pad-form">
								<span>Which property are you interested in?</span>*
								<select id="property" class="browser-default">
									<option value="1 BHK">1 BHK</option>
									<option value="2 BHK">2 BHK</option>
									<option value="3 BHK">3 BHK</option>
								</select>
							</div>
							<div class="col-sm-6 pad-form">
								<span>Budget</span>*
								<select id="budget" class="browser-default">
									<option value="Under 1 Cr.">Under 1 Cr.</option>
									<option value="1cr. - 2cr">1Cr. - 2 Cr. </option>
									<option value="2Cr. - 3Cr">2Cr. - 3Cr</option>
									<option value="Above 3Cr.">Above 3Cr.</option>
								</select>
							</div>
							<div class="clearfix"></div>
							<div class="col-sm-6 pad-form">
								<span>How did you find put about Platinum Corp?</span>*
								<select id="pc-lead" class="browser-default">
									<option value="Newapaper">Newapaper</option>	
									<option value="Hoardings">Hoardings</option>	
									<option value="Online">Online</option>	
								</select>
							</div>
							
							
						</form>

					</div>
					<div class="row">
						<div class="col-sm-6 pad-form">
							<button  id="submit-contact-form">Submit</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		
					
	</body>
	<script src="lib/js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="js/homepage.js"></script>
	<script src="lib/slick/slick.min.js" type="text/javascript"></script>
	<script type="text/javascript">
		var iFrameSubmitted = false;
		var iFrameCounter = 0;
		$(function() {
			$(".download-pdf").on('click', function() {
				console.log("clicked");
				if($(this).hasClass('life')) {
					downloadFile('Platinum_Life.pdf')
				}
				else {
					downloadFile('Platinum_Towers.pdf')
				}
			});
		});


		
		window.downloadFile = function (sUrl) {

		    //iOS devices do not support downloading. We have to inform user about this.
		    if (/(iP)/g.test(navigator.userAgent)) {
		        alert('Your device does not support files downloading. Please try again in desktop browser.');
		        return false;
		    }

		    //If in Chrome or Safari - download via virtual link click
		    if (window.downloadFile.isChrome || window.downloadFile.isSafari) {
		        //Creating new link node.
		        var link = document.createElement('a');
		        link.href = sUrl;

		        if (link.download !== undefined) {
		            //Set HTML5 download attribute. This will prevent file from opening if supported.
		            var fileName = sUrl.substring(sUrl.lastIndexOf('/') + 1, sUrl.length);
		            link.download = fileName;
		        }

		        //Dispatching click event.
		        if (document.createEvent) {
		            var e = document.createEvent('MouseEvents');
		            e.initEvent('click', true, true);
		            link.dispatchEvent(e);
		            return true;
		        }
		    }

		    // Force file download (whether supported by server).
		    if (sUrl.indexOf('?') === -1) {
		        sUrl += '?download';
		    }

		    window.open(sUrl, '_self');
		    return true;
		}

		window.downloadFile.isChrome = navigator.userAgent.toLowerCase().indexOf('chrome') > -1;
		window.downloadFile.isSafari = navigator.userAgent.toLowerCase().indexOf('safari') > -1;

		

		$(function() {
			$("#submit-contact-form").on('click', function() {
				var name = $("#name").val();
				var surname = $("#surname").val();
				var phone = $("#contact").val();
				var email = $("#email").val();
				var property = $("#property").val();
				var budget = $("#budget").val();
				var lead = $("#pc-lead").val();

				console.log(name, email, surname, phone, email, property, budget, lead);
				var MyIFrame = document.getElementById("myFrame");
				MyIFrame.src = 'buy-home-form.html';
				if(name.length > 0 && surname.length > 0 && phone.length > 0 && email.length > 0 && property.length > 0 && budget.length > 0 && lead.length > 0) {

					if(validateForPhone(phone) && validateForEmail(email)) {
						var MyIFrameDoc = (MyIFrame.contentWindow || MyIFrame.contentDocument);
						if (MyIFrameDoc.document) MyIFrameDoc = MyIFrameDoc.document
						MyIFrameDoc.getElementById("name").value = name;
						MyIFrameDoc.getElementById("surname").value = surname;
						MyIFrameDoc.getElementById("contact").value = phone;
						MyIFrameDoc.getElementById("email").value = email;
						MyIFrameDoc.getElementById("property").value = property;
						MyIFrameDoc.getElementById("budget").value = budget;
						MyIFrameDoc.getElementById("pc-lead").value = lead;

						MyIFrameDoc.getElementById("pc-buy-home-form").submit();
						iFrameSubmitted = true;
						$(".buy-home-success").show();
						$(".buy-form-form").css({'opacity':0});
						$("html, body").animate({ scrollTop: 0 }, "slow");
					}
					else {
						if(!validateForPhone(phone)) {
							alert("please enter valid phone number");
						}
						if(!validateForEmail(email)) {
							alert("please enter valid Email ID");
						}
					}
				}
				else {
					alert("No fields can be empty");
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


	</script>
</html>