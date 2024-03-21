@section('layout-left')
<div class="col-3 nav-left">
    @foreach ($items as $item)
        <h6>{{$item['name']}}</h6>
        <hr>
    @endforeach
</div>
@endsection
