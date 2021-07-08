<?php 
    include '../../model/dbconnection.php';
    
    runMySqlQuery("INSERT INTO `tbl_student`(`student_fname`, `student_lname`, `student_phone`) VALUES ('$_POST[studentFirstName]','$_POST[studentLastName]','$_POST[studentPhoneNumber]')");
   
?>