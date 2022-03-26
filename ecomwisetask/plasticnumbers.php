<?php

class PlasticNumbers {
public $input;
    function set_input($input) {
        $this->input=$input;
    }
    function get_input(){
        return $this->input;
    }
    function countSets($input) {
        $numbers = str_split(str_replace("9", "6", strval($input)));
        $usedNumbers = array_count_values($numbers);
    
            if (array_key_exists("6", $usedNumbers)) {
                 $usedNumbers["6"] = ceil($usedNumbers["6"] / 2);
            }
        return max($usedNumbers);
      
} }
$n = new PlasticNumbers();
$n->set_input(18734611);
$f = $n->get_input();
echo "You will need ";
echo $n->countSets($f);
echo " sets to write the number ".$f;
?>