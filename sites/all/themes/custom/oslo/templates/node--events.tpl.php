<?php
/**
 * Created by PhpStorm.
 * User: issymac
 * Date: 4/27/15
 * Time: 4:22 PM
 */ ?>

<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>

    <?php print $user_picture; ?>


    <?php if ($display_submitted): ?>
        <div class="submitted">
            <?php print $submitted; ?>
        </div>
    <?php endif; ?>

    <div class="content">
        <?php
            print render($content);
//        echo "Contents Goes Here ...";
        ?>
    </div>

</div>