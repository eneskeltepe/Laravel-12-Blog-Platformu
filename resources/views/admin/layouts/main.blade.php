@include('admin.template.header')
@include('admin.template.topbar')
@include('admin.template.sidebar')

<div class="vertical-overlay"></div>
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">

            @yield('content')

        </div>
    </div>
</div>


@include('admin.template.footer')