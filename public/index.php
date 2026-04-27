<?php require_once "../includes/read.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CRUD Operations</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<nav class="navbar">
    <img src="Logo.png" id="logo">

    <button onclick="showSection('home')">Home</button>
    <button onclick="showSection('create')">Create</button>
    <button onclick="showSection('read')">Read</button>
</nav>


<section id="home" class="homecontent"> 
    <h1 class="splash">Welcome to Student Management System</h1>
</section>


<section id="create" class="content">
    <h1>Insert Student</h1>

    <form action="../includes/insert.php" method="POST" id="studentForm">
        <input type="text" name="surname" placeholder="Surname" required><br>
        <input type="text" name="name" placeholder="Name" required><br>
        <input type="text" name="middlename" placeholder="Middle Name"><br>
        <input type="text" name="address" placeholder="Address"><br>
        <input type="text" name="contact" placeholder="Contact"><br>

        <button type="button" id="clrbtn">Clear</button>
        <button type="submit">Save</button>
    </form>
</section>


<section id="read" class="content">
    <h1>Student List</h1>

    <table border="1" cellpadding="10">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Surname</th>
            <th>Middle</th>
            <th>Address</th>
            <th>Contact</th>
        </tr>

        <?php foreach ($students as $row): ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= htmlspecialchars($row['name']) ?></td>
            <td><?= htmlspecialchars($row['surname']) ?></td>
            <td><?= htmlspecialchars($row['middlename']) ?></td>
            <td><?= htmlspecialchars($row['address']) ?></td>
            <td><?= htmlspecialchars($row['contact_number']) ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</section>


<div id="success-toast" class="toast-hidden">
    Saved successfully!
</div>

<script src="script.js"></script>
</body>
</html>