<?php

$Father_Name = $_POST['FatherName'];
$Mother_Name = $_POST['MotherName'];
$Student_Name = $_POST['StudentName'];
$Dob = $_POST['DOB'];
$Parent_Education = $_POST['ParentEducation'];
$Gender_ = $_POST['Gender'];
$Applying_for = $_POST['Applyingfor'];
$AadharNo = $_POST['AadharNo.'];
$PhoneNo = $_POST['PhoneNo.'];
$visitor_email  = $_POST['EmailId'];
$Address_ = $_POST['Address'];

    $email_from = 'factpathshalaoficial@gmail.com';

$email_subject = "New Addmission";
$email_body = "Father's Name: $Father_Name.\n".
              "Mother's Name: $Mother_Name.\n".
              "Student Name: $Student_Name.\n".
              "DOB: $Dob.\n".
              "Parent's Education = $Parent_Education.\n".
              "Gender: $Gender_.\n".
              "applying For Std.: $Applying_for.\n".
              "Aadhar No.: $AadharNo.\n".
              "Phone No.: $PhoneNo.\n".
              "Email Id: $visitor_email.\n".
              "Address: $Address_.\n".

              $to = "sdmpsnaigaon@gmail.com";

              $headers = "From: $email_from \r\n".
              $headers .= "Reply-To: $visitor_email\r\n".
              
              mail($to,$email_subject,$email_body,$headers)
              
              header("Location: application.html")


?>