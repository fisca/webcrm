<?php

class SiteController extends Controller {

    public function actionIndex() {
        $this->render("//site/index");
    }

    // ==================== Group Customer ===================
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

    // ================= Visit Type =========================
    public function actionConfigVisitType() {
        $visitTypes = VisitType::model()->findAll();
        $this->renderPartial('//site/configVisitType', array(
            'visitTypes' => $visitTypes
        ));
    }

    public function actionSaveConfigVisitType() {
        if (!empty($_POST)) {
            $id = $_POST['id'];

            if (empty($id)) {
                $visitType = new VisitType();
            } else {
                $visitType = VisitType::model()->findByPk($id);
            }

            $visitType->name = $_POST['name'];
            $visitType->save();

            echo 'success';
        }
    }

    public function actionEditVisitType($id) {
        if (!empty($id)) {
            $visitType = VisitType::model()->findByPk($id);
            echo CJSON::encode($visitType);
        }
    }

    public function actionDeleteVisitType($id) {
        if (!empty($id)) {
            VisitType::model()->deleteByPk($id);
            echo 'success';
        }
    }

    // ================ Employee =========================
    public function actionConfigEmployee() {
        $this->renderPartial('//site/configEmployee');
    }

    public function actionSaveEmployee() {
        if (!empty($_POST)) {
            $emp = new Employee();
            $emp->fname = $_POST['fname'];
            $emp->lname = $_POST['lname'];
            $emp->gender = $_POST['gender'];
            $emp->tel = $_POST['tel'];
            $emp->email = $_POST['email'];
            $emp->user = $_POST['user'];
            $emp->pass = $_POST['pass'];
            $emp->save();
            
            echo 'success';
        }
    }

}
