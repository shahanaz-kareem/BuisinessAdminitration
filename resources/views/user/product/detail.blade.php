
	
	
@extends('layouts.app')

@section('content')  	



<div class="container my-5">
    <div class="row details-snippet1">
        <div class="col-md-7">
            <div class="row">
                <div class="col-md-2 mini-preview">
                    <img class="img-fluid" src="https://cdn.pixabay.com/photo/2015/07/24/18/40/model-858754_960_720.jpg" alt="Preview">
                    <img class="img-fluid" src="https://cdn.pixabay.com/photo/2015/07/24/18/38/model-858749_960_720.jpg" alt="Preview">
                    <img class="img-fluid" src="https://cdn.pixabay.com/photo/2015/07/24/18/39/model-858751_960_720.jpg" alt="Preview">
                    <img class="img-fluid" src="https://cdn.pixabay.com/photo/2015/07/24/18/37/model-858748_960_720.jpg" alt="Preview">
                </div>
                <div class="col-md-10">
                    <div class="product-image">
                        <img class="img-fluid" src="https://cdn.pixabay.com/photo/2015/07/24/18/40/model-858753_960_720.jpg" alt="Main Image">
                    </div>

                </div>
            </div>

        </div>
        <div class="col-md-5">
            <div class="category"><span class="theme-text">Category:</span> Women</div>
            <div class="title">Black Dress For Women</div>
            <div class="ratings my-2">
                <div class="stars d-flex">
                    <div class="theme-text mr-2">Product Ratings: </div>
                    <div class="d-flex">
                        <div>&#9733;</div>
                        <div>&#9733;</div>
                        <div>&#9733;</div>
                        <div>&#9733;</div>
                        <div>&#9733;</div>
                    </div>
                    <div class="ml-2">(4.5) 50 Reviews</div>
                </div>
            </div>
            <div class="price my-2">$100.00 <strike class="original-price">$120.00</strike></div>
            <div class="theme-text subtitle">Brief Description:</div>
            <div class="brief-description">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad dicta reiciendis odio consequuntur sunt magnam eum facilis quaerat dolor aperiam labore facere amet officiis, unde quae distinctio earum culpa omnis soluta voluptate tempora placeat?.
            </div>

          <!-- TO REMOVE COLORS -->
            <div>
                <div class="subtitle my-3 theme-text">Colors:</div>
                <div class="select-colors d-flex">
                    <div class="color red"></div>
                    <div class="color silver"></div>
                    <div class="color black"></div>
                </div>
            </div>

            <hr>
            <div class="row">
                <div class="col-md-3">
                    <input type="number" class="form-control" value="1">
                </div>
                <div class="col-md-9"><button class="btn addBtn btn-block">Add to basket</button></div>
            </div>

        </div>
    </div>

    <div class="additional-details my-5 text-center">
        <!-- Nav pills -->
        <ul class="nav nav-tabs justify-content-center">
            <li class="nav-tabs">
                <a class="nav-link active" data-toggle="tab" data-bs-toggle="tab" href="#home">Description</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" data-bs-toggle="tab" href="#menu1">Reviews</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" data-bs-toggle="tab" href="#menu2">Specifications</a>
            </li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content mt-4 mb-3">
            <div class="tab-pane container active" id="home">
                <div class="description">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident magni assumenda consectetur facere eius. Minus reprehenderit placeat ullam vel ab eaque sequi impedit, ipsum soluta temporibus fugit ipsa. Dolor libero modi molestiae dicta, vitae minus laborum error cum consequatur autem minima eveniet porro obcaecati quibusdam possimus eos, debitis sint magnam, explicabo accusantium aspernatur ipsa repellat tempore nihil. Cum placeat voluptate dignissimos dicta harum consectetur, nemo debitis tempore. Quod culpa perspiciatis unde natus. Modi expedita, ab repellendus reiciendis sed voluptate, culpa laborum ad, consectetur quas tempora quo? Quibusdam doloribus magnam maxime, accusamus officiis odit reiciendis labore laudantium. Molestiae corporis temporibus ad?
                </div>
            </div>
            <div class="tab-pane container fade" id="menu1">
                <div class="review">
                    <p>PUT REVIEWS DESIGN HERE</p>
                </div>
            </div>
            <div class="tab-pane container fade" id="menu2">
                <div class="specification">
                    <p>PUT SPECIFICATIONS HERE</p>
                </div>
            </div>
        </div>
    </div>



    <div class="related-products details-snippet1">

        <div class="related-heading theme-text">Related Products</div>

        <div class="row">

                            <div class="col-md-3">
                    <div class="related-product">
                        <img class="img-fluid" src="https://source.unsplash.com/gsKdPcIyeGg" alt="Related Product">
                    </div>
                    <div class="related-title">Lovely Black Dress</div>
                    <div class="d-flex">
                        <div class="related-price mr-auto">$100.00</div>
                        <div class="stars d-flex">
                            <div>&#9733;</div>
                            <div>&#9733;</div>
                            <div>&#9733;</div>
                            <div>&#9733;</div>
                            <div>&#9733;</div>
                        </div>
                    </div>
                </div>
                            <div class="col-md-3">
                    <div class="related-product">
                        <img class="img-fluid" src="https://source.unsplash.com/sg_gRhbYXhc" alt="">
                    </div>
                    <div class="related-title">Lovely Dress With Patterns</div>
                    <div class="d-flex">
                        <div class="related-price mr-auto">$1199.00</div>
                        <div class="stars d-flex">
                            <div>&#9733;</div>
                            <div>&#9733;</div>
                            <div>&#9733;</div>
                            <div>&#9733;</div>
                            <div>&#9733;</div>
                        </div>
                    </div>
                </div>
                            <div class="col-md-3">
                    <div class="related-product">
                        <img class="img-fluid" src="https://source.unsplash.com/gJZQcirK8aw" alt="">
                    </div>
                    <div class="related-title">Lovely Fashion Dress</div>
                    <div class="d-flex">
                        <div class="related-price mr-auto">$200.00</div>
                        <div class="stars d-flex">
                            <div>&#9733;</div>
                            <div>&#9733;</div>
                            <div>&#9733;</div>
                            <div>&#9733;</div>
                            <div>&#9733;</div>
                        </div>
                    </div>
                </div>
                            <div class="col-md-3">
                    <div class="related-product">
                        <img class="img-fluid" src="https://source.unsplash.com/qbB_Z2pXLEU" alt="">
                    </div>
                    <div class="related-title">Lovely Red Dress</div>
                    <div class="d-flex">
                        <div class="related-price mr-auto">$120.00</div>
                        <div class="stars d-flex">
                            <div>&#9733;</div>
                            <div>&#9733;</div>
                            <div>&#9733;</div>
                            <div>&#9733;</div>
                            <div>&#9733;</div>
                        </div>
                    </div>
                </div>
            

        </div>
    </div>



</div>

		
@endsection		
	