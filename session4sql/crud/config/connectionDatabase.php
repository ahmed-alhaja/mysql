<?php
$conn = mysqli_connect('localhost', 'root', '', 'todoapp');
if (!$conn) {
    echo 'connect error' . mysqli_connect_error();
}
