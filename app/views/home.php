<table class="table">
    <h4>Listing des <?= count($data['caracters']) ?> personnages présent en BDD</h4>
    <thead>
        <tr>
            <th scope="col" width="5%">Image</th>
            <th scope="col" width="15%">Nom</th>
            <th scope="col" width="70%">Description</th>
            <th scope="col" width="10%">Type</th>
        </tr>
    </thead>

    <tbody>
        <?php foreach($data['caracters'] as $caracter): ?>
            <tr>
                <td><img src="<?= $_SERVER['BASE_URI'].'/assets/img/'.$caracter->getPicture() ?>" class="card-img-top" alt="..." style="max-height: 100px; max-width: 100px;"></td>
                <td class="text-center"><?= $caracter->getName() ?></td>
                <td><?= $caracter->getDescription() ?></td>
                <td><?= $caracter->getTypeName() ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

    
