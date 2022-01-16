<?php

require_once 'app/init.php';

print_r($_SESSION['user_id']);

$itemsQuery = $db->prepare("
        SELECT id, name, done
        FROM items
        WHERE user= :user
        ");
$itemsQuery->execute([
   'user' => $_SESSION['user_id'] 
]);

$items = $itemsQuery->rowCount() ? $itemsQuery : [];


foreach($items as $item){
    print_r ($item);
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To do</title>
  
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@1,700&family=Shadows+Into+Light&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css" >
</head>
<body>
    <div class="lista">
        <h1 class="cabeza"> To do. </h1>

       

        <ul class="items">
            <li>
                <span class="item">Pick up shopping</span>
                <a href="#" class="done-button"> Mark as done</a>
            </li>
          
        </ul>

        <form class="item-add" action="add.php" method="post">
            <input type="text" name="name" placeholder="type a new item here" class="input" autocomplete="off" required>
            <input type="submit" value="add" class="submit">

        
        </form>

    </div>
    
</body>
</html>