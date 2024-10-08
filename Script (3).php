<Html>
<head>
  <title>Web View</title>
  <style>
    html,
    body {
      margin: 0;
      padding: 0;
      height: 100%;
    }
  
    #webview-container {
      width: 100%;
      height: 100%;
    }
  
    iframe {
      width: 100%;
      height: 100%;
      border: none;
    }
  </style>
</head>
<body>
  <div id="webview-container">
    <iframe id="webview"></iframe>
  </div>
  
  <script>
    window.onload = function() {
      var webview = document.getElementById('webview');
      webview.src = 'https://snapmodsapk.com/'; // Set the URL you want to load here
    };
  </script>
</body>
</html>
