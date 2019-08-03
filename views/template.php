<?php
include __DIR__ . '/controller.php';
setHeader('Login', 'Work And Connect');
//require above all files
include __DIR__ . '/header/include.php';
?>
<!--Show body content here-->


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
