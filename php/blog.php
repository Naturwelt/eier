<?php 
function blogaktuell() { ?>
	<div class="jumbotron k-bgcolor-lightgreen">
	
		<h4>09. Juli 2017</h4>
		Es wird wieder an der Homepage weiter gearbeitet. 
		Außerdem ist es uns heute erstmal gelungen eine Test-App zu erstellen.
		Über diese App sollte man einmal Eier bestellen können! :)	
		<hr>
		
		<h4>09. Juli 2017</h4>
		Die Verschalung des neuen Hühnerhauses schreitet voran.
		Die Bretter sind alle fertig gestrichen.
		<hr>
		
	</div>
	
	<div class="jumbotron k-bgcolor-lightgreen">
		<h4>Archiv</h4>
		<ul>
			<!-- <a href="index.php?blog=201707"><li>Juli 2017</li></a> -->
		</ul>
	</div>	

<?php } ?>

<?php 
function blog() {
	$blog = $_GET["blog"];
	
	if ($blog=="") { blogaktuell(); }
	if ($blog=="201707") { blog201707(); }


} ?>





<?php 
function blog201707() { ?>
	<div class="jumbotron k-bgcolor-lightgreen">
	
		<h4>09. Juli 2017</h4>
		Es wird wieder fleissig an der Homepage weiter gearbeitet. 
		Außerdem ist es uns heute erstmal gelungen, eine Test-App zu erstellen.
		Über diese App sollte man später einmal Eier bestellen können! :)	
		<hr>
		
		<h4>09. Juli 2017</h4>
		Die Verschalung des neuen Hühnerhauses schreitet voran.
		Die Bretter sind alle fertig gestrichen.
		
	</div>
	
	<div class="jumbotron k-bgcolor-lightgreen">
		<h5>Archiv</h5>
		<ul>
			<a href="index.php?seite=blog&date=201707"><li>Juli 2017</li></a>
		</ul>
	</div>	

<?php } ?>