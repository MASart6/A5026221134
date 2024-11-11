<nav class="navbar navbar-expand-lg bg-white navbar-light fixed-top shadow py-lg-0 px-4 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
    <a href="{{ url('/') }}" class="navbar-brand d-block d-lg-none">
        <img class="m-0" src="{{ asset('img/logo.png') }}" alt="logo_MAS" style="width: 75px;">
    </a>
    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-between py-4 py-lg-0" id="navbarCollapse">
        <a href="{{ url('/') }}" class="navbar-brand mx-3 d-none d-lg-block">
            <img src="{{ asset('img/logo.png') }}" alt="logo_MAS" style="width: 100px;">
        </a>
        <div class="navbar-nav ms-auto py-0">
            <a href="#home" class="nav-item nav-link active">Home</a>
            <a href="#about" class="nav-item nav-link">About</a>
            <a href="#skill" class="nav-item nav-link">Skills</a>
            <a href="#service" class="nav-item nav-link">Assignments</a>
            <a href="#contact" class="nav-item nav-link">Contact</a>
        </div>
    </div>
</nav>
