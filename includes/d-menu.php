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
            $result = mysqli_query($db_con,
                "SELECT (item_name, item_price, image_src, image_alt) FROM menu WHERE category = 'd'"
            );

            while ($row = mysqli_fetch_assoc($result)): echo <<<ITEM
                <tr>
                    <td>$row[item_name]</td>
                    <td>$row[item_price]</td>
                    <td><img src="$row[image_src]" alt="$row[image_alt]"></td>
                </tr>
            ITEM; endwhile;
        ?>
    </tbody>
</table>
