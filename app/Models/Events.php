<?php
namespace App\Models;

class Event
{
    protected $row_id;
    protected $subject_id;
    protected $hadm_id;
    protected $icustay_id;
    protected $itemid;
    protected $charttime;
    protected $storetime;
    protected $cgid;
    protected $value;
    protected $valuenum;
    protected $valueuom;
    protected $warning;
    protected $error;
    protected $resultstatus;
    protected $stopped;
    protected $label;

    # GET METHODS

    public function getRowId(){
        return $this->row_id;
    }

    public function getSubjectId(){
        return $this->subject_id;
    }

    public function getHadmId(){
        return $this->hadm_id;
    }

    public function getIcustayId(){
        return $this->icustay_id;
    }

    public function getItemid(){
        return $this->itemid;
    }

    public function getCharttime(){
        return $this->charttime;
    }

    public function getStoretime(){
        return $this->storetime;
    }

    public function getCgid(){
        return $this->cgid;
    }

    public function getValue(){
        return $this->value;
    }

    public function getValuenum(){
        return $this->valuenum;
    }

    public function getValueuom(){
        return $this->valueuom;
    }

    public function getWarning(){
        return $this->warning;
    }

    public function getError(){
        return $this->error;
    }

    public function getResultstatus(){
        return $this->resultstatus;
    }

    public function getStopped(){
        return $this->stopped;
    }

    public function getCompleteDrug(){
        return $this->getValuenum() . " " . $this->getValueuom();
    }

    public function getLabel(){
        return $this->label;
    }

    # SET METHODS

    public function setRowId($row_id){
        $this->row_id = $row_id;
    }

    public function setSubjectId($subject_id){
        $this->subject_id = $subject_id;
    }

    public function setHadmId($hadm_id){
        $this->hadm_id = $hadm_id;
    }

    public function setIcustayId($icustay_id){
        $this->icustay_id = $icustay_id;
    }

    public function setItemid($itemid){
        $this->itemid = $itemid;
    }

    public function setCharttime($charttime){
        $this->charttime = $charttime;
    }

    public function setStoretime($storetime){
        $this->storetime = $storetime;
    }

    public function setCgid($cgid){
        $this->cgid = $cgid;
    }

    public function setValue($value){
        $this->value = $value;
    }

    public function setValuenum($valuenum){
        $this->valuenum = $valuenum;
    }

    public function setValueuom($valueuom){
        $this->valueuom = $valueuom;
    }

    public function setWarning($warning){
        $this->warning = $warning;
    }

    public function setError($error){
        $this->error = $error;
    }

    public function setResultstatus($resultstatus){
        $this->resultstatus = $resultstatus;
    }

    public function setStopped($stopped){
        $this->stopped = $stopped;
    }

    public function setLabel($label){
        $this->label = $label;
    }
}


class Events{
    public $events_data;
    protected $patient_number;

    public function getAllEvents(int $subject_id){
        $pdo = connect_database();
        $query = "SELECT * FROM `chartevents` JOIN `d_items` ON chartevents.itemid=d_items.itemid WHERE subject_id=" . $subject_id .";";
        $datas = $pdo->query($query)->fetchall();

        $events_for_patient = array();
        foreach($datas as $data){
            $event_temp = new Event;
            $event_temp->setRowId($data["row_id"]);
            $event_temp->setSubjectId($data["subject_id"]);
            $event_temp->setHadmId($data["hadm_id"]);
            $event_temp->setIcustayId($data["icustay_id"]);
            $event_temp->setItemid($data["itemid"]);
            $event_temp->setCharttime($data["charttime"]);
            $event_temp->setStoretime($data["storetime"]);
            $event_temp->setCgid($data["cgid"]);
            $event_temp->setValue($data["value"]);
            $event_temp->setValuenum($data["valuenum"]);
            $event_temp->setValueuom($data["valueuom"]);
            $event_temp->setWarning($data["warning"]);
            $event_temp->setError($data["error"]);
            $event_temp->setResultstatus($data["resultstatus"]);
            $event_temp->setStopped($data["stopped"]);
            $event_temp->setLabel($data["label"]);
            array_push($events_for_patient, $event_temp);
        }
        $this->events_data = $events_for_patient;
        return $this->$events_data;
    }

    public function getLastAdmissionEvents(int $subject_id, int $admission){
        $pdo = connect_database();
        $query = "SELECT * FROM `chartevents` JOIN `d_items` ON chartevents.itemid=d_items.itemid WHERE subject_id=" . $subject_id ." AND hadm_id=" . $admission . ";";
        $datas = $pdo->query($query)->fetchall();

        $events_for_patient = array();
        foreach($datas as $data){
            $event_temp = new Event;
            $event_temp->setRowId($data["row_id"]);
            $event_temp->setSubjectId($data["subject_id"]);
            $event_temp->setHadmId($data["hadm_id"]);
            $event_temp->setIcustayId($data["icustay_id"]);
            $event_temp->setItemid($data["itemid"]);
            $event_temp->setCharttime($data["charttime"]);
            $event_temp->setStoretime($data["storetime"]);
            $event_temp->setCgid($data["cgid"]);
            $event_temp->setValue($data["value"]);
            $event_temp->setValuenum($data["valuenum"]);
            $event_temp->setValueuom($data["valueuom"]);
            $event_temp->setWarning($data["warning"]);
            $event_temp->setError($data["error"]);
            $event_temp->setResultstatus($data["resultstatus"]);
            $event_temp->setStopped($data["stopped"]);
            $event_temp->setLabel($data["label"]);
            array_push($events_for_patient, $event_temp);
        }
        $this->events_data = $events_for_patient;
        return $this->$events_data;
    }
}