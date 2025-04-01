<?php if (!isset($journal)) $journal = new \App\Models\Journal(); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Journal Entry</title>
</head>
<body>
    <h1>Journal Entry</h1>
    <ul>
        <li><strong>Title:</strong> <?php echo $journal->getTitle(); ?></li>
        <li><strong>Content:</strong> <?php echo $journal->getContent(); ?></li>
        <li><strong>Created At:</strong> <?php echo $journal->getCreatedAt(); ?></li>
    </ul>
    <a href="<?php echo $routes->get('homepage')->getPath(); ?>">Back to homepage</a>
</body>
</html>
