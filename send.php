<?php
if(isset($_POST['submitml'])){
    $no_wa = 628119516736;
    $id = $_POST['id'];
    $server = $_POST['server'];
    $email = $_POST['email'];
    $nick = $_POST['username'];
    $jumlahDm = $_POST['DmDropdown'];
    $metode = $_POST['paymentMethod'];

    // header('location:https://wa.me/send/?phone=6281387272994&text=id:%201%20%0DNNick:%20a%20%0DJumlah%20DM:%20250%20%0D');
    header("location:https://wa.me/send/?phone=$no_wa&text=id:$id%20%0AServer:%20$server$0ANick:%20$nick%20%0AJumlah%20DM:%20$jumlahDm%20%0AMetode%20Pembayaran:%20$metode");
}  else {
    echo "
        <script>
            window.location=history.go(-1);
        </script>
    ";
}

if(isset($_POST['submitpubg'])){
    $no_wa = 628119516736;
    $id = $_POST['id'];
    $email = $_POST['email'];
    $nick = $_POST['username'];
    $jumlahDm = $_POST['DmDropdown'];
    $metode = $_POST['paymentMethod'];

    // header('location:https://wa.me/send/?phone=6281387272994&text=id:%201%20%0DNNick:%20a%20%0DJumlah%20DM:%20250%20%0D');
    header("location:https://wa.me/send/?phone=$no_wa&text=id:%20$id%20%0ANick:%20$nick%20%0AJumlah%20UC:%20$jumlahDm%20%0AMetode%20Pembayaran:%20$metode");
}  else {
    echo "
        <script>
            window.location=history.go(-1);
        </script>
    ";
}


// wa.me/send/?phone=6281387272994&text=id:%201%20%0DNNick:%20a%20%0DJumlah%20DM:%20250%20%0D