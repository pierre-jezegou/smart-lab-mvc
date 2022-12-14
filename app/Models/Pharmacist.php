<?php
namespace App\Models;

class Pharmacist
{
    protected $id;
    protected $name;
    protected $surname;
    protected $username;
    private $email;
    protected $password;
    protected $handled_alerts;
    protected $archived_alerts;
    protected $function;
    protected $phone;
    protected $admin;

    public function getLogin(){
        $this->username = stripslashes($_POST['username']);
        $this->password = stripslashes($_POST['password']);
        $pdo = connect_database();
        $query = "SELECT * FROM `users` WHERE username='$this->username' and password='$this->password'";
        if($pdo->query($query)->rowCount()>0){
            $query = "SELECT * FROM `users` WHERE username='$this->username'";
            $result = $pdo->query($query)->fetch();
            $this->name = $result["name"];
            $this->surname = $result["surname"];
            $this->email = $result["email"];
            $this->handled_alerts = $result["handled_alerts"];
            $this->archived_alerts = $result["archived_alerts"];
            $this->function = $result["status"];
            $this->admin = $result["admin"];
        }
        return $pdo->query($query)->rowCount();
    }

    public function getUsername(){
        return $this->username;
    }

    public function getFullName(){
        return ucfirst($this->name) . " " . ucfirst($this->surname);
    }

    public function getFunction(){
        return $this->function;
    }

    public function getHandledAlerts(){
        return $this->handled_alerts;
    }

    public function getEmail(){
        return $this->email;
    }

    public function getAdmin(){
        if($this->admin==="1") return true;
        else return false;
    }
}
