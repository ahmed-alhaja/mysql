<?php
$conn = mysqli_connect('localhost', 'root', '', '333_blog_app');
if (!$conn) {
    echo 'connect error' . mysqli_connect_error();
}
