@extends('layouts.admin.app')

@section('content')

<div class="container-fluid">

    <h3 class="mb-4 fw-bold">डैशबोर्ड</h3>

    <!-- TOP CARDS -->
    <div class="row g-3">

        <div class="col-md-3">
            <a href="/admin/coming-soon" class="text-decoration-none">
                <div class="card p-3">
                    <h6>कुल सदस्य</h6>
                    <h4>2894</h4>
                </div>
            </a>
        </div>

        <div class="col-md-3">
            <a href="/admin/coming-soon" class="text-decoration-none">
                <div class="card p-3">
                    <h6>नये सदस्य (इस माह)</h6>
                    <h4>120</h4>
                </div>
            </a>
        </div>

        <div class="col-md-3">
            <a href="/admin/coming-soon" class="text-decoration-none">
                <div class="card p-3">
                    <h6>Pending Claims</h6>
                    <h4>27</h4>
                </div>
            </a>
        </div>

        <div class="col-md-3">
            <a href="/admin/coming-soon" class="text-decoration-none">
                <div class="card p-3">
                    <h6>Approved Claims</h6>
                    <h4>14</h4>
                </div>
            </a>
        </div>

        <div class="col-md-3">
            <a href="/admin/coming-soon" class="text-decoration-none">
                <div class="card p-3">
                    <h6>कुल फंड</h6>
                    <h4>₹ 2,75,630</h4>
                </div>
            </a>
        </div>

        <div class="col-md-3">
            <a href="/admin/coming-soon" class="text-decoration-none">
                <div class="card p-3">
                    <h6>कुल डोनेशन</h6>
                    <h4>₹ 45,000</h4>
                </div>
            </a>
        </div>

    </div>

    <!-- NOTIFICATIONS -->
    <div class="card mt-4 p-3">
        <h5>Notifications</h5>
        <ul class="mb-0">
            <li>3 नये क्लेम Pending हैं</li>
            <li>2 Refund Request आई हैं</li>
            <li>10 नये सदस्य अप्रूवल के लिए रुके हैं</li>
        </ul>
    </div>

    <!-- ACTION BUTTONS -->
    <div class="mt-4">
        <a href="/admin/coming-soon" class="btn btn-primary me-2">+ नया सदस्य जोड़ें</a>
        <a href="/admin/coming-soon" class="btn btn-success me-2">नया क्लेम देखें</a>
        <a href="/admin/coming-soon" class="btn btn-info">फंड रिपोर्ट</a>
    </div>

</div>

@endsection
