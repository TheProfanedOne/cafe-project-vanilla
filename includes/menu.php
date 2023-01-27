<?php

define('MENU', [
    'Breakfast' => [
        'name'  => 'Pancakes with Eggs and Bacon',
        'cost'  => '$'.number_format(0.0, 2),
        'image' => 'images/main_menu/pancakes.jpg'
    ],
    'Lunch' => [
        'name'  => 'Bacon Cheeseburger with Fries',
        'cost'  => '$'.number_format(0.0, 2),
        'image' => 'images/main_menu/burger.jpg'
    ],
    'Dinner' => [
        'name'  => 'Meatlof with Mashed Potatoes',
        'cost'  => '$'.number_format(0.0, 2),
        'image' => 'images/main_menu/meatloaf.jpg'
    ]
]);

define('SPECIALS', [
    null,
    [
        'category' => 'Breakfast',
        'name'     => 'Oatmeal with Toast and Fruit',
        'cost'     => '$'.number_format(0.0, 2),
        'image'    => 'images/specials/oatmeal.jpg',
    ],
    [
        'category' => 'Dinner',
        'name'     => 'Steak Salad',
        'cost'     => '$'.number_format(0.0, 2),
        'image'    => 'images/specials/steak_salad.jpg',
    ],
    [
        'category' => 'Lunch',
        'name'     => 'Grilled Cheese and Tomato Soup',
        'cost'     => '$'.number_format(0.0, 2),
        'image'    => 'images/specials/grilled_cheese.jpg',
    ],
    [
        'category' => 'Breakfast',
        'name'     => 'Huevos Rancheros',
        'cost'     => '$'.number_format(0.0, 2),
        'image'    => 'images/specials/rancheros.jpg',
    ],
    [
        'category' => 'Lunch',
        'name'     => 'Orange Chicken',
        'cost'     => '$'.number_format(0.0, 2),
        'image'    => 'images/specials/orange_chicken.jpg',
    ],
    null
]);

function menu_tables(int $weekday) {
    // Standard Menu

    echo '<table><caption>Menu</caption><thead><tr>';
    echo '<th>Category</th><th>Name</th><th>Cost</th><th>Image</th>';
    echo '</tr></thead>';

    echo '<tbody>';
    foreach (MENU as $cat => $item) {
        $name  = $item['name'];
        $cost  = $item['cost'];
        $image = $item['image'];
        
        echo '<tr>';

        echo "<td>$cat</td>";
        echo "<td>$name</td>";
        echo "<td>$cost</td>";
        echo "<td><img src=\"$image\"></td>";

        echo '</tr>';
    } unset($cat, $item);
    echo '</tbody></table>';
    

    // Daily Special

    echo '<table><caption>Daily Special</caption><tbody><tr>';
    $special = SPECIALS[$weekday];
    if (is_null($special)) {
        echo '<td class="full-row">There Is No Daily Special On Either Saturday or Sunday.</td>';
    } else {
        echo '<td>'.$special['category'].'</td>';
        echo '<td>'.$special['name'].'</td>';
        echo '<td>'.$special['cost'].'</td>';
        echo '<td><img src="'.$special['image'].'"></td>';
    }
    echo '</tr></tbody></table>';
}
