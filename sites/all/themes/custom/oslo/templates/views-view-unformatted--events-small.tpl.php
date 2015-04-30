<?php
/**
 * Created by PhpStorm.
 * User: issymac
 * Date: 4/29/15
 * Time: 6:03 PM
 */ ?>

<?php if (!empty($title)): ?>
    <h3><?php print $title; ?></h3>
<?php endif; ?>
<?php foreach ($rows as $id => $row): ?>
    <div class="col-lg-12 small-event no-padding " <?php if ($classes_array[$id]) { print ' class="' . $classes_array[$id] .'"';  } ?>>
        <?php print $row; ?>
    </div>
<?php endforeach; ?>