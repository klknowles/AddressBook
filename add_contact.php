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
       <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">-->
    </head>
    <body class="w3-auto">
        <div class="w3-bar w3-teal w3-center">
            <a class="w3-bar-item w3-button" href="index.html">Contacts</a>
            <a class="w3-bar-item w3-button" href="add_contact.php">Add Contact</a>
            <a class="w3-bar-item w3-button" href="deletefile.php">Delete Contact</a>
            <a class="w3-bar-item w3-button" href="search_contact.php">Search Contacts</a>
            <a class="w3-bar-item w3-button" href="sort_contact.php">Sort Contacts</a>
        </div>

        <form action="addcontactDB.php" method="post" enctype="multipart/form-data">
            <label for="fname">First Name:</label>
            <input type="text" id="fname" name="fname" required><br><br>
            <label for="lname">Last Name:</label>
            <input type="text" id="lname" name="lname" required><br><br>
            <label for="email">Email Address:</label>
            <input type="text" id="email" name="email" required pattern='^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$'><br><br>
            <label for="number">Phone Number(##########):</label>
            <input type="text" id="number" name="number" required pattern="[0-9]{3}[0-9]{3}[0-9]{4}"><br><br>
            <label for="fileToUpload">Contact Image:</label>
            <input type="file" id="fileToUpload" name="fileToUpload" required><br><br>
            <input type="submit" value="Submit">
        </form>
    </body>
</html>