<section class="container pt-5">

    <div class="row">
        <div class="col-md-8">
            <div class="container">
                <div>
                    <center>
                        <h3>CUK CULTURAL WEEK</h3>
                    </center>
                </div>
                <div>
                    <img src="assets/images/CUK.png" class="cuk_image_display w-100 h-90" style="height: 600px;"
                        alt="cultural image">

                </div>
            </div>
        </div>

        <div class="col-6 col-md-4 col-sm-2 mt-5">
            <div class="container">
                <div>
                    <div class="card" style="width: 100%;">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><span class="font-dark">Date :</span> 24 March 2023</li>
                            <li class="list-group-item"><span class="font-dark">Time :</span> 7:00 pm (UTC+3)</li>
                            <li class="list-group-item"><span class="font-dark">Reg. Deadline :</span> 23 March 2023
                            </li>
                            <li class="list-group-item"><span class="font-dark">Venue :</span> Cooperative University
                                Karen, Nairobi
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="mt-5">
                    <h5 class="card-title">
                        <center>
                            <h3>Purchase Ticket</h3>
                        </center>
                    </h5>
                    <form action="" method="">
                    @csrf
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title">
                            <p>CUK STUDENTS ( Unlimited tickets)</p>
                            </p>
                            <hr>
                            <div class="table mb-5">
                                <table class="table table-light table-borderless table-hover text-center mb-0">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th> TICKET PRICE:
                                            </th>
                                            <th>Quantity</th>
                                            <th>Sub Total</th>

                                        </tr>
                                    </thead>
                                    <tbody class="align-middle">

                                        <tr>
                                            <td>KSH200.00</td>
                                            <td class="align-middle">
                                                <div class="input-group quantity mx-auto" style="width: 100px;">
                                                    <div class="input-group-btn">
                                                        <a href="#!" class="btn btn-sm btn-primary btn-minus">
                                                            <i class="fa fa-minus"></i>
                                                        </a>
                                                    </div>
                                                    <input type="text"
                                                        class="form-control form-control-sm bg-secondary border-0 text-center"
                                                        value="0" min="0" name="quantity">
                                                    <div class="input-group-btn">
                                                        <a class="btn btn-sm btn-primary btn-plus">
                                                            <i class="fa fa-plus"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>KSH400.00</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                    <div class="card mt-4" style="width: 100%;">
                        <div class="card-body">
                            <p class="card-title">
                            <p>CUK STUDENTS ( Unlimited tickets)</p>
                            </p>
                            <hr>
                            <div class="table-responsive mb-5">
                                <table class="table table-light table-borderless table-hover text-center mb-0">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th> TICKET PRICE:
                                            </th>
                                            <th>Quantity</th>
                                            <th>Sub Total</th>

                                        </tr>
                                    </thead>
                                    <tbody class="align-middle">

                                        <tr>
                                            <td>KSH200.00</td>
                                            <td class="align-middle">
                                                <div class="input-group quantity mx-auto" style="width: 100px;">
                                                    <div class="input-group-btn">
                                                        <button class="btn btn-sm btn-primary btn-minus">
                                                            <i class="fa fa-minus"></i>
                                                        </button>
                                                    </div>
                                                    <input type="text"
                                                        class="form-control form-control-sm bg-secondary border-0 text-center"
                                                        value="0" name="quantity">
                                                    <div class="input-group-btn">
                                                        <button class="btn btn-sm btn-primary btn-plus">
                                                            <i class="fa fa-plus"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>KSH400.00</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                    <div class="card mt-4" style="width: 100%;">
                        <div class="card-body">
                            <p class="card-title">
                            <p>CUK STUDENTS ( Unlimited tickets)</p>
                            </p>
                            <hr>
                            <div class="table-responsive mb-5">
                                <table class="table table-light table-borderless table-hover text-center mb-0">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th> TICKET PRICE:
                                            </th>
                                            <th>Quantity</th>
                                            <th>Sub Total</th>

                                        </tr>
                                    </thead>
                                    <tbody class="align-middle">

                                        <tr>
                                            <td>KSH200.00</td>
                                            <td class="align-middle">
                                                <div class="input-group quantity mx-auto" style="width: 100px;">
                                                    <div class="input-group-btn">
                                                        <button class="btn btn-sm btn-primary btn-minus">
                                                            <i class="fa fa-minus"></i>
                                                        </button>
                                                    </div>
                                                    <input type="text"
                                                        class="form-control form-control-sm bg-secondary border-0 text-center"
                                                        value="0" name="quantity">
                                                    <div class="input-group-btn">
                                                        <button class="btn btn-sm btn-primary btn-plus">
                                                            <i class="fa fa-plus"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>KSH400.00</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                    {{-- </form> --}}
                </div>

            </div>
            <div>
                <a href="{{ url('/attendeedetails') }}">Go to attendee details</a>
            </div>

        </div>
    </div>
</section>
<script>
    // // Find the fa-plus button and add a click event listener
    // $('.btn-plus').on('click', function() {
    //     // Find the quantity input and get its current value
    //     var quantityInput = $(this).closest('.quantity').find('input[name="quantity"]');
    //     var currentQuantity = parseInt(quantityInput.val());

    //     // Add 1 to the current value and set the new value to the quantity input
    //     var newQuantity = currentQuantity + 1;
    //     quantityInput.val(newQuantity);

    //     // Calculate and update the sub total
    //     var ticketPrice = 200.00; // Replace with the actual ticket price
    //     var subTotal = newQuantity * ticketPrice;
    //     $(this).closest('tr').find('td:last').text('KSH' + subTotal.toFixed(2));
    // });
    // Product Quantity
</script>
