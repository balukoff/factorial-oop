<?
 interface IFact{
   function goCalculate(); 
   function view();
 }
 
 class Fact implements IFact{
  private $sum;
  private static $value;
  
  function view(){
   print $this->sum;
  }
  
  function Fact($value){
   $this->value = $value;
   $this->sum = $this->value;
   $this->goCalculate();
   
  }
 
  function goCalculate(){
   $this->value--;
   if ($this->value == 0){ $this->view(); die();}
   $this->sum = $this->sum * ($this->value);
   $this->goCalculate();
  }
 
 }
 $fact = new Fact(5);
?>