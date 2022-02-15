@extends('layouts.admin_layout')

@section('content')
    <div class="app-main__outer">
        <div class="app-main__inner">
            <div class="tabs-animation">
                <div class="row">
                    <div class="col-md-12 dash-boxes">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <div class="dash-box">
                                            <a href="applied-jobs.html">
                                                <i class="pe-7s-way"></i>
                                                <section>
                                                    <h2>0</h2>
                                                    <span>Total Properties</span>
                                                </section>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <div class="dash-box">
                                            <a href="saved-jobs.html">
                                                <i class="pe-7s-users"></i>
                                                <section>
                                                    <h2>0</h2>
                                                    <span>Total Managers</span>
                                                </section>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <div class="dash-box">
                                            <a href="#">
                                                <i class="pe-7s-car"></i>
                                                <section>
                                                    <h2>0</h2>
                                                    <span>Total Drivers</span>
                                                </section>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <div class="dash-box">
                                            <a href="#">
                                                <i class="pe-7s-id"></i>
                                                <section>
                                                    <h2>0</h2>
                                                    <span>Total Permits</span>
                                                </section>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="card mb-3">
                            <div class="card-header-tab card-header">
                                <div class="card-header-title font-size-lg text-capitalize font-weight-normal"><i class="pe-7s-search mr-3 text-muted opacity-6" style="font-size: 35px;"> </i>Search</div>
                            </div>
                            <div class="card-body">
                                <div class="search-form">
                                    <form>
                                        <ul>
                                            <li>
                                                <input type="text" class="form-control" placeholder="Make">
                                            </li>
                                            <li>
                                                <input type="text" class="form-control" placeholder="Modal">
                                            </li>
                                            <li>
                                                <input type="text" class="form-control" placeholder="Lic Plate">
                                            </li>
                                            <li>
                                                <input type="date" class="form-control" placeholder="Date">
                                            </li>
                                            <li>
                                                <input type="text" class="form-control" placeholder="Apartment">
                                            </li>
                                            <li>
                                                <input type="text" class="form-control" placeholder="Resident Name">
                                            </li>
                                            <li><button type="submit" class="submit-btn">Search <i class="fas fa-long-arrow-alt-right"></i></button></li>
                                        </ul>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="card mb-3">
                            <div class="card-header-tab card-header">
                                <div class="card-header-title font-size-lg text-capitalize font-weight-normal"><i class="pe-7s-portfolio mr-3 text-muted opacity-6" style="font-size: 35px;"> </i>Search Results</div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <tr>
                                            <th>Date</th>
                                            <th>Registration Time</th>
                                            <th>Resident Name</th>
                                            <th>Make</th>
                                            <th>Modal</th>
                                            <th>Plate #</th>
                                            <th>Permit (Hours)</th>
                                            <th>Apartment</th>
                                            <th>PIN</th>
                                            <th>Time On-side (Hours)</th>
                                            <th>Check Details</th>
                                        </tr>
                                        <tr>
                                            <td>2/1/22</td>
                                            <td>09:00 AM</td>
                                            <td>John Doe</td>
                                            <td>Honda</td>
                                            <td>C300</td>
                                            <td>020K4A</td>
                                            <td>24</td>
                                            <td>2022</td>
                                            <td>020K4A</td>
                                            <td>10</td>
                                            <td><a href="permit-detail.html" class="table-btn">View Details</a></td>
                                        </tr>
                                        <tr>
                                            <td>2/1/22</td>
                                            <td>09:00 AM</td>
                                            <td>John Doe</td>
                                            <td>Honda</td>
                                            <td>C300</td>
                                            <td>020K4A</td>
                                            <td>24</td>
                                            <td>2022</td>
                                            <td>020K4A</td>
                                            <td>10</td>
                                            <td><a href="permit-detail.html" class="table-btn">View Details</a></td>
                                        </tr>
                                        <tr>
                                            <td>2/1/22</td>
                                            <td>09:00 AM</td>
                                            <td>John Doe</td>
                                            <td>Honda</td>
                                            <td>C300</td>
                                            <td>020K4A</td>
                                            <td>24</td>
                                            <td>2022</td>
                                            <td>020K4A</td>
                                            <td>10</td>
                                            <td><a href="permit-detail.html" class="table-btn">View Details</a></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="app-wrapper-footer">
            <div class="app-footer">
                <div class="app-footer__inner">
                    <p class="mb-0">© 2022 - All Rights Reserved</p>
                </div>
            </div>
        </div>
    </div>
@endsection
