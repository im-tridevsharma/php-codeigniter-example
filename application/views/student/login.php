<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

    <div class="inner_wrapping">
        <section class="login-con">
            <h2>Student Login</h2>
            <form id="loginForm" method="POST" name="loginForm">
                <div class="form-group">
                    <div class="inner-form-item full">
                        <label for="enrolment">Enrolment Number</label>
                        <input type="text" name="enrolment" id="enrolment" class="form-input">
                    </div>
                    <div class="inner-form-item full">
                        <label for="course">Course</label>
                        <select id="course" class="form-input" name="course">
                            <option value="">Select</option>
                            <option value="mca">Mca</option>
                        </select>
                    </div>
                    <div class="inner-form-item full">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-input">
                    </div>
                    <div class="inner-form-item full">
                        <button type="submit" id="loginSubmit" class="submit-btn">Login</button>
                    </div>
                </div>
            </form>
        </section><!--ends login con-->
        <div class="form-process">
            <div class="alert-msg">Your formd has been submitted.</div>
            <div class="loader">
                <img src="<?=base_url()?>resources/images/others/loader.gif" alt="loader">
            </div>
        </div>
    </div><!--ends inner_wrapping-->