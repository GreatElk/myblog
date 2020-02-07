<h2><?= $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('posts/create'); ?>

<div class="container">
    <div class="alert alert-danger print-error-msg" style="display:none">
    </div>
   
    <form method="POST" action="/itemForm">
        <div class="form-group">
            <label>Post Title:</label>
            <input type="text" name="title" class="form-control" placeholder="Posted Title">
        </div>

        <div class="form-group">
            <label>Posted By:</label>
            <input type="text" name="posted_by" class="form-control" placeholder="Posted By">
        </div> 

        <div class="form-group">
            <strong>Description:</strong>
            <textarea class="form-control" name="post_description" placeholder="Post Description"></textarea>
        </div>

        <div class="form-group">
            <button class="btn btn-success btn-submit">Submit</button>
        </div>

    </form>

</div>


      