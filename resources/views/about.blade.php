@extends('layouts.master')

@section('title', 'About EverGreenDairy')

@section('content')
<div class="py-5 bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <h1 class="display-4 text-success">Our Story</h1>
                <p class="lead">From humble beginnings to becoming a trusted dairy brand</p>
                <p>Founded in 1985 by the Greenfield family, EverGreenDairy started as a small family farm with just 20 cows. Today, we maintain those same values of quality and care while serving thousands of families across the region.</p>
            </div>
            <div class="col-lg-6">
                <img src="{{ asset('images/history.jpg') }}" alt="EverGreenDairy History" class="img-fluid rounded shadow">
            </div>
        </div>
    </div>
</div>

<div class="py-5">
    <div class="container">
        <h2 class="text-center mb-5">Our Values</h2>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="icon-box bg-success-light rounded-circle mx-auto mb-4">
                            <i class="fas fa-leaf fa-2x text-success"></i>
                        </div>
                        <h3>Sustainability</h3>
                        <p>We practice regenerative farming to protect our land for future generations.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="icon-box bg-success-light rounded-circle mx-auto mb-4">
                            <i class="fas fa-heart fa-2x text-success"></i>
                        </div>
                        <h3>Animal Welfare</h3>
                        <p>Our cows enjoy open pastures and the highest standards of care.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="icon-box bg-success-light rounded-circle mx-auto mb-4">
                            <i class="fas fa-medal fa-2x text-success"></i>
                        </div>
                        <h3>Quality</h3>
                        <p>Every product meets our strict quality standards before reaching your table.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="py-5 bg-success text-white">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <img src="{{ asset('images/farm-process.jpg') }}" alt="Our Farming Process" class="img-fluid rounded shadow">
            </div>
            <div class="col-lg-6">
                <h2>Our Process</h2>
                <div class="process-step mb-4">
                    <h4 class="d-flex align-items-center">
                        <span class="step-number bg-white text-success rounded-circle d-inline-flex align-items-center justify-content-center me-3">1</span>
                        Pasture-Raised Cows
                    </h4>
                    <p>Our cows graze on organic pastures year-round, producing richer, more nutritious milk.</p>
                </div>
                <div class="process-step mb-4">
                    <h4 class="d-flex align-items-center">
                        <span class="step-number bg-white text-success rounded-circle d-inline-flex align-items-center justify-content-center me-3">2</span>
                        Gentle Processing
                    </h4>
                    <p>We use low-temperature pasteurization to preserve nutrients and flavor.</p>
                </div>
                <div class="process-step mb-4">
                    <h4 class="d-flex align-items-center">
                        <span class="step-number bg-white text-success rounded-circle d-inline-flex align-items-center justify-content-center me-3">3</span>
                        Eco-Friendly Packaging
                    </h4>
                    <p>Our packaging is made from renewable resources and is fully recyclable.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="py-5">
    <div class="container">
        <h2 class="text-center mb-5">Meet Our Team</h2>
        <div class="row">
            <div class="col-md-3 mb-4">
                <div class="card border-0 text-center h-100">
                    <img src="{{ asset('images/team1.jpg') }}" class="card-img-top rounded-circle mx-auto mt-3" style="width: 150px; height: 150px; object-fit: cover;" alt="John Greenfield">
                    <div class="card-body">
                        <h5 class="card-title">John Greenfield</h5>
                        <p class="text-muted">Founder & CEO</p>
                        <p class="card-text">"Quality begins with how we treat our animals."</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card border-0 text-center h-100">
                    <img src="{{ asset('images/team2.jpg') }}" class="card-img-top rounded-circle mx-auto mt-3" style="width: 150px; height: 150px; object-fit: cover;" alt="Sarah Greenfield">
                    <div class="card-body">
                        <h5 class="card-title">Sarah Greenfield</h5>
                        <p class="text-muted">Operations Manager</p>
                        <p class="card-text">"We're proud to continue our family's legacy."</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card border-0 text-center h-100">
                    <img src="{{ asset('images/team3.jpg') }}" class="card-img-top rounded-circle mx-auto mt-3" style="width: 150px; height: 150px; object-fit: cover;" alt="Michael Chen">
                    <div class="card-body">
                        <h5 class="card-title">Michael Chen</h5>
                        <p class="text-muted">Head Dairy Farmer</p>
                        <p class="card-text">"Happy cows make the best milk."</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card border-0 text-center h-100">
                    <img src="{{ asset('images/team4.jpg') }}" class="card-img-top rounded-circle mx-auto mt-3" style="width: 150px; height: 150px; object-fit: cover;" alt="Emma Rodriguez">
                    <div class="card-body">
                        <h5 class="card-title">Emma Rodriguez</h5>
                        <p class="text-muted">Quality Control</p>
                        <p class="card-text">"Every batch is tested with care."</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="py-5 bg-light">
    <div class="container text-center">
        <h2 class="mb-4">Ready to Experience EverGreenDairy?</h2>
        <a href="/products" class="btn btn-success btn-lg mx-2">Shop Products</a>
        <a href="/contact" class="btn btn-outline-success btn-lg mx-2">Contact Us</a>
    </div>
</div>
@endsection

@section('styles')
<style>
    .icon-box {
        width: 80px;
        height: 80px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .step-number {
        width: 40px;
        height: 40px;
    }

    .bg-success-light {
        background-color: rgba(40, 167, 69, 0.1);
    }

    .process-step {
        border-left: 3px solid #28a745;
        padding-left: 20px;
    }
</style>
@endsection
