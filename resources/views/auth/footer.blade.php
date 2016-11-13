
<script src="{{ url('landingpage') }}/js/jquery.js"></script>
<script src="{{ url('landingpage') }}/js/bootstrap.min.js"></script>

<script type="text/javascript" src="{{ url('landingpage') }}/lib/jquery.bootpag.js"></script>
<script>
    $(document).ready(function () {

        $('.first').click();
    });

    $('.internal-content').bootpag({
        total: 7,
        page: 2,
        maxVisible: 5,
        leaps: false,
        firstLastUse: true,
        first: 'first',
        last: 'last',
        wrapClass: 'pagination',
        activeClass: 'active',
        disabledClass: 'disabled',
        nextClass: 'next',
        prevClass: 'prev',
        lastClass: 'last',
        firstClass: 'first'

    }).on("page", function (event, num) {

        $(".internal_page").load("InternalPage.html #" + num);
    }).find('.pagination');
</script>
<script>
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
            <li><img src="img/v1.png" class="pay" alt=""></li>
            <li><img src="img/v2.png" class="pay" alt=""></li>
            <li><img src="img/v3.png" class="pay" alt=""></li>
        </ul>
        <p>
            © 2016 subopp. All rights reserved.
        </p>
    </div>
</footer>
</body>
</html>