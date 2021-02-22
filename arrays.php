<?php

$people = array();

$bob = new stdClass();
$bob->name = "Bob";
$bob->age = 26;
$bob->weight = 137.4;
$bob->height = 75;
$sam = new stdClass();
$sam->name = "Sam";
$sam->age = 31;
$sam->weight = 120.4;
$sam->height = 68;
$bertha = new stdClass();
$bertha->name = "bertha";
$bertha->age = 86;
$bertha->weight = 97.1;
$bertha->height = 56;


$people[] = $bob;
$people[] = $sam;
$people[] = $bertha;


?>


<h2>People In Line (<?php echo count($people); ?>)</h2>
<table>
	<thead>
		<?php foreach($people as $person): ?>
			<tr>
				<?php foreach($person as $key => $value): ?>
					<th><?php echo $key; ?></th>
				<?php endforeach; ?>
			</tr>
			<?php break; ?>
		<?php endforeach; ?>
	</thead>
	<tbody>
		<?php foreach($people as $person): ?>
			<tr>
				<?php foreach($person as $key => $value): ?>
					<td><?php echo $value; ?></td>
				<?php endforeach; ?>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>
