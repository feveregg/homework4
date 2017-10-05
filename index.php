<?php

$obj = new main();

class main {

   private $html;

//Start
   public function __construct() {
   
   $date =  date('Y-m-d', time());
   $tar = "2017/05/24"; 
   $year = array("2012", "396", "300", "2000", "1100", "1089");
   

//2   
   $this->html .= htmlTags::headingOne(" Replace - in \$date with /");
   $this->html .= stringFunctions::replace("-", "/", $date);
   $this->html .= htmlTags::horizontalRule();

//3
   $this->html .= htmlTags::headingOne(" Compare \$date with \$tar");
   $this->html .= ifFunction::ifElse(strtotime($date)-strtotime($tar)>0, "the future", 
    strtotime($date)-strtotime($tar)<0, "the past", strtotime($date)-strtotime($tar)==0, "Oops!");
   $this->html .= htmlTags::horizontalRule();

//4
   $newDate = stringFunctions::replace("-", "/", $date);
   $this->html .= htmlTags::headingOne(" Search for / in \$date");
   $this->html .= stringFunctions::searchFunction($newDate, "/");
   $this->html .= htmlTags::horizontalRule();

//5
   $this->html .= htmlTags::headingOne(" Count the number of words");
   $this->html .= stringFunctions::sizeFunction(stringFunctions::explodeFunction("/", $newDate));
   $this->html .= htmlTags::horizontalRule();

//6
   $this->html .= htmlTags::headingOne(" Return the length of a string");
   $this->html .= stringFunctions::stringLength($date);
   $this->html .= htmlTags::horizontalRule();


//7
   $this->html .= htmlTags::headingOne(" Return the ASCII value of the first character");
   $this->html .= stringFunctions::ordFunction($newDate);
   $this->html .= htmlTags::horizontalRule();


//8
   $this->html .= htmlTags::headingOne(" Return the last two characters");
   $this->html .= stringFunctions::subString($date, -2);
   $this->html .= htmlTags::horizontalRule();
   

//9
   $this->html .= htmlTags::headingOne(" Break \$date ");
   $array = stringFunctions::explodeFunction("/", $newDate);
 //  $this->html .= stringFunctions::printThis1($array, true);
   $this->html .= stringFunctions::implodeFunction(" ", $array);
   $this->html .= htmlTags::horizontalRule();



//10 
   $this->html .= htmlTags::headingOne(" Leap Year foreach ");
   $this->html .= loop::leapyear($year);
//   $this->html .= stringFunctions::printThis1($year, true);
   $this->html .= htmlTags::horizontalRule();


//11
   $this->html .= htmlTags::headingOne(" Leap Year for ");
   $this->html .= loop::leapyear2($year);




   }

   

//End   
   public function __destruct() {   
   
   $this->html .= stringFunctions::printThis($this->html);
  
   }

   
}



  class htmlTags {

    static public function horizontalRule() {

    return "</br><hr>";

    }


    static public function headingOne($input) {

    return "<h1>  $input  </h1>";

    }
  
    

  }



  class stringFunctions {

    static public function printThis ($input) {
    
    return print_r($input);
    
    }

//print_r true
     static public function printThis1 ($input1, $input2) {

     return print_r($input1, $input2);

    }



    static public function replace ($input1, $input2, $input3) {
    
    return str_replace($input1, $input2, $input3);
    
    }
  
    
    static public function countWord ($input) {
    
    return str_word_count($input);
    
    }

    
    static public function stringLength ($input) {
    
    return strlen($input);
    
    }


    static public function ordFunction ($input) {
    
    return ord($input);
    
    }


    static public function subString ($input1, $input2) {
    
    return substr($input1, $input2);
    
    }


    static public function explodeFunction ($input1, $input2) {
    
    return explode($input1, $input2);
    
    }


    static public function print_rFunction ($input) {
    
    return print_r($input);
    
    }

    
    static public function sizeFunction ($input) {
    
    return sizeof($input);
    
    }



    static public function arrayValues ($input) {
    
    return array_values($input);
    
    }


    static public function searchFunction ($input1, $input2) {
    
    $positions = array();
    $pos = -1;
    while (($pos = strpos($input1, $input2, $pos+1)) !== false) {
    
        $positions[] = $pos;

    }
    
    $result = implode(" ", $positions);
    return $result;

    }
    


    static public function implodeFunction ($input1, $input2) {
    
    return implode($input1, $input2);
    
    }

  }



  class ifFunction {
  
     static public function ifElse ($input1, $output1, $input2, $output2, $input3, $output3) {
     
     if ($input1) {

                return $output1;
     } elseif ($input2) {
     
                return $output2;
     } elseif ($input3) {
     
                return $output3;
     }
     
     }
  }


  class loop {
  
     static public function leapyear ($input) {
     $aaa = "";
     
     foreach ($input as $y) {
     
     switch((($y % 4) == 0) && ((($y % 100) != 0) || (($y % 400) == 0))) {
     
     
     
     case 1: $aaa .= "True </br>";
     break;
     default: $aaa .= "False </br>";
   
     }
     
     
     }
     return $aaa;
     
  }  



    static public function leapyear2 ($input) {
    $aaa = "";

    for($i = 0; $i < sizeof($input); $i++) {
    
    switch((($input[$i] % 4) == 0) && ((($input[$i] % 100) != 0) || (($input[$i] % 400 == 0)))) {
    
    case 1: $aaa .= "True </br>";
    break;
    default: $aaa .= "False </br>";
    
    }
    
    }
    
    return $aaa;
    }





}


























?>
