<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class practiceController extends Controller
{
    //
 public function findDuplicateElement(){
$arr=[3,4,5,6,3,4,4,5];
$originalArray=$arr;
for($i=1;$i<count($arr);$i++){
 $key=$arr[$i];
  $j=$i-1;
  while($j>=0 && $arr[$j]>$key){
    $arr[$j+1]=$arr[$j];
      $j--;
    }
  $arr[$j+1]=$key;
  
}

/*foreach($arr as $list){
echo $list." ";
}*/

return view("array",compact("originalArray","arr"));
    }



    public function reverseArray(){
    	$arr=[3,4,5,6,3,4,4,5];

		for($i=count($arr);$i>=0;$i--){
		echo $arr[$i]." ";
  
          }
    }



public function countEvenOdd(){
 $arr=[3,4,5,6,3,4,4,5];
$even=0;
$odd=0;
for($i=count($arr)-1;$i>=0;$i--){
  if($arr[$i]%2==0){
    //  echo "Even Elements ".$arr[$i]."\n";
    $even++;
    }
  else{
     // echo "Odd Elements ".$arr[$i]."\n";
      $odd++;
    }
  
}
echo "\nOdd Elements ".$odd." Even Elements ".$even;
}


public function countEvenOdd2(){
 $arr=[3,4,5,6,3,4,4,5];
$even=0;
$odd=0;
for($i=count($arr)-1;$i>=0;$i--){
  if($arr[$i]%2==0){
    //  echo "Even Elements ".$arr[$i]."\n";
    $even++;
    }
  else{
     // echo "Odd Elements ".$arr[$i]."\n";
      $odd++;
    }
  
}
echo "\nOdd Elements ".$odd." Even Elements ".$even;
}

public function countFrequencyOfElement(){
   $arr=[5,10,2,5,50,5,10,1,2,2]; $freq=$arr;
    $size=count($arr);
    for($i=0;$i<$size;$i++){
      $count=1;
     for($j=$i+1;$j<$size;$j++){
         if($arr[$i]==$arr[$j]){
             $count++;
             $freq[$j]=0;
         }
     }
     if($freq[$i]!=0){
        $freq[$i]=$count; 
     }
  
          }
         for($i=0;$i<count($arr);$i++){
          if($freq[$i]!=0){
              echo $arr[$i]."=> ".$freq[$i]."<br>";
            }
          }
}


public function printUniqueElementorRemoveDuplicate(){
$arr=[5,10,2,5,50,5,10,1,2,2]; $freq=$arr;
$size=count($arr);
for($i=0;$i<$size;$i++){
 for($j=$i+1;$j<$size;$j++){
     if($arr[$i]==$arr[$j]){
         $freq[$j]=0;
     }
 }
}
 for($i=0;$i<count($arr);$i++){
  if($freq[$i]!=0){
      echo $freq[$i]."<br>";
    }
  }


          $u="5";
          echo $u*"12";
}

public function FindMinAndMaxElement(){
$arr=[-10,10,0,20,-2,50,100,20,-1,10];$size=count($arr);
$max=$arr[0];$min=$arr[0];
for($i=0;$i<$size;$i++){
  if($arr[$i]>$max){
    $max=$arr[$i];
  }
  else if($arr[$i]<$min){
$min=$arr[$i];
  }
}
echo "Minimum Element ".$min." Maximum Element ".$max;
}


public function searchElement(){
$arr=[-10,10,0,20,-2,50,100,20,-1,10];$size=count($arr);
$found=false;
$search=-10;$index="";
for($i=0;$i<$size;$i++){
  if($arr[$i]==$search){
    $found=true;$index=$i;
    break;
  }
 
}
if($found){
  echo $search." Found Element at position ".$index;
}
else{
  echo "Not Found Element ".$search;
}
$this->StarRectangle();
$this->HollowStarRectangle();
$this->HollowStarRectangleWithDiagonal();
}


public function StarRectangle(){
$size=5;echo "<br>";
for($i=0;$i<$size;$i++){
  for($j=0;$j<$size;$j++){
     echo "*";
  }
  echo "<br>";
 
}

}

public function HollowStarRectangle(){
$size=5;echo "<br>";
for($i=0;$i<$size;$i++){
  for($j=0;$j<$size;$j++){
    if($i==0 || $i==$size-1||$j==0 || $j==$size-1){
     echo "*";
   }
  else{
    echo "&nbsp;&nbsp;";
  }

    }
      echo "<br>";
  }

 
}


public function HollowStarRectangleWithDiagonal(){
$size=5;echo "<br>";
for($i=1;$i<=$size;$i++){
  for($j=1;$j<=$size;$j++){
    if($i==1 || $i==$size||$j==1 || $j==$size||$i==$j||$j==($size-$i+1)){
     echo "*";
   }

  else{
    echo "&nbsp;&nbsp;";
  }

    }
      echo "<br>";
  }

// $this->RhombusStar();
}



public function RhombusStar(){
$size=5;echo "<br>";
for($i=1;$i<=$size;$i++){
  $k=$size-$i;
  while($k>=1){
    echo "&nbsp;&nbsp;";
    $k--;
  }
 
  for($j=1;$j<=$size;$j++){
     echo "*";
    }
      echo "<br>";
  }

  $this->MirrorRhombusStar();
}


public function MirrorRhombusStar(){
$size=5;//echo "<br>";
for($i=1;$i<=$size;$i++){
  $k=1;
  while($k<=$i){
    echo "&nbsp;&nbsp;";
    $k++;
  }
 
  for($j=1;$j<=$size;$j++){
     echo "*";
    }
      echo "<br>";
  }

 
}



public function diamondStar(){
$size=9;echo "<br>";$star=1;$space=10;
for($i=1;$i<=$size*2;$i++){ 
  for($j=1;$j<=$space;$j++){
     echo "&nbsp;&nbsp;";
    }
    for($j=1;$j<=$star*2-1;$j++){
     echo "*";
    }
      echo "<br>";
      if($i<$size){
        $space--;
        $star++;
      }
      else{
         $star--;
        $space++;
      }
  }

$this->hollowDiamondStar(); 
}


public function hollowDiamondStar(){
$size=9;echo "<br>";$star=1;$space=$size*2;
for($i=1;$i<=$size*2;$i++){ 
  for($j=1;$j<=$size*2;$j++){
     echo "*";
    }
    for($j=1;$j<=$star*2-1;$j++){
     echo "&nbsp;&nbsp;";
    }
      echo "<br>";
      if($i<$size){
        $space=$space-2;
        $star++;
      }
      else{
         $star--;
        $space=$space+2;
      }
  }
}
 //Ascii value for A-Z Capital letters (65-90) and for a-z small letters (95-122)
 public function reverseStringWithoutreversingSpecailcharacter(){
  $str='a,b$c';
  $str2=$str;$r=strlen($str)-1;$l=0;

 while ($r>=$l) {
 /* if(!$this->checkAlphabet($str[$l])){
    $l++;
  }

  elseif(!$this->checkAlphabet($str[$r])){
    $r--;
  }*/
   if(!ctype_alpha($str[$l])){
    $l++;
  }

  elseif(!ctype_alpha($str[$r])){
    $r--;
  }
   else{
    $temp=$str[$r];
    $str[$r]=$str[$l];
    $str[$l]=$temp;
    $l++;$r--;
   }
   
 }

 echo "Original ".$str2." reverse without affecting special characters ".$str;
 }

//PHP inbuild ctype_alpha() check alphabet or not
public function checkAlphabet($string){
  if($string<='z'&&$string>='a' || $string<='Z'&&$string>='A'){
    return true;
  }
  else{
    return false;
  }
}


}
