<?php
require_once '../functions.php';

// Load student data from data.json
$data = json_decode(file_get_contents('../data.json'), true);
$student = null;

if (is_array($data)) {
    foreach ($data as $entry) {
        if ($entry['first_name'] === 'Jack' && $entry['last_name'] === 'Weaver') {
            $student = $entry;
            break;
        }
    }
}

if (!$student) {
    die("Student not found.");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($student['first_name']); ?>'s Profile</title>
    <style>
        <?php 
        $xbox_green = "#107c10";
        $xbox_dark = "#0e0e0e";
        $card_bg = "#1a1a1a";
        $text_main = "#ffffff";
        $text_muted = "#cccccc";
        ?>
        
        * { box-sizing: border-box; margin: 0; padding: 0; font-family: "Segoe UI", Arial, sans-serif; }
        body { background-color: <?php echo $xbox_dark; ?>; color: <?php echo $text_main; ?>; }
        
        .hero {
            background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.9)), 
                        url("https://via.placeholder.com/1600x700") center / cover no-repeat;
            padding: 60px;
            text-align: center;
        }
        
        .icon-bar {
            display: flex;
            justify-content: space-around;
            padding: 20px;
            background-color: #111;
            border-bottom: 1px solid #222;
        }
        
        .icon { text-decoration: none; color: #aaa; text-align: center; }
        .icon span { display: block; font-size: 1.5rem; color: <?php echo $xbox_green; ?>; }

        .profile-container { padding: 40px; max-width: 800px; margin: 0 auto; }
        .profile-card { background-color: <?php echo $card_bg; ?>; border-radius: 8px; padding: 30px; }
        .profile-field { margin-bottom: 15px; border-bottom: 1px solid #333; padding-bottom: 10px; }
        .profile-field strong { color: <?php echo $xbox_green; ?>; display: inline-block; width: 180px; }
        
        .custom-functions { margin-top: 30px; padding: 20px; background: #222; border-left: 4px solid <?php echo $xbox_green; ?>; }
        .custom-functions p { margin-bottom: 10px; color: <?php echo $text_muted; ?>; }
    </style>
</head>
<body>

<nav class="icon-bar">
    <a href="../index.php" class="icon"><span>🏠</span>Students</a>
    <a href="../form.php" class="icon"><span>📝</span>Form</a>
</nav>

<div class="profile-container">
    <div class="hero">
        <h1><?php echo htmlspecialchars($student['first_name'] . " " . $student['last_name']); ?></h1>
        <p style="margin-bottom: 20px;">Individual Student Showcase</p>
        <p><?php echo joseph_render_short_bio($student); ?></p>
    </div>

    <div class="profile-card">
        <div class="profile-field"><strong>First Name:</strong> <?php echo htmlspecialchars($student['first_name']); ?></div>
        <div class="profile-field"><strong>Last Name:</strong> <?php echo htmlspecialchars($student['last_name']); ?></div>
        <div class="profile-field"><strong>Date of Birth:</strong> <?php echo htmlspecialchars($student['date_of_birth']); ?></div>
        <div class="profile-field"><strong>Hobbies:</strong> <?php echo htmlspecialchars($student['hobbies']); ?></div>
        <div class="profile-field"><strong>Likes:</strong> <?php echo htmlspecialchars($student['likes']); ?></div>
        <div class="profile-field"><strong>Dislikes:</strong> <?php echo htmlspecialchars($student['dislikes']); ?></div>
        <div class="profile-field"><strong>Job:</strong> <?php echo htmlspecialchars($student['job']); ?></div>
        <div class="profile-field"><strong>College:</strong> <?php echo htmlspecialchars($student['college']); ?></div>
        <div class="profile-field"><strong>GPA:</strong> <?php echo htmlspecialchars($student['gpa']); ?></div>
        <div class="profile-field"><strong>Zodiac:</strong> <?php echo htmlspecialchars($student['zodiac']); ?></div>

        <div class="custom-functions">
            <h3>Team Insights</h3>
            <p><?php echo htmlspecialchars(getJackComm($student, '../data.json')); ?></p>
        </div>
    </div>
</div>

</body>
</html>
