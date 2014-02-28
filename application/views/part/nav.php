<div class="row top">
	<div class="col-lg-8 col-md-8 col-sm-7 col-left">
		<div class="name"><a href="front" style='float:left'><img src='assets/img/logo.png'/></a>
			<ul class='nav-profil'>
				<li><a href='#'>Zainu Rochim</a></li>
				<li><a href='login'>Login</a></li>
			</ul>
			<div style='clear:both'></div>
		</div>
	</div>
	<div class="col-lg-4 col-md-4 col-sm-5 col-right">
		<nav>
			<ul class="list-inline" id="menu">
			<?php
				$sPage = $this->session->userdata('nav');
				$nav['Timeline'] = "front/timeline";
				$nav['Exkul'] = "front/blog";
				$nav['Gallery'] = "front/contact";
				foreach($nav as $page => $url){
					if($sPage==$page){$act="class='active'";}else{$act='';}
					echo"<li $act>
						<a href='$url'>$page</a>
					</li>";
				}
			?>
				<li class="last">
					<a href="#"><img class="social" src="assets/img/icon/icon-facebook.png" alt="facebook"></a>
					<a href="#"><img class="social" src="assets/img/icon/icon-twitter.png" alt="twitter"></a>
				</li>
			</ul>
		</nav>
	</div>
	<div class='cl'></div>
</div>