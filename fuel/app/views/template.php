<html>
  <head>
    <title><?php echo $title; ?></title>
    <meta content="">
    <!-- Load JQuery first -->
    <?php echo Asset::js('jQuery_Core_1.12.4.js'); ?>
    
    <?php echo Asset::css('bootstrap.css'); ?>
    <?php echo Asset::css('blossom.css'); ?>
    <?php echo Asset::js('blossom.js'); ?>
    
    <?php echo Asset::css('font-awesome.css'); ?>
    
    <!-- Trumbowyg Editor -->
    <?php echo Asset::js('trumbowyg.min.js'); ?>
    <?php echo Asset::css('trumbowyg.min.css'); ?>
    
    
  </head>
  <body>

<div class="wrapper">


  <!-- ================================= CUT HERE [SIDEBAR_START]=====================================  -->

<div class="wrapper-sidebar">

<div class="sidebar" id="sidebar-mobile">
  <!-- close button ONLY DISPLAY ON SIDEBAR -->
  <div id="sidebar-button2"><i class="fa fa-times-circle-o fa-2x" aria-hidden="true"></i></div>
  <!-- SIDEBAR LOGO -->
<div class="logo"><img src="/assets/img/logo2.png" class="img-responsive" style="width: 120px;"></div>
  <!-- SIDEBAR AVATAR -->


<section>

  <ul>

    </li>
    <a class="menu-link" href="/" itemprop="url"><i class="fa fa-home fa-lg" aria-hidden="true"></i>  Home</a>
    <hr/>
    <a class="menu-link" href="#" itemprop="url"><i class="fa fa-home fa-lg" aria-hidden="true"></i>  Admin</a>
      <ul class="sub-menu">
        <a href="/admin"><li><i class="fa fa-circle-o" aria-hidden="true"></i> Dashboard</li></a>
        <a href="/admin/posts" itemprop="url"><li><i class="fa fa-circle-o" aria-hidden="true"></i> Forum Posts </li></a>
      </ul>
   </li>
    <a class="menu-link" href="#" itemprop="url"><i class="fa fa-user-circle-o fa-lg" aria-hidden="true"></i>  User</a>
      <ul class="sub-menu">
        <a href="user/login"><li><i class="fa fa-circle-o" aria-hidden="true"></i> Login</li></a>
        <a href="user/logout" itemprop="url"><li><i class="fa fa-circle-o" aria-hidden="true"></i> Logout </li></a>
        <a href="user/register" itemprop="url"><li><i class="fa fa-circle-o" aria-hidden="true"></i> Register </li></a>
      </ul>
   </li>
   <a class="menu-link" href="#" itemprop="url"><i class="fa fa-file fa-lg" aria-hidden="true"></i>  Pages</li></a>
     <ul class="sub-menu">
        <a href="profile.html" itemprop="url"><li><i class="fa fa-circle-o" aria-hidden="true"></i> Profile </li></a>
       <a href="login.html"><li><i class="fa fa-circle-o" aria-hidden="true"></i> Login/Register</li></a>
       <a href="email.html" itemprop="url"><li><i class="fa fa-circle-o" aria-hidden="true"></i> Email </li></a>
       <a href="sendemail.html" itemprop="url"><li><i class="fa fa-circle-o" aria-hidden="true"></i> Send Email </li></a>
       <a href="reademail.html" itemprop="url"><li><i class="fa fa-circle-o" aria-hidden="true"></i> View Email </li></a>
       <a href="card.html" itemprop="url"><li><i class="fa fa-circle-o" aria-hidden="true"></i> Card </li></a>
     </ul>
  </li>
   <a class="menu-link" href="#" itemprop="url"><i class="fa fa-plus-square-o fa-lg" aria-hidden="true"></i> Form</a>
     <ul class="sub-menu">
       <a href="form.html"><li><i class="fa fa-circle-o" aria-hidden="true"></i> Forms</li></a>
     </ul>
  </li>
  <a class="menu-link" href="#" itemprop="url"><i class="fa fa-table fa-lg" aria-hidden="true"></i>  Table</a>
    <ul class="sub-menu">
      <a href="table.html"><li><i class="fa fa-circle-o" aria-hidden="true"></i> Tables</li></a>
    </ul>
 </li>
 <a class="menu-link" href="#" itemprop="url"><i class="fa fa-dot-circle-o fa-lg" aria-hidden="true"></i> UI Elements</a>
   <ul class="sub-menu">
     <a href="button.html"><li><i class="fa fa-circle-o" aria-hidden="true"></i> Buttons</li></a>
     <a href="tab.html" itemprop="url"><li><i class="fa fa-circle-o" aria-hidden="true"></i> Tabs </li></a>
   </ul>
