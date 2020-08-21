<?php 

namespace App; 

class FizzBuzz
{
    public function forNumber($num)
    {  
       $result = ""; 
       $num % 3 === 0 ? $result .= "Fizz" : ""; 
       $num % 5 === 0 ? $result .= "Buzz" : ""; 
       $num % 7 === 0 ? $result .= "Rarr" : ""; 
       if(!$result) {
           $result .= (string) $num; 
       } 
       return $result;
    }
}