<?php
class Model
{
    private $server = "localhost";
    private $username = "alex";
    private $password = "alex";
    private $db = "php_oop_crud";
    private $conn;

    public function __construct()
    {
        try {
            //code...
            $this->conn = new mysqli($this->server, $this->username, $this->password, $this->db);
        } catch (Exception $e) {
            //throw $e;
            echo "Connection Failed" . $e->getMessage();
        }
    }
    public function insert()
    {
        if (isset($_POST['submit'])) {
            if (isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['email']) && isset($_POST['number']) && isset($_POST['password'])) {
                if (!empty($_POST['fname']) && !empty($_POST['lname']) && !empty($_POST['email']) && !empty($_POST['number']) && !empty($_POST['password'])) {
                    $fname = $_POST['fname'];
                    $lname = $_POST['lname'];
                    $email = $_POST['email'];
                    $number = $_POST['number'];
                    $password = $_POST['password'];

                    $query = "INSERT INTO tbl_users(fname,lname,email,number,password) values('$fname','$lname','$email','$number','$password')";

                    if ($sql = $this->conn->query($query)) {
                        # code...
                        echo "<script>alert('Success');</script>";
                        echo "<script>window.location.href='index.php';</script>";
                    }else{
                        echo "<script>alert('Failed');</script>";       
                        echo "<script>window.location.href='index.php';</script>";
                    }
                } else {
                    echo "<script>alert('empty');</script>";       
                    echo "<script>window.location.href='index.php';</script>";
                }
            }
        }
    }
    public function retrieve(){
        $data = null;
        $query = "SELECT * FROM tbl_users";
        if($sql = $this->conn->query($query)){
            while($row = mysqli_fetch_assoc($sql)){
                $data[] = $row;
            }
        }
        return $data;
    }
    public function delete($userID){
        // $userID = null;
        $query = "DELETE FROM tbl_users where userID='$userID'";
        if($sql = $this->conn->query($query)){
            return true;
        }else{
            return false;
        }
    }
    public function fetch_single($userID){
        $data = null;
        $query = "SELECT * FROM tbl_users WHERE userID='$userID'";
        if($sql = $this->conn->query($query)){
            while($row = $sql -> fetch_assoc()){
                $data = $row;
            }
        }
        return $data;
    }
    public function edit($userID){
        $data = null;
        $query = "SELECT * FROM tbl_users WHERE userID='$userID'";
        if($sql = $this->conn->query($query)){
            while($row = $sql -> fetch_assoc()){
                $data = $row;
            }
        }
        return $data;
    }
    public function update($data)
    {
        // var_dump($data);
         $query = "UPDATE tbl_users SET fname='$data[fname]',lname='$data[lname]', email='$data[email]',number='$data[number]',password='$data[password]' WHERE userID='$data[userID]'";

         if($sql = $this->conn->query($query)){
             return true;
         }else{
             return false;
         }
    }
}
