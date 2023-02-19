<form action="{{ route('login') }}" method="POST">
    @csrf
    <label>
        <input type="email" name="email" placeholder="Email..." value="{{ old('email') }}">
    </label>
    @error('email')
        <div>{{ $message }}</div>
    @enderror
    <label>
        <input type="password" name="password" placeholder="Password...">
        @error('password')
        <div>{{ $message }}</div>
    @enderror
    </label>
    <input type="submit" value="Login">
</form>
