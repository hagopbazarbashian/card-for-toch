<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('admin/home.css')}}">
    <link rel="stylesheet" href="{{asset('admin/iziToast.min.css')}}">
    <script src="{{asset('admin/js/iziToast.min.js')}}"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Tack Visiters</title>
</head>
<body>
    @include('admin.layout.side')
    <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-6" style="margin-top: 20px">
            <div class="card border-primary">
              <div class="card-body bg-primary text-white">
                <div class="row">
                  <div class="col-3">
                    <i class="fa fa-user fa-5x"></i>
                  </div>
                  <div class="col-9 text-right">
                    <h1>{{$visitorCount}}</h1>
                    <h4>Click</h4>
                  </div>
                </div>
              </div>
              <a href="#" target="_blank">
              </a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6" style="margin-top: 20px">
            <div class="card border-success">
              <div class="card-body bg-success text-white">
                <div class="row">
                  <div class="col-3">
                    <i class="fa fa-spinner fa-5x"></i>
                  </div>
                  <div class="col-9 text-right">
                    <h1>{{$contact}}</h1>
                    <h4>waiting to send</h4>
                  </div>
                </div>
              </div>
              <a href="#" target="_blank">
              </a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6" style="margin-top: 20px">
            <div class="card border-secondary">
              <div class="card-body bg-secondary text-white">
                <div class="row">
                  <div class="col-3">
                    <i class="fa fa-paper-plane fa-5x"></i>
                  </div>
                  <div class="col-9 text-right">
                    <h1>{{$sendmail}}</h1>
                    <h4>Send Acount</h4>
                  </div>
                </div>
              </div>
              <a href="#" target="_blank">
              </a>
            </div>
          </div>
        </div>
      </div>
      </div><br>
      <h2>How Many Click Details</h2>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Ip Address</th>
            <th scope="col">User Agent</th>
            <th scope="col">Visited At</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($click_details as $key=>$click_detail)
            <tr>
                <th>{{$key+1}}</th>
                <td>{{$click_detail->ip_address}}</td>
                <td>{{$click_detail->user_agent}}</td>
                <td>{{$click_detail->visited_at}}</td>
              </tr>
            @endforeach
        </tbody>
      </table>
</body>
</html>
