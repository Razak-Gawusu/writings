<?php 
include 'includes/signup.inc.php';

 if(isset($_POST['submit'])){

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_confirm = $_POST['password_confirm'];

    echo 'submit worked.';

    // Instantiate SignupContr class
    include 'classes/dbh.classes.php';
    include 'classes/signup.classes.php';
    include 'classes/signup-contr.classes.php';

    $signup = new SignupContr($username, $email, $password, $password_confirm);

    // Running error handlers and user signup
    $signup->signupUser();

    // Go back to home page
    header('Location: ../index.php?error=none');
 }

?>
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
            <a href="./views/auth/sign_in.php">sign in</a>
            <a href="./views/auth/sign_up.php">sign up</a>
        </div>
    </header>

    <section>
        <h2>Sign up</h2>
    <main>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="form">
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

            <input type="submit" name="submit" value="Sign Up">
        </form>
    </main>
    </section>
</html>