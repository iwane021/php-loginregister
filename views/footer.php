        <footer>
            &copy; Copyright by <a href="http://tukarpengetahuan.com/">tukarpengetahuan.com</a>
        </footer>

         <!--JS-->
        <script src="assets/js/vendor/jquery.js"></script>
        <script src="assets/js/vendor/what-input.js"></script>
        <script src="assets/js/vendor/foundation.js"></script>
        <script src="assets/js/app.js"></script>
        <script>
            $(document).ready(function() {
                $('.close').click(function(){
                    $('.alert-box').hide();
                });
                $('#show-password').change(function() {
                    var $checked = $(this);
                    if($checked.is(":checked")){
                        $('input[name="password"]').attr('type', 'text');
                    }
                    else{
                        $('input[name="password"]').attr('type', 'password');
                    }
                });
            });
        </script>
    </body>
</html>
