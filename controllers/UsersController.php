<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;

use yii\web\Controller;
use yii\web\Response;
// use yii\web\UploadedFile;

use yii\widgets\ActiveForm;

use yii\filters\VerbFilter;

use app\models\LoginForm;
use app\models\User;
use app\models\Book;
use app\models\Genre;
use app\models\Author;
use app\models\Review;

class UsersController extends Controller
{
    public function actionAccount(){
        return $this->render('account');
    }
    public function actionUserbook(){
        $book = Book::find()->all();
        return $this->render('userbook', [
            'book' => $book,
        ]);

    }

    public function actionUserreview(){
        $review = Review::find()->all();
        return $this->render('userreview', [
            'review' => $review,
        ]);

    }

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

    protected function findModel($id)
    {
        if (($model = Book::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}