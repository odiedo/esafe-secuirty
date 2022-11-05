<!DOCTYPE html>
<html>
   <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="author" content="Aurelio De Rosa">
    <title>Vibration API Demo by Aurelio De Rosa</title>
    <style>
      body
      {
          max-width: 500px;
          margin: 2em auto;
          font-size: 20px;
      }
      h1
      {
          text-align: center;
      }
      .hidden
      {
          display: none;
      }
 
      .buttons-wrapper
      {
          text-align: center;
      }
      .button-demo
      {
          padding: 0.5em;
          margin: 1em auto;
      }
      .author
      {
          display: block;
          margin-top: 1em;
      }
    </style>
   </head>
   <body>
    <h1>Vibration API</h1>
    <div class="buttons-wrapper">
      <button id="button-play-v-once" class="button-demo">Vibrate Once</button>
      <button id="button-play-v-thrice" class="button-demo">Vibrate Thrice</button>
      <button id="button-stop-v" class="button-demo">Stop</button>
    </div>
    <span id="v-unsupported" class="hidden">API not supported</span>
    <small class="author">
      Demo created by <a href="http://www.audero.it">Aurelio De Rosa</a>
      (<a href="https://twitter.com/AurelioDeRosa">@AurelioDeRosa</a>)
    </small>
    <script>
      window.navigator = window.navigator || {};
      if (navigator.vibrate === undefined) {
          document.getElementById('v-unsupported').classList.remove('hidden');
          ['button-play-v-once', 'button-play-v-thrice', 'button-stop-v'].forEach(function(elementId) {
            document.getElementById(elementId).setAttribute('disabled', 'disabled');
          });
      } else {
          document.getElementById('button-play-v-once').addEventListener('click', function() {
            navigator.vibrate(1000);
          });
          document.getElementById('button-play-v-thrice').addEventListener('click', function() {
            navigator.vibrate([1000, 500, 1000, 500, 2000]);
          });
          document.getElementById('button-stop-v').addEventListener('click', function() {
            navigator.vibrate(0);
          });
      }
    </script>
   </body>
</html>