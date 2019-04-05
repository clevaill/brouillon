<script src="capture.js"></script>
<div class="contentarea">
    <div id="camera" class="camera">
        <video id="video">Video stream not available.</video>
        <img id="222" alt="">
        <button id="startbutton">Take photo</button>
    </div>
    <canvas style="display: none" id="canvas">
    </canvas>
    <div class="output">
        <form action="/camagru/" method="POST">
            <input id="send" type="hidden" name="photo" />
            <img id="photo" alt="The screen capture will appear in this box.">
            <button name="submit" type="submit" value="Send File" id="startbutton">Download</button>
        </form>
    </div>
</div>