<?php
session_start();

include 'dbconnection.php';

$message = "";

if (isset($_FILES["my_image"]) && !empty($_FILES["my_image"]["name"])) {
    $allowedTypes = ["jpg", "png", "jpeg"];
    $fileType = strtolower(pathinfo($_FILES["my_image"]["name"], PATHINFO_EXTENSION));

    if (!in_array($fileType, $allowedTypes)) {
        $message = "Image upload failed. Invalid format.";
    } else if ($_FILES["my_image"]["size"] > 307200) {
        $message = "Image upload failed. Image size greater than 300KB.";
    } else {
        $filename = time() . "." . $fileType;

        if (move_uploaded_file($_FILES["my_image"]["tmp_name"], "upload/" . $filename)) {
            $rn = isset($_GET['rn']) ? $_GET['rn'] : '';

            // Sanitize the input (you should use proper sanitation methods, e.g., prepared statements)
            $rn = mysqli_real_escape_string($connec, $rn);

            $sql = "UPDATE student SET image = '{$filename}' WHERE rollno = '{$rn}'";

            // Execute the SQL query
            if (mysqli_query($connec, $sql)) {
                $message = "Image uploaded successfully.";
            } else {
                $message = "Image upload failed. Try again.";
            }
        } else {
            $message = "Image upload failed. Try again.";
        }
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>a-Dashboard</title>

    <style>
    body{
      background-color: #97FEED;
    }
      /*-------------------attendance-report---------------------------*/
      .bca1{
            background-color: #0B666A;
            color: white;
            width: 200px;
            margin: 10px;
            border-radius: 5px;
            border-left: 5px solid red;
            text-align: center;
            box-shadow: rgba(0, 0, 0, 0.19) 0px 10px 20px, rgba(0, 0, 0, 0.23) 0px 6px 6px;
        }

      .bca2{
        height: 87vh;
        background-color: #35A29F;
        margin: 12px;
        border-radius: 8px;
        overflow: scroll;
	display:grid;
	grid-template-columns:1fr 2fr;
      }
	 /*-----------------------attendance-table--------------*/
      .bca2 table{
        border-collapse: collapse;
        background-color: white;
        margin: 15px;
        box-shadow: rgba(0, 0, 0, 0.07) 0px 1px 2px, rgba(0, 0, 0, 0.07) 0px 2px 4px, rgba(0, 0, 0, 0.07) 0px 4px 8px, rgba(0, 0, 0, 0.07) 0px 8px 16px, rgba(0, 0, 0, 0.07) 0px 16px 32px, rgba(0, 0, 0, 0.07) 0px 32px 64px;
      }
      .bca2 th{
        font-weight: bolder;
        background-color: #071952;
        color: #97FEED;
      }
     .bca2 table td,th{
        border: 1px solid #071952;
        width: 65vw;
        text-align: left;
        padding: 20px;
      }
      
#date{
margin:left;
}
 .image-uplode{
 background-color:white;
 height:360px;
 margin:20px;
 box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;
 border-radius:15px;
 display:grid;
 grid-template-rows:1fr 1fr;
 }
 .img-st{
 	height:180px;
 	width:170px;
 	margin:10px;
 	margin-left:120px;
 	background-color: white;
 	box-shadow: rgba(0, 0, 0, 0.4) 0px 30px 90px;
 }
 #stimg{
 height:180px;
 	width:170px;
 }
 #button{
 margin-left:90px;
 border:1px solid black;
 box-shadow: rgba(0, 0, 0, 0.19) 0px 10px 20px, rgba(0, 0, 0, 0.23) 0px 6px 6px;
 }
 lable{
  margin-left:145px;
  
 }
 #upload{

 padding:10px;
 margin-left:10px;
 margin-top:15px;
 width:380px;
  background-color:#071952;
 color:white;
 border-radius:10px;
 border:none;
 font-size:18px;
 cursor:pointer;
  box-shadow: rgba(14, 30, 37, 0.12) 0px 2px 4px 0px, rgba(14, 30, 37, 0.32) 0px 2px 16px 0px;
 }
 #upload:hover{
  box-shadow: rgba(14, 30, 37, 0.12) 0px 2px 4px 0px, rgba(14, 30, 37, 0.32) 0px 2px 16px 0px;
 background-color: #97FEED;
 color:#071952;
 }
 .details-uplode{
 background-color:white;
 height:500px;
 margin:20px;
 box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;
 border-radius:8px;
 }
 .bca-back-button{
 position:absolute;
 margin-left:80%;
 margin-top:-50px;
 padding:8px 30px;
 background-color:#071952;
 color:white;
 text-decoration:none;
 border-radius:10px;
 
 }
 .bca-back-button:hover,.bca-back-button:focus{
 box-shadow: rgba(14, 30, 37, 0.12) 0px 2px 4px 0px, rgba(14, 30, 37, 0.32) 0px 2px 16px 0px;
 background-color:white;
 color:#071952;
 }
       .edit{
        padding: 8px 30px;
        color: #071952;
        background-color: #97FEED;
        font-size: 15px;
        text-decoration: none;
        border: none;
        outline: none;
        border-radius: 10px;
        cursor: pointer;
        position:absolute;
        margin-left:700px;
        margin-top:30px;
        box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;
      }
      .edit:hover{
        background-color: white;
        color: #071952;
      }
      
   </style>
 </head>
 <body>
