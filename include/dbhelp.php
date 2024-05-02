<?php
define('HOST', 'localhost');
define('USERNAME','root');
define('PASSWORD','');
define('DATABASE','shopsach');

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
	
		

	if ($result) {

	while (($row=mysqli_fetch_array($result,1))!=null) {
		// code...
	$data[]= $row;
	}
}
	else {
		// Xử lý khi truy vấn thất bại
		
	}
	//đóng kế nối
	mysqli_close($conn);

	return $data;
	
}
function danhmuc()
    {
		// kết nối cơ sở dữ liệu
	$conn = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);
	mysqli_set_charset($conn,'utf8');
	//xu lý câu truy vấn
	$sql =  "SELECT * from danhmuc";
	$result = mysqli_query($conn,$sql);
	$data=[];
	
		

	if ($result) {

	while (($row=mysqli_fetch_array($result,1))!=null) {
		// code...
	$data[]= $row;
	}
}
	else {
		// Xử lý khi truy vấn thất bại
		
	}
	//đóng kế nối
	mysqli_close($conn);

	return $data;
		
	
    }
function chitietdanhmuc($id)
    {
		

		// kết nối cơ sở dữ liệu
	$conn = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);
	mysqli_set_charset($conn,'utf8');
	//xu lý câu truy vấn
	$sql =  "SELECT d.TenDM as Ten, l.* FROM danhmuc as d, loaisanpham as l WHERE d.MaDM = l.MaDM and d.MaDM = $id";
	$result = mysqli_query($conn,$sql);
	$data=[];
	
		

	if ($result) {

	while (($row=mysqli_fetch_array($result,1))!=null) {
		// code...
	$data[]= $row;
	}
}
	else {
		// Xử lý khi truy vấn thất bại
		
	}
	//đóng kế nối
	mysqli_close($conn);

	return $data;
    }

?>