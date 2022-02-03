<?php
namespace App\classes;
class Student
{
    protected $text;
    protected $students;
    protected $result = [];
    public function __construct($data=null)
    {
        if (isset($data['search']))
        {
            $this->text = $data['search'];
        }
    }

    public function getAllStudent()
    {
        return [
            0 => [
                'name' => 'Nur E Nasib',
                'mobile' => '45246657',
                'email' => 'nur@gmail.com',
                'address' => 'Panthapath'
            ],
            1 => [
                'name' => 'Ohahiduzzaman',
                'mobile' => '4524642',
                'email' => 'murgi@gmail.com',
                'address' => 'mirpur'
            ],
            2 => [
                'name' => 'Fardin Shuvo',
                'mobile' => '34543545',
                'email' => 'far@gmail.com',
                'address' => 'jamalpur'
            ],
            3 => [
                'name' => 'Rahat fateh Ali',
                'mobile' => '5645654',
                'email' => 'rahat@gmail.com',
                'address' => 'lalbag'
            ],
            4 => [
                'name' => 'Fahim',
                'mobile' => '45765676',
                'email' => 'fahim@gmail.com',
                'address' => 'rampura'
            ],
            5 => [
                'name' => 'Mahmud',
                'mobile' => '456745767',
                'email' => 'mahmud@gmail.com',
                'address' => 'dhanmondi'
            ]
        ];
    }
    public function getStudentBySearchText()
    {
        $this->students = $this->getAllStudent();
        foreach ($this->students as $student)
        {
            if ($this->text == $student['name'])
            {
                $this->result = $student;
                break;
            }
        }
        return $this->result;
    }
}