<?php
namespace app\models;

use Yii;
class User_new extends \yii\db\ActiveRecord
{
	public static function tableName(){
		return 'user';
	}

	public function rules()//check validate
	{
		return [
				[['user_name', 'password' ],'required'],
				[['user_name'], 'string', 'max'=> 30],
				[['password', 'name'], 'string', 'max'=>20],
				[['email'], 'string', 'max'=>50],
				[['email'], 'unique']//kiểm gra trong CSDL đã tồn tại ahy chưa

		];
	}

	public function attributeLabels(){
		return [
			'id_user'=>'Id User',
			'user_name'=>"User Name",
			'password'=>'Password',
			'name'=>'Name',
			'email'=>'Email',
		];
	}
}