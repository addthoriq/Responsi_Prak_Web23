<?php 
	include "config/crud.php";
	include "models/login.php";
	$sql4 = $proses->tampil("MAX(id_pemesan) as kode","pemesan","");
	$dt4 = $sql4->fetch();
	$kode = $dt4['kode'];

	$nu = (int) substr($kode, 4,5);
	$nu++;

	$char = "PMSN";
	$newid = $char . sprintf("%05s",$nu);

	if (isset($_SESSION['id'])) {
		$hidden = "hidden";
		$akun = "";
	}else{
		$hidden = "";
		$akun = "hidden";
	}

?>
<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Movies Place</title>

<link rel="stylesheet" type="text/css" href="assets/css/film.css">
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Movies Place" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="assets/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- pop-up -->
<link href="assets/bootstrap/css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
<!-- //pop-up -->
<link href="assets/bootstrap/css/easy-responsive-tabs.css" rel='stylesheet' type='text/css'/>
<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/zoomslider.css" />
<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/style.css" />
<link href="assets/bootstrap/css/font-awesome.css" rel="stylesheet"> 
<script type="text/javascript" src="assets/bootstrap/js/modernizr-2.6.2.min.js"></script>
<!--/web-fonts-->
<link href='//fonts.googleapis.com/css?family=Tangerine:400,700' rel='stylesheet' type='text/css'>
<link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<!--//web-fonts-->
</head>
<body>
<!--/main-header-->
  <!--/banner-section-->
  	<?php 
  		$q = $proses->tampil("*","film",""); 
		foreach ($q as $d) {
			$slid = "";
		}
  	 ?>
	<div id="demo-1" data-zs-src='["assets/bootstrap/images/2.jpg", "assets/bootstrap/images/1.jpg", "assets/bootstrap/images/3.jpg","assets/bootstrap/images/4.jpg"]' data-zs-overlay="dots">
		<div class="demo-inner-content">
		<!--/header-w3l-->
			   <div class="header-w3-agileits" id="home">
			     <div class="inner-header-agile">	
				<nav class="navbar navbar-default">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<h1><a  href="index.php"><span>M</span>ovies <span>P</span>lace</a></h1>
					</div>
					<!-- navbar-header -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav">
							<li class="active"><a href="index.html">Home</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Genre <b class="caret"></b></a>
								<ul class="dropdown-menu multi-column columns-3">
									<li>
									<div class="col-sm-4">
										<ul class="multi-column-dropdown">
											<li><a href="#">Action</a></li>
											<li><a href="#">Biography</a></li>
											<li><a href="#">Crime</a></li>
											<li><a href="#">Family</a></li>
											<li><a href="#">Horror</a></li>
											<li><a href="#">Romance</a></li>
											<li><a href="#">Sports</a></li>
											<li><a href="#">War</a></li>
										</ul>
									</div>
									<div class="col-sm-4">
										<ul class="multi-column-dropdown">
											<li><a href="#">Adventure</a></li>
											<li><a href="#">Comedy</a></li>
											<li><a href="#">Documentary</a></li>
											<li><a href="#">Fantasy</a></li>
											<li><a href="#">Thriller</a></li>
										</ul>
									</div>
									<div class="col-sm-4">
										<ul class="multi-column-dropdown">
											<li><a href="#">Animation</a></li>
											<li><a href="#">Costume</a></li>
											<li><a href="#">Drama</a></li>
											<li><a href="#">History</a></li>
											<li><a href="#">Musical</a></li>
											<li><a href="#">Psychological</a></li>
										</ul>
									</div>
									<div class="clearfix"></div>
									</li>
								</ul>
							</li>
							<li><a href="#">A - z list</a></li>
						</ul>

					</div>
					<div class="clearfix"> </div>	
				</nav>
					<div class="w3ls_search">
									<div class="cd-main-header">
										<ul class="cd-header-buttons">
											<li><a class="cd-search-trigger" href="#cd-search"> <span></span></a></li>
										</ul> <!-- cd-header-buttons -->
									</div>
									<div id="cd-search" class="cd-search">
										<form action="#" method="post">
											<input name="Search" type="search" placeholder="Search...">
										</form>
									</div>
								</div>
	
			</div> 

			   </div>
		<!--//header-w3l-->
			<!--/banner-info-->
			   <div class="baner-info">
			      <h3>Latest <span>On</span>Line <span>Mo</span>vies</h3>
				  <h4>In space no one can hear you scream.</h4>
			   </div>
			<!--/banner-ingo-->		
		</div>
    </div>
  <!--/banner-section-->
 <!--//main-header-->
	         <!--/banner-bottom-->
			  <div class="w3_agilits_banner_bootm">
			     <div class="w3_agilits_inner_bottom">
			            <div class="col-md-6 wthree_agile_login">
						     <ul>
									<li><a href="#" class="login"  data-toggle="modal" data-target="#myModal4" <?php echo $hidden ?>>Login</a></li>
									<li><a href="#" class="login reg"  data-toggle="modal" data-target="#myModal5" <?php echo $hidden ?>>Register</a></li>
									<div style="margin-top: -20px;" <?php echo $akun; ?>>
										
										<li class="dropdown">
											<a href="#"  class="dropdown-toggle" data-toggle="dropdown" style="color: #fff;" >ACCOUNT <b class="caret"></b></a>
											<ul class="dropdown-menu multi-column columns-3" style="width: 200px;">
												<li>
												<div class="col-sm-4">
													<ul class="multi-column-dropdown">
														<li><a href="models/logout.php" >LOGOUT</a></li>
													</ul>
												</div>
												</li>
											</ul>
										</li>

									</div>

								</ul>
						</div>
						 <button style="padding: 5px 18px;border:1px;background-color: #000;color:#fff;text-transform: uppercase;float: right;font-size: 15px;" data-toggle="modal" data-target="#kranjang" <?php echo $akun; ?> >Kranjang</button>
				</div>
			</div>

			<div class="modal fade" id="kranjang" tabindex="-1" role="dialog" >
							<div class="modal-dialog" style="width: 80%;">
							<!-- Modal content-->
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										<h4>Daftar Blanja</h4>
										<div class="login-form">
											<form action="models/s_pesan.php" method="post">
												<table class="table">
												<?php
													$sql1 = $proses->tampil("*","dtl_pemesan","WHERE dtl_pemesan.id_pemesan = '$newid'");
													$row1 = $sql1->rowCount();

													$sql3 = $proses->tampil("SUM(tiket.harga)","tiket,dtl_pemesan","WHERE tiket.id_tiket = dtl_pemesan.id_tiket AND dtl_pemesan.id_pemesan = '$newid' ");
													$dt3 = $sql3->fetch();

												 	$no = "1";

													$sql2 = $proses->tampil("*","film,tiket,dtl_pemesan","WHERE film.id_film = tiket.id_film AND tiket.id_tiket = dtl_pemesan.id_tiket AND dtl_pemesan.id_pemesan = '$newid'");
													foreach ($sql2 as $dt2) {
												 ?>
													<tr>
														<td><?php echo $no++; ?></td>
														<td><?php echo $dt2['judul']; ?></td>
														<td><?php echo $dt2['rilis']; ?></td>
														<td><?php echo $dt2['genre']; ?></td>
														<td>No Kursi : <?php echo $dt2['kursi']; ?></td>
														<td>Rp. <?php echo number_format($dt2['harga'],2,",","."); ?></td>
														<td><a href="models/h_dtl_pesan.php?id=<?php echo $dt2['id_dtl_pemesan']; ?>"><span class="label label-danger">DELET</span></a></td>
													</tr>
													
												<?php } ?>
												</table>
													<input type="hidden" name="id_pemesan" value="<?php echo $newid; ?>">
													<input type="hidden" name="id_member" value="<?php echo $_SESSION['id']; ?>">
													<input type="hidden" name="jm_tiket" value="<?php echo $row1; ?>">
													<input type="hidden" name="t_harga" value="<?php echo $dt3[0]; ?>">
												<div class="tp" style="width: 100px;">
													<input type="submit" value="Beli">
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>


			<!--//banner-bottom-->
		     <!-- Modal1 -->
					<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" >

							<div class="modal-dialog">
							<!-- Modal content-->
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										<h4>Login</h4>
										<div class="login-form">
											<form action="models/login.php" method="post">
												<input type="email" name="email" placeholder="E-mail" required="">
												<input type="password" name="pass" placeholder="Password" required="">
												<div class="tp">
													<input type="submit" name="login" value="LOGIN NOW">
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
				<!-- //Modal1 -->
				  <!-- Modal1 -->
					<div class="modal fade" id="myModal5" tabindex="-1" role="dialog" >

							<div class="modal-dialog">
							<!-- Modal content-->
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										<h4>Register</h4>
										<div class="login-form">
											<form action="models/s_member.php" method="post">
											    <input type="text" name="nama" placeholder="Name" required="">
												<input type="email" name="email" placeholder="E-mail" required="">
												<input type="text" name="tgl_lahir" id="tgl_lahir" placeholder="Date Birth">
												<input type="radio" name="jk" value="Laki-laki">Laki-laki
												<input type="radio" name="jk" value="Perempuan">Perempuan
												<input type="password" name="pass" placeholder="Password" required="">
												<div class="tp">
													<input type="submit" value="REGISTER NOW">
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
				<!-- //Modal1 -->
			<!--/content-inner-section-->
			<div class="w3_content_agilleinfo_inner">	
				<?php 
					if (isset($_GET['p'])) {
						include "views/".$_GET['p'].".php";
					}else{
						include "views/home.php";
					}
				 ?>	
			</div>
				
			<div class="w3agile_footer_copy" >
				    <p>© 2017 Movies Pro. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a> | Repost by <a href="https://stokcoding.com/" title="StokCoding.com" target="_blank">StokCoding.com</a></p>
			</div>
		<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

