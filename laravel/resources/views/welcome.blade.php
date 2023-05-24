@extends('layouts.main')

@section('title', 'K-Yummy')

@section('content')
<div class="carousel">
    <div id="carouselExampleFade" class="carousel slide carousel-fade">
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="\img\imgwelcome_carr\K-Yummy.png" class="d-block w-100">
            </div>
            <div class="carousel-item">
            <img src="\img\imgwelcome_carr\K-Yummy2.png" class="d-block w-100">
            </div>
            <div class="carousel-item">
            <a href="/menu"><img src="\img\imgwelcome_carr\K-Yummy3.png" class="d-block w-100"></a>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

<div id="aboutus">
    <div class="clearfix">
    <img src="\img\imgwelcome_about\restaurant.jpg" class="col-md-6 float-md-end mb-3 ms-md-3">
    <h2>About Us</h2>
    <h5>우리에 대해</h5>
    <p>
         In 2005, a young Korean immigrant by the name of Lee decided to bring the flavors of her homeland to a small town in America. 
        <br> With a passion for cooking and a dream to share her culture with others, she opened the doors to her very own restaurant.        
        <br><br>
         At first, the restaurant struggled to attract customers. Many locals were unfamiliar with Korean cuisine and hesitant to try something new. <br> But Lee persevered, determined to show the town the beauty and complexity of Korean flavors.
    </p>

    <p>
        Slowly but surely, word began to spread. Customers who dared to try Lee's dishes were blown away by the explosion of flavors in each bite. <br> Soon, the restaurant became a local favorite, drawing in both Korean expats and curious foodies alike.
    </p>

    <p>
        Over the years, the restaurant has expanded, with new dishes added to the menu and a loyal customer base that keeps coming back for more. <br> But at its core, it remains a labor of love for Lee and her family, who continue to pour their hearts and souls into each dish they serve.
    </p>

    <p>
        Today, the restaurant stands as a testament to the power of perseverance and the magic of food to bring people together. <br> Come and taste the history and heart behind every dish at our beloved Korean restaurant, founded in 2005.
    </p>
    </div>
</div>

<div id="ourteam">
    <h2>Our Chefs</h2>
    <h5>우리 셰프들</h5>
    <div class="container-fluid d-flex flex-wrap">
        <div id="ourteam-container" class="col-md-12">
            <div id="cards-container" class="row cards-container">
                <div class="card col-sm-3">
                    <div class="card-body">
                    <img src="\img\imgwelcome_ourteam\jin.jpg" alt="">
                    <p class="card-ourteamname">Kim Seok Jin</p>
                    <p class="card-ourteamsub">김석진</p>
                    </div>
                </div>
                <div class="card col-sm-3">
                    <div class="card-body">
                    <img src="\img\imgwelcome_ourteam\jung.jpg" alt="">
                    <p class="card-ourteamname">Jeon Jung Kook</p>
                    <p class="card-ourteamsub">전 정국</p>
                    </div>
                </div>
                <div class="card col-sm-3">
                    <div class="card-body">
                    <img src="\img\imgwelcome_ourteam\namjoon.jpg" alt="">
                    <p class="card-ourteamname">Kim Nam Joon </p>
                    <p class="card-ourteamsub">김남준</p>
                    </div>
                </div>
                <div class="card col-sm-3">
                    <div class="card-body">
                    <img src="\img\imgwelcome_ourteam\taeh.jpg" alt="">
                    <p class="card-ourteamname">Kim Tae Hyung </p>
                    <p class="card-ourteamsub">김태형</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>      

<div id="place">
    <div class="clearfix">
    <br>
    <h2> <ion-icon name="navigate-outline"></ion-icon> Where we are</h2>
    <h5>우리가 있는 곳</h5>
    </div>
    <p>123 Main Street</p>
    <p>Anytown, USA</p>
</div>
@endsection
