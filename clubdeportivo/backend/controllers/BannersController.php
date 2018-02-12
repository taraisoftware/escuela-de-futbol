<?php

namespace backend\controllers;

use Yii;
use backend\models\tablebanners;
use backend\models\tablebannersSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
/**
 * BannersController implements the CRUD actions for tablebanners model.
 */
class BannersController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
            'access' => [
                'class' => \yii\filters\AccessControl::className(),
                'rules' => [
                    [
                        'allow' => true,
                        'actions' => ['index', 'view', 'create', 'update', 'delete'],
                        'roles' => ['@']
                    ],
                    [
                        'allow' => false
                    ]
                ]
            ]
        ];
    }

    /**
     * Lists all tablebanners models.
     * @return mixed
     */
    public function nombrealateorio($ext){
        $randomString = Yii::$app->getSecurity()->generateRandomString(20);
        if(!tablebanners::find()->where(['imagen' =>'banner/'.$randomString.'.'.$ext])->one())
		return $randomString;
	else
		return $this::nombrealateorio($ext);
     }  
    public function actionIndex()
    {
        $searchModel = new tablebannersSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single tablebanners model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        $model = $this->findModel($id);
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new tablebanners model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    static public function guardar($nombre)
    {
        Yii::$app->db->createCommand()->insert('table_banners', [
            'imagen'=>$nombre,
           
        ])->execute();

    }
    public function actionCreate()
    {
        $model = new tablebanners();

        if (Yii::$app->request->post()) {
            
         
            $file = UploadedFile::getInstancesByName('image');
            if (!empty($file[0])) {
             foreach ($file as $key => $value) {
                $nombre=$this::nombrealateorio($value->extension);
                $value->saveAs(Yii::getAlias('@anyname').'/frontend/web/banner/'.$nombre.'.'.$value->extension);
                $this->guardar('banner/'.$nombre.'.'.$value->extension); 
               
             }
               
                return $this->redirect('index.php?r=banners%2Findex');
            }

}
         else {
        return $this->render('create', [
            'model' => $model,
        ]);
    }
    }

    /**
     * Updates an existing tablebanners model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        $file = UploadedFile::getInstanceByName('image');
           
            if (!empty($file)) {
                unlink(Yii::getAlias('@anyname').'/frontend/web/'.$model->imagen);
                $nombre=$this::nombrealateorio($file->extension);
                $file->saveAs(Yii::getAlias('@anyname').'/frontend/web/banner/'.$nombre.'.'.$file->extension);
                $model->imagen='banner/'.$nombre.'.'.$file->extension;     
            }  

        

    if ($model->load(Yii::$app->request->post()) && $model->save()) {
        return $this->redirect(['view', 'id' => $model->id]);
    } else {
        return $this->render('update', [
            'model' => $model,
        ]);
    }
    }

    /**
     * Deletes an existing tablebanners model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $noti= $this->findModel($id);
        unlink(Yii::getAlias('@anyname').'/frontend/web/'.$noti->imagen);
        $noti->delete();
         return $this->redirect(['index']);
     }
    
    /**
     * Finds the tablebanners model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return tablebanners the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = tablebanners::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
