<x-layout>
    <div class="container my5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <form class="p-5 shadow" method="POST" action="{{route('register')}}" enctype="multipart/form-data">
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
                      <label for="name" class="form-label">User name</label>
                      <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}"> 
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control" id="email" value="{{ old('email') }}">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="password" >
                    </div>
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Confirm Password</label>
                        <input type="password_confirmation" name="password_confirmation" class="form-control" id="password_confirmation" >
                    </div>
                        <button type="submit" class="btn btn-primary">Sign up</button>
                        <a href="{{route('homepage')}}" class="btn btn-outline-main">Back home</a>
                </form> 
            </div>
        </div>
    </div>
</x-layout>