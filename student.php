<!doctype html>
<html>
<head>
    <title>Example Domain</title>

    <meta charset="utf-8" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <style type="text/css">
    body {
        background-color: #f0f0f2;
        margin: 0;
        padding: 0;
        font-family: "Open Sans", "Helvetica Neue", Helvetica, Arial, sans-serif;
        
    }
    div {
        width: 1200px;
        margin: 5em auto;
        padding: 50px;
        background-color: #fff;
        border-radius: 1em;
    }
    a:link, a:visited {
        color: #38488f;
        text-decoration: none;
    }
    @media (max-width: 1000px) {
        body {
            background-color: #fff;
        }
        div {
            width: auto;
            margin: 0 auto;
            border-radius: 0;
            padding: 1em;
        }
    }
    </style>    
</head>


<body>
<div>
    <h1>User Info:</h1>
<form action = "add_user.php" method = "POST">
Name : <input type = "text" name = "Name" />
Facebook ID : <input type = "text" name = "me_id" />
Phone Number : <input type = "text" name = "phone" />
<input type = "submit" value = "add">
</form>
<br /> <hr />
<h2> Below are registered student in split bot. </h2>
<?php
$connection = new MongoClient();
$db = $connection->splitbotDB;
$user_collection = $db->user;
$cursor = $user_collection->find();

foreach($cursor as $document) {
	echo "<strong>Name : </strong>". $document["Name"]. "\n";
	echo "<strong>Facebook ID: </strong>". $document["me_id"]. "\n";
	echo "<strong>Phone Number : </strong>". $document["phone"]. "\n";
	echo "<br />";
}
?>

<hr />
<div class = "footer">
<tt><center> This page is developed by Hongbo for split money now.
</center> </tt>
</body>
</html>
