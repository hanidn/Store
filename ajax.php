<?php

include("connection.php");
			$sqlkala="SELECT * FROM `mahsool_tbl` ";
					$stmt=$connect->prepare($sqlkala);
					$stmt->execute();
	$result=$stmt->fetchALL(PDO::FETCH_NUM);

echo json_encode($result); 
?>