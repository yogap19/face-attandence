@extends('Template.template')
@section('content')
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="card app-calendar-wrapper">
                <div class="row g-0">
                    <!-- Calendar Sidebar -->
                    <div class="col app-calendar-sidebar" id="app-calendar-sidebar">
                        <div class="border-bottom p-4 my-sm-0 mb-3">
                            <div class="d-grid">
                                <button class="btn btn-primary btn-toggle-sidebar" data-bs-toggle="offcanvas"
                                    data-bs-target="#addEventSidebar" aria-controls="addEventSidebar">
                                    <i class="bx bx-plus me-1"></i>
                                    <span class="align-middle">Add Event</span>
                                </button>
                            </div>
                        </div>
                        <div class="p-4">
                            <!-- inline calendar (flatpicker) -->
                            <div class="ms-n2">
                                <div class="inline-calendar flatpickr-input" readonly="readonly"></div>
                                <div class="flatpickr-calendar animate inline" tabindex="-1">
                                    <div class="flatpickr-months">
                                        <span class="flatpickr-prev-month"><svg version="1.1"
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 17 17">
                                                <g></g>
                                                <path
                                                    d="M5.207 8.471l7.146 7.147-0.707 0.707-7.853-7.854 7.854-7.853 0.707 0.707-7.147 7.146z">
                                                </path>
                                            </svg></span>
                                        <div class="flatpickr-month">
                                            <div class="flatpickr-current-month">
                                                <span class="cur-month">June </span>
                                                <div class="numInputWrapper">
                                                    <input class="numInput cur-year" type="number" tabindex="-1"
                                                        aria-label="Year" /><span class="arrowUp"></span><span
                                                        class="arrowDown"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <span class="flatpickr-next-month"><svg version="1.1"
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 17 17">
                                                <g></g>
                                                <path
                                                    d="M13.207 8.472l-7.854 7.854-0.707-0.707 7.146-7.146-7.146-7.148 0.707-0.707 7.854 7.854z">
                                                </path>
                                            </svg></span>
                                    </div>
                                    <div class="flatpickr-innerContainer">
                                        <div class="flatpickr-rContainer">
                                            <div class="flatpickr-weekdays">
                                                <div class="flatpickr-weekdaycontainer">
                                                    <span class="flatpickr-weekday"> Sun</span><span
                                                        class="flatpickr-weekday">Mon</span><span
                                                        class="flatpickr-weekday">Tue</span><span
                                                        class="flatpickr-weekday">Wed</span><span
                                                        class="flatpickr-weekday">Thu</span><span
                                                        class="flatpickr-weekday">Fri</span><span
                                                        class="flatpickr-weekday">Sat </span>
                                                </div>
                                            </div>
                                            <div class="flatpickr-days" tabindex="-1">
                                                <div class="dayContainer">
                                                    <span class="flatpickr-day prevMonthDay" aria-label="May 26, 2024"
                                                        tabindex="-1">26</span><span class="flatpickr-day prevMonthDay"
                                                        aria-label="May 27, 2024" tabindex="-1">27</span><span
                                                        class="flatpickr-day prevMonthDay" aria-label="May 28, 2024"
                                                        tabindex="-1">28</span><span class="flatpickr-day prevMonthDay"
                                                        aria-label="May 29, 2024" tabindex="-1">29</span><span
                                                        class="flatpickr-day prevMonthDay" aria-label="May 30, 2024"
                                                        tabindex="-1">30</span><span class="flatpickr-day prevMonthDay"
                                                        aria-label="May 31, 2024" tabindex="-1">31</span><span
                                                        class="flatpickr-day" aria-label="June 1, 2024"
                                                        tabindex="-1">1</span><span class="flatpickr-day"
                                                        aria-label="June 2, 2024" tabindex="-1">2</span><span
                                                        class="flatpickr-day" aria-label="June 3, 2024"
                                                        tabindex="-1">3</span><span class="flatpickr-day"
                                                        aria-label="June 4, 2024" tabindex="-1">4</span><span
                                                        class="flatpickr-day" aria-label="June 5, 2024"
                                                        tabindex="-1">5</span><span class="flatpickr-day"
                                                        aria-label="June 6, 2024" tabindex="-1">6</span><span
                                                        class="flatpickr-day" aria-label="June 7, 2024"
                                                        tabindex="-1">7</span><span class="flatpickr-day today"
                                                        aria-label="June 8, 2024" aria-current="date"
                                                        tabindex="-1">8</span><span class="flatpickr-day"
                                                        aria-label="June 9, 2024" tabindex="-1">9</span><span
                                                        class="flatpickr-day" aria-label="June 10, 2024"
                                                        tabindex="-1">10</span><span class="flatpickr-day"
                                                        aria-label="June 11, 2024" tabindex="-1">11</span><span
                                                        class="flatpickr-day" aria-label="June 12, 2024"
                                                        tabindex="-1">12</span><span class="flatpickr-day"
                                                        aria-label="June 13, 2024" tabindex="-1">13</span><span
                                                        class="flatpickr-day" aria-label="June 14, 2024"
                                                        tabindex="-1">14</span><span class="flatpickr-day"
                                                        aria-label="June 15, 2024" tabindex="-1">15</span><span
                                                        class="flatpickr-day" aria-label="June 16, 2024"
                                                        tabindex="-1">16</span><span class="flatpickr-day"
                                                        aria-label="June 17, 2024" tabindex="-1">17</span><span
                                                        class="flatpickr-day" aria-label="June 18, 2024"
                                                        tabindex="-1">18</span><span class="flatpickr-day"
                                                        aria-label="June 19, 2024" tabindex="-1">19</span><span
                                                        class="flatpickr-day" aria-label="June 20, 2024"
                                                        tabindex="-1">20</span><span class="flatpickr-day"
                                                        aria-label="June 21, 2024" tabindex="-1">21</span><span
                                                        class="flatpickr-day" aria-label="June 22, 2024"
                                                        tabindex="-1">22</span><span class="flatpickr-day"
                                                        aria-label="June 23, 2024" tabindex="-1">23</span><span
                                                        class="flatpickr-day" aria-label="June 24, 2024"
                                                        tabindex="-1">24</span><span class="flatpickr-day"
                                                        aria-label="June 25, 2024" tabindex="-1">25</span><span
                                                        class="flatpickr-day" aria-label="June 26, 2024"
                                                        tabindex="-1">26</span><span class="flatpickr-day"
                                                        aria-label="June 27, 2024" tabindex="-1">27</span><span
                                                        class="flatpickr-day" aria-label="June 28, 2024"
                                                        tabindex="-1">28</span><span class="flatpickr-day"
                                                        aria-label="June 29, 2024" tabindex="-1">29</span><span
                                                        class="flatpickr-day" aria-label="June 30, 2024"
                                                        tabindex="-1">30</span><span class="flatpickr-day nextMonthDay"
                                                        aria-label="July 1, 2024" tabindex="-1">1</span><span
                                                        class="flatpickr-day nextMonthDay" aria-label="July 2, 2024"
                                                        tabindex="-1">2</span><span class="flatpickr-day nextMonthDay"
                                                        aria-label="July 3, 2024" tabindex="-1">3</span><span
                                                        class="flatpickr-day nextMonthDay" aria-label="July 4, 2024"
                                                        tabindex="-1">4</span><span class="flatpickr-day nextMonthDay"
                                                        aria-label="July 5, 2024" tabindex="-1">5</span><span
                                                        class="flatpickr-day nextMonthDay" aria-label="July 6, 2024"
                                                        tabindex="-1">6</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <hr class="container-m-nx my-4" />

                            <!-- Filter -->
                            <div class="mb-4">
                                <small class="text-small text-muted text-uppercase align-middle">Filter</small>
                            </div>

                            <div class="form-check mb-2">
                                <input class="form-check-input select-all" type="checkbox" id="selectAll"
                                    data-value="all" checked="" />
                                <label class="form-check-label" for="selectAll">View All</label>
                            </div>

                            <div class="app-calendar-events-filter">
                                <div class="form-check form-check-danger mb-2">
                                    <input class="form-check-input input-filter" type="checkbox" id="select-personal"
                                        data-value="personal" checked="" />
                                    <label class="form-check-label" for="select-personal">Personal</label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input input-filter" type="checkbox" id="select-business"
                                        data-value="business" checked="" />
                                    <label class="form-check-label" for="select-business">Business</label>
                                </div>
                                <div class="form-check form-check-warning mb-2">
                                    <input class="form-check-input input-filter" type="checkbox" id="select-family"
                                        data-value="family" checked="" />
                                    <label class="form-check-label" for="select-family">Family</label>
                                </div>
                                <div class="form-check form-check-success mb-2">
                                    <input class="form-check-input input-filter" type="checkbox" id="select-holiday"
                                        data-value="holiday" checked="" />
                                    <label class="form-check-label" for="select-holiday">Holiday</label>
                                </div>
                                <div class="form-check form-check-info">
                                    <input class="form-check-input input-filter" type="checkbox" id="select-etc"
                                        data-value="etc" checked="" />
                                    <label class="form-check-label" for="select-etc">ETC</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Calendar Sidebar -->

                    <!-- Calendar & Modal -->
                    <div class="col app-calendar-content">
                        <div class="card shadow-none border-0">
                            <div class="card-body pb-0">
                                <!-- FullCalendar -->
                                <div id="calendar" class="fc fc-media-screen fc-direction-ltr fc-theme-standard">
                                    <div class="fc-header-toolbar fc-toolbar">
                                        <div class="fc-toolbar-chunk">
                                            <div class="fc-button-group">
                                                <button type="button" title="Sidebar" aria-pressed="false"
                                                    class="fc-sidebarToggle-button fc-button d-lg-none d-inline-block ps-0"
                                                    data-bs-toggle="sidebar" data-overlay=""
                                                    data-target="#app-calendar-sidebar">
                                                    <i class="bx bx-menu bx-sm text-heading"></i></button><button
                                                    type="button" aria-pressed="false"
                                                    class="fc--button fc-button fc-button-primary"></button>
                                            </div>
                                            <div class="fc-button-group">
                                                <button type="button" title="Previous month" aria-pressed="false"
                                                    class="fc-prev-button fc-button fc-button-primary">
                                                    <span class="fc-icon fc-icon-chevron-left"
                                                        role="img"></span></button><button type="button"
                                                    title="Next month" aria-pressed="false"
                                                    class="fc-next-button fc-button fc-button-primary">
                                                    <span class="fc-icon fc-icon-chevron-right"
                                                        role="img"></span></button><button type="button"
                                                    aria-pressed="false"
                                                    class="fc--button fc-button fc-button-primary"></button>
                                            </div>
                                            <h2 class="fc-toolbar-title" id="fc-dom-1">
                                                June 2024
                                            </h2>
                                        </div>
                                        <div class="fc-toolbar-chunk"></div>
                                        <div class="fc-toolbar-chunk">
                                            <div class="fc-button-group">
                                                <button type="button" title="month view" aria-pressed="true"
                                                    class="fc-dayGridMonth-button fc-button fc-button-primary fc-button-active">
                                                    month</button><button type="button" title="week view"
                                                    aria-pressed="false"
                                                    class="fc-timeGridWeek-button fc-button fc-button-primary">
                                                    week</button><button type="button" title="day view"
                                                    aria-pressed="false"
                                                    class="fc-timeGridDay-button fc-button fc-button-primary">
                                                    day</button><button type="button" title="list view"
                                                    aria-pressed="false"
                                                    class="fc-listMonth-button fc-button fc-button-primary">
                                                    list
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div aria-labelledby="fc-dom-1" class="fc-view-harness fc-view-harness-active"
                                        style="height: 547.407px">
                                        <div class="fc-dayGridMonth-view fc-view fc-daygrid">
                                            <table role="grid" class="fc-scrollgrid fc-scrollgrid-liquid">
                                                <thead role="rowgroup">
                                                    <tr role="presentation"
                                                        class="fc-scrollgrid-section fc-scrollgrid-section-header">
                                                        <th role="presentation">
                                                            <div class="fc-scroller-harness">
                                                                <div class="fc-scroller" style="overflow: hidden">
                                                                    <table role="presentation" class="fc-col-header"
                                                                        style="width: 739px">
                                                                        <colgroup></colgroup>
                                                                        <thead role="presentation">
                                                                            <tr role="row">
                                                                                <th role="columnheader"
                                                                                    class="fc-col-header-cell fc-day fc-day-sun">
                                                                                    <div class="fc-scrollgrid-sync-inner">
                                                                                        <a aria-label="Sunday"
                                                                                            class="fc-col-header-cell-cushion">Sun</a>
                                                                                    </div>
                                                                                </th>
                                                                                <th role="columnheader"
                                                                                    class="fc-col-header-cell fc-day fc-day-mon">
                                                                                    <div class="fc-scrollgrid-sync-inner">
                                                                                        <a aria-label="Monday"
                                                                                            class="fc-col-header-cell-cushion">Mon</a>
                                                                                    </div>
                                                                                </th>
                                                                                <th role="columnheader"
                                                                                    class="fc-col-header-cell fc-day fc-day-tue">
                                                                                    <div class="fc-scrollgrid-sync-inner">
                                                                                        <a aria-label="Tuesday"
                                                                                            class="fc-col-header-cell-cushion">Tue</a>
                                                                                    </div>
                                                                                </th>
                                                                                <th role="columnheader"
                                                                                    class="fc-col-header-cell fc-day fc-day-wed">
                                                                                    <div class="fc-scrollgrid-sync-inner">
                                                                                        <a aria-label="Wednesday"
                                                                                            class="fc-col-header-cell-cushion">Wed</a>
                                                                                    </div>
                                                                                </th>
                                                                                <th role="columnheader"
                                                                                    class="fc-col-header-cell fc-day fc-day-thu">
                                                                                    <div class="fc-scrollgrid-sync-inner">
                                                                                        <a aria-label="Thursday"
                                                                                            class="fc-col-header-cell-cushion">Thu</a>
                                                                                    </div>
                                                                                </th>
                                                                                <th role="columnheader"
                                                                                    class="fc-col-header-cell fc-day fc-day-fri">
                                                                                    <div class="fc-scrollgrid-sync-inner">
                                                                                        <a aria-label="Friday"
                                                                                            class="fc-col-header-cell-cushion">Fri</a>
                                                                                    </div>
                                                                                </th>
                                                                                <th role="columnheader"
                                                                                    class="fc-col-header-cell fc-day fc-day-sat">
                                                                                    <div class="fc-scrollgrid-sync-inner">
                                                                                        <a aria-label="Saturday"
                                                                                            class="fc-col-header-cell-cushion">Sat</a>
                                                                                    </div>
                                                                                </th>
                                                                            </tr>
                                                                        </thead>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody role="rowgroup">
                                                    <tr role="presentation"
                                                        class="fc-scrollgrid-section fc-scrollgrid-section-body fc-scrollgrid-section-liquid">
                                                        <td role="presentation">
                                                            <div class="fc-scroller-harness fc-scroller-harness-liquid">
                                                                <div class="fc-scroller fc-scroller-liquid-absolute"
                                                                    style="overflow: hidden auto">
                                                                    <div class="fc-daygrid-body fc-daygrid-body-unbalanced"
                                                                        style="width: 739px">
                                                                        <table role="presentation"
                                                                            class="fc-scrollgrid-sync-table"
                                                                            style="
                                                width: 739px;
                                                height: 621px;
                                              ">
                                                                            <colgroup></colgroup>
                                                                            <tbody role="presentation">
                                                                                <tr role="row">
                                                                                    <td aria-labelledby="fc-dom-2"
                                                                                        role="gridcell"
                                                                                        data-date="2024-05-26"
                                                                                        class="fc-day fc-day-sun fc-day-past fc-day-other fc-daygrid-day">
                                                                                        <div
                                                                                            class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                            <div
                                                                                                class="fc-daygrid-day-top">
                                                                                                <a title="Go to May 26, 2024"
                                                                                                    data-navlink=""
                                                                                                    tabindex="0"
                                                                                                    id="fc-dom-2"
                                                                                                    class="fc-daygrid-day-number">26</a>
                                                                                            </div>
                                                                                            <div
                                                                                                class="fc-daygrid-day-events">
                                                                                                <div class="fc-daygrid-day-bottom"
                                                                                                    style="
                                                            margin-top: 0px;
                                                          ">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="fc-daygrid-day-bg">
                                                                                            </div>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td aria-labelledby="fc-dom-4"
                                                                                        role="gridcell"
                                                                                        data-date="2024-05-27"
                                                                                        class="fc-day fc-day-mon fc-day-past fc-day-other fc-daygrid-day">
                                                                                        <div
                                                                                            class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                            <div
                                                                                                class="fc-daygrid-day-top">
                                                                                                <a title="Go to May 27, 2024"
                                                                                                    data-navlink=""
                                                                                                    tabindex="0"
                                                                                                    id="fc-dom-4"
                                                                                                    class="fc-daygrid-day-number">27</a>
                                                                                            </div>
                                                                                            <div
                                                                                                class="fc-daygrid-day-events">
                                                                                                <div class="fc-daygrid-day-bottom"
                                                                                                    style="
                                                            margin-top: 0px;
                                                          ">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="fc-daygrid-day-bg">
                                                                                            </div>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td aria-labelledby="fc-dom-6"
                                                                                        role="gridcell"
                                                                                        data-date="2024-05-28"
                                                                                        class="fc-day fc-day-tue fc-day-past fc-day-other fc-daygrid-day">
                                                                                        <div
                                                                                            class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                            <div
                                                                                                class="fc-daygrid-day-top">
                                                                                                <a title="Go to May 28, 2024"
                                                                                                    data-navlink=""
                                                                                                    tabindex="0"
                                                                                                    id="fc-dom-6"
                                                                                                    class="fc-daygrid-day-number">28</a>
                                                                                            </div>
                                                                                            <div
                                                                                                class="fc-daygrid-day-events">
                                                                                                <div class="fc-daygrid-day-bottom"
                                                                                                    style="
                                                            margin-top: 0px;
                                                          ">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="fc-daygrid-day-bg">
                                                                                            </div>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td aria-labelledby="fc-dom-8"
                                                                                        role="gridcell"
                                                                                        data-date="2024-05-29"
                                                                                        class="fc-day fc-day-wed fc-day-past fc-day-other fc-daygrid-day">
                                                                                        <div
                                                                                            class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                            <div
                                                                                                class="fc-daygrid-day-top">
                                                                                                <a title="Go to May 29, 2024"
                                                                                                    data-navlink=""
                                                                                                    tabindex="0"
                                                                                                    id="fc-dom-8"
                                                                                                    class="fc-daygrid-day-number">29</a>
                                                                                            </div>
                                                                                            <div
                                                                                                class="fc-daygrid-day-events">
                                                                                                <div class="fc-daygrid-day-bottom"
                                                                                                    style="
                                                            margin-top: 0px;
                                                          ">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="fc-daygrid-day-bg">
                                                                                            </div>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td aria-labelledby="fc-dom-10"
                                                                                        role="gridcell"
                                                                                        data-date="2024-05-30"
                                                                                        class="fc-day fc-day-thu fc-day-past fc-day-other fc-daygrid-day">
                                                                                        <div
                                                                                            class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                            <div
                                                                                                class="fc-daygrid-day-top">
                                                                                                <a title="Go to May 30, 2024"
                                                                                                    data-navlink=""
                                                                                                    tabindex="0"
                                                                                                    id="fc-dom-10"
                                                                                                    class="fc-daygrid-day-number">30</a>
                                                                                            </div>
                                                                                            <div
                                                                                                class="fc-daygrid-day-events">
                                                                                                <div class="fc-daygrid-day-bottom"
                                                                                                    style="
                                                            margin-top: 0px;
                                                          ">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="fc-daygrid-day-bg">
                                                                                            </div>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td aria-labelledby="fc-dom-12"
                                                                                        role="gridcell"
                                                                                        data-date="2024-05-31"
                                                                                        class="fc-day fc-day-fri fc-day-past fc-day-other fc-daygrid-day">
                                                                                        <div
                                                                                            class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                            <div
                                                                                                class="fc-daygrid-day-top">
                                                                                                <a title="Go to May 31, 2024"
                                                                                                    data-navlink=""
                                                                                                    tabindex="0"
                                                                                                    id="fc-dom-12"
                                                                                                    class="fc-daygrid-day-number">31</a>
                                                                                            </div>
                                                                                            <div
                                                                                                class="fc-daygrid-day-events">
                                                                                                <div class="fc-daygrid-day-bottom"
                                                                                                    style="
                                                            margin-top: 0px;
                                                          ">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="fc-daygrid-day-bg">
                                                                                            </div>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td aria-labelledby="fc-dom-14"
                                                                                        role="gridcell"
                                                                                        data-date="2024-06-01"
                                                                                        class="fc-day fc-day-sat fc-day-past fc-daygrid-day">
                                                                                        <div
                                                                                            class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                            <div
                                                                                                class="fc-daygrid-day-top">
                                                                                                <a title="Go to June 1, 2024"
                                                                                                    data-navlink=""
                                                                                                    tabindex="0"
                                                                                                    id="fc-dom-14"
                                                                                                    class="fc-daygrid-day-number">1</a>
                                                                                            </div>
                                                                                            <div
                                                                                                class="fc-daygrid-day-events">
                                                                                                <div class="fc-daygrid-day-bottom"
                                                                                                    style="
                                                            margin-top: 0px;
                                                          ">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="fc-daygrid-day-bg">
                                                                                            </div>
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr role="row">
                                                                                    <td aria-labelledby="fc-dom-16"
                                                                                        role="gridcell"
                                                                                        data-date="2024-06-02"
                                                                                        class="fc-day fc-day-sun fc-day-past fc-daygrid-day">
                                                                                        <div
                                                                                            class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                            <div
                                                                                                class="fc-daygrid-day-top">
                                                                                                <a title="Go to June 2, 2024"
                                                                                                    data-navlink=""
                                                                                                    tabindex="0"
                                                                                                    id="fc-dom-16"
                                                                                                    class="fc-daygrid-day-number">2</a>
                                                                                            </div>
                                                                                            <div
                                                                                                class="fc-daygrid-day-events">
                                                                                                <div class="fc-daygrid-day-bottom"
                                                                                                    style="
                                                            margin-top: 0px;
                                                          ">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="fc-daygrid-day-bg">
                                                                                            </div>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td aria-labelledby="fc-dom-18"
                                                                                        role="gridcell"
                                                                                        data-date="2024-06-03"
                                                                                        class="fc-day fc-day-mon fc-day-past fc-daygrid-day">
                                                                                        <div
                                                                                            class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                            <div
                                                                                                class="fc-daygrid-day-top">
                                                                                                <a title="Go to June 3, 2024"
                                                                                                    data-navlink=""
                                                                                                    tabindex="0"
                                                                                                    id="fc-dom-18"
                                                                                                    class="fc-daygrid-day-number">3</a>
                                                                                            </div>
                                                                                            <div
                                                                                                class="fc-daygrid-day-events">
                                                                                                <div class="fc-daygrid-day-bottom"
                                                                                                    style="
                                                            margin-top: 0px;
                                                          ">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="fc-daygrid-day-bg">
                                                                                            </div>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td aria-labelledby="fc-dom-20"
                                                                                        role="gridcell"
                                                                                        data-date="2024-06-04"
                                                                                        class="fc-day fc-day-tue fc-day-past fc-daygrid-day">
                                                                                        <div
                                                                                            class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                            <div
                                                                                                class="fc-daygrid-day-top">
                                                                                                <a title="Go to June 4, 2024"
                                                                                                    data-navlink=""
                                                                                                    tabindex="0"
                                                                                                    id="fc-dom-20"
                                                                                                    class="fc-daygrid-day-number">4</a>
                                                                                            </div>
                                                                                            <div
                                                                                                class="fc-daygrid-day-events">
                                                                                                <div class="fc-daygrid-day-bottom"
                                                                                                    style="
                                                            margin-top: 0px;
                                                          ">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="fc-daygrid-day-bg">
                                                                                            </div>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td aria-labelledby="fc-dom-22"
                                                                                        role="gridcell"
                                                                                        data-date="2024-06-05"
                                                                                        class="fc-day fc-day-wed fc-day-past fc-daygrid-day">
                                                                                        <div
                                                                                            class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                            <div
                                                                                                class="fc-daygrid-day-top">
                                                                                                <a title="Go to June 5, 2024"
                                                                                                    data-navlink=""
                                                                                                    tabindex="0"
                                                                                                    id="fc-dom-22"
                                                                                                    class="fc-daygrid-day-number">5</a>
                                                                                            </div>
                                                                                            <div
                                                                                                class="fc-daygrid-day-events">
                                                                                                <div class="fc-daygrid-day-bottom"
                                                                                                    style="
                                                            margin-top: 0px;
                                                          ">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="fc-daygrid-day-bg">
                                                                                            </div>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td aria-labelledby="fc-dom-24"
                                                                                        role="gridcell"
                                                                                        data-date="2024-06-06"
                                                                                        class="fc-day fc-day-thu fc-day-past fc-daygrid-day">
                                                                                        <div
                                                                                            class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                            <div
                                                                                                class="fc-daygrid-day-top">
                                                                                                <a title="Go to June 6, 2024"
                                                                                                    data-navlink=""
                                                                                                    tabindex="0"
                                                                                                    id="fc-dom-24"
                                                                                                    class="fc-daygrid-day-number">6</a>
                                                                                            </div>
                                                                                            <div
                                                                                                class="fc-daygrid-day-events">
                                                                                                <div class="fc-daygrid-day-bottom"
                                                                                                    style="
                                                            margin-top: 0px;
                                                          ">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="fc-daygrid-day-bg">
                                                                                            </div>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td aria-labelledby="fc-dom-26"
                                                                                        role="gridcell"
                                                                                        data-date="2024-06-07"
                                                                                        class="fc-day fc-day-fri fc-day-past fc-daygrid-day">
                                                                                        <div
                                                                                            class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                            <div
                                                                                                class="fc-daygrid-day-top">
                                                                                                <a title="Go to June 7, 2024"
                                                                                                    data-navlink=""
                                                                                                    tabindex="0"
                                                                                                    id="fc-dom-26"
                                                                                                    class="fc-daygrid-day-number">7</a>
                                                                                            </div>
                                                                                            <div
                                                                                                class="fc-daygrid-day-events">
                                                                                                <div class="fc-daygrid-day-bottom"
                                                                                                    style="
                                                            margin-top: 0px;
                                                          ">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="fc-daygrid-day-bg">
                                                                                            </div>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td aria-labelledby="fc-dom-28"
                                                                                        role="gridcell"
                                                                                        data-date="2024-06-08"
                                                                                        class="fc-day fc-day-sat fc-day-today fc-daygrid-day">
                                                                                        <div
                                                                                            class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                            <div
                                                                                                class="fc-daygrid-day-top">
                                                                                                <a title="Go to June 8, 2024"
                                                                                                    data-navlink=""
                                                                                                    tabindex="0"
                                                                                                    id="fc-dom-28"
                                                                                                    class="fc-daygrid-day-number">8</a>
                                                                                            </div>
                                                                                            <div
                                                                                                class="fc-daygrid-day-events">
                                                                                                <div class="fc-daygrid-event-harness"
                                                                                                    style="
                                                            margin-top: 0px;
                                                          ">
                                                                                                    <a tabindex="0"
                                                                                                        class="fc-event fc-event-draggable fc-event-start fc-event-today fc-daygrid-event fc-daygrid-block-event fc-h-event fc-event-primary">
                                                                                                        <div
                                                                                                            class="fc-event-main">
                                                                                                            <div
                                                                                                                class="fc-event-main-frame">
                                                                                                                <div
                                                                                                                    class="fc-event-time">
                                                                                                                    9:57a
                                                                                                                </div>
                                                                                                                <div
                                                                                                                    class="fc-event-title-container">
                                                                                                                    <div
                                                                                                                        class="fc-event-title fc-sticky">
                                                                                                                        Design
                                                                                                                        Review
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </a>
                                                                                                </div>
                                                                                                <div class="fc-daygrid-day-bottom"
                                                                                                    style="
                                                            margin-top: 0px;
                                                          ">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="fc-daygrid-day-bg">
                                                                                            </div>
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr role="row">
                                                                                    <td aria-labelledby="fc-dom-30"
                                                                                        role="gridcell"
                                                                                        data-date="2024-06-09"
                                                                                        class="fc-day fc-day-sun fc-day-future fc-daygrid-day">
                                                                                        <div
                                                                                            class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                            <div
                                                                                                class="fc-daygrid-day-top">
                                                                                                <a title="Go to June 9, 2024"
                                                                                                    data-navlink=""
                                                                                                    tabindex="0"
                                                                                                    id="fc-dom-30"
                                                                                                    class="fc-daygrid-day-number">9</a>
                                                                                            </div>
                                                                                            <div
                                                                                                class="fc-daygrid-day-events">
                                                                                                <div class="fc-daygrid-event-harness"
                                                                                                    style="
                                                            margin-top: 0px;
                                                          ">
                                                                                                    <a tabindex="0"
                                                                                                        class="fc-event fc-event-draggable fc-event-end fc-event-today fc-daygrid-event fc-daygrid-block-event fc-h-event fc-event-primary">
                                                                                                        <div
                                                                                                            class="fc-event-main">
                                                                                                            <div
                                                                                                                class="fc-event-main-frame">
                                                                                                                <div
                                                                                                                    class="fc-event-time">
                                                                                                                    9:57a
                                                                                                                </div>
                                                                                                                <div
                                                                                                                    class="fc-event-title-container">
                                                                                                                    <div
                                                                                                                        class="fc-event-title fc-sticky">
                                                                                                                        Design
                                                                                                                        Review
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </a>
                                                                                                </div>
                                                                                                <div class="fc-daygrid-day-bottom"
                                                                                                    style="
                                                            margin-top: 0px;
                                                          ">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="fc-daygrid-day-bg">
                                                                                            </div>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td aria-labelledby="fc-dom-32"
                                                                                        role="gridcell"
                                                                                        data-date="2024-06-10"
                                                                                        class="fc-day fc-day-mon fc-day-future fc-daygrid-day">
                                                                                        <div
                                                                                            class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                            <div
                                                                                                class="fc-daygrid-day-top">
                                                                                                <a title="Go to June 10, 2024"
                                                                                                    data-navlink=""
                                                                                                    tabindex="0"
                                                                                                    id="fc-dom-32"
                                                                                                    class="fc-daygrid-day-number">10</a>
                                                                                            </div>
                                                                                            <div
                                                                                                class="fc-daygrid-day-events">
                                                                                                <div class="fc-daygrid-day-bottom"
                                                                                                    style="
                                                            margin-top: 0px;
                                                          ">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="fc-daygrid-day-bg">
                                                                                            </div>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td aria-labelledby="fc-dom-34"
                                                                                        role="gridcell"
                                                                                        data-date="2024-06-11"
                                                                                        class="fc-day fc-day-tue fc-day-future fc-daygrid-day">
                                                                                        <div
                                                                                            class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                            <div
                                                                                                class="fc-daygrid-day-top">
                                                                                                <a title="Go to June 11, 2024"
                                                                                                    data-navlink=""
                                                                                                    tabindex="0"
                                                                                                    id="fc-dom-34"
                                                                                                    class="fc-daygrid-day-number">11</a>
                                                                                            </div>
                                                                                            <div
                                                                                                class="fc-daygrid-day-events">
                                                                                                <div class="fc-daygrid-day-bottom"
                                                                                                    style="
                                                            margin-top: 0px;
                                                          ">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="fc-daygrid-day-bg">
                                                                                            </div>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td aria-labelledby="fc-dom-36"
                                                                                        role="gridcell"
                                                                                        data-date="2024-06-12"
                                                                                        class="fc-day fc-day-wed fc-day-future fc-daygrid-day">
                                                                                        <div
                                                                                            class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                            <div
                                                                                                class="fc-daygrid-day-top">
                                                                                                <a title="Go to June 12, 2024"
                                                                                                    data-navlink=""
                                                                                                    tabindex="0"
                                                                                                    id="fc-dom-36"
                                                                                                    class="fc-daygrid-day-number">12</a>
                                                                                            </div>
                                                                                            <div
                                                                                                class="fc-daygrid-day-events">
                                                                                                <div class="fc-daygrid-day-bottom"
                                                                                                    style="
                                                            margin-top: 0px;
                                                          ">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="fc-daygrid-day-bg">
                                                                                            </div>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td aria-labelledby="fc-dom-38"
                                                                                        role="gridcell"
                                                                                        data-date="2024-06-13"
                                                                                        class="fc-day fc-day-thu fc-day-future fc-daygrid-day">
                                                                                        <div
                                                                                            class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                            <div
                                                                                                class="fc-daygrid-day-top">
                                                                                                <a title="Go to June 13, 2024"
                                                                                                    data-navlink=""
                                                                                                    tabindex="0"
                                                                                                    id="fc-dom-38"
                                                                                                    class="fc-daygrid-day-number">13</a>
                                                                                            </div>
                                                                                            <div
                                                                                                class="fc-daygrid-day-events">
                                                                                                <div class="fc-daygrid-day-bottom"
                                                                                                    style="
                                                            margin-top: 0px;
                                                          ">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="fc-daygrid-day-bg">
                                                                                            </div>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td aria-labelledby="fc-dom-40"
                                                                                        role="gridcell"
                                                                                        data-date="2024-06-14"
                                                                                        class="fc-day fc-day-fri fc-day-future fc-daygrid-day">
                                                                                        <div
                                                                                            class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                            <div
                                                                                                class="fc-daygrid-day-top">
                                                                                                <a title="Go to June 14, 2024"
                                                                                                    data-navlink=""
                                                                                                    tabindex="0"
                                                                                                    id="fc-dom-40"
                                                                                                    class="fc-daygrid-day-number">14</a>
                                                                                            </div>
                                                                                            <div
                                                                                                class="fc-daygrid-day-events">
                                                                                                <div class="fc-daygrid-day-bottom"
                                                                                                    style="
                                                            margin-top: 0px;
                                                          ">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="fc-daygrid-day-bg">
                                                                                            </div>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td aria-labelledby="fc-dom-42"
                                                                                        role="gridcell"
                                                                                        data-date="2024-06-15"
                                                                                        class="fc-day fc-day-sat fc-day-future fc-daygrid-day">
                                                                                        <div
                                                                                            class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                            <div
                                                                                                class="fc-daygrid-day-top">
                                                                                                <a title="Go to June 15, 2024"
                                                                                                    data-navlink=""
                                                                                                    tabindex="0"
                                                                                                    id="fc-dom-42"
                                                                                                    class="fc-daygrid-day-number">15</a>
                                                                                            </div>
                                                                                            <div
                                                                                                class="fc-daygrid-day-events">
                                                                                                <div class="fc-daygrid-day-bottom"
                                                                                                    style="
                                                            margin-top: 0px;
                                                          ">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="fc-daygrid-day-bg">
                                                                                            </div>
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr role="row">
                                                                                    <td aria-labelledby="fc-dom-44"
                                                                                        role="gridcell"
                                                                                        data-date="2024-06-16"
                                                                                        class="fc-day fc-day-sun fc-day-future fc-daygrid-day">
                                                                                        <div
                                                                                            class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                            <div
                                                                                                class="fc-daygrid-day-top">
                                                                                                <a title="Go to June 16, 2024"
                                                                                                    data-navlink=""
                                                                                                    tabindex="0"
                                                                                                    id="fc-dom-44"
                                                                                                    class="fc-daygrid-day-number">16</a>
                                                                                            </div>
                                                                                            <div
                                                                                                class="fc-daygrid-day-events">
                                                                                                <div class="fc-daygrid-day-bottom"
                                                                                                    style="
                                                            margin-top: 0px;
                                                          ">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="fc-daygrid-day-bg">
                                                                                            </div>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td aria-labelledby="fc-dom-46"
                                                                                        role="gridcell"
                                                                                        data-date="2024-06-17"
                                                                                        class="fc-day fc-day-mon fc-day-future fc-daygrid-day">
                                                                                        <div
                                                                                            class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                            <div
                                                                                                class="fc-daygrid-day-top">
                                                                                                <a title="Go to June 17, 2024"
                                                                                                    data-navlink=""
                                                                                                    tabindex="0"
                                                                                                    id="fc-dom-46"
                                                                                                    class="fc-daygrid-day-number">17</a>
                                                                                            </div>
                                                                                            <div
                                                                                                class="fc-daygrid-day-events">
                                                                                                <div class="fc-daygrid-event-harness"
                                                                                                    style="
                                                            margin-top: 0px;
                                                          ">
                                                                                                    <a tabindex="0"
                                                                                                        class="fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-future fc-daygrid-event fc-daygrid-dot-event fc-event-warning">
                                                                                                        <div
                                                                                                            class="fc-daygrid-event-dot">
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="fc-event-time">
                                                                                                            12a
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="fc-event-title">
                                                                                                            Dinner
                                                                                                        </div>
                                                                                                    </a>
                                                                                                </div>
                                                                                                <div class="fc-daygrid-event-harness"
                                                                                                    style="
                                                            margin-top: 0px;
                                                          ">
                                                                                                    <a tabindex="0"
                                                                                                        class="fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-future fc-daygrid-event fc-daygrid-block-event fc-h-event fc-event-info">
                                                                                                        <div
                                                                                                            class="fc-event-main">
                                                                                                            <div
                                                                                                                class="fc-event-main-frame">
                                                                                                                <div
                                                                                                                    class="fc-event-title-container">
                                                                                                                    <div
                                                                                                                        class="fc-event-title fc-sticky">
                                                                                                                        Dart
                                                                                                                        Game?
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="fc-event-resizer fc-event-resizer-start">
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="fc-event-resizer fc-event-resizer-end">
                                                                                                        </div>
                                                                                                    </a>
                                                                                                </div>
                                                                                                <div class="fc-daygrid-event-harness fc-daygrid-event-harness-abs"
                                                                                                    style="
                                                            visibility: hidden;
                                                            top: 0px;
                                                            left: 0px;
                                                            right: 0px;
                                                          ">
                                                                                                    <a tabindex="0"
                                                                                                        class="fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-future fc-daygrid-event fc-daygrid-block-event fc-h-event fc-event-danger">
                                                                                                        <div
                                                                                                            class="fc-event-main">
                                                                                                            <div
                                                                                                                class="fc-event-main-frame">
                                                                                                                <div
                                                                                                                    class="fc-event-title-container">
                                                                                                                    <div
                                                                                                                        class="fc-event-title fc-sticky">
                                                                                                                        Meditation
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="fc-event-resizer fc-event-resizer-start">
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="fc-event-resizer fc-event-resizer-end">
                                                                                                        </div>
                                                                                                    </a>
                                                                                                </div>
                                                                                                <div class="fc-daygrid-event-harness fc-daygrid-event-harness-abs"
                                                                                                    style="
                                                            visibility: hidden;
                                                            top: 0px;
                                                            left: 0px;
                                                            right: 0px;
                                                          ">
                                                                                                    <a tabindex="0"
                                                                                                        class="fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-future fc-daygrid-event fc-daygrid-block-event fc-h-event fc-event-primary">
                                                                                                        <div
                                                                                                            class="fc-event-main">
                                                                                                            <div
                                                                                                                class="fc-event-main-frame">
                                                                                                                <div
                                                                                                                    class="fc-event-title-container">
                                                                                                                    <div
                                                                                                                        class="fc-event-title fc-sticky">
                                                                                                                        Product
                                                                                                                        Review
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="fc-event-resizer fc-event-resizer-start">
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="fc-event-resizer fc-event-resizer-end">
                                                                                                        </div>
                                                                                                    </a>
                                                                                                </div>
                                                                                                <div class="fc-daygrid-day-bottom"
                                                                                                    style="
                                                            margin-top: 0px;
                                                          ">
                                                                                                    <a tabindex="0"
                                                                                                        title="Show 2 more events"
                                                                                                        aria-expanded="false"
                                                                                                        aria-controls=""
                                                                                                        class="fc-daygrid-more-link fc-more-link">+2
                                                                                                        more</a>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="fc-daygrid-day-bg">
                                                                                            </div>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td aria-labelledby="fc-dom-48"
                                                                                        role="gridcell"
                                                                                        data-date="2024-06-18"
                                                                                        class="fc-day fc-day-tue fc-day-future fc-daygrid-day">
                                                                                        <div
                                                                                            class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                            <div
                                                                                                class="fc-daygrid-day-top">
                                                                                                <a title="Go to June 18, 2024"
                                                                                                    data-navlink=""
                                                                                                    tabindex="0"
                                                                                                    id="fc-dom-48"
                                                                                                    class="fc-daygrid-day-number">18</a>
                                                                                            </div>
                                                                                            <div
                                                                                                class="fc-daygrid-day-events">
                                                                                                <div class="fc-daygrid-day-bottom"
                                                                                                    style="
                                                            margin-top: 0px;
                                                          ">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="fc-daygrid-day-bg">
                                                                                            </div>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td aria-labelledby="fc-dom-50"
                                                                                        role="gridcell"
                                                                                        data-date="2024-06-19"
                                                                                        class="fc-day fc-day-wed fc-day-future fc-daygrid-day">
                                                                                        <div
                                                                                            class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                            <div
                                                                                                class="fc-daygrid-day-top">
                                                                                                <a title="Go to June 19, 2024"
                                                                                                    data-navlink=""
                                                                                                    tabindex="0"
                                                                                                    id="fc-dom-50"
                                                                                                    class="fc-daygrid-day-number">19</a>
                                                                                            </div>
                                                                                            <div
                                                                                                class="fc-daygrid-day-events">
                                                                                                <div class="fc-daygrid-event-harness"
                                                                                                    style="
                                                            margin-top: 0px;
                                                          ">
                                                                                                    <a tabindex="0"
                                                                                                        class="fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-future fc-daygrid-event fc-daygrid-dot-event fc-event-danger">
                                                                                                        <div
                                                                                                            class="fc-daygrid-event-dot">
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="fc-event-time">
                                                                                                            12a
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="fc-event-title">
                                                                                                            Doctor's
                                                                                                            Appointment
                                                                                                        </div>
                                                                                                    </a>
                                                                                                </div>
                                                                                                <div class="fc-daygrid-event-harness"
                                                                                                    style="
                                                            margin-top: 0px;
                                                          ">
                                                                                                    <a tabindex="0"
                                                                                                        class="fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-future fc-daygrid-event fc-daygrid-block-event fc-h-event fc-event-primary">
                                                                                                        <div
                                                                                                            class="fc-event-main">
                                                                                                            <div
                                                                                                                class="fc-event-main-frame">
                                                                                                                <div
                                                                                                                    class="fc-event-title-container">
                                                                                                                    <div
                                                                                                                        class="fc-event-title fc-sticky">
                                                                                                                        Meeting
                                                                                                                        With
                                                                                                                        Client
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="fc-event-resizer fc-event-resizer-start">
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="fc-event-resizer fc-event-resizer-end">
                                                                                                        </div>
                                                                                                    </a>
                                                                                                </div>
                                                                                                <div class="fc-daygrid-day-bottom"
                                                                                                    style="
                                                            margin-top: 0px;
                                                          ">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="fc-daygrid-day-bg">
                                                                                            </div>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td aria-labelledby="fc-dom-52"
                                                                                        role="gridcell"
                                                                                        data-date="2024-06-20"
                                                                                        class="fc-day fc-day-thu fc-day-future fc-daygrid-day">
                                                                                        <div
                                                                                            class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                            <div
                                                                                                class="fc-daygrid-day-top">
                                                                                                <a title="Go to June 20, 2024"
                                                                                                    data-navlink=""
                                                                                                    tabindex="0"
                                                                                                    id="fc-dom-52"
                                                                                                    class="fc-daygrid-day-number">20</a>
                                                                                            </div>
                                                                                            <div
                                                                                                class="fc-daygrid-day-events">
                                                                                                <div class="fc-daygrid-day-bottom"
                                                                                                    style="
                                                            margin-top: 0px;
                                                          ">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="fc-daygrid-day-bg">
                                                                                            </div>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td aria-labelledby="fc-dom-54"
                                                                                        role="gridcell"
                                                                                        data-date="2024-06-21"
                                                                                        class="fc-day fc-day-fri fc-day-future fc-daygrid-day">
                                                                                        <div
                                                                                            class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                            <div
                                                                                                class="fc-daygrid-day-top">
                                                                                                <a title="Go to June 21, 2024"
                                                                                                    data-navlink=""
                                                                                                    tabindex="0"
                                                                                                    id="fc-dom-54"
                                                                                                    class="fc-daygrid-day-number">21</a>
                                                                                            </div>
                                                                                            <div
                                                                                                class="fc-daygrid-day-events">
                                                                                                <div class="fc-daygrid-event-harness fc-daygrid-event-harness-abs"
                                                                                                    style="
                                                            top: 0px;
                                                            left: 0px;
                                                            right: -106.125px;
                                                          ">
                                                                                                    <a tabindex="0"
                                                                                                        class="fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-future fc-daygrid-event fc-daygrid-block-event fc-h-event fc-event-success">
                                                                                                        <div
                                                                                                            class="fc-event-main">
                                                                                                            <div
                                                                                                                class="fc-event-main-frame">
                                                                                                                <div
                                                                                                                    class="fc-event-title-container">
                                                                                                                    <div
                                                                                                                        class="fc-event-title fc-sticky">
                                                                                                                        Family
                                                                                                                        Trip
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="fc-event-resizer fc-event-resizer-start">
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="fc-event-resizer fc-event-resizer-end">
                                                                                                        </div>
                                                                                                    </a>
                                                                                                </div>
                                                                                                <div class="fc-daygrid-day-bottom"
                                                                                                    style="
                                                            margin-top: 33px;
                                                          ">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="fc-daygrid-day-bg">
                                                                                            </div>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td aria-labelledby="fc-dom-56"
                                                                                        role="gridcell"
                                                                                        data-date="2024-06-22"
                                                                                        class="fc-day fc-day-sat fc-day-future fc-daygrid-day">
                                                                                        <div
                                                                                            class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                            <div
                                                                                                class="fc-daygrid-day-top">
                                                                                                <a title="Go to June 22, 2024"
                                                                                                    data-navlink=""
                                                                                                    tabindex="0"
                                                                                                    id="fc-dom-56"
                                                                                                    class="fc-daygrid-day-number">22</a>
                                                                                            </div>
                                                                                            <div
                                                                                                class="fc-daygrid-day-events">
                                                                                                <div class="fc-daygrid-day-bottom"
                                                                                                    style="
                                                            margin-top: 33px;
                                                          ">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="fc-daygrid-day-bg">
                                                                                            </div>
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr role="row">
                                                                                    <td aria-labelledby="fc-dom-58"
                                                                                        role="gridcell"
                                                                                        data-date="2024-06-23"
                                                                                        class="fc-day fc-day-sun fc-day-future fc-daygrid-day">
                                                                                        <div
                                                                                            class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                            <div
                                                                                                class="fc-daygrid-day-top">
                                                                                                <a title="Go to June 23, 2024"
                                                                                                    data-navlink=""
                                                                                                    tabindex="0"
                                                                                                    id="fc-dom-58"
                                                                                                    class="fc-daygrid-day-number">23</a>
                                                                                            </div>
                                                                                            <div
                                                                                                class="fc-daygrid-day-events">
                                                                                                <div class="fc-daygrid-day-bottom"
                                                                                                    style="
                                                            margin-top: 0px;
                                                          ">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="fc-daygrid-day-bg">
                                                                                            </div>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td aria-labelledby="fc-dom-60"
                                                                                        role="gridcell"
                                                                                        data-date="2024-06-24"
                                                                                        class="fc-day fc-day-mon fc-day-future fc-daygrid-day">
                                                                                        <div
                                                                                            class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                            <div
                                                                                                class="fc-daygrid-day-top">
                                                                                                <a title="Go to June 24, 2024"
                                                                                                    data-navlink=""
                                                                                                    tabindex="0"
                                                                                                    id="fc-dom-60"
                                                                                                    class="fc-daygrid-day-number">24</a>
                                                                                            </div>
                                                                                            <div
                                                                                                class="fc-daygrid-day-events">
                                                                                                <div class="fc-daygrid-day-bottom"
                                                                                                    style="
                                                            margin-top: 0px;
                                                          ">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="fc-daygrid-day-bg">
                                                                                            </div>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td aria-labelledby="fc-dom-62"
                                                                                        role="gridcell"
                                                                                        data-date="2024-06-25"
                                                                                        class="fc-day fc-day-tue fc-day-future fc-daygrid-day">
                                                                                        <div
                                                                                            class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                            <div
                                                                                                class="fc-daygrid-day-top">
                                                                                                <a title="Go to June 25, 2024"
                                                                                                    data-navlink=""
                                                                                                    tabindex="0"
                                                                                                    id="fc-dom-62"
                                                                                                    class="fc-daygrid-day-number">25</a>
                                                                                            </div>
                                                                                            <div
                                                                                                class="fc-daygrid-day-events">
                                                                                                <div class="fc-daygrid-day-bottom"
                                                                                                    style="
                                                            margin-top: 0px;
                                                          ">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="fc-daygrid-day-bg">
                                                                                            </div>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td aria-labelledby="fc-dom-64"
                                                                                        role="gridcell"
                                                                                        data-date="2024-06-26"
                                                                                        class="fc-day fc-day-wed fc-day-future fc-daygrid-day">
                                                                                        <div
                                                                                            class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                            <div
                                                                                                class="fc-daygrid-day-top">
                                                                                                <a title="Go to June 26, 2024"
                                                                                                    data-navlink=""
                                                                                                    tabindex="0"
                                                                                                    id="fc-dom-64"
                                                                                                    class="fc-daygrid-day-number">26</a>
                                                                                            </div>
                                                                                            <div
                                                                                                class="fc-daygrid-day-events">
                                                                                                <div class="fc-daygrid-day-bottom"
                                                                                                    style="
                                                            margin-top: 0px;
                                                          ">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="fc-daygrid-day-bg">
                                                                                            </div>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td aria-labelledby="fc-dom-66"
                                                                                        role="gridcell"
                                                                                        data-date="2024-06-27"
                                                                                        class="fc-day fc-day-thu fc-day-future fc-daygrid-day">
                                                                                        <div
                                                                                            class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                            <div
                                                                                                class="fc-daygrid-day-top">
                                                                                                <a title="Go to June 27, 2024"
                                                                                                    data-navlink=""
                                                                                                    tabindex="0"
                                                                                                    id="fc-dom-66"
                                                                                                    class="fc-daygrid-day-number">27</a>
                                                                                            </div>
                                                                                            <div
                                                                                                class="fc-daygrid-day-events">
                                                                                                <div class="fc-daygrid-day-bottom"
                                                                                                    style="
                                                            margin-top: 0px;
                                                          ">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="fc-daygrid-day-bg">
                                                                                            </div>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td aria-labelledby="fc-dom-68"
                                                                                        role="gridcell"
                                                                                        data-date="2024-06-28"
                                                                                        class="fc-day fc-day-fri fc-day-future fc-daygrid-day">
                                                                                        <div
                                                                                            class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                            <div
                                                                                                class="fc-daygrid-day-top">
                                                                                                <a title="Go to June 28, 2024"
                                                                                                    data-navlink=""
                                                                                                    tabindex="0"
                                                                                                    id="fc-dom-68"
                                                                                                    class="fc-daygrid-day-number">28</a>
                                                                                            </div>
                                                                                            <div
                                                                                                class="fc-daygrid-day-events">
                                                                                                <div class="fc-daygrid-day-bottom"
                                                                                                    style="
                                                            margin-top: 0px;
                                                          ">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="fc-daygrid-day-bg">
                                                                                            </div>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td aria-labelledby="fc-dom-70"
                                                                                        role="gridcell"
                                                                                        data-date="2024-06-29"
                                                                                        class="fc-day fc-day-sat fc-day-future fc-daygrid-day">
                                                                                        <div
                                                                                            class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                            <div
                                                                                                class="fc-daygrid-day-top">
                                                                                                <a title="Go to June 29, 2024"
                                                                                                    data-navlink=""
                                                                                                    tabindex="0"
                                                                                                    id="fc-dom-70"
                                                                                                    class="fc-daygrid-day-number">29</a>
                                                                                            </div>
                                                                                            <div
                                                                                                class="fc-daygrid-day-events">
                                                                                                <div class="fc-daygrid-day-bottom"
                                                                                                    style="
                                                            margin-top: 0px;
                                                          ">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="fc-daygrid-day-bg">
                                                                                            </div>
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr role="row">
                                                                                    <td aria-labelledby="fc-dom-72"
                                                                                        role="gridcell"
                                                                                        data-date="2024-06-30"
                                                                                        class="fc-day fc-day-sun fc-day-future fc-daygrid-day">
                                                                                        <div
                                                                                            class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                            <div
                                                                                                class="fc-daygrid-day-top">
                                                                                                <a title="Go to June 30, 2024"
                                                                                                    data-navlink=""
                                                                                                    tabindex="0"
                                                                                                    id="fc-dom-72"
                                                                                                    class="fc-daygrid-day-number">30</a>
                                                                                            </div>
                                                                                            <div
                                                                                                class="fc-daygrid-day-events">
                                                                                                <div class="fc-daygrid-day-bottom"
                                                                                                    style="
                                                            margin-top: 0px;
                                                          ">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="fc-daygrid-day-bg">
                                                                                            </div>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td aria-labelledby="fc-dom-74"
                                                                                        role="gridcell"
                                                                                        data-date="2024-07-01"
                                                                                        class="fc-day fc-day-mon fc-day-future fc-day-other fc-daygrid-day">
                                                                                        <div
                                                                                            class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                            <div
                                                                                                class="fc-daygrid-day-top">
                                                                                                <a title="Go to July 1, 2024"
                                                                                                    data-navlink=""
                                                                                                    tabindex="0"
                                                                                                    id="fc-dom-74"
                                                                                                    class="fc-daygrid-day-number">1</a>
                                                                                            </div>
                                                                                            <div
                                                                                                class="fc-daygrid-day-events">
                                                                                                <div class="fc-daygrid-event-harness"
                                                                                                    style="
                                                            margin-top: 0px;
                                                          ">
                                                                                                    <a tabindex="0"
                                                                                                        class="fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-future fc-daygrid-event fc-daygrid-block-event fc-h-event fc-event-primary">
                                                                                                        <div
                                                                                                            class="fc-event-main">
                                                                                                            <div
                                                                                                                class="fc-event-main-frame">
                                                                                                                <div
                                                                                                                    class="fc-event-title-container">
                                                                                                                    <div
                                                                                                                        class="fc-event-title fc-sticky">
                                                                                                                        Monthly
                                                                                                                        Meeting
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="fc-event-resizer fc-event-resizer-start">
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="fc-event-resizer fc-event-resizer-end">
                                                                                                        </div>
                                                                                                    </a>
                                                                                                </div>
                                                                                                <div class="fc-daygrid-day-bottom"
                                                                                                    style="
                                                            margin-top: 0px;
                                                          ">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div
                                                                                                class="fc-daygrid-day-bg">
                                                                                            </div>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td aria-labelledby="fc-dom-76"
                                                                                        role="gridcell"
                                                                                        data-date="2024-07-02"
                                                                                        class="fc-day fc-day-tue fc-day-future fc-day-other fc-daygrid-day">
                                                                                        <div
                                                                                            class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                            <div
                                                                                                class="fc-daygrid-day-top">
                                                                                                <a title="Go to July 2, 2024"
                                                                                                    data-navlink=""
                                                                                                    tabindex="0"
                                                                                                    id="fc-dom-76"
                                                                                                    class="fc-daygrid-day-number">2</a>
                                                                                            </div>
                                                                                            <div
                                                                                                class="fc-daygrid-day-events">
                                                                                                <div class="fc-daygrid-day-bottom"
                                                                                                    style="
                                                            margin-top: 0px;
                                                          ">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div
                                                                                                class="fc-daygrid-day-bg">
                                                                                            </div>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td aria-labelledby="fc-dom-78"
                                                                                        role="gridcell"
                                                                                        data-date="2024-07-03"
                                                                                        class="fc-day fc-day-wed fc-day-future fc-day-other fc-daygrid-day">
                                                                                        <div
                                                                                            class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                            <div
                                                                                                class="fc-daygrid-day-top">
                                                                                                <a title="Go to July 3, 2024"
                                                                                                    data-navlink=""
                                                                                                    tabindex="0"
                                                                                                    id="fc-dom-78"
                                                                                                    class="fc-daygrid-day-number">3</a>
                                                                                            </div>
                                                                                            <div
                                                                                                class="fc-daygrid-day-events">
                                                                                                <div class="fc-daygrid-day-bottom"
                                                                                                    style="
                                                            margin-top: 0px;
                                                          ">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div
                                                                                                class="fc-daygrid-day-bg">
                                                                                            </div>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td aria-labelledby="fc-dom-80"
                                                                                        role="gridcell"
                                                                                        data-date="2024-07-04"
                                                                                        class="fc-day fc-day-thu fc-day-future fc-day-other fc-daygrid-day">
                                                                                        <div
                                                                                            class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                            <div
                                                                                                class="fc-daygrid-day-top">
                                                                                                <a title="Go to July 4, 2024"
                                                                                                    data-navlink=""
                                                                                                    tabindex="0"
                                                                                                    id="fc-dom-80"
                                                                                                    class="fc-daygrid-day-number">4</a>
                                                                                            </div>
                                                                                            <div
                                                                                                class="fc-daygrid-day-events">
                                                                                                <div class="fc-daygrid-day-bottom"
                                                                                                    style="
                                                            margin-top: 0px;
                                                          ">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div
                                                                                                class="fc-daygrid-day-bg">
                                                                                            </div>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td aria-labelledby="fc-dom-82"
                                                                                        role="gridcell"
                                                                                        data-date="2024-07-05"
                                                                                        class="fc-day fc-day-fri fc-day-future fc-day-other fc-daygrid-day">
                                                                                        <div
                                                                                            class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                            <div
                                                                                                class="fc-daygrid-day-top">
                                                                                                <a title="Go to July 5, 2024"
                                                                                                    data-navlink=""
                                                                                                    tabindex="0"
                                                                                                    id="fc-dom-82"
                                                                                                    class="fc-daygrid-day-number">5</a>
                                                                                            </div>
                                                                                            <div
                                                                                                class="fc-daygrid-day-events">
                                                                                                <div class="fc-daygrid-day-bottom"
                                                                                                    style="
                                                            margin-top: 0px;
                                                          ">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div
                                                                                                class="fc-daygrid-day-bg">
                                                                                            </div>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td aria-labelledby="fc-dom-84"
                                                                                        role="gridcell"
                                                                                        data-date="2024-07-06"
                                                                                        class="fc-day fc-day-sat fc-day-future fc-day-other fc-daygrid-day">
                                                                                        <div
                                                                                            class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                            <div
                                                                                                class="fc-daygrid-day-top">
                                                                                                <a title="Go to July 6, 2024"
                                                                                                    data-navlink=""
                                                                                                    tabindex="0"
                                                                                                    id="fc-dom-84"
                                                                                                    class="fc-daygrid-day-number">6</a>
                                                                                            </div>
                                                                                            <div
                                                                                                class="fc-daygrid-day-events">
                                                                                                <div class="fc-daygrid-day-bottom"
                                                                                                    style="
                                                            margin-top: 0px;
                                                          ">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div
                                                                                                class="fc-daygrid-day-bg">
                                                                                            </div>
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
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
                        <div class="app-overlay"></div>
                        <!-- FullCalendar Offcanvas -->
                        <div class="offcanvas offcanvas-end event-sidebar" tabindex="-1" id="addEventSidebar"
                            aria-labelledby="addEventSidebarLabel">
                            <div class="offcanvas-header border-bottom">
                                <h5 class="offcanvas-title mb-2" id="addEventSidebarLabel">
                                    Add Event
                                </h5>
                                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                                    aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body">
                                <form class="event-form pt-0 fv-plugins-bootstrap5 fv-plugins-framework" id="eventForm"
                                    onsubmit="return false" novalidate="novalidate">
                                    <div class="mb-3 fv-plugins-icon-container">
                                        <label class="form-label" for="eventTitle">Title</label>
                                        <input type="text" class="form-control" id="eventTitle" name="eventTitle"
                                            placeholder="Event Title" />
                                        <div
                                            class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="eventLabel">Label</label>
                                        <div class="position-relative">
                                            <select
                                                class="select2 select-event-label form-select select2-hidden-accessible"
                                                id="eventLabel" name="eventLabel" data-select2-id="eventLabel"
                                                tabindex="-1" aria-hidden="true">
                                                <option data-label="primary" value="Business" selected=""
                                                    data-select2-id="2">
                                                    Business
                                                </option>
                                                <option data-label="danger" value="Personal">
                                                    Personal
                                                </option>
                                                <option data-label="warning" value="Family">
                                                    Family
                                                </option>
                                                <option data-label="success" value="Holiday">
                                                    Holiday
                                                </option>
                                                <option data-label="info" value="ETC">
                                                    ETC
                                                </option>
                                            </select><span class="select2 select2-container select2-container--default"
                                                dir="ltr" data-select2-id="1" style="width: 337px"><span
                                                    class="selection"><span
                                                        class="select2-selection select2-selection--single"
                                                        role="combobox" aria-haspopup="true" aria-expanded="false"
                                                        tabindex="0" aria-disabled="false"
                                                        aria-labelledby="select2-eventLabel-container"><span
                                                            class="select2-selection__rendered"
                                                            id="select2-eventLabel-container" role="textbox"
                                                            aria-readonly="true" title="Business"><span
                                                                class="badge badge-dot bg-primary me-2">
                                                            </span>Business</span><span class="select2-selection__arrow"
                                                            role="presentation"><b
                                                                role="presentation"></b></span></span></span><span
                                                    class="dropdown-wrapper" aria-hidden="true"></span></span>
                                        </div>
                                    </div>
                                    <div class="mb-3 fv-plugins-icon-container">
                                        <label class="form-label" for="eventStartDate">Start Date</label>
                                        <input type="text" class="form-control flatpickr-input" id="eventStartDate"
                                            name="eventStartDate" placeholder="Start Date" readonly="readonly" />
                                        <div
                                            class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                        </div>
                                    </div>
                                    <div class="mb-3 fv-plugins-icon-container">
                                        <label class="form-label" for="eventEndDate">End Date</label>
                                        <input type="text" class="form-control flatpickr-input" id="eventEndDate"
                                            name="eventEndDate" placeholder="End Date" readonly="readonly" />
                                        <div
                                            class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="switch">
                                            <input type="checkbox" class="switch-input allDay-switch" />
                                            <span class="switch-toggle-slider">
                                                <span class="switch-on"></span>
                                                <span class="switch-off"></span>
                                            </span>
                                            <span class="switch-label">All Day</span>
                                        </label>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="eventURL">Event URL</label>
                                        <input type="url" class="form-control" id="eventURL" name="eventURL"
                                            placeholder="https://www.google.com" />
                                    </div>
                                    <div class="mb-3 select2-primary">
                                        <label class="form-label" for="eventGuests">Add Guests</label>
                                        <div class="position-relative">
                                            <select
                                                class="select2 select-event-guests form-select select2-hidden-accessible"
                                                id="eventGuests" name="eventGuests" multiple=""
                                                data-select2-id="eventGuests" tabindex="-1" aria-hidden="true">
                                                <option data-avatar="1.png" value="Jane Foster">
                                                    Jane Foster
                                                </option>
                                                <option data-avatar="3.png" value="Donna Frank">
                                                    Donna Frank
                                                </option>
                                                <option data-avatar="5.png" value="Gabrielle Robertson">
                                                    Gabrielle Robertson
                                                </option>
                                                <option data-avatar="7.png" value="Lori Spears">
                                                    Lori Spears
                                                </option>
                                                <option data-avatar="9.png" value="Sandy Vega">
                                                    Sandy Vega
                                                </option>
                                                <option data-avatar="11.png" value="Cheryl May">
                                                    Cheryl May
                                                </option>
                                            </select><span class="select2 select2-container select2-container--default"
                                                dir="ltr" data-select2-id="3" style="width: 337px"><span
                                                    class="selection"><span
                                                        class="select2-selection select2-selection--multiple"
                                                        role="combobox" aria-haspopup="true" aria-expanded="false"
                                                        tabindex="-1" aria-disabled="false">
                                                        <ul class="select2-selection__rendered">
                                                            <li class="select2-search select2-search--inline">
                                                                <input class="select2-search__field" type="search"
                                                                    tabindex="0" autocomplete="off"
                                                                    autocorrect="off" autocapitalize="none"
                                                                    spellcheck="false" role="searchbox"
                                                                    aria-autocomplete="list" placeholder="Select value"
                                                                    style="width: 323px" />
                                                            </li>
                                                        </ul>
                                                    </span></span><span class="dropdown-wrapper"
                                                    aria-hidden="true"></span></span>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="eventLocation">Location</label>
                                        <input type="text" class="form-control" id="eventLocation"
                                            name="eventLocation" placeholder="Enter Location" />
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="eventDescription">Description</label>
                                        <textarea class="form-control" name="eventDescription" id="eventDescription"></textarea>
                                    </div>
                                    <div class="mb-3 d-flex justify-content-sm-between justify-content-start my-4">
                                        <div>
                                            <button type="submit" class="btn btn-primary btn-add-event me-sm-3 me-1">
                                                Add
                                            </button>
                                            <button type="reset"
                                                class="btn btn-label-secondary btn-cancel me-sm-0 me-1"
                                                data-bs-dismiss="offcanvas">
                                                Cancel
                                            </button>
                                        </div>
                                        <div>
                                            <button class="btn btn-label-danger btn-delete-event d-none">
                                                Delete
                                            </button>
                                        </div>
                                    </div>
                                    <input type="hidden" />
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- /Calendar & Modal -->
                </div>
            </div>
        </div>
        <!-- / Content -->

        <div class="content-backdrop fade"></div>
    </div>
@endsection
