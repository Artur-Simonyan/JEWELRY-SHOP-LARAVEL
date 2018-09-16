<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>Add Product</title>
    <style>body {
            background: url({{asset('images/background.jpg')}});
            color: white
        }
    </style>
</head>
<body>
<form method="post"
      @if(!empty($ring->ring_id))
      action="/createRing/create"
      @elseif(!empty($bracelet->bracelet_id))
      action="/createBracelet/create"
      @elseif(!empty($necklace->necklace_id))
      action="/necklacesCatalog/create"
      @elseif(!empty($earring->earring_id))
      action="/earringCatalog/create"
      @endif
      enctype="multipart/form-data">
    <div class="form-group" style="width: 300px;">
        {{csrf_field()}}
        <input type="file" name="file" class="form-control-file"><br>
        Description:<br>
        <input type="text" name="description" class="form-control">
        Price:<br>
        @if(!empty($ring->ring_id))
            <input type="text" name="ring_price" value="0" class="form-control"/>
        @elseif(!empty($bracelet->bracelet_id))
            <input type="text" name="bracelet_price" value="0" class="form-control"/>
        @elseif(!empty($necklace->necklace_id))
            <input type="text" name="necklaces_price" value="0" class="form-control"/>
        @elseif(!empty($earring->earring_id))
            <input type="text" name="earring_price" value="0" class="form-control"/>
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