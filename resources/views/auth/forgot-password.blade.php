<form method="POST" action="/forgot-password">
    @csrf
    @if (session('status'))
    <div role="alert">
        {{ session('status') }}
    </div>
    @endif
    <div>
        <label for="email">Email</label>
        <input type="email" name="email" id="email" value="{{ old('email') }}" required>
        @error('email')
            <div role="alert">{{ $message }}</div>
        @enderror
    </div>

    <div>
        <button type="submit">Send Password Reset Link</button>
    </div>
</form>
