@extends('layouts.catalogHeader')
@section('content')

    <div class="container-fluid" style="margin-top: 15px;">
        <div class="row" style="margin-left: 14%;">

            <div  class="col-sm-4" style="height: 320px;">
                @if(isset($img->ring_name))
                    <img src="{{asset ("/uploads/rings/{$img->ring_name}")}}" class="img-thumbnail">
                @elseif(isset($img->necklace_name))
                    <img src="{{asset ("/uploads/necklaces/{$img->necklace_name}")}}" class="img-thumbnail">
                @elseif(isset($img->earring_name))
                    <img src="{{asset ("/uploads/earring/{$img->earring_name}")}}" class="img-thumbnail">
                @elseif(isset($img->bracelet_name))
                    <img src="{{asset ("/uploads/bracelets/{$img->bracelet_name}")}}" class="img-thumbnail">
                @endif
            </div>
            <div  class="col-sm-6">
                <div class="form-group" id="aboutText">
                @if(isset($img->description))
                        <textarea class="form-control rounded-0" id="exampleFormControlTextarea1"  rows="12"><?php echo $img->description;?></textarea>
                @elseif(isset($img->description))
                        <textarea class="form-control rounded-0" id="exampleFormControlTextarea1"  rows="12"><?php echo $img->description;?></textarea>
                @elseif(isset($img->description))
                        <textarea class="form-control rounded-0" id="exampleFormControlTextarea1"  rows="12"><?php echo $img->description;?></textarea>
                @elseif(isset($img->description))
                        <textarea class="form-control rounded-0" id="exampleFormControlTextarea1"  rows="12"><?php echo $img->description;?></textarea>
                @endif
                </div>
            </div>
        </div>
    </div>

    @endsection