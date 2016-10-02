<div class="col-md-6 col-sm-6 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h2> Passenger Table
                <small>Most recent trip</small>
            </h2>
            <ul class="list-unstyled list-inline pull-right">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i
                                class="fa fa-wrench"></i></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Settings 1</a>
                        </li>
                        <li><a href="#">Settings 2</a>
                        </li>
                    </ul>
                </li>
                <li><a class="close-link"><i class="fa fa-close"></i></a>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <table class="table">
                <thead>
                <tr>
                    <th>
                        Passenger Name
                    </th>
                    <th>
                        Mobile Number
                    </th>
                    <th>
                        Status
                    </th>
                </tr>
                </thead>
                <tbody>
                @for($i = 0; $i < 8; $i++)
                <tr>
                    <td>
                        <img src="{{ $faker->imageUrl(30, 30, 'people') }}" class="img-circle"
                             style="padding-right:3px;">
                        {{ $faker->name }}
                    </td>
                    <td>
                        {{ $faker->phoneNumber }}
                    </td>
                    <td>
                                <span class="label {{ ($i % 5 == 0 ? 'label-danger' : ($i % 2 == 0 ? 'label-success' : 'label-warning')) }} ">
                                     {{ ($i % 5 == 0 ? 'Cancelled' : ($i % 2 == 0 ? 'Confirmed' : 'Reserved')) }}
                                </span>
                    </td>
                </tr>
               @endfor
                </tbody>
            </table>

        </div>
    </div>
</div>
