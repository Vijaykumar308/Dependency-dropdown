<?php 
	$data = $_GET['state'];
	$pb = array("Amritsar","Jalandhar","Ludhiana","Ambala");
	$uk = array("Dehradun","Kedarnath","Risikash");
	$up = array("Gorakhpur","Lucknow");
	$mh = array("Mumbai","goregao");

	switch ($data) {
		case 'Punjab':
			foreach ($pb as $value) {
				echo "<option> $value </option>";
			}
			break;
		
		case 'Uttarakhand':
			foreach ($uk as $value) {
				echo "<option> $value </option>";
			}
			break;
		case 'Uttar Pradesh':
			foreach ($up as $value) {
				echo "<option> $value </option>";
			}
			break;

		case 'Maharashtra':
			foreach ($mh as $value) {
				echo "<option> $value </option>";
			}
			break;
		default:
			echo "No data found!";
			break;
	}
?>