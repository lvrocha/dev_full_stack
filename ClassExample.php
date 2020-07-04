<?php

/** 
 * @Desc:  Crie uma classe contendo 3 propriedades com seus respectivos gets e sets e 
 * um método que multiplique as 3 retornando o produto. Deixe um exemplo de utilização 
 * da sua classe no final do código.
 */

class ClassExample
{

    public $firstParam;
    public $secondParam;
    public $thirdParam;

    public function getFirstParam()
    {
        return $this->firstParam;
    }

    public function setFirstParam($firstParam)
    {
        $this->firstParam = $firstParam;

        return $this;
    }

    public function getSecondParam()
    {
        return $this->secondParam;
    }

    public function setSecondParam($secondParam)
    {
        $this->secondParam = $secondParam;

        return $this;
    }

    public function getThirdParam()
    {
        return $this->thirdParam;
    }

    public function setThirdParam($thirdParam)
    {
        $this->thirdParam = $thirdParam;

        return $this;
    }

    public function multiply($param1, $param2, $param3)
    {
        $this->setFirstParam($param1);
        $this->setSecondParam($param2);
        $this->setThirdParam($param3);

        $a = $this->getFirstParam();
        $b = $this->getSecondParam();
        $c = $this->getThirdParam();

        return $a*$b*$c;        
    }
}


$result = new ClassExample;

var_dump($result->multiply(10,9,8));