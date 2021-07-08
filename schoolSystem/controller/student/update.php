<?php
    include '../../model/dbconnection.php';
    runMySqlQuery("UPDATE `tbl_student` SET `student_fname`='$_POST[studentFirstName]',`student_lname`='$_POST[studentLastName]',`student_phone`='$_POST[studentPhoneNumber]' WHERE `student_id`='$_POST[StudentId]'");
    
?>