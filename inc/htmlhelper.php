<?php
function htmlanfang($titel = "PHP-Beispiel", $thema = "PHP-Thema")
{
    echo "<!DOCTYPE html>
  <html lang=\"de\">
  
  <head>
      <meta charset=\"utf-8\">
      <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
      <title>$titel</title>
      <link rel=\"stylesheet\" type=\"text/css\" 
            href=\"../styles/simple.css\">

  </head>
  
  <body>
  <header>
     <h2>$thema</h2>
  </header>
  <main>

  ";
}
function htmlende()
{
    echo "
    </main>
    <footer>
        <p>(c) 2023 by ich</p>
    </footer> 
    </body>
    </html>";
}
      
?>