<?php
include("connect.php");

if($_POST){
    $book_no = $_POST['book_no'];
    $title = $_POST['title'];
    $edition = $_POST['edition'];
    $publisher = $_POST['publisher'];

    $sql = mysqli_query($conn, "INSERT INTO book_details VALUES('$book_no', '$title', '$edition', '$publisher')");
}

$query = mysqli_query($conn, "SELECT * FROM book_details");
?>
<html>
<head>
<title>Display Book Details</title>
</head>
<body>
<h2 align="center">Book Details</h2><br>
<table align="center" border="1" cellspacing="0" cellpadding="8">
<tr>
<th>Book Number</th>
<th>Title</th>
<th>Edition</th>
<th>Publisher</th>
</tr>

<?php
while($row = mysqli_fetch_assoc($query)){
    echo "<tr>";
    echo "<td>". $row['book_no'] ."</td>";
    echo "<td>". $row['title'] ."</td>";
    echo "<td>". $row['edition'] ."</td>";
    echo "<td>". $row['publisher'] ."</td>";
    echo "</tr>";
}
?>
</table>
</body>
</html>

