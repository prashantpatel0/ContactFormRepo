<?php

include("dbconnect.php");
$note=$_REQUEST['note'];
?>
<html>

<head>
    <title>Contact Us</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<body>

<div id="page-wrap">
    <?PHP if($note=='success')
    {
    echo "<div class=\"success\">Form successfully submitted!</div>";
    }
?>

<h1>Contact Us</h1>

    <div id="contact-area">

        <form method="post" action="user_process.php">
            <label for="email">Email:</label>
            <input type="text" name="email" id="email" />

            <label for="name">Name:</label>
            <input type="text" name="name" id="name" />

            <label for="subject">Subject:</label>
            <input type="text" name="subject" id="subject" />

            <label for="Message">Message:</label><br />
            <textarea name="message" rows="20" cols="20" id="Message"></textarea>

            <label for="query">Query:</label><br />
            <textarea name="query" rows="20" cols="20" id="query"></textarea>

            <input type="submit" name="submit" value="Submit" class="submit-button" />
        </form>

        <div style="clear: both;"></div>
    </div>

</div>

</body>
</html>