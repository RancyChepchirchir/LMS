<?php

/* @var $this yii\web\View */

$helloworld = 'hello world';

$cars = array('Erick'=>'Tesla','Beverly'=>'Bentley','Onyango'=>'Audi','Ken Nyaga'=>'JEEP','Warui'=>'Probox','James'=>'NZE');

$carsList = [
    [
        'Model'=>'Tesla',
        'Owner'=>'Erick',
        'Image'=>'theme/assets/carimages/tesla.jpg'
    ],
    [
        'Model'=>'Bentley',
        'Owner'=>'Beverly',
        'Image'=>'theme/assets/carimages/bentley.jpg'
    ],
    [
        'Model'=>'Audi',
        'Owner'=>'Onyango',
        'Image'=>'theme/assets/carimages/audi.jpg'
    ],
    [
        'Model'=>'JEEP',
        'Owner'=>'Ken Nyaga',
        'Image'=>'theme/assets/carimages/jeep.jpg'
    ],
    [
        'Model'=>'Probox',
        'Owner'=>'Warui',
        'Image'=>'theme/assets/carimages/probox.jpg'
    ],
];

?>

<h1>CARS LIST</h1><br>

<?php 
foreach ($carsList as $cars){
    echo $cars['Model'].' is owned by '.$cars['Owner'].' this is the image link '.$cars['Image'].'<br>';
}

?>

<div class="row">
<h1>CARS LIST WITH IMAGES</h1><br>
<?php foreach ($carsList as $cars){?>
    <div class="col-lg-12">
        <div class="card">
          <img style="width:400px" class="card-img-top" src="<?= \Yii::$app->request->baseUrl.'/'.$cars['Image'] ?>" alt="Card image">
          <div class="card-body">
            <h4 class="card-title"><?= $cars['Model']?></h4>
            <p class="card-text">This car is owned by: <?= $cars['Owner']?>.</p>
            <a href="#" class="btn btn-primary">See car Detail</a>
          </div>
        </div>
    </div>
    <?php };?>
    <br>
    <br>
</div>