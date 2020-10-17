<footer class="site-footer">
	<div class="container">
		<div class="d-block">
			<div class="row">
				<div class="col-md-5">
					<h2 class="footer-heading mb-4">About Us</h2>
					<p>CSI is a largest group of computer proffesionals in india. CSI DDU Student branch is a chapter of CSI working in the fields of sharing knowledge and experiences among the students of DDU.</p>
				</div>
				<div class="col-md-3">
					<h2 class="footer-heading mb-4">Contact Us</h2>
					<p class="text-white">Vivek Shah : <br><a href="tel:+918849236413" style="text-decoration:none">+91 88492 36413</a></p>
					<p class="text-white">Mrugnayani Lankapati : <br><a href="tel:+916355936811" style="text-decoration:none">+91 63559 36811</a></p>
				</div>
				<div class="col-md-2">
					<h2 class="footer-heading mb-4">Quick Links</h2>
					<ul class="list-unstyled">
						<li><a href="events.php" style="text-decoration:none">Events</a></li>
						<li><a href="team.php" style="text-decoration:none">Team</a></li>
						<li><a href="contact.php" style="text-decoration:none">Contact</a></li>
					</ul>
				</div>
				<div class="col-md-2">
					<h2 class="footer-heading mb-4">Follow Us</h2>
					<ul class="list-unstyled">
						<li><a href="https://www.facebook.com/Computer-Society-of-India-DDU-Student-Branch-328507823907859/" target="_blank" style="text-decoration:none">Facebook</a></li>
						<li><a href="https://Instagram.com/csi_ddu" target="_blank" style="text-decoration:none">Instagram</a></li>
						<li class="pt-3"><p class="footer-heading"> Site Hits: 
							<!-- <script type="text/javascript" src="https://freehitcounters.org/count/2m83"></script>
							<br>
 							<a href='htp://www.counter-zaehler.de'>visit counter</a> <script type='text/javascript' src='https://whomania.com/ctr?id=f9b56df5314b8e24041204080cec3f7d0e1ed9e8'></script> -->
 							<?php
 							
					  			include("db_connect.php");
					  			$sql = "SELECT * from tbl_site_stats WHERE id=0";
					  			$stats = $pdo->query($sql)->fetch();
					  			$visits = $stats["visits"];
					  			echo $visits;
					  		?>
					  			
					  		<?php
					  			$sql = "UPDATE tbl_site_stats SET visits=? WHERE id=?";
								$pdo->prepare($sql)->execute([$visits+1,0]);
					  			$pdo = null;
					  		?>
 						</li>
					</ul>
				</div>
				
			</div>
		</div>
		<div class="row mt-1 pt-1 text-center">
			<div class="col-md-12">
				<div class="border-top pt-3">
					<p> Copyright &copy; 2019 | Designed & Developed by CSI DDU Student Branch </p>
				</div>
			</div>
		</div>
	</div>
</footer>