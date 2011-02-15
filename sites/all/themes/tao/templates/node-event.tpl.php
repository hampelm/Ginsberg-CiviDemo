<?php if (empty($hide)): ?>

<?php if (!empty($pre_object)) print $pre_object ?>

<?php
    print $body;
?>

<?php if (!empty($post_object)) print $post_object ?>

<?php endif; ?>