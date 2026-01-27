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

function getJackComm($student, $dbFile = "data.json") {
    $students = loadStudents($dbFile);
    $jack = null;
    
    foreach ($students as $entry) {
        if ($entry['first_name'] === 'Jack' && $entry['last_name'] === 'Weaver') {
            $jack = $entry;
            break;
        }
    }
    
    if (!$jack) {
        return $student['first_name'] . " doesn't have a common hobby with Jack.";
    }
    
    $studentHobbies = array_map('trim', array_map('strtolower', explode(',', $student['hobbies'])));
    $jackHobbies = array_map('trim', array_map('strtolower', explode(',', $jack['hobbies'])));
    
    $commonHobbies = array_intersect($studentHobbies, $jackHobbies);
    
    if (!empty($commonHobbies)) {
        return "It seems " . $student['first_name'] . " has a common hobby with Jack.";
    } else {
        return $student['first_name'] . " doesn't have a common hobby with Jack.";
    }
}
