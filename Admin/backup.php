<?php
// Thông tin kết nối cơ sở dữ liệu MySQL
$servername = "localhost";
$username = "root";
$database = "webthumua";

// Tên tệp tin sao lưu
$backupFileName = "backup_" .date("d-m-Y") .".sql";

// Tạo lệnh mysqldump
$command = "mysqldump --user=root  --host=localhost webthumua > $backupFileName";

// Thực thi lệnh
system($command);

// Thiết lập các tiêu đề HTTP cho việc tải xuống tệp tin
header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment; filename="' . $backupFileName . '"');

// Đọc và gửi nội dung của tệp tin
readfile($backupFileName);
?>
