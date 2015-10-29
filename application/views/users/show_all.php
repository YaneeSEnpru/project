<?php
//defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <title>Show users</title>
   <style>
    td{
   // border-style: solid;
   // border-width: 1px;
   //border-collapse: collapse;
    } 
 
 .table3  {
        //background-color: #000;
         border-collapse: collapse;
         border: 1px solid black;
}
 .td3, .th3 {
      border: 1px solid black;
}
 
  th {
     //background-color: #36d278;
     //height :30px ;
    // background: -webkit-linear-gradient(#19D119 , #66E066,#19D119); /* For Safari 5.1 to 6.0 */
   // background: -o-linear-gradient(#19D119 , #66E066,#19D119); /* For Opera 11.1 to 12.0 */
    //background: -moz-linear-gradient(#19D119 , #66E066,#19D119);  For Firefox 3.6 to 15 
   // background: linear-gradient(#339933,#339933);  Standard syntax (must be last) 
     
}
 tr {
      //background-color: #F4F4F4;
         
}
.intr1{
    background-color: #F9F2F9;
    border: 1px solid black;
    height :24px ;
}
.ht1{
    height :30px ;
   background-color: #8D198D;
   color: #FFF;
   font-size: 18px;
   border: 1px solid black;
}
.h1{
    color: #FFF;
   font-size: 12px;
   font-style:initial;
}
td{
    //height :25px ;
}

#td2,#td3,#td4,#td5{
    text-indent: 0.8cm;
    
}

body{
    background-color:#FFF;	
}
 

#top { 
    top:0px; 
    left: 0px; 
	position: fixed;
	background-color:Purple ; 
        height :40px ;
}

#buttom { 
     bottom: 0px; 
    left: 0px; 
  position: fixed;
  background-color:Purple ; 
        height :40px ;
}

#input{
border: 2px solid #FFFFFF;
//height: 20px;
}


#update {
	width: 40%;
	left: 30%;
	height: 40%;
	padding:20px;
    position:  absolute;
	z-index: 12;
	top: 20%; 
    display:none;
	background-color:#CC99CC;  
	//border-radius: 10px; 
 	
}
#put{
    background-color:#A040A0; 
	border: 1px solid #FFF;
       border-style: inset;
        border-radius: 4px;
        font-size: 16px;
        color: #FFF;
        width: 80px;
        height: 27px;
}
#put:hover {
	background-color:#C080C0; 
	border: 2px solid #ECD9EC;
        color: #FFF;
        cursor: pointer;
   }
.submit {
	background-color:#DFBFDF; 
	border: 1px solid #666666;
        border-style: outset;
        border-radius: 4px;
   }
   
   .submit:hover {
	background-color:#AC59AC; 
	border: 2px solid #666666;
        color: #FFF;
        cursor: pointer;
   }
#black {
	background-color: #000;
	height: 100%;
	width: 100%;
	left: 0px;
	position: fixed; 
	z-index: 11;
	top: 0px;
	opacity:0.65;
        display:none;
}

   </style>
</head>
<body>
    <!--<form action="./insert" method="post">
ID : <input type="text" name="u_id" placeholder="Please Enter User ID"  > <br/><br/>-->
 

<table width="100%" id="top" >
  <tr>
    <td align="left">
<table border="0" align="left"  style="width:100% " id="tb">
    <tr>
        <td style="width:10%" class="h1">ชื่อ</td>
    <td style="width:10%" class="h1"> นามสกุล</td> 
    <td style="width:10%" class="h1">อีเมลล์</td>
    <td style="width:10%"> </td>
    <td style="width:60%"> </td>
  </tr>
  <tr >
      <form action="./insert" method="post">
     <td ><input style="height: 20px;border-radius: 3px;"  type="text" name="u_name" placeholder=" " id="input" ></td>
     <td><input style="height: 20px;border-radius: 3px;" type="text" name="u_lastname" placeholder=" " id="input" ></td>
    <td><input style="height: 20px;border-radius: 3px;" type="text" name="u_email" placeholder=" " id="input"  ></td>
    <td><input id="put" type="submit" value="เพิ่ม" class="submit"> </td>
    <td style="height: 10px" align="right"> <b style="font-size: 30px; color: #FFF; margin-right: 20px;">ระบบแอดมิน</b>   </td>
      </form>
    
  </tr>
</table></td>
  </tr>
</table>

</form>
</br>
</br>
</br>
</br>


<center></center>
   <?php
   //		foreach($users as $user)
  	//	echo $user. '<br/>';
    ?> 

