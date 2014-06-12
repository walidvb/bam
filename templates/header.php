

<div class="row">
	<a href="/">
		<img src="/images/logo.png" alt="" class="logo">
	</a>
	<h1 style="text-align: center; ">UNDER CONSTRUCTION</h1>

	<nav class=".col-xs-12" role="navigation">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<a class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse" id="toggle"><span></span></a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse">
			<ul>
				<li <?php if($current_page == "accueil"){ print "class='active'";} ?>><a href="/accueil">Accueil</a></li>
				<li <?php if($current_page == "apropos"){ print "class='active'";} ?>><a href="/apropos">À Propos</a></li>
				<li <?php if($current_page == "programmation"){ print "class='active'";} ?>><a href="/programmation">Programmation</a></li>
				<li <?php if($current_page == "artistes"){ print "class='active'";} ?>><a href="/artistes">Artistes</a></li>
				<li <?php if($current_page == "media"){ print "class='active'";} ?>><a href="/media">Média</a></li>
				<li <?php if($current_page == "infos"){ print "class='active'";} ?>><a href="/infos">Infos</a></li>
			</ul>	
		</div><!-- /.navbar-collapse -->
	</nav>
</div>