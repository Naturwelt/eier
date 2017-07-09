<?php 
function navigation($seite) { ?>
	<div class="row">	
		<div class="col-sm-12">
			<ul>
				<a href="index.php"><li class="<?php if ($seite == "") { echo "k-bold"; }?>">Home</li></a>
				<a href="index.php?seite=huehner"><li class="<?php if ($seite == "huehner") { echo "k-bold"; }?>">Hühner</li></a>
				<a href="#"><li class="<?php if ($seite == "eier-kaufen") { echo "k-bold"; }?>">Haltung</li></a>
			</ul>
		</div>	
	</div>
<?php } ?>


<?php 
function huehner() { ?>
	<div class="jumbotron k-bgcolor-green">
		<h1>Hühner</h1>
		<p>Wir haben aktuell zehn Hühner und einen Hahn. Die Hühner gehören der Rasse <strong>Vorwerk</strong> an.</p>
		Die Eier, die man normalerweise im Geschäft erhält - egal, ob Boden-, Freiland- oder Biohaltung -, stammen von so genannten <strong>Hybridhühnern</strong>.
		Hybridhühner sind eierlegende "Roboter-Hühner", die im Jahr 320 Eier und mehr legen müssen.
	</div>
<?php } ?>