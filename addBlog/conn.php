<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["file"])) {
    // Get the form data
    $title = $_POST['title'];
    $description = $_POST['description'];
    $content = $_POST['content'];
    $owner = $_POST['owner'];

    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["file"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $allowed_types = array("jpg", "jpeg", "png", "gif", "pdf");

    // Check if the file type is allowed
    if (in_array($imageFileType, $allowed_types)) {
        // Move the file to the uploads directory
        if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
            echo "The file " . htmlspecialchars(basename($_FILES["file"]["name"])) . " has been uploaded.";

            // Save the data to the database
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "webProject";

            // Create a connection to the database
            $conn = mysqli_connect($servername, $username, $password, $dbname);

            // Check if the connection was successful
            if (!$conn) {
                die("La connexion à la base de données a échoué: " . mysqli_connect_error());
            }

            // Escape the form data to prevent SQL injection
            $title = mysqli_real_escape_string($conn, $title);
            $description = mysqli_real_escape_string($conn, $description);
            $owner = mysqli_real_escape_string($conn, $owner);
            $file = mysqli_real_escape_string($conn, $target_file);
            $content = mysqli_real_escape_string($conn, $content);

            // Insert the data into the database using prepared statements
            $stmt = $conn->prepare("INSERT INTO `blog`(`title`,`description`,`file`,`owner`,`date`,`content`) VALUES (?, ?, ?, ?, NOW(), ?)");
            $stmt->bind_param("sssss", $title, $description, $file, $owner, $content);
            $stmt->execute();

            if ($stmt->affected_rows > 0) {
                echo "New record created successfully.";
            } else {
                echo "Error: " . $stmt->error;
            }

            // Close the database connection
            $conn->close();
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    } else {
        echo "Sorry, only JPG, JPEG, PNG, and GIF files are allowed.";
    }
}
?>