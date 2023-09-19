<?php

namespace App\helper;

use Yii;

class Cart
{
  public $cartstore;
  public $getCost = 0;
  
  public function __construct()
  {
    $this->cartstore = Yii::$app->session['carts']; 
    $this->getCost = $this->getCost();
  }

  public function add($data, $quantity = 1) //sp nào,chỉ số
  {
    if (isset($this->cartstore[$data->id])) {
      $this->cartstore[$data->id]->qtt = $this->cartstore[$data->id]->qtt + 1;
      Yii::$app->session['carts'] = $this->cartstore;
    }
    else
    {
      $this->cartstore[$data->id] = $data;
      $this->cartstore[$data->id]->qtt = $quantity;
      Yii::$app->session['carts'] = $this->cartstore;
    }
  }
  public function remove($data)
  {
    unset($this->cartstore[$data->id]);
    Yii::$app->session['carts'] = $this->cartstore;
  }
  public function update($id,$quantity)
  {
    $this->cartstore[$id]->qtt = $quantity;
    Yii::$app->session['carts'] = $this->cartstore;

  }
  public function getCost()
  {
    if($this->cartstore)
    {
      foreach($this->cartstore as $item)
      {
        $this->getCost += $item->qtt * $item->price;
      }
     
    }
    return $this->getCost;
   
  }
  public function getTotal()
  {
    $total=0;
    if($this->cartstore)
    {
      foreach($this->cartstore as $item)
      {
        $total += $item->qtt;
      }
     
    }
    return $total;
  }
  public function removeall()
  {
    $this->cartstore = [];
    Yii::$app->session['carts'] = $this->cartstore;

  }

}