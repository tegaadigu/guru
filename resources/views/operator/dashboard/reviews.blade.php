@extends('widgets.md-6')

@section('widget_x_content')
    <div class="dashboard-widget-content">

        <ul class="list-unstyled timeline widget">
            <?php for($i = 1; $i <= 10; $i++){ ?>
            <li>
                <div class="block">
                    <div class="block_content">
                        <h4 class="title">
                             <?php $rating = rand(1, $i+5); ?>
                            <div class="reviews star" data-star-rating="{{ $rating }}"
                                 style="background-image: url('https://d1vfs9f7h1rfk4.cloudfront.net/img/stars-2x.png');
                                    background-size: 22px 36px;
    background-position: 0 -18px;
    width: 110px;
    height: 18px;"
                            ></div>
                        </h4>
                        <div class="byline">
                            <small>{{ $i }} hours ago</small> by <a>{{ $faker->name }}</a>
                        </div>
                        <p class="excerpt">
                            {{ $faker->paragraph(2) }}
                        </p>
                    </div>
                </div>
            </li>
            <?php } ?>
        </ul>
    </div>
@endsection
<script>
    $(document).ready(function(e){
        var reviews = $('.reviews.star');
        reviews.each(function(e){
            starRating($(this).get(0), $(this).data('star-rating'), 'https://d1vfs9f7h1rfk4.cloudfront.net/img/stars-2x.png');
        })

    })
</script>
