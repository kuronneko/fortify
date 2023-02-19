<form method="POST" action="/reset-password">
    @csrf

    <input type="hidden" name="token" value="{{ $request->route('token') }}">

    <div>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" value="{{ old('email') ?? $request->email }}" required autofocus readonly>
    </div>

    <div>
        <label for="password">New Password:</label>
        <input type="password" name="password" id="password" required>
    </div>

    <div>
        <label for="password_confirmation">Confirm Password:</label>
        <input type="password" name="password_confirmation" id="password_confirmation" required>
    </div>

    <div>
        <button type="submit">Reset Password</button>
    </div>
</form>
