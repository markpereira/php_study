<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Array Functions</title>
	</head>
	<body>
		<?php $numbers = array(8,23,15,42,16,4); ?>
		
		Count: 				<?php echo count($numbers); ?><br />
		Max value: 		<?php echo max($numbers); ?><br /> 
		Min Value:		<?php echo min($numbers); ?><br />
		<br />
		
		<pre>
		Sort: 				<?php echo sort($numbers); print_r($numbers); ?><br />
		Reverse Sort:	<?php echo rsort($numbers); print_r($numbers); ?><br />
		</pre>
		<br />

		Implode: <?php echo $num_string = implode(" * ", $numbers); ?><br />
		Explode: <?php print_r(explode(" * ", $num_string)); ?><br />
		<?php // use implode to turn csv into array ?>
		<br />

		15 in array?: <?php echo in_array(15, $numbers); // returns T/F ?><br />
		19 in array?: <?php echo in_array(19, $numbers); // returns T?F ?><br />
		<br />
		
		<pre>
		Values only: <?php print_r(array_values($numbers)); ?><br />
		</pre>
		<br />
		
		<pre>
		Keys only: <?php print_r(array_keys($numbers)); ?><br />
		</pre>
		<br />
		<pre>
		Shuffle:	
			<?php 
			shuffle($numbers);
			foreach ($numbers as $number) {
				echo "$number ";
			}	
			?>
		</pre>	

	</body>
</html>		
