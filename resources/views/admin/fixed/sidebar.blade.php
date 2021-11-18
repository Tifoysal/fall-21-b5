<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">
                    <span data-feather="home"></span>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('admin.order.list')}}">
                    <span data-feather="file"></span>
                    Orders
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('admin.product.list')}}">
                    <span data-feather="file"></span>
                    Products
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{route('admin.employee.list')}}">
                    <span data-feather="file"></span>
                    Employee
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{route('admin.category.list')}}">
                    <span data-feather="file"></span>
                    Category
                </a>
            </li>
        </ul>

    </div>
</nav>
