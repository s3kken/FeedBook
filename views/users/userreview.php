<div class="site-index">

<h1>Отзывы</h1>
<a href="<?= yii\helpers\Url::to(['review/create'])?>" class="btn-one"target="_blank">Добавить отзыв</a>
    <div class="book-one"> 
        <?php 
            foreach ($review as $rev):  ?>   
                <div class="card-book"> 
                    <p> 
                        <?= $rev->id_user ?> 
                    </p> 
                    <p> 
                        <?= $rev->id_book ?> 
                    </p> 
                    <p> 
                        <?= $rev->review ?> 
                    </p> 
                </div> 
        <?php endforeach; ?> 
    </div> 
</div>

<style>
    .book-one{
        display:flex;
        flex-direction:column;
        /* width: 900px; */
    }
    .card-book:nth-child(2), .card-book:nth-child(3){
        margin-top: 10px;
    }
    .site-index, .site-index1 {
        display:flex;
        flex-direction:column;
        align-items: center;
    }
    h1{
        color: #694B8E;
        margin: 0 0 20px 0;
    }
    p{
        color: #694B8E;
        font-size: 15pt;
    }
    .card-book{
        width: 700px;
        /* height: 300px; */
        padding: 15px;
        display:flex;
        align-items: center;
        justify-content: center;
        flex-direction:column;
        background-color: #E2CDF5;
        border: solid #694B8E 1px;
    }
    .btn-one{
        background-color: #694B8E;
        border-radius: 15px;
        padding: 8px 20px 8px 20px;
        border: solid #694B8E 1px;
        font-size: 15pt;
        color: #F5EAFF;
        margin: 0 0 20px 0;
        
    }
</style>