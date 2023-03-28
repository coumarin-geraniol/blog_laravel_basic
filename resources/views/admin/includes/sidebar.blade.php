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
                <a href="{{ route('admin.main.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-home"></i>
                    <p>
                        Home Page
                    </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('admin.user.index') }}" class="nav-link">
                    <i class="nav-icon fa-regular fa-user"></i>
                    <p>
                        Users
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.post.index') }}" class="nav-link">
                    <i class="nav-icon fa-regular fa-share-from-square"></i>
                    <p>
                        Posts
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.category.index') }}" class="nav-link">
                    <i class="nav-icon fa-solid fa-bars-staggered"></i>
                    <p>
                        Categories
                    </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('admin.tag.index') }}" class="nav-link">
                    <i class="nav-icon fa-solid fa-hashtag"></i>
                    <p>
                        Tags
                    </p>
                </a>
            </li>

        </ul>

    </div>
    <!-- /.sidebar -->
</aside>
