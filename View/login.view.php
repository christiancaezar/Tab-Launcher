<link rel="stylesheet" href="<?php echo PARENT_FOLDER ?>/css/login.css">
<body>
    <div class="container-fluid d-flex">
        <div class="title-col d-flex">
            <h1>TAB LAUNCHER</h1>
            <p class="text">Your browser tab manager for executing
            multiple tabs in just ONE CLICK!
            <br><br>
            Tired of launching multiple tabs when
            you open your browser? Well, Tab Launcher
            has your back! Add multiple web addresses,
            save them, and you can directly open them
            simultaneously in just one click of a button.</p>
        </div>
        <div class="form-col d-flex">
            <div class="login-form">
                <h3>Welcome back!</h3>
                <form action="<?php echo PARENT_FOLDER ?>/login/submit" method="POST">
                    <div class="form-floating mb-2 mt-4">
                        <input type="text" class="form-control" id="username" placeholder="name@example.com">
                        <label for="username">Username:</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" id="password" placeholder="">
                        <label for="password">Password:</label>
                    </div>

                    <button class="button" type="submit">Log me in!</button>
                    <hr>
                    <p class="register-link">You’re not registered yet? <br><a href="<?php echo PARENT_FOLDER ?>/register">You can register here for free!</a></p>
                </form>
            </div>
        </div>
    </div>
</body>