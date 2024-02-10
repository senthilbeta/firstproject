<?php session_start();
if(empty($_SESSION['password'])):
    header('Location:alogin.php');
endif;
?>

<?php
	$Write="<?php $" . "UIDresult=''; " . "echo $" . "UIDresult;" . " ?>";
	file_put_contents('uidcontainer.php',$Write);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>a-Dashboard</title>

    <style>

        *{
            padding: 0;
            margin: 0;
            font-family: serif;
        }
        body{
            background-color: #97FEED;
        }
        .body-container{
            display: grid;
            grid-template-columns: 1fr 4fr;


        }
       
        /*------------------------********************************-------------------------*/


        /*--------------------- nave-bar details----------------- */

        .navebar{
            background-color: #071952;
            height: 100vh;
            position: relative;
            display: block;
            display: grid;
            grid-template-rows: 1fr 1fr 2fr;

        }

         .sub-link2{ 
            width:200px;
            line-height: 40px;
            margin-left: 25px;
            margin-top: 20px;
            color: white;
            text-decoration: none;
            position: absolute;
            font-size: 18px;
            text-align: center;
            border-radius: 10px;
        } 
        .sub-link2:hover{
            background-color: white;
            color:  #97FEED;
	    font-size:18px;
            border-left: 5px solid red;
            border-radius: 5px;
            box-shadow: rgba(0, 0, 0, 0.2) 0px 18px 50px -10px;
		box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px, rgb(51, 51, 51) 0px 0px 0px 3px;

        }
        .sub-link1 a{ 
            width:200px;
            line-height: 40px;
            margin-left: 25px;
            margin-top: 20px;
            color: white;
            text-decoration: none;
            position: absolute;
            font-size: 18px;
            text-align: center;
            border-radius: 10px;
        }


        .sub-link1 a:hover{
            background-color: white;
            color: #071952;
            box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
            border-left: 5px solid red;
            border-radius: 5px;
            box-shadow: rgba(0, 0, 0, 0.2) 0px 18px 50px -10px;

        }
        .sub-link1 a:focus{
            background-color:  #0B666A;
            color: red;
            border-left: 5px solid red;
            border-radius: 5px;
        }
        /*------------------------********************************-------------------------*/



        /*-----------------------dash-details-------------- */
        #dashboard{
            display: grid;
            grid-template-rows: 1fr 1fr 1fr;

        }

        #dashboard1{

            margin: 10px;
            background-color: #0B666A;
            color: white;  
            width: 140px;      
            border-left: 5px solid red;
            border-radius: 5px;
            box-shadow: rgba(0, 0, 0, 0.19) 0px 10px 20px, rgba(0, 0, 0, 0.23) 0px 6px 6px;
        }
        .dashboard2{

            background-color: #35A29F;
            height: 50vh;
            margin: 10px;
            border-radius: 8px;
            box-shadow: rgba(0, 0, 0, 0.18) 0px 2px 4px;


        }
        .dashboard3{

            background-color: #35A29F;
            margin: 10px;
            height: 25vh;
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            border-radius: 8px;
            box-shadow: rgba(0, 0, 0, 0.18) 0px 2px 4px;

        }
        .present{
            height: 17vh;
            background-color: white;
            color: #071952;
            margin: 25px;
            border-radius: 10px;
            box-shadow: rgba(0, 0, 0, 0.25) 0px 14px 28px, rgba(0, 0, 0, 0.22) 0px 10px 10px;
        }
        .absent{
            height: 17vh;
            background-color: white;
            color: #071952;
            margin: 25px;
            border-radius: 10px;
            box-shadow: rgba(0, 0, 0, 0.25) 0px 14px 28px, rgba(0, 0, 0, 0.22) 0px 10px 10px;

        }
        .hours{
            height: 17vh;
            background-color: white;
            color: #071952;
            margin: 25px;
            border-radius: 10px;
            box-shadow: rgba(0, 0, 0, 0.25) 0px 14px 28px, rgba(0, 0, 0, 0.22) 0px 10px 10px;

        }
           .present:hover{
           box-shadow: rgba(0, 0, 0, 0.45) 0px 25px 20px -20px;
        }
         .absent:hover{
          box-shadow: rgba(0, 0, 0, 0.45) 0px 25px 20px -20px;
        }
         .hours:hover{
          box-shadow: rgba(0, 0, 0, 0.45) 0px 25px 20px -20px;
           
        }
        /*------------------------********************************-------------------------*/


        /*----------------department details-------------------*/

        #department{
            display: grid;
            grid-template-rows: 1fr 2fr;
        }
        #department1{
            background-color: #35A29F;
            color: #F0F5F9;
            width: 200px;
            margin: 10px;
            border-radius: 5px;
            border-left: 5px solid red;
            box-shadow: rgba(0, 0, 0, 0.19) 0px 10px 20px, rgba(0, 0, 0, 0.23) 0px 6px 6px;
        }
        #departments3{
            height: 60vh;
            background-color: #35A29F;
            margin: 10px;
            border-radius: 8px;
            color: #F0F5F9;
            display: grid;
            grid-template-columns: 1fr 1fr 1fr; 
        }
        #bca1{
           background-color: #bbbfca;
           margin: 50px;
           width:260px;
           height: 20vh;
           padding: 15px;
           border-radius: 10px;
        }
        #date1 #report1{
            margin-top: 40px;
          padding: 10px;
          width: 140px;
          border-radius: 15px;
          color: #52616B;
          font-size: 20px;
          font-weight: bolder;
          border: none;
          outline: none;

        }
        #date2{
           background-color: #35A29F;
           margin: 50px;
           width:260px;
           height: 20vh;
           padding: 15px;
           border-radius: 10px;


        }
        #date2 #report2{
            margin-top: 40px;
          padding: 10px;
          width: 140px;
          border-radius: 15px;
          color: #52616B;
          font-size: 20px;
          font-weight: bolder;
          border: none;
          outline: none;

        }
        /*------------------------********************************-------------------------*/

        /*----------------attendance details--------------*/

        #attendance{
            display: grid;
            grid-template-rows: 1fr 2fr;
        }
        #attendance1{
            background-color: #0B666A;
            color: white;
            width: 200px;
            margin: 10px;
            border-radius: 5px;
            border-left: 5px solid red;
            box-shadow: rgba(0, 0, 0, 0.19) 0px 10px 20px, rgba(0, 0, 0, 0.23) 0px 6px 6px;
        }
        #attendance2{
            background-color: #35A29F;
            margin: 10px;
            border-radius: 8px;
            color: #0B666A;
            display: grid;
            grid-template-columns: 1fr 1fr 1fr; 
            box-shadow: rgba(0, 0, 0, 0.18) 0px 2px 4px;
        }
         #attendance-bca, #attendance-mca, #attendance-msc, #attendance-bba, #attendance-che, #attendance-bcom{
           background-color: white;
           margin: 30px;
           width:250px;
           height: 20vh;
           padding: 15px;
           border-radius: 10px;
           box-shadow: rgba(0, 0, 0, 0.2) 0px 12px 28px 0px, rgba(0, 0, 0, 0.1) 0px 2px 4px 0px, rgba(255, 255, 255, 0.05) 0px 0px 0px 1px inset;
        } 
         #attendance-msc a{
          margin-top: 40px;
          margin-left: 25px;    
          padding: 10px 40px;
          width: 140px;
          border-radius: 15px;
          color: #97FEED;
          font-size: 20px;
          font-weight: bolder;
          border: none;
          outline: none;
          background-color: #071952;
          text-decoration: none;


        }
       
        #attendance-bca a{
          margin-top: 100px;
          margin-left: 25px;    
          padding: 10px 40px;
          border-radius: 15px;
          color: #97FEED;
          text-decoration:none;
          font-size: 20px;
          font-weight: bolder;
          border: none;
          outline: none;
          background-color: #071952;

        }
         
        #attendance-mca a{
          margin-top: 40px;
          margin-left: 25px;    
          padding: 10px 40px;
          border-radius: 15px;
          color: #97FEED;
          font-size: 20px;
          font-weight: bolder;
          border: none;
          outline: none;
          background-color: #071952;
          text-decoration: none;

         }       
         #attendance-bba a{
          margin-top: 40px;
          margin-left: 25px;    
          padding: 10px 40px;
          border-radius: 15px;
          color: #97FEED;
          font-size: 20px;
          font-weight: bolder;
          border: none;
          outline: none;
          background-color: #071952;
          text-decoration: none;
         }       
         #attendance-bcom a{
          margin-top: 40px;
          margin-left: 25px;    
          padding: 10px 40px;
          border-radius: 15px;
          color: #97FEED;
          font-size: 20px;
          font-weight: bolder;
          border: none;
          outline: none;
          background-color: #071952;
          text-decoration: none;

         }       
         #attendance-che a{
          margin-top: 40px;
          margin-left: 25px;    
          padding: 10px 40px;
          border-radius: 15px;
          color: #97FEED;
          font-size: 20px;
          font-weight: bolder;
          border: none;
          outline: none;
          background-color: #071952;
          text-decoration: none;

         }       
        #attendance-bca a:hover{
   	box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;
   	color:white;
        }
        #attendance-che a:hover{
   	box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;
   	color:white;
        }
        #attendance-bba a:hover{
   	box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;
   	color:white;
        }
        #attendance-bcom a:hover{
   	box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;
   	color:white;
        }
        #attendance-mca a:hover{
   	box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;
   	color:white;
        }
         #attendance-msc a:hover{
   	box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;
   	color:white;
        }
        /*------------------------********************************-------------------------*/

