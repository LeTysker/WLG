<!DOCTYPE html>
<html>
    <head>
  		<meta charset="UTF-8">
  		<meta name="viewport" content="width=device-width, initial-scale=1">
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  		<link rel="stylesheet" href="style.css">
  		<script src="script.js"></script>
    </head>
    <body onload="getItems();">
      
        <div id="content">
          
          <div id="loader">
            <span id="loadingtext">Generating random wishlist...</span>
            </br>
            <img id="loading" src="loading_spinner.gif" alt="Loading..." />
          </div>
          
          <div id="wishlist">
            <div id="topdiv">
              <div class="box">
                <h2 id="header">Wish List</h2>
              </div>
              <div class="box">
                <button id="generatebutton" type="button" onclick="location.reload();">Generate</button>
              </div>
            </div>
            <div id="bottomdiv">
              <ol id="list"></ol>
            </div>
          </div>
        </div>

    </body>
</html>