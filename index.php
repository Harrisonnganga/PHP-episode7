<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $books = 
    [ 
      [
        'Title' => 'Childhood’s End',
       'author' => 'C Clarke',
       'Year' =>1953,
       'WebsiteUrl' => 'https://www.penguinrandomhouse.com/books/291239/childhoods-end-by-arthur-c-clarke/',
      ], 
      [
        'Title' => 'The 5AM Club: Own Your Morning. Elevate Your Life.',
        'author'=> 'Robin Sharma',
        'Year' => 2018,
        'WebsiteUrl' => 'https://www.amazon.com/AM-Club-Morning-Elevate-Life/dp/1443456624',
      ],
       [
        'Title' => 'Rich Dad Poor Dad',
        'author' => 'Robert T. Kiyosaki ',
        'Year' => 1997,
        'WebsiteUrl' => 'https://en.wikipedia.org/wiki/Rich_Dad#:~:text=Rich%20Dad%20is%20a%20brand,and%20games%20about%20personal%20finance.',
       ],
       [
        'Title' => 'The Richest Man in Babylon',
        'author' => 'George Samuel Clason',
        'Year' => 1926,
        'WebsiteUrl' => 'https://en.wikipedia.org/wiki/The_Richest_Man_in_Babylon',
       ],

    ];
?>
    <ul>
    <?php foreach ($books as $book) : ?>
      <li>
              <a href="<?= $book['WebsiteUrl'] ?>">
                 <?= $book['Title'];  ?>(<?= $book['Year'] ?>) - By <?= $book['author']; ?>
              </a>
           </li>
    <?php endforeach;?>
</ul>
</body>
</html>