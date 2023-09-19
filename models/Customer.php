<?php

namespace app\models;
use yii\db\Expression;
use Yii;

/**
 * This is the model class for table "customer".
 *
 * @property int $id
 * @property string $username
 * @property string $email
 * @property string $phone
 * @property string|null $address
 * @property string $password
 * @property string $auth_key
 * @property string $password_reset_token
 * @property string|null $created_at
 * @property string|null $updated_at
 *
 * @property Orders[] $orders
 */
class Customer extends \yii\db\ActiveRecord implements \yii\web\IdentityInterface
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'customer';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'email', 'phone', 'password'], 'required'],
            [['created_at', 'updated_at'], 'safe'],
            [['username', 'address'], 'string', 'max' => 255],
            [['email'], 'string', 'max' => 150],
            [['phone'], 'string', 'max' => 12],
            [['status'], 'int', 'max' => 11],
            [['password', 'auth_key', 'password_reset_token'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'email' => 'Email',
            'phone' => 'Phone',
            'address' => 'Address',
            'password' => 'Password',
            'auth_key' => 'Auth Key',
            'password_reset_token' => 'Password Reset Token',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * Gets query for [[Orders]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOrders()
    {
        return $this->hasMany(Orders::class, ['customer_id' => 'id']);
    }
    
    public static function findIdentity($id)
    {
        return self::findOne($id);
    }

    /**
     * {@inheritdoc}
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        
         throw new yii\base\NotSupportedException();
       //return true;
        
    }

    /**
     * Finds user by username
     *
     * @param string $username
     * @return static|null
     */
    public static function findByUsername($username)
    {
       return self::findOne(['username' => $username]);
            
      
    }

    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * {@inheritdoc}
     */
    public function getAuthKey()
    {
        //throw new yii\base\NotSupportedException();
        return $this->auth_key;
    }

    /**
     * {@inheritdoc}
     */
    public function validateAuthKey($authKey)
    {
        return $this->auth_key === $authKey;
    }

    /**
     * Validates password
     *
     * @param string $password 
     * @return bool if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        return $this->password === $password;
    }


    
    public function setPassword($password)
    {
        $this->password = Yii::$app->security->generatePasswordHash($password);
    }
    public function generateAuthKey()
    {
        $this->auth_key = Yii::$app->security->generateRandomString();
    }
    public function genneratePasswordResetToken()
    {
        $this->password_reset_token = Yii::$app->security->generateRandomString() . '_' . time();
    }
    public function removePasswordResetToken()
    {
        $this->password_reset_token = null;
    }
    public function beforeSave($insert)
    {
        if ($insert) {
            $this->genneratePasswordResetToken();
            $this->generateAuthKey();
            // $this->created_at = new Expression(expression: 'NOW()');
            $this->setPassword($this->password);
         
        } else {
            $cus = Customer::findOne($this->id);
            var_dump($cus->password);
            var_dump($this->password);
          if($this->password != $cus->password)
          {
          
            $this->setPassword($this->password);
            $this->generateAuthKey();
            $this->genneratePasswordResetToken();
          }
        //   $this->updated_at = new Expression(expression: 'NOW()');
        }
      
        return parent::beforeSave($insert);
    }
}
