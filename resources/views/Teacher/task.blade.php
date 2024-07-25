@extends('Template.template')
@section('title', 'Teacher')
@section('subtitle', 'Task')
@section('content')
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row">
                @foreach ($subject as $item)
                    <div class="col-md-6 mb-4">
                        <div class="card h-100">
                            <div class="card-header d-flex align-items-center justify-content-between">
                                <a href="{{ route('subject_task', ['slug' => $item->slug]) }}">
                                    <h5 class="card-title m-0 me-2 hover-underline">{{ $item->name }}</h5>
                                </a>
                                <div class="dropdown">
                                    <button class="btn p-0" type="button" id="employeeList" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="employeeList"
                                        style="">
                                        <a class="dropdown-item" href="javascript:void(0);">Featured Employees</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Based on Task</a>
                                        <a class="dropdown-item" href="javascript:void(0);">See All</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <ul class="p-0 m-0">
                                    @foreach ($item->users as $user)
                                        <li class="d-flex mb-4 pb-1">
                                            <div class="avatar flex-shrink-0 me-3">
                                                <img src="../../assets/img/avatars/20.png" alt="User" class="rounded">
                                            </div>
                                            <div class="d-flex w-100 align-items-start gap-2" style="position: relative;">
                                                <div class="d-flex justify-content-between flex-grow-1 flex-wrap">
                                                    <div>
                                                        <h6 class="mb-0">{{ $user->username }}</h6>
                                                        <small class="text-muted">UI Designer</small>
                                                    </div>

                                                    <div class="user-progress d-flex align-items-center gap-2">
                                                        <h6 class="mb-0">100h:</h6> <span class="text-muted">138h</span>
                                                    </div>
                                                </div>

                                                <div class="chart-progress" data-color="secondary" data-series="85"
                                                    style="min-height: 37.7px;">
                                                    <div id="apexcharts74kwluakj"
                                                        class="apexcharts-canvas apexcharts74kwluakj apexcharts-theme-light"
                                                        style="width: 45px; height: 37.7px;"><svg id="SvgjsSvg2024"
                                                            width="45" height="37.7" xmlns="http://www.w3.org/2000/svg"
                                                            version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                                                            xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg"
                                                            xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                                            style="background: transparent;">
                                                            <g id="SvgjsG2026" class="apexcharts-inner apexcharts-graphical"
                                                                transform="translate(-5, -15)">
                                                                <defs id="SvgjsDefs2025">
                                                                    <clipPath id="gridRectMask74kwluakj">
                                                                        <rect id="SvgjsRect2028" width="71"
                                                                            height="77" x="-3" y="-1" rx="0"
                                                                            ry="0" opacity="1" stroke-width="0"
                                                                            stroke="none" stroke-dasharray="0"
                                                                            fill="#fff"></rect>
                                                                    </clipPath>
                                                                    <clipPath id="forecastMask74kwluakj"></clipPath>
                                                                    <clipPath id="nonForecastMask74kwluakj"></clipPath>
                                                                    <clipPath id="gridRectMarkerMask74kwluakj">
                                                                        <rect id="SvgjsRect2029" width="69"
                                                                            height="79" x="-2" y="-2" rx="0"
                                                                            ry="0" opacity="1" stroke-width="0"
                                                                            stroke="none" stroke-dasharray="0"
                                                                            fill="#fff"></rect>
                                                                    </clipPath>
                                                                </defs>
                                                                <g id="SvgjsG2030" class="apexcharts-radialbar">
                                                                    <g id="SvgjsG2031">
                                                                        <g id="SvgjsG2032" class="apexcharts-tracks">
                                                                            <g id="SvgjsG2033"
                                                                                class="apexcharts-radialbar-track apexcharts-track"
                                                                                rel="1">
                                                                                <path id="apexcharts-radialbarTrack-0"
                                                                                    d="M 32.5 18.753048780487802 A 13.746951219512198 13.746951219512198 0 1 1 32.49760070440326 18.75304898986584"
                                                                                    fill="none" fill-opacity="1"
                                                                                    stroke="#8897aa1a" stroke-opacity="1"
                                                                                    stroke-linecap="butt"
                                                                                    stroke-width="4.501036585365854"
                                                                                    stroke-dasharray="0"
                                                                                    class="apexcharts-radialbar-area"
                                                                                    data:pathOrig="M 32.5 18.753048780487802 A 13.746951219512198 13.746951219512198 0 1 1 32.49760070440326 18.75304898986584">
                                                                                </path>
                                                                            </g>
                                                                        </g>
                                                                        <g id="SvgjsG2035">
                                                                            <g id="SvgjsG2037"
                                                                                class="apexcharts-series apexcharts-radial-series"
                                                                                seriesName="Progress" rel="1"
                                                                                data:realIndex="0">
                                                                                <path id="SvgjsPath2038"
                                                                                    d="M 32.5 18.753048780487802 A 13.746951219512198 13.746951219512198 0 1 1 21.378482842571223 24.419744809186703"
                                                                                    fill="none" fill-opacity="0.85"
                                                                                    stroke="rgba(133,146,163,0.85)"
                                                                                    stroke-opacity="1"
                                                                                    stroke-linecap="butt"
                                                                                    stroke-width="4.640243902439025"
                                                                                    stroke-dasharray="0"
                                                                                    class="apexcharts-radialbar-area apexcharts-radialbar-slice-0"
                                                                                    data:angle="306" data:value="85"
                                                                                    index="0" j="0"
                                                                                    data:pathOrig="M 32.5 18.753048780487802 A 13.746951219512198 13.746951219512198 0 1 1 21.378482842571223 24.419744809186703">
                                                                                </path>
                                                                            </g>
                                                                            <circle id="SvgjsCircle2036"
                                                                                r="6.4964329268292715" cx="32.5"
                                                                                cy="32.5"
                                                                                class="apexcharts-radialbar-hollow"
                                                                                fill="transparent">
                                                                            </circle>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                                <line id="SvgjsLine2039" x1="0" y1="0"
                                                                    x2="65" y2="0" stroke="#b6b6b6"
                                                                    stroke-dasharray="0" stroke-width="1"
                                                                    stroke-linecap="butt" class="apexcharts-ycrosshairs">
                                                                </line>
                                                                <line id="SvgjsLine2040" x1="0" y1="0"
                                                                    x2="65" y2="0" stroke-dasharray="0"
                                                                    stroke-width="0" stroke-linecap="butt"
                                                                    class="apexcharts-ycrosshairs-hidden"></line>
                                                            </g>
                                                            <g id="SvgjsG2027" class="apexcharts-annotations"></g>
                                                        </svg>
                                                        <div class="apexcharts-legend"></div>
                                                    </div>
                                                </div>
                                                <div class="resize-triggers">
                                                    <div class="expand-trigger">
                                                        <div style="width: 529px; height: 40px;"></div>
                                                    </div>
                                                    <div class="contract-trigger"></div>
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach

                                    {{-- <li class="d-flex">
                                        <div class="avatar flex-shrink-0 me-3">
                                            <img src="../../assets/img/avatars/18.png" alt="User" class="rounded">
                                        </div>
                                        <div class="d-flex w-100 align-items-start gap-2" style="position: relative;">
                                            <div class="d-flex justify-content-between flex-grow-1 flex-wrap">
                                                <div>
                                                    <h6 class="mb-0">Nancy</h6>
                                                    <small class="text-muted">PHP Developer</small>
                                                </div>

                                                <div class="user-progress d-flex align-items-center gap-2">
                                                    <h6 class="mb-0">22h:</h6> <span class="text-muted">45h</span>
                                                </div>
                                            </div>

                                            <div class="chart-progress" data-color="warning" data-series="45"
                                                style="min-height: 37.7px;">
                                                <div id="apexcharts0tl2jwu2"
                                                    class="apexcharts-canvas apexcharts0tl2jwu2 apexcharts-theme-light"
                                                    style="width: 45px; height: 37.7px;"><svg id="SvgjsSvg2109"
                                                        width="45" height="37.7" xmlns="http://www.w3.org/2000/svg"
                                                        version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                                                        xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg"
                                                        xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                                        style="background: transparent;">
                                                        <g id="SvgjsG2111" class="apexcharts-inner apexcharts-graphical"
                                                            transform="translate(-5, -15)">
                                                            <defs id="SvgjsDefs2110">
                                                                <clipPath id="gridRectMask0tl2jwu2">
                                                                    <rect id="SvgjsRect2113" width="71"
                                                                        height="77" x="-3" y="-1" rx="0"
                                                                        ry="0" opacity="1" stroke-width="0"
                                                                        stroke="none" stroke-dasharray="0"
                                                                        fill="#fff"></rect>
                                                                </clipPath>
                                                                <clipPath id="forecastMask0tl2jwu2"></clipPath>
                                                                <clipPath id="nonForecastMask0tl2jwu2"></clipPath>
                                                                <clipPath id="gridRectMarkerMask0tl2jwu2">
                                                                    <rect id="SvgjsRect2114" width="69"
                                                                        height="79" x="-2" y="-2" rx="0"
                                                                        ry="0" opacity="1" stroke-width="0"
                                                                        stroke="none" stroke-dasharray="0"
                                                                        fill="#fff"></rect>
                                                                </clipPath>
                                                            </defs>
                                                            <g id="SvgjsG2115" class="apexcharts-radialbar">
                                                                <g id="SvgjsG2116">
                                                                    <g id="SvgjsG2117" class="apexcharts-tracks">
                                                                        <g id="SvgjsG2118"
                                                                            class="apexcharts-radialbar-track apexcharts-track"
                                                                            rel="1">
                                                                            <path id="apexcharts-radialbarTrack-0"
                                                                                d="M 32.5 18.753048780487802 A 13.746951219512198 13.746951219512198 0 1 1 32.49760070440326 18.75304898986584"
                                                                                fill="none" fill-opacity="1"
                                                                                stroke="#8897aa1a" stroke-opacity="1"
                                                                                stroke-linecap="butt"
                                                                                stroke-width="4.501036585365854"
                                                                                stroke-dasharray="0"
                                                                                class="apexcharts-radialbar-area"
                                                                                data:pathOrig="M 32.5 18.753048780487802 A 13.746951219512198 13.746951219512198 0 1 1 32.49760070440326 18.75304898986584">
                                                                            </path>
                                                                        </g>
                                                                    </g>
                                                                    <g id="SvgjsG2120">
                                                                        <g id="SvgjsG2122"
                                                                            class="apexcharts-series apexcharts-radial-series"
                                                                            seriesName="Progress" rel="1"
                                                                            data:realIndex="0">
                                                                            <path id="SvgjsPath2123"
                                                                                d="M 32.5 18.753048780487802 A 13.746951219512198 13.746951219512198 0 0 1 36.74804154767268 45.57412753650868"
                                                                                fill="none" fill-opacity="0.85"
                                                                                stroke="rgba(255,171,0,0.85)"
                                                                                stroke-opacity="1" stroke-linecap="butt"
                                                                                stroke-width="4.640243902439025"
                                                                                stroke-dasharray="0"
                                                                                class="apexcharts-radialbar-area apexcharts-radialbar-slice-0"
                                                                                data:angle="162" data:value="45"
                                                                                index="0" j="0"
                                                                                data:pathOrig="M 32.5 18.753048780487802 A 13.746951219512198 13.746951219512198 0 0 1 36.74804154767268 45.57412753650868">
                                                                            </path>
                                                                        </g>
                                                                        <circle id="SvgjsCircle2121" r="6.4964329268292715"
                                                                            cx="32.5" cy="32.5"
                                                                            class="apexcharts-radialbar-hollow"
                                                                            fill="transparent">
                                                                        </circle>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                            <line id="SvgjsLine2124" x1="0" y1="0"
                                                                x2="65" y2="0" stroke="#b6b6b6"
                                                                stroke-dasharray="0" stroke-width="1"
                                                                stroke-linecap="butt" class="apexcharts-ycrosshairs">
                                                            </line>
                                                            <line id="SvgjsLine2125" x1="0" y1="0"
                                                                x2="65" y2="0" stroke-dasharray="0"
                                                                stroke-width="0" stroke-linecap="butt"
                                                                class="apexcharts-ycrosshairs-hidden"></line>
                                                        </g>
                                                        <g id="SvgjsG2112" class="apexcharts-annotations"></g>
                                                    </svg>
                                                    <div class="apexcharts-legend"></div>
                                                </div>
                                            </div>
                                            <div class="resize-triggers">
                                                <div class="expand-trigger">
                                                    <div style="width: 529px; height: 40px;"></div>
                                                </div>
                                                <div class="contract-trigger"></div>
                                            </div>
                                        </div>
                                    </li> --}}
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>


        <div class="content-backdrop fade"></div>
    </div>
    <!-- Content wrapper -->

    <!-- Content wrapper -->
@endsection
