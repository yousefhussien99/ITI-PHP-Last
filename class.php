
<?php
class Db {
    public function __construct(){
        $servername = "localhost";
$username = "root";
$Passwordd = "Admin";
$dbname = "test";
// Create connection
$this->conn = new mysqli($servername, $username, $Passwordd, $dbname);
// Check connection
   if ($this->conn->connect_error) {
    die("Connection failed: " . $this->conn->connect_error);
  }
    }
    public function insert($name,$email,$password,$room_number,$ext){
        $sql = "INSERT INTO users (name, email, pass, roomnum, ext) VALUES ('$name', '$email', '$password', '$room_number', '$ext')";
        if($this->conn->query($sql) === TRUE){
            header("Location: view.php");
        }
        else{
            echo "Error: " . $sql . "<br>" . $this->conn->error;
        }
     
    }
    public function select (){
        $sql = "SELECT * FROM users";
        $result = $this->conn->query($sql);
        if($result->num_rows > 0){

            echo "<table border='2'><tr><th>Name</th><th>Email</th><th>Room Number</th><th>Ext</th> <th>Update</th> <th>Delete</th></tr>";
            while($row = $result->fetch_assoc()){
                echo "<tr><td>" . $row["name"] . "</td><td>" . $row["email"] . "</td><td>" . $row["roomnum"] . "</td><td>" . $row["ext"] . "</td><td><a href='update.php?id=" . $row["email"] . "'>Update</a></td><td><a href='delete.php?id=" . $row["email"] . "'>Delete</a></td></tr>";
            }
        }
        else{
            echo "0 results";
        }
    }
    public function delete($email){
        $sql = "DELETE FROM users WHERE email='$email'";
        if($this->conn->query($sql) === TRUE){
            header("Location: view.php");
        }
        else{
            echo "Error: " . $sql . "<br>" . $this->conn->error;
        }
    }
    public function update($name,$email,$password,$room_number,$ext){
        $sql = "UPDATE users SET name='$name', pass='$password', roomnum='$room_number', ext='$ext' WHERE email='$email'";
        if($this->conn->query($sql) === TRUE){
            header("Location: view.php");
        }
        else{
            echo "Error: " . $sql . "<br>" . $this->conn->error;
        }
    }

    public function __destruct(){
        $this->conn->close();
    }
}