</li>
<hr/>
<a class="menu-link" href="#" itemprop="url"><i class="fa fa-pencil fa-lg" aria-hidden="true"></i> Blog</a>
  <ul class="sub-menu">
    <a href="blog.html"><li><i class="fa fa-circle-o" aria-hidden="true"></i> Blog</li></a>
    <a href="article.html" itemprop="url"><li><i class="fa fa-circle-o" aria-hidden="true"></i> Article </li></a>
    <a href="newpost.html" itemprop="url"><li><i class="fa fa-circle-o" aria-hidden="true"></i> New Post </li></a>
  </ul>
</li>
<a class="menu-link" href="#" itemprop="url"><i class="fa fa-forumbee" aria-hidden="true"></i> Forum</a>
  <ul class="sub-menu" style="display:block;">
    <a href="/posts"><li><i class="fa fa-circle-o" aria-hidden="true"></i> Forum Home</li></a>
    <a href="/posts/add" itemprop="url"><li><i class="fa fa-circle-o" aria-hidden="true"></i> New Post </li></a>
  </ul>
</li>
<hr/>
<a class="menu-link" href="#" itemprop="url"><i class="fa fa-file-text-o fa-lg" aria-hidden="true"></i> Documentation</a>
  <ul class="sub-menu">
    <a href="doc/credits"><li><i class="fa fa-circle-o" aria-hidden="true"></i> Credits</li></a>
    <a href="/doc/todo"><li><i class="fa fa-circle-o" aria-hidden="true"></i> To do list</li></a>
    <a href="/doc"><li><i class="fa fa-circle-o" aria-hidden="true"></i> Documentation</li></a>
  </ul>
</li>

</section>

</div>

</div>
  <!-- ================================= CUT HERE [SIDEBAR_END]=====================================  -->

<div class="wrapper-content">
  <div class="row">

        <header>

          <div class="block">
        <a href=""> <i class="fa fa-envelope-o fa-lg" aria-hidden="true"></i></a>
        <a href=""><i class="fa fa-pencil-square-o fa-lg" aria-hidden="true"></i></a>
          <a href=""><i class="fa fa-bell-o fa-lg" aria-hidden="true"></i></a>
          <a href=""><i class="fa fa-cog fa-lg" aria-hidden="true"></i></a>
          <a><?php 
            // get the user session
            $username = Session::get('username');
            $email = Session::get('email');
            
            if ( $username === false or empty($username))
            {
                echo "no user is logged in";
            }
            else
            {
                echo 'Your name: '.$username;
            }
            
            ?></a>
          
          </div>

          <div class="top-nav">
              <div id="sidebar-button"><i class="fa fa-bars" aria-hidden="true"></i></div>
              <input type="text" placeholder="Search" class="form-control search">
          </div>

          <div class="bottom-nav">
              <div class="right">
              <a class="btn btn-primary btn-sm" href="#" role="button" ><i class="fa fa-plus-circle" aria-hidden="true"></i> Create New</a>

            </div>
              <breadrumb>Home > Blog > Posts</breadrumb>
          </div>

        </header>

 
<!----------------------------------------- FLASH MESSAGE---------------------------------------->
  <div class="col-md-8">
    
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
  </div>

  <!-- ================================= CUT HERE [CARD_START]=====================================  -->

    <p><?php echo $content; ?></p>

    <!-- ================================= CUT HERE [CARD_END]=====================================  -->

    <footer>
      <h5>This is the footer</h5>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
      labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
      nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit
      esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt
      in culpa qui officia deserunt mollit anim id est laborum.</p>
      <hr/>
      <i class="fa fa-copyright" aria-hidden="true"></i> Copyright 2018 Blossom Admin - All Rights Reserved

    </footer>

</div> <!-- ROW -->
</div> <!-- WRAPPER -->
    <!-- ================================= END CONENT ====================================  -->
<!----------------------------------------- QUILL EDITOR ---------------------------------------->
<script>

    $('#trumbowyg').trumbowyg();
</script>

  </body>
</html>