<!----------------attendance-bca details(start)-------------------->  
                <div id="bca-attendancereport">
                    <div class="bca1">
                        <!--<h4>Student Profile</h4>-->
                     	<?php  
                     	$fn = $_GET['fn'];
                     	echo "<h4>".$fn. "</h4>";
                     	?>
                        <a class="bca-back-button" href="bca-report.php">back</a>
                    </div>
                    <div class="bca2" id="bbca">
			<?php
  			include 'dbconnection.php';
  			error_reporting(0);
  			$fn = $_GET['fn'];
  			$ri = $_GET['ri'];
  			$rn = $_GET['rn'];
  			$em = $_GET['em'];
  			$ps = $_GET['ps'];
  			$gn = $_GET['gn'];
  			$im = $_GET['im'];
			?>
			<div class="image-uplode">
				<div class="img-st">
				<?php
				echo "<img id='stimg' src='upload/{$im}'>";	
				?>
				</div>
				<div class="img-select"><br>
				<form method="post" enctype="multipart/form-data">
				   <lable>choose Image</lable><br>
				   <input type="file" name="my_image" id="button"><br>
				   <button type="submit" name="submit" id="upload">Upload</button>
				</form>
				</div>
				
				<?php echo $message; ?>
			</div>
			
			<div class="details-uplode">
			<table id="table1">
                            <tr>
                                <th colspan="2" >Personal Information</th>
                                <?php
                                echo "<a href='editprocess.php?fn=".$fn."&ri=".$ri."&rn=".$rn."&em=".$em."&ps=".$ps."&gn=".$gn."'  class='edit'>EDIT</a>";
				?>
                            </tr>
                              
                            <tr>	
                           	<td id="date">Name</td>
                           	<?php echo "<td id='date'>$fn</td>"; ?>
                        
			    </tr>
			    <tr>	
                           	<td id="date">Rfid No</td>
                      		<?php echo "<td id='date'>$ri</td>"; ?>
                        
			    </tr>
			    <tr>	
                           	<td id="date">Roll No</td>
                           	<?php echo "<td id='date'>$rn</td>"; ?>
                        
			    </tr>
			    <tr>	
                           	<td id="date">Email Id</td>
                           	<?php echo "<td id='date'>$em</td>"; ?>
                        
			    </tr>
			    <tr>	
                           	<td id="date">Gender</td>
                           	<?php echo "<td id='date'>$gn</td>"; ?>
                        
			    </tr>
			    <tr>	
                           	<td id="date">Password</td>
                           	<?php echo "<td id='date'>$ps</td>"; ?>
                        
			    </tr>
		
			</table>
			</div>
                    </div>
                </div>
      
	<!------------attendance-bca details(end)------------>
	


</body>
</html>
