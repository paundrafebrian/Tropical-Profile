@extends('layouts.main')

@section('title', 'Buyer Insights | PT Tropical Natural Sugar')

@section('content')

    <!-- PAGE HEADING -->
    <div class="page-heading header-text">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <span class="breadcrumb">
                        <a href="{{ url('/') }}">Home</a> /
                        <a href="{{ url('/blog') }}">Buyer Insights</a> /
                        Blog Detail
                    </span>
                    <h3>Buyer Insights</h3>
                </div>
            </div>
        </div>
    </div>

    {{-- CONTENT BLOG DETAIL --}}
    <div class="single-property section">
        <div class="container">
            <div class="row">

                <!-- MAIN CONTENT -->
                <div class="col-lg-8">
                    <div class="main-image">
                        <img src="{{ asset('assets/images/property-01.jpg') }}" alt="Coconut Sugar Export">
                    </div>

                    <div class="main-content">
                        <span class="category">Buyer Guide</span>
                        <h4>What Importers Should Check Before Buying Coconut Sugar</h4>

                        <span class="meta">
                            Apr 28, 2025 · 4 min read
                        </span>

                        <p class="mt-4">
                            For international buyers, sourcing coconut sugar is not only about price,
                            but also about <strong>quality consistency, documentation, and supplier reliability</strong>.
                            Understanding key checkpoints before placing an order helps minimize risk
                            and ensures long-term supply stability.
                        </p>

                        <p>
                            Buyers should pay close attention to moisture level, mesh size consistency,
                            production capacity, and export documentation such as COA, MSDS,
                            and organic certifications if required by the destination market.
                        </p>

                        <p>
                            Establishing transparent communication with producers also plays
                            a critical role in avoiding shipment delays and quality disputes.
                        </p>
                    </div>

                    <!-- FAQ / ACCORDION -->
                    <div class="accordion mt-5" id="blogAccordion">

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq1">
                                    What documents should importers request?
                                </button>
                            </h2>
                            <div id="faq1" class="accordion-collapse collapse show">
                                <div class="accordion-body">
                                    Common export documents include Certificate of Analysis (COA),
                                    Packing List, Invoice, HS Code, and optional Organic Certification
                                    depending on market requirements.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq2">
                                    How to verify supplier consistency?
                                </button>
                            </h2>
                            <div id="faq2" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    Buyers can request production photos, batch samples,
                                    and historical export records to evaluate consistency.
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- SIDEBAR -->
                <div class="col-lg-4">
                    <div class="info-table">
                        <ul>
                            <li>
                                <h4>Product Type<br><span>Coconut Sugar</span></h4>
                            </li>
                            <li>
                                <h4>Target Market<br><span>Export Buyers</span></h4>
                            </li>
                            <li>
                                <h4>Category<br><span>Buyer Insights</span></h4>
                            </li>
                            <li>
                                <h4>Focus<br><span>Quality & Compliance</span></h4>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
