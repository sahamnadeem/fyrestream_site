$('#OpenImgUpload').click(function(){
    $('#status-img').click();
    $('#status-img').change(function(){
        filePreview(this);
    })
});

function filePreview(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            document.getElementById('img').src = e.target.result
        };
        reader.readAsDataURL(input.files[0]);
    }
}

$('#staus').click(function(){
    document.getElementById('statusdiv').style.display='block';
    document.getElementById('imgdiv').style.display='none';
    document.getElementById('viddiv').style.display='none';
})
$('#OpenImgUpload').click(function(){
    document.getElementById('statusdiv').style.display='none';
    document.getElementById('imgdiv').style.display='block';
    document.getElementById('viddiv').style.display='none';
})
$('#video').click(function(){
    document.getElementById('statusdiv').style.display='none';
    document.getElementById('imgdiv').style.display='none';
    document.getElementById('viddiv').style.display='block';
})