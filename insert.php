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
        main {
            width: 100%;
            text-align: center;
        }
        main h1{
            font-size: 40px;
            color: #fff;
            margin-bottom: 30px;
        }
        main form{
            width: 320px;
            background-color: #fff;
            padding: 20px;
            box-sizing: border-box;
            border-radius: 5px;
            margin: 0 auto;
            margin-bottom: 20px;
        }
        main form label{
            font-size: 20px;
            color: #000;
        }
        main form input[type="text"],
        main form input[type="password"],
        main form input[type="number"]
        {
            display: block;
            width: 80%;
            padding: 5px 10px;
            font-size: 18px;
            margin-bottom: 10px;
            border-radius: 5px;
            border: 1px solid #000;
        }
        main form input[type="submit"],
        main form input[type="reset"]{
            padding: 5px 10px;
            font-size: 18px;
            margin-top: 10px;
            border-radius: 5px;
            border: none;
            cursor: pointer;
            border : 1px solid #000;

        }
        main form input[type="submit"]:hover,
        main form input[type="reset"]:hover{
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
            </ul>'
        </nav>    '
    </header>
    <main>
        <h1>Add User</h1>
        <form action ="insertproc.php" method="post">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" placeholder="Name">
            <label for="email">Email</label>
            <input type="text" name="email" id="email" placeholder="Email">
            <label for ="password"></label>
            <input type="password" name="password" id="password" placeholder="password">
            <label for= "confirmpassword"></label>
            <input type="password" name="confirmpassword" id="confirmpassword" placeholder="Confirm Password">
            <label for="RoomNum"></label>
            <input type="number" name="RoomNum" id="RoomNum" placeholder="Room Number">
            <label for="Ext"></label>
            <input type="number" name="Ext" id="Ext" placeholder="Ext">
            <input type="submit" value="Add User">
            <input type="reset" value="Reset">
        </form>
    </main>
</body>
</html>