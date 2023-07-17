<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Show cart</title>
</head>

<body>
    <div class="cart_wrapper">
        @include('Customer.order.components.cart_component')
    </div>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
    <script>
        function cartUpdate(event) {
            event.preventDefault();
            let urlupdateCart = $('.updateCartUrl').data('url')
            let id = $(this).data('id');
            let quantity = $(this).parents('tr').find('input.quantity').val();
            $.ajax({
                type: "GET",
                url: urlupdateCart,
                data: {
                    id: id,
                    quantity: quantity,
                },
                success: function(data) {
                    if (data.code === 200)
                        $('.cart_wrapper').html(data.cart_component);
                },
                error: function() {

                }
            })
        }
        $(function() {
            $(document).on('click', '.cart_update', cartUpdate);
        })
    </script>
</body>

</html>
