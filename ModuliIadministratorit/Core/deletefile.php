<?php
require 'Boot.php';
    $id = $_GET['uid'];
$file = $_GET['name'];
mysqli_query($conn,"CALL deletefile('$id')");
if (file_exists('../../ModuliIPerdoruesit/uploads/'.$file)) {
    unlink('../../ModuliIPerdoruesit/uploads/'.$file);
    header('Location: ../index.php');
}else{
    echo "File nuk u gjet, ju lutem rishikoni fillin.";
    header('Refresh: 10; URL=../index.php');
}
?>
<p>ju do te ktheheni mbrapa per  <span id="counter">10</span> seconda.</p>
<script type="text/javascript">
function countdown() {
    var i = document.getElementById('counter');
    if (parseInt(i.innerHTML)<=0) {
        location.href = 'login.php';
    }
if (parseInt(i.innerHTML)!=0) {
    i.innerHTML = parseInt(i.innerHTML)-1;
}
}
setInterval(function(){ countdown(); },1000);
</script>