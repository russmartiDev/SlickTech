<ul class="row gy-3">
<?php
    foreach($products as $product)
    {
?>

    <li class="col-6 col-sm-4 col-lg-3 col-xl-2">
        <div class="item-card ">
            <div class="img_container">
                <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8cHJvZHVjdHxlbnwwfHwwfHw%3D&w=1000&q=80" alt="mouse">
            </div>
            <a href="show_products.html" class="d-block text-decoration-none">Keyboard</a>
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
            <p>Price: $1000</p>
        </div>
    </li>
<?php
    }
?>
</ul>
