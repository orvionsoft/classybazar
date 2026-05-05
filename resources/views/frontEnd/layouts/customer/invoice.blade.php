@extends('frontEnd.layouts.master')
@section('title','Customer Invoice')
@section('content')
<style>
    .customer-invoice {
        margin: 25px 0;
    }
    .invoice_btn{
        margin-bottom: 15px;
        text-align: center; /* বাটন সেন্টার করার জন্য */
    }
    .btn-center {
        display: inline-block;
    }

    td{
        font-size: 16px;
    }
   
   @media print {
       @page {
           size: A4;
           margin: 0;
       }
       
       body {
           visibility: hidden;
           margin: 0;
           padding: 0;
       }
       
       .print-area, .print-area * {
           visibility: visible;
       }
       
       .print-area {
           position: absolute;
           left: 0;
           top: 0;
           width: 100%;
           height: 100%;
           margin: 0;
           padding: 20px;
           background: #f9f9f9;
       }
       
       /* URL এবং অন্যান্য অপ্রয়োজনীয় অংশ লুকান */
       a[href]:after {
           content: none !important;
       }
       
       /* হেডার ফুটার লুকান */
       header, footer, nav, .navbar, .no-print {
           display: none !important;
       }
       
       /* টেবিলের সাইজ ঠিক রাখুন */
       table {
           page-break-inside: avoid;
       }
       
       tr {
           page-break-inside: avoid;
       }
   }
