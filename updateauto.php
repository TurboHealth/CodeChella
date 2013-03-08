<?php //updateauto.php

function updateauto($uid,$income,$household,$status,$age){
	$query="UPDATE `TaxDetails` SET `Income`='$income', `Household`='$household',`MaritalStatus`='$status'
			, `Age`='$age' WHERE `UserID`='$uid'";
	mysql_query($query);
}
?>