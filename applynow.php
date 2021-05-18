<?php

$FatherName = $_POST['FatherName'];
$MotherName = $_POST['MotherName'];
$StudentName = $_POST['StudentName'];
$DOB = $_POST['DOB'];
$ParentEducation = $_POST['ParentEducation'];
$Gender = $_POST['Gender'];
$Applyingfor = $_POST['Applyingfor'];
$AadharNo. = $_POST['AadharNo'];
$PhoneNo. = $_POST['PhoneNo'];
$visitor_email  = $_POST['EmailId'];
$Address = $_POST['Address'];

$email_from = 'factpathshalaoficial@gmail.com';
$email_subject = "New Addmission";
$email_body = "Father's Name: $FatherName.\n".
              "Mother's Name: $MotherName.\n".
              "Student Name: $StudentName.\n".
              "DOB: $DOB.\n".
              "Parent's Education = $ParentEducation.\n".
              "Gender: $Gender.\n".
              "applying For Std.: $Applyingfor.\n".
              "Aadhar No.: $AadharNo.\n".
              "Phone No.: $PhoneNo.\n".
              "Email Id: $visitor_email.\n".
              "Address: $Address.\n".

              $to = "sdmpsnaigaon@gmail.com";

              $headers = "From: $email_from \r\n".
              $headers = "Reply-To: $visitor_email\r\n".
              
              mail($to,$email_subject,$email_body,$headers)
              
              header("location: application.html")


?>