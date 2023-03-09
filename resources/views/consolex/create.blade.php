<x-layout>
    <div class="container my5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <form class="p-5 shadow" method="POST" action="{{route('consolex.store')}}" enctype="multipart/form-data">
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
                      <label for="name" class="form-label">Name console</label>
                      <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}"> 
                    </div>
                    <div class="mb-3">
                        <label for="brand" class="form-label">Brand</label>
                        <input type="text" name="brand" class="form-control" id="brand" value="{{ old('brand') }}">
                    </div>
                    <div class="mb-3">
                        <label for="logo" class="form-label">Logo</label>
                        <input type="file" name="logo" class="form-control" id="logo" >
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Little description</label>
                        <textarea name="description" id="description" cols="30" rows="7" class="form-control">{{ old('description') }}</textarea>
                    </div>
                        <button type="submit" class="btn btn-primary">Add console</button>
                        <a href="{{route('homepage')}}" class="btn btn-outline-main">Back home</a>
                </form> 
            </div>
        </div>
    </div>
</x-layout>