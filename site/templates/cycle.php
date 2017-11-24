<?php snippet('header') ?>


<?php 
	$mention['aucune']  = "";
	$mention['english']  = "conférence en anglais";
    $mention['allemand'] = "conférence en allemand";

 ?>

<div class="keyboard">
<!-- Generator: Adobe Illustrator 19.1.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
<svg version="1.1" id="Calque_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 300 210" style="enable-background:new 0 0 300 210;" xml:space="preserve">
<style type="text/css">
	.st0{fill:#000;}
	.st1{fill:#000;stroke:#FFFFFF;stroke-miterlimit:10;stroke-width:2;}
	.st2{fill:none;stroke:#000;stroke-miterlimit:10;}
</style>
<g>
	<g>
		<path class="st1" d="M173.4,102.8h-46.8c-2.5,0-4.5-2-4.5-4.5V70.4c0-2.5,2-4.5,4.5-4.5h46.8c2.5,0,4.5,2,4.5,4.5v27.9
			C177.8,100.8,175.8,102.8,173.4,102.8z"/>
		<polygon class="st1" points="145.2,89.6 150,79 154.8,89.6 		"/>
	</g>
	<g>
		<path class="st1" d="M173.4,144.1h-46.8c-2.5,0-4.5-2-4.5-4.5v-27.9c0-2.5,2-4.5,4.5-4.5h46.8c2.5,0,4.5,2,4.5,4.5v27.9
			C177.8,142.1,175.8,144.1,173.4,144.1z"/>
		<polygon class="st1" points="154.8,120.4 150,131 145.2,120.4 		"/>
	</g>
	<g>
		<path class="st1" d="M233.5,144.1h-46.8c-2.5,0-4.5-2-4.5-4.5v-27.9c0-2.5,2-4.5,4.5-4.5h46.8c2.5,0,4.5,2,4.5,4.5v27.9
			C238,142.1,236,144.1,233.5,144.1z"/>
		<polygon class="st1" points="204.9,120.8 215.5,125.7 204.9,130.5 		"/>
	</g>
	<g>
		<path class="st1" d="M113.2,144.1H66.5c-2.5,0-4.5-2-4.5-4.5v-27.9c0-2.5,2-4.5,4.5-4.5h46.8c2.5,0,4.5,2,4.5,4.5v27.9
			C117.7,142.1,115.7,144.1,113.2,144.1z"/>
		<polygon class="st1" points="95.1,130.5 84.5,125.7 95.1,120.8 		"/>
	</g>
</g>
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
	foreach($page->children()->visible()->sortBy('date',  $page->conf_order()->value() ) as $item): ?>

	<div id="conf<?php echo $i++; ?>" class="bloc cadre" data-date="<?= $item->date() ?>">

		
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
		
		<?php if($item->recapitulatif() == '1'): ?>
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
		<?php endif; ?>

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