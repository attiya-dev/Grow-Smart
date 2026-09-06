@extends('layouts.app')

@section('content')

<style>

.community-container {
    width: 90%;
    margin: 30px auto;
}

.community-title {
    text-align: center;
    margin-bottom: 30px;
}

.community-title h1 {
    color: #173b32;
    font-size: 35px;
    margin-bottom: 10px;
}

.community-title p {
    color: #666;
    font-size: 15px;
}

.cards {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 20px;
}

.card {
    height: 330px;
    position: relative;
    border-radius: 18px;
    overflow: hidden;
    box-shadow: 0 8px 20px rgba(0,0,0,0.15);
}

.card img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.overlay {
    position: absolute;
    left: 0;
    right: 0;
    bottom: 0;
    padding: 25px;
    color: white;
    background: linear-gradient(
        transparent,
        rgba(0,0,0,0.9)
    );
}

.overlay h2 {
    font-size: 26px;
    margin-bottom: 8px;
}

.overlay p {
    font-size: 13px;
    line-height: 1.5;
    margin-bottom: 15px;
}

.btnExplore {
    display: inline-block;
    background: #39785d;
    color: white;
    text-decoration: none;
    padding: 10px 18px;
    border-radius: 25px;
    font-size: 13px;
    font-weight: bold;
}

.btnExplore:hover {
    background: #173b32;
    color: white;
}

@media (max-width: 768px) {

    .cards {
        grid-template-columns: 1fr;
    }

    .card {
        height: 380px;
    }

    .community-title h1 {
        font-size: 30px;
    }

}

@media (max-width: 500px) {

    .community-container {
        width: 92%;
    }

    .card {
        height: 350px;
    }

    .overlay {
        padding: 20px;
    }

    .overlay h2 {
        font-size: 23px;
    }

}

</style>

<div class="community-container" data-no-translate>

<div class="community-title">

    <h1>{{ is_urdu() ? 'کمیونٹی فورم' : 'Community Forum' }}</h1>

    <p>
        {{ is_urdu() ? 'سوالات پوچھیں اور زرعی ماہرین سے مفید مشورے حاصل کریں۔' : 'Ask questions and get useful advice from agricultural experts.' }}
    </p>

</div>

<div class="cards">

    <div class="card">

        <img src="{{ asset('images/community/crops.jpg') }}" alt="Crops">

        <div class="overlay">

            <h2>🌾 {{ is_urdu() ? 'فصلیں' : 'Crops' }}</h2>

            <p>
                {{ is_urdu() ? 'گندم، چاول، کپاس، گنے اور دوسری فصلوں کے بارے میں سوالات پوچھیں۔' : 'Ask questions about wheat, rice, cotton, sugarcane and other crops.' }}
            </p>

            <a href="{{ route('community.crop') }}" class="btnExplore">
                {{ is_urdu() ? 'دیکھیں →' : 'Explore →' }}
            </a>

        </div>

    </div>


    <div class="card">

        <img src="{{ asset('images/community/fruits.jpg') }}" alt="Fruits">

        <div class="overlay">

            <h2>🍎 {{ is_urdu() ? 'پھل' : 'Fruits' }}</h2>

            <p>
                {{ is_urdu() ? 'آم، سیب، مالٹے، کیلے اور دوسرے پھلوں کے بارے میں سوالات پوچھیں۔' : 'Ask questions about mango, apple, orange, banana and other fruits.' }}
            </p>

            <a href="{{ route('community.fruit') }}" class="btnExplore">
                {{ is_urdu() ? 'دیکھیں →' : 'Explore →' }}
            </a>

        </div>

    </div>


    <div class="card">

        <img src="{{ asset('images/community/vegetables.jpg') }}" alt="Vegetables">

        <div class="overlay">

            <h2>🥕 {{ is_urdu() ? 'سبزیاں' : 'Vegetables' }}</h2>

            <p>
                {{ is_urdu() ? 'ٹماٹر، آلو، پیاز، گاجر اور دوسری سبزیوں کے بارے میں مدد حاصل کریں۔' : 'Get help about tomato, potato, onion, carrot and other vegetables.' }}
            </p>

            <a href="{{ route('community.vegetable') }}" class="btnExplore">
                {{ is_urdu() ? 'دیکھیں →' : 'Explore →' }}
            </a>

        </div>

    </div>


    <div class="card">

        <img src="{{ asset('images/community/questions.webp') }}" alt="My Questions">

        <div class="overlay">

            <h2>📋 {{ is_urdu() ? 'میرے سوالات' : 'My Questions' }}</h2>

            <p>
                {{ is_urdu() ? 'اپنے سوالات، ان کی صورتحال اور زرعی ماہرین کے جوابات دیکھیں۔' : 'See your questions, their status and replies from agricultural experts.' }}
            </p>

            <a href="{{ route('my.questions') }}" class="btnExplore">
                {{ is_urdu() ? 'دیکھیں →' : 'View →' }}
            </a>

        </div>

    </div>

</div>

</div>

@endsection
