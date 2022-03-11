<?php
    $total_price = 0;
    foreach($carts as $cart)
    {
        $total_price += $cart["quantity"] * $cart["price"];
?>
        <tr>
            <input type="hidden" name="<?= $cart["id"]; ?>[id]" value="<?= $cart["id"]; ?>" required>
            <td class="text-center"><input name="<?= $cart["id"]; ?>[check]" type="checkbox"></td>
            <td><?= $cart["name"]; ?></td>
            <td>$<?= $cart["price"]; ?></td>
            <td><input type="text" name="<?= $cart["id"]; ?>[quantity]" value="<?= $cart["quantity"]; ?>" required></td>
            <td>$<?= $cart["quantity"] * $cart["price"] ?></td>
        </tr>
<?php
    }
?>
<input type="hidden" value="$<?= $total_price; ?>" id="total_price" name="total_price">
