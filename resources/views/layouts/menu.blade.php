<li class="{{ Request::is('pembimbings*') ? 'active' : '' }}">
    <a href="{!! route('pembimbings.index') !!}"><i class="fa fa-users"></i><span>Pembimbing</span></a>
</li>

<li class="{{ Request::is('asramas*') ? 'active' : '' }}">
    <a href="{!! route('asramas.index') !!}"><i class="fa fa-home"></i><span>Asrama</span></a>
</li>

<li class="{{ Request::is('kelas*') ? 'active' : '' }}">
    <a href="{!! route('kelas.index') !!}"><i class="fa fa-home"></i><span>Kelas</span></a>
</li>

<!-- <li class="{{ Request::is('santris*') ? 'active' : '' }}">
    <a href="{!! route('santris.index') !!}"><i class="fa fa-edit"></i><span>Santris</span></a>
</li> -->

<li class="{{ Request::is('dataSantris*') ? 'active' : '' }}">
    <a href="{!! route('dataSantris.index') !!}"><i class="fa fa-user"></i><span>Data Santri</span></a>
</li>

<li class="{{ Request::is('keperluans*') ? 'active' : '' }}">
    <a href="{!! route('keperluans.index') !!}"><i class="fa fa-edit"></i><span>Keperluan</span></a>
</li>

<li class="{{ Request::is('izinPulangs*') ? 'active' : '' }}">
    <a href="{!! route('izinPulangs.index') !!}"><i class="fa fa-edit"></i><span>Izin Pulang</span></a>
</li>

