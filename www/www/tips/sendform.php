<?php
    if (isset($_POST['submit'])) {
        $district_name = $_POST['district_name'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        
        $to = "info@teacherplanbook.com";
        $subject = "Teacher Plan Book Information Request";
        $body = "District Name: " . $district_name . "\n" . "Name: " . $name . "\n" . "E-mail: " . $email;
        
        $header = "Reply-To: No Reply <noreply@teacherplanbook.com>\r\n"; 
        $header .= "From: Teacher Plan Book <noreply@teacherplanbook.com>\r\n"; 
        $header .= "Organization: Teacher Plan Book\r\n"; 
        $header .= "Content-Type: text/plain\r\n";
        
        $send = mail($to, $subject, $body, $header);
        
        if ($send) {
            header("Location:index.php?s=1");
        } else {
            header("Location:index.php?s=2");
        }
    } else {
        echo "You do not have permission to view this page.";
    }
?>