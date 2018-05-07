<div class="pc-header">
	<div class="container-fluid">
		<div class="row pc-header-container zero-margin">
			<div class="col-sm-2 buy-home-container">
				<span class="buy-home"><a href="/buy-a-home.php" style="color: white">Buy a home</a></span>
			</div>
			<div class="col-sm-1"></div>
			<div class="col-sm-6 nav-container">
				<div class="row zero-margin">
					<div class="col-sm-3 nav-item-container">
						<span class="nav-item projects"><a href="/portfolio.php">Projects</a></span>
					</div>
					<div class="col-sm-3 nav-item-container">
						<span class="nav-item contact"><a href="/contact-us.php">Contact Us</a></span>
					</div>
					<div class="col-sm-3 nav-item-container">
						<span class="nav-item career">Careers</span>
					</div>
					<div class="col-sm-3 nav-item-container">
						<span class="nav-item blog">Blog</span>
					</div>
				</div>
			</div>
			<div id="pc-logo" class="pc-logo col-sm-3">
				<img style="max-width: 40%;" src="" id="logo-image"/>
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
	var redirToHome = document.getElementById("pc-logo");
	redirToHome.onclick = function() {
		window.location.href = "/";
	}

</script>