<<<<<<< HEAD
<?php  

namespace app\models;

use yii\db\ActiveRecord;

/**
 * 
 */
class Prodi extends ActiveRecord
{
	
	public static function tableName()
	{
		# code...
		return 'prodi';
	}
}

?>
=======
<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "prodi".
 *
 * @property int $id
 * @property int $id_jurusan
 * @property string $prodi
 * @property int $keterangan
 *
 * @property Mahasiswa[] $mahasiswas
 * @property Jurusan $jurusan
 */
class Prodi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'prodi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'id_jurusan', 'prodi', 'keterangan'], 'required'],
            [['id', 'id_jurusan', 'keterangan'], 'integer'],
            [['prodi'], 'string', 'max' => 50],
            [['id'], 'unique'],
            [['id_jurusan'], 'exist', 'skipOnError' => true, 'targetClass' => Jurusan::className(), 'targetAttribute' => ['id_jurusan' => 'id_jurusan']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_jurusan' => 'Id Jurusan',
            'prodi' => 'Prodi',
            'keterangan' => 'Keterangan',
        ];
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

    /**
     * Gets query for [[Jurusan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getJurusan()
    {
        return $this->hasOne(Jurusan::className(), ['id_jurusan' => 'id_jurusan']);
    }
}
>>>>>>> 72f541c (gii_Mesi)
