<?php
trait Test
{
    public function test($value=1){
        return $value;
    }
}

trait trait1
{
    public function test($value=1): int{
        return $value;
    }
}

trait trait2
{
    public function test($value=2):int {
        return $value;
    }
}

trait trait3
{
    public function test($value=3): int {
        return $value;
    }
}

class traintsSum{
    use trait1 , trait2, trait3 {
        trait1::test insteadof trait2;
        trait2::test insteadof trait3;
        trait2::test as getTest2Value;
        trait3::test as GetTest3Value;
    }

    public function getSum(): int
    {
        return $this->test() + $this->getTest2Value() + $this->getTest3Value();
    }


}
$res = new traintsSum();
var_dump($res->getSum());

?>