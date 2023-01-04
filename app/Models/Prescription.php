<?php
namespace App\Models;

class Prescription
{
    protected $row_id;
    protected $subject_id;
    protected $start_date;
    protected $end_date;
    protected $drug;
    protected $prod_strength;
    protected $dose;
    protected $dose_unit;
    protected $form_unit;
    protected $route;
    protected $status;
    protected $comment;
    protected $alert;


    //GET METHODS

    public function getRowId(){
        return $this->row_id;
    }
    public function getSubject(){
        return $this->subject_id;
    }
    public function getStart(){
        return $this->start_date;
    }
    public function getEnd(){
        return $this->end_date;
    }
    public function getDrug(){
        return $this->drug;
    }
    public function getStrenght(){
        return $this->prod_strength;
    }
    public function getDose(){
        return $this->dose;
    }
    public function getDoseUnit(){
        return $this->dose_unit;
    }
    public function getFormUnit(){
        return $this->form_unit;
    }
    public function getRoute(){
        return $this->route;
    }
    public function getStatus(){
        return $this->status;
    }
    public function getComment(){
        return $this->comment;
    }
    public function getCompleteDose(){
        return $this->getDose() . " " . $this->getDoseUnit();
    }

    public function getAlert(){
        return $this->alert;
    }


    // SET METHODS 
    public function setRowId($row_id){
        $this->row_id = $row_id;
    }
    public function setSubject($subject_id){
        $this->subject_id = $subject_id;
    }
    public function setStart($start_date){
        $this->start_date = $start_date;
    }
    public function setEnd($end_date){
        $this->end_date = $end_date;
    }
    public function setDrug($drug){
        $this->drug = $drug;
    }
    public function setStrenght($prod_strength){
        $this->prod_strength = $prod_strength;
    }
    public function setDose($dose){
        $this->dose = $dose;
    }
    public function setDoseUnit($dose_unit){
        $this->dose_unit = $dose_unit;
    }
    public function setFormUnit($form_unit){
        $this->form_unit = $form_unit;
    }
    public function setRoute($route){
        $this->route = $route;
    }
    public function setStatus($status){
        $this->status = $status;
    }
    public function setComment($comment){
        $this->comment = $comment;
    }
    public function setAlert(int $alert){
        $this->alert = $alert;
    }
    

}