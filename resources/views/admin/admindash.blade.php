<h1>Welcome to Admin Page</h1>
<form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit">Logout</button>
    </form>
