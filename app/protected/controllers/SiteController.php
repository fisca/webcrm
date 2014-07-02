<?php

class SiteController extends Controller {

    public function actionIndex() {
        $this->render("//site/index");
    }

    public function actionConfigGroupCustomer() {
        $groupCustomers = GroupCustomer::model()->findAll();
        $this->renderPartial("//site/configGroupCustomer", array(
            'groupCustomers' => $groupCustomers
        ));
    }

    public function actionSaveGroupCustomer() {
        if (!empty($_POST)) {
            $id = $_POST['id'];

            if (empty($id)) {
                $groupCustomer = new GroupCustomer();
            } else {
                $groupCustomer = GroupCustomer::model()->findByPk($id);
            }

            $groupCustomer->name = $_POST['name'];
            $groupCustomer->save();

            echo 'success';
        }
    }

    public function actionEditGroupCustomer($id) {
        if (!empty($id)) {
            $groupCustomer = GroupCustomer::model()->findByPk($id);
            echo CJSON::encode($groupCustomer);
        }
    }

    public function actionDeleteGroupCustomer($id) {
        if (!empty($id)) {
            GroupCustomer::model()->deleteByPk($id);
            echo 'success';
        }
    }

}
