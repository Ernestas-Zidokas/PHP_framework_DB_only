<nav class="navigation">
    <?php foreach ($view as $key => $value): ?>
        <a href="<?php print $key; ?> "><?php print $value; ?></a>
    <?php endforeach; ?>
</nav>