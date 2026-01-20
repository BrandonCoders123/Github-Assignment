<?php
// File where data will be stored
$dbFile = "db.json";

// Handle form submission
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

    // Load existing data
    if (file_exists($dbFile)) {
        $data = json_decode(file_get_contents($dbFile), true);
        if (!is_array($data)) {
            $data = [];
        }
    } else {
        $data = [];
    }

    // Add new entry
    $data[] = $entry;

    // Save back to JSON file
    file_put_contents($dbFile, json_encode($data, JSON_PRETTY_PRINT));

    echo "<p><strong>Form submitted successfully!</strong></p>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>20 Question Form</title>
</head>
<body>

<h2>20 Question Form</h2>

<form method="post">
    Last Name: <input type="text" name="last_name"><br><br>
    First Name: <input type="text" name="first_name"><br><br>
    Date of Birth: <input type="date" name="dob"><br><br>
    Hobbies: <input type="text" name="hobbies"><br><br>
    Dislikes: <input type="text" name="dislikes"><br><br>
    Likes: <input type="text" name="likes"><br><br>
    Gender: <input type="text" name="gender"><br><br>
    Pronouns: <input type="text" name="pronouns"><br><br>
    Job (Work): <input type="text" name="job"><br><br>
    College You Want to Go To: <input type="text" name="college"><br><br>
    GPA: <input type="text" name="gpa"><br><br>
    BFF: <input type="text" name="bff"><br><br>
    Zodiac Sign: <input type="text" name="zodiac"><br><br>
    Sports: <input type="text" name="sports"><br><br>
    Favorite Food: <input type="text" name="fav_food"><br><br>
    Least Favorite Food: <input type="text" name="least_fav_food"><br><br>
    Height: <input type="text" name="height"><br><br>
    Favorite Pet: <input type="text" name="fav_pet"><br><br>
    Favorite Place to Go: <input type="text" name="fav_place"><br><br>
    Favorite Song: <input type="text" name="fav_song"><br><br>

    <button type="submit">Submit</button>
</form>

</body>
</html>
