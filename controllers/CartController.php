<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\helper\Cart;
use app\models\Product;
use app\models\Checkout;
use app\models\Customer;
use PHPUnit\Util\Json;
use yii\web\HttpException;

class CartController extends Controller
{

    public function actionIndex()
    {
        $cart = new Cart();
        $cartstore = $cart->cartstore;
        // ,['cartstore'=>$cartstore
        $cost = $cart->getCost;
        $total = $cart->getTotal();
        return $this->render('index', ['cartstore' => $cartstore, 'cost' => $cost, 'total' => $total]);
    }

    public function actionAddCart($id)
    {
        $cart = new Cart();
        $model = Product::findOne(['id' => $id]);
        if($model->quantity > 0)
        {
            $cart->add($model);
             echo 'ok';
        }
        else
        {
            echo 'error';
        }

        // var_dump(Yii::$app->session['cart']);
       // return $this->redirect('/');


    }
    // public function actionAddCart()
    // {
    //     $code = $_POST['code'];
    //     $array_id = explode('-', $code);
    //     $array_id = array_reverse($array_id);
    //     $id_sp = $array_id[0];
    //     $id_sp = 500;
    //     $sanpham = Product::findOne($id_sp);
    //     if (is_null($sanpham))
    //         throw new HttpException(500, 'Không tìm thấy sản phẩm');
    //     else
    //         echo Json::encode([
    //             'message' => "Đã đặt hàng thành công!"
    //         ]);


        // //Liệt kê danh sách đã đặt
        // $san_pham_da_dat = Product::findOne($id_sp);
        // $sanpham = array();
        // if (isset(Yii::$app->session['carts']))
        //     $sanpham = Yii::$app->session['carts'];
        // $sanpham[$id_sp] = Product::findOne($id_sp);
        // Yii::$app->session['carts'] = $sanpham;

        // $so_luong_sp = array();
        // if (isset(Yii::$app->session['soluong']))
        //     $so_luong_sp = Yii::$app->session['soluong'];
        // if (isset($so_luong_sp[$id_sp]))
        //     $so_luong_sp[$id_sp]++;
        // else
        //     $so_luong_sp[$id_sp] = 1;
        // Yii::$app->session['carts'] = $so_luong_sp;

        // $tongtiendadat = 0;
        // if (isset(Yii::$app->session['da_dat_hang']))
        //     $tongtiendadat = Yii::$app->session['da_dat_hang'];
        // $tongtiendadat += $san_pham_da_dat->price;
        // Yii::$app->session['da_dat_hang'] = $tongtiendadat;

        // $soluongdadat = 0;
        // if (isset(Yii::$app->session['so_luong_da_hang']))
        //     $soluongdadat = Yii::$app->session['so_luong_da_hang'];
        // $soluongdadat++;
        // Yii::$app->session['so_luong_da_hang'] = $soluongdadat;

        // if (is_null($sanpham))
        //     throw new HttpException(500, 'Không tìm thấy sản phẩm');
        // else
        //     echo Json::encode([
        //         'message' => "Đã đặt hàng thành công!"
        //     ]);
  //  }
    public function actionRemove($id)
    {
        $cart = new Cart();
        $model = Product::findOne(['id' => $id]);
        $cart->remove($model);
        return $this->redirect('/cart');
    }
    public function actionRemoves($id)
    {
        $cart = new Cart();
        $model = Product::findOne(['id' => $id]);
        $cart->remove($model);
        echo 'ok';

        // return $this->redirect('/');
    }
    public function actionUpdate()
    {
        $cart = new Cart();
        //   if(Yii::$app->resques->post())
        //   {
        $id = $_POST['id'];
        $qtt = $_POST['qtt'];
        $cart->update($id, $qtt);
        //}
        return $this->redirect('/cart');
    }
    public function actionClear()
    {
        $cart = new Cart();
        $cart->removeall();
        return $this->redirect(['/cart']);
    }
}
