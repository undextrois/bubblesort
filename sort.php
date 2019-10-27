<?php
function _sort($n)
{
  for( $x=0; $x<count($n); $x++)
  {
    for( $y=0; $y < count($n) - 1; $y++)
    {
      if($array[$y]>$array[$y+1])
      {
         $temp = $array[$y+1];
         $array[$y+1] = $array[y];
         $array[$y] = $temp;
         
      }
    }
  }
return $array;
}
//$m = array(5,4,3,2,1);
//$_a = _sort($m);
//print_r($_a);

$_m = NULL;
$_p = "";
echo "<br>NULL : ".$_m;
echo "<br>=>   : ".$_p;
?>
