
<?php
/*
$date =  date('Y-m-d', time());
echo "The value of \$date: ".$date."<br>";

$tar = "2017/05/24";
echo "The value of \$tar: ".$tar."<br>";

$year = array("2012", "396", "300","2000", "1100", "1089");
echo "The value of \$year: ";
print_r($year)
*/


$obj = new main();

class main {

   private $html;

//Start
   public function __construct() {
   
   $date =  date('Y-m-d', time());
   
   $tar = "2017/05/24";
  
   $year = array("2012", "396", "300","2000", "1100", "1089");


//1   
   $this->html .= htmlTags::headingOne("Replace - in \$date with /");
   $this->html .= stringFunctions::replace("-", "/", $date);

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
  
  
  }
?>
