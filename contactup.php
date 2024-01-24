<?php
//site 6LdBaiwcAAAAAD44cNLDn6xpTxiDf5JsixzcnyGr
//secret 6LdBaiwcAAAAAD2QZS73FGmFCGFp0zjcC94dqu4Z

//$mail_msg="";


if(isset($_POST['subc'])){

   // firstname email mobile subject message
  
    $contact_name = htmlentities($_POST['contact_name']);
    $contact_number =htmlentities($_POST['contact_number']);
    $user_name =htmlentities($_POST['user_name']);
    
    $reason_for_deletion =htmlentities($_POST['reason_for_deletion']);
    
    $msg = "<br>";
    $msg .= "Contact Name :".$contact_name."<br>";
    $msg .= "Contact Number :".$contact_number."<br>";
    $msg .= "User Name :".$user_name."<br>";
    $msg .= "Reason for Deletion :".$reason_for_deletion."<br>";
    
  
   //$url = base_url().'assets/arch1.jpg';

    $header = 'MIME-Version: 1.0' . "\r\n"; 
    $header .= 'Content-type: text/html; charset=utf-8' . "\r\n";
    $header .= 'From: Sasco<no-replay@adoxsolutions.in>' . "\r\n";

 //   $message='<div style="background:url('.$url.'); background-size:cover;background-repeat: no-repeat; background-position: center; padding:30px; font-family:calibri; font-size:20px; color:#666666; padding-top:60px"><div style="width:600px; margin:0 auto; background:#fff;  padding:20px; position:relative; border-radius:10px;"><div style="position:absolute; left: 240px; top: -50px;padding-bottom: 10px;"><a href="#" style="color:#666; font-size:25px; text-decoration:none; font-family:tahoma">Enquiry from Attiks </a></div>'.$msg.'</div></div></div>';
  
  
     $message='<div style="background:#f2f2f2; padding:30px; font-family:calibri; font-size:20px; color:#666666; padding-top:60px"><div style="width:600px; margin:0 auto; background:#fff;  padding:20px; position:relative; border-radius:10px;"><div style="position:absolute; left: 240px; top: -50px;padding-bottom: 10px;"><a href="#" style="color:#666; font-size:25px; text-decoration:none; font-family:tahoma">Enquiry from Sasco </a></div>'.$msg.'</div></div></div>';
  
  // echo $message;
  //  exit;
    
    
    //$message2 = '<div style="background:#f2f2f2; padding:30px; font-family:calibri; font-size:20px; color:#666666; padding-top:60px">
//<div style="width:600px; margin:0 auto; background:#fff;  padding:20px; position:relative; border-radius:10px;">Thank You , Your request has been received<br><br>Regards,<br> Team Attiks..</div></div></div>
//';
    $mail_send = 'ayishahanna657@gmail.com';
    //$replay_mail = $email;
    if(mail($mail_send,'Mobile app account deletion request' , $message,$header))
     {
         
      //mail($replay_mail, 'From Attiks', $message2, $header);
      echo "<script> alert('Mail Send Successfully');</script>";
      //$mail_msg = 'Mail Send Successfully';
   
     }
    
  
    
}  
    
  ?>  












