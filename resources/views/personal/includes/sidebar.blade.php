<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Sidebar -->
    <div class="sidebar">

        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item" style="margin-left: -10px">
                <a href="{{ route('main.index') }}" class="nav-link">
                    <i class="nav-icon fa-solid fa-b"></i>
                    <p>
                        Blog
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('personal.main.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-home"></i>
                    <p>
                        Home Page
                    </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('personal.liked.index') }}" class="nav-link">
                    <i class="nav-icon fa-regular fa-heart"></i>
                    <p>
                        Favorite Posts
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('personal.comment.index') }}" class="nav-link">
                    <i class="nav-icon fa-regular fa-comment"></i>
                    <p>
                        Comments
                    </p>
                </a>
            </li>
        </ul>

    </div>
    <!-- /.sidebar -->
</aside>
