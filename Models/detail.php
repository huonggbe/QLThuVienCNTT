<?php
require_once("model.php");
class Detail extends Model
{
    function detail_sp($id)
    {
        $query =  "SELECT * from tailieu where MaSP = $id ";
        $result = $this->conn->query($query);
        return $result->fetch_assoc();
    }
}
