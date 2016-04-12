<?php
   class Emp {
      public $name = "";
      public $rollNo = "";
      public $birthdate = "";
      public $percentage = "";
   }
	
   $e1 = new Emp();
   $e1->name = "Mahesh Parashar";
   $e1->rollNo  = 101;
   $e1->birthdate = date('m/d/Y h:i:s a', "8/5/1974 12:20:03 p");
   $e1->percentage = "80%";

   $e2 = new Emp();
   $e2->name = "Dinkar Kad";
   $e2->rollNo  = 201;
   $e2->birthdate = date('m/d/Y h:i:s a', "8/5/1974 12:20:03 p");
   $e2->percentage = "70%";
   
   $e3 = new Emp();
   $e3->name = "Robert";
   $e3->rollNo  = 191;
   $e3->birthdate = date('m/d/Y h:i:s a', "8/5/1974 12:20:03 p");
   $e3->percentage = "75%";
   
   $e4 = new Emp();
   $e4->name = "Julian Joe";
   $e4->rollNo  = 111;
   $e4->birthdate = date('m/d/Y h:i:s a', "8/5/1974 12:20:03 p");
   $e4->percentage = "77%";
   
   $arr = array($e1,$e2,$e3,$e4);
   
   //echo json_encode($e);
   
   //$arr = array('a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5);
   echo json_encode($arr);
?>