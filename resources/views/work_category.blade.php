@extends('layouts.main')

@section('main_layout')

<section aria-label="title page" class="flex justify-center">
  <div class="container flex justify-center py-[16px]">
    <h1 class="font-spaceGrotesk font-[600] text-[32px]">{{ $title }}</h1>
  </div>
</section>

<form action="/work_category" class="flex justify-center">
<div class="container flex justify-center py-[16px]">
<input type="text" aria-describedby="helper-text-explanation" class="w-[40%] h-[28px] rounded-[4px] bg-mChili text-center text-mWhite" placeholder="search...">
</div>
</form>


@if ($projects->count())

<article aria-label="content" class="flex justify-center">
  <div class="container py-[20px] flex flex-col items-center justify-center border-[1px]">
    <h2 class="font-spaceGrotesk font-[600] text-[20px]">{{ $projects[0]->title }}</h2>
    <p>By <a href="/author/{{ $projects[0]->writer->username }}">{{ $projects[0]->writer->username }}</a> In <a href="/work_category/{{ $projects[0]->category->slug }}">{{ $projects[0]->category->name }}</a></p>
    <picture class="">
    <img src="" alt="" title="This My Work" class="w-[288] h-[320] border-[1px]">
    </picture>
    <p class="text-[14px] text-center">{!! $projects[0]->description !!}</p>
    <p class="font-[400px] text-[12px]">{{ $projects[0]->created_at->diffForHumans() }}</p>
  </div>
</article>


@foreach ($projects->skip(1) as $project)

<article aria-label="content" class="flex justify-center">
  <div class="container py-[20px] flex flex-col items-center justify-center border-[1px]">
    <h2 class="font-spaceGrotesk font-[600] text-[20px]">{{ $project->title }}</h2>
    <p>By <a href="/author/{{ $project->writer->username }}">{{ $project->writer->username }}</a> In <a href="/work_category/{{ $project->category->slug }}">{{ $project->category->name }}</a></p>
    <picture class="">
    <img src="" alt="" title="This My Work" class="w-[288] h-[320] border-[1px]">
    </picture>
    <p class="text-[14px] text-center">{!! $project->description !!}</p>
  </div>
</article>

@endforeach

<section class="flex justify-center">
  <div class="container">
    <a href=""><p>Next Project</p><button>Arrow</button></a>
  </div>
</section>

@else

<p class="text-[20px]">No Post Found.</p>

@endif

@endsection