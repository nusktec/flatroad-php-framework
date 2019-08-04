<?php
include __DIR__ . '/controller.php';
setHeader('Login', 'Work And Connect');
//require above all files
include __DIR__ . '/header/include.php';
?>
<body class="auth-wrapper" xmlns:v-on="http://www.w3.org/1999/xhtml">
<div id="app" class="all-wrapper menu-side with-pattern">
    <div class="auth-box-w">
        <div class="logo-w">
            <a href="/"><img width="120" alt="" src="bench/files/images/logo.png"></a>
        </div>
        <h4 class="auth-header">
            Login Form
        </h4>
        <form onsubmit="return false">
            <div class="form-group">
                <label for="">Username</label><input v-model="users.email" class="form-control"
                                                     placeholder="Enter your username" type="text">
                <div class="pre-icon os-icon os-icon-user-male-circle"></div>
            </div>
            <div class="form-group">
                <label for="">Password</label><input v-model="users.pass" class="form-control"
                                                     placeholder="Enter your password" type="password">
                <div class="pre-icon os-icon os-icon-fingerprint"></div>
            </div>
            <p style="color: #0D3349">{{info}}</p>
            <div class="buttons-w">
                <button v-on:click="btnsign" class="btn btn-primary">Log me in</button>
                <button v-on:click="btnout" class="btn btn-primary">Log me in</button>
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
    let vue = new Vue({
        el: '#app',
        data: {
            info: '',
            users: {email: '', pass: ''},
        },
        methods: {
            btnsign: btnsign,
            btnout: btnout,
        }
    });

    //btn sign in
    function btnsign() {
        let data = vue.$data;
        let users = vue.$data.users;
        //check fields before submitting
        if (users.email === '' || users.pass === '') {
            data.info = "No email or password";
            return;
        }
        //start loading
        data.info = '';
        NProgress.start();
        axios.post(api_base_name + 'api/auth/login/', {email: users.email, password: users.pass, ssk: cssk})
            .then(function (res) {
                console.log(res);
                NProgress.done();
                //make use of data
                if (!res.data.status) {
                    //something went wrong
                    data.info = res.data.msg;
                    return;
                }
                //success login
                window.localStorage.setItem('token', res.data.data.s_token);
                window.location.href = api_base_name + "su/dashboard/";
            });
    }
</script>
