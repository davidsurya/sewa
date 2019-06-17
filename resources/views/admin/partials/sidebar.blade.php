<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header"><br></li>
            <!-- Optionally, you can add icons to the links -->
            <li><a href="{{ url('/admin') }}"><i class='fa fa-home'></i> <span>Dashboard</span></a></li>
            <li class="treeview">
                <a href="#"><i class='fa fa-money'></i> <span>Data Transaksi</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('admin/add') }}">Tambah Data Transaksi</a></li>
                    <li><a href="{{ url('admin/list') }}">List Data Transaksi</a></li>
                    <li><a href="{{ url('admin/rekap') }}">Rekap Transaksi</a></li>
                </ul>
            </li>
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
