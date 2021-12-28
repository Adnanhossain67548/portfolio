<?php 

    if(isset($_POST['submit']))
    {
       $UserName = $_POST['name'];
       $Email = $_POST['email'];
       $Subject = $_POST['sub'];
       $Msg = $_POST['msg'];

      if(empty($UserName) || empty($Email) || empty($Subject) || empty($Msg))
       {
           header("location:index.php?error");
       }
       else
       {
           $to = "ismailhossain9693@gmail.com";

           if(mail($to,$Subject,$Msg,$Email))
           echo "Email successfully sent to $db_mail...";
    echo "<br>";
} 
    
  }

?>