<?php

namespace app\controllers;

use Yii;

use app\models\Book;
use app\models\Author;
use app\models\Genre;
use app\models\BookSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * BookController implements the CRUD actions for Book model.
 */
class BookController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Book models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new BookSearch();
        $genre = new Genre;
        $author = new Author;

        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'genre' => $genre,
            'author' => $author,

        ]);
    }

    /**
     * Displays a single Book model.
     * @param int $id ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        $genre = new Genre;
        $author = new Author;
        return $this->render('view', [
            'model' => $this->findModel($id),
            'genre' => $genre,
            'author' => $author,
        ]);
    }

    /**
     * Creates a new Book model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    // public function actionCreate()
    // {
    //     $model = new Book();

    //     if ($this->request->isPost) {
    //         if ($model->load($this->request->post()) && $model->save()) {
    //             return $this->redirect(['view', 'id' => $model->id]);
    //         }
    //     } else {
    //         $model->loadDefaultValues();
    //     }

    //     return $this->render('create', [
    //         'model' => $model,
    //     ]);
    // }

    public function actionCreate() 
    { 
        $model = new Book; 
        $models = Author::find()->all(); 
        $mode = Genre::find()->all(); 
 
        if ($this->request->isPost) { 
            if ($model->load(Yii::$app->request->post())) { 
                // Загружаем файл в переменную до валидации 
                $model->file = UploadedFile::getInstance($model, 'file'); 
                // если валидация прошла успешно и файл был загружен 
                if ($model->validate() && $uploadedFileName = $model->upload()) { 
                    $model->img = $uploadedFileName; 
                    $model->save(false); 
     
                    return $this->goHome(); 
                } 
            } 
        } 
 
 
            return $this->render('create', [ 
                'model' => $model, 
                'models' => $models, 
                'mode' => $mode 
            ]); 
    }

    /**
     * Updates an existing Book model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $models = Author::find()->all(); 
        $mode = Genre::find()->all(); 

        $model->file = UploadedFile::getInstance($model, 'file');
        $model->img = $model->upload();
        if ($this->request->isPost && $model->load($this->request->post()) && $model->save(false)) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
            'models' => $models, 
            'mode' => $mode 
        ]);
    }

    /**
     * Deletes an existing Book model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Book model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Book the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Book::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
