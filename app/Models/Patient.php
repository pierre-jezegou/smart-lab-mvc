<?php
namespace App\Models;

class Patient
{
    protected $row_id;
    protected $id;
    protected $gender;
    protected $date_of_birth;
    protected $date_of_death;
    protected $date_of_death_hosp;
    protected $expire_flag;

    // GET METHODS
    public function getPatientId(){
        return $this->id;
    }

    public function getGender(){
        return $this->gender;
    }

    public function getDateOfBirth(){
        return $this->date_of_birth;
    }

    public function getDateOfDeath(){
        return $this->date_of_death;
    }

    public function getExpireFlag(){
        return $this->expire_flag;
    }

    public function read($id){
        // require_once(A'')
        $pdo = connect_database();
        $query = "SELECT * FROM `patients` WHERE subject_id=" . $id .";";
        $data = $pdo->query($query)->fetch();
        $this->gender = $data["gender"];
        $this->date_of_birth = $data["date_of_birth"];
        $this->date_of_death = $data["date_of_death"];
        $this->expire_flag = $data["date_of_death_hosp"];
        close_pdo($pdo);
        return $this;
    }

    public function setDeath($death){
        $this->date_of_death = $death;
    }
}
