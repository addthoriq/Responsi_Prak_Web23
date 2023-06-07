<h3 class="agile_w3_title" style="text-align: center;"> Top <span>Movies</span></h3>
	<!--/movies-->				
	<div class="w3_agile_latest_movies">
		<div id="owl-demo" class="owl-carousel owl-theme">

		<?php
			$sql = $proses->tampil("*","film","ORDER BY score DESC"); 
			foreach ($sql as $data) {
 		?>	
		<div class="item">
			<div class="w3l-movie-gride-agile w3l-movie-gride-slider ">
				<a href="views/info_film.php?id=<?php echo $data[0]; ?>" class="hvr-sweep-to-bottom"><img src="admin/assets/img/film/<?php echo $data['gambar'] ?>" title="<?php echo $data['judul'] ?>" class="img-responsive" style="height: 300px;width: 300px;" alt=" " />
					<div class="w3l-action-icon"><i class="fa fa-play-circle-o" aria-hidden="true"></i></div>
				</a>
				<div class="mid-1 agileits_w3layouts_mid_1_home">
					<div class="w3l-movie-text">
						<h6><a href="views/info_film.php?id=<?php echo $data[0]; ?>"><?php echo $data['judul'] ?></a></h6>							
					</div>
					<div class="mid-2 agile_mid_2_home">
						<p><?php echo $data['rilis']; ?></p>
						<p style="margin-left: 58px;"><?php echo $data['rating']; ?></p>
						<p style="float: right;color: red;font-weight: bold;"><?php echo $data['score']; ?></p>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div>
		<?php } ?>
		<!--//movies-->
	</div>	
</div>

 <h3 class="agile_w3_title" style="text-align: center;">ALL <span>Movies</span> </h3>
				<!--/requested-movies-->
<div class="wthree_agile-requested-movies">
	<?php
		$qr = $proses->tampil("*","film",""); 
		foreach ($qr as $dt) {
 	?>	
	<div class="col-md-2 w3l-movie-gride-agile requested-movies">
		<a href="views/info_film.php?id=<?php echo $dt[0]; ?>" class="hvr-sweep-to-bottom"><img src="admin/assets/img/film/<?php echo $dt['gambar']; ?>" class="img-responsive" title="<?php echo $dt['judul'] ?>" style="height: 250px;width: 260px;" alt=" ">
			<div class="w3l-action-icon"><i class="fa fa-play-circle-o" aria-hidden="true"></i></div>
		</a>
		<div class="mid-1 agileits_w3layouts_mid_1_home">
			<div class="w3l-movie-text">
				<h6><a href="views/info_film.php?id=<?php echo $dt[0]; ?>"><?php echo $dt['judul'] ?></a></h6>							
			</div>
			<div class="mid-2 agile_mid_2_home">
				<p><?php echo $dt['rilis']; ?></p>
				<p style="margin-left: 58px;"><?php echo $dt['rating']; ?></p>
				<p style="float: right;color: red;font-weight: bold;"><?php echo $dt['score']; ?></p>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<?php } ?>
	<div class="clearfix"></div>
</div>
				<!--//requested-movies-->