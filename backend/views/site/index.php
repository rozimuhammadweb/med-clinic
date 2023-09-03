<?php
$appointmentsCount = \common\models\Appointments::find()->count();
$patientsCount = \common\models\Patients::find()->count();

?>

<div class="content">
    <div class="page-header">
        <div class="row">
            <div class="col-sm-12">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.html">Dashboard </a>
                    </li>
                    <li class="breadcrumb-item">
                        <i class="feather-chevron-right"></i>
                    </li>
                    <li class="breadcrumb-item active">Admin Dashboard</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="good-morning-blk">
        <div class="row">
            <div class="col-md-6">
                <div class="morning-user">
                    <h2>Assalomu alaykum, <span>Ro'zimuhammad</span></h2>
                    <p>Ish kunini yaxshi o'tkazing!</p>
                </div>
            </div>
            <div class="col-md-6 position-blk">
                <div class="morning-img">
                    <img src="/img/morning-img-01.png" alt />
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
            <div class="dash-widget">
                <div class="dash-boxs comman-flex-center">
                    <img src="/img/icons/calendar.svg" alt />
                </div>
                <div class="dash-content dash-count">
                    <h4>Uchrashuvlar</h4>
                    <h2><span class="counter-up"><?= $appointmentsCount ?></span></h2>
                    <p>
                        <span class="passive-view"><i class="feather-arrow-up-right me-1"></i>40%</span>
                        o'tgan oyga nisbatan
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
            <div class="dash-widget">
                <div class="dash-boxs comman-flex-center">
                    <img src="/img/icons/profile-add.svg" alt />
                </div>
                <div class="dash-content dash-count">
                    <h4>Yangi Bemorlar</h4>
                    <h2><span class="counter-up"><?= $patientsCount ?></span></h2>
                    <p>
                        <span class="passive-view"><i class="feather-arrow-up-right me-1"></i>20%</span>
                        o'tgan oyga nisbatan
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
            <div class="dash-widget">
                <div class="dash-boxs comman-flex-center">
                    <img src="/img/icons/scissor.svg" alt />
                </div>
                <div class="dash-content dash-count">
                    <h4>Operatsiyalar</h4>
                    <h2><span class="counter-up">0</span></h2>
                    <p>
                        <span class="negative-view"><i class="feather-arrow-down-right me-1"></i>15%</span>
                        o'tgan oyga nisbatan
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
            <div class="dash-widget">
                <div class="dash-boxs comman-flex-center">
                    <img src="/img/icons/empty-wallet.svg" alt />
                </div>
                <div class="dash-content dash-count">
                    <h4>Daromad</h4>
                    <h2>$<span class="counter-up"> 20,250</span></h2>
                    <p>
                        <span class="passive-view"><i class="feather-arrow-up-right me-1"></i>30%</span>
                        o'tgan oyga nisbatan
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-md-12 col-lg-6 col-xl-9">
            <div class="card">
                <div class="card-body">
                    <div class="chart-title patient-visit">
                        <h4>Jins bo'yicha bemor tashrifi</h4>
                        <div>
                            <ul class="nav chat-user-total">
                                <li>
                                    <i class="fa fa-circle current-users" aria-hidden="true"></i>Erkaklar 75%
                                </li>
                                <li>
                                    <i class="fa fa-circle old-users" aria-hidden="true"></i>
                                    Ayollar 25%
                                </li>
                            </ul>
                        </div>
                        <div class="form-group mb-0">
                            <select class="form-control select">
                                <option>2022</option>
                                <option>2021</option>
                                <option>2020</option>
                                <option>2019</option>
                            </select>
                        </div>
                    </div>
                    <div id="patient-chart"></div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-12 col-lg-6 col-xl-3 d-flex">
            <div class="card">
                <div class="card-body">
                    <div class="chart-title">
                        <h4>Bo'lim bo'yicha bemor</h4>
                    </div>
                    <div id="donut-chart-dash" class="chart-user-icon">
                        <img src="/img/icons/user-icon.svg" alt />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-md-12 col-xl-4">
            <div class="card top-departments">
                <div class="card-header">
                    <h4 class="card-title mb-0">Yuqori bo'limlar</h4>
                </div>
                <div class="card-body">
                    <div class="activity-top">
                        <div class="activity-boxs comman-flex-center">
                            <img src="/img/icons/dep-icon-01.svg" alt />
                        </div>
                        <div class="departments-list">
                            <h4>Umumiy shifokor</h4>
                            <p>35%</p>
                        </div>
                    </div>
                    <div class="activity-top">
                        <div class="activity-boxs comman-flex-center">
                            <img src="/img/icons/dep-icon-02.svg" alt />
                        </div>
                        <div class="departments-list">
                            <h4>Tish shifokori</h4>
                            <p>24%</p>
                        </div>
                    </div>
                    <div class="activity-top">
                        <div class="activity-boxs comman-flex-center">
                            <img src="/img/icons/dep-icon-03.svg" alt />
                        </div>
                        <div class="departments-list">
                            <h4>ENT</h4>
                            <p>10%</p>
                        </div>
                    </div>
                    <div class="activity-top">
                        <div class="activity-boxs comman-flex-center">
                            <img src="/img/icons/dep-icon-04.svg" alt />
                        </div>
                        <div class="departments-list">
                            <h4>Kardiolog</h4>
                            <p>15%</p>
                        </div>
                    </div>
                    <div class="activity-top mb-0">
                        <div class="activity-boxs comman-flex-center">
                            <img src="/img/icons/dep-icon-05.svg" alt />
                        </div>
                        <div class="departments-list">
                            <h4>Oftalmologiya</h4>
                            <p>20%</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-12 col-xl-8">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title d-inline-block">
                        Kelgusi uchrashuvlar
                    </h4>
                    <a href="appointments.html" class="patient-views float-end">Show all</a>
                </div>
                <div class="card-body p-0 table-dash">
                    <div class="table-responsive">
                        <table class="table mb-0 border-0 datatable custom-table">
                            <thead>
                            <tr>
                                <th>
                                    <div class="form-check check-tables">
                                        <input class="form-check-input" type="checkbox" value="something" />
                                    </div>
                                </th>
                                <th>No</th>
                                <th>Bemor ismi</th>
                                <th>Doktor</th>
                                <th>Sana</th>
                                <th>Kasallik</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    <div class="form-check check-tables">
                                        <input class="form-check-input" type="checkbox" value="something" />
                                    </div>
                                </td>
                                <td>R00001</td>
                                <td>Andrea Lalema</td>
                                <td class="table-image appoint-doctor">
                                    <img width="28" height="28" class="rounded-circle" src="/img/profiles/avatar-02.jpg"
                                         alt />
                                    <h2>Dr.Jenny Smith</h2>
                                </td>
                                <td class="appoint-time">
                                    <span>12.05.2022 at </span>7.00 PM
                                </td>
                                <td>
                                    <button class="custom-badge status-green">
                                        Fracture
                                    </button>
                                </td>
                                <td class="text-end">
                                    <div class="dropdown dropdown-action">
                                        <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown"
                                           aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="edit-appointment.html"><i
                                                    class="fa-solid fa-pen-to-square m-r-5"></i>
                                                Edit</a>
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                               data-bs-target="#delete_appointment"><i class="fa fa-trash-alt m-r-5"></i>
                                                Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check check-tables">
                                        <input class="form-check-input" type="checkbox" value="something" />
                                    </div>
                                </td>
                                <td>R00002</td>
                                <td>Cristina Groves</td>
                                <td class="table-image appoint-doctor">
                                    <img width="28" height="28" class="rounded-circle" src="/img/profiles/avatar-03.jpg"
                                         alt />
                                    <h2>Dr.Angelica Ramos</h2>
                                </td>
                                <td class="appoint-time">
                                    <span>13.05.2022 at </span>7.00 PM
                                </td>
                                <td>
                                    <button class="custom-badge status-green">
                                        Fever
                                    </button>
                                </td>
                                <td class="text-end">
                                    <div class="dropdown dropdown-action">
                                        <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown"
                                           aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="edit-appointment.html"><i
                                                    class="fa-solid fa-pen-to-square m-r-5"></i>
                                                Edit</a>
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                               data-bs-target="#delete_appointment"><i class="fa fa-trash-alt m-r-5"></i>
                                                Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check check-tables">
                                        <input class="form-check-input" type="checkbox" value="something" />
                                    </div>
                                </td>
                                <td>R00003</td>
                                <td>Bernardo</td>
                                <td class="table-image appoint-doctor">
                                    <img width="28" height="28" class="rounded-circle" src="/img/profiles/avatar-04.jpg"
                                         alt />
                                    <h2>Dr.Martin Doe</h2>
                                </td>
                                <td class="appoint-time">
                                    <span>14.05.2022 at </span>7.00 PM
                                </td>
                                <td>
                                    <button class="custom-badge status-green">
                                        Fracture
                                    </button>
                                </td>
                                <td class="text-end">
                                    <div class="dropdown dropdown-action">
                                        <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown"
                                           aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="edit-appointment.html"><i
                                                    class="fa-solid fa-pen-to-square m-r-5"></i>
                                                Edit</a>
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                               data-bs-target="#delete_appointment"><i class="fa fa-trash-alt m-r-5"></i>
                                                Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check check-tables">
                                        <input class="form-check-input" type="checkbox" value="something" />
                                    </div>
                                </td>
                                <td>R00004</td>
                                <td>Galaviz Lalema</td>
                                <td class="table-image appoint-doctor">
                                    <img width="28" height="28" class="rounded-circle" src="/img/profiles/avatar-05.jpg"
                                         alt />
                                    <h2>Dr.William Jerk</h2>
                                </td>
                                <td class="appoint-time">
                                    <span>15.05.2022 at </span>7.00 PM
                                </td>
                                <td>
                                    <button class="custom-badge status-green">
                                        Fracture
                                    </button>
                                </td>
                                <td class="text-end">
                                    <div class="dropdown dropdown-action">
                                        <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown"
                                           aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="edit-appointment.html"><i
                                                    class="fa-solid fa-pen-to-square m-r-5"></i>
                                                Edit</a>
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                               data-bs-target="#delete_appointment"><i class="fa fa-trash-alt m-r-5"></i>
                                                Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check check-tables">
                                        <input class="form-check-input" type="checkbox" value="something" />
                                    </div>
                                </td>
                                <td>R00005</td>
                                <td>Cristina Groves</td>
                                <td class="table-image appoint-doctor">
                                    <img width="28" height="28" class="rounded-circle" src="/img/profiles/avatar-03.jpg"
                                         alt />
                                    <h2>Dr.Angelica Ramos</h2>
                                </td>
                                <td class="appoint-time">
                                    <span>16.05.2022 at </span>7.00 PM
                                </td>
                                <td>
                                    <button class="custom-badge status-green">
                                        Fever
                                    </button>
                                </td>
                                <td class="text-end">
                                    <div class="dropdown dropdown-action">
                                        <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown"
                                           aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="edit-appointment.html"><i
                                                    class="fa-solid fa-pen-to-square m-r-5"></i>
                                                Edit</a>
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                               data-bs-target="#delete_appointment"><i class="fa fa-trash-alt m-r-5"></i>
                                                Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-xl-12">
            <div class="card">
                <div class="card-header pb-0">
                    <h4 class="card-title d-inline-block">Oxirgi bemorlar</h4>
                    <a href="/patients" class="float-end patient-views">Hammasini ko'rish</a>
                </div>
                <div class="card-block table-dash">
                    <div class="table-responsive">
                        <table class="table mb-0 border-0 datatable custom-table">
                            <thead>
                            <tr>
                                <th>
                                    <div class="form-check check-tables">
                                        <input class="form-check-input" type="checkbox" value="something" />
                                    </div>
                                </th>
                                <th>No</th>
                                <th>Patient name</th>
                                <th>Age</th>
                                <th>Date of Birth</th>
                                <th>Diagnosis</th>
                                <th>Triage</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    <div class="form-check check-tables">
                                        <input class="form-check-input" type="checkbox" value="something" />
                                    </div>
                                </td>
                                <td>R00001</td>
                                <td class="table-image">
                                    <img width="28" height="28" class="rounded-circle" src="/img/profiles/avatar-02.jpg"
                                         alt />
                                    <h2>Andrea Lalema</h2>
                                </td>
                                <td>21</td>
                                <td>07 January 2002</td>
                                <td>Heart attack</td>
                                <td>
                                    <button class="custom-badge status-green">
                                        Non Urgent
                                    </button>
                                </td>
                                <td class="text-end">
                                    <div class="dropdown dropdown-action">
                                        <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown"
                                           aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="edit-patient.html"><i
                                                    class="fa-solid fa-pen-to-square m-r-5"></i>
                                                Edit</a>
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                               data-bs-target="#delete_appointment"><i class="fa fa-trash-alt m-r-5"></i>
                                                Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check check-tables">
                                        <input class="form-check-input" type="checkbox" value="something" />
                                    </div>
                                </td>
                                <td>R00002</td>
                                <td class="table-image">
                                    <img width="28" height="28" class="rounded-circle" src="/img/profiles/avatar-03.jpg"
                                         alt />
                                    <h2>Mark Hay Smith</h2>
                                </td>
                                <td>23</td>
                                <td>06 January 2002</td>
                                <td>Jaundice</td>
                                <td>
                                    <button class="custom-badge status-pink">
                                        Emergency
                                    </button>
                                </td>
                                <td class="text-end">
                                    <div class="dropdown dropdown-action">
                                        <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown"
                                           aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="edit-patient.html"><i
                                                    class="fa-solid fa-pen-to-square m-r-5"></i>
                                                Edit</a>
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                               data-bs-target="#delete_appointment"><i class="fa fa-trash-alt m-r-5"></i>
                                                Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check check-tables">
                                        <input class="form-check-input" type="checkbox" value="something" />
                                    </div>
                                </td>
                                <td>R00003</td>
                                <td class="table-image">
                                    <img width="28" height="28" class="rounded-circle" src="/img/profiles/avatar-04.jpg"
                                         alt />
                                    <h2>Cristina Groves</h2>
                                </td>
                                <td>25</td>
                                <td>10 January 2002</td>
                                <td>Malaria</td>
                                <td>
                                    <button class="custom-badge status-gray">
                                        Out Patient
                                    </button>
                                </td>
                                <td class="text-end">
                                    <div class="dropdown dropdown-action">
                                        <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown"
                                           aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="edit-patient.html"><i
                                                    class="fa-solid fa-pen-to-square m-r-5"></i>
                                                Edit</a>
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                               data-bs-target="#delete_appointment"><i class="fa fa-trash-alt m-r-5"></i>
                                                Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check check-tables">
                                        <input class="form-check-input" type="checkbox" value="something" />
                                    </div>
                                </td>
                                <td>R00004</td>
                                <td class="table-image">
                                    <img width="28" height="28" class="rounded-circle"
                                         src="/img/profiles/avatar-05.jpg"
                                         alt />
                                    <h2>Galaviz Lalema</h2>
                                </td>
                                <td>21</td>
                                <td>09 January 2002</td>
                                <td>Typhoid</td>
                                <td>
                                    <button class="custom-badge status-orange">
                                        Non Urgent
                                    </button>
                                </td>
                                <td class="text-end">
                                    <div class="dropdown dropdown-action">
                                        <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown"
                                           aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="edit-patient.html"><i
                                                    class="fa-solid fa-pen-to-square m-r-5"></i>
                                                Edit</a>
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                               data-bs-target="#delete_appointment"><i class="fa fa-trash-alt m-r-5"></i>
                                                Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>