<?php 
    echo '<div class="row">';
    foreach($data['caracters'] as $caracter): ?>
        <div class="col-3">
            <div class="card p-2 mb-4">
                <img src="<?= $_SERVER['BASE_URI'].'/assets/img/'.$caracter->getPicture() ?>" class="card-img-top" alt="..." style="max-height: 250px;">
                <div class="card-body" style="max-height: 200px; overflow: hidden;">
                    <h5 class="card-title"><?= $caracter->getName() ?></h5>
                    <h6 class="card-title"><?= $caracter->getTypeName() ?></h6>
                    <p class="card-text" ><?= $caracter->getDescription() ?>.</p>
                </div>
            </div>
        </div>
    <?php endforeach;
    echo '</div>';
?>
    
