<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JavaScript - Drag and Drop Demo</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <!--- 
  https://www.javascripttutorial.net/web-apis/javascript-drag-and-drop/
  --->

  <div class="container">
    <h1>JavaScript - Drag and Drop</h1>
    <div class="drop-targets">
      <div>
        <div class="box" id="1_1">
            <div class="item" id="item" draggable="true">
              Test Example
            </div>
        </div>
        <div class="box" id="1_2"></div>
        <div class="box" id="1_3"></div>
      </div>
      <div>
        <div class="box" id="2_1"></div>
        <div class="box" id="2_2"></div>
        <div class="box" id="2_3"></div>
      </div>
      <div>
        <div class="box" id="3_1"></div>
        <div class="box" id="3_2"></div>
        <div class="box" id="3_3"></div>
      </div>
      <div>
        <div class="box" id="4_1"></div>
        <div class="box" id="4_2"></div>
        <div class="box" id="4_3"></div>
      </div>
    </div>
  </div>


    <script src="js/app.js"></script>
</body>
</html>