<?php //PersonalInfo.php
  require "dbConnect.php";
  require "updateauto.php";

  session_start();

  if(isset($_SESSION['uid'])){
    connectToDB();

    $id = $_SESSION['uid'];
    $query="SELECT * FROM `TaxDetails` WHERE `UserID`='$id'";
    $result=mysql_query($query);
    $array=mysql_fetch_array($result);
  }

  if(isset($_POST['income']) && (isset($_POST['household'])) && (isset($_POST['status']))
    && isset($_POST['age'])){

    $id = $_SESSION['uid'];
    $income=$_POST['income'];
    $household=$_POST['household'];
    $status=$_POST['status'];
    $age=$_POST['age'];

    if(""==$income || ""==$household || ""==$status||""==$age){
        $error=true;
    }else{
        updateauto($id,$income,$household,$status,$age);
        header("Location: HealthInfo.php");
    }
}
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>TurboHealth&reg; Find the best insurance for you</title>
        <link rel="stylesheet" href="css/taxprep.css"/>
        <link rel="stylesheet" type="text/css" href="css/styling.css">
        <link rel="shortcut icon" href="img/favicon.ico">
        <style type="text/css">
        
.headstyle
        {
        font-size: 30px;
        color: #FF0000;
        }
         
        .headexp
        {
        font-size: 18px;
        color: #FFFFFF;
        }
        
.container{
        
background-color: #FFFFFF;
        width:1050px;
        height: auto;
        padding: 30px;
        margin: 0 auto;
         
        }
        
.bodycontainer
        {
        position: relative;
        }
        .heading
        {
        font-size: 31px;
        }
        .content
        {
        font-size: 21px;
        line-height: 27px;
        }
        
.buttonstyle{
        width: 45px;
        height:40px;
        
background-color: #999999;
        }
        </style>
</head>

<body>    
    <div class="bodycontainer">    
        <header id="main" class="">
        <div class="nav-bar" style="height: 130px;">
          <div class="wrap">
            <nav class="nav">
              <div class="ttcom-logo" style="float:left">
              <div class="headstyle" style="font-weight: bold" >TurboHealth</div>
              <div class="headexp" style="margin-left: 70px;">powered by</div>
                <img style="margin-left: 70px;" src="https://images.turbotax.intuit.com/images/logo/ttcom-logo.png" alt="turbotax.com" />
               </div>
               <div class="progress-copy" style="margin-top:55px; margin-right: 350px; float:right">
                    <div  class="right-nav-item progressTab" style="border-left: none;">
                        <span id="progressLabel" class="nav-item">Progress</span>
                        <div id="progressbar" class="ui-progressbar ui-widget ui-widget-content ui-corner-all" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="10">
                            <div class="ui-progressbar-value ui-widget-header ui-corner-left" style="width: 33%;"></div>
                        </div>
                    </div>
                </div>
                
            
              <ul class="mainNav">
              <li class="help">             
        <a class="category" href="PersonalInfo.php" target="_self">Home</a>
                </li>
              <li class="help">
                <a class="category" href="index.php" target="_self" data-link-id="123" >Logout</a></li>
              </ul>
            </nav>
                   
          </div>
        </div>
      </header>

    <div class="tt-container">
      <section class="block-row underline">
        <div class="container-fluid" id="continueReturn">
          <div class="row-fluid ">
            <div class="span11 offset1" id="InfoContainer">
            <div class="heading" style="margin-top: 50px;">
                <div class="FnFheader">Hi Jane,<br><br></div></div>
            
    <form method="post" action="PersonalInfo.php"> 
            <div class="content">
        <div>According to your tax return this is your relevant information.<br>
     Please review everything and make sure it's correct.
        </div>
        <br>
        <?php
            if(isset($error) && $error=true){
                echo "<h4 style='color: red'>Please fill out all the fields.</h4><br>";
            }
        ?>
        <table>
        <tr>
            <td class="span5">Income:</td>        
            <td><input id="income" name="income" type="number" <?php if(isset($array)){echo "value='$array[2]'";} ?> ></td>
        </tr>
        
        <tr>
            <td>&nbsp;</td>
        </tr>
        
        <tr>
        <td>Household:</td>
            <td><input id="household" name="household" type="number" <?php if(isset($array)){echo "value='$array[3]'";} ?> ></td>
        </tr>
        
        <tr>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>Marital Status:   </td>
            <td><input id="status" name="status" type="text" <?php if(isset($array)){echo "value='$array[4]'";} ?>></td>
        </tr>
        
        <tr>
            <td>&nbsp;</td>
        </tr>
        
        <tr>
            <td>Age:</td>
            <td><input id="age" name="age" type="number"<?php if(isset($array)){echo "value='$array[1]'";} ?>></td>
        </tr>
         
        </table>

        </div>
                <a style="float: right; margin-right: 200px;">
        <button type="submit" name="infoSubmit" id="authSubmit" class="ansSessGreyLarge">
                      <span class="btn btn-default btn-wide">Continue</span>
                    </button></a>
                        </form>

        </div>
    </div>
            </br>
</div>
</section>

        <footer class="condensed">
            <div class="row-fluid">
            <div class="span10 offset1">
        <div id="footersub" class="condensed">
  <div class="leftWrapShort">
    <img src="img/intuit-logo.jpg"> <br/>
    <a href='http://turbotax.intuit.com/corp/softwarelicense.jsp' data-link-id="89">Software License Agreements</a> | 
    <a href='http://security.intuit.com/privacy/' class="newWindow" data-link-id="90">Privacy Statement</a> 
    <br />  
    &copy;2013 Intuit Inc.  All rights reserved.</div>
<!-- #footersub2 -->
              </div>
            </div>  
          </div>
        </footer> 
      </div>
    </div>
    </body>
</html>

