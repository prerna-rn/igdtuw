if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    <!-- $password = $_POST['password']; -->

    // Hash the password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Validate the form data (you can add your own validation logic here)

    // Save the data to a file or database
    $data = [
        'name' => $name,
        'email' => $email,
        'password' => $hashedPassword
    ];

    // Example: Save the data to a file
    $filename = 'signup_data.txt';
    $file = fopen($filename, 'a');
    fwrite($file, json_encode($data) . PHP_EOL);
    fclose($file);

    // Redirect or display a success message
    header('Location: signup_success.php');
    exit;
}
