<?php
	
	//先判斷輸入值是否為數字後用三點座標求三角形面積
	if((is_numeric($_POST["x1"]) && is_numeric($_POST["y1"]))) {
		if((is_numeric($_POST["x2"]) && is_numeric($_POST["y2"]))) {
			if((is_numeric($_POST["x3"]) && is_numeric($_POST["y3"]))) {
				$determinant = ($_POST["x1"]*$_POST["y2"]-$_POST["x2"]*$_POST["y1"])+($_POST["x2"]*$_POST["y3"]-$_POST["x3"]*$_POST["y2"])+($_POST["x3"]*$_POST["y1"]-$_POST["x1"]*$_POST["y3"]);
				$triangle_area = 1 / 2 * $determinant;

				echo "三角形面積為:".abs($triangle_area);
			} else {
				echo "座標僅可輸入數字";
			}
		} else {
			echo "座標僅可輸入數字";
		}
	} else {
		echo "座標僅可輸入數字";
	}

?>