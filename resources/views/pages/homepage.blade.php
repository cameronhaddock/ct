<html>
<head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>

<body>
<div class="col-xs-offset-5 col-xs-2">
    <form name="uploadFile" action="?" method="post">
        <div class="form-group">
            <label>Product name</label>
            <input type="text" name="name" class="form-control">
        </div>
        <div class="form-group">
            <label>Quantity in stock</label>
            <input type="text" name="quantity" class="form-control">
        </div>
        <div class="form-group">
            <label>Price per item</label>
            <input type="text" name="price" class="form-control">
        </div>
        <div class="form-group">
            <a id="sendData" class="btn btn-default">Submit</a>
        </div>
    </form>
</div>

<script>
    $(function() {
        $('#sendData').on('click', function() {
            $.ajax({
                url: '{{ action('UploadController@uploadData') }}',
                type: 'post',
                data: $('[name=uploadFile]').serialize(),
                success: function (data) {

                }
            });
        });
    });
</script>
</body>
</html>