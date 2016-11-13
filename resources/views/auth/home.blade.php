<!DOCTYPE html>
<html lang="en">

<head>

    @include('subopp.partials.head')
       <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

            <body class="gray-bg">
           
                    <div style="position: relative">
                        @include('subopp.topbar')

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

                        @include('landingpage.footer')
                    </div>    
                        @include('landingpage.partials.foot')



            </body>
</html>