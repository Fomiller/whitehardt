@extends('layouts.new')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')
    @include('partials.content-page')
    blahhhhhhhhhh
  @endwhile
@endsection
