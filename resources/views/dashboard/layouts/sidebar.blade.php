<head>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/dashboard/">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">


    <!-- Custom styles for this template -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="/css/dashboard.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

</head>


<div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary">
    <div class="offcanvas-md offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu"
        aria-labelledby="sidebarMenuLabel">
        <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link gap-2
                    {{Request::is('dashboard')?'active text-primary':'text-dark'}}" aria-current="page"
                        href="/dashboard">
                        <i class="bi bi-house-door  "></i>
                        Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link gap-2
                     {{Request::is('dashboard/posts')?'active text-primary':'text-dark'}}" href="/dashboard/posts ">
                        <i class="bi bi-file-text "></i>
                        My Posts
                    </a>
                </li>
            </ul>


            <hr class="my-3">

            <ul class="nav flex-column mb-auto">
                <li class="nav-item">
                    <form action="/logout" method="post">
                        @csrf
                        <button class="nav-link d-flex align-items-center gap-2" href="#">

                            Logout
                            <i class="bi bi-box-arrow-in-right px-0 text-dark"></i>
                        </button>
                    </form>

                </li>
            </ul>
        </div>
    </div>
</div>