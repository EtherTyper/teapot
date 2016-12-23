<?hh // strict

header("I'm a teapot!", true, 418);
echo <html>
  <!-- Yes, this is a joke. No, you cannot get an RFC 7168 compliant teapot. !-->;
  <head>
    <title>
  { "I'm a teapot!" }
    </title>
  </head>
  <body style="margin: 0">
    <iframe src="418.html" style="border: 0; width: 100%; height: 100%" />
    </body>;
</html>;
