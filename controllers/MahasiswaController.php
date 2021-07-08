<<<<<<< HEAD
<?php  
namespace app\controllers;
use Yii;
use yii\web\Controller;
use yii\data\Pagination;
use app\models\Mahasiswa;

/**
 * 
 */
class MahasiswaController extends Controller
{
	
	public function actionIndex()
	{
		# code...
		$query = Mahasiswa::find();
		$pagination = new Pagination(['defaultPageSize' => 10,
			'totalCount' => $query->count()]);
		$data_mahasiswa = $query->orderBy('id')
		->offset($pagination->offset)
		->limit($pagination->limit)
		->all();
		return $this->render('index',
			['data_mahasiswa' => $data_mahasiswa,
			'pagination' => $pagination,]);
	}

	public function actionCreate()
	{
		# code...
		$model = new Mahasiswa();

		if ($model->load(Yii::$app->request->post()) && $model->save()) {
			# code...
			Yii::$app->session->setFlash('success','Sucsess !! Data Sudah Tersimpan ');
			return $this->refresh();
		}

		return $this->render('create', ['model' => $model,]);
	}

	public function actionUpdate($id)
	{
		# code...
		$model = Mahasiswa::findOne($id);

		if ($model->load(Yii::$app->request->post()) && $model->save()) {
			# code...
			Yii::$app->session->setFlash('success','Success Full!!!');
			return $this->refresh();
		}
		return $this->render('update',['model' => $model,]);
	}

	public function actionDelete($id)
	{
		# code...
		$model = Mahasiswa::findOne($id);
		$model->delete();
		return $this->redirect(['index']);
	}
}
?>
=======
<?php

namespace app\controllers;

use Yii;
use app\models\Mahasiswa;
use app\models\Mahasiswaserch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * MahasiswaController implements the CRUD actions for Mahasiswa model.
 */
class MahasiswaController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Mahasiswa models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new Mahasiswaserch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Mahasiswa model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Mahasiswa model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Mahasiswa();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Mahasiswa model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Mahasiswa model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Mahasiswa model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Mahasiswa the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Mahasiswa::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
>>>>>>> 72f541c (gii_Mesi)
