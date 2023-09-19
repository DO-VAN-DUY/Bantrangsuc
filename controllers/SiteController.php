<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Menu;
use app\models\Product;
use app\models\Trademark;
use app\models\Productgroups;
use app\helper\Cart;


class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::class,
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $getall = new Menu();
        $getallproduct = new Product();
        $cart = new Cart();
        $cartstore = $cart->cartstore;
        $cost = $cart->getCost;
        $getmenu = $getall->Get_all();
        $product = $getallproduct->Get_all_product();
        return $this->render('index', ['menu' => $getmenu, 'product' => $product, 'cartstore' => $cartstore, 'cost' => $cost]);
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->render('contact');
        }

        $model->password = '';
        return $this->render('login', [
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
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }
    public function actionDetail($id)
    {

        $detailsp = Product::findOne(['id' => $id]);
        $trademark = Trademark::findOne(['namesp_id' => $id]);

        $products = Product::find()->andFilterWhere(['productgroup_id' => $detailsp->productgroup_id])->all();
        //  var_dump( $detailproduct);
       // $detailgrop = $detailproduct->productgroup;
        // $products = [];
        // foreach ($detailgrop as $item) {
        //     $products[] = $item->product;
        // }

        return $this->render('detail', ['detailsp' => $detailsp, 'trademark' => $trademark, 'products' => $products]);
    }
}
