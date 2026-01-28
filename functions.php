<?php
require_once 'theme.php';

function loadStudents($dbFile = "data.json") {
    if (file_exists($dbFile)) {
        $data = json_decode(file_get_contents($dbFile), true);
        if (is_array($data)) {
            return $data;
        }
    }
    return [];
}

function getStudentByName($firstName, $lastName, $dbFile = "data.json") {
    $students = loadStudents($dbFile);
    foreach ($students as $student) {
        if ($student['first_name'] === $firstName && $student['last_name'] === $lastName) {
            return $student;
        }
    }
    return null;
}

function getStudentPageUrl($student) {
    $firstName = strtolower(preg_replace('/[^a-zA-Z0-9]/', '', $student['first_name']));
    return "pages/{$firstName}.php";
}

function displayStudentCard($student, $showLink = true) {
    global $theme;
    $name = htmlspecialchars($student['first_name'] . ' ' . $student['last_name']);
    $pageUrl = getStudentPageUrl($student);
    
    echo '<div class="student-card">';
    echo '<h3>' . $name . '</h3>';
    echo '<p class="student-info"><strong>Zodiac:</strong> ' . htmlspecialchars($student['zodiac']) . '</p>';
    echo '<p class="student-info"><strong>Hobbies:</strong> ' . htmlspecialchars($student['hobbies']) . '</p>';
    if ($showLink) {
        echo '<a href="' . $pageUrl . '" class="btn-view">View Profile</a>';
    }
    echo '</div>';
}

function getGreeting() {
    $hour = date('H');
    if ($hour < 12) {
        return "Good Morning";
    } elseif ($hour < 18) {
        return "Good Afternoon";
    } else {
        return "Good Evening";
    }
}

// Joseph's custom function: short bio line
function joseph_render_short_bio($student) {
    $first    = htmlspecialchars($student['first_name']);
    $last     = htmlspecialchars($student['last_name']);
    $zodiac   = htmlspecialchars($student['zodiac']);
    $hobbies  = htmlspecialchars($student['hobbies']);
    $job      = htmlspecialchars($student['job']);
    $favPlace = htmlspecialchars($student['fav_place']);

    return "$first $last is a $zodiac who enjoys $hobbies, works as a $job, and loves spending time in $favPlace.";
}
