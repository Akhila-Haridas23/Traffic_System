


<?php
    include("functions.php");
      include_once ("dbconfig.php");
      $id=$_GET['id'];
        $query1 ="UPDATE `notifications` SET `status` = 'read' WHERE `nid` = $id;";
     $result=  mysqli_query($mysqli,$query1);
    $query = "SELECT * from `notifications` where `nid` = '$id';";
    if(count(fetchAll($query))>0){
        foreach(fetchAll($query) as $i){
         $userid=$i['userid'];
         $type=$i['type'];
        }
    }
$query2=""
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
      <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <style>
          html, body {
    
        background: url(https://wallpaper.wiki/wp-content/uploads/2017/05/wallpaper.wiki-Beautiful-Full-HD-Wallpaper-Download-Free-PIC-WPE0010098.jpg) no-repeat ;
      background-size: cover;
}
simple-login-container{
    width:300px;
    max-width:100%;
    margin:50px auto;
    background-color: whitesmoke;
}
.simple-login-container h2{
    text-align:center;
    font-size:20px;
}

.simple-login-container .btn-login{
    background-color:#FF5964;
    color:#fff;
}
.form-sec{width:400px; background:#ccc; padding:15px;width: 400px;
    background: #f8f9fa;padding: 15px;box-shadow: 0 0 4px #ccc;}

    </style>

    

   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  </head>

  <body>
      
      <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top" style="position:float-right">
      
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li><a class="nav-link" href="userHome.php" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Home</a></li>
            
            
          
        </ul>
        
      </div>
    </nav>
      <div class="container" >
    <form class="form-horizontal"  method="post" style="background-color:black">
        
         <?php
        // put your code here
           include_once ("dbconfig.php");
       
            $id=$_GET['no'];
             
          
            $sql="select * from user where userid='".$userid."'";
          $result=mysqli_query($mysqli,$sql);
          
         
          foreach ($result as $row)
          {
              
        
          $name= $row['name'];
          $userid= $row['userid'];
          $vehicleno=$row['vehiclenumber'];
     
        ?>
        <div class="form-group">
            
            <div class="col-sm-6">
                <h2 style="color:#ffffff">Fine Details</h2>
                </div>
        </div>
        
        <div class="form-group">
                    
                    <div class="col-sm-4">
                        <label class="col-sm-3 control-label" style="color:#ffffff">User id:</label>
                        <label class="col-sm-3 control-label" style="color:#ffffff"><?php  echo $row['userid'];?></label>
<!--                        <input type="text" id="name" name="id"  class="form-control"   value="<?php  echo $row['userid'];?>" autofocus>-->
                    </div>
                </div>
      
                <div class="form-group">
                   
                    <div class="col-sm-4">
                        <label class="col-sm-3 control-label" style="color:#ffffff">Name:</label>
                        <labe class="col-sm-3 control-label" style="color:#ffffff"l><?php  echo $row['name'];?></label>
<!--                        <input type="text" id="name" name="name"  class="form-control"   value="" autofocus>-->
                    </div>
                </div>
              
               
                 
                   
                    
                <div class="form-group">
                    
                    <div class="col-sm-4">
                        <label class="col-sm-3 control-label" style="color:#ffffff">place:</label>
                        <label class="col-sm-3 control-label" style="color:#ffffff"><?php  echo $row['place'];?></label>
<!--                        <input type="text" id="place" name="place" value="" class="form-control">-->
                    </div>
                </div>
        
       <?php
       }
       ?>
      <?php
      if($type=="helmet")
      {
          
      ?>
          <div class="form-group">
                    
                    <div class="col-sm-4">
                        <label  class="col-sm-3 control-label" style="color:#ffffff">Issue:</label>
                        <label class="col-sm-3 control-label" style="color:#ffffff">helmet</label>
<!--                        <input type="text" id="mobile" name="helmet"  value="helmet"  class="form-control">-->
                    </div>
                </div>
                            
                     <div class="form-group">
                    
                    <div class="col-sm-4">
                        <label  class="col-sm-3 control-label" style="color:#ffffff">Amount:</label>
                        <label class="col-sm-3 control-label" style="color:#ffffff">500</label>
<!--                        <input type="text" id="mobile" name="mobile"  value="500"  class="form-control">-->
                    </div>
                </div>    
        <?php
      }
      else if($type=="speed")
      {
        ?>
        <div class="form-group">
                    
                    <div class="col-sm-4">
                        <label  class="col-sm-3 control-label" style="color:#ffffff">Issue:</label>
                        <label>Speed</label>
<!--                        <input type="text" id="mobile" name="mobile"  value="speed"  class="form-control">-->
                    </div>
                </div>
                            
                     <div class="form-group">
                    
                    <div class="col-sm-4">
                        <label  class="col-sm-3 control-label" style="color:#ffffff">Amount:</label>
                        <label>1000</label>
                        
<!--                        <input type="text" id="mobile" name="mobile"  value="1000"  class="form-control">-->
                    </div>
                </div>    
        <?php
        }
 else {
                  ?>
          <div class="form-group">
                    <label  class="col-sm-3 control-label" style="color:#ffffff">issue</label>
                    <div class="col-sm-4">
                        <input type="text" id="mobile" name="mobile"  value=""  class="form-control">
                    </div>
                </div>
                            
                     <div class="form-group">
                    <label  class="col-sm-3 control-label" style="color:#ffffff">amount</label>
                    <div class="col-sm-4">
                        <input type="text" id="mobile" name="mobile"  value=""  class="form-control">
                    </div>
                </div>    
        
        <?php
 }
 ?>
      
        <br><br>
        
        <a href="fineprocess.php?uid=<?php echo $userid;?>&vno=<?php echo $vehicleno;?>&id<?php echo $id;?>" class="btn btn-info btn-xs">Pay</a>
               <a type="button" href="usershome.php?name=<?php echo $name;?>&id=<?php echo $userid;?>" class="btn btn-info btn-xs">Back</a>
  </form>
  </div>

 

      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
