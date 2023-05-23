<form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="file" name="profile_picture">
    <button type="submit">Update Profile Picture</button>
</form>
