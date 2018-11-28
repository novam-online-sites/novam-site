
@php
    $Pages = [
        '/about' => 'About Us',
        '/services' => 'Services',
        '/offering' => 'Our Tools',
        '/portfolio' => 'Portfolio',
        '/blog' => 'Our Blog',
    ];
@endphp
<ul>
    @foreach ($Pages as $url => $Label)
    <li {!! $class ?? '' !!}>
        <a{!! request()->is("*$url*")? ' class="active"': '' !!} href="{{ $url }}">{{ $Label }}</a>
    </li>
    @endforeach
    {{-- @isset($home)
    <li{!! $class ?? '' !!}>
        <a class="{{ request()->is($url = '/')? 'active': '' }}" href="{{ $url }}">{{ $page }}</a></li>
    @endisset --}}
    {{-- <li{!! $class ?? '' !!}>
        <a class="{{ request()->is($url = 'about')? 'active': '' }}" href="{{ $url }}">About</a></li>
    <li{!! $class ?? '' !!}>
        <a class="{{ request()->is($url = 'services')? 'active': '' }}" href="/services">{{ $url }}</a></li>
    <li{!! $class ?? '' !!}>
        <a class="{{ request()->is($url = 'offering')? 'active': '' }}" href="/offering">{{ $url }}</a></li>
    <li{!! $class ?? '' !!}>
        <a class="{{ request()->is($url = 'portfolio')? 'active': '' }}" href="/portfolio">{{ $url }}</a></li>
    <li{!! $class ?? '' !!}>
        <a class="{{ request()->is($url = 'blog')? 'active': '' }}" href="/blog">{{ $url }}</a></li> --}}
    {{-- <li class="dropdown">
        <a href="#">Our Blog</a>
        <ul class="submenu">
            <li><a href="gallery-style-one.html">Gallery Style One</a></li>
            <li><a href="gallery-style-two.html">Gallery Style Two</a></li>
            <li><a href="gallery-style-three.html">Gallery Style three</a></li>
        </ul>
    </li> --}}
</ul>
