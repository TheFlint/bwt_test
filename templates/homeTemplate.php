<div class="container-fluid">
    <div class="row">
        <div class="description text-center">
            <h1>Hello ,Welcome to my weather forecast website!</h1>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus animi asperiores, aut cupiditate
                dicta
                dolorum iure laudantium nam nihil nisi nostrum officiis quidem quisquam reprehenderit veritatis.
                Inventore
                recusandae veniam veritatis.</p>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-1"></div>
        <div class="col-lg-4 col-md-4 col-sm-14">
            <div class="weather text-center">
                <div class="fdate text-left">Прогноз на <?= date('d.m'); ?></div>
                <div class="city-name ">
                    <h1>Погода в Запорожье</h1>
                </div>

                <? getWeather(); ?>
                <div class="fbottom">.</div>
            </div>
        </div>
    </div>
    <div class="authorize-form">
        <form method="POST" action="">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <h1>Authorize</h1>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 right">
                    <div class="form-group">
                        <input type="email" class="form-control form-control-lg"
                               placeholder="YourEmail@email.com" name="email" required>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control form-control-lg" placeholder="Password"
                               name="password"
                               required>
                    </div>
                    <input type="submit" class="btn btn-secondary btn-block" value="Authorize">
                </div>
            </div>
        </form>
    </div>
    <div class="authorize-form">
        <form method="POST" action="">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <h1>Registration</h1>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 right">
                    <div class="form-group">
                        <input type="text" class="form-control form-control-lg" placeholder="Your Name"
                               name="name"
                               required>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control form-control-lg"
                               placeholder="YourEmail@email.com" name="email" required>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control form-control-lg" placeholder="Password"
                               name="password"
                               required>
                    </div>
                    <p><b>Sex:</b></p>
                    <p><input type="radio" name="sex" value="man"> Man</p>
                    <p><input type="radio" name="sex" value="female"> Female</p>
                    <p><input type="radio" name="sex" value="another"> Another</p>
                    <p><b>Birth Day: <b>
                    <input type="date" name="birth_day" class="form-control form-control-lg"></p>
                    <input type="submit" class="btn btn-secondary btn-block" value="To register">
                </div>

            </div>
    </div>
    </form>
</div>
</div>

</div>

