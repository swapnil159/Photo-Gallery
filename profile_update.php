<?php
  include 'conn.php';

  if(!$_session['user'])
  {
    header('location: index.php');
  }
  $user=$_SESSION['user'];
?>

<!Doctype html>
<html>
<head>
  <title>UPDATE PROFILE</title>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
  <script src="profile_update.js"></script>
  <link rel="stylesheet" href="style.css">
</head>
<body ng-app="profile" ng-controller="upd" >
  <div id="menu">
    <nav id="bar">
      <ul>
        <li><a href="dashboard.php">HOME</a>
        <li><a href="profile.php">VIEW PROFILE</a>
        <li><a href="album.php">CREATE ALBUM</a>
        <li><a href="profile_update.php">UPDATE PROFILE</a>
        <li><a href="log_out.php">LOG OUT</a>
      </ul>
    </nav>
  </div>
  <div style="padding-top: 100px">
  <form>
    <table cellspacing="40">
      <tr>
        <td><img height="200" src=<?php echo "pp/".$user ?> alt="No Image" onerror=this.src="def.jpg"></td>
      </tr>
      <tr>
        <td>Select File:</td>
        <td><input id="file" name="file" type="file"></td>
      </tr>
        <td><button ng-click="upload()">UPLOAD</button></td>
        <td><button ng-click="rem()">REMOVE</button></td>
      <tr>
      </tr>
    </table>
  </form>
</div>
  <hr>
  <h1 align="center">Update</h1>
  <form name="pro_upd"  ng-submit="update()" >
  <div>
    <table cellspacing="40" align="center" style="border: 1px solid black;box-shadow: 5px 10px #888888;">
      <div>
        <tr>
          <td>
            <b>First Name*:<b>
          </td>
          <td>
            <input id="fname" type="text" ng-model="user.fname" name="fname" size="30" required>
          </td>
        </tr>
      </div>
      <div>
        <tr>
          <td>
            <b>Last Name*:<b>
          </td>
          <td>
            <input id="lname" type="text" ng-model="user.lname" name="lname" size="30" required>
          </td>
        </tr>
      </div>
      <div>
        <tr>
          <td>
            <b>Gender*:</b>
          </td>
          <td>
            <input id="gm" type="radio" value="male" name="gender" value="male" ng-model="user.gender" ng-value="'male'">Male
            <input id="gf" type="radio" name="gender" value="female"  value="female" ng-model="user.gender" ng-value="'female'">Female
          </td>
        </tr>
      </div>
      <div>
        <tr>
          <td><b>E-mail*:</b></td>
          <td><input id="e-mail" type="email"  name="e_mail" size="30" ng-model="user.email" required></td>
        </tr>
      </div>
      <div>
        <tr>
          <td><b>Current Password*:</b></td>
          <td><input id="currpass" type="password" name="currpass" size="30" ng-model="user.currpass"  placeholder="Enter the password" required></td>
        </tr>
      </div>
      <div>
        <tr>
          <td><b>New PASSWORD:</b></td>
          <td><input id="pass" type="password" name="pass" size="30" ng-model="user.newpass" placeholder="Enter the password you want to set"></td>
        </tr>
      </div>
      <div>
        <tr>
          <td><b>Confirm New PASSWORD:</b></td>
          <td><input id="confirm_pass" type="password"  name="cpass" size="30" ng-model="user.cnewpass" placeholder="Confirm your password"></td>
        </tr>
      <div>
        <tr>
          <td colspan="3" align="center"><input type="submit" name="submit" size="20" value="SUBMIT"></td>
        </tr>
      </div>
    </table>
  </div>
</form>
</body>
</html>
