<?php
    define('MENU',[
        [
            'name'     => 'Meatloaf and Mashed Potatoes',
            'cost'     => '$'.number_format(0.0, 2),
            'image'    => 'images/dinner/meatloaf.jpg',
            'imageAlt' => 'An image of Meatloaf with Mashed Potatoes'
        ],
    ]);
?>

<table>
    <caption><h4>Dinner Menu</h4></caption>
    <thead>
        <tr>
            <th>Name</th>
            <th>Cost</th>
            <th>Image</th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach (MENU as $item): echo <<<ITEM
                <tr>
                    <td>$item[name]</td>
                    <td>$item[cost]</td>
                    <td><img src="$item[image]" alt="$item[imageAlt]"></td>
                </tr>
            ITEM; endforeach; unset($cat, $item);
        ?>
    </tbody>
</table>
