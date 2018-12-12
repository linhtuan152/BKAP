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
		mysqli_query($conn,$sqlInsert) or die("Lỗi câu truy vấn");
	}

	function update($table,$dataPost){

	}
?>