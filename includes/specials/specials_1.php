<?php include "items.php" ?>

<table>
    <caption><h4>Daily Special &mdash; Monday</h4></caption>
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
            <?php
                $special = SPECIALS[1];

                echo <<<ITEM
                    <td>$special[category]</td>
                    <td>$special[name]</td>
                    <td>$special[cost]</td>
                    <td class=with-image><img src="$special[image]" alt="$special[imageAlt]"></td>
                ITEM;
            ?>
        </tr>
    </tbody>
</table>
