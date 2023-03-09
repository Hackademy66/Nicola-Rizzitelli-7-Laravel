<x-layout>

    <div class="container">
        <div class="row">
            <div class="col-12 col-md-10">

            </div>
        </div>
    </div>

        <div class="container my-5">
            <div class="row">
                    <div class="col col-md-3">
                        <div class="card custom-card">
                            @if(!$consolex->logo)
                                <img src="https://picsum.photos/300/200" class="img-fluid" alt="...">
                            @else
                                <img src="{{Storage::url($consolex->logo)}}" class="img-fluid" alt="...">
                             @endif
                            <div class="p-2">
                                <h3 class="">{{$consolex->name}}</h5>
                                <h4 class="card-text lead my-3 fs-6">{{$consolex->brand}}</p>
                                <p class="card-text lead my-3 fs-6">by Nicola Rizzitelli</p>
                                <p class="card-text my-3">{{$consolex->description}}</p>
                                <a href="{{route('consolex.index')}}" class="sretched-link">Back home</a>
                        </div>
                      </div>
                    </div>
            </div>
        </div>
</x-layout>
