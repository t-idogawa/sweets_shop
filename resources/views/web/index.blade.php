@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-2">
        @component('components.sidebar', ['categories' => $categories, 'major_category_names' => $major_category_names])
        @endcomponent
    </div>
    <div class="col-9">
        <h1>おすすめ商品</h1>
        <div class="row">
            <div class="col-4">
                <a href="#">
                    <img src="{{ asset('img/dummy.png') }}" class="img-thumbnail">
                </a>
                <div class="row">
                    <div class="col-12">
                        <p class="product-label mt-2">
                            和栗の詰め合わせ<br>
                            <label>¥2000</label>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <a href="#">
                    <img src="{{ asset('img/dummy.png') }}" class="img-thumbnail">
                </a>
                <div class="row">
                    <div class="col-12">
                        <p class="product-label mt-2">
                            美味しい柿<br>
                            <label>¥500</label>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-4">
                <a href="#">
                    <img src="{{ asset('img/dummy.png') }}" class="img-thumbnail">
                </a>
                <div class="row">
                    <div class="col-12">
                        <p class="product-label mt-2">
                            旬なみかん<br>
                            <label>¥1200</label>
                        </p>
                    </div>
                </div>
            </div>

        </div>

        <h1>新着商品</h1>
        <div class="row">
            <div class="col-3">
                <a href="#">
                    <img src="{{ asset('img/dummy.png') }}" class="img-thumbnail">
                </a>
                <div class="row">
                    <div class="col-12">
                        <p class="product-label mt-2">
                            クリスマスケーキ<br>
                            <label>¥2500</label>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-3">
                <a href="#">
                    <img src="{{ asset('img/dummy.png') }}" class="img-thumbnail">
                </a>
                <div class="row">
                    <div class="col-12">
                        <p class="product-label mt-2">
                            シュトーレン<br>
                            <label>¥1800</label>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-3">
                <a href="#">
                    <img src="{{ asset('img/dummy.png') }}" class="img-thumbnail">
                </a>
                <div class="row">
                    <div class="col-12">
                        <p class="product-label mt-2">
                            ガトーショコラ<br>
                            <label>¥1700</label>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-3">
                <a href="#">
                    <img src="{{ asset('img/dummy.png') }}" class="img-thumbnail">
                </a>
                <div class="row">
                    <div class="col-12">
                        <p class="product-label mt-2">
                            ティラミス<br>
                            <label>¥450</label>
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection