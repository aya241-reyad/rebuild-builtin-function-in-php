<?php


/*
    Function Accept 3 Parameters
    $string = The String To Repeat [Mandatory]
    $repeat = Repeats Count [Optional] Default = 2
    $space = Space Between Repeated String [Optional] Default = "" //false
    --- Accept Any True Value ["Space", "S", "s", 1, true]
  */


function repeat(string $string,int $repeat=2,bool $space=false){
$result="";
$seperator=$space?" ":"";

for($i=0;$i<$repeat;$i++):
$result.=$string.$seperator;
endfor;


return $result;

}
echo repeat("aya")."<br>";
echo repeat("aya",2)."<br>";
echo repeat("aya",3)."<br>";
echo repeat("aya",3,"s")."<br>";


?>