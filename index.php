<?php
abstract class Figure {
	protected $area;
	protected $color;
	protected $sides;
	abstract public function infoAbout();
}
interface AreaCalcute{
	public function getArea();
}
class Rectangle extends Figure implements AreaCalcute{
	const SIDES_COUNT = 4;
	private $a;
	private $b;
	public function __construct($a, $b){
	   $this->a= $a;
	   $this->b=$b;
	   $this->sides = self::SIDES_COUNT;
	}
	public function getArea(){
	   $this->area = $this->a * $this->b;
	   return $this->area;
	}
	public function infoAbout(){
	   return "Это класс прямоугольника. У него " . $this->sides . " стороны";
	}
}

class Triangle extends Figure implements AreaCalcute{
	const SIDES_COUNT =3;
	private $a;
	private $b;
	private $c;
	public function __construct($a, $b, $c){
	   $this->a=$a;
	   $this->b=$b;
	   $this->c=$c;
	   $this->sides = self::SIDES_COUNT;
	}
	public function getArea(){
	  $p=($this->a + $this->b + $this->c) / 2;
	  $this->area = sqrt($p * ($p - $this->a) * ($p - $this->b) * ($p - $this->c));
	  return $this->area;
	}
	public function infoAbout(){
	return "Это класс треугольника. У него " . $this->sides . " стороны.";
    }

}
class Square extends Figure implements AreaCalcute{
	const SIDES_COUNT = 4;
	private $a;
	public function __construct($a){
           $this->a=$a;
           $this->sides = self::SIDES_COUNT;
	}
	public function getArea(){
	   $this->area = $this->a * $this->a;
	   return $this->area;
	}
	public function infoAbout(){
	   return "Это класс квадрата. У него " . $this->sides . " стороны.";
    }
}
$rectangle1 = new Rectangle(5, 10);
$rectangle2 = new Rectangle(7, 3);
$square1 = new Square(4);
$square2 = new Square(9);
$triangle1 = new Triangle(3, 4, 5);
$triangle2 = new Triangle(5, 5, 6);
echo "Прямоугольники:<br>";
echo "<p>" . $rectangle1->infoAbout() . " Площадь: " . $rectangle1->getArea() . "</p>";
echo "<p>" . $rectangle2->infoAbout() . " Площадь: " . $rectangle2->getArea() . "</p>";

echo "Квадраты:<br>";
echo "<p>" . $square1->infoAbout() . " Площадь: " . $square1->getArea() . "</p>";
echo "<p>" . $square2->infoAbout() . " Площадь: " . $square2->getArea() . "</p>";

echo "Треугольники:<br>";
echo "<p>" . $triangle1->infoAbout() . " Площадь: " . round($triangle1->getArea(), 2) . "</p>";
echo "<p>" . $triangle2->infoAbout() . " Площадь: " . round($triangle2->getArea(), 2) . "</p>";
?>
