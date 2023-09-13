<div class="site-index">

<h1>Книги</h1>
    <div class="book-one"> 
        <?php 
            foreach ($book as $bo):  ?>   
                <div class="card-book"> 
                    <p> 
                        <?= $bo->title ?> 
                    </p> 
                        <a href="<?= yii\helpers\Url::to(['users/view', 'id' => $bo->id])?>" target="_blank">Подробнее</a>

                        <img class="avatar" src="<?= Yii::$app->homeUrl . $bo->img ?>" alt="#">
                </div> 
        <?php endforeach; ?> 
    </div> 
</div>

<style>
    .book-one{
        display:flex;
        /* width: 900px; */
    }
    .card-book:nth-child(2), .card-book:nth-child(3){
        margin-left: 50px;
    }
    .site-index, .site-index1 {
        display:flex;
        flex-direction:column;
        align-items: center;
    }
    h1{
        color: #694B8E;
        margin: 0 0 50px 0;
    }
    p{
        color: #694B8E;
        font-size: 15pt;
    }
    .card-book{
        width: 300px;
        height: 400px;
        display:flex;
        align-items: center;
        justify-content: center;
        flex-direction:column;
        background-color: #E2CDF5;
        border: solid #694B8E 1px;
        зфвв
        
    }
    .avatar{
     width: 150px;

    }
</style>