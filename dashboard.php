<?php
session_start();
if(!isset($_SESSION['userdata'])){
    header("location:http://localhost/vaccination/index.html");
 
}
     $userdata =$_SESSION['userdata'];
   


     if( $_SESSION['userdata']['status']==0){
         $Status='Not Voted';
     }
     else{
         $Status='Voted';
     }
?>

<html>
    <head>
        <title>vaccination dashboard</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        


    <header>
        <div class="header">
            <div class="left">
                <img src="logo.png" alt="logo" width="100em" height="65em">   
            </div>
            <div class="mid">
                <i> <b>GIVE RESPONSE</b> </i>
            </div>
        </div>
    </header>

    <body>
        <div class="body">
        <a href="http://localhost/vaccination/index.html"><button id="button">Back</button></a>
        <a href="api/logout.php"><button id="button" class="logout">Logout</button></a>
                <div class="container"> 
                  <div class="bleft1">  
                    </div>
                      <div class="bright1"> 
                            <div class="border1"> 
                            <hr>
                   
                            <b><h2>University Name:- &ensp; <?php echo $userdata['uname']?> </b></h2>
                            <b><h2>College Name:- &ensp;  <?php echo $userdata['collegename']?> </b></h2>
                            <b><h2>City:- &ensp; <?php echo $userdata['city']?> </b></h2>
                            <b><h2>Total Students:- &ensp;  <?php echo $userdata['student']?> </b></h2>
                            <br></h3><hr>
                            <hr>

                            <div id="group">
                                 <?php
                                 if($_SESSION['userdata']){
                     
                                 ?>
                                         <div><center><br>
                                         <h2>  ARE YOU TAKEN COVID VACCINE ???</h2></b> 
                   
                                         <form action="api/vote.php" method="POST">
                                         <input type="hidden" name="gvotes" value="<?php echo $userdata['votes']?>">
                                          <input type="hidden" name="gid" value="<?php echo $userdata['id']?>">
                                           <?php
                                           if( $_SESSION['userdata']['status'==0]){
                                               ?>
                                              <input type="submit" name="votes" value="YES" id="votes">
                                              <?php
                                           }
                                           else{
                                             ?>
                                             <button disabled type="button" name="votes" value="YES" id="voted">Voted</button>
                                             <?php 
                                           }
                                         ?>
                                       </form>
                                        <h2>NUMBER OF Students Taken Vaccine:  <?php echo $userdata['votes']?></h2>
                                        <br><br>
                                         </center></div>
                                           <?php
                                          }
                                         else{
                                             }
                                         ?>
            
                                       </div>

                                
                              </div>
                       </div>
                </div>
          </div>


    </body>
</html>