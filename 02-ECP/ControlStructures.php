<?php

class ControlStructure {

    public function switchFunction(/*Integer*/ $v1) {
        switch ($v1) {
            case 1:
                // Do something
                break;
            case 2:
                // Do something
                break;
            case 3:
                // Do something
                break;
            case 4:
                // Do something
                break;
            case 5:
                // Do something
                break;
            default:
                // Do something
        }          
    }
    
    public function ifFunction(/*Integer*/ $v1) {
        if ($v1 > 10) {
            // Do something
        }
        // Do something
    }
    
    public function rangeFunction(/*Integer*/ $v1) {
        if ($v1 >= 1 && $v1 < 10) {
            // Do something
        } else if ($v1 >= 10 && $v1 < 25) {
            // Do something  
        } else if ($v1 >= 20) {
            // Do something
        } else {
            // Do something
        }
    }
    
    public function variableRanges(/*Integer*/ $v1, /*Integer*/ $numRanges) {
        for ($i = 0; $i < $numRanges; $i++) {
            $min = 10 * $i;
            $max = $min + 10;
            if ($v1 >= $min && $v1 < $max) {
                // Do something
            }
        }
    }
}