<?php

	abstract class Human {
		protected $name;
		protected $surname = 'Не указано';
		protected $birth_date;

		public function __construct(string $name, string $surname){
			$this->name = $name;
			$this->surname = $surname;
		}

		public function setBirthDate(string $birth_date) {
			$this->birth_date = $birth_date;
		}

		public function setBirthDate(int $birth_date) {
			$this->birth_date = date("Y-m-d", $birth_date);
		}

		public function getFullName() : string {
			return $this->name . ' ' . $this->surname;
		}

		public abstract function getRole() : string;
	}

	class Student extends Human {

		public $group;

		public function getFullName() : string {
			return $this->group . ' ' . $this->birth_date . ' ' . parent::getFullName();
		}

		public function getRole() : string {
			return 'Студент';
		}
	}

	/*$ivan = new Human('Ivan', 'Ivanov');

	$peter = new Human('Peter', 'Petrov');

	echo $ivan->getFullName() . "\n";
	echo $peter->getFullName() . "\n";*/

	$student = new Student('Stepan', 'Stepanov');
	$student->group = 'asd123';
	$student->setBirthDate('2004-12-02');


	echo $student->getRole() . "\n";
	echo "Student's name: " . $student->getFullname() . "\n";