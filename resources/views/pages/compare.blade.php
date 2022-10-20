@extends('layouts.app')

@section('title')

JobStreet - Let's find your jobs  
@endsection

@section('content')
      <div class="compare" style="margin-top: 20px !important">
            <div class="container">
                <div class="dashboard-heading">
                    <h2 class="dashboard-title">Compare at working</h2>
                    <p class="dashboard-subtitle">
                        Compare companies to find your perfect fit
                    </p>
                </div>
                <div class="content">
                    <div
                        class="row d-flex justify-content-center mt-5 rounded-4"
                        style="
                            background-color: white;
                            padding-top: 40px;
                            padding-bottom: 40px;
                        "
                    >
                        <div class="col-md-6 col-12">
                            <div class="card rounded-3 mb-5">
                                <div
                                    class="card-body d-flex justify-content-between align-items-center"
                                >
                                    <div class="photo-card mb-2 mt-2">
                                        <img
                                            src="/images/3jfif.jfif"
                                            style="width: 57px"
                                            class="rounded-3"
                                        />
                                        <a
                                            href="jobs-details.html"
                                            class="brand-title p-2"
                                            >PT. Grab</a
                                        >
                                    </div>
                                    <!-- Button trigger modal -->
                                    <button
                                        type="button"
                                        class="btn btn-outline-primary rounded-2 font-weight-bold"
                                        data-bs-toggle="modal"
                                        data-bs-target="#exampleModal"
                                    >
                                        Change
                                    </button>

                                    <!-- Modal -->
                                    <div
                                        class="modal fade"
                                        id="exampleModal"
                                        tabindex="-1"
                                        aria-labelledby="exampleModalLabel"
                                        aria-hidden="true"
                                    >
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5
                                                        class="modal-title d-flex justify-content-center"
                                                        id="exampleModalLabel"
                                                    >
                                                        Change Company
                                                    </h5>
                                                    <button
                                                        type="button"
                                                        class="btn-close"
                                                        data-bs-dismiss="modal"
                                                        aria-label="Close"
                                                    ></button>
                                                </div>
                                                <div class="modal-body">
                                                    <label
                                                        for="disabledSelect"
                                                        class="form-label"
                                                        >Company</label
                                                    >
                                                    <select
                                                        id="disabledSelect"
                                                        class="form-select"
                                                    >
                                                        <option>
                                                            PT. Grab
                                                        </option>
                                                        <option>
                                                            Accenture
                                                        </option>
                                                        <option>Nielsen</option>
                                                        <option>Nasa</option>
                                                    </select>
                                                </div>
                                                <div class="modal-footer">
                                                    <button
                                                        type="button"
                                                        class="btn btn-success"
                                                    >
                                                        Save changes
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="rating">
                                <h6>Company Rating</h6>
                                <div class="progress mb-3">
                                    <div
                                        class="progress-bar bg-success"
                                        role="progressbar"
                                        aria-label="Example with label"
                                        style="width: 55%"
                                        aria-valuenow="20"
                                        aria-valuemin="0"
                                        aria-valuemax="100"
                                    >
                                        55%
                                    </div>
                                </div>
                                <h6>CEO Approval</h6>
                                <div class="progress mb-3">
                                    <div
                                        class="progress-bar bg-info"
                                        role="progressbar"
                                        aria-label="Example with label"
                                        style="width: 90%"
                                        aria-valuenow="90"
                                        aria-valuemin="0"
                                        aria-valuemax="100"
                                    >
                                        90%
                                    </div>
                                </div>
                                <h6>Salary Satisfaction</h6>
                                <div class="progress mb-3">
                                    <div
                                        class="progress-bar bg-warning progress-bar-animated"
                                        role="progressbar"
                                        aria-label="Example with label"
                                        style="width: 79%"
                                        aria-valuenow="79"
                                        aria-valuemin="0"
                                        aria-valuemax="100"
                                    >
                                        79%
                                    </div>
                                </div>
                                <h6>Company Salary</h6>
                                <div class="progress mb-3">
                                    <div
                                        class="progress-bar bg-danger"
                                        role="progressbar"
                                        aria-label="Example with label"
                                        style="width: 64%"
                                        aria-valuenow="64"
                                        aria-valuemin="0"
                                        aria-valuemax="100"
                                    >
                                        64%
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="card rounded-3 mb-5">
                                <div
                                    class="card-body d-flex justify-content-between align-items-center"
                                >
                                    <div class="photo-card mb-2 mt-2">
                                        <img
                                            src="/images/1.jfif"
                                            style="width: 57px"
                                            class="rounded-3"
                                        />
                                        <a
                                            href="jobs-details.html"
                                            class="brand-title p-2"
                                            >Accenture</a
                                        >
                                    </div>
                                    <!-- Button trigger modal -->
                                    <button
                                        type="button"
                                        class="btn btn-outline-primary rounded-2 font-weight-bold"
                                        data-bs-toggle="modal"
                                        data-bs-target="#exampleModal"
                                    >
                                        Change
                                    </button>

                                    <!-- Modal -->
                                    <div
                                        class="modal fade"
                                        id="exampleModal"
                                        tabindex="-1"
                                        aria-labelledby="exampleModalLabel"
                                        aria-hidden="true"
                                    >
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5
                                                        class="modal-title d-flex justify-content-center"
                                                        id="exampleModalLabel"
                                                    >
                                                        Change Company
                                                    </h5>
                                                    <button
                                                        type="button"
                                                        class="btn-close"
                                                        data-bs-dismiss="modal"
                                                        aria-label="Close"
                                                    ></button>
                                                </div>
                                                <div class="modal-body">
                                                    <label
                                                        for="disabledSelect"
                                                        class="form-label"
                                                        >Company</label
                                                    >
                                                    <select
                                                        id="disabledSelect"
                                                        class="form-select"
                                                    >
                                                        <option>
                                                            Accenture
                                                        </option>
                                                        <option>
                                                            PT. Grab
                                                        </option>
                                                        <option>Nielsen</option>
                                                        <option>Nasa</option>
                                                    </select>
                                                </div>
                                                <div class="modal-footer">
                                                    <button
                                                        type="button"
                                                        class="btn btn-success"
                                                    >
                                                        Save changes
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="rating">
                                <h6>Company Rating</h6>
                                <div class="progress mb-3">
                                    <div
                                        class="progress-bar bg-success"
                                        role="progressbar"
                                        aria-label="Example with label"
                                        style="width: 50%"
                                        aria-valuenow="50"
                                        aria-valuemin="0"
                                        aria-valuemax="100"
                                    >
                                        50%
                                    </div>
                                </div>
                                <h6>CEO Approval</h6>
                                <div class="progress mb-3">
                                    <div
                                        class="progress-bar bg-info"
                                        role="progressbar"
                                        aria-label="Example with label"
                                        style="width: 90%"
                                        aria-valuenow="90"
                                        aria-valuemin="0"
                                        aria-valuemax="100"
                                    >
                                        90%
                                    </div>
                                </div>
                                <h6>Salary Satisfaction</h6>
                                <div class="progress mb-3">
                                    <div
                                        class="progress-bar bg-warning"
                                        role="progressbar"
                                        aria-label="Example with label"
                                        style="width: 79%"
                                        aria-valuenow="79"
                                        aria-valuemin="0"
                                        aria-valuemax="100"
                                    >
                                        79%
                                    </div>
                                </div>
                                <h6>Company Salary</h6>
                                <div class="progress mb-3">
                                    <div
                                        class="progress-bar bg-danger"
                                        role="progressbar"
                                        aria-label="Example with label"
                                        style="width: 64%"
                                        aria-valuenow="64"
                                        aria-valuemin="0"
                                        aria-valuemax="100"
                                    >
                                        64%
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection

@push('addon-style')
      <style>
            .garis_verikal {
                border-left: 1px white solid;
                height: 22px;
                width: 0px;
            }
            .garis {
                border: 1px #f2f2f2 solid;
                height: 1px;
                width: 100%;
            }
            .progress .progress-bar {
                border-radius: 20px;
                animation: animate-positive 2s;
            }
            .progress .progress-value {
                width: 65px;
                height: 25px;
                line-height: 25px;
                background: #171b3c;
                font-size: 15px;
                color: #fff;
                border-radius: 0 0 15px 15px;
                border-top: none;
                box-shadow: 0 2px 2px #4f4c4c;
                position: absolute;
                bottom: -25px;
                right: 60px;
            }
            @-webkit-keyframes animate-positive {
                0% {
                    width: 0;
                }
            }
        </style>
@endpush
