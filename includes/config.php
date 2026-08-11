 
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