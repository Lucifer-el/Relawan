
<div class="row justify-content-center mt-5">
    <div class="col-md-4">
        <div class="card shadow-sm">
            <div class="card-header text-center">
                <h3>Login</h3>
            </div>
            <div class="card-body">
            <form method="POST" action="{{ route('login-proses') }}">
    @csrf
    <div class="mb-3">
        <label for="username" class="form-label">username</label>
        <input type="username" class="form-control" id="username" name="username" placeholder="Enter your username" required>
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
    </div>
    <button type="submit" class="btn btn-primary w-100">Login</button>
</form>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@if ($message = Session::get('failed'))
<script>Swal.fire("{{$message}}");</script>
@endif
