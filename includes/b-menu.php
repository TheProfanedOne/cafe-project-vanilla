<?php

define('MENU',[
    [
        'name'     => 'Pancakes, Eggs and Bacon',
        'cost'     => '$'.number_format(0.0, 2),
        'image'    => 'images/breakfast/pancakes.jpg',
        'imageAlt' => 'An image of Pancakes with Eggs and Bacon'
    ],
]);

function draw_menu() {
    echo <<<ITEM
        <table>
            <caption><h4>Breakfast Menu</h4></caption>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Cost</th>
                    <th>Image</th>
                </tr>
            </thead>
            <tbody>
    ITEM;

    foreach (MENU as $item): echo <<<ITEM
                <tr>
                    <td>$item[name]</td>
                    <td>$item[cost]</td>
                    <td><img src="$item[image]" alt="$item[imageAlt]"></td>
                </tr>
    ITEM; endforeach; unset($cat, $item);

    echo <<<ITEM
            </tbody>
        </table>
    ITEM;
}
