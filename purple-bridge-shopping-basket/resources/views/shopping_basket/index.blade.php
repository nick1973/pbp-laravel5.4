<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <title>PBP Shopping Basket</title>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="container">
    <img src="pbp_header.png">
    {{--Items--}}
    <div class="col-lg-4 col-md-4">
        @foreach ($errors->all() as $error)
            <div class="bg-danger">{{ $error }}</div>
        @endforeach
        <h3>Your Shopping Basket:</h3>
        <div class="well">
            <form action="/" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="exampleInputEmail1">Item</label>
                    <select id="item" name="item" class="form-control">
                        <option>Please Choose</option>
                        <option>Oranges</option>
                        <option>Apples</option>
                        <option>Bananas</option>
                        <option>Pears</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Price</label>
                    <input id="price" name="price" type="text" class="form-control" placeholder="Price">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">How Many</label>
                    <input onkeyup="howMany()" id="amount" name="amount" type="text" class="form-control" placeholder="Quantity">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Total</label>
                    <input id="total" type="text" class="form-control" placeholder="Total">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>
    </div>
</div>
<script>
    $("#item").click(function(){
        var item = $("#item").val()
         //console.log(item)
        getPrice(item)
    })

    function getPrice(item){
        switch(item) {
            case 'Please Choose':
                $("#price").val('')
                $("#amount").val('')
                $("#price").val('')
                $("#total").val('')
                break;
            case 'Oranges':
                $("#price").val(2.99)
                break;
            case 'Apples':
                $("#price").val(0.99)
                break;
            case 'Bananas':
                $("#price").val(1.99)
                break;
            case 'Pears':
                $("#price").val(0.50)
                break;
            default:
                break;
        }
    }

    function howMany(){
        var amount = $("#amount").val()
        var total = amount * $("#price").val()
        $("#total").val(total.toFixed(2))
    }
</script>
</body>
</html>