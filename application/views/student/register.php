<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
    <div class="inner_wrapping">
        <section class="regitration-con">
            <h2>Student Registration</h2>
            <div class="register">
                <div class="reg-banner">
                </div><!--ends reg-banner-->
                <div class="reg-form">
                    <form method="post" enctype="multipart/form-data" id="regform">
                        <p style="color:red;">(*) -Please fill all the mandatory fields!</p>
                        <div class="form-group">
                            <h5>Exam Center Information -</h5>
                            <div class="inner-form-item full">
                                <label for="e_center">Select Exam Center <span class="mand">*</span></label>
                                <select name="e_center" id="e_center" class="form-input">
                                    <option value="">Select</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <h5>User Information -</h5>
                            <div class="inner-form-item half">
                                <label for="fname">First Name <span class="mand">*</span></label>
                                <input type="text" name="fname" id="fname" class="form-input" required>
                            </div>
                            <div class="inner-form-item half">
                                <label for="lname">Last Name <span class="mand">*</span></label>
                                <input type="text" name="lname" id="lname" class="form-input" required>
                            </div>
                            <div class="inner-form-item half">
                                <label for="dob">Date of Birth <span class="mand">*</span></label>
                                <input type="date" name="dob" id="dob" class="form-input" required>
                            </div>
                            <div class="inner-form-item half">
                                <label for="sex">Sex <span class="mand">*</span></label>
                                <div class="combo form-input">
                                    <input type="radio" name="sex" value="male" id="male" checked required>
                                    <label for="male">Male</label> &nbsp;
                                    <input type="radio" name="sex" value="female" id="female" required>
                                    <label for="female">Female</label>&nbsp;
                                    <input type="radio" name="sex" value="other" id="other" required>
                                    <label for="other">Other</label> 
                                </div>
                            </div>
                            <div class="inner-form-item half">
                                <label for="mobile">Phone <span class="mand">*</span></label>
                                <input type="text" name="mobile" id="mobile" class="form-input" required>
                            </div>
                            <div class="inner-form-item half">
                                <label for="email">Email <span class="mand">*</span></label>
                                <input type="text" name="email" id="email" class="form-input" required> 
                            </div>
                        </div>
                        <div class="form-group">
                            <h5>Family Information -</h5>
                            <div class="inner-form-item half">
                                <label for="fathername">Father's Name <span class="mand">*</span></label>
                                <input type="text" name="fathername" id="fathername" class="form-input">
                            </div>
                            <div class="inner-form-item half">
                                <label for="mothername">Mother's Name <span class="mand">*</span></label>
                                <input type="text" name="mothername" id="mothername" class="form-input">
                            </div>
                            <div class="inner-form-item half">
                                <label for="foccupation">Father's Occupation <span class="mand">*</span></label>
                                <input type="text" name="foccupation" id="foccupation" class="form-input">
                            </div>
                            <div class="inner-form-item half">
                                <label for="moccupation">Mother's Occupation <span class="mand">*</span></label>
                                <input type="text" name="moccupation" id="moccupation" class="form-input">
                            </div>
                        </div>
                        <div class="form-group">
                            <h5>Address Information -</h5>
                            <div class="inner-form-item full">
                                <label for="fulladdr">Full Address <span class="mand">*</span></label>
                                <textarea name="fulladdr" id="fulladdr" class="form-input" rows="3" required></textarea>
                            </div>
                            <div class="inner-form-item half">
                                <label for="city">City <span class="mand">*</span></label>
                                <input type="text" name="city" id="city" class="form-input" required>
                            </div>
                            <div class="inner-form-item half">
                                <label for="pincode">Pincode <span class="mand">*</span></label>
                                <input type="text" name="pincode" id="pincode" class="form-input" required>
                            </div>
                            <div class="inner-form-item half">
                                <label for="state">State <span class="mand">*</span></label>
                                <input type="text" name="state" id="state" class="form-input" required>
                            </div>
                            <div class="inner-form-item half">
                                <label for="country">Country <span class="mand">*</span></label>
                                <input type="text" name="country" id="country" class="form-input" readonly value="India">
                            </div>
                            <div class="inner-form-item full">
                                <label for="hobbies">Hobbies </label>
                                <div class="combo form-input">
                                    <label for="drawing">Drawing</label>
                                    <input type="checkbox" name="hobbies[]" value="drawing" id="drawing"> &nbsp;
                                    <label for="singing">Singing</label>
                                    <input type="checkbox" name="hobbies[]" value="singing" id="singing"> &nbsp;
                                    <label for="sketching">Sketching</label>
                                    <input type="checkbox" name="hobbies[]" value="sketching" id="sketching"> &nbsp;
                                    <label for="other">Other</label> 
                                    <input type="input" name="hobbies[]" id="other">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <h5>Academic Information -</h5>
                            <table class="qualification-table">
                                <tr>
                                    <th>Examination</th>
                                    <th>Board</th>
                                    <th>Percentage</th>
                                    <th>Year of Passing</th>
                                </tr>
                                <tr>
                                    <th>Class X <span class="mand">*</span></th>
                                    <td><input type="text" class="form-input" name="classxboard" required></td>
                                    <td><input type="text" class="form-input w-30" name="classxpercent" required></td>
                                    <td><input type="text" class="form-input" name="classxpyear" required></td>
                                </tr>
                                <tr>
                                    <th>Class XII <span class="mand">*</span></th>
                                    <td><input type="text" class="form-input" name="classxiiboard" required></td>
                                    <td><input type="text" class="form-input w-30" name="classxiipercent" required></td>
                                    <td><input type="text" class="form-input" name="classxiipyear" required></td>
                                </tr>
                                <tr>
                                    <th>Graduation</th>
                                    <td><input type="text" class="form-input" name="classgboard"></td>
                                    <td><input type="text" class="form-input w-30" name="classgpercent"></td>
                                    <td><input type="text" class="form-input" name="classgpyear"></td>
                                </tr>
                                <tr>
                                    <th>Post Graduation</th>
                                    <td><input type="text" class="form-input" name="classpgboard"></td>
                                    <td><input type="text" class="form-input w-30" name="classpgpercent"></td>
                                    <td><input type="text" class="form-input" name="classpgpyear"></td>
                                </tr>
                            </table>
                        </div>
                        <div class="form-group">
                            <div class="inner-form-item full">
                                <label for="appliedfor">Applying for <span class="mand">*</span></label>
                                <select name="appliedfor" id="appliedfor" class="form-input" required>
                                    <option value="">Select Course</option>
                                    <?php if(isset($courses) && $courses != ""):?>
                                        <?php foreach($courses as $course):?>
                                            <option value="<?=$course->course_id?>"><?=$course->course_name?>
                                            : <?=$course->course_details?>
                                            </option>
                                        <?php endforeach;?>
                                    <?php else:?>
                                    <option value="">No courses found!</option>    
                                    <?php endif;?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="inner-form-item full">
                            <label for="image">Photo <span class="mand">*</span></label>
                                <input type="file" name="profile_image" id="image" class="form-input" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="inner-form-item full">
                                <input type="submit" name="submit" id="submit" class="submit-btn" value='Submit'>
                            </div>
                        </div>
                    </form>
                </div><!--ends reg-form-->
            </div>
        </section><!--ends registration con-->
        <div class="form-process">
            <div class="alert-msg">Your formd has been submitted.</div>
            <div class="loader">
                <img src="<?=base_url()?>resources/images/others/loader.gif" alt="loader">
            </div>
        </div>
    </div><!--ends inner_wrapping-->