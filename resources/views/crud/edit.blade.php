<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>EDIT</title>
    <style>body {
            background: url({{asset('images/background.jpg')}});
            color: white;
        }</style>
</head>
<body>
<form method="post"
      @if(isset($edit->ring_id))
      action="{{url('/ringCatalog/'.$edit->ring_id)}}"
      @elseif(isset($edit->bracelet_id))
      action="{{url('/braceletCatalog/'.$edit->bracelet_id)}}"
      @elseif(isset($edit->necklace_id))
      action="{{url('/necklacesCatalog/'.$edit->necklace_id)}}"
      @elseif(isset($edit->earring_id))
      action="{{url('/earringCatalog/'.$edit->earring_id)}}"
      @endif
      enctype="multipart/form-data">
    <div class="form-group" style="width: 300px;">
        {{method_field('PUT')}}
        {{csrf_field()}}
        <input type="file" name="file" class="form-control-file"><br>
        <input type="hidden" value="{{csrf_token()}}" name="_token">
        @if(isset($edit->ring_id))
            <input type="hidden" name="ring_name" class="form-control"><br>
        @elseif(isset($edit->bracelet_id))
            <input type="hidden" name="bracelet_name" class="form-control"><br>
        @elseif(isset($edit->necklace_id))
            <input type="hidden" name="necklace_name" class="form-control"><br>
        @elseif(isset($edit->earring_id))
            <input type="hidden" name="earring_name" class="form-control"><br>
        @endif
        Description:<br>
        <input type="text" name="description" value="{{$edit->description}}" class="form-control">
        Price:<br>
        @if(isset($edit->ring_id))
            <input type="text" name="ring_price" value="{{$edit->ring_price}}" class="form-control"/>
        @elseif(isset($edit->bracelet_id))
            <input type="text" name="bracelet_price" value="{{$edit->bracelet_price}}" class="form-control"/>
        @elseif(isset($edit->necklace_id))
            <input type="text" name="necklaces_price" value="{{$edit->necklace_price}}" class="form-control"/>
        @elseif(isset($edit->earring_id))
            <input type="text" name="earring_price" value="{{$edit->earring_price}}" class="form-control"/>
        @endif
        Available:
        <input type="radio" name="check" class="form-control" value="1"/>
        Not Available:
        <input type="radio" name="check" class="form-control" value="0"/>
    </div>
    <input type="submit" value="Submit" name="save" class="btn btn-primary">
</form>

</body>
</html>
