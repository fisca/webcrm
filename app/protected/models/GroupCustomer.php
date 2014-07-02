<?php

class GroupCustomer extends CActiveRecord {

    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public function tableName() {
        return 'group_customers';
    }

}
