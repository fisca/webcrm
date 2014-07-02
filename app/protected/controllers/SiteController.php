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
            $groupCustomer = new GroupCustomer();
            $groupCustomer->name = $_POST['name'];
            $groupCustomer->save();

            echo 'success';
        }
    }

}
