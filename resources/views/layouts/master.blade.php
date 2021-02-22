<!DOCTYPE html>
<html lang="en">
@include('layouts.meta')
<body>
<div class="boxed-container">
    <header class="header" role="banner">
        @include('layouts.info_header')
        <div class="sticky-offset  js-sticky-offset"></div>
        @include('layouts.nav_header', ['pages' => $pages])
    </header>
    @include('layouts.carousel')
</div>

<div class="master-container">
    <div class="container">
        <div class="row">
            @yield('content')
        </div>
    </div>
</div>

@include('layouts.footer')

</body>
</html>

