<?php defined('BASEPATH') OR exit("No direct script access allowed.");

class Admission_Model extends CI_Model{
#details
    private $table = "user_registration";
    private $registration_id;
    private $examination_cid;
    private $course_id;
    private $f_name;
    private $l_name;
    private $dob;
    private $sex;
    private $phone;
    private $email;
    private $father_name;
    private $father_occupation;
    private $mother_name;
    private $mother_occupation;
    private $full_address;
    private $city;
    private $pincode;
    private $state;
    private $country;
    private $hobbies;
    private $class_x_info;
    private $class_xii_info;
    private $graduation_info;
    private $post_graduation_info;
    private $profile_image;
    private $status;
    private $created;
    private $last_update;
    public $time;

    public function __construct(){
        parent::__construct();
        $this->load->helper("encryption_helper");
        $time = date("Y-m-d H:i:s");
    }

    #getter and setters
    public function setRegistrationId($value = ""){
        $this->registration_id = $value;
    }
    public function getRegistrationId(){
        return $this->registration_id;  
    }
    public function setExamCId($value = ""){
        $this->examination_cid = intval($value);
    }
    public function getExamCId(){
        return $this->examination_cid;
    }
    public function setCourseId($value = ""){
        $this->course_id = intval($value);
    }
    public function getCourseId(){
        return $this->course_id;
    }
    public function setFname($value = ""){
        $this->f_name = $this->sanitizeAndEncryptValue($value);
    }
    public function getFname(){
        return $this->f_name;
    }
    public function setLname($value = ""){
        $this->l_name = $this->sanitizeAndEncryptValue($value);
    }
    public function getLname(){
        return $this->l_name;
    }
    public function setDob($value = ""){
        $this->dob = $this->sanitizeAndEncryptValue($value);
    }
    public function getDob(){
        return $this->dob;
    }
    public function setSex($value = ""){
        $this->sex = $this->sanitizeValue($value);
    }
    public function getSex(){
        return $this->sex;
    }
    public function setPhone($value = ""){
        $this->phone = $this->sanitizeAndEncryptValue($value);
    }
    public function getPhone(){
        return $this->phone;
    }
    public function setEmail($value = ""){
        $this->email = $this->sanitizeAndEncryptValue($value);
    }
    public function getEmail(){
        return $this->email;
    }
    public function setFatherName($value = ""){
        $this->father_name = $this->sanitizeAndEncryptValue($value);
    }
    public function getFatherName(){
        return $this->father_name;
    }
    public function setFatherOccupation($value = ""){
        $this->father_occupation = $this->sanitizeAndEncryptValue($value);
    }
    public function getFatherOccupation(){
        return $this->father_occupation;
    }
    public function setMotherName($value = ""){
        $this->mother_name = $this->sanitizeAndEncryptValue($value);
    }
    public function getMotherName(){
        return $this->mother_name;
    }
    public function setMotherOccupation($value = ""){
        $this->mother_occupation = $this->sanitizeAndEncryptValue($value);
    }
    public function getMotherOccupation(){
        return $this->mother_occupation;
    }
    public function setFullAddress($value = ""){
        $this->full_address = $this->sanitizeAndEncryptValue($value);
    }
    public function getFullAddress(){
        return $this->full_address;
    }
    public function setCity($value = ""){
        $this->city = $this->sanitizeAndEncryptValue($value);
    }
    public function getCity(){
        return $this->city;
    }
    public function setPincode($value = ""){
        $this->pincode = $this->sanitizeAndEncryptValue($value);
    }
    public function getPincode(){
        return $this->pincode;
    }
    public function setState($value = ""){
        $this->state = $this->sanitizeAndEncryptValue($value);
    }
    public function getState(){
        return $this->state;
    }
    public function setCountry($value = ""){
        $this->country = $this->sanitizeAndEncryptValue($value);
    }
    public function getCountry(){
        return $this->country;
    }
    public function setHobbies($value = ""){
        $this->hobbies = $value;
    }
    public function getHobbies(){
        return $this->hobbies;
    }
    public function setClassXInfo($value = ""){
        $this->class_x_info = $value;
    }
    public function getClassXInfo(){
        return $this->class_x_info;
    }
    public function setClassXIIInfo($value = ""){
        $this->class_xii_info = $value;
    }
    public function getClassXIIInfo(){
        return $this->class_xii_info;
    }
    public function setGraduationInfo($value = ""){
        $this->graduation_info = $value;
    }
    public function getGraduationInfo(){
        return $this->graduation_info;
    }
    public function setPostGraduationInfo($value = ""){
        $this->post_graduation_info = $value;
    }
    public function getPostGraduationInfo(){
        return $this->post_graduation_info;
    }
    public function setProfileImage($value = ""){
        $this->profile_image = $this->sanitizeAndEncryptValue($value);
    }
    public function getProfileImage(){
        return $this->profile_image;
    }
    public function setStatus($value = ""){
        $this->status = $this->sanitizeValue($value);
    }
    public function getStatus(){
        return $this->status;
    }
    public function setAdmissionCreated($value = ""){
        if($value==""){
            $value = $this->time;
        }
        $this->created = $this->sanitizeValue($value);
    }
    public function getAdmissionCreated(){
        return $this->created;
    }
    public function setAdmissionLastUpdate($value = ""){
        if($value==""){
            $value = $this->time;
        }
        $this->last_update = $this->sanitizeValue($value);
    }
    public function getAdmissionLastUpdate(){
        return $this->last_update;
    }

