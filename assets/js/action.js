function openfiledialog() {
    document.getElementById('file1').click();
}

function showuploaddiv() {
    var upload_div = document.getElementById('upload-div');
    //alert(upload_div.style.display);
    upload_div.style.display = 'block';
}

function b_cancelarClick() {
    var upload_div = document.getElementById('upload-div');
    upload_div.style.display = 'none';
}

function fileChange(){
    var filepath = document.getElementById('filepath');
    var file1 = document.getElementById('file1');
    filepath.value = file1.value;
}