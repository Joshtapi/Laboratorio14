<div>
    <div class="mt-4">


        <div class="grid grid-cols-9 gap-4">
            {{-- ITEMS - IZQUIERDA --}}
            <div class="col-span-7">
                <div class="grid grid-cols-2 gap-4">
                    {{-- IMAGEN --}}
                    <div>
                        <div class="">
                            <ul class="">
                                @if ($product->image)
                                    <li {{-- data-thumb="{{ asset('assets/images/products') }}/{{ $product->image }}" --}}>
                                        <img src="{{ Storage::url($product->image) }}" alt="$product->name" />
                                    </li>
                                @else
                                    <li {{-- data-thumb="https://media.istockphoto.com/photos/croatia-bosnia-harbor-bay-sunset-sunrise-picture-id144958249?s=612x612" --}}>
                                        <img src="https://media.istockphoto.com/photos/croatia-bosnia-harbor-bay-sunset-sunrise-picture-id144958249?s=612x612"
                                            alt="$product->name" />
                                    </li>
                                @endif
                            </ul>
                        </div>
                    </div>
                    {{-- DESCRIPCION --}}
                    <div>
                        <div class="detail-info">
                            <div class="product-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <a href="#" class="count-review">(05 review)</a>
                            </div>
                            <h2 class="product-name">{{ $product->name }}</h2>
                            <div class="short-desc">
                                {{ $product->short_description }}
                            </div>

                            <div class="my-3">
                                <a class="" href="#"><img
                                        src="{{ asset('assets/images/social-list.png') }}" alt=""></a>
                            </div>

                            <div class=""><span class="text-2xl">S/. {{ $product->price_cost }}</span>
                            </div>
                            <div class="">
                                <p class="">Estado: <b>
                                        @if ($product->status)
                                            Disponible
                                        @else
                                            Bloqueado
                                        @endif
                                    </b></p>
                            </div>
                            <div class="my-3">
                                <span>Cantidad:</span>
                                <div class="flex">

                                    <a class=" flex items-center justify-center w-12" wire:click="decrement()">
                                        <span
                                            class="rounded rounded-full border-2 border-black px-2 hover:bg-red-500 font-black hover:text-white"><i
                                                class="fa-solid fa-circle-minus"></i></span>
                                    </a>

                                    <input type="number"
                                        class="w-16 border-2 text-center border-black rounded rounded-xl"
                                        wire:model="qty">
                                    <a class=" flex items-center justify-center w-12" wire:click="increment()">
                                        <span
                                            class="rounded rounded-full border-2 border-black px-2 hover:bg-red-500 font-black hover:text-white">
                                            <i class="fa-solid fa-circle-plus"></i></span>
                                    </a>
                                </div>
                            </div>

                            <div class="my-3">
                                <a class="border-2 px-4 py-1 capitalize border-black rounded rounded-lg hover:bg-red-500 hover:text-white font-bold"
                                    wire:click.prevent="store('{{ $product->id }}')">Agregar</a>

                            </div>
                        </div>
                    </div>
                    {{-- TECERA CAJA --}}
                    <div class="col-span-2">
                        <div x-data="{ descripcion: true, detalles: false }">
                            <div class="flex font-bold text-lg">
                                <div x-on:click="descripcion = ! descripcion"
                                    :class="{ 'bg-red-500 text-white': descripcion }"
                                    x-on:click.away="descripcion = false"
                                    class="bg-red-500 px-3 py-1 border-2 border-black">
                                    Descripcion

                                </div>
                                <div x-on:click="detalles = ! detalles" :class="{ 'bg-red-500 text-white': detalles }"
                                    x-on:click.away="detalles = false"
                                    class="bg-red-500 px-3 py-1 border-2 border-black">
                                    Detalles

                                </div>
                            </div>
                            {{-- muestra --}}
                            <div class="border border-black p-3 ">
                                <div class="hidden" :class="{ 'hidden': !descripcion }">
                                    DESCRIPCION
                                    {{ $product->description }}
                                </div>
                                <div class="hidden" :class="{ 'hidden': !detalles }">
                                    <div class="p-2 border-2 border-gray-300 rounded rounded-xl">
                                        <table class="w-full border-separate border-spacing-2 ">
                                            <thead class="bg-red-300">
                                                <tr class="font-bold text-md uppercase">
                                                    <th class="py-2 text-center">Campo</th>
                                                    <th class="py-2 text-center">Descripcion</th>
                                                </tr>
                                            </thead>
                                            <tbody class="bg-gray-200">
                                                <tr class=" text-sm font-semibold capitalize">
                                                    <th class="py-1 px-2 text-center">Color </th>
                                                    <th class="py-1 px-2 text-center">
                                                        @if ($product->color)
                                                            {{ $product->color }}
                                                        @else
                                                            null
                                                        @endif
                                                    </th>

                                                </tr>
                                                <tr class=" text-sm font-semibold capitalize">
                                                    <th class="py-1 px-2 text-center">Tamaño</th>
                                                    <th class="py-1 px-2 text-center">
                                                        @if ($product->size)
                                                            {{ $product->size}}
                                                        @else
                                                            null
                                                        @endif
                                                    </th>

                                                </tr>
                                                <tr class=" text-sm font-semibold capitalize">
                                                    <th class="py-1 px-2 text-center">cantidad </th>
                                                    <th class="py-1 px-2 text-center">
                                                        @if ($product->quantity)
                                                            {{ $product->quantity }}
                                                        @else
                                                            null
                                                        @endif
                                                    </th>

                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>



                        </div>
                        {{-- <div class="advance-info">
                            <div class="tab-control normal">
                                <a href="#description" class="tab-control-item active">description</a>
                                <a href="#add_infomation" class="tab-control-item">Addtional Infomation</a>
                                <a href="#review" class="tab-control-item">Reviews</a>
                            </div>
                            <div class="tab-contents">
                                <div class="tab-content-item active" id="description">
                                    {{ $product->description }}
                                </div>
                                <div class="tab-content-item " id="add_infomation">
                                    <table class="shop_attributes">
                                        <tbody>
                                            <tr>
                                                <th>Weight</th>
                                                <td class="product_weight">1 kg</td>
                                            </tr>
                                            <tr>
                                                <th>Dimensions</th>
                                                <td class="product_dimensions">12 x 15 x 23 cm</td>
                                            </tr>
                                            <tr>
                                                <th>Color</th>
                                                <td>
                                                    <p>Black, Blue, Grey, Violet, Yellow</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="tab-content-item " id="review">

                                    <div class="wrap-review-form">

                                        <div id="comments">
                                            <h2 class="woocommerce-Reviews-title">01 review for <span>Radiant-360 R6
                                                    Chainsaw Omnidirectional [Orage]</span></h2>
                                            <ol class="commentlist">
                                                <li class="comment byuser comment-author-admin bypostauthor even thread-even depth-1"
                                                    id="li-comment-20">
                                                    <div id="comment-20" class="comment_container">
                                                        <img alt=""
                                                            src="{{ asset('assets/images/author-avata.jpg') }}"
                                                            height="80" width="80">
                                                        <div class="comment-text">
                                                            <div class="star-rating">
                                                                <span class="width-80-percent">Rated <strong
                                                                        class="rating">5</strong> out of 5</span>
                                                            </div>
                                                            <p class="meta">
                                                                <strong
                                                                    class="woocommerce-review__author">admin</strong>
                                                                <span class="woocommerce-review__dash">–</span>
                                                                <time class="woocommerce-review__published-date"
                                                                    datetime="2008-02-14 20:00">Tue, Aug 15,
                                                                    2017</time>
                                                            </p>
                                                            <div class="description">
                                                                <p>Pellentesque habitant morbi tristique senectus et
                                                                    netus
                                                                    et malesuada fames ac turpis egestas.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ol>
                                        </div><!-- #comments -->

                                        <div id="review_form_wrapper">
                                            <div id="review_form">
                                                <div id="respond" class="comment-respond">

                                                    <form action="#" method="post" id="commentform"
                                                        class="comment-form" novalidate="">
                                                        <p class="comment-notes">
                                                            <span id="email-notes">Your email address will not be
                                                                published.</span> Required fields are marked <span
                                                                class="required">*</span>
                                                        </p>
                                                        <div class="comment-form-rating">
                                                            <span>Your rating</span>
                                                            <p class="stars">

                                                                <label for="rated-1"></label>
                                                                <input type="radio" id="rated-1" name="rating"
                                                                    value="1">
                                                                <label for="rated-2"></label>
                                                                <input type="radio" id="rated-2" name="rating"
                                                                    value="2">
                                                                <label for="rated-3"></label>
                                                                <input type="radio" id="rated-3" name="rating"
                                                                    value="3">
                                                                <label for="rated-4"></label>
                                                                <input type="radio" id="rated-4" name="rating"
                                                                    value="4">
                                                                <label for="rated-5"></label>
                                                                <input type="radio" id="rated-5" name="rating"
                                                                    value="5" checked="checked">
                                                            </p>
                                                        </div>
                                                        <p class="comment-form-author">
                                                            <label for="author">Name <span
                                                                    class="required">*</span></label>
                                                            <input id="author" name="author" type="text"
                                                                value="">
                                                        </p>
                                                        <p class="comment-form-email">
                                                            <label for="email">Email <span
                                                                    class="required">*</span></label>
                                                            <input id="email" name="email" type="email"
                                                                value="">
                                                        </p>
                                                        <p class="comment-form-comment">
                                                            <label for="comment">Your review <span
                                                                    class="required">*</span>
                                                            </label>
                                                            <textarea id="comment" name="comment" cols="45" rows="8"></textarea>
                                                        </p>
                                                        <p class="form-submit">
                                                            <input name="submit" type="submit" id="submit"
                                                                class="submit" value="Submit">
                                                        </p>
                                                    </form>

                                                </div><!-- .comment-respond-->
                                            </div><!-- #review_form -->
                                        </div><!-- #review_form_wrapper -->

                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>

            </div>
            {{-- ITEMS - DERECHO --}}
            <div class="col-span-2">
                {{-- 3 ITEMS LISTA --}}
                <div>
                    <ul class="">

                        <li class=" border-b-2 pb-3">
                            <a class="flex items-center " href="#">
                                <span class="text-3xl h-16 inline-block text-red-500"><i class="fa fa-truck"></i></span>
                                <div class="">
                                    <b class="">Free Shipping</b>
                                    <span class="">On Oder Over $99</span>
                                    <p class="">Lorem Ipsum is simply dummy text of the printing...</p>
                                </div>
                            </a>
                        </li>

                        <li class="border-b-2 pb-3 pt-2">
                            <a class="flex items-center " href="#">
                                <span class="text-3xl mr-2 text-red-500"><i class="fa fa-gift"></i></span>
                                <div class="">
                                    <b class="">Free Shipping</b>
                                    <span class="">On Oder Over $99</span>
                                    <p class="">Lorem Ipsum is simply dummy text of the printing...</p>
                                </div>
                            </a>
                        </li>
                        <li class="border-b-2 pb-3 pt-2">
                            <a class="flex items-center " href="#">
                                <span class="text-3xl mr-2 text-red-500"><i class="fa fa-reply"></i></span>
                                <div class="">
                                    <b class="">Free Shipping</b>
                                    <span class="">On Oder Over $99</span>
                                    <p class="">Lorem Ipsum is simply dummy text of the printing...</p>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                {{-- RECOMENDACIOND DE PRODUCT --}}
                <div>
                    <p class="my-4 text-center text-2xl ">Productos Populares</p>
                    <div>
                        @foreach ($popular_products as $product)
                            <div class="flex my-2 items-center">
                                <div class="w-20">
                                    @if ($product->image)
                                        <figure {{-- data-thumb="{{ asset('assets/images/products') }}/{{ $product->image }}" --}}>
                                            <img src="{{ Storage::url($product->image) }}" alt="$product->name" />
                                        </figure>
                                    @else
                                        <figure {{-- data-thumb="https://media.istockphoto.com/photos/croatia-bosnia-harbor-bay-sunset-sunrise-picture-id144958249?s=612x612" --}}>
                                            <img src="https://media.istockphoto.com/photos/croatia-bosnia-harbor-bay-sunset-sunrise-picture-id144958249?s=612x612"
                                                alt="$product->name" />
                                        </figure>
                                    @endif
                                </div>
                                <div class="ml-2">
                                    <a href="{{ route('product.details', $product->slug) }}">
                                        <p>{{ Str::limit($product->name, 15) }}</p>
                                        <p><span>S/.</span>{{ $product->price_cost }}</p>
                                        </p>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
        {{-- FINNNNN --}}

    </div>
    <!--end container-->

</div>
