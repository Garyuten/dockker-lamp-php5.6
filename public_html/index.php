<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Hello World!</title>
</head>
<body>
  <h1>Hello, world!</h1>
  <h2>Your PHP version is <?php echo phpversion(); ?></h2>
  <ul>
    <li><a href="phpinfo.php">phpinfo</a></li>
  </ul>

  <h2>MySQL info</h2>
  <ul>
    <li><a href="http://localhost:8088" target="_blank">phpMyAdmin</a></li>
  </ul>
  <table border=1>
    <tr>
      <th>host</th>
      <td>{mysql ipv4_address}<br>(default: 192.168.202.2)</td>
    </tr>
    <tr>
      <th>user</th>
      <td>root</td>
    </tr>
    <tr>
      <th>password</th>
      <td>root</td>
    </tr>
    <tr>
      <th>port</th>
      <td>3308</td>
    </tr>
  </table>

  <h2>mod_rewrite test</h2>
  <p><a href="/hoge">Please check this link.</a></p>
  <?php if(!empty($_GET)): ?>
    ✅ mod_rewrite is ok! <br>
<code>
<?php var_dump($_GET); ?>
</code>
  <?php endif; ?>
</body>
</html>