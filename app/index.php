<?php
namespace App;
use App\Calculator;

class Index {
    public $calculator;

    public function __construct(Calculator $calculator){
        $this->calculator = $calculator;
    }

    public function display(){
        $result = $this->calculator->add(24,24);

        echo $result;
    }
}
    
    $indexInstance = new Index();

    $indexInstance->display();