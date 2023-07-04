<!doctype html>

@php
$_SESSION['lang'] = '';
    $_SESSION['lang_v'];

$langf;
if(isset($_POST["language"])){
  $lang=$_POST["language"];
      if($lang == 1){
        langeng();
        $langf = '';
        header('refresh:0');
      }else if($lang == 2){
        langsq();
        $langf = '-sq';
        header('refresh:0');
      }
  
}
echo $langf;
@endphp

<html {!! get_language_attributes() !!}>
  @include('partials.head')
  <body @php body_class() @endphp>
    @php do_action('get_header') @endphp
    @include('partials.header')
    <div class="wrap" role="document">
      <div class="content">
        <main class="main">
          @yield('content')
          
        </main>
        @if (App\display_sidebar())
          <aside class="sidebar">
            @include('partials.sidebar')
          </aside>
        @endif
      </div>
    </div>
    @php do_action('get_footer') @endphp
    @include('partials.footer')
    @php wp_footer() @endphp
    @include('partials.components.lang-switch')
  </body>
</html>
