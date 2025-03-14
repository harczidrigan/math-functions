 <?php
function math_functions(){
  //Mathematical Functions
 function add($a,$b){
   $sum=$a+$b;
    return $sum;
}
function subtract($a,$b){
  $diff=$a-$b;
     return $diff;
}
function multiply($a,$b){
  $product=$a*$b;
      return $product;
}
function divide($a,$b){
   if($b!=0){
  $ratio=$a/$b;
    return $ratio;
   }else{
     echo "Sorry, division by zero is not allowed!";
  }
}
}
?>