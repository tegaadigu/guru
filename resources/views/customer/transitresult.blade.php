@extends('master')

@section('content')
    <div class="transit-header clearfix" style="font-size: 11px;margin-bottom: 10px;">
        <div class="pull-left" style="padding: 6px;">
            <form>
                <input placeholder="Operator Search">
            </form>
        </div>
        <div class="pull-left" style="padding: 9px 20px;">
            pro
        </div>
        <div class="pull-left">
            <form>
                <select class="form-control" name="accountType">
                    <option>
                        Price (Lowest)
                    </option>
                    <option>
                        Price (highest)
                    </option>
                </select>
            </form>
        </div>
    </div>
    <div class="transit-body">
        <div class="body">
            <ul class="list-unstyled">
                @for($i = 0; $i < 5; $i++)
                    <li class="clearfix" style="margin-bottom: 5px;">
                        <div class="left-transit pull-left"
                             style="text-align: center; background-color: #999;height:100%;width:12%;padding:10px 7px;">
                            <div style="color: #fff;">
                                <strong>
                                    <div>
                                        Sun
                                    </div>
                                    <div style="margin-top:-8px;">
                                        02
                                    </div>
                                    <div style="margin-top:-8px;">
                                        Oct
                                    </div>
                                </strong>
                            </div>

                            <div style="margin-top:45px; font-size: 11px;">
                                <i class="fa fa-star" style="color: #FFEB3B;font-size: 10px;"></i>
                               <span>
                                   4.5
                               </span>
                            </div>
                        </div>
                        <div class="body-transit pull-left" style="background-color: #fff;height:124px;width:85%;padding:8px 10px">
                            <div class="pull-left">
                                <small style="text-transform: none;">From</small>
                                <div style="margin-top:-6px;">
                                    WARRI
                                </div>
                            </div>
                            <div class="pull-left">
                                <i class="fa fa-caret-right"></i>
                            </div>
                        </div>
                    </li>
                @endfor
            </ul>
        </div>
    </div>
@endsection
