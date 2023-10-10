<style>
    .logo {
        width: 30px;
        height: 30px;
    }
</style>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="/"><img src="/img/logosmk.png" alt="logosmk" class="logo "> SMKN 1 BLOG</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{($active === 'homepage') ? 'active' : '' }}" href="/"><i
                            class="bi bi-house"></i> Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{($active === 'about') ? 'active' : '' }}" href="/about"><i
                            class="bi bi-person-lines-fill"></i> About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{($active ===  'blog') ? 'active' : '' }}" href="/blog"><i
                            class="bi bi-postcard-fill"></i> Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{($active === 'categories') ? 'active' : '' }}" href="/categories"><i
                            class="bi bi-grid"></i> Categories</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto">
                @auth
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <i class="bi bi-person"></i> Welcome back, {{auth()->user()->name}}
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-window-reverse"></i>
                                My Dashboard</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <form action="/logout" method="post">
                                @csrf
                                <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i>
                                    Logout</button>
                            </form>
                        </li>
                    </ul>
                </li>

                @else
                <li class="nav-item ">
                    <a class="nav-link {{($active === 'login') ? 'active' : '' }}" href="/login"><i
                            class="bi bi-box-arrow-in-right"></i> Login</a>
                </li>
                @endauth
            </ul>

        </div>
    </div>
</nav>