<<<<<<< HEAD
<?php
namespace app/models;
use Yii;
use yii\base\Model;

class EntryForm extends Model {
	public $name;
	public $email;

	puclic function rules()
	{
		return [
			[['name','email'], 'required'],
			['email','email'],
		];
	}
}
=======
<?php 
namespace app\models;
use yii;
use yii\base\Model;

/**
* 
*/
class EntryForm extends Model
{
	public $name;
	public $email;

	public function rules()
	{
		return[
		[['nama','email'], ' reguired'],
		['email','email'],
		];
	}
}
>>>>>>> 72f541c (gii_Mesi)
