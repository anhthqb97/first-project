<?php

namespace app\models;

use Yii;
use yii\base\Model;

class Contact extends Model
{
	public static function tableName()
    {
        return 'contact';
    }

    public function rules()
    {
        return [
            [['id_contact', 'name_member', 'contact'], 'required'],
            [['id_contact', ], 'integer'],
            [['name_member', 'contact'], 'string']
        ];
    }
    public function getAllContact()
	{
	    $query = new \yii\db\Query();
	    $query->select('*')
	            ->from(self::tableName())
	            ->limit(10);
	    return $query->createCommand()->queryAll();
	}
}