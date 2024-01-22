@extends('layout')

@section('content')
    
    <div class="jumbotron">
        
        <img src="{{ asset('images/jumbotron.jpg') }}" class="img-fluid" alt="Jumbotron Image">
        
    </div>

    
    <div class="bg-dark text-white py-5">
        <div class="container">
            
            <button class="btn btn-primary mt-3">LOAD MORE</button>
        </div>
    </div>

   

    
    <div class="bg-info text-white py-5">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <!-- Logo 1 -->
                <div class="d-flex align-items-center">
                    <img src="images/buy-comics-digital-comics.png" alt="Logo 1" class="img-fluid" style="max-width: 60px; margin-right: 5px;">
                    <p class="text-white">Digital comics</p>
                </div>
    
                <!-- Logo 2 -->
                <div class="d-flex align-items-center">
                    <img src="images/buy-comics-merchandise.png" alt="Logo 2" class="img-fluid" style="max-width: 60px; margin-right: 5px;">
                    <p class="text-white">Merchandise</p>
                </div>
    
                <!-- Logo 3 -->
                <div class="d-flex align-items-center">
                    <img src="images/buy-comics-shop-locator.png" alt="Logo 3" class="img-fluid" style="max-width: 60px; margin-right: 5px;">
                    <p class="text-white">Shop locator</p>
                </div>
    
                <!-- Logo 4 -->
                <div class="d-flex align-items-center">
                    <img src="images/buy-comics-subscriptions.png" alt="Logo 4" class="img-fluid" style="max-width: 60px; margin-right: 5px;">
                    <p class="text-white">subscriptions</p>
                </div>

                <!-- Logo 5 -->
                <div class="d-flex align-items-center">
                    <img src="images/buy-dc-power-visa.svg" alt="Logo 5 " class="img-fluid" style="max-width: 60px; margin-right: 5px;">
                    <p class="text-white">DC power visa</p>
                </div>
            </div>
        </div>
    </div>

   
<div class="custom-section">
    <div class="container-fluid">
        
        <div class="bg-image" style="background-image: url('images/footer-bg.jpg');">
            <div class="row">
                <!-- Lista 1 -->
                <ul class="list-unstyled col-md-4 mb-0 text-white mt-4">
                    <li>comics</li>
                    <li>comics</li>
                    <li>comics</li>
                </ul>

                <!-- Lista 2 -->
                <ul class="list-unstyled col-md-4 mb-0 text-white mt-4">
                    <li>comics</li>
                    <li>comics</li>
                    <li>comics</li>
                </ul>

                <!-- Lista 3 -->
                <ul class="list-unstyled col-md-4 mb-0 text-white mt-4">
                    <li>comics</li>
                    <li>comics</li>
                    <li>comics</li>
                </ul>
            </div>
        </div>
    </div>
</div>


    

@endsection

<style>
    
    .bg-image {
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        height: 50%; 
    }
    .custom-section {
        margin-left: 0;
        margin-right: 0;
    }
    
   
</style>
