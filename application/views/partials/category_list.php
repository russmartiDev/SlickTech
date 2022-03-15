<?php
foreach($categories as $category)
{
?>

<li class="position-relative">
    <a class="dropdown-item" >
        <input class="w-75 edit_input" disabled data-id="<?= $category["id"] ?>" value="<?= $category["name"] ?>" type="text" />
    </a>


    <button type="button"><i class="fas fa-pen position-absolute edit_btn" style="right: 40px; top: 5px"></i></button>
    <button type="button" class="del_btn"><i class="fas fa-trash position-absolute del_categ" data-id="<?= $category["id"] ?>" style="right: 10px; top: 5px"></i></button>
</li>
<?php
}
?>