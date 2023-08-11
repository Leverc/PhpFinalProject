<!--Stephen Hill
    COMP1006
    Final Project - Index Page
    AUGUST 11TH 2023-->
<html lang="en-us">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Php Final project</title>
    <link href="./css/style.css" rel="stylesheet">
</head>
<body>
    <a href="./index.php">
    <section class="header">
            <h1>Example Php Home Page</h1>
            <div class="nav">
                <ul>
                    <li>Home</li>
                    <li>About</li>
                    <li>Sign up</li>
                </ul>
            </div>
    </section>
    </a>
    <section class="main">
        <div id="new-user">
            <h3>New here? Click the button to sign up!</h3>
            <form method="post" action="save-user.php">
                <a href="register.php">
                    <button type="button">
                        Sign Up!
                    </button>
                </a>
            </form>
        </div>
        <div id="login">
            <h3>Returning? Sign in below</h3>
            <form method="post" action="./inc/validate.php">
                <p><input name="username" type="text" placeholder="Username" required /></p>
                <p><input name="password" type="password" placeholder="Password" required /></p>
                <input class="login" type="submit" value="Login" />
            </form>
        </div>

    </section>

</body>

</html>