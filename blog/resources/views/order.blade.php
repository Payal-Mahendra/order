<html>
  <head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/order.css">
    
    
  </head>
  <body>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<form name="myForm" method="POST" action="submit">
        @csrf
            <div class="well">
                <div class="card-header">ORDER</div>
                    <div class="form-group">
                        <div class="form-label-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" id="inputfirst_name" name="first_name" class="form-control" placeholder="first_name" autofocus="autofocus"/>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" id="inputlast_name" name="last_name" class="form-control" placeholder="last_name"/>
                                </div>
                            </div>
                        </div>
                     </div>
                     <div class="form-group">
                        <div class="form-label-group">
                            <input type="text" id="inputphone" name="phone" class="form-control" placeholder="phone"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-label-group">
                            <input type="text" id="inputorder_id" name="order_id" class="form-control" placeholder="order_id"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-label-group">
                            <input type="text" id="inputorder_date" name="order_date" class="form-control" placeholder="order_date"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-label-group">
                            <input type="text" id="inputstatus" name="status" class="form-control" placeholder="status"/>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="form-label-group">
                        <input type="text" id="inputproduct" name="product" class="form-control" placeholder="product"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-label-group">
                            <input type="text" id="inputproduct_line" name="product_line" class="form-control" placeholder="product_line">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-label-group">
                            <input type="text" id="inputunit_price" name="unit_price" class="form-control" placeholder="unit_price">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-label-group">
                            <input type="text" id="inputqty" name="qty" class="form-control" placeholder="qty">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-label-group">
                            <input type="text" id="inputline_total" name="line_total" class="form-control" placeholder="line_total">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="form-label-group">
                            <input type="text" id="inputcountry_code" name="country_code" class="form-control" placeholder="country_code">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-label-group">
                            <input type="text" id="inputbill_amount" name="bill_amount" class="form-control" placeholder="bill_amount">
                        </div>
                    </div>                    
                    <button type="submit">Save</button>   
                    <button type="submit">Show</button>               
             </div>
             
        </form>
        </body>
        </html>