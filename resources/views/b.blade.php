<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
    <style type="text/css">
        li{
            list-style: none;
        }
        .a-color{
            color: white;
        }
        .a-color:hover{
            color: white;
        }
        .border{
            border-bottom: solid 1px grey;
        }
        .gambar{
          width: 10px;
          height: 10px;
        }
        .merah{
          padding: 7px 14px;
          color: white;
          background-color: #f10a36;
          height: 120px;
          margin: 5px;
          border-radius: 3px;          
        }
        .hijau{
          padding: 7px 14px;
          color: white;
          background-color: #2ba538;
          height: 120px;
          margin: 5px;
          border-radius: 3px;
        }
        .notch-merah{
          background-color: white;
          border-radius: 2px;
          padding: 0px 3px;
          color: #f10a36;
          font-weight: bold;
        }
        .notch-hijau{
          background-color: white;
          border-radius: 2px;
          padding: 0px 3px;
          color: #2ba538;
          font-weight: bold;
        }
        .big{
          font-size: 17px;
        }
        .medium{
          font-size: 16px;
        }
        .small{
          font-size: 12px;
        }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
          <li class="nav-item dropdown li-custom">
            <a class="nav-link dropdown-toggle a-color" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Site Actions
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#">Browse</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Page</a>
          </li>
        </ul>
      </div>
    </form>
    </nav>
    <nav class="mb-3 navbar navbar-light bg-light">
    <span class="navbar-brand mb-0 h1">OneWorld <span class="small">Sea Departures ></span></span>
    </nav>
<div id="container">
<div class="row">
<div class="col-md-2">
<div id="sidebar">
    <ul class="sidebar-nav">
        <span class="medium">Tracking</span>
        <li>
            <a href="#">Shipment</a>
        </li>
        <br>
        <span class="medium">Origin Bookings</span>
        <li>
            <a href="#">New Origin Bookings</a>
        </li>
        <li>
            <a href="#">Origin Booking Approval</a>
        </li>
        <br>
        <span class="medium">CY Containers</span>
        <li>
            <a href="#">CY Release</a>
        </li>
        <li>
            <a href="#">CY Container Manifests</a>
        </li>
        <br>
        <span class="medium">CFS Containers</span>
        <li>
            <a href="#">CFS Receipts</a>
        </li>
        <li>
            <a href="#">New CFS Containers</a>
        </li>
        <li>
            <a href="#">CFS Container Approvals</a>
        </li>
        <br>
        <span class="medium">Vessels</span>
        <li>
            <a href="#">Vessel Manifests</a>
        </li>
        <br>
        <span class="medium">Documents</span>
        <li>
            <a href="#">Document Manager</a>
        </li>
    </ul>
        <div class="border-bottom"></div>
      <ul class="sidebar-nav">
        <li>
            <a href="#">Recycle bin</a>
        </li>
        <li>
            <a href="#">Allc site content</a>
        </li>
    </ul>
        <div class="border-bottom"></div>
</div>
</div>
<div class="col-md-10">
      <div class="row">
      <div class="col-xl merah">
        <div class="big">Purchase Orders: <span class="notch-merah float-right medium">149</span></div>
        <div class="border-top mt-1"></div>
        <div class="mt-4">PO's Require Booking <span class="notch-merah small">+</span></div>
        <div class="small mt-2"><span class="notch-merah">143</span> Critical! PO's Require Booking-7 Ship Date</div>
      </div>
      <div class="col-xl merah">
        <div class="big">New Origin Bookings: <span class="notch-merah float-right medium">4</span></div>
        <div class="border-top mt-1"></div>
        <div class="mt-4">New Bookings <span class="notch-merah small">></span></div>
        <div class="small mt-2"><span class="notch-merah">3</span> Critical!</div>
      </div>
      <div class="col-xl hijau">
        <div class="big">Origin Booking Approvals: <span class="notch-hijau float-right medium">9</span></div>
        <div class="border-top mt-1"></div>
        <div class="mt-4">Require Amendment <span class="notch-hijau small">></span></div>
        <div class="small mt-2"><span class="notch-hijau">0</span> Critical!</div>
      </div>
    </div>
    <div class="row">
      <div class="col-xl hijau">
        <div class="big">Origin Booking Approvals: <span class="notch-hijau float-right medium">9</span></div>
        <div class="border-top mt-1"></div>
        <div class="mt-4">Require Confirmation <span class="notch-hijau small">></span></div>
        <div class="small mt-2"><span class="notch-hijau">0</span> Critical!</div>
      </div>
      <div class="col-xl hijau">
        <div class="big">CFS Receipt: <span class="notch-hijau float-right medium">33</span></div>
        <div class="border-top mt-1"></div>
        <div class="mt-4">Require Receipt <span class="notch-hijau small">></span></div>
        <div class="small mt-2"><span class="notch-hijau">0</span> Critical! -5 Days ETD</div>
      </div>
      <div class="col-xl merah">
        <div class="big">Unloaded Origin Bookings: <span class="notch-merah float-right medium">4</span></div>
        <div class="border-top mt-1"></div>
        <div class="mt-4">LCL Require Loading <span class="notch-merah small">></span></div>
        <div class="small mt-2"><span class="notch-merah">35</span> Critical! -2 Days</div>
      </div>
    </div>
    <div class="row">
      <div class="col-xl hijau">
        <div class="big">CFS Container Approvals: <span class="notch-hijau float-right medium">33</span></div>
        <div class="border-top mt-1"></div>
        <div class="mt-4">Require Confirmation <span class="notch-hijau small">></span></div>
        <div class="small mt-2"><span class="notch-hijau">0</span> Critical!</div>
      </div>
      <div class="col-xl hijau">
        <div class="big">CY Release: <span class="notch-hijau float-right medium">52</span></div>
        <div class="border-top mt-1"></div>
        <div class="mt-4">Require Release <span class="notch-hijau small">></span></div>
        <div class="small mt-2"><span class="notch-hijau">0</span> Critical! -4 Days ETD</div>
      </div>
      <div class="col-xl hijau">
        <div class="big">CY Container Manifest: <span class="notch-hijau float-right medium">33</span></div>
        <div class="border-top mt-1"></div>
        <div class="mt-4">Require Release <span class="notch-hijau small">></span></div>
        <div class="small mt-2"><span class="notch-hijau">0</span> Critical! -4 Days ETD</div>
      </div>
    </div>
    <div class="row">
      <div class="col-xl merah">
        <div class="big">Unloaded Container: <span class="notch-merah float-right medium">4</span></div>
        <div class="border-top mt-1"></div>
        <div class="mt-4">Require Vessel Manifesting <span class="notch-merah small">></span></div>
        <div class="small mt-2"><span class="notch-merah">3</span> Critical!</div>
      </div>
      <div class="col-xl merah">
        <div class="big">Vessel Manifest: <span class="notch-merah float-right medium">4</span></div>
        <div class="border-top mt-1"></div>
        <div class="mt-4">Require Departure <span class="notch-merah small">></span></div>
        <div class="small mt-2"><span class="notch-merah">7</span> Critical! </div>
      </div>
      <div class="col-xl"></div>
    </div>
</div>
</div>
</div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>