
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
<!--                  <ul>
                      <li><a href="index.php">Home</a></li>
                      <li><a href="ruleBreak.php">Rule Breaks</a></li>
                     <li><a href="">Fine</a></li>
                     
                     
        </ul>-->
               </div>
            </nav>
         </header>
          <br>
          <br><br>
          <br>
           <?php
           include_once ("dbconfig.php");
        if(isset($_GET['Register']))
        {
              
            $name=$_GET['name'];
            $email=$_GET['email'];
            $place=$_GET['place'];
            $age=$_GET['age'];
            $mobile=$_GET['mobile'];
            $vnumber=$_GET['vnumber'];
              $rcnumber=$_GET['rcnumber'];
              $username=$_GET['username'];
              $password=$_GET['pass'];
      
                
//              echo $name;
//              echo $email;
//              echo $place;
//              echo $age;
//              echo $mobile;
//              echo $vnumber;
//              echo $rcnumber;
//              echo $username;
//              echo $password;
              
              
              
           $sql ="INSERT INTO `user`(`name`, `age`, `mobile`, `place`, `vehiclenumber`, `rcnumber`, `mailid`, `username`, `password`) VALUES ('$name','$age','$mobile','$place','$vnumber','$rcnumber','$email','$username','$password')";
            $res=  mysqli_query($mysqli,$sql);
           
            echo $res;
            
        }
        ?>
        
        
        
      <div class="container">

<div class="form-sec">
  <h4>User Details</h4>
  <br>
  
 <form name="qryform" id="qryform" method="get"  >
     
    <div class="form-group">
      <label>Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name" >
    </div>
     <div class="form-group">
      <label>Age:</label>
      <input type="text" class="form-control" id="phone" placeholder="Enter Age." name="age">
    </div>
    <div class="form-group">
      <label>Email:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter Email" name="email" >
    </div>
    
    <div class="form-group">
      <label>Place:</label>
      <input type="text" class="form-control" id="phone" placeholder="Enter Place." name="place">
    </div>
	<div class="form-group">
      <label>Mobile:</label>
      <input type="text" class="form-control" id="mobile" placeholder="Enter Mobile no" name="mobile">
    </div>
     <div class="form-group">
      <label>RC Number:</label>
      <input type="text" class="form-control" id="rcnumber" placeholder="Enter RC Book number"  name="rcnumber">
    </div>
     
	 
	<div class="form-group">
      <label>Vehicle Number:</label>
      <input type="text" class="form-control" id="vnumber" placeholder="Enter Vehicle number" name="vnumber">
    </div>
        <div class="form-group">
      <label>Username::</label>
      <input type="text" class="form-control" id="username" placeholder="username" name="username">
    </div>
     <div class="form-group">
      <label>Password:</label>
      <input type="text" class="form-control" id="pass" placeholder="password" name="pass">
    </div>
       
        
    
         
              
             
.<button type="submit" name="Register" class="btn btn-info btn-xs">Submit</button>
  </form>
  <br>
  .<a  class="btn btn-info btn-xs" href="adminHome.php">Back</a>
  </div>
            <br>
          
        </div> <!-- ./container --><div class="container">
    
</div>
             
  
       
      </div>
   </body
   
   
</html>