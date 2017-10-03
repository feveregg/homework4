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
   $this->html .= htmlTags::headingOne("2. Replace - in \$date with /");
   $this->html .= stringFunctions::replace("-", "/", $date);
   $this->html .= htmlTags::horizontalRule();

//3
   $this->html .= htmlTags::headingOne("3. Compare \$date with \$tar");
   $this->html .= ifFunction::ifElse(strtotime($tar)-strtotime($date)>0, "the future", 
    strtotime($tar)-strtotime($date)<0, "the past", strtotime($tar)-strtotime($date)==0, "Oops!");
   $this->html .= htmlTags::horizontalRule();

//4
   $newDate = stringFunctions::replace("-", "/", $date);
   $this->html .= htmlTags::headingOne("4. Search for / in \$date");
   $this->html .= htmlTags::horizontalRule();

//5
   $this->html .= htmlTags::headingOne("5. Count the number of words");
   $this->html .= stringFunctions::countWord($date);
   $this->html .= htmlTags::horizontalRule();

//6
   $this->html .= htmlTags::headingOne("6. Return the length of a string");
   $this->html .= stringFunctions::stringLength($date);
   $this->html .= htmlTags::horizontalRule();



   }

   

//End   
   public function __destruct() {
   
   $this->html .= stringFunctions::printThis($this->html);
   }

   
}



  class htmlTags {

    static public function horizontalRule() {

    return "<hr>";

    }


    static public function headingOne($input) {

    return "<h1>  $input  </h1>";

    }
  

  }



  class stringFunctions {

    static public function printThis ($input) {
    
    return print($input);
    
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
  }



  class ifFunction {
  
     static public function ifElse ($input1, $output1, $input2, $output2, $input3, $output3) {
     
     if ($input) {

                return $output1;
     } elseif ($input2) {
     
                return $output2;
     } elseif ($input3) {
     
                return $output3;
     }
     
     }


/*  
  class loopFunction {
  
     static public function whileFunction ($input1, $input2) {
     
     while($input1) {
     
     return $input2; 
    
    } 
     
     }
  
  }

  class otherFunctions {


     static public function compareDate () {
     
     return strtotime($tar)-strtotime($date);
     
     }
*/ 
 
 } 






?>
