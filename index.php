<?php

$obj = new main();

class main {

   private $html;

//Start
   public function __construct() {
   
   $date =  date('Y-m-d', time());
   $tar = "2017/05/24"; 
   $year = array("2012", "396", "300","2000", "1100", "1089");
   

//2   
   $this->html .= htmlTags::headingOne(" Replace - in \$date with /");
   $this->html .= stringFunctions::replace("-", "/", $date);
   $this->html .= htmlTags::horizontalRule();

//3
   $this->html .= htmlTags::headingOne(" Compare \$date with \$tar");
   $this->html .= ifFunction::ifElse(strtotime($tar)-strtotime($date)>0, "the future", 
    strtotime($tar)-strtotime($date)<0, "the past", strtotime($tar)-strtotime($date)==0, "Oops!");
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
  
     static public function forFunction ($input) {
    
      $aa = str_split($input);

     for ($i = 0; $i < sizeof($aa) ; $i++ ) {
     
      if($aa[$i] == "/") {
      
      return $i. " ";
      
      }

     }
     
     }
  
  }  




























?>
