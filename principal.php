<?php

require_once 'app/init.php';

$itemsQuery = $db->prepare("
        SELECT id, name, done
        FROM items
        WHERE user = :user
");

$itemsQuery->execute([
    'user' => $_SESSION['user_id']
]);

$items = $itemsQuery;
$lista = [];
foreach($items as $item){
    array_push($lista,$item);
}

//'$items = $itemsQuery->rowCount() ? $itemsQuery : [];'
echo json_encode($lista);
?>
