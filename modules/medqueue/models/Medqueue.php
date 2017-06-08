<?php

namespace app\modules\medqueue\models;

use Yii;

/**
 * This is the model class for table "medqueue".
 *
 * @property integer $id
 * @property string $firstname
 * @property string $lastname
 * @property string $phone
 * @property string $email
 * @property string $edatetime
 * @property integer $actual
 */
class Medqueue extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'medqueue';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['firstname', 'lastname'], 'required'],
            [['actual'], 'default', 'value' => true],
            [['edatetime'], 'datetime', 'format' => 'yyyy-MM-dd HH:mm:ss'],
            [['actual'], 'boolean'],
            [['firstname', 'lastname'], 'string', 'max' => 100],
            [['phone'], 'string', 'max' => 12],
            [['email'], 'string', 'max' => 255],
            [['email'], 'email'],
        ];
    }

    public function validate($attributeNames = null, $clearErrors = true)
    {
        if(trim($this->phone) === '' && trim($this->email) === '') {
            $this->addError('phone', 'Необходимо заполнить телефон или e-mail.');
            $this->addError('email', '');
            return false;
        } else return parent::validate($attributeNames, $clearErrors);
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'firstname' => 'Имя*',
            'lastname' => 'Фамилия*',
            'phone' => 'Телефон',
            'email' => 'E-mail',
            'edatetime' => 'Дата и время желаемого приёма',
            'actual' => 'Актуально',
        ];
    }
}
