<h2> <?= $title ?> </h2>

<?php foreach($posts as $post): ?>
    <h3> <?php echo $post['title'] ?> </h3>
    <small class='post-date'>Posted on: <?php echo $post['created_at'] ?></small> <br>
    <?php echo word_limiter($post['body'], 10); ?> 
    <br>
    <p> <a class="btn btn-primary btn-sm my-4" href="<?php echo site_url('posts/'.$post['slug']); ?>">Read More</a> </p>
<?php endforeach; ?>