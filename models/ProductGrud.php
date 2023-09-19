<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Product;

/**
 * ProductGrud represents the model behind the search form of `app\models\Product`.
 */
class ProductGrud extends Product
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'selling', 'outstanding', 'just_homed','quantity'], 'integer'],
            [['name', 'code', 'describes', 'detailed_description', 'image', 'created_at', 'updated_at'], 'safe'],
            [['price', 'competitive_price'], 'number'],
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
        $query = Product::find();

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
            'selling' => $this->selling,
            'outstanding' => $this->outstanding,
            'just_homed' => $this->just_homed,
            'price' => $this->price,
            'quantity' => $this->quantity,
            'competitive_price' => $this->competitive_price,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'code', $this->code])
            ->andFilterWhere(['like', 'describes', $this->describes])
            ->andFilterWhere(['like', 'detailed_description', $this->detailed_description])
            ->andFilterWhere(['like', 'image', $this->image]);

        return $dataProvider;
    }
}
