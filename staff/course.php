<?php
include "../staff/nav.php";
$con=mysqli_connect("localhost","root","","tuition_mangement");
if (isset($_POST["submit"])) {
  $CLASS=$_POST["CLASS"];
  $SUBJECTNAME=$_POST["SUBJECTNAME"];
  $SUBJECTAUTHOR=$_POST["SUBJECTAUTHOR"];
  $coursefile=$_FILES["uploadfile"]["name"];
  $tempname=$_FILES["uploadfile"]["tmp_name"];
  $folder="../staff/uploadimages/".$coursefile;
  $query="INSERT INTO coursemanagement(CLASS,SUBJECTNAME,SUBJECTAUTHOR,coursefile)
   VALUES('$CLASS','$SUBJECTNAME','$SUBJECTAUTHOR','$coursefile')" or die(mysqli_error($con));
  $result=mysqli_query($con,$query);
  if($result)
  {
    echo "inserted successfully";
  }
  else
  {
    echo "not inserted successfully";

  }
    
    $file=move_uploaded_file($tempname, $folder);
    
    echo $file."<br>";
      if ($file )  { 
            echo "uploaded successfully"; 
        }else{ 
            echo "Failed to upload image"; 
      }
  
  
  
}
?>
 
<!DOCTYPE html>
<html>
<head>
	<title>coursemanagent</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<link rel="stylesheet" href="../css/admission.css">
<link rel="stylesheet" href="../css/fees.css">
<link rel="stylesheet" href="../css/student.css">
<link rel="stylesheet" href="../css/announcement.css">
</head>
<body>

<div class="container">
     
     <div class="container-head">
         <div class="title">
         <center><h1>Course Management</h1></center>
         </div>
     </div>
     <br>

     <div class="container-body">
        <form action="" method="POST" enctype="multipart/form-data">
           <div class="form-group row " >
               <label for="inputPassword3" class="col-sm-2 col-form-label">Class</label>
                 <div class="col-sm-10">
                     <select class="form-control" name="CLASS">
                       <option >--select--</option>
                       <option value="6TH">6th</option>
                        <option value="7TH">7th</option>
                        <option value="8TH">8th</option>
                        <option value="9TH">9th</option>
                        <option value="10TH">10th</option>
                        <option value="11TH">11TH STD</option>
                        <option value="12TH">12TH STD</option>
                        <option value="NEET">NEET</option>
                        <option value="JEE">JEE</option>
                     </select>
                 </div>
           </div>
           <div class="form-group  row" >
               <label for="inputPassword3" class="col-sm-2 col-form-label">Subject</label>
                 <div class="col-sm-10">
                     <select class="form-control" name="SUBJECTNAME">
                        <option >--select--</option>
                        <option value="TAMIL">TAMIL</option>
                        <option value="ENGLISH">ENGLISH</option>
                        <option value="MATHS">MATHS</option>
                        <option value="SCIENCE">SCIENCE</option>
                        <option value="SOCIAL">SOCIAL</option>
                        <option value="COMPUTERSCIENCE">COMPUTERSCIENCE</option>
                        <option value="BIO-PHYSICS">BIO-PHYSICS</option>
                        <option value="BIO-CHEMISTRY">BIO-CHEMISTRY</option>
                        <option value="BIO-ZOOLOGY">BIO-ZOOLOGY</option>
                        <option value="BIO-BOTANY">BIO-BOTONAY</option>
                        <option value="HISTORY">HISTORY</option>
                        <option value="ECONOMICS">ECONOMICS</option>
                        <option value="BUSINESS MATHS">BUSINESS MATHS</option>
                        <option value="COMMERCE">COMMERCE</option>
                     </select>
                 </div>
           </div>
           
           <div class="form-group row">
               <label for="inputEmail3" class="col-sm-2 col-form-label">Subject Author:</label>
               <div class="col-sm-10">
                 <input type="text" name="SUBJECTAUTHOR" class="form-control" id="inputEmail3">
               </div>
           </div>
           <div class="form-group row">
               <label for="inputEmail3" class="col-sm-2 col-form-label">Material:</label>
               <div class="col-sm-10">
                 <input type="file" name="uploadfile" class="form-control" id="inputEmail3">
               </div>
           </div>
          <div class="form-group row">
               <center class="col-sm-12">
                 <input  type="submit" name="submit" class="btn btn-primary">
               </center>	
           </div>
           <br>
        <form>
     </div>
     <div class="container-footer">
     </div>
   </div>

</body>
</html>
 