<script src="lib/js/jquery-3.3.1.min.js"></script>
<div class="pc-header">
	<div class="container-fluid">
		<div class="row pc-header-container zero-margin">
			<div class="hidden-md hidden-lg hidden-xl">
				<div class="hamburger-container" onclick="myFunction(this)">
				  <div class="bar1"></div>
				  <div class="bar2"></div>
				  <div class="bar3"></div>
				</div>
			</div>
			<div class="col-md-2 hidden-xs hidden-sm  buy-home-container">
				<span class="buy-home"><a href="/buy-a-home.php" style="color: white">Buy a home</a></span>
			</div>
			<div class="col-md-1 hidden-xs hidden-sm"></div>
			<div class="col-md-6 nav-container hidden-xs hidden-sm">
				<div class="row zero-margin">
					<div class="col-sm-3 col-md-3 nav-item-container">
						<span class="nav-item projects"><a href="/portfolio.php">Projects</a></span>
					</div>
					<div class="col-sm-3 col-md-3 nav-item-container">
						<span class="nav-item contact"><a href="/contact-us.php">Contact Us</a></span>
					</div>
					<div class="col-sm-3 col-md-3 nav-item-container">
						<span class="nav-item career">Careers</span>
					</div>
					<div class="col-sm-3 col-md-3 nav-item-container">
						<span class="nav-item blog">Blog</span>
					</div>
				</div>
			</div>
			<div id="pc-logo" class="pc-logo col-md-3 col-sm-12">
				<img style="max-width: 40%;" src="" id="logo-image"/>
			</div>
			
		</div>
	</div>
	<div class="container-fluid mobile-menu-container">
		<div class="row hiden-md hidden-lg">
			<div class="col-xs-12 col-sm-12 col-md-3 nav-item-container">
				<span class="nav-item projects"><a href="/portfolio.php">Projects</a></span>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-3 nav-item-container">
				<span class="nav-item contact"><a href="/contact-us.php">Contact Us</a></span>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-3 nav-item-container">
				<span class="nav-item career">Careers</span>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-3 nav-item-container">
				<span class="nav-item blog">Blog</span>
			</div>
		</div>
	</div>
	

</div>
<script type="text/javascript">
	var currentUrl = window.location.href;
	var logoElem = document.getElementById("logo-image");
	if(currentUrl.indexOf('platinum-life') > -1) {
		logoElem.src = "/images/ongoing2.png"
	}
	else if (currentUrl.indexOf('platinum-towers') > -1) {
		logoElem.src = "/images/pt-towers.png"	
	}
	else {
		logoElem.src = "/images/pc-logo.png"		
	}
	var redirToHome = document.getElementById("logo-image");
	redirToHome.onclick = function() {
		window.location.href = "/";
	}

	function myFunction(x) {
	    x.classList.toggle("change");
	}
	$(".mobile-menu-container").hide();
	$(".hamburger-container").on('click', function(e) {
		$(".mobile-menu-container").toggle();
	});

</script>