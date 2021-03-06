
<!DOCTYPE html>
<html>
<head>
@include('dashboard.layout.header');
<style>
    * {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}

html {
    height: 100%;
}

body {
    background-color: #232323;
}

.auth-form-wrapper {
    position: absolute;
    top: 50%;
    left: 50%;
    width: 620px;
    padding: 40px 80px;
    transform: translate(-50%, -50%);
    background: #212121;
}

.text-center {
    color: #fff;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 40px;
    text-align: center;
    margin-bottom: 30px;
    font-weight: normal;
}

.form-row {
    height: 40px;
    margin-bottom: 15px;
    clear: both;
}

.input-wrapper {
    height: 100%;
    position: relative;
    clear: both;
    border-bottom: 1px solid #fff;
    transition: 0.4s;
}

.input-wrapper::after {
    position: absolute;
    content: "";
    width: 100%;
    height: 2px;
    bottom: -1px;
    left: 0;
    background: #0dd78e;
    transform-origin: left;
    transform: scaleX(0);
    transition: 0.4s ease;
}

.input-wrapper:focus-within::after {
    transform: scaleX(1);
}

.input-wrapper > span.icon-wrapper {
    position: absolute;
    float: left;
    color: #7f7f7f;
    right: 10px;
    top: 50%;
    transform: translate(-50%, -50%);
}

.input-wrapper > input {
    width: 100%;
    float: left;
    padding: 10px 15px;
    font-size: 16px;
    color: #fff;
    margin-bottom: 30px;
    border: none;
    outline: none;
    background: transparent;
}

.input-wrapper > input:focus ~ label,
.input-wrapper > input:valid ~ label {
    top: -20px;
    left: 15px;
    color: #7f7f7f;
    font-size: 12px;
}

.input-wrapper > label {
    position: absolute;
    top:0;
    left: 15px;
    padding: 10px 0;
    font-size: 16px;
    color: #7f7f7f;
    pointer-events: none;
    transition: .5s;
}

.form-action {
    text-align: center;
}

.form-action button {
    width: 290px;
    height: 40px;
    border-radius: 30px;
    background-color: #0dd78e;
    border: none;
    color: #fff;
    font-weight: bold;
    cursor: pointer;
}

p.note { 
    text-align: center;
    color: #7f7f7f;
    margin-bottom: 30px;
    clear: both;
}

p.note > span {
    text-decoration: underline;
}
</style>

<div class="page-body">
            <div class="auth-form-wrapper register-form-wrapper">
                <form action="{{route('dashboard.registration.process')}}" method="POST">
                    <input type="hidden" name="_token" value="UCRvE8ogNi0xO8aHnKs3mFR9YxJLQ3JPObJIfSez">
                    <div class="form-header">
                    @csrf
                        <h2 class="text-center">Register</h2>
                    </div>
                    
                    <div class="form-row">
                        <div class="input-wrapper">
                            <input id="name" type="text" class="" name="name" value="" required="" autofocus="" autocomplete="off">
                            <label for="name">Name</label>
                            <span class="icon-wrapper bg-primary">
                                <i class="fas fa-user"></i>
                            </span>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="input-wrapper">
                            <input id="email" type="email" class="" name="email" value="" required="" autocomplete="off">
                            <label for="name">Email</label>
                            <span class="icon-wrapper bg-primary">
                                <i class="fas fa-envelope"></i>
                            </span>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="input-wrapper">
                            <input id="mobileNo" type="mobileNo" class="" name="mobileNo" required="" autocomplete="off">
                            <label for="name">Mobile Number</label>
                            <span class="icon-wrapper bg-primary">
                                <i class="fas fa-lock"></i>
                            </span>
						</div>
                    </div>

                    <div class="form-row">
                        <div class="input-wrapper">
                            <input id="password" type="password" class="" name="password" required="" autocomplete="off">
                            <label for="name">Password</label>
                            <span class="icon-wrapper bg-primary">
                                <i class="fas fa-lock"></i>
                            </span>
						</div>
                    </div>

                    <div class="form-row">
                        <div class="input-wrapper">
                            <input id="password-confirm" type="password" class="form-control" name="confirmPassword" required="" autocomplete="off">
                            <label for="name">Confirm password</label>
                            <span class="icon-wrapper bg-primary">
                                <i class="fas fa-lock"></i>
                            </span>
                        </div>
                    </div>

                    <p class="note">By clicking 'Sign up' agree to our <span>Terms</span>.</p>

                    <div class="form-action">
                        <div>
                            <button type="submit" class="btn btn-primary">
                                Register
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        </html>
</head>