<div>
    <p>Thanks for signing up! Before getting started, please verify your email address by clicking on the link we just
        emailed to you. If you didn't receive the email, you can request another one by clicking the button below:</p>
    <form method="POST" action="/email/verification-notification">
        @csrf
        <button type="submit">Resend Verification Link</button>
    </form>
    @if (session('status') == 'verification-link-sent')
        <div class="mb-4 font-medium text-sm text-green-600">
            A new email verification link has been emailed to you!
        </div>
    @endif
</div>
