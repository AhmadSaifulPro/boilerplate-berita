@include('layout.head')

<body>

    <nav class="navbar navbar-light bg-light">
        @include('layout.nav')
    </nav>

    {{-- Bagian Body Container --}}
    <div class="container-fluid">
        <div class="row">

            {{-- Sidebar --}}
            <div class="col-md-2 sidebar collapse d-md-block bg-light" id="sidebarMenu"">
                @include('layout.sidebar')
            </div>

            {{-- Main Content --}}
            <div class="col-md-10 content">
                <main>
                    @yield('konten')
                </main>
            </div>
        </div>
    </div>

    {{-- Bootstrap Script --}}
    @include('layout.script')
    @stack('scripts')

</body>

</html>
