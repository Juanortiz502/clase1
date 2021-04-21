var video = document.querySelector("video");
var constraints =
{
audio: false,
video:
{
facingMode: { exact: "environment" },
width: { min: 100, ideal: 400, max: 450 },
height: { min: 100, ideal: 400, max: 450 }
}
}

navigator.mediaDevices.getUserMedia(constraints)
.then(function(mediaStream)
{

video.srcObject = mediaStream;
video.onloadedmetadata = function(e)
{
video.play();
};

}).catch(function(err)
{
console.log(err.name + ": " + err.message);
});

var qr_canvas =
document.getElementById("qr-canvas").getContext("2d");
qr_canvas.drawImage(video, 0, 0, 400, 400);
qrcode.decode();


function readQR(a)
{
alert(a);
}

qrcode.callback = readQR;