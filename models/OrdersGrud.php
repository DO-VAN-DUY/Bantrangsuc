<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Orders;

/**
 * OrdersGrud represents the model behind the search form of `app\models\Orders`.
 */
class OrdersGrud extends Orders
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'customer_id', 'total_number'], 'integer'],
            [['full_name', 'address', 'phone', 'email', 'booking_date', 'created_at', 'update_at'], 'safe'],
            [['total_money', 'ship', 'vat', 'into_money', 'discount'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Orders::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'booking_date' => $this->booking_date,
            'total_money' => $this->total_money,
            'ship' => $this->ship,
            'vat' => $this->vat,
            'into_money' => $this->into_money,
            'created_at' => $this->created_at,
            'update_at' => $this->update_at,
            'customer_id' => $this->customer_id,
            'discount' => $this->discount,
            'total_number' => $this->total_number,
        ]);

        $query->andFilterWhere(['like', 'full_name', $this->full_name])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'phone', $this->phone])
            ->andFilterWhere(['like', 'email', $this->email]);

        return $dataProvider;
    }
}
