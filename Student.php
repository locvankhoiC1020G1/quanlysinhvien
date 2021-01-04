<?php

class Student{

    public $ten;
    public $tuoi;
    public $lop;

    /**
     * Student constructor.
     * @param $ten
     * @param $tuoi
     * @param $lop
     */
    public function __construct($ten, $tuoi, $lop)
    {
        $this->ten = $ten;
        $this->tuoi = $tuoi;
        $this->lop = $lop;
    }

    /**
     * @return mixed
     */
    public function getTen()
    {
        return $this->ten;
    }

    /**
     * @param mixed $ten
     */
    public function setTen($ten)
    {
        $this->ten = $ten;
    }

    /**
     * @return mixed
     */
    public function getTuoi()
    {
        return $this->tuoi;
    }

    /**
     * @param mixed $tuoi
     */
    public function setTuoi($tuoi)
    {
        $this->tuoi = $tuoi;
    }

    /**
     * @return mixed
     */
    public function getLop()
    {
        return $this->lop;
    }

    /**
     * @param mixed $lop
     */
    public function setLop($lop)
    {
        $this->lop = $lop;
    }

}
?>