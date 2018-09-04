 <div class="col-md-8">
 
 <div class="card-sharp pad">

<!----------------------------------------- FORM ---------------------------------------->

<?php echo Form::open('/user/register'); ?>

<!----------------------------------------- USERNAME ---------------------------------------->
<div class="form-group">
    <?php echo Form::label('Username', 'username'); ?>
    <?php echo Form::input('username', Input::post('username'), ['class' => 'form-control']); ?>
</div>

<!----------------------------------------- EMAIL ---------------------------------------->
<div class="form-group">
    <?php echo Form::label('Email', 'email'); ?>
    <?php echo Form::input('email', Input::post('email'), ['class' => 'form-control']); ?>
</div>

<!----------------------------------------- PASSWORD ---------------------------------------->
<div class="form-group">
    <?php echo Form::label('Password', 'password'); ?>
    <?php echo Form::input('password', Input::post('password'), ['class' => 'form-control']); ?>
</div>

<!----------------------------------------- CONFIRM PASSWORD ---------------------------------------->
<div class="form-group">
    <?php echo Form::label('Confirm Password', 'password'); ?>
    <?php echo Form::input('password_confirm', Input::post('confirm'), ['class' => 'form-control']); ?>
</div>

<!----------------------------------------- SEND ---------------------------------------->
<div class="actions">
    <?php echo Form::submit('SUBMIT', 'REGISTER', ['class' => 'btn btn-primary']); ?>
</div>

<?php echo Form::close('/user/register'); ?>

<p>Don't have an account? Login</p>

 </div>
 </div>