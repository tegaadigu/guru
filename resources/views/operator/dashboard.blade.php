@extends('operator/dashboard/master')

@section('content')
    <div class="content" style="padding:10px;">
        <div class="clearfix" style="margin-bottom:20px;">
            @include('operator.dashboard.totalAnalysis')
        </div>
        @include('operator.dashboard.graphAnalysis')
        <div class="row">
            @include('operator.dashboard.reviews', ['title' => "Customer Reviews", 'subTitle' => 'Ratings'])
            @include('operator.dashboard.passengerTable')
        </div>
        @if(false)
        <section class="widget">
            <div>
                <div class="header" style="padding: 15px 15px 0;">
                    <h4>
                        Recent Trip &mdash;
                        <small>
                            <i class="fa fa-clock-o"></i> Today 4:00pm

                            &mdash; Warri - Lagos
                        </small>
                    </h4>
                </div>
                <div class="section-content" style="padding: 6px;">
                    <table class="table table-striped" border="0" cellspacing="0" cellpadding="0" style="    border: none;
    border-collapse: collapse;">
                        <thead>
                        <th>
                            Passenger Name
                        </th>
                        <th>
                            Mobile Number
                        </th>
                        <th>
                            Status
                        </th>
                        </thead>
                        <tbody>

                        <?php for($i = 0; $i < 8; $i++) { ?>
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
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
        @endif
    </div>
@endsection
