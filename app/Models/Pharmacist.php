<?php
namespace App\Models;

class Pharmacist
{
    protected $row_id;
    protected $id;
    protected $gender;
    protected $date_of_birth;
    protected $date_of_death;
    protected $date_of_death_hosp;
    protected $expire_flag;



    public function getLogin(){
        $this->username = stripslashes($_POST['username']);
        $this->password = $_POST['password'];
        $pdo = connect_database();
        $query = "SELECT * FROM `users` WHERE username='$username' and password='$password'";
        // return $pdo->query($query)->rowCount();
        return 1;
    }

    public function getFullName(){
        $this->name = "pierre";
        $this->surname = "jézégou";
        return ucfirst($this->name) . " " . ucfirst($this->surname);
    }

    public function getFunction(){
        return $this->function;
    }
}
