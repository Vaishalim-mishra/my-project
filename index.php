<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Simple Authentication</title>
  <script>
    function authenticate() {
      var username = prompt('Enter your username:');
      var password = prompt('Enter your password:');

      if (username === 'admin' && password === 'admin') {
        alert('Authentication successful!');
        window.location.href = 'list.php'; // Redirect to list.php on success
      } else {
        alert('Authentication failed. Please try again.');
        window.location.href = 'index.php'; // Redirect to index.php on failure
      }
    }
  </script>
</head>
<body onload="authenticate()">

  <h1>Authentication</h1>
  <button onclick="authenticate()">Authenticate</button>

</body>
</html>
