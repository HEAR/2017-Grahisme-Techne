<div class="caroussel">
    

    <?php 

    $i = 0;
    foreach($pages->visible() as $item): ?>
      

    	<div id="conf<?php echo $i++; ?>" class="cadre">
			<div class="colorBlock"></div>
			<div class="content">
				<h1><?= $item->title()->html() ?></h1>
				<h3><?= $item->date() ?></h3>
				<?php echo $item->text()->kirbytext() ?>

				<p><strong>—<br>
				10 mars 2016 – 18 h<br>
				Auditorium – HEAR à Strasbourg<br>
				1 rue de l’Académie<br>
				67082 Strasbourg</strong></p>

				<video width="320" height="180" id="video-<?= $i ?>" controls>
					<source src="<?= $item->video() ?>"></source>
				</video>
			</div>


			

			<!-- http://mozilla.github.io/popcorn-docs/plugins/#image -->
			<script>

			/*			
			var p = Popcorn( "#video-<?= $i ?>" )
		    <?php foreach($item->slideshow()->toStructure() as $slide): ?>
.image({
		    	start : <?php snippet('timecode2seconds', ['timecode' => $slide->start()->text() ]) ?>,
		    	end : <?php snippet('timecode2seconds', ['timecode' => $slide->end()->text() ]) ?>,
		    	src: '<?= $slide->slide()->url() ?>'
		    })
		    <?php endforeach ?>
.play();*/

		    </script>


		    <hr/>


			<h1>Slideshow</h1>
		    <ul>
		    <?php foreach($item->slideshow()->toStructure() as $slide): ?>
		      <li>
		          <?php snippet('timecode2seconds', ['timecode' => $slide->start()->text() ]) ?> + <?php snippet('timecode2seconds', ['timecode' => $slide->end()->text() ]) ?>
		      </li>
		    <?php endforeach ?>
		    </ul>


			



		</div>
    

    <?php endforeach ?>
</div>
