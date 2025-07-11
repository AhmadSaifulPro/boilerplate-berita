<div class="container-fluid d-flex justify-content-between align-items-center">
    {{-- Logo --}}
    <a class="navbar-brand d-flex gap-3 align-items-center" href="#">
        <img src="{{ asset('logo.png') }}" alt="Logo" width="130">
        {{-- <span class="fw-bold">Boilerplate Berita</span> --}}
    </a>
    <h3 style="font-weight: 700;" class="mt-3">SAKATECH</h3>
    {{-- Tombol Hamburger --}}
    <button class="navbar-toggler d-md-none" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu"
        aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    {{-- Logout --}}
    @auth
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="btn btn-outline-danger btn-sm">Logout</button>
        </form>
    @endauth
</div>
