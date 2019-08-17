<?php

class Database {

    private $pdo;

    public function __construct() {
        // $configData = parse_ini_file(__DIR__.'/../config.conf');
        try {
			$this->pdo = new PDO(
				"mysql:host=localhost;dbname=oclock_sonic;charset=utf8",
				'root',
				'',
				array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING)
			);
		}
		catch(\Exception $exception) {
			echo 'Erreur de connexion...<br>';
			echo $exception->getMessage().'<br>';
			echo '<pre>';
			echo $exception->getTraceAsString();
			echo '</pre>';
			exit;
		}
    }

    public function getCharacters() {
		$sql = 
		'SELECT `character`.*, `type`.`name` AS `typeName`
		FROM `character`
		LEFT JOIN `type` ON `type`.id = `character`.`type_id`
		ORDER BY `name` ASC';
		$pdoStatement = $this->pdo->query($sql);
		$characterModel = $pdoStatement->fetchAll(PDO::FETCH_CLASS, 'CharacterModel');
		return $characterModel;
	}
}