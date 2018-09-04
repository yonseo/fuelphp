
<!----------------------------------------- FLASH MESSAGE---------------------------------------->
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

<!----------------------------------------- USER HOME PAGE ---------------------------------------->