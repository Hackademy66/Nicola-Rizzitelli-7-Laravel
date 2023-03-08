<x-layout>

    <div class="container-fluid text-center">
        <div class="row">
            <div class="col-12">
                <img src="https://d1csarkz8obe9u.cloudfront.net/posterpreviews/youtube-channel-art-gaming-template-b591973e2892cc76cdd0d78cbd152338_screen.jpg?ts=1561539259" alt="">
            </div>
        </div>
    </div>
    <div class="container my5 text-center">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1>ESPORTS
                </h1>
                <p>Gamer paradise!</p>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-3">
                <div class="card text-center">
                    <div class="card-body">
                        <img width="60px" src="https://img.icons8.com/bubbles/50/null/girl-and-game-controller.png"/>
                        <h5 class="card-title">VIDEOGAME</h5>
                    </div>
                  </div>
            </div>
            <div class="col-12 col-md-3">
                <div class="card text-center">
                    <div class="card-body">
                        <img width="60px" src="https://img.icons8.com/external-flaticons-lineal-color-flat-icons/64/null/external-console-home-appliance-flaticons-lineal-color-flat-icons-3.png"/>
                        <h5 class="card-title">CONSOLE</h5>
                    </div>
                  </div>
            </div>
            <div class="col-12 col-md-3">
                    <div class="card text-center">
                        <div class="card-body">
                          <img width="60px" src="https://img.icons8.com/stickers/100/null/input-component.png"/>
                          <h5 class="card-title">COMPONENTS</h5>
                        </div>
                    </div>
            </div>
            <div class="col-12 col-md-3">
                    <div class="card text-center">
                        <div class="card-body">
                          <img width="60px" src="https://img.icons8.com/color-glass/48/null/sale-price-tag--v1.png"/>
                          <h5 class="card-title">SALES</h5>
                        </div>
                      </div>
            </div>
        </div>
    </div>
        <div class="container my-5">
            <div class="row">
                @foreach ($games as $game)
                    <x-card :game="$game"/>
                @endforeach
            
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col md-4">
                    <img src="https://images.everyeye.it/img-articoli/realta-virtuale-giochi-vr-attesi-2021-v8-51595.jpg" alt="">
                </div>
                <div class="col-12 col-md-6">

                </div>
            </div>
        </div>
</x-layout>
