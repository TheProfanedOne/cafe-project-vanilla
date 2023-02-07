<?php include "menu/items.php" ?>

<table>
    <caption><h4>Lunch Menu</h4></caption>
    <thead>
        <tr>
            <th>Name</th>
            <th>Cost</th>
            <th>Image</th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach (MENU['l'] as $item): echo <<<ITEM
                <tr>
                    <td>$item[name]</td>
                    <td>$item[cost]</td>
                    <td><img src="$item[image]" alt="$item[imageAlt]"></td>
                </tr>
            ITEM; endforeach; unset($cat, $item);
        ?>
    </tbody>
</table>
