<!DOCTYPE html>
<?php include_once("db.php");
$id=GetSession();
$member=GetMember($id);
$name=$member['Name'];
$address=$member['Address'];
$email=$member['Email'];
$sex=$member['Sex'];
$birth=$member['Birthday'];
$phone=$member['Phone'];
if($sex==0)
$sex='女';
else
$sex='男';
$birth=str_replace("\r\n","",$birth);
?>
<html lang="en">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
<body>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  <?php include("Menu.php"); ?>
  <div class="container">
    <div class="row mt-5">
        <h3><a class="badge badge-pill badge-primary" href="customer_data.php">Personal Information </a></h3>
        <h3><a class="badge badge-pill badge-primary" href="list_window.php">Order Records </a></h3>
        <h3><a class="badge badge-pill badge-primary" href="#">Contact Customer Service </a></h3>
    </div>
    <div class="row mt-5">
      <div class="col-lg-6">
        <div class="backstage__user__common__FB">
            <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fntutcsie%2F%3Fhc_ref%3DARSMkNVK4sOh8D-yArUmyAUmG7osurRdCHXXBhFib3mw09n12OXtfw-k4YS3RZiNYTI%26fref%3Dnf&tabs=timeline&width=330&height=300&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="330" height="300" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
        </div>
      </div>
      <div class="col-lg-6 ">
        <div class="card border-white mb-3" style="max-width: 50rem;">
          <div class="text-dark">
            <ul class="list-group list-group-flush">
              <li class="list-group-item">
                <div class="row">
                  <h4 class="col-3">Name:</h4>
                  <p class="col-9"><?= $name ?></p>
                </div>
              </li>
              <li class="list-group-item">
                <div class="row">
                  <h4 class="col-3">Sex:</h4>
                  <p class="col-9"><?= $sex ?></p>
                </div>
              </li>
              <li class="list-group-item">
                <div class="row">
                  <h4 class="col-3">Brithday:</h4>
                  <p class="col-9"><?= $birth ?></p>
                </div>
              </li>
              <li class="list-group-item">
                <div class="row">
                  <h4 class="col-3">Address:</h4>
                  <p class="col-9"><?= $address ?></p>
                </div>
              </li>
              <li class="list-group-item">
                <div class="row">
                  <h4 class="col-3">Email:</h4>
                  <p class="col-9"><?= $email ?></p>
                </div>
              </li>
              <li class="list-group-item">
                <div class="row">
                  <h4 class="col-3">Phone:</h4>
                  <p class="col-9"><?= $phone ?></p>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

  </div>
</body>
