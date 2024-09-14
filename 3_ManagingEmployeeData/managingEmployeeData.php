<?php
class employee {
    private $name;
    private $salary;   
    public function __construct(string $name, int $salary)
    {
        $this->name = $name;
        $this->setSalary($salary);
    }
    public function getName():string{
        return $this->name;
    }
    public function getSalary():int{
        return $this->salary;
    }

    public function setSalary(int $salary)
    {
        if($salary >=0){
            $this->salary =$salary;
        }else{
            throw new Exception("Salary cannot be negative!");          
        }
    }
}
try {
    $employee =new Employee("Jannatul Faria", 30000);
    echo "Employee name " . $employee->getName() . PHP_EOL ;
    echo "Employee Salary " . $employee->getSalary() . PHP_EOL ;
} catch (\Throwable $th) {
    echo "". $th->getMessage() . PHP_EOL ;
}
?>