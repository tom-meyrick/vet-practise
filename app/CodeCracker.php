<?php 

namespace App; 
use Illuminate\Support\Collection;

class CodeCracker
{
    private $cypherDictionary; 

    public function __construct($cypher)
    {
        $this->cypherDictionary = $this->createDictionary($cypher);
    }

    private function createDictionary($cypher)
    {
        $newArr = [" " => " "]; 
        $cypherArr = str_split($this->stripSpaces($cypher));
        for($i = 0; $i < 26; $i += 1) {
            $asciiKey = chr(97 + $i); 
            $newArr[$cypherArr[$i]] = $asciiKey;
        } 
        return $newArr; 
    }

    public function stripSpaces($text)
    {
        return preg_replace('/\s/', '', $text);
    }
 
    public function decrypt($word)
    {   
        $wordArr = str_split($word); 
        $cracked = ""; 
        foreach($wordArr as $letter) {
            $cracked .= $this->cypherDictionary[$letter]; 
        } 
        return $cracked;
    }
}


