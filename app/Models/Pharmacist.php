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

    public function getName(){
        return $this->name;
    }

    public function getSurname(){
        return $this->surname;
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
        if($this->function==="Administrateur") return true;
        else return false;
    }

    private function getPassword(){
        return $this->password;
    }

    public function resetPassword(){
        return 0;
    }









    public function setName(string $name){
        $this->name = $name;
    }

    public function setSurname(string $surname){
        $this->surname = $surname;
    }

    public function setUsername(string $name, string $surname){
        $this->username = $this->stripAccents(strtolower($name[0].$surname));
    }

    private function stripAccents($str) {
        return strtr(utf8_decode($str), utf8_decode('àáâãäçèéêëìíîïñòóôõöùúûüýÿÀÁÂÃÄÇÈÉÊËÌÍÎÏÑÒÓÔÕÖÙÚÛÜÝ'), 'aaaaaceeeeiiiinooooouuuuyyAAAAACEEEEIIIINOOOOOUUUUY');
    }

    public function setEmail(string $email){
        $this->email = $email;
    }

    public function setPhone(string $phone){
        $this->phone = $phone;
    }

    public function setFunction(string $function){
        $this->function = $function;
    }

    public function initOther(){
        $this->handled_alerts = 0;
        $this->archived_alerts = 0;
        $this->password = $this->newpassword();
        $this->id=$this->newId();
        $this->writeDatabase();
    }

    public function newpassword(){
        $length = 8;
        $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
        return substr(str_shuffle($chars),0,$length);
    }

    public function newId(){
        $pdo = connect_database();
        $query = "SELECT MAX(id) FROM `users`";
        $res = intval($pdo->query($query)->fetch()["MAX(id)"])+1;
        return $res;
    }



    public function writeDatabase(){
        $pdo = connect_database();
        $sql = "INSERT INTO `users` (`id`, `surname`, `name`, `username`, `email`, `password`, `handled_alerts`, `archived_alerts`, `status`, `admin`) VALUES (:id, :surname, :name, :username, :email, :password, :handled, :archived, :status, :admin)";
        $data = [
            'id' => $this->id,
            'surname' => $this->surname,
            'name' => $this->name,
            'username' => $this->username,
            'email' => $this->email,
            'password' => $this->password,
            'handled' => $this->handled_alerts,
            'archived' => $this->archived_alerts,
            'status' => $this->function,
            'admin' => 0
        ];
        $res = $pdo->prepare($sql)->execute($data);
    }

    public function sendMail(){
        $postdata = 
            json_encode(array(
                'name' => $this->getName(),
                'surname' => $this->getSurname(),
                'username' => $this->getUsername(),
                'email' => $this->getEmail(),
                "password" => $this->getPassword()
            )
        );

        $opts = array('http' =>
            array(
                'method'  => 'POST',
                'header'  => 'Content-type: application/json; charset=utf-8',
                'content' => $postdata
            )
        );
        var_dump($postdata);

        $context = stream_context_create($opts);
        $result = file_get_contents('http://projet-livinglab.rezoleo.fr:8000/welcome/', false, $context);
    }
}