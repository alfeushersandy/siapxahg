@extends('layouts.master')

@section('content')
<!--untuk carousel -->
<div class="container-fluid">
<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="card mt-3 bg-dark rounded-0">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-6 text-white">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                        <div class="col-sm-6">
                            <img src="https://www.petanikode.com/img/cover/bootstrap-grid.avif" class="card-img-bottom" alt="...">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="card mt-3 bg-dark rounded-0">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-6 text-white">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                        <div class="col-sm-6">
                            <img src="https://www.petanikode.com/img/cover/bootstrap-grid.avif" class="card-img-bottom" alt="...">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
  <!--card post -->
<div class="row mt-3">
    <div class="col-md-4">
        <div class="card bg-dark rounded-0 mb-2">
            <img src="https://www.petanikode.com/img/cover/bootstrap-grid.avif" class="card-img-top rounded-0 p-2" alt="...">
            <div class="card-body text-white">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
    </div>
    <div class="col-md-4">
        <div class="card bg-dark rounded-0 mb-2">
            <img src="https://www.petanikode.com/img/cover/bootstrap-grid.avif" class="card-img-top rounded-0 p-2" alt="...">
            <div class="card-body text-white">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
    </div>
    <div class="col-md-4">
        <div class="card bg-dark rounded-0 mb-2">
            <img src="https://www.petanikode.com/img/cover/bootstrap-grid.avif" class="card-img-top rounded-0 p-2" alt="...">
            <div class="card-body text-white">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
    </div>
</div>
</div>
@endsection