@extends('layouts.catalogHeader')
@section('content')
    <div class="container-fluid">
        <div class="row" style="text-align: center !important;">
            <div class="col-sm-12" style="padding: 20px;">
                <h2>ВЫ МОЖЕТЕ ЗАБРОНИРОВАТЬ ТОВАР</h2>
                <p>ЧТОБЫ ЗАБРОНИРОВАТЬ ТОВАР НАПИШИТЕ НАМ ПО НИЖНЕЙ ФОРМЕ</p>
                <p>ДЛЯ ПРИМЕРКИ И ПОКУПКИ ТОВАРА НАДО ПРИЙТИ ПО АДРЕСУ Москва, Россия, 103073</p>
                <p>ВОЗМОЖНА ДОСТАВКА, ДЛЯ ПОДРОБНОСТЕЙ ЗВОНИТЬ +7 495 697-03-49</p>
            </div>
            @if(Auth::check() && Auth::user()->is_admin == 0)
                <div class="col-sm-6" style="padding: 20px;">
                    <div id="gallery">
                        @if(isset($buy->ring_name))
                            <img src="{{asset ("/uploads/rings/{$buy->ring_name}")}}" class="img-thumbnail">
                        @elseif(isset($buy->necklace_name))
                            <img src="{{asset ("/uploads/necklaces/{$buy->necklace_name}")}}" class="img-thumbnail">
                        @elseif(isset($buy->earring_name))
                            <img src="{{asset ("/uploads/earring/{$buy->earring_name}")}}" class="img-thumbnail">
                        @elseif(isset($buy->bracelet_name))
                            <img src="{{asset ("/uploads/bracelets/{$buy->bracelet_name}")}}" class="img-thumbnail">
                        @endif
                    </div>
                </div>
                <div class="col-sm-6" style="padding: 20px;">
                    <form id="sendProd">
                        {{csrf_field()}}
                        <div class="form-group" style="width: 300px; margin-left: 10%">
                            @if(isset($buy->ring_name))
                                <input type="hidden" name="name" class="form-control" value="{{$buy->ring_name}}"
                                       required/>
                                <input type="text" name="price" class="form-control" value="{{$buy->ring_price}}"
                                       required/>
                            @elseif(isset($buy->necklace_name))
                                <input type="hidden" name="name" class="form-control" value="{{$buy->necklace_name}}"
                                       required/>
                                <input type="text" name="price" class="form-control" value="{{$buy->necklace_price}}"
                                       required/>
                            @elseif(isset($buy->earring_name))
                                <input type="hidden" name="name" class="form-control" value="{{$buy->earring_name}}"
                                       required/>
                                <input type="text" name="price" class="form-control" value="{{$buy->earring_price}}"
                                       required/>
                            @elseif(isset($buy->bracelet_name))
                                <input type="hidden" name="name" class="form-control" value="{{$buy->bracelet_name}}"
                                       required/>
                                <input type="text" name="price" class="form-control" value="{{$buy->bracelet_price}}"
                                       required/>
                            @endif

                            <select class="form-control" name="stone">
                                <option value="biruza">БИРЮЗА</option>
                                <option value="korall">КОРАЛЛ</option>
                                <option value="ametist">АМЕТИСТ</option>
                                <option value="malahit">МАЛАХИТ</option>
                            </select>
                            <input type="email" name="email" class="form-control" placeholder="Email:" required/>
                            <input type="text" name="user" class="form-control" placeholder="Ваше Имя" required/>
                            <textarea class="form-control rounded-0" id="exampleFormControlTextarea1" rows="10"
                                      name="msg" placeholder="Сообщение:" style="max-height: 100px" required></textarea>
                            <input type="submit" name="submit" class="form-control"/>
                        </div>
                    </form>
                </div>
            @else
                <h1 style="color: orangered;">ДЛЯ ТОГО ЧТОБЫ ЗАБРОНИРОВАТЬ ТОВАР, ЗЕРГИСТРИРУЙТЕСЬ НА САЙТЕ</h1>
            @endif
        </div>
    </div>

@endsection