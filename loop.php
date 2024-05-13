<?php
    $blogs = [
        ['title' => 'mario party', 'author' => 'mario', 'content' => 'lorem', 'likes' => 15],
        ['title' => 'mario kart cheat', 'author' => 'toad', 'content' => 'lorem', 'likes' => 21],
        ['title' =>  'zelda hidden chests', 'author' => 'link', 'content' => 'lorem', 'likes' => 11]
    ];

    // for($i = 0; $i < count($blogs); ++$i) { // Use count to determine how many loops
    //     echo "author: ", $blogs[$i]['author'] . "\n";  // print any author through each loop
    // }

    // foreach ($blogs as $blog) {
    //     echo $blog['title'] . ' - ' . $blog['likes'] . ' likes' . PHP_EOL; // PHP_EOL = newline
    // }

    // $i = 0;
    // while($i < count($blogs)) {
    //     echo $blogs[$i]['title'] . PHP_EOL;
    //     $i++;
    // }
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>tittle</title>
</head>
<body>
        <h3>Blog Tittle list:</h3>
        <?php foreach ($blogs as $blog): ?>
            <p><?php echo $blog['title'] . ' - ' . $blog['likes'] . ' likes'; ?></p>
        <?php endforeach; ?>
</body>
</html>
