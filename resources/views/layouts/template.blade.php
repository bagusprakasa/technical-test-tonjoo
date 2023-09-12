<!DOCTYPE html>
<html lang="en">

{{-- Head --}}
@include('includes.head')

<body>
    <div id="app">
        {{-- Sidebar --}}
        @include('includes.sidebar')
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>{{ $data['title'] }}</h3>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item {{ Request::segment(1) == '' ? 'active' : '' }}">
                                        <a href="{{ $data['url'] }}">{{ $data['title'] }}</a>
                                    </li>
                                    @if (Request::segment(1) != '')
                                        <li class="breadcrumb-item {{ Request::segment(1) != '' ? 'active' : '' }}"
                                            aria-current="page">
                                            {{ ucwords($data['type']) }}
                                        </li>
                                    @endif
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="page-content">
                {{-- Content --}}
                @yield('content')
            </div>

            {{-- Footer --}}
            @include('includes.footer')
        </div>
    </div>
    {{-- Javascript --}}
    @include('includes.javascript')
</body>

</html>
