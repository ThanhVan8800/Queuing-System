
<!-- /.login-box -->

<!-- jQuery -->
<script src="/templates/admin/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/templates/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="/templates/admin/dist/js/adminlte.min.js"></script>
<script src="/templates/admin/js/main.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

@yield('footer')
<script>
    $(document).ready(function() {
        $(document).on('keyup','#keyword', function() {
            var keyword = $(this).val();
            // console.log(keyword);
            $.ajax({
                type: "GET", //
                url:'/admin/devices/search',
                data:{ keyword: keyword},
                dataType: 'json',
                success: function(response) {
                    $('#dev').html(response);
                }
            })
        })
    })
</script>