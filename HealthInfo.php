<?php //HealthInfo.php
  require "dbConnect.php";
  require "updateauto.php";

  session_start();
  if(isset($_SESSION['uid'])){
    connectToDB();
    $id = $_SESSION['uid'];
    $query="SELECT * FROM `HealthDetails` WHERE `UserID`='$id'";
    $result=mysql_query($query);

    if(mysql_num_rows($result)!=0)
    {
    $array=mysql_fetch_array($result);
    }
  }

    if(isset($_POST['employer']) && (isset($_POST['smoke'])) && (isset($_POST['visits']))
      && isset($_POST['history'])){
    $id = $_SESSION['uid'];
    if ($_POST['employer']=="yes"){
      $employer=1;
    }else{
      $employer=0;
    }

    if($_POST['smoke']=="yes"){
      $smoke=1;
    }else{
      $smoke=0;
    }
    $visits=$_POST['visits'];

    if($_POST['history']=="yes"){
      $history=1;
    }else{
      $history=0;
    }

    if("select"==$_POST['employer']|| "select"==$_POST['smoke'] || ""==$_POST['visits']||"select"==$_POST['history']){
        $error=true;
    }else{
        //updatehealth($id,$employer,$smoke,$visits,$history);
        header("Location: HealthOptions.html");
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
        font-size: 24px;
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
                            <div class="ui-progressbar-value ui-widget-header ui-corner-left" style="width: 66%;"></div>
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
              <div class="heading" style="margin-top: 50px;">A few more questions about you...</div><br><br>
              <form method="post" action="HealthInfo.php"> 
                <div class="content">
                <?php
            if(isset($error) && $error==true){
                echo "<h4 style='color:red'>Please fill out all the fields.</h4><br>";
            }
        ?>
                  <table>
                   <tr>
                    <td>Are you covered by an employer? &nbsp;&nbsp;</td>
                    <td>
                      <select name="employer">
                        <option value="select">Select</option>
                        <option <?php if(isset($array) && $array[1]==1){echo "selected";}?> value="yes">Yes</option>
                        <option <?php if(isset($array) && $array[1]==0){echo "selected";}?> value="no" >No</option>
                      </select>
                    </td>
                  </tr>
        
                  <tr><td>&nbsp;</td></tr>
                  
                  <tr>
                    <td>Do you smoke? &nbsp;&nbsp;</td>
                    <td>
                      <select name="smoke">
                        <option value="select">Select</option>
                        <option <?php if(isset($array) && $array[2]==1){echo "selected";}?> value="yes">Yes</option>
                        <option <?php if(isset($array) && $array[2]==0){echo "selected";}?> value="no">No</option>
                      </select>
                    </td>
                  </tr>
        
                  <tr><td>&nbsp;</td></tr>
        
                  <tr>
                    <td>How many times have you visited the doctor in the past year? &nbsp;&nbsp;</td>
                    <td><input name="visits" id="times" type="number" <?php if(isset($array[3])){echo "value='$array[3]'";}?>></td>
                  </tr>
                  <tr><td>&nbsp;</td></tr>
                  
                  <tr>
                    <td>Do you have any history of illness? &nbsp;&nbsp;</td>
                    <td>
                      <select name="history">
                        <option value="select">Select</option>
                        <option <?php if(isset($array) && $array[4]==1){echo "selected";}?> value="yes">Yes</option>
                        <option <?php if(isset($array) && $array[4]==0){echo "selected";}?> value="no">No</option>
                      </select>
                    </td>
                  </tr>
                </table>
                <br>
                <br>
              </div>
              <script type="text/javascript">
                  function next(){
                    window.open("PersonalInfo.php", "_self");
                  }
              </script>
<a style="float:left; margin-left:100px;"class="button" onclick="next()"><span class="btn btn-default btn-wide">Back</span></a>
              <a style="float: right; margin-right: 200px;">

        <button type="submit" name="infoSubmit" id="authSubmit" class="ansSessGreyLarge">
                      <span class="btn btn-default btn-wide">Continue</span>
                    </button></a>
              <br>
              <br>
              <br>
            </form>
            </div>
          </div>
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
      

