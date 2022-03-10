<ul>
<?php
			// Review
foreach($review as $review)
{
?>
    <li class="comment">
        <h3 class="d-inline-block"><?= $review["comment"]["name"]; ?></h3>
        <p class="d-inline-block text-secondary ms-4 mb-0">(<?= $review["comment"]["date"]; ?>)</p>
        <p><?= $review["comment"]["content"]; ?></p>
        <!------------------------Reply List--------------------------->
        <ul>
<?php
        // Repy
        foreach($review["replies"] as $reply)
        {
?>
            <li class="mt-4">
                <h4 class="d-inline-block"><i class="fas fa-level-up-alt fa-rotate-90 me-2 text-info"></i><?= $reply["name"]; ?></h4>
                <p class="d-inline-block text-secondary ms-4 mb-0">(<?= $reply["date"]; ?>)</p>
                <p class="ms-4"><?= $reply["content"]; ?></p>
            </li>
<?php
        }
?>
        </ul>
        <!------------------------add a reply--------------------------->
<?php
    if(!empty($this->session->userdata("user_id")))
    {
?>		
        <form action="/reviews/add_reply" method="post" class="add_reply">
            <input type="hidden" name="comment_id" value="<?= $review["comment"]["id"]; ?>" />
            <input type="hidden" name="product_id" value="<?= $product_id; ?>" />
            <input type="hidden" name="user_id" value="<?= $this->session->userdata("user_id"); ?>" />
            <textarea placeholder="Write a reply" name="content" class="form-control mb-4" rows="3"></textarea>
            <input type="submit" class="btn-lg btn-outline-primary mt-2 d-block me-0 ms-auto" value="reply" />
        </form>
<?php
    }
?>
    </li>
<?php
}
?>
</ul>