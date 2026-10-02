<?php
    // Nakendra McEachern
    // Week 5 Performance Assessment
    // This page stores the user's name in a cookie
    // and the user's date of birth in the session.

    // Start the session so session data can be stored and retrieved.
    session_start();

    $cookie_name = "user_name";

    // Give the session an initial value if one does not exist.
    if (!isset($_SESSION['birthdate'])) {
        $_SESSION['birthdate'] = "";
    }

    // Store submitted form information.
    if (isset($_POST['submit'])) {

        // Store the name in a cookie for one hour.
        if (isset($_POST['name'])) {
            $name = $_POST['name'];
            setcookie($cookie_name, $name, time() + 3600, "/");

            // Make the new value available during this request.
            $_COOKIE[$cookie_name] = $name;
        }

        // Store the date of birth in the session.
        if (isset($_POST['birthdate'])) {
            $_SESSION['birthdate'] = $_POST['birthdate'];
        }
    }

    // Retrieve the name currently stored in the cookie.
    $stored_name = isset($_COOKIE[$cookie_name])
        ? $_COOKIE[$cookie_name]
        : "";
?>

<html>
    <head>
        <title>Nakendra McEachern Wk 5 Performance Assessment</title>
    </head>

    <body>
        <h2>Store your name in a cookie and birthdate in the Session</h2>

        <form method="POST">
            <h3>
                Name:
                <input type="text" name="name"
                    value="<?php echo $stored_name; ?>"/>
            </h3>

            <h3>
                Date of Birth:
                <input type="text" name="birthdate"
                    value="<?php echo $_SESSION['birthdate']; ?>"/>
            </h3>

            <input type="submit" name="submit" value="Submit"/>
        </form>

        <br><br>

        <a href="data_display.php">Show Data Display Page</a>
    </body>
</html>