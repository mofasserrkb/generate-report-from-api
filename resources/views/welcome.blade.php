<!DOCTYPE html>
<html lang="en">
<head>
  <title>ADMIN</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 550px}

    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
    }

    /* On small screens, set height to 'auto' for the grid */
    @media screen and (max-width: 767px) {
      .row.content {height: auto;}
    }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse visible-xs">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">ADMIN PANEL</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Dashboard</a></li>
        <li><a href="#">Data</a></li>
        <li><a href="#">User Info</a></li>

      </ul>
    </div>
  </div>
</nav>

<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav hidden-xs">
      <h2>ADMIN</h2>
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="#section1">Dashboard</a></li>
        <li><a href="#section2">Data</a></li>
        <li><a href="#section3">User Info</a></li>

      </ul><br>
    </div>
    <br>

    <div class="col-sm-9">
      <div class="well">
        <h4>Dashboard</h4>

      </div>
      <div class="row">
        <div class="col-sm-3">
          <div class="well">
            <h4>Report</h4>
            <p>Generate Report</p>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="well">
            <h4>Report</h4>
            <p>Generate Report</p>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="well">
            <h4>Report</h4>
            <p>Generate Report</p>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="well">
            <h4>Report</h4>
            <p>Generate Report</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4">
          <div class="well">
            <form action="{{route('customer')}}" method="POST">
                @csrf


                    <button type="submit" class="btn btn-success">GENERATE REPORT</button>
              </form>
            <p></p>
            <p></p>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="well">
            <p></p>
            <p></p>
            <p></p>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="well">
            <p></p>
            <p></p>
            <p></p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-8">
          <div class="well">
            <p></p>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="well">
            <p></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

</body>
</html>
