<?php
 
$title = 'pages';
$singular = 'page';

$html_title = ucfirst($title).' | Yaba CMS';
$file_prefix = strtolower($title);
?> 

<?php require '_partials/header.php'; ?>

<?php require '_partials/_content-list-all.php'; ?>

<?php require '_partials/footer.php'; ?>