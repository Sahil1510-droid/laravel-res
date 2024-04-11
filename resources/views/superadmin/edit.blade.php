<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <title>Edit Restaurant</title>
</head>

<body>
    <center>
        <h1>Restaurant Form</h1>
    </center>
    <div class="container py-3">
        <form action="{{ url('update_data', $data->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="mb-3">
                    <strong><label for="" class="form-label">Restaurant</label></strong>
                    <input type="text" name="name" class="form-label" id="fromGroupExampleInput"
                        value="{{ $data->name }}">
                </div>
                <div class="mb-3">
                    <strong><label for="" class="form-label">Type</label></strong>
                    <input type="text" name="type" class="form-label" id="fromGroupExampleInput"
                        value="{{ $data->type }}">
                </div>
                <div class="mb-3">
                    <strong><label for="" class="form-label">Place</label></strong>
                    <input type="text" name="place" class="form-label" id="fromGroupExampleInput"
                        value="{{ $data->place }}">
                </div>
                <div class="mb-3">
                    <strong><label for="" class="form-label">Food</label></strong>
                    <input type="text" name="food" class="form-label" id="fromGroupExampleInput"
                        value="{{ $data->food }}">
                </div>
            </div>
            <button type="submit" value="Update" class="btn btn-primary" style="border-radius: 10px">Update</button>
        </form>
    </div>
</body>

</html>
