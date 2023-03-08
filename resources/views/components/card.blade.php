<div class="col col-md-3">
    <div class="card custom-card">
        @if(!$game->cover)
            <img src="https://picsum.photos/300/200" class="img-fluid" alt="...">
        @else
            <img src="{{Storage::url($game->cover)}}" class="img-fluid" alt="...">
        @endif
 {{-- Stiamo dicendo, attraverso un ciclo if, se l'immagine non esiste allora mettimi una di
        default, altrimenti inseriscimi quella corretta. --}}
        <div class="p-2">
          <h3 class="">{{$game->title}}</h5>
          <h4 class="card-text lead my-3 fs-6">{{$game->producer}}</p>
            <p class="card-text lead my-3 fs-6">by Nicola Rizzitelli</p>
          <a href="#" class="sretched-link">Go somewhere</a>
        </div>
      </div>
</div>