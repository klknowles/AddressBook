<!DOCTYPE html>
<?php include 'connect.php'; ?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="script.js"></script>
        <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>-->
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
       <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">-->
    </head>
    <body class="w3-auto">
        <div class="w3-bar w3-teal w3-center">
            <a class="w3-bar-item w3-button" href="index.php">Contacts</a>
            <a class="w3-bar-item w3-button" href="add_contact.php">Add Contact</a>
            <a class="w3-bar-item w3-button" href="deletefile.php">Delete Contact</a>
            <a class="w3-bar-item w3-button" href="search_contact.php">Search Contacts</a>
            <a class="w3-bar-item w3-button" href="sort_contact.php">Sort Contacts</a>
        </div>
        <div class="container" style="test-align: center;">
            <?php
                include 'connect.php';
                $result = mysqli_query($conn, "SELECT * FROM contacts");
                while ($a_row = mysqli_fetch_row($result)) {
                    print '<div class="card" style="width:400px">';
                    $val = $a_row[3];
                    echo '<img class="card-img-top" src="' . $val . '"alt="Card image" style="width:100%">';
                    print '<div class="card-body">';
                    echo '<h4 class="card-title">'.$a_row[0].'</h4>';
                    echo '<h4 class="card-title">'.$a_row[1].'</h4>';
                    print '<p>';
                    printf ("%s", $a_row[2]);
                    print '</p>';
                    print '<p>';
                    printf ("%s", $a_row[4]);
                    print '</p>';
                    print '</div>';
                    print '</div>';
                }


            ?>
        </div>
    </body>
</html>