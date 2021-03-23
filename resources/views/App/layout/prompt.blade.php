@if(session('error'))
    <div class="alert alert-danger" role="alert">
        <a href="#" class="alert-link"><h2>{{session('error')}}</h2></a>
    </div>
@endif
@if(session('success'))
    <div class="alert alert-success" role="alert">
        <a href="#" class="alert-link"><h2>{{session('success')}}</h2></a>
    </div>
@endif
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif