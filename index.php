<?php
class Worker {
    public $name;
    private $age;
    public $salary;
    
    public function __construct($name, $age, $salary) {
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
    }
    public function getName(){
	return $this->name;
    }
    public function setAge($newAge){
	if ($this->checkAge($newAge)) {
            $this->age = $newAge;
            echo "Возраст изменен на " . $newAge . "<br>";
        } else {
            echo "Вам работать в нашей компании еще рано<br>";
        }
    }
    public function getAge(){
	return $this->age;
    }
    public function getSalary($workers){
	  $total=0;
	  foreach ($workers as $worker){
		$total+=$worker->salary;
	  }
	  return $total;
    }
    private function checkAge($age){
	if ($age >= 18) {
        return true;
    } else {
        return false;
    }
}
}


$worker1 = new Worker("Иван Петров", 25, 50000);
$worker2 = new Worker("Анна Сидорова", 30, 60000);
$workers = [$worker1, $worker2];

echo "1. " . $worker1->getName() . ", возраст: " . $worker1->getAge() . ", зарплата: " . $worker1->salary . " руб.<br>";
echo "2. " . $worker2->getName() . ", возраст: " . $worker2->getAge() . ", зарплата: " . $worker2->salary . " руб.<br>";

$totalSalary = $worker1->getSalary($workers);
$sumAge = $worker1->getAge() + $worker2->getAge();
echo "Сумма зарплат через getSalary(): " . $totalSalary . " руб.<br>";
echo "Сумма возрастов: " . $sumAge . " лет.<br>";


echo "Меняем возраст worker1 на 16:<br>";
$worker1->setAge(16);
echo "Возраст остался: " . $worker1->getAge() . "<br>";

?>
