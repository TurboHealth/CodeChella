<!DOCTYPE html>

<head> 
  <title>TurboHealth&reg; Find the Best Health Insurance for You</title>
  <link rel="stylesheet" href="css/taxprep.css"/>
  <link rel="stylesheet" href="css/styling.css" type="text/css"/>
  <link rel="shortcut icon" href="img/favicon.ico"/>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js" type="text/javascript"></script>
 	
    <style type="text/css">

            #small{
            font-size:10px;
            }
            #bold{
                font-weight:bold;
            }
            #center{
                margin-left:auto;
                margin-right:auto;
                border-spacing:0;
            }

            td{
                text-align:center;
            }
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
        		line-height: 33px;
        	}
        	.content
        	{
        		font-size: 21px;
        		line-height: 27px;
        		padding: 20px;
        	}
        	.buttonstyle{
        		width: 45px;
        		height:40px;
        		background-color: #999999;
        	}

        	table, tr, th, td {	
 				padding-bottom: 15px;
 				padding-top: 15px;
 				padding-left: 35px;
 				padding-right: 35px;
                /*border: solid 1px #000000;
                outline-color: #f00;
                outline-style: solid;
                outline-width: 0px;*/
                border: solid 0px #000000;
                outline-color: #f00;
                outline-style: solid;
                outline-width: 0px;
			}
	           .plan-subinfo{
		      display:none;
            	}
	
	           .planinfo:hover .plan-subinfo {
		      display:block;
	           }		
    </style>
</head>

