@php
$_SESSION['lang'] = '';
$_SESSION['lang_v'];
   if(isset($_POST["language"])){
       $lang=$_POST["language"];
      if($lang == 1){
        $_SESSION['lang'] = '';
        $_SESSION['lang_v'] = 1;
        header("Refresh:0");
      }else if($lang == 2){
        $_SESSION['lang'] = '-sq';
        $_SESSION['lang_v'] = 2;
        header("Refresh:0");
      }
   }
@endphp

<!doctype html>
<html {!! get_language_attributes() !!}>
  @include('partials.head')
  <body @php body_class() @endphp>
    @php do_action('get_header') @endphp
    @include('partials.header')
    <div class="wrap" role="document">
      <div class="content">
        <main class="main">
          @yield('content')
          @include('partials.components.lang-switch')
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
  </body>
</html>
