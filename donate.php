
<?php include('inc/head.php') ?>

	<div id="main_container">
		<div class="container" id="about">
			<?php include('inc/header.php') ?>

			<div id="content">
				<div class="row">
					<div class="donate">
						<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
							<input type="hidden" name="cmd" value="_s-xclick" /><br />
							<input type="hidden" name="hosted_button_id" value="WMGZESZUMYTKA" /><br />
							<input type="image" name="submit" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" alt="PayPal - The safer, easier way to pay online!" /><br />
							<img src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" alt="" width="1" height="1" border="0" />
						</form>
					</div>
					<p>
						David Pottruck, former CEO of Charles Schwab and current Chairman of HighTower Advisors, has very generously offered Beat the Streets SF/Bay Area a $10,000.00 challenge grant to match donations dollar for dollar to help with the 2014 expansion.
					</p>
					<p>
						Please Donate Now so that your dollars can have double the impact on this valuable program and the kids of the Bay Area.
					</p>
				</div>
			</div>
			
		</div>
		<?php include('inc/footer.php') ?>
	</div>

<script type='text/javascript'>
	$('#main_nav li').removeClass('active');
	$('#main_nav .donate').addClass('active');
</script>

<?php include('inc/foot.php') ?>