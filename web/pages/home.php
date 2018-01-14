<?php
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset='utf-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Do Backup PHP</title>
    <link rel="stylesheet" href="dist/css/styles.css">
    <script src="dist/js/scripts.js"></script>
  </head>

  <body>

    <div class="container">
      <h1 class="text-center">Do Backup php</h1>

      <div class="form-group">
        <label for="host">Host</label>
        <input type="text" class="form-control" id="host" placeholder="Enter mysql host">
      </div>

      <div class="form-group">
        <label for="user">User</label>
        <input type="text" class="form-control" id="user" placeholder="Enter mysql user">
      </div>

      <div class="form-group">
        <label for="dbname">Database name</label>
        <input type="text" class="form-control" id="dbname" placeholder="Enter database name">
      </div>

      <div class="form-group">
        <label for="pass">User password</label>
        <input type="password" class="form-control" id="pass" placeholder="Enter user password">
      </div>

      <a href="#" id="api_button" class="btn btn-primary">Make backup!</a>
    </div>

  </body>
</html>      
