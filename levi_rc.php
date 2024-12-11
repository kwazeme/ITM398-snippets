<?php
echo '$inputString = ' . $inputString . '<br>';

//get_closest_match
//echo 'aaaaaH';

// Query to fetch possible values from a specific field in databse table
$sql = "SELECT id_number"
   . " FROM contact";
sc_lookup(rs, $sql);


//initialise dataset array
//this adds all database table values into an array to be compared with the user input string.
$dataset = array();

if (isset({rs}) && !empty({rs})) {
	for ($i = 0; $i < count({rs}); $i++) {
		$dataset[] = {rs}[$i][0];
		//echo " record number  '$i': '$dataset[$i]' <hr>";
		}
	}
// return $dataset;

//check
//$source_array = implode(', ', array_column($dataset, 'value'));
//echo "data set '$source_array'";
//foreach ($dataset as $value) {
//    echo $value . " <hr>";
//}

  //  $closestMatches = [];
  // $minDistance = PHP_INT_MAX;
	$minDistance = 10;
 $matches = array();
 $closestMatches = array();
    foreach ($dataset as $rowId => $value) { 
		//echo " $rowId : $value <hr> ";
        $distance = levenshtein($inputString, $value);
		//echo "$distance ";
		//echo "original $minDistance";
        if ($distance < $minDistance) {
           $minDistance = $distance;
			//echo "new $minDistance <hr>";
            $closestMatches = [[
                'row_id' => $rowId,
                'value' => $value,
                'distance' => $distance,
                'distance_percentage' => round(($distance / max(strlen($inputString), strlen($value))) * 100, 0),
            ]];
			$matches += $closestMatches;
			
        } /* elseif ($distance === $minDistance) {
            $closestMatches[] = [
                'row_id' => $rowId,
                'value' => $value,
                'distance' => $distance,
                'distance_percentage' => round(($distance / max(strlen($inputString), strlen($value))) * 100, 0),
            ];
        }*/
    }	
//var_dump($matches);
echo "the closest matches are: <hr>";	
foreach ($closestMatches as $row) {
	foreach ($row as $column => $value) {
		echo $column . " : " . $value . "<br>";
		/*echo "Record_id: <br>
			Value:  <br>
			Percentage: <hr>";*/
		}
	echo "% <hr>";
	}