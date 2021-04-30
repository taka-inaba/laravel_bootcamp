<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // class DoublyLinkedList {
        //     private $start = null;
        //     private $end = null;
        //     private $cursor = null;

        //     public function add(Node $node) {
        //         if ($this->start === null) {
        //             $this->start = $node;
        //             $this->end = $node;
        //             return;
        //         }

        //         $this->end->setNext($element);
        //         $element->setPrev($this->end);
        //         $this->end = $node;
        //     }

        //     public function getStart() {
        //         return $this->start;
        //     }

        //     public function getEnd() {
        //         return $this->end;
        //     }

        //     public function getList() {
        //         $this->cursor = $this->start;

                // Only one element
        //         if ($this->start == $this->end) {
        //             echo $this->cursor->getData();
        //         }
        //     }
        // }

        // class Node {
        //     private $data;
        //     private $next;
        //     private $prev;

        //     public function __construct($data) {
        //         $this->data = $data;
        //         $this->next = null;
        //         $this->prev = null;
        //     }

        //     public function setNext($next) {
        //         $this->next = $next;
        //     }

        //     public function setPrev($prev) {
        //         $this->prev = $prev;
        //     }

        //     public function setData($data) {
        //         $this->data = $data;
        //     }

        //     public function getData() {
        //         return $this->data;
        //     }

        //     public function getNext() {
        //         return $this->next;
        //     }

        //     public function getPrev() {
        //         return $this->prev;
        //     }
        // }

        // $list = new DoublyLinkedList();
        // $list->add(new Node("Tantan"));
        
        // $list->getList();


        class Student {
            public static $totalNumberOfStudents;
            public static $numberOfFemaleStudents;
            public static $numberOfMaleStudents;
            private $name;
            private $id;
            private $gender;

            public function __construct($id, $name, $gender) {
                $this->name = $name;
                $this->id = $id;
                $this->gender = $gender;

                if ($gender == "M") {
                    self::$numberOfMaleStudents += 1;
                } else {
                    self::$numberOfFemaleStudents += 1;
                }
                self::$totalNumberOfStudents += 1;
            }
        }

        $st_ahrve = new Student("1", "Ahrve", "M");
        $st_marina = new Student("2", "Marina", "F");
        $st_yutaka = new Student("3", "Yutaka", "M");

        echo Student::$numberOfMaleStudents;
    ?>
</body>
</html>