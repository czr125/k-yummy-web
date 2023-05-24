@extends('layouts.main')

@section('title', 'Menu')

@section('content')

<div class="container-fluid d-flex flex-wrap">
    <div id="plates-container" class="col-md-12">
    <h2>Apetizers and Sides</h2>
    <h5>애피타이저와 사이드</h5>
        <div id="cards-container" class="row cards-container">
            <div class="card col-sm-3">
            <img src="/img/imgmenu_apetizer/dumpling.jpg" alt="Mandu Korean Dumplings"> 
                <div class="card-body">
                <h4 class="card-price">$9.90</h4>
                <p class="card-name">Mandu Korean Dumplings </p>
                <p class="card-subtitle">만두 만두</p>
                <p class="card-description">Made with a thin wheat flour wrapper that is filled with a mixture of ground meat (such as pork or beef), 
                vegetables (such as cabbage, onion, and garlic), and seasonings (such as soy sauce and sesame oil).</p>
                <a href="/delivery" class="btn btn-primary">Delivery Now</a>
                </div>       
            </div>
            <div class="card col-sm-3">
            <img src="/img/imgmenu_apetizer/kimchi.jpg" alt="Kimchi"> 
                <div class="card-body">
                <h4 class="card-price">$8.90</h4>
                <p class="card-name">Kimchi</p>
                <p class="card-subtitle">김치</p>
                <p class="card-description">Kimchi-Jeon made of salted and fermented vegetables, typically cabbage, 
                along with a spicy seasoning paste made from chili flakes, garlic, ginger, and other seasonings.</p>
                <br>
                <a href="/delivery" class="btn btn-primary">Delivery Now</a>
                </div>       
            </div>
            <div class="card col-sm-3">
            <img src="/img/imgmenu_apetizer/sweet-meatballs.jpg" alt="Sweet Gochujang Meatballs">
                <div class="card-body">
                <h4 class="card-price">$7.90</h4>
                <p class="card-name">Sweet Gochujang Meatballs</p>
                <p class="card-subtitle">달콤한 고추장 미트볼</p>
                <p class="card-description">Sweet Gochujang Meatballs, Sweet and spicy Korean Meatballs flavored with lean ground beef, gochujang, and tons of fresh garlic and ginger.</p>
                <br>
                <a href="/delivery" class="btn btn-primary">Delivery Now</a>
                </div>       
            </div>
            <div class="card col-sm-3">
            <img src="/img/imgmenu_apetizer/pajeon.jpg" alt="Pajeon">
                <div class="card-body">
                <h4 class="card-price">$6.90</h4>
                <p class="card-name">Pajeon</p>
                <p class="card-subtitle">파전</p>
                <p class="card-description">Come with a variety of fillings, including kimchi, potato, beef, pork, and shellfish.</p>
                <br> <br>
                <a href="/delivery" class="btn btn-primary">Delivery Now</a>
                </div>       
            </div>
            <div class="card col-sm-3">
            <img src="/img/imgmenu_apetizer/glimbap.jpg" alt="Glimbap">
                <div class="card-body">
                <h4 class="card-price">$7.90</h4>
                <p class="card-name">Glimbap</p>
                <p class="card-subtitle">글림밥</p>
                <p class="card-description">Consists of cooked rice and various fillings (such as vegetables, meat, and egg) rolled in sheets of dried seaweed with sliced lemon on top.</p>
                <br>
                <a href="/delivery" class="btn btn-primary">Delivery Now</a>
                </div>       
            </div>
        </div>
    <h2>Main Dishes</h2>
    <h5>메인 요리</h5>
        <div id="cards-container" class="row cards-container">
            <div class="card col-md-3">
            <img src="/img/imgmenu_main/japchae.png" alt="Japchae"> 
                <div class="card-body">
                <h4 class="card-price">$15.90</h4>
                <p class="card-name">Japchae</p>
                <p class="card-subtitle">잡채</p>
                <p class="card-description">Sweet potato starch noodles, vegetables, and meat, seasoned with soy sauce and sesame oil.</p>
                <br> <br>
                <a href="/delivery" class="btn btn-primary">Delivery Now</a>
                </div>       
            </div>
            <div class="card col-md-3">
            <img src="/img/imgmenu_main/bimbimbap.png" alt="Bimbimbap"> 
                <div class="card-body">
                <h4 class="card-price">$17.90</h4>
                <p class="card-name">Bibimbap</p>
                <p class="card-subtitle">비빔밥</p>
                <p class="card-description">Vibrant bowl of mixed rice topped with an assortment of seasoned vegetables, including carrots, spinach, mushrooms, bean sprouts, and pickled radishes, along with a choice of meat or tofu, and a fried egg.</p>
                <a href="/delivery" class="btn btn-primary">Delivery Now</a>
                </div>       
            </div>
            <div class="card col-md-3">
            <img src="/img/imgmenu_main/dakdageong.png" alt="Dakgangjeong"> 
                <div class="card-body">
                <h4 class="card-price">$13.90</h4>
                <p class="card-name">Dakgangjeong</p>
                <p class="card-subtitle">닭강정</p>
                <p class="card-description">Roasted chicken thighs with bell peppers, onions; sweet and sour glaze made from honey, soy sauce, rice vinegar, and ketchup; served with rice or noodles.</p>
                <br>
                <a href="/delivery" class="btn btn-primary">Delivery Now</a>
                </div>       
            </div>
            <div class="card col-md-3">
            <img src="/img/imgmenu_main/tofusoup.jpg" alt="Soondubu Jjigae"> 
                <div class="card-body">
                <h4 class="card-price">$12.90</h4>
                <p class="card-name">Soondubu Jjigae</p>
                <p class="card-subtitle">순두부찌개</p>
                <p class="card-description">Made with soft tofu, vegetables, and chicken. The broth base is made with a combination of anchovy broth, gochugaru (Korean chili flakes), and soy sauce.</p>
                <br>
                <a href="/delivery" class="btn btn-primary">Delivery Now</a>
                </div>       
            </div>
            <div class="card col-md-3">
            <img src="/img/imgmenu_main/giubimpab.jpg" alt="Giubimpab"> 
                <div class="card-body">
                <h4 class="card-price">$22.90</h4>
                <p class="card-name">Giubimpab</p>
                <p class="card-subtitle">주빔밥</p>
                <p class="card-description">Made with instant noodles, boiled eggs and various vegetables, such as carrots and green onions.</p>
                <br><br>
                <a href="/delivery" class="btn btn-primary">Delivery Now</a>
                </div>       
            </div>        
        </div>
    <h2>Desserts</h2>
    <h5>디저트</h5>
        <div id="cards-container" class="row cards-container">
            <div class="card col-md-3">
            <img src="/img/imgmenu_desserts/bear.jpg" alt="Bear Stick"> 
                <div class="card-body">
                <h4 class="card-price">$4.90</h4>
                <p class="card-name">Bear Stick</p>
                <p class="card-subtitle">베어 스틱</p>
                <p class="card-description">Filled with a sweet honey butter cream and topped with a drizzle of honey.</p>
                <br><br>
                <a href="/delivery" class="btn btn-primary">Delivery Now</a>
                </div>       
            </div>
        </div>
    <h2>Drinks</h2>
    <h5>음료수</h5>
        <div id="cards-container" class="row cards-container">
            <div class="card col-md-3">
            <img src="/img/ibimbimbap.jpg" alt=""> 
                <div class="card-body">
                <h4 class="card-price"></h4>
                <p class="card-name"></p>
                <p class="card-description"></p>
                <a href="/delivery" class="btn btn-primary">Delivery Now</a>
                </div>       
            </div>
        </div>
    </div>
</div>



@endsection