</style>
<section class="customer-invoice">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <a href="{{route('customer.orders')}}" class="no-print"><strong><i class="fa-solid fa-arrow-left"></i> Back To Order</strong></a>
            </div>
            <div class="col-sm-6 text-right">
                <!-- এই div টি খালি রাখা হয়েছে ব্যালেন্সের জন্য -->
            </div>
        </div>
        
        <!-- বাটন সেন্টার করার জন্য নতুন row যোগ করা হলো -->
        <div class="row">
            <div class="col-sm-12 text-center">
                <button onclick="printInvoice()" class="no-print invoice_btn btn btn-primary">
                    <i class="fa fa-print"></i> Print Invoice
                </button>
            </div>
        </div>
        
        <div class="row">
            <div class="col-sm-12">
                <div class="invoice-innter print-area" style="width: 900px;margin: 0 auto;background: #f9f9f9;overflow: hidden;padding: 30px;padding-top: 0;">
                    <table style="width:100%">
                        <tr>
                            <td style="width: 40%; float: left; padding-top: 15px;">
                                <img src="{{asset($generalsetting->white_logo)}}" style="margin-top:25px !important;width:150px" alt="">
                                <p style="font-size: 14px; color: #222; margin: 20px 0;"><strong>Payment Method:</strong> <span style="text-transform: uppercase;">{{$order->payment?$order->payment->payment_method:''}}</span></p>
                                <div class="invoice_form">
                                    <p style="font-size:16px;line-height:1.8;color:#222"><strong>Invoice From:</strong></p>
                                    <p style="font-size:16px;line-height:1.8;color:#222">{{$generalsetting->name}}</p>
                                    <p style="font-size:16px;line-height:1.8;color:#222">{{$contact->phone}}</p>
                                    <p style="font-size:16px;line-height:1.8;color:#222">{{$contact->email}}</p>
                                    <p style="font-size:16px;line-height:1.8;color:#222">{{$contact->address}}</p>
                                </div>
                            </td>
                            <td  style="width:60%;float: left;">
                                <div class="invoice-bar" style=" background: #00aef0; transform: skew(38deg); width: 100%; margin-left: 65px; padding: 20px 60px; ">
                                    <p style="font-size: 30px; color: #fff; transform: skew(-38deg); text-transform: uppercase; text-align: right; font-weight: bold;">Invoice</p>
                                </div>
                                <div class="invoice-bar" style="background:#fff; transform: skew(36deg); width: 80%; margin-left: 182px; padding: 12px 32px; margin-top: 6px;text-align:right">
                                   <p style="transform: skew(-36deg);display:inline-block">Invoice Date: <strong>{{$order->created_at->format('d-m-y')}}</strong></p>
                                   <p style="transform: skew(-36deg);display:inline-block; margin-left: 10px;">Invoice No: <strong>{{$order->invoice_id}}</strong></p>
                                </div>
                                <div class="invoice_to" style="padding-top: 20px;">
                                    <p style="font-size:16px;line-height:1.8;color:#222;text-align: right;"><strong>Invoice To:</strong></p>
                                    <p style="font-size:16px;line-height:1.8;color:#222;text-align: right;font-weight:normal">{{$order->shipping?$order->shipping->name:''}}</p>
                                    <p style="font-size:16px;line-height:1.8;color:#222;text-align: right;font-weight:normal">{{$order->shipping?$order->shipping->phone:''}}</p>
                                    <p style="font-size:16px;line-height:1.8;color:#222;text-align: right;font-weight:normal">{{$order->shipping?$order->shipping->address:''}}</p>
                                    <p style="font-size:16px;line-height:1.8;color:#222;text-align: right;font-weight:normal">{{$order->shipping?$order->shipping->area:''}}</p>
                                </div>
                            </td>
                        </tr>
                    </table>
                    
                    <table class="table" style="margin-top: 30px; width: 100%; border-collapse: collapse;">
                        <thead style="background: #00aef0; color: #fff;">
                            <tr>
                                <th style="padding: 10px; text-align: left;">SL</th>
                                <th style="padding: 10px; text-align: left;">Product</th>
                                <th style="padding: 10px; text-align: left;">Price</th>
                                <th style="padding: 10px; text-align: left;">Qty</th>
                                <th style="padding: 10px; text-align: left;">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($order->orderdetails as $key=>$value)
                            <tr>
                                <td style="padding: 8px; border-bottom: 1px solid #ddd;">{{$loop->iteration}}</td>
                                <td style="padding: 8px; border-bottom: 1px solid #ddd;">{{$value->product_name}}</td>
                                <td style="padding: 8px; border-bottom: 1px solid #ddd;">৳{{$value->sale_price}}</td>
                                <td style="padding: 8px; border-bottom: 1px solid #ddd;">{{$value->qty}}</td>
                                <td style="padding: 8px; border-bottom: 1px solid #ddd;">৳{{$value->sale_price*$value->qty}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    
                    <div class="invoice-bottom">
                       
                        <table class="table" style="width: 300px; float: right; margin-bottom: 30px; border-collapse: collapse;">
                            <tbody style="background:#00aef0">
                                <tr style="color:#fff">
                                    <td style="padding: 8px;"><strong>SubTotal</strong></td>
                                    <td style="padding: 8px;"><strong>৳{{$order->orderdetails->sum('sale_price')}}</strong></td>
                                </tr>
                                <tr style="color:#fff">
                                    <td style="padding: 8px;"><strong>Shipping(+)</strong></td>
                                    <td style="padding: 8px;"><strong>৳{{$order->shipping_charge}}</strong></td>
                                </tr>
                                <tr style="color:#fff">
                                    <td style="padding: 8px;"><strong>Discount(-)</strong></td>
                                    <td style="padding: 8px;"><strong>৳{{$order->discount}}</strong></td>
                                </tr>
                                <tr style="background:#00aef0;color:#fff">
                                    <td style="padding: 8px;"><strong>Final Total</strong></td>
                                    <td style="padding: 8px;"><strong>৳{{$order->amount}}</strong></td>
                                </tr>
                            </tbody>
                        </table>
                        
                        <div class="terms-condition" style="overflow: hidden; width: 100%; text-align: center; padding: 20px 0; border-top: 1px solid #ddd;">
                            <h5 style="font-style: italic;"><a href="{{route('page',['slug'=>'terms-condition'])}}" style="text-decoration: none; color: #333;">Terms & Conditions</a></h5>
                            <p style="text-align: center; font-style: italic; font-size: 15px; margin-top: 10px;">* This is a computer generated invoice, does not require any signature.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
function printInvoice() {
    // প্রিন্ট ডায়ালগ খোলার আগে একটি ছোট ডিলে যোগ করুন
    setTimeout(function() {
        window.print();
    }, 100);
}
</script>

@endsection