<!DOCTYPE html>
<html>
    <head>
        <title>Form Top Up</title>
        <meta charset=utf-8>
        <meta name=description content="">
        <meta name=viewport content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    </head>
    <body>

    <section>
        <div class="container">
            <br><br>
            <h3>Top Up Diamond</h3>
            <br><br>

            <div class="row">
                <div class="col-6">
                <form class="row g-3" action="send.php" method="post" target="_blank" >
  <div class="col-md-6">
    <label for="id" class="form-label">Id ML(Server)</label>
    <input type="text" class="form-control" id="inputid">
  </div>
  <div class="col-md-6">
    <label for="nick" class="form-label">Nickname ML</label> 
    <input type="text" class="form-control" id="inputnick">
  </div>
  <table>
    <tr>
      <th>
        <select class="form-select" aria-label="Default select example" id="DmDropdown">
          <option selected>Nominal DM</option>
          <option value="1">75 DM</option>
          <option value="2">250 DM</option>
          <option value="3">500 DM</option>
        </select>
      </th>
      <th>
        <h3 id="jumlahDm"></h3>
      </th>
    </tr>
  </table>

  <script>
    var e = document.getElementById("DmDropdown");
    e.onchange = function() {
    var strUser = e.options[e.selectedIndex].value;
    if(strUser == 1) {
      document.getElementById('jumlahDm').innerHTML = 'Rp 10.000';
    } else if (strUser == 2){
      document.getElementById('jumlahDm').innerHTML = 'Rp 50.000';
    } else if (strUser == 3){
      document.getElementById('jumlahDm').innerHTML = 'Rp 100.000';
    } else {
      document.getElementById('jumlahDm').innerHTML = '';
    }
    
}
  </script>
  
<h6>Metode Pembayaran</h6>
<div class="btn-group" role="group" aria-label="Basic radio toggle button group">
  <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked>
  <label class="btn btn-outline-primary" for="btnradio1">Gopay</label>

  <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
  <label class="btn btn-outline-primary" for="btnradio2">Dana</label>

  <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
  <label class="btn btn-outline-primary" for="btnradio3">Ovo</label>
</div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Pesan</button>
  </div>
</form>
                </div>
            </div>
        </div>
    </section>

    </body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
</html>
