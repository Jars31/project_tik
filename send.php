<?php
if(isset($_POST['submitml'])){
    $no_wa = 6281387272994;
    $id = $_POST['id'];
    $server = $_POST['server'];
    $email = $_POST['email'];
    $nick = $_POST['username'];
    $jumlahDm = $_POST['jumlahDm'];
    header("location:wa.me/send/?phone=$no_wa&text=id:%20$id%20%0DNNick:%20$nick%20%0DJumlah%20DM:%20$jumlahDm%20%0D");
}  else {
    echo "
        <script>
            window.location=history.go(-1);
        </script>
    ";
}