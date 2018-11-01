<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php

class Point
{
    public $x;
    public $y;

    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function getX()
    {
        return $this->x;
    }

    public function setX()
    {
        $this->x;
    }

    public function getY()
    {
        return $this->y;
    }

    public function setY()
    {
        $this->y;
    }

    public function getXY()
    {
        return [$this->x, $this->y];
    }

    public function setXY()
    {
        $this->x;
        $this->y;
    }

    public function toString()
    {
        echo $this->x . "</br>" . $this->y;
    }
}

class MovablePoint extends Point
{
    public $xSpeed;
    public $ySpeed;

    public function __construct($x, $y, $xSpeed, $ySpeed)
    {
        parent::__construct($x, $y);
        $this->xSpeed = $xSpeed;
        $this->ySpeed = $ySpeed;
    }

    public function getXSpeed()
    {
        return $this->xSpeed;
    }

    public function setXSpeed()
    {
        $this->xSpeed;
    }

    public function getYSpeed()
    {
        return $this->ySpeed;
    }

    public function setYSpeed()
    {
        $this->ySpeed;
    }

    public function setSpeed()
    {
        $this->xSpeed;
        $this->ySpeed;
    }

    public function getSpeed()
    {
        return [$this->xSpeed, $this->ySpeed];
    }

    public function toString()
    {
        echo $this->x . "</br>" . $this->y .
            "</br>" . $this->xSpeed . "</br>" . $this->ySpeed;

    }

    public function move()
    {
        $this->x +=$this->xSpeed;
        $this->y +=$this->ySpeed;
        return [$this->x,$this->y];
    }

}
$point = new Point(2,3);
$point->toString()."</br>";
$movablePoint = new MovablePoint(2,3,4,5);
$movablePoint->toString()."</br>";
$movablePoint->move();
?>
</body>
</html>