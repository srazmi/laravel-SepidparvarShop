@extends('layouts.organiq.mastermain')
@section('content')

<nav aria-label="خرده نان">
    <ol class="breadcrumb justify-content-right">
        <li class="breadcrumb-item"><a href="/">صفحه اصلی</a>
        <i class="fa fa-chevion-right"></i>
        </li>
        <li class="breadcrumb-item active" aria-current="page"> نتایج جستجو</li>
    </ol>
</nav>
<div class="col-auto mt-5">
    <span class="align-middle">{{$products->count()}} جستجو برای {{ request()->input('query') }}</span>
    <div class="list_grid_icon">
        <a href="javascript:Void(0);" class="shorting_icon grid_view active"><i class="ion-grid"></i></a>
        <a href="javascript:Void(0);" class="shorting_icon list_view"><i class="ion-navicon-round"></i></a>
    </div>
</div>
<section>
    <div class="container">  
        <div class="row shop_container grid_view"> 
        @foreach ($products as $product)
        {{-- @dd($products); --}}

            <div class="col-lg-4 col-sm-6">
                <div class="product">
                    <span class="pr_flash bg_green">فروش</span>
                    <div class="product_img">
                        <a href="#"><img src="{{asset('assets/images/product_img1.jpg')}}" alt="product_img1"></a>
                        <div class="product_action_box">
                            <ul class="list_none pr_action_btn">
                                <li><a href="#"><i class="ti-heart"></i></a></li>
                                <li><a href="#"><i class="ti-shopping-cart"></i></a></li>
                                <li><a class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="ti-eye"></i></a></li>
                            </ul>
                        </div>
                    </div>
                        
                    <div class="product_info">
                    <h6><a href="#">{{ $product->name }}</a></h6>
                        <div class="rating"><div class="product_rate" style="width:80%"></div></div>
                        <span class="price">{{ $product->price }} </span>
                        <div class="pr_desc">
                        <p>{{ $product->short_description }}</p>
                        </div>
                        <div class="product_action_box">
                            <ul class="list_none pr_action_btn">
                                <li class="add-to-cart"><a href="#"><i class="ti-shopping-cart"></i> افزودن به سبد خرید</a></li>
                                <li><a href="#"><i class="ti-heart"></i></a></li>
                                <li><a class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="ti-eye"></i></a></li>
                            </ul>
                        </div>
                    </div>                
                </div>
            </div>
            
        @endforeach
        </div>
        <div class="row">
            <div class="col-12 mt-3 mt-lg-4">
            {{-- {{ $products->appends(request()->input())->links() }} --}}
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1"><i class="ion-ios-arrow-thin-left"></i></a></li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#"><i class="ion-ios-arrow-thin-right"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
@endsection