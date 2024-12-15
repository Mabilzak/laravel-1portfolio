@extends('layouts.main')

@section('main_layout')

<section aria-label="title page" class="flex justify-center">
  <div class="container flex justify-center py-[16px]">
    <h1 class="font-spaceGrotesk font-[600] text-[32px]">{{ $username }} List</h1>
  </div>
</section>

@foreach ($posts as $post)

<article aria-label="content" class="flex justify-center">
  <div class="container py-[20px] flex flex-col items-center justify-center border-[1px]">
    <h2 class="font-spaceGrotesk font-[600] text-[20px]">{{ $post->title }}</h2>
    <picture class="">
    <img src="" alt="" title="This My Work" class="w-[288] h-[320] border-[1px]">
    </picture>
    <p class="text-[14px] text-center">{!! $post->description !!}</p>
  </div>
</article>

@endforeach

<section class="flex justify-center">
  <div class="container">
    <a href=""><p>Next Project</p><button>Arrow</button></a>
  </div>
</section>

@endsection