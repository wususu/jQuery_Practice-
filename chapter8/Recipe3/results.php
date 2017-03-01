<?php
/**
 * Created by PhpStorm.
 * User: janke
 * Date: 17-2-27
 * Time: 下午8:35
 */
$mysql = new PDO('mysql:host=localhost;dbname=exampleDB', 'root', 'root');
if (isset($_GET['find'])) {
    $find = $_GET['find'];
}
switch ($find){
    case 'country':
        $query = "SELECT id, countryName FROM country";
        break;

    case 'states':
        $query = "SELECT id, stateName FROM state WHERE countryId=".$_GET['id'];
        break;

    case 'towns':
        $query = "SELECT id, townName FROM towns WHERE stateId=".$_GET['id'];
        break;

    case 'information':
        $query = "SELECT id, description FROM towninfo WHERE townId=".$_GET['id']." LIMIT 1";
        break;
    default:
        echo 'error';
}
$results = $mysql->query($query);
if ($results->rowCount() > 0) {

    if ($find == 'information') {
        $rows = $results->fetch();
        echo $rows[1];
    } else {
        ?>
        <option value="">select</option>
        <?php
        while ($row = $results->fetch()) {?>
            <option value="<?php echo $row[0]; ?>"><?php echo $row[1]; ?></option>
            <?php
        }
    }
}else{
    echo 'No Information found';
}
?>