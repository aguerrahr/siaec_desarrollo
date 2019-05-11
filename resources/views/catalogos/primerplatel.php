<h1>CURD Plan de estudios</h1>
<h2><?= e($title) ?></h2>
<ul>
	<?php foreach ($planes as $plan):?>
		<li><?= e($plan) ?></li>
	<?php endforeach;?>
</ul>