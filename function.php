<?php  
	function save($table,$dataPost){
		global $conn;
		// echo $table;
		// echo "<pre>";
		// print_r($dataPost);
		$field ="";
		$value ="";
		$i=0;
		foreach ($dataPost as $key=>$val) {
			if($key != "addNew"){
				$i++;
				if($i==1){
					if($key == 'status'){
						$field .= '`'.$key.'`';
					}else{
						$field .= $key;
					}
					$value .= "'".$val."'";
				}else{
					if($key == 'status'){
						$field .= ',`'.$key.'`';
					}else{
						$field .= ','.$key;
					}
					$value .= ",'".$val."'";
				}
			}
			
		}
		$sqlInsert = "INSERT INTO $table ($field) VALUES ($value)";
		// die($sqlInsert);
		mysqli_query($conn,$sqlInsert) or die("Lỗi câu truy vấn " .$sqlInsert);
		return mysqli_insert_id($conn);
	}

	function update($table,$dataPost,$condition){
		global $conn;
		$valFiled = "";
		$i=0;
		foreach ($dataPost as $key=>$val) {
			if($key != "addNew"){
				$i++;
				if($i==1){
					$valFiled .= "$key = '$val'";
				}else{
					$valFiled .= ",$key = '$val'";
				}
			}
		}
		$sqlUpdate = "UPDATE $table SET $valFiled WHERE $condition";
		// die($sqlUpdate);
		mysqli_query($conn,$sqlUpdate) or die("Lỗi câu truy vấn");
	}

	function getAll($table,$field="*",$condition=""){
		global $conn;
		$sqlSelect = "SELECT $field FROM $table $condition";
		// die($sqlSelect);
		$result =mysqli_query($conn,$sqlSelect) or die("Lỗi");
		return $result;
	}

	function getById($table,$field="*",$condition=""){
		global $conn;
		$sqlSelect = "SELECT $field FROM $table $condition";
		// die($sqlSelect);
		$result =mysqli_query($conn,$sqlSelect) or die("Lỗi ".$sqlSelect);
		$data = mysqli_fetch_array($result);
		return $data;
	}
?>