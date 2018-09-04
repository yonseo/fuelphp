 <div class="col-md-8">
 
 <div class="card-sharp pad">
<!----------------------------------------- FORM ---------------------------------------->

<?php echo Form::open('/user/login'); ?>

<!----------------------------------------- USERNAME ---------------------------------------->
<div class="form-group">
    <?php echo Form::label('Email', 'email'); ?>
    <?php echo Form::input('email', Input::post('email'), ['class' => 'form-control']); ?>
</div>

<!----------------------------------------- PASSWORD ---------------------------------------->
<div class="form-group">
    <?php echo Form::label('Password', 'password'); ?>
    <?php echo Form::input('password', Input::post('password'), ['class' => 'form-control']); ?>
</div>
<!----------------------------------------- SEND ---------------------------------------->
<div class="actions">
    <?php echo Form::submit('SUBMIT', 'LOGIN', ['class' => 'btn btn-primary']); ?>
</div>

<?php echo Form::close('/user/login'); ?>

<p>Don't have an account? Login</p>

</div>
</div>
