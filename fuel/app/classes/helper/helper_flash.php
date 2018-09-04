<?php if(Session::get_flash('success')) : ?>
    <div class="alert alert-success">
        <?php echo Session::get_flash('success'); ?>
    </div>
<?php endif; ?>

<?php if(Session::get_flash('error')) : ?>
    <div class="alert alert-danger">
        <?php echo Session::get_flash('error'); ?>
    </div>
<?php endif; ?>
<?php if(Session::get_flash('warning')) : ?>
    <div class="alert alert-warning">
        <?php echo Session::get_flash('error'); ?>
    </div>
<?php endif; ?>
<?php if(Session::get_flash('info')) : ?>
    <div class="alert alert-info">
        <?php echo Session::get_flash('error'); ?>
    </div>
<?php endif; ?>