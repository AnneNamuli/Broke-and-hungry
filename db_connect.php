<?php
$link = mysqli_connect('localhost', 'hungry', '1', 'hungry');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully';

// $sql = "select * from food";
$sql = "select food.Name, food.Description, food.Price, food.restaurant, food.location, food.contact, category.Category_name FROM food INNER JOIN category on food.category = category.category_id";


$result = mysqli_query($link, $sql) or die ("Error" . mysqli_error($link));

$foodsarray = array();
while ($row = mysqli_fetch_assoc($result)) {
	$foodsarray[] = $row; 
}

// var_dump($foodsarray);
echo json_encode($foodsarray);

mysqli_close($link);

?>