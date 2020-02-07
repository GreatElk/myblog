<p></p><h2><?= $title ?><h2>
<?php foreach($posts as $post) : ?>
    <h3><?php echo $post['title'] ?></h3> 
    <h6>Posted by: <?php echo $post['posted_by']; ?></h6>
    <small class="post-date" style="margin: 3px 0; padding: 4px; display: block;" >Posted on: <?php echo $post['post_date']; ?></small>
    <?php echo $post['post_description']; ?>
    <br><br>
    <p><a class="btn btn-success btn-submit" href="<?php echo site_url('/posts/'.$post['slug']); ?>">
    Read more</a></p>
<?php endforeach; ?>