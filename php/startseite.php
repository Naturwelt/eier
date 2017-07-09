<?php 
function navigation() { ?>
	<div class="row">	
		<div class="col-sm-12">
			<ul>
				<a href="index.php"><li class="<?php if ($seite == "") { echo "k-bold"; }?>">Home</li></a>
				<a href="index.php?seite=huehner"><li class="<?php if ($seite == "huehner") { echo "k-bold"; }?>">Hühner</li></a>
				<a href="#"><li class="<?php if ($seite == "eier-kaufen") { echo "k-bold"; }?>">Eier kaufen</li></a>
			</ul>
		</div>	
	</div>
<?php } ?>


<?php 
function startseite() { ?>
	<div class="jumbotron k-bgcolor-green">
		<h1>Naturwelt</h1>
		<p>Wir interessieren uns für natürliche Produkte, eine gesunde Ernährung, artgerechte Tierhaltung und Nachhaltigkeit.</p>
		So entstand das junge Projekt Naturwelt. Wenn Du Ideen hast oder mitmachen willst, bitte einfach per E-Mail melden.
	</div>
<?php } ?>