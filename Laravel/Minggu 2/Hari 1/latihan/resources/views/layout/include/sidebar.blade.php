
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
            <img src="{{Auth()->user()->profile->foto}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
            <a href="#" class="d-block">{{Auth()->user()->profile->nama_lengkap}}</a>
            </div>
        </div>
            <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->
            <li class="nav-item has-treeview">
                <a href="{{url('/')}}" class="nav-link">
                <i class="nav-icon far fa-plus-square"></i>
                <p>
                    Utama
                    <i class="fas fa-angle-left right"></i>
                </p>
                </a>
                <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{url('/data-tables')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Table</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('/pertanyaan')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Pertanyaan table</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="../../starter.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Starter Page</p>
                    </a>
                </li>
                </ul>
            </li>
</nav>
