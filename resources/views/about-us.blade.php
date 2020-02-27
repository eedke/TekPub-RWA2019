@extends('layouts.app')

@section('content')

    <div class="container border-warning">
        <div class="row justify-content-center border-warning">
            <h1 style="color:#ffcc00">About Us</h1>
            <div class="card w-100 mb-2 border-warning">
                <div class="card bg-dark border-warning">
                    <div class="card-body text-secondary border-warning">
                        <h5 class="card-title" style="color:#ffcc00">Project: TekPub</h5>
                        <h5 class="card-title" style="color:#ffcc00">Email: tekpub2019@gmail.com</h5>
                        <h5 class="card-title" style="color:#ffcc00">GitHub: <a href="https://github.com/eedke/TekPub-RWA2019" class="text-warning">TekPub-RWA2019</a></h5>
                    </div>
                </div>
            </div>
        </div>

    <div class="container">
        <div class="row">

            <div class="col-sm-6 col-md-4">
                <div class="card-deck">
                    <div class="card bg-dark border-warning mb-3" style="height:31rem">
                        <img class="card-img-top bg-warning" style="border: 2px solid #ffcc00" src="https://pngimage.net/wp-content/uploads/2018/05/default-user-profile-image-png-6.png" alt="Tvrtko">
                        <div class="card-body">
                            <h3 class="card-title text-warning">Tvrtko</h3>
                            <p class="card-text"><span style="color:#ffcc00; ">30%</span></p>
                            <div class="card-footer bg-transparent border-warning"
                                 style=" position:absolute; bottom:0px; left:0; width:100%; height:60px;">
                                <a href="https://github.com/MorgothMelkor" class="text-warning"><span style="color:#ffcc00">github.com/MorgothMelkor</span><i class="fab fa-2x fa-github float-right" style="color:#ffcc00"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="card-deck">
                    <div class="card bg-dark border-success mb-3" style="height:31rem">
                        <img class="card-img-top bg-success" style="border: 2px solid #00C200" src="https://pngimage.net/wp-content/uploads/2018/05/default-user-profile-image-png-6.png" alt="Edo">
                        <div class="card-body">
                            <h3 class="card-title text-success">Edo</h3>
                            <p class="card-text"><span style="color:#00C200; ">37%</span></p>
                            <div class="card-footer bg-transparent border-success"
                                 style=" position:absolute; bottom:0px; left:0; width:100%; height:60px;">
                                <a href="https://github.com/eedke" class="text-success"><span style="color:#00c200">github.com/eedke</span><i class="fab fa-2x fa-github float-right" style="color:#00a500"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="card-deck">
                    <div class="card bg-dark border-danger mb-3" style="height:31rem">
                        <img class="card-img-top bg-danger" style="border: 2px solid red" src="https://pngimage.net/wp-content/uploads/2018/05/default-user-profile-image-png-6.png" alt="Kreso">
                        <div class="card-body">
                            <h3 class="card-title text-danger">Kreso</h3>
                            <p class="card-text"><span style="color:red; ">33%</span></p>
                            <div class="card-footer bg-transparent border-danger"
                                 style=" position:absolute; bottom:0px; left:0; width:100%; height:60px;">
                                <a href="https://github.com/kresocuk" class="text-danger"><span style="color:red">github.com/kresocuk</span><i class="fab fa-2x fa-github float-right" style="color:red"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    @endsection

