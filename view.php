<!DOCTYpE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Web Page </title>
    <style>
        *{
            margin: 0;
            padding: 0;
            font-family: Arial, Helvetica, sans-serif;
        }
        body{
            background : linear-gradient( to bottom , #49a09d , #5f2c82);
            height: 100%;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
        header{
            width: 100%;
            padding: 20px 0;
        }
        header nav ul{
            list-style: none;
            text-align: center;
        }
        header nav ul li{
            display: inline-block;
        }
        header nav ul li a{
            text-decoration: none;
            color: #000;
            padding: 5px 20px;
            font-size: 20px;
            font-weight: bold;
        }
        header nav ul li a:hover{
            background-color: #000;
            color: #fff;
        }
</style>
</head>
<body>
    <header>
        <nav>
            <ul>
            <li><a href="index.php">Home</a></li>
                
                <li><a href="insert.php">Add User</a></li>
                <li><a href="view.php">View Users</a></li>
    
            </ul>
            
        </nav>    
    </header>
<?php
include_once 'class.php';
$db = new Db();
$db->select();
?>