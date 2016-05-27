<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Hello, World! • A-Frame</title>
    <meta name="description" content="Hello, World! • A-Frame">
    <script src="https://aframe.io/releases/0.2.0/aframe.min.js"></script>
    
    <script   src="https://code.jquery.com/jquery-1.12.4.min.js"   integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="   crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/script.js"></script>
  </head>
  <body>
    <a-scene>
    <a-sky src="img/bg-1.jpg" rotation="0 -130 0" material="src:url(img/bg-1.jpg); color:#fff; shader:flat;" geometry="primitive:sphere; radius:5000; segmentsWidth:64;segmentsHeight:64" scale="-1 1 1"></a-sky>
    <a-entity camera="active:true" id="camera" look-controls="enabled: true" wasd-controls="enabled: false" position="0 0 0" >
    <a-entity id="sound-holder" position="0 0 0" ></a-entity>

    <a-ring color="#000" radius-inner="1" radius-outer="4" position="0 0 -0.6" scale="0.80 0.8 0.8" ></a-ring>
        <a-entity 
          cursor="fuse: true; maxDistance: 500; timeout: 500" position="0 0 -1" 
          scale="0.05 0.05 0.05" 
          geometry="primitive: ring;" 
          material="color: #000; shader: flat" 
          raycaster="objects: .clickable, .reload">
        

         <a-box color="#000" depth="1" height="40" width="0.3" position="21 0 0" rotation="0 0 90"></a-box>
         <a-box color="#000" depth="1" height="40" width="0.3" position="-21 0 0" rotation="0 0 90"></a-box>
         <a-box color="#000" depth="1" height="40" width="0.3" position="0 21 0" rotation="0 0 0"></a-box>
         <a-box color="#000" depth="1" height="40" width="0.3" position="0 -21 0" rotation="0 0 0"></a-box>


        </a-entity>
      
          
     </a-entity>
    
<!--targets-->

    <a-entity class="clickable" geometry="primitive: box" position="2 0 -10.4"></a-entity>

    <a-entity class="clickable" geometry="primitive: sphere" position="-1 0 -10"></a-entity>

    <a-entity class="clickable" geometry="primitive: sphere" position="-5 0 -10"></a-entity>

    <a-entity class="reload" geometry="primitive: box" position="2 4 -10.4"  material="color:green; shader:flat;"></a-entity>
     
     
    </a-scene>
  </body>
</html>