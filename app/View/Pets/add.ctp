<form action="../pets/add" method="POST" >
	<?php
	echo $this->Form->input('name');

	echo $this->Form->input(
	    'species',
	    array('options' => $species)
	);

	echo $this->Form->input(
	    'breed',
	    array('options' => $breeds)
	);

	$sizes = array('Male' => 'Male', 'Female' => 'Female');
	echo $this->Form->input(
	    'sex',
	    array('options' => $sizes, 'default' => 'Male')
	);

	echo $this->Form->input(
		'date of birth',
		array(
			'name' => 'data[dob]'
		)
	);
	?>
	<input type="submit" />
</form>