<?php
include_once 'Student.php';
class studentManager{
protected $listStudent = [];

    public function getListProduct()
    {
        return $this->listStudent;
   }
/* thêm học sinh
Dùng hàm array_push thêm vào mảng listStudent
*/
    public function add($student)
    {
        array_push($this->listStudent, $student );
   }
/*Sửa danh sách học sinh

thay thế học sinh mới vào mảng tại vị trí index*/
    public function edit($index, $student)
    {
        $this->listStudent[$index] = $student;
}
/*Xóa học sinh trong danh sách*/
    public function delete($index)
    {
        array_splice($this->listStudent, $index);
   }
/*Sắp xếp danh sách học sinh*/
    public function sort()
    {
        sort($this->listStudent);
}
}
?>