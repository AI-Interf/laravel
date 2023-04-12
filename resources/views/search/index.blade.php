<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Laravel 9 CRUD Tutorial Example</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>
    <div class="container mt-2">
        <div class="row">
        <div class="col-md-6 summary">
                    <div>
                        <h5><b>Summary</b></h5>
                    </div>
                    <hr>
                    <form method="POST" action="{{ url('place-order') }}">
                    {!! csrf_field() !!}
                      <input id="name" name="name" value="{{Auth::user()->name}}" placeholder="Enter your Name">
                      <input id="email" name="email" value="{{Auth::user()->email}}" placeholder="Enter your Email">
                                  
                    
                    <div class="row" style="padding: 2vh 0;">
                        <div class="col">TOTAL PRICE</div>
                        <div class="col text-right">$25</div>
                    </div> 
                    <!-- <input type="hidden" name="payment_mode" value="COD">
                    <button class="btn">Checkout</button> -->
                    <div id="paypal-button-container"></div>
                    
                    </form> 
                </div>
        </div>

</div>

    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://www.paypal.com/sdk/js?client-id=AcY1f8v2r168lAn3UPguYuZ6aZ3rr_tBenT_H2kwtFG1e8-utfQxW4kg2SXx4EDLX5ywsQgTHRwdcIci&currency=USD"></script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    
<script type="text/javascript">


paypal.Buttons({

// Sets up the transaction when a payment button is clicked
    createOrder: function(data, actions) {
        return actions.order.create({
        purchase_units: [{
        amount: {
            value: '1'
        },


        }]
        });
    },

    // Finalize the transaction after payer approval
    onApprove: function(data, actions) {
    return actions.order.capture().then(function(orderData) {
    
        var transaction = orderData.purchase_units[0].payments.captures[0];

        var name = document.getElementById("name").value;
        var email = document.getElementById("email").value;

        $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
            url: "/place-order",
            method: "POST",
            data: {
                name: $('#name').val(),
                email: $('#email').val(),
                'payment_mode': "Paypal",
                'payment_type': "Paid",
                'payment_id':transaction.id,

            },
            success: function (response) {
				swal('', response.status, 'success')
                .then((value) => {
                    window.location.href = '/dashboard';
                });
               
            }
        }); 
  
    });
    }
    }).render('#paypal-button-container');



</script>


</body>
</html>