<script src="assets/bootstrap/js/jquery-1.11.1.min.js"></script>
	<!-- Dropdown-Menu-JavaScript -->
			<script>
				$(document).ready(function(){
					$(".dropdown").hover(            
						function() {
							$('.dropdown-menu', this).stop( true, true ).slideDown("fast");
							$(this).toggleClass('open');        
						},
						function() {
							$('.dropdown-menu', this).stop( true, true ).slideUp("fast");
							$(this).toggleClass('open');       
						}
					);
				});
			</script>
		<!-- //Dropdown-Menu-JavaScript -->


<script type="text/javascript" src="assets/bootstrap/js/jquery.zoomslider.min.js"></script>
		<!-- search-jQuery -->
				<script src="assets/bootstrap/js/main.js"></script>
			<script src="assets/bootstrap/js/simplePlayer.js"></script>
			<script>
				$("document").ready(function() {
					$("#video").simplePlayer();
				});
			</script>
			<script>
				$("document").ready(function() {
					$("#video1").simplePlayer();
				});
			</script>
			<script>
				$("document").ready(function() {
					$("#video2").simplePlayer();
				});
			</script>
				<script>
				$("document").ready(function() {
					$("#video3").simplePlayer();
				});
			</script>

			<!-- pop-up-box -->  
		<script src="assets/bootstrap/js/jquery.magnific-popup.js" type="text/javascript"></script>
	<!--//pop-up-box -->

			<div id="small-dialog1" class="mfp-hide">
			<iframe src="https://player.vimeo.com/video/165197924?color=ffffff&title=0&byline=0&portrait=0"></iframe>
	</div>
	<div id="small-dialog2" class="mfp-hide">
		<iframe src="https://player.vimeo.com/video/165197924?color=ffffff&title=0&byline=0&portrait=0"></iframe>
	</div>
	<script>
		$(document).ready(function() {
		$('.w3_play_icon,.w3_play_icon1,.w3_play_icon2').magnificPopup({
			type: 'inline',
			fixedContentPos: false,
			fixedBgPos: true,
			overflowY: 'auto',
			closeBtnInside: true,
			preloader: false,
			midClick: true,
			removalDelay: 300,
			mainClass: 'my-mfp-zoom-in'
		});
																		
		});
	</script>
