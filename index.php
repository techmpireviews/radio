<!DOCTYPE html>
<html>
<head>
	<script src="serviceworker.js"></script>
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="manifest" href="manifest.json">
    <link rel="apple-touch-icon" sizes="512x512" href="images/goldicon.png">
    <link rel="icon" href="images/goldicon.png">
	<script>
	if ('serviceWorker' in navigator) {
  window.addEventListener('load', () => {
    navigator.serviceWorker.register('/service-worker.js')
        .then((reg) => {
          console.log('Service worker registered.', reg);
        });
  });
}
	</script>
	<title>Get Linton Radio App</title>
</head>
<body>
<center><h1>Add this web app to your home screen!
</h1></center>
</body>
</html>
