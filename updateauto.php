<?php //updateauto.php

function updateauto($uid,$income,$household,$status,$age){
	$query="UPDATE `TaxDetails` SET `Income`='$income', `Household`='$household',`MaritalStatus`='$status'
			, `Age`='$age' WHERE `UserID`='$uid'";
	mysql_query($query);
}

function updatehealth($uid,$employer,$smoke,$visits,$history){
	$query="SELECT * FROM `HealthDetails` WHERE `UserID`='$uid'";
	$result=mysql_query($query);
	if (mysql_num_rows($result)==0){
		$insert="INSERT INTO `HealthDetails` VALUES ($uid,$employer, $smoke, $visits, $history) ";
		mysql_query($insert);
	}else{
		$update="UPDATE `HealthDetails` SET `Employer`='$employer',`Smoke`='$smoke', `Visits`='$visits', 
				`History`='$history' WHERE `UserID`='$uid'";
		mysql_query($update);
	}
}
?>