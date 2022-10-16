<?php
if(isset($_POST['submit'])){
    $no_wa = 6281387272994;
    $id = $_POST['id'];
    $nick = $_POST['nick'];
    $jumlahDm = $_POST['jumlahDm'];
    header("location:https://api.whatsapp.com/send?phone=$no_wa&text=id:%20$id%20%0DNNick:%20$nick%20%0DJumlah%20DM:%20$jumlahDm%20%0DPesan:%20$message");
}  else {
    echo "
        <script>
            window.location=history.go(-1);
        </script>
    ";
}