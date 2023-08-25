@extends('user.master.masterpage')

@section('title')
    Rosewood - Coins
@endsection

@section('css')
@endsection

@section('main')
    <div class="preloader">
        <div class="vertical-centered-box">
            <div class="content">
                <div class="loader-circle"></div>
                <div class="loader-line-mask">
                    <div class="loader-line"></div>
                </div>
                <img src="assets/images/preloader.png" alt="">
            </div>
        </div>
    </div>

    <div class="row" style="background-color: rgb(206, 29, 29); padding:20px;">
        <h2 style="text-align: center; color:white;">Coins Details</h2>
    </div>

    <div class="cart-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-12">
                    <div class="form">
                        <form action="https://wpocean.com/html/tf/parador/cart">
                            <table class="table-responsive cart-wrap" border="1">
                                <thead>
                                    <tr>
                                        <h2 style="background-color: rgb(182, 19, 19); padding:10px;color:white;">Coin
                                            Details</h2>
                                    </tr>
                                    <tr>
                                        {{-- <th class="images images-b">Booking Id</th> --}}
                                        <th class="product-2">Type</th>
                                        <th class="pr">Coin</th>
                                        <th class="ptice">Remark</th>
                                        {{-- <th class="stock">Date</th> --}}
                                        {{-- <th class="remove remove-b">Pay</th> --}}
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $cointotal=0; $debit=0; ?>
                                    @foreach ($coinData as $row)
                                    <?php 
                                    if($row["type"]=="credit")
                                    {
                                        $cointotal = $cointotal + $row["coins"];
                                    }
                                    else {
                                        
                                        $debit = $debit + $row["coins"];
                                    }
                                    ?>
                                        <tr>
                                            {{-- <td>{{ $row->booking_id }}</td> --}}
                                            <td>{{ $row->type }}</td>
                                            <td>{{ $row->coins }}</td>
                                            <td>{{ $row->remark }}</td>
                                            {{-- <td><?php echo date('d-M-Y', strtotime($row->coin_date)); ?></td> --}}
                                        </tr>
                                    @endforeach

                                    <?php $cointotal = $cointotal - $debit; ?>
                                </tbody>
                            </table>
                        </form>
                        <br>
                        
                        
                    </div>
                </div>
                <div class="col-lg-5 col-12">
                    <div class="form">
                        <form action="https://wpocean.com/html/tf/parador/cart">
                            <table class="table-responsive cart-wrap" border="1">
                                <thead>
                                    <tr>
                                        <h2 style="background-color: rgb(182, 19, 19); padding:10px;color:white;">Coin
                                            Reddem</h2>
                                    </tr>
                                    <tr>
                                        <th>No</th>
                                        <th>Coin</th>
                                        <th>Amount</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $redeemtotal = 0; ?>
                                    @foreach ($redeemCoin as $row)
                                    <?php $redeemtotal = $redeemtotal + $row["coin"]; ?>
                                        <tr>
                                            <td>{{ $loop->index + 1 }}
                                            <td>{{ $row->coin }}</td>
                                            <td>{{ $row->amount }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
            <br><br><br><br>
            
            <h4 style="border:1px solid brown; padding:10px;color:rgb(189, 70, 70);"> <b>Total Coin :</b> <b style="float: right;"><?php  $balance = $cointotal; echo $balance; ?></b></h4>
                        
            <br>
            <?php if($balance>=1000) { ?>
            <div class="row" style="text-align: center;">
                <div>
                    <a href="/user/redeemCoin" class="theme-btn">Redeem <i class="fa fa-angle-double-right"></i></a>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
@endsection

@section('js')
@endsection
