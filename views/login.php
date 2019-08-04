<?php
include __DIR__ . '/controller.php';
setHeader('Login', 'Work And Connect');
//require above all files
include __DIR__ . '/header/include.php';
?>
<body class="auth-wrapper">
<div id="app" class="all-wrapper menu-side with-pattern">
    <div class="auth-box-w">
        <div class="logo-w">
            <a href="/"><img width="120" alt="" src="bench/files/images/logo.png"></a>
        </div>
        <h4 class="auth-header">
            Login Form
        </h4>
        <form action="">
            <div class="form-group">
                <label for="">Username</label><input class="form-control" placeholder="Enter your username" type="text">
                <div class="pre-icon os-icon os-icon-user-male-circle"></div>
            </div>
            <div class="form-group">
                <label for="">Password</label><input class="form-control" placeholder="Enter your password" type="password">
                <div class="pre-icon os-icon os-icon-fingerprint"></div>
            </div>
            <div class="buttons-w">
                <button class="btn btn-primary">Log me in</button>
                <div class="form-check-inline">
                    <label class="form-check-label"><input class="form-check-input" type="checkbox">Remember Me</label>
                </div>
            </div>
        </form>
    </div>
</div>
</body>
<?php
//additional includes
include __DIR__ . '/footer/include.php';
?>
<script>
    //start dev querying
    new Vue({
        el: '#app',
        data: {
            info: 'Information from vue app....',
        }
    })
</script>
