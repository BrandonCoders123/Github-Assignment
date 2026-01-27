<?php
require_once 'functions.php';

$students = loadStudents();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $theme['site_title']; ?> - Students</title>
    <style>
        <?php echo getThemeStyles($theme); ?>
        
        .hero {
            text-align: center;
            padding: <?php echo $theme['spacing_large']; ?>;
            background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.9));
        }
        
        .hero h1 {
            color: <?php echo $theme['primary_color']; ?>;
            font-size: 2.5rem;
            margin-bottom: 10px;
        }
        
        .hero p {
            color: <?php echo $theme['text_muted']; ?>;
        }
        
        .students-container {
            padding: <?php echo $theme['spacing_large']; ?>;
            max-width: 1200px;
            margin: 0 auto;
        }
        
        .students-container h2 {
            color: <?php echo $theme['text_color']; ?>;
            margin-bottom: <?php echo $theme['spacing_medium']; ?>;
        }
        
        .students-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: <?php echo $theme['spacing_medium']; ?>;
        }
        
        .student-card {
            background-color: <?php echo $theme['card_background']; ?>;
            border-radius: <?php echo $theme['border_radius']; ?>;
            padding: <?php echo $theme['spacing_medium']; ?>;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }
        
        .student-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 20px rgba(16, 124, 16, 0.3);
        }
        
        .student-card h3 {
            color: <?php echo $theme['primary_color']; ?>;
            margin-bottom: <?php echo $theme['spacing_small']; ?>;
            font-size: 1.3rem;
        }
        
        .student-info {
            color: <?php echo $theme['text_muted']; ?>;
            margin-bottom: 8px;
            font-size: 0.9rem;
        }
        
        .student-info strong {
            color: <?php echo $theme['text_color']; ?>;
        }
        
        .btn-view {
            display: inline-block;
            background-color: <?php echo $theme['primary_color']; ?>;
            color: white;
            padding: 10px 20px;
            border-radius: <?php echo $theme['border_radius']; ?>;
            text-decoration: none;
            margin-top: <?php echo $theme['spacing_small']; ?>;
            font-size: 0.9rem;
            transition: background-color 0.2s ease;
        }
        
        .btn-view:hover {
            background-color: #0e6e0e;
            text-decoration: none;
        }
        
        .no-students {
            text-align: center;
            padding: <?php echo $theme['spacing_large']; ?>;
            color: <?php echo $theme['text_muted']; ?>;
        }
        
        #greeting {
            font-size: 1.2rem;
            color: <?php echo $theme['text_color']; ?>;
        }
    </style>
</head>
<body>

<nav class="icon-bar">
    <a href="index.php" class="icon"><span>🏠</span>Students</a>
    <a href="form.php" class="icon"><span>📝</span>Form</a>
</nav>

<section class="hero">
    <h1><?php echo $theme['site_title']; ?></h1>
    <p id="greeting"><?php echo getGreeting(); ?>! Welcome to our student profiles.</p>
</section>

<div class="students-container">
    <h2>All Students</h2>
    
    <?php if (empty($students)): ?>
        <div class="no-students">
            <p>No students found in the database.</p>
        </div>
    <?php else: ?>
        <div class="students-grid">
            <?php foreach ($students as $student): ?>
                <?php displayStudentCard($student); ?>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</div>

<script>
function updateGreeting() {
    const hour = new Date().getHours();
    let greeting;
    if (hour < 12) {
        greeting = "Good Morning";
    } else if (hour < 18) {
        greeting = "Good Afternoon";
    } else {
        greeting = "Good Evening";
    }
    document.getElementById('greeting').textContent = greeting + "! Welcome to our student profiles.";
}

setInterval(updateGreeting, 60000);
</script>

</body>
</html>
