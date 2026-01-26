<?php
require_once 'functions.php';

$successMessage = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $entry = [
        "last_name" => $_POST["last_name"] ?? "",
        "first_name" => $_POST["first_name"] ?? "",
        "date_of_birth" => $_POST["dob"] ?? "",
        "hobbies" => $_POST["hobbies"] ?? "",
        "dislikes" => $_POST["dislikes"] ?? "",
        "likes" => $_POST["likes"] ?? "",
        "gender" => $_POST["gender"] ?? "",
        "pronouns" => $_POST["pronouns"] ?? "",
        "job" => $_POST["job"] ?? "",
        "college" => $_POST["college"] ?? "",
        "gpa" => $_POST["gpa"] ?? "",
        "bff" => $_POST["bff"] ?? "",
        "zodiac" => $_POST["zodiac"] ?? "",
        "sports" => $_POST["sports"] ?? "",
        "fav_food" => $_POST["fav_food"] ?? "",
        "least_fav_food" => $_POST["least_fav_food"] ?? "",
        "height" => $_POST["height"] ?? "",
        "fav_pet" => $_POST["fav_pet"] ?? "",
        "fav_place" => $_POST["fav_place"] ?? "",
        "fav_song" => $_POST["fav_song"] ?? "",
        "submitted_at" => date("Y-m-d H:i:s")
    ];

    $dbFile = "data.json";
    if (file_exists($dbFile)) {
        $data = json_decode(file_get_contents($dbFile), true);
        if (!is_array($data)) {
            $data = [];
        }
    } else {
        $data = [];
    }

    $data[] = $entry;
    file_put_contents($dbFile, json_encode($data, JSON_PRETTY_PRINT));
    $successMessage = "Form submitted successfully!";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $theme['site_title']; ?> - 20 Questions</title>
    <style>
        <?php echo getThemeStyles($theme); ?>
    </style>
</head>
<body>

<nav class="icon-bar">
    <a href="index.php" class="icon"><span>🏠</span>Students</a>
    <a href="form.php" class="icon"><span>📝</span>Form</a>
    <a href="submissions.php" class="icon"><span>📊</span>Submissions</a>
</nav>

<div class="form-container">
    <h2>20 Question Form</h2>
    
    <?php if ($successMessage): ?>
        <div class="success-message"><?php echo $successMessage; ?></div>
    <?php endif; ?>

    <form method="post">
        <label>Last Name</label>
        <input type="text" name="last_name">
        
        <label>First Name</label>
        <input type="text" name="first_name">
        
        <label>Date of Birth</label>
        <input type="date" name="dob">
        
        <label>Hobbies</label>
        <input type="text" name="hobbies">
        
        <label>Dislikes</label>
        <input type="text" name="dislikes">
        
        <label>Likes</label>
        <input type="text" name="likes">
        
        <label>Gender</label>
        <input type="text" name="gender">
        
        <label>Pronouns</label>
        <input type="text" name="pronouns">
        
        <label>Job (Work)</label>
        <input type="text" name="job">
        
        <label>College You Want to Go To</label>
        <input type="text" name="college">
        
        <label>GPA</label>
        <input type="text" name="gpa">
        
        <label>BFF</label>
        <input type="text" name="bff">
        
        <label>Zodiac Sign</label>
        <input type="text" name="zodiac">
        
        <label>Sports</label>
        <input type="text" name="sports">
        
        <label>Favorite Food</label>
        <input type="text" name="fav_food">
        
        <label>Least Favorite Food</label>
        <input type="text" name="least_fav_food">
        
        <label>Height</label>
        <input type="text" name="height">
        
        <label>Favorite Pet</label>
        <input type="text" name="fav_pet">
        
        <label>Favorite Place to Go</label>
        <input type="text" name="fav_place">
        
        <label>Favorite Song</label>
        <input type="text" name="fav_song">

        <button type="submit" class="btn-primary">Submit</button>
    </form>
</div>

</body>
</html>
