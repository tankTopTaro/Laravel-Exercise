@extends('layouts.app')

@section('content')
<div class="container bg-dark text-light">
    <div class="row align-items-center">
        <div class="col-2 p-2">
            <img class="rounded-circle" src="https://res.cloudinary.com/delgya5vj/image/upload/c_fill,g_face,w_150,h_150,r_max/v1676732824/doggos/IMG20230123100849_usa2a9.jpg"  alt="a dog" style="height: 10em; width:10em" />
        </div>
        <div class="col-8" style="margin-left: 2.5em">
            <div>
                <h1 class="text-slate-400">Sober's Blog</h1>
            </div>
            <div class="d-flex align-items-center gap-3">
                <div><strong>50</strong> Post</div>
                <div><strong>20k</strong> Followers</div>
                <div><strong>100k</strong> Following</div>
            </div>
            <div class="pt-2"><p style="color:red;">@ {{ Auth::user()->username }}<p></div>
            <div class=""><p>Nothing is real, everything is permitted</p></div>
            <div class=""><a target="_blank" href="https://tanktoptaro.github.io/" class="">Kevin Page</a></div>

        </div>
    </div>
    <div class="row">
        <div class="col-4">
            <img src="https://source.unsplash.com/1600x900/?dog" alt="dog" class="w-100 pt-5">
        </div>
        <div class="col-4">
            <img src="https://source.unsplash.com/1600x900/?cat" alt="cat" class="w-100 pt-5">
        </div>
        <div class="col-4">
            <img src="https://source.unsplash.com/1600x900/?bird" alt="bird" class="w-100 pt-5">
        </div>
    </div>
</div>
@endsection

