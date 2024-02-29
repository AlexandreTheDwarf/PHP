<?php
class Student {
    public $name;
    public $grade;

    public function __construct($name, $grade) {
        $this->name = $name;
        $this->grade = $grade;
    }
}

class Group {
    public $students = [];

    public function __construct($students) {
        $this->students = $students;
    }

    public function averageScore() {
        $total = 0;
        foreach ($this->students as $student) {
            $total += $student->grade;
        }
        return $total / count($this->students);
    }

    public function moveStudentToGroup(Student $student, Group $destinationGroup) {
        $key = array_search($student, $this->students);
        if ($key !== false) {
            // Remove student from the current group
            unset($this->students[$key]);
            $this->students = array_values($this->students);

            // Add student to the destination group
            $destinationGroup->students[] = $student;
        }
    }

    // Function to find the top student in a group
    function findTopStudent(Group $group) {
        $topStudent = null;
        $topScore = -1;

        foreach ($group->students as $student) {
            if ($student->grade > $topScore) {
                $topScore = $student->grade;
                $topStudent = $student;
            }
        }

        return $topStudent;
    }

    // Function to find the lowest scoring student in a group
    function findLowestScoringStudent(Group $group) {
        $lowestStudent = null;
        $lowestScore = PHP_INT_MAX;

        foreach ($group->students as $student) {
            if ($student->grade < $lowestScore) {
                $lowestScore = $student->grade;
                $lowestStudent = $student;
            }
        }

        return $lowestStudent;
    }

}

// Create students for group 1
$group1_students = [];
$group1_students[] = new Student("Naruto", 28);
$group1_students[] = new Student("Luffy", 65);
$group1_students[] = new Student("Goku", 82);
$group1_students[] = new Student("Sasuke", 75);
$group1_students[] = new Student("Vegeta", 90);
$group1_students[] = new Student("Ichigo", 73);
$group1_students[] = new Student("Saitama", 48);
$group1_students[] = new Student("Zoro", 70);
$group1_students[] = new Student("Light", 85);
$group1_students[] = new Student("Lelouch", 80);
$group1_students[] = new Student("Edward", 75);
$group1_students[] = new Student("Alphonse", 62);
$group1_students[] = new Student("Eren", 30);
$group1_students[] = new Student("Mikasa", 85);
$group1_students[] = new Student("Gon", 68);
$group1_students[] = new Student("Killua", 75);
$group1_students[] = new Student("Natsu", 52);
$group1_students[] = new Student("Gray", 70);
$group1_students[] = new Student("Ryuko", 77);
$group1_students[] = new Student("Satsuki", 85);

// Create students for group 2
$group2_students = [];
$group2_students[] = new Student("Link", 82);
$group2_students[] = new Student("Geralt", 90);
$group2_students[] = new Student("Aloy", 48);
$group2_students[] = new Student("Master Chief", 85);
$group2_students[] = new Student("Ezio", 70);
$group2_students[] = new Student("Lara", 84);
$group2_students[] = new Student("Kratos", 30);
$group2_students[] = new Student("Mario", 75);
$group2_students[] = new Student("Samus", 88);
$group2_students[] = new Student("Joel", 42);
$group2_students[] = new Student("Ellie", 50);
$group2_students[] = new Student("Nathan Drake", 48);
$group2_students[] = new Student("Aloy", 46);
$group2_students[] = new Student("Clementine", 38);
$group2_students[] = new Student("Arthur Morgan", 85);
$group2_students[] = new Student("Bayonetta", 28);
$group2_students[] = new Student("Sonic", 45);
$group2_students[] = new Student("Cloud", 92);
$group2_students[] = new Student("Sora", 40);
$group2_students[] = new Student("Snake", 80);

// Create groups
$group1 = new Group($group1_students);
$group2 = new Group($group2_students);

// Display average scores before any moves
echo "<h2>" .  "average score before any moves" . "</h2>";
echo "Average score of group 1: " . $group1->averageScore() . "%" . "<br>";
echo "Average score of group 2: " . $group2->averageScore() . "%" . "<br>";

// Move a student from group 1 to group 2 (example: Naruto)
$group1->moveStudentToGroup($group1_students[0], $group2);

echo "<h2>" .  "average score after moving Naruto from group 1 to group 2" . "</h2>";
echo "Average score of group 1: " . $group1->averageScore() . "%" . "<br>";
echo "Average score of group 2: " . $group2->averageScore() . "%" . "<br>";

// Move the top student from group 1 to group 2, replacing the lowest scoring student
$topStudentGroup1 = $group1->findTopStudent($group1);
$lowestStudentGroup2 = $group2->findLowestScoringStudent($group2);

if ($topStudentGroup1 && $lowestStudentGroup2) {
    $group1->moveStudentToGroup($topStudentGroup1, $group2);
    $group2->moveStudentToGroup($lowestStudentGroup2, $group1);
}

// Display average scores after the move
echo "<h2>" .  "average score after moving the top student from group 1 to group 2, replacing the lowest scoring student" . "</h2>";
echo "Average score of group 1: " . $group1->averageScore() . "%" . "<br>";
echo "Average score of group 2: " . $group2->averageScore() . "%" . "<br>";