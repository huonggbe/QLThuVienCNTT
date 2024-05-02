<?php

define('HOST', 'localhost');
define('USERNAME','root');
define('PASSWORD','');
define('DATABASE','webthumua');

/*
Sử dụng cấu lệnh insert, update, insert
*/
function execute($sql){

// kết nối cơ sở dữ liệu
	$conn = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);
	mysqli_set_charset($conn,'utf8');
	//xu lý câu truy vấn
	mysqli_query($conn,$sql);

	//đóng kế nối
	mysqli_close($conn);
}
function executeResult($sql){

// kết nối cơ sở dữ liệu
	$conn = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);
	mysqli_set_charset($conn,'utf8');
	//xu lý câu truy vấn
	$result = mysqli_query($conn,$sql);
	$data=[];
	while (($row=mysqli_fetch_array($result,1))!=null) {
		// code...
	$data[]= $row;
	}

	//đóng kế nối
	mysqli_close($conn);

	return $data;
}

?>