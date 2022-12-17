@extends('layout.homelayout')
@section('content')
<div class="breadcrumbs">
    <div class="container">
       <div class="row ">
          
          <div class="col-lg-6 col-md-6 col-12  d-flex justify-content-start">
             <ul class="breadcrumb-nav">
                <li><a href="index.html"><i class="lni lni-home"></i> Home</a></li>
                <li><a href="javascript:void(0)">Shop</a></li>
                <li>Shop Grid</li>
             </ul>
          </div>
       </div>
    </div>
 </div>
 <section class="product-grids section">
    <div class="container-xxl">
       <div class="row">
          <div class="col-lg-3 col-12">
             <div class="product-sidebar">
                
                <div class="single-widget">
                 <div class="section-title "  style="  background-image: url(upload/productImage/line.jpg);">
                   <h5>DANH MỤC</h5>
                </div>
                   <ul class="list mt-20">
                    @foreach ($category as $cate)
                    <li>
                        <a href="{{URL::to('danh-muc-san-pham/'.$cate->category_id)}}">{{$cate->category_name}}</a><span>(1138)</span>
                     </li>

                    @endforeach
                    
                     
                   </ul>
                </div>
                <div class="single-widget range">
                  <div class="section-title mb-20 "  style="  background-image: url(upload/productImage/line.jpg);">
                   <h5>GIÁ</h5>
                  </div>
                   <input type="range" class="form-range" name="range" step="1" min="100" max="10000" value="10" onchange="rangePrimary.value=value">
                   <div class="range-inner">
                      <label>$</label>
                      <input type="text" id="rangePrimary" placeholder="100" />
                   </div>
                </div>
                <div class="single-widget condition">
                   <h3>Lọc theo giá</h3>
                   <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault1">
                      <label class="form-check-label" for="flexCheckDefault1">
                      $50 - $100L (208)
                      </label>
                   </div>
                   <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault2">
                      <label class="form-check-label" for="flexCheckDefault2">
                      $100L - $500 (311)
                      </label>
                   </div>
                   <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault3">
                      <label class="form-check-label" for="flexCheckDefault3">
                      $500 - $1,000 (485)
                      </label>
                   </div>
                   <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault4">
                      <label class="form-check-label" for="flexCheckDefault4">
                      $1,000 - $5,000 (213)
                      </label>
                   </div>
                </div>
                <div class="single-widget condition">
                 <div class="section-title mb-20 "  style="  background-image: url(upload/productImage/line.jpg);">
                   <h5>THƯƠNG HIỆU</h5>
                  </div>
                  @foreach ($brands as $brand)
                      
                   <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault11">
                      <label class="form-check-label" for="flexCheckDefault11">
                        <a href="{{URL::to('thuong-hieu-san-pham/'.$brand->brand_id)}}" style="color: gray">{{$brand->brand_name}}</a>
                      </label>
                   </div>
                   @endforeach
                </div>
             </div>
          </div>
          <div class="col-lg-9 col-12">
             <div class="product-grids-head">
                <div class="product-grid-topbar">
                   <div class="row align-items-center ">
                      <div class="col-lg-6 col-md-8 col-12 " >
                         <div class="product-sorting">
                            <!-- <label for="sorting">Lọc:</label> -->
                            <select class="form-control" id="sorting">
                               <option>Cao -Giá cao</option>
                               <option>Thấp -Giá thấp</option>
                               <option>Từ A-Z</option>
                               <option>Từ Z-A</option>
                            </select>
                           
                         </div>
                      </div>
                      
                      
                   </div>
                </div>
                <div class="tab-content" id="nav-tabContent">
                   <div class="tab-pane fade show active" id="nav-grid" role="tabpanel" aria-labelledby="nav-grid-tab">
                      <div class="row">
                         <!-- <div class="col-lg-3 col-md-4 col-12 col-sm-4"> -->
                            @foreach ($brand_by_id as $product_shop)
                           <div class="col-6  col-sm-3 col-md-15 col-md-3 col-lg-3 col-md-15  ">
                            <div class="single-product">
                               <div class="product-image">
                                 <a  href="{{URL::to('/chi-tiet-san-pham/'.$product_shop->product_id)}}"> <img src="{{asset('upload/productImage/'.$product_shop->product_image)}}" alt="#"></a>
                                  <div class="button">
                                     <a href="product-details.html" class="btn"><i class="lni lni-cart"></i>Đặt hàng    </a>
                                  </div>
                               </div>
                               <div class="product-info">
                                  <span class="category">Watches</span>
                                  <h5 class="title" style="height:60px;width:100%">
                                     <a href="{{URL::to('/chi-tiet-san-pham/'.$product_shop->product_id)}}">{{$product_shop->product_name}}</a>
                                  </h5>
                                
                                  <div class="price">
                                     <span>{{number_format($product_shop->product_price)}}vnđ</span>
                                  </div>
                                  <span>4.0 Review(s)</span>
                               </div>
                            </div>
                         </div>
                         @endforeach
                      </div>
                      <div class="row">
                         <div class="col-12">
                            <div class="pagination right">
                               <ul class="pagination-list">
                                  {{-- <li><a href="javascript:void(0)">1</a></li>
                                  <li class="active"><a href="javascript:void(0)">2</a></li>
                                  <li><a href="javascript:void(0)">3</a></li>
                                  <li><a href="javascript:void(0)">4</a></li>
                                  <li><a href="javascript:void(0)"><i class="lni lni-chevron-right"></i></a></li> --}}
                                  {!!$brand_by_id->render()!!}
                               </ul>
                            </div>
                         </div>
                      </div>
                   </div>
                   <div class="tab-pane fade" id="nav-list" role="tabpanel" aria-labelledby="nav-list-tab">
                      <div class="row">
                         <div class="col-lg-12 col-md-12 col-12">
                            <div class="single-product">
                               <div class="row align-items-center">
                                  <div class="col-lg-4 col-md-4 col-12">
                                     <div class="product-image">
                                        <img src="assets/images/products/product-1.jpg" alt="#">
                                        <div class="button">
                                           <a href="product-details.html" class="btn"><i class="lni lni-cart"></i> Add to
                                           Cart</a>
                                        </div>
                                     </div>
                                  </div>
                                  <div class="col-lg-8 col-md-8 col-12">
                                     <div class="product-info">
                                        <span class="category">Watches</span>
                                        <h4 class="title">
                                           <a href="product-grids.html">Xiaomi Mi Band 5</a>
                                        </h4>
                                        <ul class="review">
                                           <li><i class="lni lni-star-filled"></i></li>
                                           <li><i class="lni lni-star-filled"></i></li>
                                           <li><i class="lni lni-star-filled"></i></li>
                                           <li><i class="lni lni-star-filled"></i></li>
                                           <li><i class="lni lni-star"></i></li>
                                           <li><span>4.0 Review(s)</span></li>
                                        </ul>
                                        <div class="price">
                                           <span>$199.00</span>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                         <div class="col-lg-12 col-md-12 col-12">
                            <div class="single-product">
                               <div class="row align-items-center">
                                  <div class="col-lg-4 col-md-4 col-12">
                                     <div class="product-image">
                                        <img src="assets/images/products/product-2.jpg" alt="#">
                                        <span class="sale-tag">-25%</span>
                                        <div class="button">
                                           <a href="product-details.html" class="btn"><i class="lni lni-cart"></i> Add to
                                           Cart</a>
                                        </div>
                                     </div>
                                  </div>
                                  <div class="col-lg-8 col-md-8 col-12">
                                     <div class="product-info">
                                        <span class="category">Speaker</span>
                                        <h4 class="title">
                                           <a href="product-grids.html">Big Power Sound Speaker</a>
                                        </h4>
                                        <ul class="review">
                                           <li><i class="lni lni-star-filled"></i></li>
                                           <li><i class="lni lni-star-filled"></i></li>
                                           <li><i class="lni lni-star-filled"></i></li>
                                           <li><i class="lni lni-star-filled"></i></li>
                                           <li><i class="lni lni-star-filled"></i></li>
                                           <li><span>5.0 Review(s)</span></li>
                                        </ul>
                                        <div class="price">
                                           <span>$275.00</span>
                                           <span class="discount-price">$300.00</span>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                         <div class="col-lg-12 col-md-12 col-12">
                            <div class="single-product">
                               <div class="row align-items-center">
                                  <div class="col-lg-4 col-md-4 col-12">
                                     <div class="product-image">
                                        <img src="assets/images/products/product-3.jpg" alt="#">
                                        <div class="button">
                                           <a href="product-details.html" class="btn"><i class="lni lni-cart"></i> Add to
                                           Cart</a>
                                        </div>
                                     </div>
                                  </div>
                                  <div class="col-lg-8 col-md-8 col-12">
                                     <div class="product-info">
                                        <span class="category">Camera</span>
                                        <h4 class="title">
                                           <a href="product-grids.html">WiFi Security Camera</a>
                                        </h4>
                                        <ul class="review">
                                           <li><i class="lni lni-star-filled"></i></li>
                                           <li><i class="lni lni-star-filled"></i></li>
                                           <li><i class="lni lni-star-filled"></i></li>
                                           <li><i class="lni lni-star-filled"></i></li>
                                           <li><i class="lni lni-star-filled"></i></li>
                                           <li><span>5.0 Review(s)</span></li>
                                        </ul>
                                        <div class="price">
                                           <span>$399.00</span>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                         <div class="col-lg-12 col-md-12 col-12">
                            <div class="single-product">
                               <div class="row align-items-center">
                                  <div class="col-lg-4 col-md-4 col-12">
                                     <div class="product-image">
                                        <img src="assets/images/products/product-4.jpg" alt="#">
                                        <span class="new-tag">New</span>
                                        <div class="button">
                                           <a href="product-details.html" class="btn"><i class="lni lni-cart"></i> Add to
                                           Cart</a>
                                        </div>
                                     </div>
                                  </div>
                                  <div class="col-lg-8 col-md-8 col-12">
                                     <div class="product-info">
                                        <span class="category">Phones</span>
                                        <h4 class="title">
                                           <a href="product-grids.html">iphone 6x plus</a>
                                        </h4>
                                        <ul class="review">
                                           <li><i class="lni lni-star-filled"></i></li>
                                           <li><i class="lni lni-star-filled"></i></li>
                                           <li><i class="lni lni-star-filled"></i></li>
                                           <li><i class="lni lni-star-filled"></i></li>
                                           <li><i class="lni lni-star-filled"></i></li>
                                           <li><span>5.0 Review(s)</span></li>
                                        </ul>
                                        <div class="price">
                                           <span>$400.00</span>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                         <div class="col-lg-12 col-md-12 col-12">
                            <div class="single-product">
                               <div class="row align-items-center">
                                  <div class="col-lg-4 col-md-4 col-12">
                                     <div class="product-image">
                                        <img src="assets/images/products/product-7.jpg" alt="#">
                                        <span class="sale-tag">-50%</span>
                                        <div class="button">
                                           <a href="product-details.html" class="btn"><i class="lni lni-cart"></i> Add to
                                           Cart</a>
                                        </div>
                                     </div>
                                  </div>
                                  <div class="col-lg-8 col-md-8 col-12">
                                     <div class="product-info">
                                        <span class="category">Headphones</span>
                                        <h4 class="title">
                                           <a href="product-grids.html">PX7 Wireless Headphones</a>
                                        </h4>
                                        <ul class="review">
                                           <li><i class="lni lni-star-filled"></i></li>
                                           <li><i class="lni lni-star-filled"></i></li>
                                           <li><i class="lni lni-star-filled"></i></li>
                                           <li><i class="lni lni-star-filled"></i></li>
                                           <li><i class="lni lni-star"></i></li>
                                           <li><span>4.0 Review(s)</span></li>
                                        </ul>
                                        <div class="price">
                                           <span>$100.00</span>
                                           <span class="discount-price">$200.00</span>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                      <div class="row">
                         <div class="col-12">
                            <div class="pagination left">
                               <ul class="pagination-list">
                                  <li><a href="javascript:void(0)">1</a></li>
                                  <li class="active"><a href="javascript:void(0)">2</a></li>
                                  <li><a href="javascript:void(0)">3</a></li>
                                  <li><a href="javascript:void(0)">4</a></li>
                                  <li><a href="javascript:void(0)"><i class="lni lni-chevron-right"></i></a></li>
                               </ul>
                             
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </section>
    
@endsection