<script src="assets/bootstrap/js/easy-responsive-tabs.js"></script>
<script>
$(document).ready(function () {
$('#horizontalTab').easyResponsiveTabs({
type: 'default', //Types: default, vertical, accordion           
width: 'auto', //auto or any width like 600px
fit: true,   // 100% fit in a container
closed: 'accordion', // Start closed if in accordion view
activate: function(event) { // Callback function if tab is switched
var $tab = $(this);
var $info = $('#tabInfo');
var $name = $('span', $info);
$name.text($tab.text());
$info.show();
}
});
$('#verticalTab').easyResponsiveTabs({
type: 'vertical',
width: 'auto',
fit: true
});
});
</script>
<link href="assets/bootstrap/css/owl.carousel.css" rel="stylesheet" type="text/css" media="all">
<script src="assets/bootstrap/js/owl.carousel.js"></script>
<script>
	$(document).ready(function() { 
		$("#owl-demo").owlCarousel({
	 
		 autoPlay: 3000, //Set AutoPlay to 3 seconds
		  autoPlay : true,
		   navigation :true,

		  items : 5,
		  itemsDesktop : [640,4],
		  itemsDesktopSmall : [414,3]
	 
		});
	 
	}); 
</script> 

<!--/script-->
<script type="text/javascript" src="assets/bootstrap/js/move-top.js"></script>
<script type="text/javascript" src="assets/bootstrap/js/easing.js"></script>

<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
</script>
 <script type="text/javascript">
						$(document).ready(function() {
							/*
							var defaults = {
					  			containerID: 'toTop', // fading element id
								containerHoverID: 'toTopHover', // fading element hover id
								scrollSpeed: 1200,
								easingType: 'linear' 
					 		};
							*/
							
							$().UItoTop({ easingType: 'easeOutQuart' });
							
						});
					</script>
<!--end-smooth-scrolling-->
	<script src="assets/bootstrap/js/bootstrap.js"></script>

 

</body>
</html>
<link rel="stylesheet" type="text/css" href="assets/js/jquery-ui.css">
<script type="text/javascript" src="assets/js/jquery-ui.js"></script>
<script type="text/javascript">
	$(document).ready(function () {
		$("#tgl_lahir").datepicker({dateFormat:"yy/mm/dd",changeYear:true,changeMonth:true,yearRange:"-50:"})
	})
</script>