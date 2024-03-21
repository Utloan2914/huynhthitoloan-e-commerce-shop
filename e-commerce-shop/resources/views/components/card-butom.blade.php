@extends('home')
@section('card-butom')
    <div class="pt-5"></div>
    <hr>
    <div class="d-flex">
        <h5>Deal of the Day | </h5>
        <h5 style="padding-left: 20px;color:red">11:12:00</h5>
        <p class="pp">Views all deal</p>
    </div>
    <div class="pt-3"></div>
    <div class='d-flex'>
        @foreach ($images as $item)
            <div class="card" style="width:15rem;margin-left:1.5rem;border:none">
                <img class="card-img-top" src="{{$item['image']}}"
                alt="Card image cap" style="width:200px; height:200px; object-fit: cover;border:none">
                <div class="card-body">
                    <h6>{{$item['name']}}</h6>
                    <div class=d-flex>
                        <p class="card-text">{{$item['price']}} | </p>
                        <p class="card-text">{{$item['discount']}}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
