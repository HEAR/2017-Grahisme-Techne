<?php snippet('header') ?>


<?php 
	$mention['aucune']  = "";
	$mention['english']  = "conférence en anglais";
    $mention['allemand'] = "conférence en allemand";

 ?>


<div class="caroussel">

	<?php 

	$i = 0;
	foreach($page->children()->visible() as $item): ?>

	<div id="conf<?php echo $i++; ?>" class="cadre">

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



	</div>


<?php endforeach ?>
</div>



<?php snippet('footer') ?>