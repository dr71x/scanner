<!DOCTYPE html>
<html>
<head>
    <title>testing</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <style type="text/css">
        #results { padding:20px; border:1px solid; background:#ccc; }
    </style>
</head>
<body>
    <div class="display-cover">
        <video autoplay></video>
        <canvas class="d-none"></canvas>
    
        <div class="video-options">
            <select name="" id="" class="custom-select">
                <option value="">Select camera</option>
            </select>
        </div>
    
        <img class="screenshot-image d-none" alt="">
    
        <div class="controls">
            <button class="btn btn-danger play" title="Play"><i data-feather="play-circle"></i></button>
            <button class="btn btn-info pause d-none" title="Pause"><i data-feather="pause"></i></button>
            <button class="btn btn-outline-success screenshot d-none" title="ScreenShot"><i data-feather="image"></i></button>
        </div>
    </div>
<script language="JavaScript">
    if ('mediaDevices' in navigator && 'getUserMedia' in navigator.mediaDevices) {
    console.log("Let's get this party started")
    }
    navigator.mediaDevices.getUserMedia({
        video: {
    width: {
      min: 1280,
      ideal: 1920,
      max: 2560,
    },
    height: {
      min: 720,
      ideal: 1080,
      max: 1440
    },
    facingMode: {
      exact: 'environment'
    }});
    
</script>
    
</body>
</html>
