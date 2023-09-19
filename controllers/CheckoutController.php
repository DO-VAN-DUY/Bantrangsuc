<?php

namespace app\controllers;

use app\models\Orders;
use app\models\Customer;
use app\models\Orderdetails;
use app\models\Checkout;
use app\models\Product;
use app\helper\Cart;
use yii\web\Controller;
use Yii;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\symfonymailer\Mailer;

/**
 * MenuController implements the CRUD actions for menu model.
 */
class CheckoutController extends Controller
{
   public function actionIndex()
   {

      $cart = new Cart();
      $model = new Checkout();
      $cartstore = $cart->cartstore;
      $cost = $cart->getCost;

      if (!Yii::$app->user->isGuest) {
         $model->fullname = Yii::$app->user->identity->username;
         $model->address = Yii::$app->user->identity->address;
         $model->phone = Yii::$app->user->identity->phone;
         $model->email = Yii::$app->user->identity->email;
         $model->total_money = number_format($cost, 0, '', '.');
         $model->booking_date =  date('Y-m-d H:i:s', strtotime('+5 hours'));
         $order = new Orders();
         $order->customer_id = Yii::$app->user->identity->id;
         $order->full_name = $model->fullname;
         $order->address = $model->address;
         $order->phone = $model->phone;
         $order->email = $model->email;
         $order->ship = 15000;
         $order->vat = 1500;
         $order->total_money = $cost;
         $order->into_money = $cost + $order->ship + $order->vat;
         $order->total_number = $cost;
         $order->booking_date =  $model->booking_date;
         $order->discount = 1000;
         $order->created_at = time();

         if ($order->save()) {
            foreach ($cartstore as $item) :
               $orderdetail = new Orderdetails();
               $orderdetail->orders_id = $order->id;
               $orderdetail->product_id = $item->id;
               $orderdetail->unit_price = $item->price;
               $orderdetail->number = $item->qtt;
               if ($orderdetail->save()) {
                  $model->fullname = null;
                  $model->address = null;
                  $model->phone = null;
                  $model->email = null;
                  $model->total_money = 0;
                  $model->booking_date =  date('Y-m-d H:i:s', strtotime('+5 hours'));
                  $cart = new Cart();
                  $cart->removeall();
               } else {
                  echo '<pre>';
                  print_r($orderdetail->getErrors());
               }
            endforeach;
         } else {
            echo '<pre>';
            print_r($order->getErrors());
         }
      } else {
         if ($model->load(Yii::$app->request->post())) {
            $order = new Orders();
            $post = Yii::$app->request->post()['Checkout'];
            $order->customer_id = Yii::$app->user->identity->id;
            $order->full_name = $post['fullname'];
            $order->address = $post['address'];
            $order->phone = $post['phone'];
            $order->email = $post['email'];
            $order->ship = 15000;
            $order->vat = 1500;
            $order->total_money = $post['total_money'];
            $order->into_money = $post['total_money'] + $order->ship + $order->vat;
            $order->total_number = $cost;
            $order->booking_date = $post['booking_date'];
            $order->discount = 1000;
            $order->created_at = time();

            if ($order->save()) {
               foreach ($cartstore as $item) :
                  $orderdetail = new Orderdetails();
                  $orderdetail->orders_id = $order->id;
                  $orderdetail->product_id = $item->id;
                  $orderdetail->unit_price = $item->price;
                  $orderdetail->number = $item->qtt;
                  if ($orderdetail->save()) {
                     $model->fullname = null;
                     $model->address = null;
                     $model->phone = null;
                     $model->email = null;
                     $model->total_money = 0;
                     $model->booking_date =  date('Y-m-d H:i:s', strtotime('+5 hours'));
                     $cart = new Cart();
                     $cart->removeall();
                  } else {
                     echo '<pre>';
                     print_r($orderdetail->getErrors());
                  }
               endforeach;
            } else {
               echo '<pre>';
               print_r($order->getErrors());
            }
         }
      }
      // $yiiMailer = new Mailer();
      // $yiiMailer = new Tra
      return $this->render('index', [
         'cartstore' => $cartstore, 'cost' => $cost, 'model' => $model,
         'cartstore' => $cartstore,
      ]);
   }
}
