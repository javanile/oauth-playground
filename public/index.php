<?php

$dsn = 'pgsql:host=postgres port=5432 dbname=oauth_playground user=postgres password=secret1234';
$connection = new PDO($dsn);
?>
<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<title>Twitter Button</title>
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="https://www.javanile.org/crisp/css/crisp.css">
</head>
<body>
<h1>Twitter Button</h1>
<p>Grow your project by putting a fantastic button that will allow your users to easily share your work on Twitter</p>

<h3>Get Started</h3>
<p>Type to the following area the content to share on Twitter</p>
<textarea id="tweet" placeholder="Write a wonderful tweet here..." rows="6"></textarea>

<h3>Look & Feel</h3>
<p>Select the style that best fit with your needs</p>
<select id="look-and-feel">
    <option value="magic_button">Magic Button</option>
    <option value="magic_button_small">Magic Button (Small)</option>
    <option value="magic_button_large">Magic Button (Large)</option>
</select>

<h3>Preview</h3>
<p>This is what the button looks like, click to see how it works</p>
<section id="preview" align="center">
    <a href="https://twitter.com/intent/tweet?text=Hello%20world" target="_blank" rel="nofollow"><img src="https://camo.githubusercontent.com/f2bbc2f18671219cc944bb2de787f6499d4d9c291e5e969fea47ef3b2791da48/68747470733a2f2f696d672e736869656c64732e696f2f62616467652f2d73686172652532306f6e253230747769747465722d626c75653f6c6f676f3d74776974746572267374796c653d666f722d7468652d6261646765" alt="Share on Twitter" data-canonical-src="https://img.shields.io/badge/-share%20on%20twitter-blue?logo=twitter&amp;style=for-the-badge" style="max-width: 100%;"></a>
</section>
</body>
</html>
