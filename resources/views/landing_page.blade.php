<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    
{{-- CSS saya --}}
    <style>
      section{
         min-height: 300px;
         margin-bottom: 3px
      };
    </style>

    <title>My Portofolio</title>
  </head>
  <body class="mt-5 mb-5">
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
    <div class="container col-12">
            <a class="navbar-brand" href="#">My Portofolio</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <div class="navbar-nav">
                <a class="nav-item nav-link active" href="#home">Home <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link" href="#about">About</a>
                <a class="nav-item nav-link" href="#portofolio">Portofolio</a>
                <a class="nav-item nav-link" href="#kontak">Kontak</a>
              </div>
            </div>
    </div>
      </nav>

      <div class="jumbotron jumbotron-fluid" id="home">
        <div class="container text-center">
            <img src="{{asset('image/avatar.png')}}" width="25%" class="rounded-circle img-thumbnail">
            @foreach ($biodatakus as $biodataku)
          <h1 class="display-4 mt-2">{{ $biodataku->nama}}</h1>
          @endforeach
          <p class="lead" style="font-size:26px">Welcome to My Portofolio.</p>
        </div>
      </div>
      

      <section id="about" class="about">
        <div class="container">
          <div class="row">
              <div class="col text-center ">
                  <h1>About</h1>
              </div>
              <div class="row mt-2 justify-content-center">
                  <div class="col-md-6 ">
                      <div class="card shadow">
                        @foreach($tentangs as $tentang)
                          <p class="text-justify mx-2 my-2">{{$tentang->tentang1}}</p>
                          @endforeach
                      </div>
                     
                     
                  </div>
                  <div class="col-md-6">
                      <div class="card shadow">
                        @foreach($tentangs as $tentang)
                      <p class="text-justify mx-2 my-2">{{$tentang->tentang2}}</p>
                      @endforeach
                  </div>
                  </div>
              </div>
          </div>
        </div>
      </section>


      <section id="portofolio" class="portofolio bg-light">

        <div class="container col-10  ">
          <div class="row">
              <div class="col text-center pt-3">
                  <h1>Portofolio</h1>
              </div>
          </div>
  
          <div class="row mt-3">
                  <div class="col-md mb-3">
                      <div class="card" style="width: 18rem;">
                          <img class="card-img-top" src="{{asset('image/1.jpg')}}" alt="Card image cap">
                          <div class="card-body">
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          </div>
                      </div>
                  </div>
                  <div class="col-md mb-3">
                      <div class="card" style="width: 18rem;">
                          <img class="card-img-top" src="{{asset('image/2.jpg')}}" alt="Card image cap">
                          <div class="card-body">
                          <p class="card-text">Harga : Rp. 25000 <br> deskipsi barang : <br> Baik dan bagus</p>
                          </div>
                      </div>
                  </div>
                  <div class="col-md mb-3">
                      <div class="card" style="width: 18rem;">
                          <img class="card-img-top" src="{{asset('image/3.jpg')}}" alt="Card image cap">
                          <div class="card-body">
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          </div>
                      </div>
                  </div>
                  <div class="col-md mb-3">
                      <div class="card" style="width: 18rem;">
                          <img class="card-img-top" src="{{asset('image/3.jpg')}}" alt="Card image cap">
                          <div class="card-body">
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          </div>
                      </div>
                  </div>
                  <div class="col-md mb-3">
                      <div class="card" style="width: 18rem;">
                          <img class="card-img-top" src="{{asset('image/2.jpg')}}" alt="Card image cap">
                          <div class="card-body">
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          </div>
                      </div>
                  </div>
                  <div class="col-md mb-3">
                      <div class="card" style="width: 18rem;">
                          <img class="card-img-top" src="{{asset('image/1.jpg')}}" alt="Card image cap">
                          <div class="card-body">
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          </div>
                      </div>
                  </div>
                  <div class="col-md mb-3">
                      <div class="card" style="width: 18rem;">
                          <img class="card-img-top" src="{{asset('image/1.jpg')}}" alt="Card image cap">
                          <div class="card-body">
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          </div>
                      </div>
                  </div>
          </div>
        </div>
      </section>

      <section id="kontak" class="kontak">
        <div class="container">
          <div class="row mb-4">
            <div class="col text-center pt-3">
              <h1>Kontak Saya</h1>
          </div>
          </div>

          <div class="row justify-content-center">
            <div class="col-lg-4">
              <div class="card text-white bg-primary mb-3 text-center">
                <div class="card-body">
                  @foreach ($biodatakus as $biodataku)
                  <h5 class="card-title">Alamat</h5>
                  <p class="card-text">{{$biodataku->alamat}}</p>
                </div>
              </div>
              
              <ul class="list-group">
              
                <li class="list-group-item"> <h2>Kontak Lengkap</h2></li>
                <li class="list-group-item">Wa : {{$biodataku->wa}}</li>
                <li class="list-group-item">IG : {{$biodataku->ig}}</li>
                <li class="list-group-item">Github : {{$biodataku->github}}</li>
                @endforeach
   
              </ul>

            </div>
            <div class="col-lg-8">
              <div class="col card-header mb-4">
                <h2>Kirim Pesan Anda</h2>
              </div>
              <div class="col">
                <form>
                  <div class="form-group">
                    <label for="formGroupExampleInput">Nama </label>
                    <input type="text" name="nama" class="form-control" id="formGroupExampleInput" placeholder="Nama Anda">
                  </div>
                  <div class="form-group">
                    <label for="formGroupExampleInput2">No HP/WA</label>
                    <input type="text" name="nohp" class="form-control" id="formGroupExampleInput2" placeholder="No hp atau WA">
                  </div>
                  <div class="form-group">
                    <label for="formGroupExampleInput2">Email</label>
                    <input type="email" name="email" class="form-control" id="formGroupExampleInput2" placeholder="Email">
                  </div>
                  <div class="form-group">
                    <label for="formGroupExampleInput2">Pesan</label>
                    <textarea name="pesan" id="" class="form-control"></textarea>
                  </div>
                  <div class="float-left">
                    <button type="button" class="btn btn-success">Kirim</button>
                  </div>
                </form>
              </div>
             
            </div>
          </div>
        </div>
      </section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>