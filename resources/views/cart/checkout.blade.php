@extends('include.layout')
@section('title','checkout')
@section('content')

@foreach(['success','danger','info','warning'] as $msg)
@if(Session::has('alert-'.$msg))
  <h4 class="alert alert-{{ $msg }}">{{ Session::get('alert-'.$msg) }}<button class="close" data-dismiss="alert" aria-label="close">&times;</button></h4>
@endif
@endforeach
<div id="newupdate">
    <table border="1" width="80%" style="margin: 0 auto; font-size: 20px">
        <tr>
            <td>Name</td>
            <td>Image</td>
            <td>Quanlity</td>
            <td>Price</td>
            <td>Total</td>
            <td>Action</td>
        </tr>
        <form action="#" method="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <?php 
                $dem = 1;
            ?>
            @foreach($content as $c)
            
            <tr>
                <td>{{ $c->name }}</td>
                <td><img src="{{ asset('/public/img/'.$c->options['img']) }}" width="50px"  style="width: 150px" /></td>
                <td><input min="1" type="number" class="qty" value="{{ $c->qty }}" /> </td>
                <td>{{ number_format($c->price,0,",",".") }}</td>
                <td id="total-pro{{ $dem }}">{{ number_format($c->price*$c->qty,0,",",".") }}</td>
                <td>
                    <a class="btn btn-warning updatecart{{ $dem++ }}" id="{{ $c->rowId }}"><i class="fas fa-window-close"></i></a>
                    <a class="btn btn-danger" onclick="delete_cart('{{$c->rowId}}','{{route('cart.delete')}}')"><i class="fas fa-window-close"></i></a>
                </td>
            </tr>
            
            @endforeach
        </form>
    </table>    
    <h4 id="total-cart">Total:{{  $total }}</h4>
</div>
    <a class="btn btn-success"  href="{{ route('cart.book') }}" style="margin: auto 0; "  > Book</a>

@endsection