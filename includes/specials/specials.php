<?php
    $specials = [
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
    ];

    $day_num = (int) date('w');
    $day = [
        "Sunday", "Monday", "Tuesday", "Wednesday",
        "Thursday", "Friday", "Saturday"
    ][$day_num];

    $special = $specials[$day_num];
?>

<table>
    <caption><h4>Daily Special &mdash; <?= $day ?></h4></caption>
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
            <?=
                is_null($special) ? <<<ITEM
                    <td colspan=4 class=full-row>There Is No Daily Special on $day.</td>
                ITEM : <<<ITEM
                    <td>$special[category]</td>
                    <td>$special[name]</td>
                    <td>$special[cost]</td>
                    <td class=with-image><img src="$special[image]" alt="$special[imageAlt]"></td>
                ITEM
            ?>
        </tr>
    </tbody>
</table>

<?php unset($specials, $special, $day_num, $day) ?>
