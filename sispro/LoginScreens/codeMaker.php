<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of codeMaker
 *
 * @author Hakan Oğuz Vural 
  14011610
 */
class codeMaker {
    //put your code here
    
    function numberToLetter($num){
    switch ($num){
        case 1:
            return 'A';
        case 2:
            return 'B';
        case 3:
            return 'C';
        case 4:
            return 'D';
        case 5:
            return 'E';
        case 6:
            return 'F';
        case 7:
            return 'G';
        case 8:
            return 'H';
        case 9:
            return 'I';
        case 10:
            return 'J';
        case 11:
            return 'K';
        case 12:
            return 'L';
        case 13:
            return 'M';
        case 14:
            return 'N';
        case 15:
            return 'O';
        case 16:
            return 'P';
        case 17:
            return 'R';
        case 18:
            return 'S';
        case 19:
            return 'T';
        case 20:
            return 'U';
        case 21:
            return 'W';
        case 22:
            return 'X';
        case 23:
            return 'Q';
        case 24:
            return 'V';
        case 25:
            return 'Y';
        case 26:
            return 'Z';
        default:
            return '';
    }
   
}

function cripto(){
   $letNum1 = rand(1, 26);
   $letNum2 = rand(1, 26);
   $letNum3 = rand(1, 26);
   $number1 = rand(10, 99);
   $number2 = rand(10, 99);
   $number3 = rand(10, 99);
   
   $letter1 = $this->numberToLetter($letNum1);
   $letter2 = $this->numberToLetter($letNum2);
   $letter3 = $this->numberToLetter($letNum3);
   
   $code = $letter1."".$letter2."".$number1."".$letter2."".$letter3."".$number2."".$letter3."".$letter1."".$number3;
   
   return $code;
}
    
}
