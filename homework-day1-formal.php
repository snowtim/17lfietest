<?php

	$num = isset($_REQUEST["num"]) ? $_REQUEST["num"] : 10;

	if($_REQUEST["num"]==1 || $_REQUEST["num"]==0) {
		echo "數字範圍太小".$_REQUEST["num"]."非為質數";
	} else {
		for($a=1; $a<=$_REQUEST["num"]; $a++) {
			$countnum = 0;
			for($b=1; $b<=$a; $b++) {
				if($a % $b == 0) {
					$countnum++;
				}
			}

			if($countnum == 2) {
				echo $a."為質數<br/>";
			}
		}
	}

?>