<?php
    $day_num = (int) date('w');
    $day = [
        "Sunday", "Monday", "Tuesday", "Wednesday",
        "Thursday", "Friday", "Saturday"
    ][$day_num];
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
            <?php
                $result = mysqli_query($db_con, sprintf(
                    "SELECT (category, item_name, item_price, image_src, image_alt) FROM specials WHERE day_name = '%s'",
                    mysqli_real_escape_string($db_con, $day)
                ));

                if ($row = mysqli_fetch_assoc($result)): echo <<<ITEM
                    <td>$row[category]</td>
                    <td>$row[item_name]</td>
                    <td>$row[item_price]</td>
                    <td class=with-image><img src="$row[image_src]" alt="$row[image_alt]"></td>
                ITEM; else: echo <<<ITEM
                    <td colspan=4 class=full-row>There Is No Daily Special on $day.</td>
                ITEM; endif;
            ?>
        </tr>
    </tbody>
</table>

<?php unset($specials, $special, $day_num, $day) ?>
