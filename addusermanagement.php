<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NUS Consulting Group | User Management</title>
    <style>
      .adduserbutton {
          text-decoration: none;
          background: blue;
          padding: 10px 10px;
          position: absolute;
          right: 7%;
          bottom: 88%;
          color:white;
      }
    </style>
</head>
<body>
    <h1>User Management</h1>
    <p>All the <strong>User</strong>s related information will be provided here for the <strong>Admins</strong>.</p>
    <div class="container">
    <a class="adduserbutton" href="inviteuser.php"><img src="img/user-plus.svg" alt="Add User Icon" width=18px height=18px> Invite new user</a>
      <ul class="nav nav-tabs">
        <li class="active">
          <a data-toggle="tab" href="#home">Admin</a>
        </li>
        <li><a data-toggle="tab" href="#menu1">NUS Manager</a></li>
        <li><a data-toggle="tab" href="#menu2">NUS User</a></li>
        <li><a data-toggle="tab" href="#menu3">Parent User</a></li>
        <li><a data-toggle="tab" href="clientdata.php">Client User</a></li>
      </ul>

      <div class="tab-content">
        <div id="home" class="tab-pane fade  active in">
          <h3>Admin</h3>
          <p>Admin Details</p>
        </div>
        <div id="menu1" class="tab-pane fade">
          <h3>NUS Manager</h3>
          <p>
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
            nisi ut aliquip ex ea commodo consequat.
          </p>
        </div>
        <div id="menu2" class="tab-pane fade">
          <h3>NUS User</h3>
          <p>
            Sed ut perspiciatis unde omnis iste natus error sit voluptatem
            accusantium doloremque laudantium, totam rem aperiam.
          </p>
        </div>
        <div id="menu3" class="tab-pane fade">
          <h3>Parent User</h3>
          <p>
            Eaque ipsa quae ab illo inventore veritatis et quasi architecto
            beatae vitae dicta sunt explicabo.
          </p>
        </div>
        <div id="menu4" class="tab-pane fade">
          <!-- <h3>Client User</h3> -->
        <a class="tab" href="clientdata.php" style="text-decoration-line: none;"></a>
        </div>
      </div>
    </div>
    </div>
</body>
</html>