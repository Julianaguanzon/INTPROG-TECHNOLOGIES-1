<?php
$score = 95;
$grade = "F";
$satisfaction = "Fail";

if ($score >= 60) {
    $grade = "B";
    $satisfaction= "Needs Improvement";
}
if ($score >= 70) {
    $grade = "B+";
    $satisfaction = "Satisfactory";
}
if ($score >= 80) {
    $grade = "A";
    $satisfaction = "Good";
}
if ($score >= 90) {
    $grade = "A+";
    $satisfaction = "Excellent";
}

echo "Score: $score<br>";
echo "Grade: $grade<br>";
echo "Satisfaction: $satisfaction";

echo "<hr>";

$score = 90;

if ($score >= 70) {
    $grade = "Pass";
    $message = "Congratulations! You passed the exam.";
    $color = "green";
} else {
    $grade = "Fail";
    $message = "Sorry, you need to retake the exam.";
    $color = "red";
}

echo "<span style='color: $color;'>";
echo "Result: $grade<br>";
echo "Message: $message";
echo "</span>";

echo "<hr>";

$score = 69;

if ($score >= 90) {
    $grade = "A";
    $satisfaction = "Excellent";
    $gpa = 1.0;
} else if ($score >= 80) {
    $grade = "B";
    $satisfaction = "Good";
    $gpa = 2.0;
} else if ($score >= 70) {
    $grade = "C";
    $satisfaction = "Satisfactory";
    $gpa = 3.0;
} else if ($score >= 60) {
    $grade = "D";
    $satisfaction = "Needs Improvement";
    $gpa = 4.0;
} else {
    $grade = "F";
    $satisfaction = "Fail";
    $gpa = 5.0;
}

echo "Score: $score%<br>";
echo "Grade: $grade<br>";
echo "Satisfaction: $satisfaction<br>";
echo "GPA: $gpa";

echo "<hr>";

$score = 82;
$gradeRange = floor($score / 10);

switch ($gradeRange) {
    case 10:
    case 9:
        $grade = "A";
        $satisfaction = "Excellent";
        break;
    case 8:
        $grade = "B";
        $satisfaction = "Good";
        break;
    case 7:
        $grade = "C";
       $satisfaction = "Satisfactory";
        break;
    case 6:
        $grade = "D";
        $satisfaction = "Needs Improvement";
        break;
    default:
        $grade = "F";
        $satisfaction= "Fail";
        break;
}

echo "Score: $score%<br>";
echo "Grade: $grade<br>";
echo "Satisfaction: $satisfaction<br>";


?>

