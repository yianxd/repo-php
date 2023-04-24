<?php
class super{
    public int $v1;
    public function __construct(int $v1)
    {
        $this->v1=$v1;
    }
    public function getV(): string
    {
        return $this->v1;
    }
    public function setV(int $v1): void
    {
        $this->v1=$v1;
    }

}
$ob=new super(100);
var_dump($ob->getV());
$ob->setV(25)
?>