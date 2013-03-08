<?php //Login.php
  require "dbConnect.php";

  session_start();

  if(isset($_POST['userid']) && isset($_POST['password'])){
    connectToDB();
    $uid=$_POST['userid'];
    $password=$_POST['password'];
    $query="SELECT * FROM `UserDetails` 
      WHERE `Username`='$uid' AND `Password`='$password'";
    $result = mysql_query($query);
    $array = mysql_fetch_array($result);
    if( mysql_num_rows($result) == 1){
      $_SESSION['uid'] = $array[0];
      header("Location: PersonalInfo.php");
    }else{
      $error=true;
    }
  }
?>

<!DOCTYPE HTML>

<head> 
  <title>TurboHealth&reg; Find the Best Health Insurance for You</title>
  <link rel="stylesheet" href="css/styling.css" type="text/css" />
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
          .smallheading
          {
            font-size: 28px;
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
          .leftcontainer{
            width: 630px;
            margin-top: 150px;
          }
          .rightcontainer{
            width: 60px;      
            margin-left: 720px;
             margin-top: 150px;
          }
          .imagecss{
            width: 450px;
            height: 570px;
          }
  </style>

</head>
  
<body>
  <div id="body-content-container">
      <a id="top"></a>
      <header id="main" class="">
        <div class="nav-bar" style="height:130px;">
          <div class="wrap">
            <nav class="nav">
              <div class="ttcom-logo" style="float:left">
                <div class="headstyle" style="font-weight: bold" >TurboHealth</div>
                <div class="headexp" style="margin-left: 70px;">powered by</div>
                <img style="margin-left: 70px;" src="https://images.turbotax.intuit.com/images/logo/ttcom-logo.png" alt="turbotax.com" />
               </div>
            </nav>
          </div>
        </div>
      </header>

      <div class="tt-container">
      <a role="main" id="mainContent"></a>
      <section class="block-row underline">
        <div class="container-fluid" id="continueReturn">
          <div class="row-fluid ">
            <div class="span11 offset1" id="signinContainer">
              <h2>300 days until you have to take the law into your hands</h2>
              <div class="span5">
                <h6>ObamaCare will be mandatory for everyone starting January 2014. Let TurboTax help you avoid penalties from the government and 
                  use your tax information to inform and recommend the best upcoming healthcare solution for you and your family. </h6>
                                  <?php 
                      if(isset($error) && $error==true):
                  ?>
                        <p style="color:red">
                        <label for="error Message" class="errorMessages">Failed to login. Please try again.</label></p>
                  <?php
                      else:
                        echo "<h2>Let's sign you in!</h2>";
                      endif;
                  ?>
                <form class="authForm" id="authForm" method="post" action="index.php" autocomplete="off">
                <fieldset>

                  <div class="fieldWrapper">
                    <div>
                      <label for="authFormUserID" class="text">User ID</label>
                    </div>
                    <div>
                      <input id="authFormUserID"  name="userid" class="text" type="text" />
                    </div>
                  </div>
                  <div class="fieldWrapper">
                    <div>
                      <label for="authFormPassword"  class="text">Password</label>
                    </div>
                    <div>
                      <input id="authFormPassword" name="password" class="text" type="password" maxlength="32" />
                    </div>
                  </div>
                  <div class="fieldWrapper">
                    <label class="checkbox">
                      <input id="authFormPrefillMemID" name="prefillMemID" type="checkbox"> Remember me on this computer
                    </label>
                  </div>
                  <br/>
                  <div class="fieldWrapper">
                    <button type="submit" name="authSubmit" id="authSubmit" class="ansSessGreyLarge">
                      <span class="btn btn-default btn-wide">Sign In</span>
                    </button>
                  </div>
                </fieldset>   
               </form>
              </div>
              <div id="signinFig" class="span4">
              <figure>
                <img src="img/doctor_family.png"/>
              </figure>
              </div>

            </div>
          </div>
        </div>
        <br><br>
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
