<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <!--Google fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;500;900&display=swap" rel="stylesheet">
    <!--Jquery library-->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <!-- bootstrap library-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- font awesome library-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- main style -->
    <link rel="stylesheet/less" type="text/css" href=" <?= base_url("assets/style/products/products.less"); ?>">

    <!-- fortorama library -->
    <link  href="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script>
    
</head>
<body>
    <div class="row">
        <div class="col-6">
            <div class="container">
                <img src="<?= $product["img"]; ?>" alt="<?= $product["name"]; ?>">
            </div>
        </div>
        <div class="col-5 p-4 text-light">
            <h1><?= $product["name"]; ?></h1>
            <p>Date added: <?= $product["created_at"]; ?></p>
            <p class="d-inline-block w-25">Stocks: <?= $product["stocks"]; ?> pcs</p>
            <p class="d-inline-block">Sold: <?= $product["sold"]; ?> pcs</p>
            <p>Price: $<?= $product["price"]; ?></p>
            <p><?= $product["description"]; ?></p>
        </div>
    </div>

    <div class="container text-light">
<?php
    if(!empty($this->session->userdata("user_id")))
    {
?>
        <form action="/Comments/add_comment" method="POST">
            <h2>Leave a review</h2>
            <input type="hidden" name="product_id" value="<?= $product["id"]; ?>">
            <input type="hidden" name="user_id" value="<?= $this->session->userdata("user_id"); ?>"">
            <textarea placeholder="Write a comment" name="content" class="form-control" rows="3"></textarea>
            <input type="submit" class="btn-lg btn-outline-primary mt-2 d-block me-0  ms-auto" value="Comment">
        </form>
<?php
    }
?>
        <ul>
<?php
        foreach($review as $review)
        {
?>
            <li class="comment">
                <h3 class="d-inline-block"><?= $review["comment"]["name"]; ?></h3>
                <p class="d-inline-block text-secondary ms-4 mb-0 ">(<?= $review["comment"]["date"]; ?>)</p>
                <p><?= $review["comment"]["content"]; ?></p>
                <ul>
<?php
                foreach($review["replies"] as $reply)
                {
?>

                    <li class="mt-4">
                        <h4 class="d-inline-block"><i class="fas fa-level-up-alt fa-rotate-90 me-2 text-info "></i><?= $reply["name"]; ?></h4>
                        <p class="d-inline-block text-secondary ms-4 mb-0">(<?= $reply["date"]; ?>)</p>
                        <p class="ms-4"><?= $reply["content"]; ?></p>
                    </li>
<?php
                }
                if(!empty($this->session->userdata("user_id")))
                {
?>
                    <form action="/comments/add_reply" method="post">
                        <input type="hidden" name="comment_id" value="<?= $review["comment"]["id"]; ?>">
                        <input type="hidden" name="user_id" value="<?= $this->session->userdata("user_id"); ?>"">
                        <input type="hidden" name="product_id" value="<?= $product["id"]; ?>">
                        <textarea placeholder="Write a reply" name="content" class="form-control mb-4" rows="3"></textarea>
                        <input type="submit" class="btn-lg btn-outline-primary mt-2 d-block me-0  ms-auto" value="reply">
                    </form>
<?php
                }
?>
                </ul>
            </li> 
<?php
        }
?>               
        </ul>
    </div>
</body>
</html>