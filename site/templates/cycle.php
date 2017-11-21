<?php snippet('header') ?>


<?php 
	$mention['aucune']  = "";
	$mention['english']  = "conférence en anglais";
    $mention['allemand'] = "conférence en allemand";

 ?>

<div class="keyboard">
	<!-- Generator: Adobe Illustrator 22.0.1, SVG Export Plug-In  -->
	<svg version="1.1"
		 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
		 x="0px" y="0px" width="300px" height="210px" viewBox="0 0 300 210" style="enable-background:new 0 0 300 210;"
		 xml:space="preserve">
	<style type="text/css">
		.st0{fill:#FFFFFF;}
		.st1{fill:none;stroke:#FFFFFF;stroke-width:8;stroke-miterlimit:10;}
	</style>
	<defs>
	</defs>
	<rect class="st0" width="300" height="210"/>
	<g>
		<rect x="20" y="110" width="80" height="80"/>
	</g>
	<g>
		<rect x="110" y="110" width="80" height="80"/>
	</g>
	<g>
		<rect x="200" y="110" width="80" height="80"/>
	</g>
	<g>
		<rect x="110" y="20" width="80" height="80"/>
	</g>
	<polygon class="st0" points="150,30 140,50 160,50 "/>
	<line class="st1" x1="150" y1="40" x2="150" y2="80"/>
	<polygon class="st0" points="30,150 50,160 50,140 "/>
	<line class="st1" x1="40" y1="150" x2="80" y2="150"/>
	<polygon class="st0" points="270,150 250,140 250,160 "/>
	<line class="st1" x1="260" y1="150" x2="220" y2="150"/>
	<polygon class="st0" points="150,180 160,160 140,160 "/>
	<line class="st1" x1="150" y1="170" x2="150" y2="130"/>
	</svg>

</div>


<div class="caroussel">


	<div class="bloc intro">
		
		<h1><a href="<?= $site->url() ?>"><?= $page->title()->html()?></a></h1>
		<h2><?= $page->soustitre()->html()?></h2>
		<div><?= $page->intro()->kirbytext()?></div>

	</div>

	<?php 

	$i = 0;
	foreach($page->children()->visible() as $item): ?>

	<div id="bloc conf<?php echo $i++; ?>" class="cadre" data-date="<?= $item->date() ?>">

		<div class="colorBlock"></div>
		<div class="content">
			<!-- <h1><?= $item->title()->html() ?></h1>
			<h3><?= $item->date() ?></h3>
			<?php echo $item->text()->kirbytext() ?>
 -->
			<h1 class="intervenant"><?= $item->intervenant()->html() ?></h1>
			<h2 class="titre"><?= $item->title()->html() ?></h2>
			<p class="mention"><?= $mention[ $item->mention()->value() ] ?></p>
			<p class="calendrier"><span class="jour"><?= $item->date_jour()->text() ?></span> <span class="date"><?= $item->date_nombre()->text() ?></span> <span class="mois"><?= $item->date_mois()->text() ?></span></p>
			<p class="info"><?= $item->lieu()->html() ?></p>

			<p class="more"><a href="#">En savoir plus</a></p>
		

			<div class="recap">
				<h2>Graphisme technè</h2>
				<ul>
					<li>Kristyan Sarkis – 30.11.17</li>
					<li>Pauline Thomas – 07.12.17</li>
					<li>Max Bonhomme – 24.01.18</li>
					<li>Etienne Robial – 31.01.18</li>
					<li>David Bennewith – 08.02.18</li>
					<li>Julien Priez – 08.03.18</li>
					<li>Fabrice Sabatier – 15.03.18</li>
					<li>Pierre-Damien Huyghe – 28.03.18</li>
					<li>Rich Roat – 04.04.18</li>
					<li>Pierre Ponant – 31.05.18</li>
				</ul>
			</div>

		</div>


		<div class="detail">
			<h1 class="intervenant"><?= $item->intervenant()->html() ?></h1>
			<h2 class="titre"><?= $item->title()->html() ?></h2>
			
			<div class="resume">
				<?= $item->text()->kirbytext() ?>
			</div>
			<div class="bio">
				<?= $item->bio()->kirbytext() ?>
			</div>

		</div>



	</div>


<?php endforeach ?>
</div>



<?php snippet('footer') ?>