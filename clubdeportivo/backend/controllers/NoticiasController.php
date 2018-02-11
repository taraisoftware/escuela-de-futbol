<?php

namespace backend\controllers;

use Yii;
use backend\models\tablenoticias;
use backend\models\tablenoticiasSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
/**
 * NoticiasController implements the CRUD actions for tablenoticias model.
 */
class NoticiasController extends Controller
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
     * Lists all tablenoticias models.
     * @return mixed
     */
    public function nombrealateorio($ext){
        $randomString = Yii::$app->getSecurity()->generateRandomString(20);
        if(!tablenoticias::find()->where(['imagen' =>'images-noticias/'.$randomString.'.'.$ext])->one())
		return $randomString;
	else
		return $this::nombrealateorio($ext);
     }  
    public function actionIndex()
    {
        $searchModel = new tablenoticiasSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single tablenoticias model.
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
     * Creates a new tablenoticias model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new tablenoticias();

        if (Yii::$app->request->post()) {
            
         
            $file = UploadedFile::getInstanceByName('image');
            if (!empty($file)) {
                $nombre=$this::nombrealateorio($file->extension);
                $file->saveAs(Yii::getAlias('@anyname').'/frontend/web/images-noticias/'.$nombre.'.'.$file->extension);
                $model->imagen='images-noticias/'.$nombre.'.'.$file->extension;     
            }

}
        

    if ($model->load(Yii::$app->request->post()) && $model->save()) {
        return $this->redirect(['view', 'id' => $model->id]);
    } else {
        return $this->render('create', [
            'model' => $model,
        ]);
    }
    }

    /**
     * Updates an existing tablenoticias model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if (Yii::$app->request->post()) {
            
         
            $file = UploadedFile::getInstanceByName('image');
           
            if (!empty($file)) {
                unlink(Yii::getAlias('@anyname').'/frontend/web/'.$model->imagen);
                $nombre=$this::nombrealateorio($file->extension);
                $file->saveAs(Yii::getAlias('@anyname').'/frontend/web/images-noticias/'.$nombre.'.'.$file->extension);
                $model->imagen='images-noticias/'.$nombre.'.'.$file->extension;     
            }  
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
     * Deletes an existing tablenoticias model.
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
     * Finds the tablenoticias model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return tablenoticias the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = tablenoticias::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
