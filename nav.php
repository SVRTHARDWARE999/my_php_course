<?php
// nav.php

$ignore = ['variables.php', 'nav.php', 'submit.php'];

// Get all PHP files and filter
$allFiles = glob("*.php");
natsort($allFiles);
$pages = array_values(array_diff($allFiles, $ignore));

$current = basename($_SERVER['PHP_SELF']);
$index = array_search($current, $pages);

$prev = $index > 0 ? $pages[$index - 1] : null;
$next = $index < count($pages) - 1 ? $pages[$index + 1] : null;

// Function to convert file name to "Lesson X"
function formatLesson($filename) {
    if (preg_match('/lesson_(\d+)\.php/', $filename, $matches)) {
        return "Lesson " . $matches[1];
    }
    return basename($filename, '.php');
}
?>

<div style="margin-top: 20px;" class="navigation">
    <?php if ($prev): ?>
        <a href="<?= $prev ?>"><button>&larr; Go back to <?= formatLesson($prev) ?></button></a>
    <?php endif; ?>

    <?php if ($next): ?>
        <a href="<?= $next ?>"><button>Go to <?= formatLesson($next) ?> &rarr;</button></a>
    <?php endif; ?>
</div>
