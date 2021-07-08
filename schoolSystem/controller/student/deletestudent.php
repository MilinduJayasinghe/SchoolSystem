<?php 
    include '../../model/dbconnection.php';

    runMySqlQuery("DELETE FROM `tbl_student` WHERE `student_id` = '$_POST[StudentId]'");

?>