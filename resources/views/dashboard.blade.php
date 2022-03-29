@extends('Layouts.main')
@section('content')
<div class="container-fluid top" >
    <div >
        <section class="products">
            <!-- product name , image, detiils, and corresponding webpage links  -->
            @foreach($services as $service)
            <a id="" class="product" href="{{url('product_details')}}/{{$service->Id}}">

                <!-- Product Details -->
                <div class="pdct-heading">
                    <p class="pdct-title">
                        {{$service->Name}}
                    </p>
                </div>
                <div class="sec-middle">
                    <div class="pdct-image">
                        <img src="{{$service->Thumbnail}}" alt="Product Image">
                    </div>
                    <div class="pdct-info">
                        <p> {{$service->Total_Count}}+ Services Delivered</p>
                    </div>
                </div>
                <div class="pdct-desc">
                    <p class="pdct-details">
                        {{$service->Description}}
                    </p>
                </div>
            </a><!-- Product Details End-->
            @endforeach
        </section>

    <div class="clear"></div>
</div>
</div>
@endsection
