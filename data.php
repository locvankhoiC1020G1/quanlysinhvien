<?php
include_once 'Student.php';
/*Tên hằng phải viết hoa*/
const FILENAME = 'data.json';

/* Chuyển từ đối tượng thành mảng, lấy tất cả thuộc tính của đối tượng chuyển thành mảng */
function objToArray($obj){
    return [$obj->getten(), $obj->gettuoi(), $obj->getlop()];

}
/*lưu dữ liệu





JSON là gì? JSON là viết tắt của cụm từ “JavaScript Object Notation”, là cách thức để mô tả object trong xử lý của java script.

json_encode là gì? Để conver giá trị chỉ định thành định dạng JSON, người ta sử dụng hàm số json_encode

*/



function saveData($data, $isReplace = False)
{
    if ($isReplace){
        $dataJson = json_encode($data);
        file_put_contents(FILENAME, $dataJson);
    }
    else {
        $oldData = loaddata();
        array_push($oldData, $data);
        $dataJson = json_encode($oldData);
        file_put_contents(FILENAME,$dataJson);
    }
}
function loadData()
{
    return json_decode(file_get_contents(FILENAME), true);
}

function arrayToObj($array){
    return new Student($array[0],$array[1],$array[2]);
}

?>