<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./images/assets/pen.png">
    <title>Writings</title>
</head>
<body>
    <header class="header">
        <div class="container">
            <div class="brand__name">
                Writings
            </div>
        </div>
    </header>

    <main>
        <form action="../../includes/signup.inc.php" method="POST" class="form">
            <div class="form--group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username">
            </div>
            <div class="form--group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email">
            </div>
            <div class="form--group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" autocomplete="off">
            </div>
            <div class="form--group">
                <label for="password_confirm">Confirm Password:</label>
                <input type="password" id="password_confirm" name="password_confirm">
            </div>

            <button type="submit">sign up</button>
        </form>
    </main>
</main>
</body>
</html>