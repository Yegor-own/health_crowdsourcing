<?php


$connection = mysqli_connect(
                            'localhost',
                            'id15471223_admin',
                            'JCibDV@dG[9*m71w',
                            'id15471223_helth_crowd'
                        );

$users = mysqli_query($connection, "SELECT * FROM `users`");
if(mysqli_connect_errno()){
    echo 'Connection invalid!!!</br>';
    echo mysqli_connect_error();
    exit();
}