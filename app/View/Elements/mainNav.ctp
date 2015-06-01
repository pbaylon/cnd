<center>
<?php
	echo $this->Html->link(
		'Home',
		array('controller' => 'home')
	);
	echo ' | ';
	echo $this->Html->link(
		'Pets',
		array('controller' => 'Pets')
	);
	// echo ' | ';
	// echo $this->Html->link(
	// 	'Pets',
	// 	array('controller' => 'Pets')
	// );
?>
</center>