<!DOCTYPE html>
<html lang="en">

@section('htmlheader')
    @include('admin.partials.header')
@show

<body class="skin-blue sidebar-mini">
<div class="wrapper">

    @include('admin.partials.mainheader')

    @include('admin.partials.sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        {{-- @include('admin.partials.contentheader') --}}

        <!-- Main content -->
        <section class="content">
            <!-- Your Page Content Here -->
            @yield('main-content')
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->

</div><!-- ./wrapper -->

@section('scripts')
    @include('admin.partials.scripts')
@show

</body>
</html>
