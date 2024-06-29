<?php
require 'db.php';

$id = $_GET['id'];

$stmt = $pdo->prepare('SELECT * FROM users WHERE id =:id');
$stmt->execute([$id]);
$user = $stmt->fetch();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['nom'];
    $email = $_POST['email'];

    $stmt = $pdo->prepare('UPDATE users SET name = ?, email = ? WHERE id = ?');
    $stmt->execute([$name, $email, $id]);

    header('Location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier: </title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
        }
        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #5a4d9b;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        input[type="text"],
        input[type="email"] {
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        .btn {
            display: inline-block;
            padding: 10px 15px;
            color: white;
            background-color: #ff7043;
            border: none;
            text-align: center;
            cursor: pointer;
            text-decoration: none;
        }
        .btn:hover {
            background-color: #ff5722;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Modifier Utilisateur</h1>
        <form method="POST">
            <input type="text" name="name" placeholder="Nom" value="<?= htmlspecialchars($user['nom']) ?>" required>
            <input type="email" name="email" placeholder="Email" value="<?= htmlspecialchars($user['email']) ?>" required>
            <button class="btn" type="submit">Modifier</button>
        </form>
    </div>
</body>
</html>
