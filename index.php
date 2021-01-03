<html>

    <head>

        <title>Testing PHP & AJAX</title>

        <script type="text/javascript" src="auto_complete.js"></script>
        
        <style>
        body{
          color:#226b80; 
        }
        
        </style>
    </head>

    <body>
      <center> 
        <br>
        <h2 style="color:#35b0ab;">Simple Search Engine</h2>
      </center>
        <p><b>Type the first letter of the PHP MVC Framework</b></p>

        <form method="GET" action="index.php">

            <p><input type="text" id="Hint"  onkeyup="showResult(this.value) "></p>

        </form>

        <p>Results: <span id="txt"> </span></p>
      
    </body>

</html>