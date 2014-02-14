<?php

	// list of famous peeps
	$physicists_string = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

	// changing $physicists_string into an array
	$physicists_array = explode(', ', $physicists_string);

	// removing last item in $physicists_array
	array_pop($physicists_array);

	// adding item to the end of $physicists_array
	array_push($physicists_array, 'and Tony Stark');

	// converting $physicists_array to a string
	$famous_fake_physicists = implode(', ', $physicists_array);

	// outputting to the screen
	echo "Some of the most famous fictional theoretical physicists are {$famous_fake_physicists}." . PHP_EOL;












?>