<nav class="navbar navbar-expand-lg navbar-dark <?php if(isLoggedIn()) echo "bg-index"; else echo "bg-be" ?> mb-3">
  <div class="container">
      <a class="navbar-brand <?php if(isLoggedIn()) echo "navbar-index"; else echo "navbar-login" ?>" href="<?php echo URLROOT; ?>"><?php echo SITENAME; ?></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
          <ul class="navbar-nav mr-auto">
<!--            <li class="nav-item">-->
<!--              <a class="attr" href="--><?php //echo URLROOT; ?><!--">Home</a>-->
<!--            </li>-->
          </ul>
          
          <ul class="navbar-nav ml-auto">
          <?php if(isset($_SESSION['user_id'])) : ?>
            <li class="nav-item">
              <a class="nav-link nav-index" href="#">Welcome <?php echo $_SESSION['name'] ;?></a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-index" href="<?php echo URLROOT; ?>/users/logout">Logout</a>
            </li>
          <?php else : ?>
            <li class="nav-item">
              <a class="nav-link nav-login" href="<?php echo URLROOT; ?>/users/register">Register</a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-login" href="<?php echo URLROOT; ?>/users/login">Login</a>
            </li>
          </ul>
        <?php endif ;?>

        </div>
  </div>
</nav>