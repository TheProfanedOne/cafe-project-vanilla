<?php include "items.php" ?>

<table>
    <caption><h4>Daily Special &mdash; Thursday</h4></caption>
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
                $special = SPECIALS[4];

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
