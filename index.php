<!DOCTYPE html>
<html>
	<head>
		<!--Import Google Icon Font-->
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<!--Import materialize.css-->
		<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
		<style type="text/css">
			.click-here{
				margin-left: 30%!important;
			}
			ul>li:first-child{
				border-bottom: none;
			}
			.red {
				background-color: #bf2e2a !important;
			}
			@media only screen and (max-width: 360px)
				.flow-text {
					font-size: 1rem!important;
				}
			@media only screen and (max-width: 380px)
				.flow-text {
					font-size: 1rem!important;
				}
				.sidenav{
					width: 230px!important;
				}
				li{
					border-bottom: solid grey 1px;
				}
			input[type=text]:focus {
				border-bottom:none!important;
				box-shadow:none!important;
			}
			input{
				background-color: #fafafa!important;
				border-bottom: none!important;
				height:1.3rem!important;
			margin-left: 5px!important;
				margin-bottom: 0px!important;
			}
			body {
				display: flex;
				height: 80vh;
				flex-direction: column;
				background: url("images/bgImage.jpg");
				background-repeat: no-repeat;
				background-size: 100% 100%;
			}
			/*change*/
			main {
				flex: 1 0 auto;
				height: 63vh;
			}
			button{
				border-radius: 13px;
			}
			button#review{
				margin-left: 15%;
			width: auto;
			height: 2rem;
				border-color: #bf2e2a;
			}
			/*change end*/
			.user-container{
				display:inline-grid;
				grid-template-columns: 30% auto;
				grid-template-rows: 70% auto;
				width: 100%;
			}
			.user-item-a{
				grid-column-start: 1;
				grid-column-end: 2;
				grid-row-start: 1;
				grid-row-end: 1;
			}
			.user-item-b{
				grid-column-start: 2;
				grid-column-end: 3;
				grid-row-start: 1;
				grid-row-end: 1;
				align-self: start;
				justify-self: center;
			}
			.user-item-c{
				grid-column-start: 2;
				grid-column-end: 3;
				grid-row-start: 1;
				grid-row-end: 1;
				align-self: end;
				justify-self: center;
				padding-top: 40px!important;
			}
			.user-item-d{
				grid-column-start: 2;
				grid-column-end: 4;
				grid-row-start: 2;
				grid-row-end: 2;
				padding-left: 10px;
				place-self: center stretch;
				border-top:solid white 1px;
			}
			/*change*/
			.main-container{
					display: inline-grid;
					grid-template-columns: 15% auto 15%;
					grid-template-rows: auto auto 15% 15%;
			}
			.main-item-a{
				grid-column-start: 2;
				grid-column-end: 2;
				grid-row-start: 1;
				grid-row-end: 1;
				place-self:center stretch;
			}
			.main-item-b{
				grid-column-start: 2;
				grid-column-end: 2;
				grid-row-start: 2;
				grid-row-end: 2;
				place-self:center stretch;
			}
			.main-item-c{
				grid-column-start: 2;
				grid-column-end: 2;
				grid-row-start: 3;
				grid-row-end: 3;
				font-size: 1.2rem;
				align-self: end;
			}
			.main-item-d{
				grid-column-start: 2;
				grid-column-end: 2;
				grid-row-start: 4;
				grid-row-end: 4;
			}
			.search-box{
				display: flex;
				flex-direction: row;
				background-color:white;
				border-radius: 23px;
				height:6vh;
			}
			.search-btn{
				color:#607d8b;
			}
			.search{
				margin:1vh!important;
			}
			/*change end*/
		.subscribe-container {
			display: inline-grid;
			grid-template-columns: 25% 25% 25% 25%;
			grid-template-rows: 50% 50%;
		}
		.item-a {
				grid-column-start: 1;
				grid-column-end: 5;
				grid-row-start: 1;
				grid-row-end: 1;
				place-self: center;
			}
			.item-b>div:nth-child(1){
				width:85%;
			}
			.item-b {
				display:flex;
				flex-direction: row;
				grid-column-start: 1;
				grid-column-end: 5;
				grid-row-start: 2;
				grid-row-end: 2;
				margin-right: 30px;
    			margin-left: 30px;
    			margin-bottom: 10px;
    			background-color: white;
			}
		</style>
		<title>CheatedBuyers||Home-Page</title>
		<!--Let browser know website is optimized for mobile-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	</head>
	<body>
		<header>
			<nav class="red">
				<a href="#" class="brand-logo"><img src="images/logo.png"></a>
				<ul id="slide-out" class="sidenav">
					<li><div class="user-view user-container no-padding">
						<div class="background" style="background-color:#607d8b;">
							
						</div>
						<a class="user-item-a" href="#user"><img style="margin:10px;" class="circle" src="images/profile.png"></a>
						<a class="user-item-b" href="#name"><span class="white-text name">Welcome,</span></a>
						<a class="user-item-c" href="#email"><span class="white-text email">Guest</span></a>
						<a href="#" class="user-item-d"><h4 style="margin:10px;"><span class="material-icons">lock_open</span>Login</h4></a>
					</div>
				</li>
				<li><a href="/social-media-update.php">Social Media Updates</a></li>
				<li><a href="/city-wise-developers.php">City wise developers</a></li>
				<li><a href="/youtube-page.php">YouTube Videos</a></li>
				<li><a href="/legal-queries.php">Queries</a></li>
				<li><a href="/news-update.php">News Updates</a></li>
				<li><a href="/weekly-videos.php">Weekly Videos</a></li>
			</ul>
			<a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
		</nav>
	</header>

	<!--change-->
	<main class="main-container">
		<div class="main-item-a">
			<div class="search-box">
				<input type="text" class="search" name="search" placeholder="Search Projects or Builders">
				<a href="#" class="search-btn"><i style="padding-top: 5px;"class="material-icons">search</i></a>
			</div>
		</div>
		<div class="main-item-b flow-text"><span class="white-text" style="font-size: 1.9rem;">Let's Hear from you</span>
		<button id="review" class="red white-text">
		Write your review
		</button>
	</div>
	
	<span class="main-item-c white-text">Check how user are using</span>
	<div class="main-item-d white-text">
		<span style="margin-left: 20px;" class="white-text">www.cheatedbuyers.com</span><br>
		<button class="click-here white">Clickhere</button>
	</div>
</main>
<!--change end-->
<footer class="subscribe-container red">
	<div class="item-a">
		<span class="white-text">Subscribe to our newsletter</span>
	</div>
	<div class="item-b">
		<div><input placeholder="Enter your e-mail address" class="browser default" type="text" name="subscribe"></div>
		<div style="padding-right: 5px;padding-top: 5px;padding-bottom: 5px;"><button class="red bt white-text" style="border-radius: 13px;border-color: #bf2e2a;">Subscribe</button></div>
	</div>
	</footer><!--JQuery initialization-->
	<script type="text/javascript" src="js/jQuery.min.js"></script>
	<!--JavaScript at end of body for optimized loading-->
	<script type="text/javascript" src="js/materialize.min.js"></script>
	<script type="text/javascript">
		//sidenav initialization
		$(document).ready(function(){
			$('.sidenav').sidenav();
	});
		function clicked(){
			console.log("clicked")
		}
	</script>
</body>
</html>