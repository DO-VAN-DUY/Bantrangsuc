<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\helper\Cart;
use app\models\Product;
use app\models\Checkout;
use app\models\Customer;
use app\models\CustomerForm;
use app\models\LoginForm;

class LoginController extends Controller
{
    public function actionIndex()
    {
    
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new CustomerForm();
       // var_dump($model->login());
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            // return $this->render('/index');
            
            return $this->goHome();
        }
        return $this->render('index', [
            'model' => $model,
        ]);
    }
    public function actionRegister()
    {
       
        $model = new Customer();
        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['register', 'id' => $model->id]);
            }
        } else {
            $model->loadDefaultValues();
        }
        return $this->render('register', [
            'model' => $model,
        ]);
     
    }
    
    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */

   
}
