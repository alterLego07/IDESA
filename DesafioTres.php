<?php 
require_once 'Database.php';

class DesafioTres {

    public static function getLotes ($loteID){
        $lotes = [];
        $cnx = Database::getConnection();
        $stmt = $cnx->query("SELECT * FROM debts WHERE lote = '$loteID'");
        while($rows = $stmt->fetchArray(SQLITE3_ASSOC)){
            $lotes[] = (object) $rows;
        }
        // return $lotes;
        print_r(json_encode($lotes));
    }
}
// $value = (string) "";
var_dump($_POST["id"]);
if($_POST['id']){
    echo "si esta declarado";
}else{
    echo "NO";
}
$value = $_POST["id"];
$valueSrting = (string) $value;
DesafioTres::getLotes($valueSrting);
// DesafioTres::retriveLotes("00148");