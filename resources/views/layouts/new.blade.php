<!doctype html>
<html {!! get_language_attributes() !!}>
  @include('partials.new-head')
  <body @php body_class() @endphp>
    @include('partials.new-nav')
    @include('partials.new-hero')
    @include('partials.new-strapline')
    @include('partials.new-content')
    @include('partials.new-footer-cta')
    @include('partials.new-footer')
  </body>
</html>