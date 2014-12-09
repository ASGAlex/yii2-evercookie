<?php
/** @var string $jsonOptions */

use asgalex\evercookie\assets\EverCookieBaseAssetBundle;
EverCookieBaseAssetBundle::register($this);
?>

<script>
    var ec = new evercookie(<?=$jsonOptions;?>);
</script>
