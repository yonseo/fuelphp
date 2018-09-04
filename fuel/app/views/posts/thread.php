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

    <div class="card-sharp">
       <table class="table">
            <thead class="thead">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Thread</th>
                <th scope="col">Posted On</th>
                <th scope="col">Author</th>
                <th scope="col">Category</th>
                <th scope="col">Read</th>
              </tr>
            </thead>
            <tbody>
                <?php foreach ($posts as $post) : ?>
              <tr>
                <td><?php echo $post->id; ?></td>
                <th><i class="fa fa-clipboard" aria-hidden="true"></i> <?php echo $post->title; ?></th>
                <td><?php echo $post->date; ?></td>
                <td><?php echo $post->author; ?></td>
                <td><?php echo $post->category; ?></td>
                <td>
                    <a href="/posts/view/<?php echo $post->id; ?>" style="float: right"><button><i class="fa fa-long-arrow-right fa-lg" aria-hidden="true"></i></button></a>
                </td>
              </tr>
                <?php endforeach; ?>
            </tbody>
        </table>   
    </div>
</div>

      <!-- ================================= CUT HERE [CARD_START]=====================================  -->
  <div class="col-md-4">
    
      <div class="card-header-light">
        <div class="card-buttons">
        <a href="" style="color: #6398ff;"><i class="fa fa-refresh" aria-hidden="true"></i></a>
        <a href="" style="color: #3cba9f;"><i class="fa fa-plus-circle" aria-hidden="true"></i></a>
        <a href="" style="color: #63d1ff;"><i class="fa fa-minus-circle" aria-hidden="true"></i></a>
        <a href="" style="color: #ff5757;"><i class="fa fa-times-circle" aria-hidden="true"></i></a>
        </div>
            <h6>Category</h6>
      </div>

    <div class="card-sharp">
    <div class="forum-nav">
        <ul>
            <a href=""><li><i class="fa fa-question-circle" aria-hidden="true"></i> Questions</li></a>
            <a href=""><li><i class="fa fa-tags" aria-hidden="true"></i> Tags</li></a>
            <a href=""><li><i class="fa fa-commenting-o" aria-hidden="true"></i> Badges</li></a>
            
        
        <hr/>
            <a href=""><li><i class="fa fa-commenting-o" aria-hidden="true"></i> Badges</li></a>
        </ul>
    </div>
    </div>


  </div><!-- col-md-4 -->

    <!-- ================================= CUT HERE [CARD_END]=====================================  -->