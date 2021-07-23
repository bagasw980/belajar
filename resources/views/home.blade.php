<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Covid-19</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            @foreach ($provinsi as $item)
            <div class="mt-4">
                <div class="card text-center bg-secondary text-white">
                    <div class="card-header">
                        <h5 class="card-title">{{$item['attributes']['Provinsi']}}</h5>
                    </div>
                    <div class="card-body">
                      <div class="row d-flex justify-content-around">
                          <div class="col-md-4 mt-3">
                              <div class="card text-center text-white bg-primary">
                                  <div class="card-body">
                                  <h5 class="card-title">Kasus Positif</h5>
                                  <p class="card-text">{{$item['attributes']['Kasus_Posi']}}</p>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-4 mt-3">
                              <div class="card text-center text-white bg-primary">
                                  <div class="card-body">
                                  <h5 class="card-title">Kasus Sembuh</h5>
                                  <p class="card-text">{{$item['attributes']['Kasus_Semb']}}</p>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-4 mt-3">
                              <div class="card text-center text-white bg-primary">
                                  <div class="card-body">
                                  <h5 class="card-title">Kasus Meninggal</h5>
                                  <p class="card-text">{{$item['attributes']['Kasus_Meni']}}</p>
                                  </div>
                              </div>
                          </div>
                      </div>
                    </div>
                    {{-- <div class="card-footer text-muted">
                      2 days ago
                    </div> --}}
                </div>
            </div>
            @endforeach
        </div>
    </div>
</body>
</html>