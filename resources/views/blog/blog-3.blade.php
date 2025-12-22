@extends('layouts.main')

@section('title', 'Quality Control for Export Coconut Sugar | Buyer Insights')

@section('content')

    <div class="page-heading header-text">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <span class="breadcrumb">
                        <a href="/">Home</a> / Buyer Insights
                    </span>
                    <h3>Buyer Insights</h3>
                </div>
            </div>
        </div>
    </div>

    <div class="single-property section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">

                    <div class="main-image mb-4">
                        <img src="{{ asset('assets/images/property-03.jpg') }}" alt="Quality Control Coconut Sugar">
                    </div>

                    <div class="main-content">
                        <span class="category">Quality Control</span>
                        <h4>Quality Control Process Behind Export-Grade Coconut Sugar</h4>
                        <span class="meta">Jan 10, 2025 · 6 min read</span>

                        <p class="mt-4">
                            Export-grade coconut sugar must meet strict quality requirements.
                            Indonesian producers apply multi-stage quality control processes
                            to ensure consistency, safety, and compliance with buyer specifications.
                        </p>

                        <h5>1. Raw Sap Selection</h5>
                        <p>
                            Only fresh coconut sap collected within a controlled timeframe
                            is processed, reducing fermentation risk and off-flavors.
                        </p>

                        <h5>2. Moisture & Mesh Control</h5>
                        <p>
                            Moisture levels and granule size are measured during processing
                            to ensure product stability and uniform appearance.
                        </p>

                        <h5>3. Batch Testing</h5>
                        <p>
                            Each production batch undergoes internal testing before packing,
                            including color, aroma, moisture, and contamination checks.
                        </p>

                        <h5>4. Export Documentation</h5>
                        <p>
                            Supporting documents such as COA, MSDS, and traceability records
                            accompany shipments based on destination requirements.
                        </p>

                        <h5>What Buyers Should Request</h5>
                        <ul>
                            <li>Certificate of Analysis (COA)</li>
                            <li>Batch photos or samples</li>
                            <li>Production date & lot number</li>
                        </ul>

                        <p>
                            A transparent quality control system helps buyers minimize risk
                            and ensures long-term sourcing confidence.
                        </p>
                    </div>

                </div>

                <div class="col-lg-4">
                    <div class="info-table">
                        <ul>
                            <li>
                                <h4>Process<br><span>Export QC</span></h4>
                            </li>
                            <li>
                                <h4>Focus<br><span>Consistency</span></h4>
                            </li>
                            <li>
                                <h4>Documents<br><span>COA, MSDS</span></h4>
                            </li>
                            <li>
                                <h4>Audience<br><span>Global Buyers</span></h4>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
