<div class="table-container">
            <table class="table table-light table-striped align-middle">
                <thead>
                    <tr>
                        <th class="col-2" scope="col-1">Picture</th>
                        <th class="col-1" scope="col-1">ID</th>
                        <th class="col-4" scope="col-1">Name</th>
                        <th class="col-1" scope="col-1">Inventory Count</th>
                        <th class="col-1" scope="col-1">Qty Sold</th>
                        <th class="col-3" scope="col-1">Action</th>
                    </tr>
                </thead>
                <tbody>
<?php
                foreach($products as $product)
                {
                    $img = json_decode($product["img_url"], true);
                    $keys = array_keys($img);
?>
                    <tr>
                        <td>
                            <div class="img_container">
                                <img src="<?= $img[$keys[0]] ?>" alt="mouse" />
                            </div>
                        </td>
                        <td><?= $product["id"] ?></td>
                        <td><?= $product["name"] ?></td>
                        <td><?= $product["inventory"] ?></td>
                        <td><?= $product["sold"] ?></td>
                        <td>

                             <button id="edit_btn_product" data-id="<?= $product["id"] ?>" data-bs-toggle="modal" data-bs-target="#edit_product" class="edit_prod text-info">Edit</button>
                            <button data-bs-toggle="modal" data-id="<?= $product["id"] ?>" data-bs-target="#delete_product" class="del text-info">Delete</button>
                        </td>
                    </tr>
<?php
                }
?>				
                </tbody>
            </table>
        </div>
        <!------Page-------->
        <div class="page">
            <a href="#"><</a><a href="#"><<</a>
<?php
        for($i = 0; $i <= $count; $i++)
        {
?>
            <button class = "button-page"><?= $i + 1?></button>
<?php
        }
?>
    
            <a href="#">></a><a href="#">>></a>
        </div>

<form action="/admins/edit_product" method="post" id="get_product">
    <input type="hidden" name="id" value="" id="edit_id">
</form>