<body>
	<div class="bodycontainer">
        <header id="main" class="">
        <div class="nav-bar" style="height: 130px;">
          <div class="wrap">
            <nav class="nav">
              <div class="ttcom-logo">
              <div class="headstyle">TurboHealth</div>
              <div class="headexp" style="margin-left: 70px;">powered by</div>
                <img style="margin-left: 70px;" src="https://images.turbotax.intuit.com/images/logo/ttcom-logo.png" alt="turbotax.com" />
               </div>
               <div class="progress-copy" style="margin-top:55px; margin-right: 350px; float:right">
                      <div  class="right-nav-item progressTab" style="border-left: none;">
                        <span id="progressLabel" class="nav-item">Progress</span>
                        <div id="progressbar" class="ui-progressbar ui-widget ui-widget-content ui-corner-all" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="10">
                            <div class="ui-progressbar-value ui-widget-header ui-corner-left" style="width: 100%;"></div>
                        </div>
                    </div>
                </div>
              <ul class="mainNav">
              	<li class="help">
                	<a class="category" href="PersonalInfo.htm" target="_self">Home</a>
                </li>
              <li class="help">
                <a class="category" href="Login.htm" target="_self" data-link-id="123" >Logout</a>
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
        <div class="container">
        <div class="heading" style="margin-top: 50px;"> According to your data this is the best option ObamaCare will have for you starting October 2013.</div>
        <br><br>
        <div class="content">
        <table class="tablecss" align="center"> 
            <script type="text/javascript">
                $(document).ready(function(){

                    $('tr').hover(function() {
                    if(this.id!="menu"){
                    $(this).css("border-width","3px");}
                },
                function() {
                $(this).css("border-width","0px");
                });
                $("tr").click(function(){
                $(this).style.background="yellow";
                //document.getElementById("bold").innerHTML='hello';
                },
                function() {
                $(this).css("background","white");
                });
                });
            </script>
            <tr id ="menu">
                <th style="background: #C2C2C4;">Category</th>
                <th style="background: #C2C2C4;">Percentage of Expenses<br> Paid by Health Plan</th>
                <th style="background: #C2C2C4;">Percentage of Expenses <br>You Pay</th>
            </tr>

            <tr id="plat-plan">          	
                <td id="plat-left">Platinum&nbsp;<img id="planinfo" src="img/moreInfo_icn.png" title="For a platinum plan, an average individual would pay 10 percent out-of-pocket for their covered benefits and the insurer would pay 90 percent." 
                	width="30px" height="30px">
                </td>
                <td id="plat-middle">90%</td>
                <td id="plat-right">10%</td>
            </tr>

            <tr id="gold-plan">            	
                <td id="gold-left" style="background: #F3F3F3;">Gold&nbsp;<img id="goldinfo" title="For a gold plan, an average individual would pay 20 percent out-of-pocket for their covered benefits and the insurer would pay 80 percent." src="img/moreInfo_icn.png" width="30px" height="30px"></td>
                <td id="gold-middle" style="background: #F3F3F3;">80%</td> 
                <td id="gold-right" style="background: #F3F3F3;">20%</td>
            </tr>
            <tr id="silv-plan">          	
                <td id="silv-left">Silver&nbsp;<img id="silvinfo" title="For a silver plan, an average individual would pay 30 percent out-of-pocket for their covered benefits and the insurer would pay 70 percent." src="img/moreInfo_icn.png" width="30px" height="30px"></td>
                <td id="silv-middle">70%</td>
                <td id="silv-right">30%</td>
            </tr>
            <tr id="bronz-plan">
                <td id="bronz-left" style="background: #F3F3F3;" ><img id="img-bronz" src="img/check_mark_green.png" height="25px" width="25px">&nbsp;Bronze&nbsp;<img id="bronzinfo" title="For a bronze plan, an average individual would pay 40 percent out-of-pocket for their covered benefits and the insurer would pay 60 percent." 
                	src="img/moreInfo_icn.png" width="30px" height="30px"></td>
                <td id="bronz-middle" style="background: #F3F3F3;" >60%</td>
                <td id="bronz-right" style="background: #F3F3F3;">40%</td>
            </tr>
        </table>
        <br>
        
        <details>
        <summary>Click here to view 10 core benefits offered by this plan:</summary>
        <div style="font-size: 19px;">
        		<div>&nbsp;&nbsp;&nbsp;<img src="img/bullet.png"> Ambulatory patient services</div>
				<div>&nbsp;&nbsp;&nbsp;<img src="img/bullet.png"> Emergency services</div>
				<div>&nbsp;&nbsp;&nbsp;<img src="img/bullet.png"> Hospitalization</div>
				<div>&nbsp;&nbsp;&nbsp;<img src="img/bullet.png"> Maternity and newborn care</div>
				<div>&nbsp;&nbsp;&nbsp;<img src="img/bullet.png"> Mental health and substance use disorder services, including behavioral health treatment</div>
				<div>&nbsp;&nbsp;&nbsp;<img src="img/bullet.png"> Prescription drugs</div>
				<div>&nbsp;&nbsp;&nbsp;<img src="img/bullet.png"> Rehabilitative and habilitative services and devices</div>
				<div>&nbsp;&nbsp;&nbsp;<img src="img/bullet.png"> Laboratory services</div>
				<div>&nbsp;&nbsp;&nbsp;<img src="img/bullet.png"> Preventive and wellness services and chronic disease management</div>
				<div>&nbsp;&nbsp;&nbsp;<img src="img/bullet.png"> Pediatric services, including dental and vision care</div>
				</div>
        	</details>
        <br>
        <div>What this means for you...<br>
        <label id="govt-cost" style="font-size: 21px; line-height: 27px;">Yearly cost without government subsidy: $4,548</label>
        <label id="govt-subs" style="font-size: 21px; line-height: 27px;">Yearly Federal Government Subsidy: $2,460</label>
        <label id="total-cost" style="font-size: 21px; line-height: 27px; font-weight: bold;">Total cost of $2,100 / year ($175 / month)</label>
        </div>
        <br><br>
        <div>
        		 <div style="float: left; width: 30%; margin-left: 5%;"><b>Download app for ObamaCare reminders!</b></div>
        		 <div style= "float:right; margin-right: 25%;"><b>Message a friend!</b></div><br><br>
        		<img src="img/app_icn.png" align="center" style="float: left; margin-left: 8%;">    		
        			<img src="img/facebook-new-message.jpg.jpeg" style="float: right; width: 45%; margin-right:100px">
        	<br>
        	<br>
        	<br>
        	<br>
        	<br>
        	<br>
        	<br>
        	<br>
        	
        	</div>
           </div>
        </div>
    </div>
</div>
</div>
      </section>       	 
            <!--<div style="font-size: larger">Add to Facebook Events and let others know that there is only 300 days left to sign up &nbsp; &nbsp; &nbsp;<a class="button" href="#"><span class="btn btn-default btn-wide"> Share On Facebook </span></a> </div>  -->     
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
