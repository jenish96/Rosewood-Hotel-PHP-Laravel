@extends('user.master.masterpage')

@section('title')
    Rosewood - Wallet
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
        <h2 style="text-align: center; color:white;">My Wallet</h2>
    </div>
    <div class="cart-area section-padding">
        <div class="container">
            <div class="form">
                <div class="cart-wrapper">
                    <div class="row">
                        <div class="col-12">
                            <form action="https://wpocean.com/html/tf/parador/cart">
                                <table class="table-responsive cart-wrap" border="1">
                                    <thead>
                                        <tr><h2 style="background-color: rgb(182, 19, 19); padding:10px;color:white;">Wallet</h2></tr>
                                        <tr>
                                            <th>No</th>
                                            {{-- <th class="images images-b">Booking Id</th> --}}
                                            <th class="images images-b">Type</th>
                                            <th class="product-2">Amount</th>
                                            <th class="images images-b">Remark</th>
                                            {{-- <th class="pr">Check-Out</th> --}}
                                            
                                            {{-- <th class="remove remove-b">Pay</th> --}}
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $totalAmount=0; $debit=0; ?>
                                        @foreach ($walletData as $row)
                                        
                                        <?php 
                                        if($row["type"]=="credit")
                                        {
                                            $totalAmount = $totalAmount + $row["amount"];
                                        }
                                        else {
                                            
                                            $debit = $debit + $row["amount"];
                                        }
                                        ?>
                                            <tr>
                                                <td>{{ $loop->index + 1 }}</td>
                                                {{-- <td>{{ $row->booking_id }}</td> --}}
                                                <td>{{ $row->type }}</td>
                                                <td>{{ $row->amount }}</td>
                                                <td>{{ $row->remark }}</td>
                                            </tr>
                                        @endforeach
                                        <?php $totalAmount = $totalAmount - $debit; ?>
                                    </tbody>
                                </table>
                            </form>
                        </div>
                    </div>
                    <br><br><br><br>
            
                    <h4 style="border:1px solid brown; padding:10px;color:rgb(189, 70, 70);"> <b>Total Amount :</b> <b style="float: right;"><?php  $balance = $totalAmount; echo $balance; ?></b></h4>
                          
                </div>
            </div>
        </div>
    </div>

@endsection

@section('js')
@endsection
