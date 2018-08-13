<!-- ============================================================== -->
<!-- Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<aside class="left-sidebar" data-sidebarbg="skin5">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                @foreach(\App\Menu::all() as $menu)
                    <li class="sidebar-item">
                        <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ $menu->path }}" aria-expanded="false">
                            <i class="mdi mdi-arrange-bring-forward"></i>
                            <span class="hide-menu">{{ $menu->title }}</span>
                        </a>
                    </li>
                @endforeach
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>