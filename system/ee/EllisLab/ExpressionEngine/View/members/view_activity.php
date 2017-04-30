<?php $this->extend('_templates/default-nav', array(), 'outer_box'); ?>

<div class="box mb">
	<div class="md-wrap">
		<ul class="list-data">
			<?php foreach ($items as $item => $value): ?>
				<li><b><?=lang($item)?></b> <span><?=($value)?:'&mdash;'?></span></li>
			<?php endforeach; ?>
		</ul>
	</div>
</div>
