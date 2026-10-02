<?php
    // Nakendra McEachern
    // Week 5 Performance Assessment
    // This page retrieves the user's name from the cookie
    // and the user's date of birth from the session.

    // Start the session to access the stored birthdate.
    session_start();

    $cookie_name = "user_name";

    // Retrieve the name stored in the cookie.
    $stored_name = isset($_COOKIE[$cookie_name])
        ? $_COOKIE[$cookie_name]
        : "No Name Stored";

    // Retrieve the birthdate stored in the session.
    $stored_birthdate = isset($_SESSION['birthdate'])
        ? $_SESSION['birthdate']
        : "No Birthdate Stored";
?>

<html>
    <head>
        <title>Nakendra McEachern Wk 5 Performance Assessment</title>
    </head>

    <body>
        <h2>
            The Name in the Cookie is: <?php echo $stored_name; ?>
        </h2>

        <h2>
            The Birthdate in the Session is: <?php echo $stored_birthdate; ?>
        </h2>

        <br>

        <a href="data_entry.php">Back to Data Entry Page</a>
    </body>
</html>