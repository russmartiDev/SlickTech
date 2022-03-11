<?php
        if(!empty($all_order))
        {
            foreach($all_order as $order)
            {
?>

            <tr>
                <td><a href="/admins/view_order/<?= $order["id"]; ?>"><?= $order["id"]; ?></a></td>
                <td><?= $order["order_info"]["billing_first_name"]; ?></td>
                <td><?= $order["date"]; ?></td>
                <td><?= $order["order_info"]["billing_address"]; ?></td>
                <td><?= $order["order_info"]["total_price"]; ?></td>
                <td>
                    <form action="/admins/update_status" method="post" class="update">
                        <input type="hidden" name="order_id" value="<?= $order["id"]; ?>">
                    
                        <select class="form-select" aria-label="Default select example" name="status_update">
<?php
                    foreach($status as $name => $val)
                    {
?>
                            <option value="<?= $val; ?>" <?= $val == $order["status"] ? "Selected" : FALSE; ?>><?= $name; ?></option>

<?php
                    }
                    
?>
                        </select>
                    </form>
                </td>
            </tr>
<?php
            }
        }
?>