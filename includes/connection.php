<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php
$con = mysqli_connect('localhost', 'root', '', 'bk_blog');
if (mysqli_connect_errno($con)) {
    echo "Error";
}
mysqli_set_charset($con, "utf8");