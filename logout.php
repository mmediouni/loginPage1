<?php
session_start();
session_destroy();
echo '<div class="tenor-gif-embed" data-postid="15994137" data-share-method="host" data-width="20%" data-aspect-ratio="1.2357320099255582"><a href="https://tenor.com/view/wave-bye-goodbye-farewell-waving-gif-15994137">Wave Bye GIF</a> from <a href="https://tenor.com/search/wave-gifs">Wave GIFs</a></div><script type="text/javascript" async src="https://tenor.com/embed.js"></script>';
header('Refresh: 5; URL=index.php');


// header('location:index.php');