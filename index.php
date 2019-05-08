<?php
if (isset($_GET['record'])) {
  if (!file_exists('upload/'.$_GET['record'].'.mp3')) {
    $content = '<h1>Nothing found</h1>';
  } else {
    $content = '<audio controls="" src="upload/'.$_GET['record'].'.mp3")></audio>';
  }
} else {
  $content = '';
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>RecorDesu</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    <div id='content'>
    <a href="/"><h1>RecorDesu</h1></a>
    <p>
    Anonymous online audio recording tool 
    </p>
<?php
if ($content != '') {
	echo('<h3>Record '.$_GET['record'].$content);
} 
?>
    <div id="controls">
    	<button id="recordButton">Record</button>
    	<button id="stopButton" disabled>Stop <div class="loader" id="loader"></div></button>
    </div>
    	
	<div style="display:block">Time limit: 5min</div>
	<hr>
	<br>
    <div style="display:none">
    <div id="formats"></div>
    <h3>Log</h3>
    <pre id="log"></pre>
    </div>

    <h3>Recordings</h3>
    <ol id="recordingsList"></ol>
  
    <!-- inserting these scripts at the end to be able to use all the elements in the DOM -->
    <script src="js/WebAudioRecorder.min.js"></script>
    <script src="js/app.js"></script>
    </div>
<div id='footer'>
    <h6>Icon made by <a href='https://smashicons.com/'>smashicons</a> from flaticon.com </h6>
    <h6>based on <a href="https://github.com/higuma/web-audio-recorder-js">WebAudioRecorder.js</a></h6>
    <a href="https://github.com/house-of-vanity/recordesu">
    <svg class="octicon octicon-mark-github v-align-middle" height="32" viewBox="0 0 16 16" version="1.1" width="32" aria-hidden="true"><path fill-rule="evenodd" d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.013 8.013 0 0 0 16 8c0-4.42-3.58-8-8-8z"></path></svg>
</a>
</div>

  </body>
</html>
