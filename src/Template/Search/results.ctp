<h1>Search Results for: <?php echo($search_string); ?></h1> [ <a href="/">Search Again</a> ]
<pre>
<?php if (isset($results)) : ?>
    <?php foreach ($results as $result) : ?>
        <img style="float:left;" src="<?php echo($result->images->fixed_height->url); ?>" />
    <?php endforeach; ?>
<?php endif; ?>