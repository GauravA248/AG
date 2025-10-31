<?php
session_start();
include "db.php";

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}

$result = $conn->query("SELECT * FROM events");
?>

<!DOCTYPE html>
<html>
<head>
  <title>Dashboard</title>
  <link href="https://cdn.tailwindcss.com" rel="stylesheet">
</head>
<body class="p-10 bg-gray-50">
  <h1 class="text-3xl font-bold mb-6">Admin Dashboard</h1>
  <a href="logout.php" class="bg-red-500 text-white px-4 py-2 rounded">Logout</a>
  <table class="w-full mt-6 border-collapse shadow-lg bg-white">
    <thead>
      <tr class="bg-indigo-100">
        <th class="p-3">Location</th>
        <th class="p-3">Event</th>
        <th class="p-3">Manpower</th>
        <th class="p-3">Status</th>
      </tr>
    </thead>
    <tbody>
      <?php while($row = $result->fetch_assoc()) { ?>
      <tr class="border-b">
        <td class="p-3"><?php echo $row['location']; ?></td>
        <td class="p-3"><?php echo $row['event_name']; ?></td>
        <td class="p-3"><?php echo $row['manpower']; ?></td>
        <td class="p-3 text-indigo-600"><?php echo $row['status']; ?></td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
</body>
</html>
