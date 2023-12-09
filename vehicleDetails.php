
<!DOCTYPE html>

<html lang="pt-br">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Responsive Sticky Navbar</title>
      <link rel="stylesheet" href="style.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
      <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script>
    $(function(){
	$.validator.setDefaults({
		highlight: function(element){
			$(element)
			.closest('.form-group')
			.addClass('has-error')
		},
		unhighlight: function(element){
			$(element)
			.closest('.form-group')
			.removeClass('has-error')
		}
	});
	
	$.validate({
		rules:
		{	
		    password: "required",
			birthDate: "required",
			weight: {
			    required:true,
			    number:true
			},
			height:  {
			    required:true,
			    number:true
			},
			email: {
				required: true,
				email: true
			}
		},
			messages:{			
				email: {
				required: true,
				email: true
			}
		},
				password: {
					required: " Please enter password"
				},
				birthDate: {
					required: " Please enter birthdate"
				},
				email: {
					required: ' Please enter email',
					email: ' Please enter valid email'
				},
				weight: {
					required: " Please enter your weight",
					number: " Only numbers allowed"
				},
				height: {
					required: " Please enter your height",
					number: " Only numbers allowed"
				},
			}
			
	});
        
</script>
<style>
    
    

.form-sec{width:400px; background:#ccc; padding:15px;width: 400px;
    background: #f8f9fa;padding: 15px;box-shadow: 0 0 4px #ccc;}

    html, body {
      margin: 0;
      padding: 0;
      width: 100%;
}

body {
      font-family: "Helvetica Neue",sans-serif;
      font-weight: lighter;
        background: url(https://wallpaper.wiki/wp-content/uploads/2017/05/wallpaper.wiki-Beautiful-Full-HD-Wallpaper-Download-Free-PIC-WPE0010098.jpg);
        height: 100%;
        width:100%;
        background-repeat: no-repeat;
        
      background-size: cover;
}

header {
      width: 50%;
      height:100%;
/*        background: url(https://wallpaper.wiki/wp-content/uploads/2017/05/wallpaper.wiki-Beautiful-Full-HD-Wallpaper-Download-Free-PIC-WPE0010098.jpg) no-repeat 50% 50%;
      background-size: cover;*/
    
}


.content {
      width: 94%;
      margin: 4em auto;
      font-size: 20px;
      line-height: 30px;
      text-align: justify;
}

.logo {
      line-height: 60px;
      position: fixed;
      float: left;
      margin: 16px 46px;
      color: #fff;
      font-weight: bold;
      font-size: 20px;
      letter-spacing: 2px;
}

nav {
      position: fixed;
      width: 100%;
      line-height: 60px;
}

nav ul {
      line-height: 60px;
      list-style: none;
      background: rgba(0, 0, 0, 0);
      overflow: hidden;
      color: #fff;
      padding: 0;
      text-align: right;
      margin: 0;
      padding-right: 40px;
      transition: 1s;
}

nav.black ul {
      background: #000;
}
nav ul li {
      display: inline-block;
      padding: 16px 40px;;
}

nav ul li a {
      text-decoration: none;
      color: #fff;
      font-size: 16px;
}

.menu-icon {
      line-height: 60px;
      width: 100%;
      background: #000;
      text-align: right;
      box-sizing: border-box;
      padding: 15px 24px;
      cursor: pointer;
      color: #fff;
      display: none;
}
.form-horizontal{
    position: center;
}
@media(max-width: 786px) {

      .logo {
            position: fixed;
            top: 0;
            margin-top: 16px;
      }

      nav ul {
            max-height: 0px;
            background: #000;
      }

      nav.black ul {
            background: #000;
      }

      .showing {
            max-height: 34em;
      }

      nav ul li {
            box-sizing: border-box;
            width: 100%;
            padding: 24px;
            text-align: center;
      }

      .menu-icon {
            display: block;
      }

}
.simple-login-container{
    width:300px;
    max-width:100%;
    margin:50px auto;
}
.simple-login-container h2{
    text-align:center;
    font-size:20px;
}

.simple-login-container .btn-login{
    background-color:#FF5964;
    color:#fff;
}
a{
    color:#fff;
}
</style>

<script>
     $(document).ready(function() {
            $(".menu-icon").on("click", function() {
                  $("nav ul").toggleClass("showing");
            });
      });

      // Scrolling Effect

      $(window).on("scroll", function() {
            if($(window).scrollTop()) {
                  $('nav').addClass('black');
            }

            else {
                  $('nav').removeClass('black');
            }
      })
</script>
   </head>
   <body>
      
       <div class="wrapper">
         <header>
            <nav>
               <div class="menu-icon">
                  <i class="fa fa-bars fa-2x"></i>
               </div>
             
               <div class="menu">
               
               </div>
            </nav>
         </header>
          <br>
          <br><br>
          <br>
           <?php
           use PHPMailer\PHPMailer\PHPMailer;
           include_once ("dbconfig.php");
        if(isset($_POST['Register']))
        {
              $name=$_POST['name'];
              $id=$_POST['id'];
      
              $type=$_POST['type'];
              $mailid=$_POST['mailid'];
              $mobile=$_POST['mobile'];
              $vehicleno=$_POST['vnumber'];
              echo $name;
              echo $id;
              echo $type;
              
                
          
           $sql ="INSERT INTO `notifications` (`userid`, `type`, `status`, `date`) VALUES ('$id', '$type', 'unread', CURRENT_TIMESTAMP)";
            $res=  mysqli_query($mysqli,$sql);
            echo $res;
            $query="INSERT INTO `fine`(`userid`, `finetype`, `finestatus`, `name`, `vehicleno`) VALUES ('$id','$type','unpaid','$name','$vehicleno')";
            $result=  mysqli_query($mysqli,$query);
            echo $res;
            
            
require_once  'PHPMailer/PHPMailer.php';
require_once  'PHPMailer/SMTP.php';
require_once  'PHPMailer/Exception.php';
$mail = new PHPMailer(true);

try {
    //Server settings
                 // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'gokuladasanvs@gmail.com';                     // SMTP username
    $mail->Password   = 'gokul@das';                               // SMTP password
    $mail->SMTPSecure = "ssl";         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
    $mail->Port       = 465;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('gokuladasanvs@gmail.com', 'Traffic Police');
    $mail->addAddress($mailid, $name);     // Add a recipient
    


    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Traffic Rule Violation';
 //   $mail->Body    = 'Dear '.$name.' We observed that your have violated the traffic rules by not wearing helmet<a>haha</a>';
    if($type=='helmet')
    {
      $mail->Body ='<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
                                <html xmlns="http://www.w3.org/1999/xhtml">
                                <head>
                                <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
                                </head>
                                <body>

                                <div>
                                        
                                        <p>Dear' .$name. 'We observed that your have violated the traffic rules by not wearing helmet, your fine in 500 rupees "<a href="http://localhost/Helmet/index.php">Go to website</a>"</p>


                                </div>
                                </body>
                                </html>';
    }
    else
    {
     $mail->Body ='<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
                                <html xmlns="http://www.w3.org/1999/xhtml">
                                <head>
                                <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
                                </head>
                                <body>

                                <div>
                                        
                                        <p>Dear'.$name.'We observed that your have violated the traffic rules by overspeed,Your fine is 1000 rupees "<a href ="http://localhost/Helmet/index.php">Go to website</a>"</p>


                                </div>
                                </body>
                                </html>';
    }
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    $mail->addAttachment("D:\Projects-ML\with_threaded_video_stream\frames\frame_40.jpg");
   

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}


$username = "vdas2378@gmail.com";
	$hash = "3a7ab059d09fde0eec6ea361a1fc534dbb29402f6ac1797a39ce49f7a4cc9c23";

	// Config variables. Consult http://api.textlocal.in/docs for more info.
	$test = "0";

	// Data for text message. This is the text message data.
	$sender = "TXTLCL"; // This is who the message appears to be from.
	$numbers = $mobile; // A single number or a comma-seperated list of numbers
         if($type=='helmet')
    {
      $message ='<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
                                <html xmlns="http://www.w3.org/1999/xhtml">
                                <head>
                                <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
                                </head>
                                <body>

                                <div>
                                        
                                        <p>Dear' .$name. 'We observed that your have violated the traffic rules by not wearing helmet, your fine in 500 rupees "<a href="http://localhost/Helmet/index.php">Go to website</a>"</p>


                                </div>
                                </body>
                                </html>';
    }
    else
    {
     $message='<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
                                <html xmlns="http://www.w3.org/1999/xhtml">
                                <head>
                                <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
                                </head>
                                <body>

                                <div>
                                        
                                        <p>Dear'.$name.'We observed that your have violated the traffic rules by overspeed,Your fine is 1000 rupees "<a href ="http://localhost/Helmet/index.php">Go to website</a>"</p>


                                </div>
                                </body>
                                </html>';
    }
	//$message = 'Dear'.$name.'We observerved that your have violated the traffic rules by not wearing helmet';
        //
	// 612 chars or less
	// A single number or a comma-seperated list of numbers
	$message = urlencode($message);
	$data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
	$ch = curl_init('http://api.textlocal.in/send/?');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($ch); // This is the result from the API
                       curl_close($ch);
                       
                       
                       
                       echo '<script>alert("Fine generated successfully");</script>';
                        header("location:adminhome.php");
                       
                              
        
        
        }
        ?>
        
        
        <?php
        // put your code here
           include_once ("dbconfig.php");
       
            $id=$_GET['no'];
             
          
            $sql="select * from user where vehiclenumber='".$id."'";
          $result=mysqli_query($mysqli,$sql);
         
          foreach ($result as $row)
          {
              
        
        
        ?>
      <div class="container">

<div class="form-sec">
  <h4>User Details</h4>
  
 <form name="qryform" id="qryform" method="post" onsubmit="return(validate());" novalidate="novalidate">
     <div class="form-group">
      <label>Id::</label>
      <input type="text" class="form-control" id="name"  name="id" value="<?php  echo $row['userid'];?>" readonly>
    </div>
    <div class="form-group">
      <label>Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name" value="<?php  echo $row['name'];?>" readonly>
    </div>
    <div class="form-group">
      <label>Age:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter Email" name="age" value="<?php echo $row['age']?>" readonly>
    </div>
    
    <div class="form-group">
      <label>Place:</label>
      <input type="text" class="form-control" id="phone" placeholder="Enter Phone no." name="place" value="<?php echo $row['place']?>" readonly>
    </div>
	<div class="form-group">
      <label>Mobile:</label>
      <input type="text" class="form-control" id="name" placeholder="Subject" name="mobile" value="<?php echo $row['mobile'] ?>" readonly>
    </div>
     <div class="form-group">
      <label>MailId:</label>
      <input type="text" class="form-control" id="name" placeholder="mailid" name="mailid" value="<?php echo $row['mailid'] ?>" readonly>
    </div>
	 
	<div class="form-group">
      <label>Vehicle Number:</label>
      <input type="text" class="form-control" id="name" placeholder="vehiclenumber" name="vnumber" value="<?php echo $row['vehiclenumber'] ?>" readonly>
    </div>
        
        <?php 
        
          }
          
            $sql1="select * from rulebreak where vehicleno='".$id."'";
          $result1=mysqli_query($mysqli,$sql1);
         
          foreach ($result1 as $row1)
          {
          ?>
          <div class="form-group">
      <label>Rule Break:</label>
      <input type="text" class="form-control" id="name" placeholder="Subject" name="type" value="<?php echo $row1['type'] ?>" readonly>
    </div>
               <?php 
         
               
               
          }
          ?>
        
    
         
              
             
.<button type="submit"  name="Register" class="btn btn-info btn-xs">Submit</button>
  </form>
    <br>
  .<a  class="btn btn-info btn-xs" href="adminHome.php">Back</a>
  </div>
       
          
        </div> <!-- ./container --><div class="container">
    
</div>
             
  
       
      </div>
   </body
   
   
</html>