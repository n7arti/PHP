<?php

require_once __DIR__ . '/vendor/autoload.php';
class Department
{
    public function __construct(array $employees, string $name = "Apelsin")
    {
        $this->employees = $employees;
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getCountEmpoyees(): int
    {
        return count($this->employees);
    }

    public function getSalarySum(): int
    {
        $sum = 0;
        foreach ($this->employees as $item) {
            $sum += $item->getSalary();
        }
        return $sum;
    }
}
