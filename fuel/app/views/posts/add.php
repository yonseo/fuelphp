<div class="col-md-8">
     
     <div class="card-header-light">
      <div class="card-buttons">
      <a href="">Posts per page: <i class="fa fa-caret-down" aria-hidden="true"></i></a>
      <a href="" style="color: #6398ff;"><i class="fa fa-refresh" aria-hidden="true"></i></a>
      <a href="" style="color: #3cba9f;"><i class="fa fa-plus-circle" aria-hidden="true"></i></a>
      <a href="" style="color: #63d1ff;"><i class="fa fa-minus-circle" aria-hidden="true"></i></a>
      <a href="" style="color: #ff5757;"><i class="fa fa-times-circle" aria-hidden="true"></i></a>
      </div>
          <h6>Forum Posts</h6>
    </div>
 
    <div class="card-sharp pad">
   
        <?php echo Form::open('/posts/add'); ?>
        
        <!----------------------------------------- TITLE ---------------------------------------->
        <div class="form-group-line">
            <?php echo Form::label('Title', 'title'); ?>
            <?php echo Form::input('title', Input::post('title', isset($post) ? $post->title : '' ), ['class' => 'form-control-line']); ?>
        </div>
        
        <!----------------------------------------- CATEGORY ---------------------------------------->
        <div class="form-group-line">
            <?php echo Form::label('Category', 'category'); ?>
            <?php echo Form::select('category', '0',
                [
                    '0' => 'Select Category',
                    'ArtCave>Sketchbook' => 'ArtCave>Sketchbook',
                    'ArtCave>Fanart' => 'ArtCave>Fanart',
                    'ArtCave>Contest' => 'ArtCave>Contest'
                ]
                , ['class' => 'form-control-line']); ?>
        </div>
        
        <!----------------------------------------- DESC ---------------------------------------->
        <div class="form-group-line">
            <?php echo Form::label('Desc', 'desc'); ?>
            <?php echo Form::textarea('desc', Input::post('desc', isset($post) ? $post->desc : '' ), ['id' => 'trumbowyg']); ?>
        </div>
        
        <!----------------------------------------- TAGS ---------------------------------------->
        <div class="form-group-line">
            <?php echo Form::label('Tags', 'tags'); ?>
            <?php echo Form::input('tags', Input::post('tags', isset($post) ? $post->tags : '' ), ['class' => 'form-control-line']); ?>
        </div>
        
        <!----------------------------------------- AUTHOR ---------------------------------------->
        <div class="form-group-line">
            <?php echo Form::label('Author', 'author'); ?>
            <?php echo Form::input('author', Input::post('author', isset($post) ? $post->author : '' ), ['class' => 'form-control-line']); ?>
        </div>
        <!----------------------------------------- SEND ---------------------------------------->
        <div class="actions">
            <?php echo Form::submit('SEND'); ?>
        </div>
        
        <?php echo Form::close('/posts/add'); ?>
   
    </div>
 </div>

