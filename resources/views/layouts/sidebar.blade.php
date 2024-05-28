
<section class="sidebar">
    <!-- Sidebar Menu -->
    <ul class="sidebar-menu" data-widget="tree">
    <li class="header">MENU UTAMA</li>
    
    @if (Auth::user()->hasRole('superadmin'))
        
    <li class="{{ (request()->is('superadmin')) ? 'active' : '' }}"><a href="/superadmin"><i class="fa fa-home"></i> <span><i>Beranda</i></span></a></li>
    
    <li class="header">DATA MASTER</li>
    
    
    <li class="{{ (request()->is('superadmin/pegawai*')) ? 'active' : '' }}"><a href="/superadmin/pegawai"><i class="fa fa-check"></i> <span><i>Data Pegawai</i></span></a></li>
    <li class="{{ (request()->is('superadmin/ikan*')) ? 'active' : '' }}"><a href="/superadmin/ikan"><i class="fa fa-check"></i> <span><i>Data ikan</i></span></a></li>
    <li class="{{ (request()->is('superadmin/petani*')) ? 'active' : '' }}"><a href="/superadmin/petani"><i class="fa fa-check"></i> <span><i>Data Petani</i></span></a></li>

    <li class="header">DATA TRANSAKSI</li>
    <li class="{{ (request()->is('superadmin/pengambilan*')) ? 'active' : '' }}"><a href="/superadmin/pengambilan"><i class="fa fa-check"></i> <span><i>Pengambilan Bibit</i></span></a></li>
    <li class="{{ (request()->is('superadmin/pemasaran*')) ? 'active' : '' }}"><a href="/superadmin/pemasaran"><i class="fa fa-check"></i> <span><i>Pemasaran</i></span></a></li>
    
    <li class="header">DATA LAPORAN</li>
    <li class="{{ (request()->is('superadmin/laporan*')) ? 'active' : '' }}"><a href="/superadmin/laporan"><i class="fa fa-check"></i> <span><i>Laporan</i></span></a></li>
    <li class="header">SETTING</li>
    <li class="{{ (request()->is('superadmin/gp*')) ? 'active' : '' }}"><a href="/superadmin/gp"><i class="fa fa-key"></i> <span><i>Ganti Pass</i></span></a></li>
    <li><a href="/logout"><i class="fa fa-sign-out"></i> <span><i>Logout</i></span></a></li>
    @else
{{--         
    <li class="{{ (request()->is('pemohon')) ? 'active' : '' }}"><a href="/pemohon"><i class="fa fa-home"></i> <span><i>Dashboard</i></span></a></li>
    <li class="{{ (request()->is('pemohon/pengajuan*')) ? 'active' : '' }}"><a href="/pemohon/pengajuan"><i class="fa fa-check"></i> <span><i>Pengajuan Bibit</i></span></a></li>
    <li class="{{ (request()->is('pemohon/serahterima*')) ? 'active' : '' }}"><a href="/pemohon/serahterima"><i class="fa fa-check"></i> <span><i>Serah Terima Bibit</i></span></a></li>
    <li class="{{ (request()->is('pemohon/gp*')) ? 'active' : '' }}"><a href="/pemohon/gp"><i class="fa fa-key"></i> <span><i>Ganti Pass</i></span></a></li>
    <li><a href="/logout"><i class="fa fa-sign-out"></i> <span><i>Logout</i></span></a></li> --}}
    {{-- <li class="{{ (request()->is('pemohon/daftar-layanan*')) ? 'active' : '' }}"><a href="/pemohon/daftar-layanan"><i class="fa fa-list"></i> <span>Daftar Layanan</span></a></li> --}}
    @endif
    </ul>
    <!-- /.sidebar-menu -->
</section>