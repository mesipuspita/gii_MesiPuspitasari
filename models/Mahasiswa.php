<<<<<<< HEAD
<?php  
namespace app\models;

use yii\db\ActiveRecord;

/**
 * 
 */
class Mahasiswa extends ActiveRecord
{
	
	public static function tableName()
	{
		# code...
		return 'mahasiswa';
	}

	public function rules()
	{
		# code...
		return[
			[['nim','nama','jekel','id_prodi','email','alamat'], 'required'],
			[['nim','nama','jekel','alamat'], 'string'],
			[['email'], 'email'],
			[['id_prodi'], 'integer']
		];
	}
}

?>
=======
<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mahasiswa".
 *
 * @property int $id
 * @property string $nim
 * @property string $nama
 * @property string $jekel
 * @property int $id_prodi
 * @property string $email
 * @property string $alamat
 *
 * @property Mahasiswa $prodi
 * @property Mahasiswa[] $mahasiswas
 */
class Mahasiswa extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mahasiswa';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nim', 'nama', 'jekel', 'id_prodi', 'email', 'alamat'], 'required'],
            [['id_prodi'], 'integer'],
            [['nim'], 'string', 'max' => 18],
            [['nama', 'email'], 'string', 'max' => 50],
            [['jekel'], 'string', 'max' => 1],
            [['alamat'], 'string', 'max' => 100],
            [['id_prodi'], 'exist', 'skipOnError' => true, 'targetClass' => Mahasiswa::className(), 'targetAttribute' => ['id_prodi' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nim' => 'Nim',
            'nama' => 'Nama',
            'jekel' => 'Jekel',
            'id_prodi' => 'Id Prodi',
            'email' => 'Email',
            'alamat' => 'Alamat',
        ];
    }

    /**
     * Gets query for [[Prodi]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProdi()
    {
        return $this->hasOne(Mahasiswa::className(), ['id' => 'id_prodi']);
    }

    /**
     * Gets query for [[Mahasiswas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMahasiswas()
    {
        return $this->hasMany(Mahasiswa::className(), ['id_prodi' => 'id']);
    }
}
>>>>>>> 72f541c (gii_Mesi)
