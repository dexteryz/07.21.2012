<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">

<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8">
  <link rel=StyleSheet href="lib/css/bootstrap.css" type="text/css" media=screen>
  <link rel=StyleSheet href="lib/css/style.css" type="text/css" media=screen>

  <script type="text/javascript" src="functions.js"></script>

  <title>Project: Website for education nonprofit</title>

</header>
<body>
<div class="container">
<div id="header">
  <div class="logo"><a href="index.php">
    <h1> grapevine </h1>
  </a></div>
  <div class="navbar">
      <div class="navbar-inner">
        <div class="container">
          <button type="button"class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="">
                <a href="./listings.php">Browse</a>
              </li>
              <li class="">
                <a href="./create.php">Create</a>
              </li>
          </ul>
          <ul class="nav pull-right">
             
             <li>
                <a href="login.php">Login</a>
              </li>
              <li class="active">
                <a href="signup.php">Signup</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
</div>


<div id="content-sidebar" class="span12 container">
<div id="content" class="span8">

<div class="row">
<div class="listing span8">
  <div id="page">
  <form class="form-horizontal" action="register.php" method="post">
  <fieldset>

    <div class="span7">
      <legend class="form-title">Sign up</legend>
      <div class="control-group">
            <label class="control-label" for="input01">Name*</label>
              <div class="controls">
                <input type="text" class="input-xlarge" id="input01" name="realname">
              </div>
          </div>
      <div class="control-group">
        <label class="control-label" for="input01">Username*</label>
          <div class="controls">
            <input type="text" class="input-xlarge" id="input01" name="username">
          </div>
      </div>
      <div class="control-group">
        <label class="control-label" for="input01">Password*</label>
          <div class="controls">
            <input type="password" class="input-xlarge" id="input01" name="password">
          </div>
      </div>
      <div class="control-group">
        <label class="control-label" for="input01">Retype Password*</label>
          <div class="controls">
            <input type="password" class="input-xlarge" id="input01" name="password">
          </div>
      </div>
      <div class="control-group">
        <label class="control-label" for="input01">About</label>
          <div class="controls">
            <textarea class="input-xlarge" id="input01" name="about"></textarea>
          </div>
      </div>

      <div class="controls">
        <button type="submit" class="btn btn-primary">Register</button>
        <button class="btn">Cancel</button>
      </div>
    </div>
  </fieldset>
</form>
</div>
</div>
</div>



</div>

</div>

</div>
</body>

  <footer class="footer">
    <div class="container">
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>Built by the grapevine Team</p>
    </div>
  </footer>
</html>


