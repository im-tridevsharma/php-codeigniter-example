<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admission extends CI_Controller {

	public function __construct(){
        parent::__construct();
        $this->load->model("Admission_Model","Admission");
        $this->load->helper("encryption_helper");
	}

    #add new user
	public function addNewUser(){
        if(isset($_POST) && isset($_FILES) && $_POST!="" && $_FILES!=""){
            if(isset($_FILES['profile_image']) && !empty($_FILES['profile_image'])){
                $target = FCPATH."resources/images/user/";
                $filename = $_FILES['profile_image']['name'];
                $allowed_image = ["jpg","jpeg","png","gif"];
                $ext = strtolower(pathinfo($_FILES['profile_image']['name'], PATHINFO_EXTENSION));
                if(!in_array($ext, $allowed_image)){
                    echo "invalid";
                }else{
                    if(move_uploaded_file($_FILES['profile_image']['tmp_name'], $target.$filename)){
                        $this->Admission->setProfileImage($filename);
                    }else{
                        $this->Admission->setProfileImage("default.png");
                    }
                    #set other user data
                    $registration_id = getLastRegId();
                    $registration_id = "REG2020-".(intval($registration_id)+1);
                    $this->Admission->setRegistrationId($registration_id);

                    $examination_cid = (isset($_POST['e_center']) && $_POST['e_center']!="")?$_POST['e_center']:"";
                    $this->Admission->setExamCId($examination_cid);

                    $fname = (isset($_POST['fname']) && $_POST['fname']!="")?$_POST['fname']:"";
                    $this->Admission->setFname($fname);

                    $lname = (isset($_POST['lname']) && $_POST['lname']!="")?$_POST['lname']:"";
                    $this->Admission->setLname($lname);

                    $dob = (isset($_POST['dob']) && $_POST['dob']!="")?$_POST['dob']:"";
                    $this->Admission->setDob($dob);

                    $sex = (isset($_POST['sex']) && $_POST['sex']!="")?$_POST['sex']:"";
                    $this->Admission->setSex($sex);

                    $mobile = (isset($_POST['mobile']) && $_POST['mobile']!="")?$_POST['mobile']:"";
                    $this->Admission->setPhone($mobile);

                    $email = (isset($_POST['email']) && $_POST['email']!="")?$_POST['email']:"";
                    $this->Admission->setEmail($email);

                    $fathername = (isset($_POST['fathername']) && $_POST['fathername']!="")?$_POST['fathername']:"";
                    $this->Admission->setFatherName($fathername);

                    $foccupation = (isset($_POST['foccupation']) && $_POST['foccupation']!="")?$_POST['foccupation']:"";
                    $this->Admission->setFatherOccupation($foccupation);

                    $mothername = (isset($_POST['mothername']) && $_POST['mothername']!="")?$_POST['mothername']:"";
                    $this->Admission->setMotherName($mothername);

                    $moccupation = (isset($_POST['moccupation']) && $_POST['moccupation']!="")?$_POST['moccupation']:"";
                    $this->Admission->setMotherOccupation($moccupation);

                    $fulladdr = (isset($_POST['fulladdr']) && $_POST['fulladdr']!="")?$_POST['fulladdr']:"";
                    $this->Admission->setFullAddress($fulladdr);

                    $city = (isset($_POST['city']) && $_POST['city']!="")?$_POST['city']:"";
                    $this->Admission->setCity($city);

                    $pincode = (isset($_POST['pincode']) && $_POST['pincode']!="")?$_POST['pincode']:"";
                    $this->Admission->setPincode($pincode);

                    $state = (isset($_POST['state']) && $_POST['state']!="")?$_POST['state']:"";
                    $this->Admission->setState($state);

                    $country = (isset($_POST['country']) && $_POST['country']!="")?$_POST['country']:"";
                    $this->Admission->setCountry($country);

                    $hobbies = (isset($_POST['hobbies']) && $_POST['hobbies']!="")?json_encode($_POST['hobbies']):"";
                    $this->Admission->setHobbies($hobbies);
                    
                    $classxboard = (isset($_POST['classxboard']) && $_POST['classxboard']!="")?$_POST['classxboard']:"";
                    $classxpercent = (isset($_POST['classxpercent']) && $_POST['classxpercent']!="")?$_POST['classxpercent']:"";
                    $classxpyear = (isset($_POST['classxpyear']) && $_POST['classxpyear']!="")?$_POST['classxpyear']:"";
                    $classx = json_encode(["board"=>$classxboard,"percentage"=>$classxpercent,"year"=>$classxpyear]);
                    $this->Admission->setClassXInfo($classx);

                    $classxiiboard = (isset($_POST['classxiiboard']) && $_POST['classxiiboard']!="")?$_POST['classxiiboard']:"";
                    $classxiipercent = (isset($_POST['classxiipercent']) && $_POST['classxiipercent']!="")?$_POST['classxiipercent']:"";
                    $classxiipyear = (isset($_POST['classxiipyear']) && $_POST['classxiipyear']!="")?$_POST['classxiipyear']:"";
                    $classxii = json_encode(["board"=>$classxiiboard,"percentage"=>$classxiipercent,"year"=>$classxiipyear]);
                    $this->Admission->setClassXIIInfo($classxii);

                    $classgboard = (isset($_POST['classgboard']) && $_POST['classgboard']!="")?$_POST['classgboard']:"";
                    $classgpercent = (isset($_POST['classgpercent']) && $_POST['classgpercent']!="")?$_POST['classgpercent']:"";
                    $classgpyear = (isset($_POST['classgpyear']) && $_POST['classgpyear']!="")?$_POST['classgpyear']:"";
                    $classg = json_encode(["board"=>$classgboard,"percentage"=>$classgpercent,"year"=>$classgpyear]);
                    $this->Admission->setGraduationInfo($classg);

                    $classpgboard = (isset($_POST['classpgboard']) && $_POST['classpgboard']!="")?$_POST['classpgboard']:"";
                    $classpgpercent = (isset($_POST['classpgpercent']) && $_POST['classpgpercent']!="")?$_POST['classpgpercent']:"";
                    $classpgpyear = (isset($_POST['classpgpyear']) && $_POST['classpgpyear']!="")?$_POST['classpgpyear']:"";
                    $classpg = json_encode(["board"=>$classpgboard,"percentage"=>$classpgpercent,"year"=>$classpgpyear]);
                    $this->Admission->setPostGraduationInfo($classpg);
                    
                    $appliedfor = (isset($_POST['appliedfor']) && $_POST['appliedfor']!="")?$_POST['appliedfor']:"";
                    $this->Admission->setCourseId($appliedfor);

                    $this->Admission->setStatus(1);

                    $created = date("Y-m-d H:i:s");
                    $this->Admission->setAdmissionCreated($created);
                    
                    $last_update = date("Y-m-d H:i:s");
                    $this->Admission->setAdmissionLastUpdate($last_update);

                    $status = $this->Admission->add();
                    if($status){
                        echo "success";
                    }else{
                        echo "failed";
                    }
                }
            }else{
                echo "error";
            }
        }else{
            echo "datanotfound";
        }
    }
}


?>