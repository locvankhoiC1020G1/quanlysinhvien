<?php
include_once 'Student.php';
/*Tên hằng phải viết hoa*/
const FILENAME = 'data.json';

/* Chuyển từ đối tượng thành mảng, lấy tất cả thuộc tính của đối tượng chuyển thành mảng */
function objToArray($obj){
    return [$obj->getten(), $obj->gettuoi(), $obj->getlop()];

}
?>