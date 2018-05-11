
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">

      <a class="navbar-brand" href="index.php">DVD STORE</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="EachCategory.php?type=-1">All Product <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Product
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-menu" href=<?php echo "EachCategory.php?type="."action" ?>  >Action</a>
              <a class="dropdown-item" href=<?php echo "EachCategory.php?type="."adventure" ?>  >Adventure</a>
              <a class="dropdown-item" href=<?php echo "EachCategory.php?type="."comedy" ?>  >Comedy</a>
              <a class="dropdown-item" href=<?php echo "EachCategory.php?type="."crime" ?>  >Crime</a>
              <a class="dropdown-item" href=<?php echo "EachCategory.php?type="."horror" ?>  >Horror</a>
              <a class="dropdown-item" href=<?php echo "EachCategory.php?type="."drama" ?>  >Drama</a>
              <a class="dropdown-item" href=<?php echo "EachCategory.php?type="."sciencefiction" ?>  >Science Fiction</a>
              <a class="dropdown-item"href=<?php echo "EachCategory.php?type="."war" ?> >War</a>
            </div>
          </li>
          <li class="nav-item">
            <?php
              include_once("db.php");
                     if(GetSession()>0)
                     {
                      echo "<a class="."nav-link disabled"." href="."index.php?Id=-1".">Log Out</a>";
                     }
                     else
                     {
                      echo "<a class="."nav-link disabled"." href="."signin.php".">Sign In</a>";
                     }
                    ?>
          </li>
          <li class="nav-item">
          <?php
          if(GetStatus()==0)
            echo "<a"." class="."nav-link disabled"." href="."customer_data.php".">會員中心</a>";
          else if(GetStatus()==1 || GetStatus()==2)
            echo "<a class="."nav-link disabled"." href="."stock.php".">管理中心</a>";
          ?>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="Contact.php">Contact Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="shopping_cart.php"><img src="images/shopping-cart.png" alt="shopping"></a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0" action=Search.php method="Post" id="search-form">
          <input class="form-control mr-sm-2" type="text" placeholder="Search for something..." aria-label="Search" name="name">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit" value="Submit" name="search">Search</button>
        </form>
      </div>
    </nav>
  </div>
