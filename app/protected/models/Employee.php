<?php

class Employee extends CActiveRecord {

    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public function tableName() {
        return 'employees';
    }

    public function getGender() {
        if ($this->gender == 'f') {
            return "หญิง";
        } else {
            return "ชาย";
        }
    }

}