<table class="table3"  style="width:80% " align="center" >
       
	  <tr align="center" >
              <th  class="ht1"  style="width:5%">ID</th>
	    <th class="ht1"  style="width:25%">Name</th>	
             <th class="ht1"  style="width:25%">Lastname</th>	
	    <th class="ht1"  style="width:25%">E-mail</th>
            <th class="ht1" style="width:10%">ลบ</th>
            <th class="ht1"  style="width:10%">แก้ไข</th>
	  </tr>
       
    		  </tr> 
            
 
    <?php   $num=0;
    	foreach($users->result() as $user){ $num++;
    		echo '<tr>';
    		echo '<td align="center" class="intr1">'.$user->id. '</td>';
    		echo '<td id="td2" class="intr1">'.$user->name. '</td>';
                echo '<td id="td4" class="intr1">'.$user->lastname. '</td>';
    		echo'<td id="td3" class="intr1">'.$user->email. '</td>';
                echo'<td id="td5" class="intr1">
                    
              <form action="./delete_user_id" method="post">
              <input type="hidden" name="u_id"   value="'.$user->id. '" >   
              <input type="submit" value="  ลบ  " class="submit"> 
              </form>
              
               </td>'; //ลบ 
                
                 echo'<td id="td3" class="intr1">
                    
              <input type="hidden" name="u_id"  size="10" value="'.$user->id. '" >
              <input type="hidden" name="u_name"  size="10" value="'.$user->name. '" >
              <input type="hidden" name="u_name"  size="10" value="'.$user->lastname. '" >
              <input type="hidden" name="u_email" size="10" value="'.$user->email. '">
              <input type="button" value="แก้ไข" class="submit" 
              
               onClick="update('.$user->id. ',\''.$user->name. '\',\''.$user->lastname. '\',\''.$user->email. '\')"> 
             

               
              
               </td>';  //แก้ไข  
                 
    		echo '</tr>';
	    } 
      
      
    ?> 
              
          
    </table>
    
    <?
    if(!$users->result())
      {
        echo'<br><h1 align="center" >ไม่พบข้อมูล</h1>';
      }
      ?>
    <div id="update" align="center"  > 
    <h3>Update </h3>
    <form action="./update_user_id" method="post"> 
        <input type="hidden" name="u_id"  id="id" >
        
              </br>
              <table style="width:80%">
                    <tr >
                      <td style="width:15%">  </td>
                      <td style="width:20%">Name : </td>
                      <td style="width:65%"><input type="text" name="u_name"  id="name1" size="30" ></td> 
                      
                    </tr>
                    <tr>
                       <td >  </td>
                      <td>Lastname : </td>
                      <td><input type="text" name="u_lastname"  id="lastname1" size="30" ></td> 
                     
                    </tr>
                     <tr>
                      <td >  </td>
                      <td>Email: </td>
                      <td> <input type="text" name="u_email" id="email1" size="30"   ></td> 
                    </tr>

              </table>
           <br/>    
              <input type="submit" value="แก้ไข" class="submit" style="width:111px; height: 44px;">  
               <input type="button" value="ยกเลิก" class="submit" style="width:111px; height: 44px;" onClick="closs( )">
              </form>
               </div>
               <div id="black"></div>



<table width="100%" id="buttom" >
  <tr>
    <td align="left"> 
     <form action="./search_keyword" method="post">    
         <c style="color:fff;">ค้นหาจาก</c>
         <select name="type" size="1">
         <option value="id">ไอดี</option>
         <option value="name">ชื่อ</option>
         <option value="lastname">นามสกุล</option>
         <option value="email">อีเมล์</option> 
         </select> 
        <input type="text" name="keyword"  id="name1"  >
        <input type="submit" value="ค้นหา" class="submit" style="padding:11px;">  
         <? echo' <a align="right" > ทั้งหมด '.$num.' รายการ</a>'; ?>
     </form>
        

</td>
  </tr>
</table>

                 
 <script type="text/javascript"> 
     
	//update( 1,"sssss","1111" );		   
 function id(x){
	
  return	document.getElementById(x);
}

function closs( )
{   
	id('update').style.display  = "none";
	id( 'black').style.display = "none"; 
}

function update( i ,  n , l,  e )
{    
	id('update').style.display  = "block";
	id( 'black').style.display = "block";
	id('id').value = i ; 
	id('name1').value = n ;
        id('lastname1').value = l ;
	id('email1').value = e ; 
}

			   </script>
</body>
</html>