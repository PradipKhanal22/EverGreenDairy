@extends('layouts.master')

@section('title', 'Welcome to EverGreenDairy')

@section('content')
<div class="hero-section bg-light py-5">
    <div class="container text-center">
        <h1 class="display-4 text-success">Welcome to EverGreenDairy</h1>
        <p class="lead">Fresh, Organic Dairy Products Straight From Our Farm</p>
        <a href="/products" class="btn btn-success btn-lg mt-3">Explore Our Products</a>
    </div>
</div>

<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card h-100 border-success">
                    <div class="card-body text-center">
                        <i class="fas fa-leaf fa-3x text-success mb-3"></i>
                        <h3 class="card-title">100% Organic</h3>
                        <p class="card-text">Our cows are grass-fed and free-range, producing the highest quality milk.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100 border-success">
                    <div class="card-body text-center">
                        <i class="fas fa-award fa-3x text-success mb-3"></i>
                        <h3 class="card-title">Award Winning</h3>
                        <p class="card-text">Recognized for excellence in dairy production and sustainability.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100 border-success">
                    <div class="card-body text-center">
                        <i class="fas fa-truck fa-3x text-success mb-3"></i>
                        <h3 class="card-title">Fast Delivery</h3>
                        <p class="card-text">Fresh products delivered to your doorstep within 24 hours.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="bg-success text-white py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h2>Our Story</h2>
                <p>EverGreenDairy has been family-owned since 1985, committed to sustainable farming practices and producing the freshest dairy products. We believe in quality from farm to table.</p>
                <a href="/about" class="btn btn-light">Learn More</a>
            </div>
            <div class="col-md-6">
                <img src="{{ asset('images/farm.jpg') }}" alt="EverGreenDairy Farm" class="img-fluid rounded">
            </div>
        </div>
    </div>
</div>

<div class="py-5">
    <div class="container">
        <h2 class="text-center mb-5">Featured Products</h2>
        <div class="row">
            <div class="col-md-3 mb-4">
                <div class="card h-100">
                    <img src="{{ asset('images/milk.jpg') }}" class="card-img-top" alt="Fresh Milk">
                    <div class="card-body">
                        <h5 class="card-title">Fresh Milk</h5>
                        <p class="card-text">Our signature whole milk, pasteurized for safety but full of flavor.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card h-100">
                    <img src="{{ asset('images/cheese.jpg') }}" class="card-img-top" alt="Aged Cheese">
                    <div class="card-body">
                        <h5 class="card-title">Aged Cheese</h5>
                        <p class="card-text">Artisan cheese aged to perfection in our cellars.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card h-100">
                    <img src="{{ asset('images/yogurt.jpg') }}" class="card-img-top" alt="Creamy Yogurt">
                    <div class="card-body">
                        <h5 class="card-title">Creamy Yogurt</h5>
                        <p class="card-text">Probiotic-rich yogurt with live cultures for gut health.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card h-100">
                    <img src="{{ asset('images/butter.jpg') }}" class="card-img-top" alt="Farmhouse Butter">
                    <div class="card-body">
                        <h5 class="card-title">Farmhouse Butter</h5>
                        <p class="card-text">Rich, creamy butter churned the traditional way.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mt-4">
            <a href="/products" class="btn btn-success">View All Products</a>
        </div>
    </div>
</div>
@endsection

@section('styles')
<style>
    .hero-section {
        background: url('{{ asset("images/dairy-banner.jpg") }}') no-repeat center center;
        background-size: cover;
        padding: 100px 0;
        color: white;
        text-shadow: 1px 1px 3px rgba(0,0,0,0.5);
    }

    .card {
        transition: transform 0.3s;
    }

    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.1);
    }
</style>
@endsection
