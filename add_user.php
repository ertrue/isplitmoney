<html>
<head>
<title>You have been added</title>

</head>

<body>
<h2> You have been added to the split bot </h2>
<br />

<?php

$doc = array(
"Name"=>$_POST["Name"],
"me_id"=>$_POST["me_id"],
"phone"=>$_POST["phone"],
);
$connection = new MongoClient();
$db = $connection->splitbotDB;
$user_collection = $db->user;
$user_collection->insert($doc);
print_r($doc);

?>

To go back to the list of user <a href = "student.php">Click_here</a>
</body>
</html>
