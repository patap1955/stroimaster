<div class="container">
    <div class="navigation" role="navigation">
        <div class="navbar-collapse collapse" id="buildpress-navbar-collapse" aria-expanded="false">
            <ul id="menu-main-menu" class="navigation--main  js-dropdown">

                @foreach($pages as $page)
                    <li id="menu-item" class="menu-item-type-post_type menu-item-object-page menu-item">
                        <a href="{{$page->services()->count() ? '#' : route($page->slug)}}">{{ $page->title }}</a>
                        @if($page->services()->count())
                            <ul  class="sub-menu">
                                @foreach($services as $service)
                                    <li id="menu-item" class="menu-item menu-item-type-post_type menu-item-object-page menu-item">
                                        <a href="{{ route('service.show', ['service' => $service->slug]) }}">{{ $service->title }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        @endif
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
