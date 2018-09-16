@extends('layouts.catalogHeader')
@section('content')
    <div class="section">
    <div class="categoryName">
        <a href="earringCatalog"><h6><i class="fa fa-caret-left" style="font-size:14px; margin-right: 5px;"></i>СЕРЕЖКИ
            </h6></a>
        <a><h1>КОЛЬЦА</h1></a>
        <a href="braceletCatalog"><h6>БРАСЛЕТЫ<i class="fa fa-caret-right"
                                                 style="font-size:14px; margin-left: 5px;"></i></h6></a>
    </div>
    <div class="col-sm-12" style="padding-bottom: 5px !important;">
        @if(Auth::check() && Auth::user()->is_admin == 1)
            <a href="/createRing/store" class="btn btn-primary btn-info">ДОБАВИТЬ</a>
        @endif
    </div>
    <div class="container-fluid">
        <div class="row">

            @foreach($ringList as $item)
                <div class="col-sm-6">
                    <table class="table">
                        <tr>
                            <td align="left" width="100"><img src="../uploads/rings/{{$item->ring_name}}"></td>
                            <td align="left" width="200"><?php
                                if (strlen ( "{$item->description}" ) > 100) {
                                    echo substr ( "{$item->description}", 0, 100 ).'...';
                                } else
                                    echo "{$item->description}";?>
                                <a href="{{url('/ringCatalog/'.$item->ring_id.'/about')}}">ПОДРОБНЕЕ</a>
                            </td>
                            <td align="center" width="80">{{$item->ring_price}}</td>
                            <td align="left">
                                <?php
                                if ("{$item->check}" == 1) {
                                    echo '<label class="available"></label>';
                                } elseif ("{$item->check}" == 0) {
                                    echo '<label class="notAvailable"></label>';
                                }
                                ?>
                            </td>
                            @if(Auth::check() && Auth::user()->is_admin == 1)
                            @else
                                <td>
                                    <a href="{{url ('/ringCatalog/'.$item->ring_id.'/buy')}}">
                                        <button class="btn btn-info">КУПИТЬ</button>
                                    </a>
                                </td>

                            @endif
                            @if(Auth::check() && Auth::user()->is_admin == 1)
                                <td align="right" width="60">
                                    <a href="{{url('/ringCatalog/'.$item->ring_id.'/edit')}}">
                                        <button class="btn btn-primary btn-success">Edit</button>
                                    </a>
                                </td>
                            @endif
                            @if(Auth::check() && Auth::user()->is_admin == 1)
                                <td align="left" width="60">
                                    <a href="/delete/{{$item->ring_id}}">
                                        <button class="btn btn-danger">Delete</button>
                                    </a>
                                </td>
                            @endif
                        </tr>
                    </table>
                </div>
            @endforeach
            {{$ringList->links()}}
        </div>
    </div>
    </div>
</div>
@endsection
