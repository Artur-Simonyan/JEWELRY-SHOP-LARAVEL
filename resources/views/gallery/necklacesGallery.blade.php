<div class="container-fluid">
    <div class="row">
        @foreach($list as $item)
            <div id="gallery">
                <div class="col-sm-4" style="padding: 20px;">
                    <img src="../uploads/necklaces/{{$item->necklace_name}}" class="img-thumbnail">
                </div>
            </div>

        @endforeach
        {{$list->links()}}
    </div>
    <div class="copy"> Copyright &copy 2018</div>
</div>
