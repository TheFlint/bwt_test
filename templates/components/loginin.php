<h6>To use my site you are need to authorize or if did'nt register, please, use registration form.</h6>
<div class="row">
    <div class="col-lg-1 col-md-1 col-sm-12"></div>
    <div class="col-lg-5 col-md-5 col-sm-12 right">
        <div class="authorize-form">
            <form method="POST" action="/home/login">
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-12"></div>
                    <div class="col-lg-8 col-md-8 col-sm-12 right">
                        <h1>Authorize</h1>
                        <div class="form-group">
                            <input type="email"
                                   class="form-control form-control-lg"
                                   placeholder="YourEmail@email.com"
                                   name="authorize_email"
                                   pattern="[^@]+@[^@]+\.[a-zA-Z]{2,6}"
                                   required>
                        </div>
                        <div class="form-group">
                            <input type="password"
                                   class="form-control form-control-lg"
                                   placeholder="Password"
                                   name="authorize_password"
                                   required>
                        </div>
                        <div class="text-danger" id="recaptchaError"></div>
                        <div class="captcha">
                            <div class="g-recaptcha" data-sitekey="6Lf58moUAAAAAHug33Z-H6SWdySUWSqMh_K5m2FF"></div>
                        </div>
                        <input type="submit"
                               class="btn btn-secondary btn-block"
                               value="Authorize"
                               name="authorize">
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="col-lg-5 col-md-5 col-sm-16 right">
        <div class="authorize-form">
            <form method="POST" action="/home/registration">
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-12"></div>
                    <div class="col-lg-8 col-md-8 col-sm-12 right">
                        <h1>Registration</h1>
                        <div class="form-group">
                            <input type="text"
                                   class="form-control form-control-lg"
                                   placeholder="Your Name"
                                   name="name"
                                   pattern="[\x1F-\xBF]*"
                                   required>
                        </div>
                        <div class="form-group">
                            <input type="email"
                                   class="form-control form-control-lg"
                                   placeholder="YourEmail@email.com"
                                   name="email"
                                   pattern="[^@]+@[^@]+\.[a-zA-Z]{2,6}"
                                   required>
                        </div>
                        <div class="form-group">
                            <input type="password"
                                   class="form-control form-control-lg"
                                   placeholder="Password"
                                   name="password"
                                   pattern="[\x1F-\xBF]*"
                                   required>
                        </div>
                        <b>Sex:</b>
                        <input type="radio" name="sex" value="man"> Man
                        <input type="radio" name="sex" value="female"> Female
                        <input type="radio" name="sex" value="another"> Another
                        <p><b>Birth Day: <b>
                                    <input type="date"
                                           name="birthdate"
                                           class="form-control form-control-lg"
                                    ></p>
                        <div class="text-danger" id="recaptchaError"></div>
                        <div class="g-recaptcha" data-sitekey="6Lf58moUAAAAAHug33Z-H6SWdySUWSqMh_K5m2FF"></div>
                        <input type="submit"
                               class="btn btn-secondary btn-block"
                               value="To register"
                               name="registration">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>