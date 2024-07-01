<?php

$utenti = [
    [
    "username" => "user1",
     "password" => "pass1"
    ],
    [
    "username" => "user2",
     "password" => "pass2"
    ],
    [
    "username" => "user3",
     "password" => "pass3"
    ],
    [
    "username" => "user4",
     "password" => "pass4"
    ],
    [
    "username" => "user5",
     "password" => "pass5"
    ]
];

session_start();

if (isset($_POST['username']) && isset($_POST['password'])) {
    // ? prendo tutti i valori e controllo se esiste lo username inserito.
    foreach ($utenti as $utente) {
        if ($utente['username'] == $_POST["username"]) {
            if ($utente["password"] == $_POST["password"]) {
                $_SESSION["username"] = $_POST["username"];
                $_SESSION["password"] = $_POST["password"];
                $_SESSION["logged"] = true;
                header("Location: ./index.php");
                break;
            }
        }
    }

     // ? se esiste controllo pure la password.
       // ? se e giusta salvo in sessione e vado in index.
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Session Login</title>
</head>
<body>
    
<header>
    <section>
        <h1>
            PHP Session Login
        </h1>
    </section>
</header>

<main>
    <form action="./login.php" method="POST">
        <div>
            <label for="username">Username:</label>
            <input type="username" name="username" id="username">
        </div>
        <div>
            <label for="username">Password:</label>
            <input type="text" name="password" id="password">
        </div>
        <button type="submit">Login</button>
    </form>
</main>

</body>
</html>