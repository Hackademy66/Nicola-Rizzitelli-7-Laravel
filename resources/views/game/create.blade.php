<x-layout>
    <div class="container my5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <form class="p-5 shadow" method="POST" action="{{route('game.store')}}" enctype="multipart/form-data">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @csrf
                    <div class="mb-3">
                      <label for="title" class="form-label">Title videogame</label>
                      <input type="text" name="title" id="name" class="form-control" value="{{ old('title') }}"> 
                    </div>
                    <div class="mb-3">
                        <label for="producer" class="form-label">Producer</label>
                        <input type="text" name="producer" class="form-control" id="producer" value="{{ old('producer') }}">
                    </div>
                    <div class="mb-3">
                        <label for="cover" class="form-label">Image</label>
                        <input type="file" name="cover" class="form-control" id="cover" >
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Little description</label>
                        <textarea name="description" id="description" cols="30" rows="7" class="form-control">{{ old('description') }}</textarea>
                    </div>
                        <button type="submit" class="btn btn-primary">Add videogame</button>
                        <a href="{{route('homepage')}}" class="btn btn-outline-main">Back home</a>
                </form> 
            </div>
        </div>
    </div>
</x-layout>