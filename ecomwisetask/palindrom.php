<?php
class MakeAPalindrom{  
    public $s;
    function set_s($s) {
        $this->s=$s;
    }
    function get_s(){
        return $this->s;
    } 
    function makeit($s) {
        $n = strlen($s);
        $cc = 0;
  
        for($i=0;$i<$n/2;$i++)
            {
            if($s[$i]== $s[$n-$i-1])
            continue;
            
            $cc+= 1;

            if($s[$i]<$s[$n-$i-1])
            $s[$n-$i-1]= $s[$i] ;

             else
            $s[$i]= $s[$n-$i-1] ;
            }
            echo " is: ".$s;
} }
$objs = new MakeAPalindrom();
$objs->set_s("qwerty");
$strget = $objs->get_s();
echo "The palindrom of the entered string ".$strget;
echo $objs->makeit($strget);

?>