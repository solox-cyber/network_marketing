<form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
    @csrf
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <input type="file" name="profile_picture">
    <button type="submit">Update Profile Picture</button>
</form>
