@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8">
            <img class="w-100" src="/storage/{{ $post->image }}" alt="">
        </div>
        <div class="col-4">
            <div class="d-flex align-items-center">
                <div  class="pr-2">
                    <img src="{{ $post->user->profile->profileImage() }}" alt="" class="rounded-circle w-100" style="max-width: 50px">
                </div>
                <div>
                    <div class='font-weight-bold'>
                        <a href="/profile/{{ $post->user->id }}">
                            <span class='text-dark'>{{ $post->user->username }}</span>
                        </a> |
                        <a href="#" class="pl-3">Follow</a>
                    </div>
                </div>      
            </div>

            <hr>

            <div class="pt-2">
                <div>
                    <span class='font-weight-bold'>
                        <a href="/profile/{{ $post->user->id }}">
                            <span class='text-dark'>{{ $post->user->username }}</span>
                        </a>
                    </span> 
                    {{ $post->caption }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection