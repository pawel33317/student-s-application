<?php
class Point{
	function __construct($name,$xPosition,$yPosition) {
       	$this->name = $name;
		$this->xPosition = $xPosition;
		$this->yPosition = $yPosition; 
   }
}
$pointList = array(new Point('Index',51.7515135,19.4560986), new Point('Cotton',51.7465975,19.4505775), new Point('Futurysta',51.7474686,19.4500012), new Point('Biblioteka',51.7654152,19.4546682));
echo json_encode($pointList)
?>