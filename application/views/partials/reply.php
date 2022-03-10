<?php
        // Repy
        foreach($replies as $reply)
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