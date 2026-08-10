 
<?php
  function asset($path)
  {
      return getBaseUrl().ltrim($path, '/'); 
  }
  function getBaseUrl() {
      // Determine the protocol (http or https)
      $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http";

      // Get the host name (e.g., www.example.com or localhost)
      $host = $_SERVER['HTTP_HOST'];

      // Get the directory path of the script, removing the script name itself
      $script_name = $_SERVER['SCRIPT_NAME'];
      $path = str_replace(basename($script_name), "", $script_name);

      // Construct the base URL
      $base_url = $protocol . "://" . $host . $path;

      return $base_url;
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Work Home Safety Solution - Comming Soon</title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"/> 
  <!-- Google Fonts -->
   <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet"/>
   <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet" /> 
 
    <link rel="stylesheet" href="<?= asset('assets/css/style.css') ?>"> 
</head>
<body>  
 
