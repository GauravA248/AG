<?php
session_start();
include "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = md5($_POST['password']); // hashed compare

    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $_SESSION['user'] = $username;
        header("Location: dashboard.php");
        exit();
    } else {
        $error = "Invalid Credentials!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link href="https://cdn.tailwindcss.com" rel="stylesheet">
</head>
<body class="flex justify-center items-center h-screen bg-gray-100">
  <form method="POST" class="bg-white p-8 rounded shadow w-96">
    <h2 class="text-2xl font-bold mb-4 text-center">Login</h2>
    <?php if(!empty($error)) echo "<p class='text-red-500'>$error</p>"; ?>
    <input type="text" name="username" placeholder="Username" class="w-full mb-4 px-4 py-2 border rounded" required>
    <input type="password" name="password" placeholder="Password" class="w-full mb-4 px-4 py-2 border rounded" required>
    <button type="submit" class="w-full bg-indigo-600 text-white py-2 rounded hover:bg-indigo-700">Login</button>
  </form>
</body>
</html>
