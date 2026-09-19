<div>
    <!-- People find pleasure in different ways. I find it in keeping my mind clear. - Marcus Aurelius -->
    <h1>Profile page</h1>
    {{-- <h1>{{}}</h1> --}}
    @if(session('user'))
    <h1>Welcome, {{session('user')}}</h1>
    @else 
    <h1>No user found in sesson <a href="login">Login</a></h1>
    @endif

    <a href="logout">Logout</a>
    {{
        session('allData')['password']
    }}
</div>
