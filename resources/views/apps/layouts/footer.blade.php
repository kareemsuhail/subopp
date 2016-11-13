
<script src="{{ url('landingpage') }}/js/bootstrap.min.js"></script>
<script src="{{ url('landingpage') }}/js/jasny-bootstrap.min.js"></script>
<script src="{{ url('landingpage') }}/js/star-rating.js"></script>
<script type="text/javascript" src="{{ url('landingpage') }}/lib/jquery.bootpag.js"></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.8.5/js/standalone/selectize.min.js'></script>

<script>
    $(document).on('ready', function () {
        $('table .collapse').on('show.bs.collapse', function () {
            $('table .collapse.in').collapse('hide');

        });
        $('.kv-fa').rating({
            theme: 'krajee-fa',
            filledStar: '<i class="fa fa-star"></i>',
            emptyStar: '<i class="fa fa-star-o"></i>'
        });

        $('.rating,.kv-fa').on(
                'change', function () {
                    console.log('Rating selected: ' + $(this).val());
                });
    });
</script>
<script>
    $(function () {
        $('select').selectize({});
    });
    $(function () {

        $('.list-group-item').on('click', function () {
            $('.glyphicon', this)
                    .toggleClass('glyphicon-chevron-right')
                    .toggleClass('glyphicon-chevron-down');
        });

    });
</script>
<footer>
    <div class="footer" align="center">
        <ul class="list-inline">
            <li class="soical-icon soical-icon1 "></li>
            <li class="soical-icon soical-icon2"></li>
            <li class="soical-icon soical-icon3"></li>
            <li class="soical-icon soical-icon4"></li>
        </ul>
        <ul class="list-inline ">
            <li><img src="{{ url('landingpage') }}/img/v1.png" class="pay" alt=""></li>
            <li><img src="{{ url('landingpage') }}/img/v2.png" class="pay" alt=""></li>
            <li><img src="{{ url('landingpage') }}/img/v3.png" class="pay" alt=""></li>
        </ul>
        <p>
            © 2016 subopp. All rights reserved.
        </p>
    </div>
</footer>

</body>
</html>