<html>
  <head>
    <title>Contact us</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <style>
      * {
      box-sizing: border-box;
      }
      html, body {
      min-height: 100vh;
      padding: 0;
      margin: 0;
      font-family: Roboto, Arial, sans-serif;
      font-size: 14px; 
      color: #666;
      }
      input, textarea { 
      outline: none;
      }
      body {
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 20px;
      background: #fff;
      }
      h1 {
      margin-top: 23px;
      font-weight: 500;
    align-items:center ;
    margin-bottom: 30px;
    color: #666;
      }
      form {
      position: relative;
      width: 80%;
      border-radius: 30px;
      border-color:#87ceeb;
      background: #fff;
        box-shadow: 0 0 2px rgba(0, 0, 0, 0.1);
        border: 1px solid #e0e0e0;
      }
      .form-left-decoration,
      .form-right-decoration {
      content: "";
      position: absolute;
      width: 50px;
      height: 20px;
      border-radius: 20px;
      /*background: #d0dfe8;*/
      }
      .form-left-decoration {
      bottom: 60px;
      left: -30px;
      }
      .form-right-decoration {
      top: 60px;
      right: -30px;
      }
      .form-left-decoration:before,
      .form-left-decoration:after,
      .form-right-decoration:before,
      .form-right-decoration:after {
      content: "";
      position: absolute;
      width: 50px;
      height: 20px;
      border-radius: 30px;
      /*background: #fff;*/
      }
      .form-left-decoration:before {
      top: -20px;
      }
      .form-left-decoration:after {
      top: 20px;
      left: 10px;
      }
      .form-right-decoration:before {
      top: -20px;
      right: 0;
      }
      .form-right-decoration:after {
      top: 20px;
      right: 10px;
      }
      .circle {
      position: absolute;
      bottom: 80px;
      left: -55px;
      width: 20px;
      height: 20px;
      border-radius: 50%;
      background: #fff;
      }
      .form-inner {
      padding: 40px;
      text-align: center;
      }
      .form-inner input,
      .form-inner textarea {
      display: block;
      width: 100%;
      padding: 15px;
      margin-bottom: 10px;
      border: none;
      border-radius: 10px;
      background :#d0dfe8;
      }
      .form-inner textarea {
      resize: none;
      }
      button {
      width: 100%;
      padding: 10px;
      margin-top: 20px;
      border-radius: 20px;
      border: none;
      /*border-bottom: 4px solid #009AEE;*/
      background: #2596be; 
      font-size: 16px;
      font-weight: 400;
      color: #fff;
      }
      button:hover {
      background: #448EE4;
      } 
      /* Logo styles */
      .logo {
        max-width: 100px;
        

      }
      @media (min-width: 568px) {
      form {
      width: 50%;
      }
      
      }
    </style>

  


  </head>
  <body>
    <form action="" method="post">
      <div class="form-left-decoration"></div>
      
      <div class="form-right-decoration"></div>
      <div class="circle"></div>
      <div class="form-inner">
        <img src="./logo.jpg" alt="Logo" class="logo">
        <h1>Mobile  app account deletion request form</h1>
        <input type="text" placeholder="Name" name="contact_name" id="name" required>
        <input type="text" placeholder="Mobile number" name="contact_number" id="number" required>
        <input type="text" placeholder="User name" name="user_name" id="user_name" required >

        
        <textarea placeholder="Reason for deletion..." rows="5" name="reason_for_deletion" id="reason" required></textarea>
        <button type="submit"  name="subc">Submit</button>
      </div>
    </form>
    <!--   <script>-->
    <!--    function sendMail() {-->
         
    <!--        if (validateForm()) {-->
              
    <!--            if (validatePhoneNumber()) {-->
             
    <!--                let params = {-->
    <!--                    name: document.getElementById("name").value,-->
    <!--                    number: document.getElementById("number").value,-->
    <!--                    user_name: document.getElementById("user_name").value,-->
    <!--                    reason: document.getElementById("reason").value,-->
    <!--                };-->

    <!--                emailjs.send("service_jivc4ke", "template_qi91vtk", params)-->
    <!--                    .then(function (response) {-->
    <!--                        alert("Email sent successfully!");-->
                         
    <!--                    })-->
    <!--                    .catch(function (error) {-->
    <!--                        alert("Failed to send email. Please try again later.");-->
                        
    <!--                    });-->
    <!--            } else {-->
               
    <!--                alert("Phone number validation failed. Please enter a valid phone number.");-->
    <!--            }-->
    <!--        } else {-->
              
    <!--            alert("Please enter all details.");-->
    <!--        }-->
    <!--    }-->

    <!--    function validatePhoneNumber() {-->
        
    <!--        let phoneNumber = document.getElementById("number").value;-->
    <!--        let phoneNumberPattern ='/\+[0-9]{2}+[0-9]{10}/s'-->

    <!--        return phoneNumberPattern.test(phoneNumber);-->
    <!--    }-->

    <!--    function validateForm() {-->
          
    <!--        let name = document.getElementById("name").value;-->
    <!--        let number = document.getElementById("number").value;-->
    <!--        let user_name = document.getElementById("user_name").value;-->
    <!--        let reason = document.getElementById("reason").value;-->

    <!--        return name.trim() !== "" && number.trim() !== "" && user_name.trim() !== "" && reason.trim() !== "";-->
    <!--    }-->
     
    <!--</script>-->
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
   $('#number').on('input',function(){
         var mobile = $('#number').val();
         //
         if(!($.isNumeric(mobile)))
         {
            alert('Please enter a valid mobile number');
            $('#number').val("");
         }

    });
</script>
  
  
  
  

  </body>
</html>