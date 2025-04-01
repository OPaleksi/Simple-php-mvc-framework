<!DOCTYPE html>
<html>

<head>
    <title>Product Entry</title>
</head>

<body>

    <section>
        <h1>My Product:</h1>
        <ul>
            <li><strong>Title:</strong> <?php echo $product->getTitle(); ?></li>
            <li><strong>Description:</strong> <?php echo $product->getDescription(); ?></li>
            <li><strong>Price:</strong> <?php echo $product->getPrice(); ?></li>
            <li><strong>SKU:</strong> <?php echo $product->getSku(); ?></li>
            <li><strong>Image (text):</strong> <?php echo $product->getImage(); ?></li>
        </ul>
        <a href="<?php echo $routes->get('homepage')->getPath(); ?>">Back to homepage</a>
    <section>
</body>

</html>