<?php

define('SPECIALS', [
    null,
    [
        'category' => 'Breakfast',
        'name'     => 'Oatmeal with Toast and Fruit',
        'cost'     => '$'.number_format(0.0, 2),
        'image'    => 'images/specials/oatmeal.jpg',
        'imageAlt' => 'An image of Oatmeal with Toast and Fruit'
    ],
    [
        'category' => 'Dinner',
        'name'     => 'Steak Salad',
        'cost'     => '$'.number_format(0.0, 2),
        'image'    => 'images/specials/steak_salad.jpg',
        'imageAlt' => 'An image of a Steak Salad'
    ],
    [
        'category' => 'Lunch',
        'name'     => 'Grilled Cheese and Tomato Soup',
        'cost'     => '$'.number_format(0.0, 2),
        'image'    => 'images/specials/grilled_cheese.jpg',
        'imageAlt' => 'An image of Grilled Cheese with Tomato Soup'
    ],
    [
        'category' => 'Breakfast',
        'name'     => 'Huevos Rancheros',
        'cost'     => '$'.number_format(0.0, 2),
        'image'    => 'images/specials/rancheros.jpg',
        'imageAlt' => 'An image of Huevos Rancheros'
    ],
    [
        'category' => 'Lunch',
        'name'     => 'Orange Chicken',
        'cost'     => '$'.number_format(0.0, 2),
        'image'    => 'images/specials/orange_chicken.jpg',
        'imageAlt' => 'An image of Orange Chicken'
    ],
    null
]);

define('DAY_NAMES', ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"]);

function draw_specials(int $weekday) {
    $special = SPECIALS[$weekday];
    $special = is_null($special) ? <<<ITEM
        <td colspan=4 class=full-row>There Is No Daily Special On Saturday and Sunday.</td>
    ITEM : <<<ITEM
        <td>$special[category]</td>
        <td>$special[name]</td>
        <td>$special[cost]</td>
        <td class=with-image><img src="$special[image]" alt="$special[imageAlt]"></td>
    ITEM;

    $day = DAY_NAMES[$weekday];

    echo <<<ITEM
        <table>
            <caption><h4>Daily Special &mdash; $day</h4></caption>
            <thead>
                <tr>
                    <th>Category</th>
                    <th>Name</th>
                    <th>Cost</th>
                    <th>Image</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    $special
                </tr>
            </tbody>
        </table>
    ITEM;
}
