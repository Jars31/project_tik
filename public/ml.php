<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>Top Up ML</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/checkout/">

<link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">
  </head>
  <body class="bg-light">
    
<div class="container">
  <main>
    <div class="py-5 text-center">
      <img class="d-block mx-auto mb-4" src="assets/brand/MLBB.svg" alt="" width="150" height="100">
      <h2>Checkout</h2>
      <p class="lead">Silahkan Mengisi Form Dibawah untuk Top Up</p>
    </div>

      <div class="col-md-7 col-lg-8">
        <form class="needs-validation" novalidate method="POST" action="send.php" target="_blank">
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="id" class="form-label">ID</label>
              <input type="text" class="form-control" id="id" name="id"placeholder="" value="" required>
              <div class="invalid-feedback">
                Field ini perlu di isi
              </div>
            </div>

            <div class="col-sm-6">
              <label for="server" class="form-label">Server</label>
              <input type="text" class="form-control" id="server" name="server" placeholder="" value="" required>
              <div class="invalid-feedback">
                Field ini perlu di isi
              </div>
            </div>

            <div class="col-12">
              <label for="username" class="form-label">Nickname</label>
              <div class="input-group has-validation">
                <span class="input-group-text">@</span>
                <input type="text" class="form-control" id="username" name="username" placeholder="Nickname" required>
              <div class="invalid-feedback">
                  Your username is required.
                </div>
              </div>
            </div>

            <div class="col-12">
              <label for="email" class="form-label">Email <span class="text-muted">(Optional)</span></label>
              <input type="email" class="form-control" name="email" id="email">
              <div class="invalid-feedback">
              Field ini perlu di isi
              </div>
            </div>

            <table>
                <tr>
                <th>
                    <select class="form-select" aria-label="Default select example" id="DmDropdown" name="DmDropdown">
                    <option selected>Nominal DM</option>
                    <option value="75">75 DM</option>
                    <option value="250">250 DM</option>
                    <option value="500">500 DM</option>
                    </select>
                </th>
                <th>
                    <h3 id="jumlahDm" ></h3>
                </th>
                </tr>
            </table>
            
            <script>
                var e = document.getElementById("DmDropdown");
                e.onchange = function() {
                    var strUser = e.options[e.selectedIndex].value;
                    if(strUser == 75) {
                    document.getElementById('jumlahDm').innerHTML = 'Rp 10.000';
                    } else if (strUser == 250){
                    document.getElementById('jumlahDm').innerHTML = 'Rp 50.000';
                    } else if (strUser == 500){
                    document.getElementById('jumlahDm').innerHTML = 'Rp 100.000';
                    } else {
                    document.getElementById('jumlahDm').innerHTML = '';
                    }
                }
            </script>

          <hr class="my-4">

          <h4 class="mb-3">Metode Pembayaran</h4>

          <div class="my-3">
            <div class="form-check">
              <input id="Gopay" name="paymentMethod" type="radio" class="form-check-input" value="Gopay" checked required>
              <label class="form-check-label" for="Gopay">Gopay</label>
            </div>
            <div class="form-check">
              <input id="Dana" name="paymentMethod" type="radio" class="form-check-input" value="Dana" required>
              <label class="form-check-label" for="Dana">Dana</label>
            </div>
            <div class="form-check">
              <input id="Ovo" name="paymentMethod" type="radio" class="form-check-input" value="Ovo" required>
              <label class="form-check-label" for="Ovo">Ovo</label>
            </div>
          </div>
          <hr class="my-4">
          <button class="w-100 btn btn-primary btn-lg" type="submit" name="submitml">Lanjut</button>
        </form>
      </div>
    </div>
  </main>

  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; KEIGHT GAMESTORE</p>
  </footer>
</div>


    <script src="assets/dist/js/bootstrap.bundle.min.js"></script>

      <script src="form-validation.js"></script>
  </body>
</html>