    #add user
    public function add(){
        $this->db->insert($this->table,[
            "registration_id"   => $this->registration_id,
            "examination_cid"   => $this->examination_cid,
            "course_id" => $this->course_id,
            "f_name"   => $this->f_name,
            "l_name"    => $this->l_name,
            "dob" => $this->dob,
            "sex	"   => $this->sex,
            "father_name"   => $this->father_name,
            "phone"   => $this->phone,
            "email"   => $this->email,
            "father_occupation" => $this->father_occupation,
            "mother_name"   => $this->mother_name,
            "mother_occupation"   => $this->mother_occupation,
            "full_address"   => $this->full_address,
            "city"   => $this->city,
            "pincode"   => $this->pincode,
            "state" => $this->state,
            "country"   => $this->country,
            "hobbies"   => $this->hobbies,
            "class_x_info"   => $this->class_x_info,
            "class_xii_info"   => $this->class_xii_info,
            "graduation_info"   => $this->graduation_info,
            "post_graduation_info"   => $this->post_graduation_info,
            "profile_image"   => $this->profile_image,
            "created"   => $this->created,
            "last_update"   => $this->last_update,
            "status"   => $this->status
        ]);
        return $this->db->insert_id();
    }
    #update
    public function update($ur_id = ""){
        if($ur_id!==""){
            $this->db->set([
                "registration_id"   => $this->registration_id,
                "examination_cid"   => $this->examination_cid,
                "course_id" => $this->course_id,
                "f_name"   => $this->f_name,
                "l_name"    => $this->l_name,
                "dob" => $this->dob,
                "sex"   => $this->sex,
                "father_name"   => $this->father_name,
                "phone"   => $this->phone,
                "email"   => $this->email,
                "father_occupation" => $this->father_occupation,
                "mother_name"   => $this->mother_name,
                "mother_occupation"   => $this->mother_occupation,
                "full_address"   => $this->full_address,
                "city"   => $this->city,
                "pincode"   => $this->pincode,
                "state" => $this->state,
                "country"   => $this->country,
                "hobbies"   => $this->hobbies,
                "class_x_info"   => $this->class_x_info,
                "class_xii_info"   => $this->class_xii_info,
                "graduation_info"   => $this->graduation_info,
                "post_graduation_info"   => $this->post_graduation_info,
                "profile_image"   => $this->profile_image,
                "created"   => $this->created,
                "last_update"   => $this->last_update,
                "status"   => $this->status
            ]);
            $this->db->where("ur_id",$ur_id);
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
    #delete
    public function delete($ur_id = ""){
        if($ur_id!==""){
            $this->db->where("ur_id",$course_id);
            $this->db->delete($this->table);
            return true;
        }else{
            return false;
        }
    }
    #get
    public function get($registration_id = "",$what = "*"){
        if($registration_id!==""){
            $this->db->where("registration_id",encrypt($registration_id));
        }
        $this->db->select($what);
        $query = $this->db->get($this->table);
        if($query->num_rows()>0){
            return $query->result();
        }else{
            return "";
        }
    }
    #encrypt data
    public function sanitizeAndEncryptValue($value){
        $value = $this->sanitizeValue($value);
        return encrypt($value);
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