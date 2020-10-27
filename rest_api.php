<?php
    $emp_id= $_GET['id'];
    $emp_fname= $_GET['first_name'];
    $emp_lname= $_GET['last_name'];
    $emp_mail= $_GET['email'];
    $emp_phno= $_GET['number'];
    $emp_sal= $_GET['salary'];


    $file=fopen("emp_data.csv","a");
    fwrite($file,"\n");
    fwrite($file,$emp_id);
    fwrite($file,",");
    fwrite($file,$emp_fname);
    fwrite($file, ",");
    fwrite($file,$emp_lname);
    fwrite($file, ",");
    fwrite($file,$emp_mail);
    fwrite($file, ",");
    fwrite($file,$emp_phno);
    fwrite($file, ",");
    fwrite($file,$emp_sal);
    fclose($file);
    echo 'done'
?>