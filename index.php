<?php
class Fruit
{
    public $color;
    public $sliced;
    public $slices;

    public function __construct(string $color = null, bool $sliced = false, int $slices = 1)
    {
        $this->color = $color;
        $this->sliced = $sliced;
        $this->slices = $slices;
    }

    public function sliceFruit()
    {
        $this->sliced = true;
        $this->slices = $this->slices * 2;
    }

    public function getColor()
    {
        echo "The fruit's color is $this->color";
    }
}

class RipeFruit extends Fruit
{
    public $isRipe;

    public function __construct()
    {
        $this->isRipe=true;
    }
}

class PrivateUser
{
    private $name;
    private $age;

    public function __construct(string $name="John Doe", int $age=30)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function getName()
    {
        echo $this->name;
    }

    public function getAge()
    {
        echo $this->age;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function setAge(int $age)
    {
        $this->age = $age;
    }
}
?>