/*------------------------********************************-------------------------*/


	  
        #self{
            position: relative;

        }
        #self1{
            height: 77vh;
            background-color:  #35A29F;
            margin: 10px;
            border-radius: 10px;
        }

        #self2{
            background-color: #0B666A;
            color: white;
            width: 200px;
            margin: 10px;
            border-radius: 5px;
            border-left: 5px solid red;
            box-shadow: rgba(0, 0, 0, 0.19) 0px 10px 20px, rgba(0, 0, 0, 0.23) 0px 6px 6px;

        }
       /* .readtag-container {
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
            width: 500px;
            text-align: center;
            padding: 18px;
            margin-left: 258px;
            margin-top: 30px;
            position: absolute;
            box-shadow: rgba(0, 0, 0, 0.2) 0px 12px 28px 0px, rgba(0, 0, 0, 0.1) 0px 2px 4px 0px, rgba(255, 255, 255, 0.05) 0px 0px 0px 1px inset;
        }*/
	.readform{
        border-collapse: collapse;
        background-color: white;
        margin: 5px;
        font-size:20px;
        width:390px;
        padding:5px;
        box-shadow: rgba(0, 0, 0, 0.07) 0px 1px 2px, rgba(0, 0, 0, 0.07) 0px 2px 4px, rgba(0, 0, 0, 0.07) 0px 4px 8px, rgba(0, 0, 0, 0.07) 0px 8px 16px, rgba(0, 0, 0, 0.07) 0px 16px 32px, rgba(0, 0, 0, 0.07) 0px 32px 64px;
	}
	 .readtag-container {
            background-color: white;
         	display: grid;
            grid-template-columns:1fr 1fr;
            border-radius: 8px;
            overflow: hidden;
            width: 600px;
            height:380px;
            text-align: center;
            padding: 18px;
            margin-left: 240px;
            margin-top: 25px;
            position: absolute;
            box-shadow: rgba(0, 0, 0, 0.2) 0px 12px 28px 0px, rgba(0, 0, 0, 0.1) 0px 2px 4px 0px, rgba(255, 255, 255, 0.05) 0px 0px 0px 1px inset;
        }
       .show-details1 .lable-1{
            /* padding:90px; */
             margin:100px; 
            font-size:25px;

        }
        .show-details1 .lable-2{
            margin-left:-50px;
            margin-top:10px;
            position: absolute;
            font-size:25px;
            

        }
        .show-details1 .lable-3{
            font-size:25px;
            margin-left:-50px;
            margin-top:30px;
            position: absolute;

        }
        .show-details1 .lable-4{
            margin-top:50px;
            margin-left:-50px;
            position: absolute;
            font-size:25px;

        }
        .show-details1 .lable-5{
            margin-top:65px;
            margin-left:-50px;
            position: absolute;
            font-size:25px;
            font-size:25px;

        }

	.readform td{
	padding:6px;
	}
       /*----------------rigestration details--------------*/
      
        #rigestration{
            position: relative;

        }
        #rigestration1{
            height: 77vh;
            background-color:  #35A29F;
            margin: 10px;
            border-radius: 10px;
        }

        #rigestration2{
            background-color: #0B666A;
            color: white;
            width: 200px;
            margin: 10px;
            border-radius: 5px;
            border-left: 5px solid red;
            box-shadow: rgba(0, 0, 0, 0.19) 0px 10px 20px, rgba(0, 0, 0, 0.23) 0px 6px 6px;

        }
	
        /*------------------------********************************-------------------------*/

        /*----------------display blocking  details--------------*/

        #dashboard:target, #attendance:target, #regular:target, #readtag:target, #self:target, #rigestration:target, #bca-attendancereport:target{
         display: block;
         }

        #dashboard, #attendance, #bca-attendancereport, #regular, #readtag, #rigestration, #self{
         display: none;
        }
        .dash-details{
            display: grid;
            grid-template-rows: 1fr 6fr;
        }
        .header{
            background-color: white;
            height: 13vh;
            top: 0;
        }
       /*------------------dropdown------------------*/
       .dropdown {
          position: relative;
        }
        .dropdown-content {
        display: none;
        position: absolute;
        background-color: white;
        color:black;
        min-width: 160px;
        box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;
        z-index: 1;
        width: 200px;
        }
        .dropdown-content a {
      color: black;
      padding: 12px 16px;
      display: block;
      text-decoration: none;
    }
    .dropdown:hover .dropdown-content {
      display: block;
      color: #97FEED;
    }
    .sub-link2 a{
        text-decoration: none;
        /* color: #F0F5F9; */
        color:black;
    }
    .sub-link2 ul li a:hover{
        color: #1E2022;
        /* color: #F0F5F9; */
    }

    ul.no-bullets{
        list-style-type: none;

      }
      #a1:hover{
        color:#1E2022;
      }
      #al{
        color: #F0F5F9;
      }
      .dropdown-content a:hover{
            color: black;
            box-shadow: rgba(0, 0, 0, 0.19) 0px 10px 20px, rgba(0, 0, 0, 0.23) 0px 6px 6px;
            border-left: 5px solid red;
            border-radius: 5px;
      }
      .img{
        border-radius: 50%;
        width: 100px;
        height: 100px;
        margin-left: 80px;
        border: 2px solid white;
        box-shadow: rgba(17, 17, 26, 0.1) 0px 1px 0px, rgba(17, 17, 26, 0.1) 0px 8px 24px, rgba(17, 17, 26, 0.1) 0px 16px 48px;
        background-color: white;
        margin-top: -40px;
      }
      .img img{
        width: 100px;
        height: 100px;
        border-radius: 60%;
        box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px;
      }
       .name{
      margin-top:20px;
      margin-left:98px;
      color:white;
      
      }
      .img_aj{
        border-radius: 50%;
        width: 65px;
        height: 65px;
        border: 3px solid white;
        float: right;
        margin-top: -55px;
        margin-right: 10px;
        box-shadow: rgba(0, 0, 0, 0.25) 0px 14px 28px, rgba(0, 0, 0, 0.22) 0px 10px 10px;
        cursor: pointer;
      }
      .img_aj img{
        width: 65px;
        height: 65px;
        border-radius: 50px;
      }
      .name-admin{
      margin-left:20px;
      margin-top:30px;
      color:#071952;
      
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
        height: 75vh;
        background-color: #35A29F;
        margin: 12px;
        border-radius: 8px;
        overflow: scroll;

      }
      /*------------------signup details---------------------------*/
      .signup-container {
            background-color: white;
         
            border-radius: 8px;
            overflow: hidden;
            width: 90%;
            height:65vh;
            text-align: center;
            padding: 18px;
            margin:20px 25px;
            margin-top: 20px;
            position: absolute;
            box-shadow: rgba(0, 0, 0, 0.2) 0px 12px 28px 0px, rgba(0, 0, 0, 0.1) 0px 2px 4px 0px, rgba(255, 255, 255, 0.05) 0px 0px 0px 1px inset;
        }

        .signup-container h2 {
            color: #071952;
            margin-bottom: 20px;
        }

        .signup-form input,
        .signup-form select {
            
            padding: 15px 150px;
            margin-bottom: 15px;
            border: 1px solid #071952;
            border-radius: 4px;
            box-sizing: border-box;
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
   

        }
        .getid{
            
            padding: 2px 130px;
            margin-bottom: -15px;
            border: 1px solid #071952;
            border-radius: 4px;
            box-sizing: border-box;
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
   

        }
        .signup-form .getid:focus{
        background-color:#1f1f1f;
        color:white;
        }
        
        .signup-form input:focus{
        background-color:#1f1f1f;
        color:white;
        }

        .signup-form .role-dependent-input {
            display: none;
        }

        .signup-form .reg-submit{
            width: 100%;
            padding: 15px;
            background-color: #071952;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-weight:bold;
            opacity: 0.7;
            transition:0.3s;
    box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px;


        }
        .signup-form .reg-submit:hover{
            opacity:1;
            box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px;


        }
        .signup-form select{
            padding: 15px 205px;
            

        }
        .reg-reset{
            padding: 15px 215px;
            background-color:red;
            cursor: pointer;
            border:none;
            font-weight:bold;
            color: #fff;
            opacity: 0.7;
      transition:0.3s;


}
.reg-reset:hover{
    background-color: red;
    opacity:1;
    box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px;

            


}

        /* .signup-form button:hover {
            background-color: #97FEED;
            color: #071952;
            box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px;
        } */

        .signup-form p {
            margin-top: 15px;
            font-size: 14px;
            color: #555;
        }

        .signup-form a {
            color: #2196F3;
            text-decoration: none;
        }

        .signup-form a:hover {
            text-decoration: underline;
        }

        .forgot-password {
            color: #777;
            font-size: 14px;
            margin-top: 10px;
            text-decoration: none;
            display: inline-block;
        }

        .google-button {
            background-color: #4285F4;
            color: #fff;
        }
        /*------------------------********************************-------------------------*/
       

      /*-----------------------attendance-table--------------*/
      .bca2 table{
        border-collapse: collapse;
        background-color: white;
        margin: 15px;
        display: none;
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
      /*-------------------attendance-button----------------*/
      .delete{
        padding: 8px;
        color: white;
        background-color: #071952;
        border: none;
        outline: none;
        border-radius: 10px;
        font-size: 15px;
        text-decoration: none;
        cursor: pointer;
       
        box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;
      }
      .delete:hover{
        background-color: #97FEED;
        color: #071952;
}
	/*------------------logout process----------------------------------*/
	.dropbtn1 {
  margin-left:-5px;
  margin-top:-1px;
  width:75px;
  height:75px;
  border-radius:60%;
  color: white;
  padding: 5px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropbtn:hover, .dropbtn:focus {
  box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;
}
.dropdown1{
position:relative;
display:inline-block;
}

.dropdown-content1 {;
  display: none;
  position: absolute;
  background-color:white;
  border-radius:15px;

  overflow: auto;
  box-shadow: rgba(0, 0, 0, 0.09) 0px 2px 1px, rgba(0, 0, 0, 0.09) 0px 4px 2px, rgba(0, 0, 0, 0.09) 0px 8px 4px, rgba(0, 0, 0, 0.09) 0px 16px 8px, rgba(0, 0, 0, 0.09) 0px 32px 16px;
}

.dropdown-content1 a {
  color: #071952;
  padding: 16px 5px;
  text-decoration: none;
  display: block;
}

.dropdown-content1 a:hover {background-color: #f1f1f1}

.show {display:block;}

    /*------------------------------------------------------------------*/
  
    .dashboard3{

            background-color: #35A29F;
            margin: 10px;
            height: 25vh;
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            border-radius: 8px;
            box-shadow: rgba(0, 0, 0, 0.18) 0px 2px 4px;

        }
        .present{
            height: 17vh;
            background-color: white;
            color: #071952;
            margin: 25px;
            border-radius: 10px;
            box-shadow: rgba(0, 0, 0, 0.25) 0px 14px 28px, rgba(0, 0, 0, 0.22) 0px 10px 10px;
            display:grid;
            grid-template-columns:1fr 2fr;
        }
        .absent{
            height: 17vh;
            background-color: white;
            color: #071952;
            margin: 25px;
            border-radius: 10px;
            box-shadow: rgba(0, 0, 0, 0.25) 0px 14px 28px, rgba(0, 0, 0, 0.22) 0px 10px 10px;
            display:grid;
            grid-template-columns:1fr 2fr;
        }
        
        .hours{
            height: 17vh;
            background-color: white;
            color: #071952;
            margin: 25px;
            border-radius: 10px;
            box-shadow: rgba(0, 0, 0, 0.25) 0px 14px 28px, rgba(0, 0, 0, 0.22) 0px 10px 10px;
            display:grid;
            grid-template-columns:1fr 2fr;
        }
        /*---------------------------------------------------------------*/

 .find-student-detail{
    background-color:white;
    margin:30px 50px;
    width: 90%;
    height:65vh;
    box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px;
 }

  .find-student-detail input{
      padding:15px 370px;
      margin:13px;
      border: 1px solid #071952;
            border-radius: 4px;
            box-sizing: border-box;
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
     } 
     .find-student-detail input:focus{
    background-color:#1f1f1f;
    color:white;
        
     } 
     
    
     .find-student-detail .reset{
      padding:15px 100px;
      margin:13px;
      background-color: red;
      border:none;
      color:white;
      font-weight:bold;
      cursor: pointer;
      opacity: 0.7;
      transition:0.3s;
     } 
     .find-student-detail .reset:hover{
        opacity: 1;
        box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px;


     }
 .find-student-detail .button{
      padding:15px 300px;
      margin:13px;
      background-color:#071952;
      border:none;
      color:white;
      font-weight:bold;
      cursor: pointer;
      opacity: 0.7;
      transition:0.3s;
    box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px;

     } 
     .find-student-detail .button:hover{
        opacity: 1;
        box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px;
        

     }
     .viewt{
            height:40px;
     }
    .imgstu{
        width:120px;
        height:90px;
        margin:11px;
    }
    .dashimg{
        width:35px;
        height:35px;
        position:absolute;
        margin-left:-50px;
        margin-top:6px;
    }
    .regimg{
        width:38px;
        height:30px;
        position:absolute;
        margin-left:-45px;
        margin-top:6px;
    }
    .listimg{
        width:32px;
        height:38px;
        position:absolute;
        margin-left:-43px;
    }
    .attimg{
        width:36px;
        height:36px;
        position:absolute;
        margin-left:-37px;
    }
    .regsimg{
        width:35px;
        height:35px;
        position:absolute;
        margin-left:-35px;
    }
    .readsimg{
        width:40px;
        height:35px;
        position:absolute;
        margin-left:-45px;
    }
    .attmainimg{
        width:45px;
        height:45px;
    }
        /*------------------------********************************-------------------------*/

    </style>
</head>
<body>
<?php $UIDresult='';

 $UIDresult=$UIDresult;

?>
	
<!-------------------------------------------------body-container(start)---------------------------------------------------->

    <div class="body-container">

        <!---------------------side navebar details(start)--------------------------->
        <div class="navebar">
                <div class="aj">
                    <h1 style="color:#52616B; margin-top: 20px;  margin-right: 10px; text-decoration: none; text-align: center;"><a href="https://www.anjaconline.org/" style="color: white; text-decoration: none;  text-shadow: 2px 2px 4px #000000;">ANJAC</a></h1>

                    <br><hr>
                </div>
                <div class="img-name">
                    <div class="img">
                    	
                        <img src="admin1.png">
                    </div>
                    <div class="name">
                    	<?php
                    		echo "<h3>".$_SESSION['username']."</h3>";
                    	?>
                    </div>
                </div>

             <!-------------------navebar details link tages--------------------->
                <div class="link">
                    <div class="sub-link1">
              		 <a id="dash" href="#dashboard"><img src="dash1.png" class="dashimg">Dashboard</a><br><br><br>
                    </div>
                    <div class="sub-link2">
                    <ul class="no-bullets">
                    <li class="dropdown">

                          <a id="a1"  style="color: white;"> <img src="registration.png" class="regimg">Registration</a>                         
                            <div class="dropdown-content">
                                <a href="#rigestration"><img src="reg1.png" class="regsimg">REGISTRATION</a>
                                <a href="#self"><img src="read.png" class="readsimg">READ TAG</a>
                            </div>
                    </li>
                    </ul>   
                   </div><br><br><br>
                    
                    <div class="sub-link1">
                        <a id="attend"href="#attendance"><img src="studetail1.png" class="listimg">Students List</a><br><br><br>
                    </div>
                   	
                    <div class="sub-link1">
                        <a id="attend"href="#bca-attendancereport" style="margin-left:30px;" > <img src="listattendance.png" class="attimg">Attendance List</a>
                    </div>
                </div>
        </div>
            <!-----------------------------sidenavebar details (end)--------------------------------->

    <!---------------------------------------------------------------------------------------------------------------->

        <!-------------------------------over all dashboard container details(start)-------------------------------->


        <div class="dash-details">
            <!--------header details(start)----->
            <div class="header" style="box-shadow: rgba(0, 0, 0, 0.45) 0px 25px 20px -20px;">
            <div class="name-admin">
            	<?php
                    		echo "<h3>welcome, ".$_SESSION['username']."</h3>";
                    	?>
             </div>
                <div class="img_aj" id="logbtn">
                    <button id="mybtn1" class="dropbtn1"> <img src="admin1.png" onclick="logout()"></button>
                    <div id="myDropdown1" class="dropdown-content1">
			<a href="loggoutprocess.php">Logout</a>
		   </div>
		</div>
            </div>
            <!------header details(end)----->



            <!------------------------- dashboard details(start)------------------>

            <div class="dashboard-container">
                <!-------dashboard details(start)-------->
                <div id="dashboard">
                    <div id="dashboard1">
                        <h4 style="margin-left: 20px;">Dashboard</h4>

                    </div>
                    <div class="dashboard2">

                    </div>
                    <div class="dashboard3">
                        
                           <div class="present">
                           <div class="present1">
                        <img src="studentp1.png" alt="presenttoday" class="imgstu">

                        </div>
                        <div class="present2">

                       
                            <h2 style="text-align: center;">TOTAL STUDENTS</h2>

				<?php
				  require 'dbconnection.php';
				  $query = "SELECT id FROM student ORDER BY id";
				  $query_run = mysqli_query($connec, $query);
				  $row = mysqli_num_rows($query_run);

				  echo '<h1 style="text-align: center; color:black;">'.$row.'</h1>';
				?>
                 </div>
                           </div>

                           <div class="absent">
                           <div class="absent1">
                        <img src="absent1.png" alt="presenttoday" class="imgstu">

                        </div>
                        <div class="absent2">

                       
                            <h2 style="text-align: center;">PRESENT TODAY</h2>
                            </div>

                           </div>
                           <div class="hours">
                           <div class="hours1">
                        <img src="absent2.png" alt="presenttoday" class="imgstu">

                        </div>
                        <div class="hours2">
                        <h2 style="text-align: center;">ABSENT TODAY </h2>    
                        </div>
                        
                           </div> 
                    </div>
                </div>
			
			
			
                <!------------Rigestration details(start)------------>

                <div id="department">

                    <div id="regular">
                        <div id="regular-departments">
                        <h4 style="margin-left: 20px;">Departments</h4>
                        </div>
                    </div>

                    <div id="readtag">
                        <div id="readtag1">
                            <h4 style="margin-left: 20px;">ReadTag</h4>
                        </div>
 	
                    </div>
                </div>
                <!------------Rigestration details(end)------------>

			


                <!-------------attendance details(start)-------------->

                <div id="attendance">
                    <div id="attendance1">
                     <h4 style="margin-left: 20px;">Attendance Report</h4>
                    </div>
                    <div id="attendance2">
                        <div id="attendance-bca">
                            <h3 style="margin-left: 10px;">DEPARTMENT OF BCA</h3><br><br>
                            <a href="bca-report.php" id="report1" >BCA</a> 

                        </div>
                        <div id="attendance-mca">
                            <h3 style="margin-left: 10px;">DEPARTMENT OF MCA</h3><br><br>
                            <a href="#mca-attendancerport" id="report1" >MCA</a>
                        </div>
                        <div id="attendance-msc">
                            <h3 style="margin-left: 10px;">DEPARTMENT OF BSc CS </h3><br><br>
                            <a href="#msc-attendancereport" id="report1">BSc CS</a>
                        </div>
                        <div id="attendance-bba">
                            <h3 style="margin-left: 10px;">DEPARTMENT OF BBA</h3><br><br>
                            <a href="#bba-attendancereport" id="report1">BBA</a>
                        </div>
                        <div id="attendance-bcom">
                            <h3 style="margin-left: 10px;">DEPARTMENT OF BCOM</h3><br><br>
                            <a href="#bcom-attendancereport" id="report1">BCOM</a>
                        </div>
                        <div id="attendance-che">
                            <h3 style="margin-left: 4px;">DEP OF CHEMISTRY</h3><br><br>
                            <a href="#che-attendancereport" id="report1">CHEMISTRY</a>
                        </div>


                    </div>
                </div>
        
                <!-------------attendance details(end)-------------->

		          <div id="self">
                    <div id="self2">
                        <h4 style="margin-left: 20px;">Readtag Form</h4>
                    </div>
                    <div id="self1">
                    <p id="getname" hidden></p>
		            <!-- <br> -->
   

            <div class="readtag-container" id="show_user_data">
            
			 <form>
				<table style="padding: 2px">
                <p style="color:red;"><?php echo $msg; ?></p>

					<tr>
						<td style="background-color:#071952; color:white; padding:10px; box-shadow: rgba(0, 0, 0, 0.25) 0px 14px 28px, rgba(0, 0, 0, 0.22) 0px 10px 10px;">
							<b>Student Details</b>
						</td>
					</tr>
					<tr>
						<td >
							<table style= "width:580px; height:300px; border:0; align:center; cellpadding:5;  cellspacing:0;">
								<tr>
									<td style="font-weight:bold; text-align:center; width:200px;" class="lf">RFID NO</td>
									<td style="font-weight:bold; width:80px;">:</td>
									<td style="text-align:left;" id="showid">------------------------------------</td>
								</tr>
								<tr>
									<td style="font-weight:bold; text-align:center; width:200px;" class="lf">NAME</td>
									<td style="font-weight:bold">:</td>
									<td style="text-align:left;">------------------------------------</td>
								</tr>
								<tr>
									<td style="font-weight:bold; text-align:center; width:200px;" class="lf">ROLL NO</td>
									<td style="font-weight:bold">:</td>
									<td style="text-align:left;">------------------------------------</td>
								</tr>
								<tr>
									<td style="font-weight:bold; text-align:center; width:200px;" class="lf">EMAIL</td>
									<td style="font-weight:bold">:</td>
									<td style="text-align:left;">------------------------------------</td>
								</tr>
								<tr>
									<td style="font-weight:bold; text-align:center; width:200px;" class="lf">GENDER</td>
									<td style="font-weight:bold">:</td>
									<td style="text-align:left;">------------------------------------</td>
								</tr>
							</table>
						</td>
					</tr>
				</table>

			</form>
               

				</div>

            </div>

        </div>


                <!--registration details(start)-------------->

                <div id="rigestration">
                    <div id="rigestration2">
                        <h4 style="margin-left: 20px;">Registration Form</h4>
                        </div>
                    <div id="rigestration1">
                    <p id="d1"></p>

                        <div class="signup-container">
                                <h2>Registration</h2>
                                <form class="signup-form"  onsubmit="insertForm()"  action="registerprocess.php" method="post">
                                <!-- <input type="text" id="getid" placeholder="Please Tag Your card" name="n2"required> -->
                                   <textarea name="n2" id="getuid" class="getid" placeholder="Please Tag Your Card" required></textarea>
                                <input type="text" placeholder="Full Name" name="n1" id="fn" required>
                                    <input type="text" placeholder="Roll No" name="n3">
                                    <input type="email" placeholder="Email" name="n4" required>
                                    <input type="text" placeholder="Sample Image Id" name="n6" required>
                                    <input type="password" placeholder="Password" name="n5" required>
                                        <select id="gender" name="gender">
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                           
                                        </select>
                                        
                                        <button type="reset" name="r1" class="reg-reset">Reset</button><br><br>
                                    <button type="submit" name="b1" class="reg-submit" id="handle">Submit</button>
                                </form>

                        </div>
                    </div>
                </div>

                <!-------------------registration details(end)------------------------------>
					<!----------------attendance-bca details(start)-------------------->  
                <div id="bca-attendancereport">
                    <div class="bca1">
                        <h4>Attendance List</h4>
                        <!--<input type="text" class="form-control" id="live_search1" autocomplete="off" placeholder="search.....">-->	
                    </div>
                    <div class="bca2" id="bbca">
  			  
                       
                         <div class="find-student-detail" id="find-student-detail"><br>
                         <h1> <img src="listattendance.png" class="attmainimg"> Attendance List</h1><br>

                         <form method="post" action="attendance-list.php">
                            <lable style="margin-left:15px;"> Name</lable>
                            <input type="text" class="find" name="find-n1" placeholder="NAME" required><br>
                            <lable style="margin-left:15px;">Roll No</lable>
                            <input type="text" class="find" placeholder="ROLL NO" name="find-n2" required><br><br>
                            <button type="reset" class="reset">Reset</button>
                            <button type="submit" class="button" name="find-s1" id="find-s">Submit</button>


                            </form>   
                         </div>
                    </div>
                </div>
      
		<!------------attendance-bca details(end)------------>
                      <!---------------------------------------->

            </div>
            
        </div>
        
         
        <!----------------------------over all dashboard container details(end)------------------------------>
    </div>
        <!--------------------------------------overall body-container details(end)------------------------------------>


    <script src="jquery.min.js"></script>
 <script>
            var blink = document.getElementById('blink');
                setInterval(function() {
                                blink.style.opacity = (blink.style.opacity == 0 ? 1 : 0);
                                }, 750); 

 </script>
     
 <script>
 	document.getElementById("mybtn1").onclick = function(){
			myFunction()
			};
		 function myFunction()
			{
			document.getElementById("myDropdown1").classList.toggle("show");
			}

 </script>


   <script>
    function insertForm() {
      // Perform form submission logic here

      // Set a success flag in local storage
      localStorage.setItem('insertdata', 'true');
    }
  </script>



  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 
<script>
$(document).ready(function(){
    $("#getid").load("uidcontainer.php");
    $("#getuid").load("uidcontainer.php");
    $("#getname").load("uidcontainer.php");

    setInterval(function(){
        $("#getid").load("uidcontainer.php");
        $("#getuid").load("uidcontainer.php");
        $("#getname").load("uidcontainer.php");


    }, 500);
});
</script>

<script>
			var myVar = setInterval(myTimer, 1000);
			var myVar1 = setInterval(myTimer1, 1000);
			var oldID="";
			clearInterval(myVar1);

			function myTimer() {
				var getID=document.getElementById("getname").innerHTML;
                // alert(getID)
				oldID=getID;
				if(getID!="") {
					myVar1 = setInterval(myTimer1, 500);
                   showUser(getID);
					
					clearInterval(myVar);
				}
			}
			
			function myTimer1() {
				var getID=document.getElementById("getname").innerHTML;
				if(oldID!=getID) {
					myVar = setInterval(myTimer, 500);
					clearInterval(myVar1);
				}
			}
			
			function showUser(str) {
				if (str == "") {
					document.getElementById("show_user_data").innerHTML = "";
					return;
				} else {
					if (window.XMLHttpRequest) {
						// code for IE7+, Firefox, Chrome, Opera, Safari
						xmlhttp = new XMLHttpRequest();
					} else {
						// code for IE6, IE5
						xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
					}
					xmlhttp.onreadystatechange = function() {
						if (this.readyState == 4 && this.status == 200) {
							document.getElementById("show_user_data").innerHTML = this.responseText;
						}
					};
					xmlhttp.open("GET","readtaguserdata.php?id="+str,true);
					xmlhttp.send();

				}
			}      
    

           
</script>    
</body>
</html>