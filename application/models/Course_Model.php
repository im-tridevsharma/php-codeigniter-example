<?php defined('BASEPATH') OR exit("No direct script access allowed.");

class Course_Model extends CI_Model{
    #course items
    private $table = 'courses';

    private $course_code;
    private $course_type;
    private $course_name;
    private $course_details;
    private $course_min_duration;
    private $course_max_duration;
    private $course_fees;
    private $created;
    private $last_update;
    public $time;

    public function __construct(){
        parent::__construct();
        $this->time = date("Y-m-d H:i:s");
    }

    public function setCourseCode($value = ""){
        $this->course_code = $this->sanitizeValue($value);
    }
    public function getCourseCode(){
        return $this->course_code;
    }
    public function setCourseType($value = ""){
        $this->course_type = $this->sanitizeValue($value);
    }
    public function getCourseType(){
        return $this->course_type;
    }
    public function setCourseName($value = ""){
        $this->course_name = $this->sanitizeValue($value);
    }
    public function getCourseName(){
        return $this->course_name;
    }
    public function setCourseDetails($value = ""){
        $this->course_details = $this->sanitizeValue($value);
    }
    public function getCourseDetails(){
        return $this->course_details;
    }
    public function setCourseMinDuration($value = ""){
        $this->course_min_duration = $this->sanitizeValue($value);
    }
    public function getCourseMinDuration(){
        return $this->course_min_duration;
    }
    public function setCourseMaxDuration($value = ""){
        $this->course_max_duration = $this->sanitizeValue($value);
    }
    public function getCourseMaxDuration(){
        return $this->course_max_duration;
    }
    public function setCourseFees($value = 0){
        $this->course_fees = $this->sanitizeValue($value);
    }
    public function getCourseFees(){
        return $this->course_fees;
    }
    public function setCourseCreated($value = ""){
        if($value==""){
            $value = $this->time;
        }
        $this->created = $this->sanitizeValue($value);
    }
    public function getCourseCreated(){
        return $this->created;
    }
    public function setCourseLastUpdate($value = ""){
        if($value==""){
            $value = $this->time;
        }
        $this->last_update = $this->sanitizeValue($value);
    }
    public function getCourseLastUpdate(){
        return $this->last_update;
    }


    public function add(){
        $this->db->insert($this->table,[
            "course_code"   => $this->course_code,
            "course_type"   => $this->course_type,
            "course_name"   => $this->course_name,
            "course_details"    => $this->course_details,
            "course_min_duration" => $this->course_min_duration,
            "course_max_duration"   => $this->course_max_duration,
            "course_fees"   => $this->course_fees,
            "created"   => $this->created,
            "last_update"   => $this->last_update
        ]);
        return $this->db->insert_id();
    }

    public function update($course_id = ""){
        if($course_id!==""){
            $this->db->set([
                "course_code"   => $this->course_code,
                "course_type"   => $this->course_type,
                "course_name"   => $this->course_name,
                "course_details"    => $this->course_details,
                "course_min_duration" => $this->course_min_duration,
                "course_max_duration"   => $this->course_max_duration,
                "course_fees"   => $this->course_fees,
                "last_update"   => $this->last_update
            ]);
            $this->db->where("course_id",$course_id);
            $this->db->update($this->table);
            if($this->db->affected_rows() > 0){
                return true;
            }else{
                return false;
            }
        }else{
            return false;
        }
    }

    public function delete($course_id = ""){
        if($course_id!==""){
            $this->db->where("course_id",$course_id);
            $this->db->delete($this->table);
            return true;
        }else{
            return false;
        }
    }

    public function get($what="*"){
        $this->db->select($what);
        $query = $this->db->get($this->table);
        if($query->num_rows() > 0){
            return $query->result();
        }else{
            return "";
        }
    }

    public function sanitizeValue($value){
        $value = htmlspecialchars($value);
        if(is_numeric($value)){
            $value = filter_var($value, FILTER_SANITIZE_NUMBER_INT);
        }else{
            $value = filter_var($value, FILTER_SANITIZE_STRING);
        }
        return $value;
    }
    
}

?>