@extends('Template.template')
@section('content')
    <div class="col-md-6 col-xl-4 mb-4">
        <div class="card h-100">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="card-title m-0 me-2">Employee List</h5>
                <div class="dropdown">
                    <button class="btn p-0" type="button" id="employeeList" data-bs-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <i class="bx bx-dots-vertical-rounded"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="employeeList" style="">
                        <a class="dropdown-item" href="javascript:void(0);">Featured Employees</a>
                        <a class="dropdown-item" href="javascript:void(0);">Based on Task</a>
                        <a class="dropdown-item" href="javascript:void(0);">See All</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <ul class="p-0 m-0">
                    <li class="d-flex mb-4 pb-1">
                        <div class="avatar flex-shrink-0 me-3">
                            <img src="../../assets/img/avatars/20.png" alt="User" class="rounded">
                        </div>
                        <div class="d-flex w-100 align-items-start gap-2" style="position: relative;">
                            <div class="d-flex justify-content-between flex-grow-1 flex-wrap">
                                <div>
                                    <h6 class="mb-0">Alberta</h6>
                                    <small class="text-muted">UI Designer</small>
                                </div>

                                <div class="user-progress d-flex align-items-center gap-2">
                                    <h6 class="mb-0">100h:</h6> <span class="text-muted">138h</span>
                                </div>
                            </div>

                            <div class="chart-progress" data-color="secondary" data-series="85" style="min-height: 37.7px;">
                                <div id="apexcharts74kwluakj"
                                    class="apexcharts-canvas apexcharts74kwluakj apexcharts-theme-light"
                                    style="width: 45px; height: 37.7px;"><svg id="SvgjsSvg2024" width="45"
                                        height="37.7" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                        class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                        style="background: transparent;">
                                        <g id="SvgjsG2026" class="apexcharts-inner apexcharts-graphical"
                                            transform="translate(-5, -15)">
                                            <defs id="SvgjsDefs2025">
                                                <clipPath id="gridRectMask74kwluakj">
                                                    <rect id="SvgjsRect2028" width="71" height="77" x="-3" y="-1"
                                                        rx="0" ry="0" opacity="1" stroke-width="0"
                                                        stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                                <clipPath id="forecastMask74kwluakj"></clipPath>
                                                <clipPath id="nonForecastMask74kwluakj"></clipPath>
                                                <clipPath id="gridRectMarkerMask74kwluakj">
                                                    <rect id="SvgjsRect2029" width="69" height="79" x="-2" y="-2"
                                                        rx="0" ry="0" opacity="1" stroke-width="0"
                                                        stroke="none" stroke-dasharray="0" fill="#fff"></rect>
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
                                                                fill="none" fill-opacity="1" stroke="#8897aa1a"
                                                                stroke-opacity="1" stroke-linecap="butt"
                                                                stroke-width="4.501036585365854" stroke-dasharray="0"
                                                                class="apexcharts-radialbar-area"
                                                                data:pathOrig="M 32.5 18.753048780487802 A 13.746951219512198 13.746951219512198 0 1 1 32.49760070440326 18.75304898986584">
                                                            </path>
                                                        </g>
                                                    </g>
                                                    <g id="SvgjsG2035">
                                                        <g id="SvgjsG2037"
                                                            class="apexcharts-series apexcharts-radial-series"
                                                            seriesName="Progress" rel="1" data:realIndex="0">
                                                            <path id="SvgjsPath2038"
                                                                d="M 32.5 18.753048780487802 A 13.746951219512198 13.746951219512198 0 1 1 21.378482842571223 24.419744809186703"
                                                                fill="none" fill-opacity="0.85"
                                                                stroke="rgba(133,146,163,0.85)" stroke-opacity="1"
                                                                stroke-linecap="butt" stroke-width="4.640243902439025"
                                                                stroke-dasharray="0"
                                                                class="apexcharts-radialbar-area apexcharts-radialbar-slice-0"
                                                                data:angle="306" data:value="85" index="0" j="0"
                                                                data:pathOrig="M 32.5 18.753048780487802 A 13.746951219512198 13.746951219512198 0 1 1 21.378482842571223 24.419744809186703">
                                                            </path>
                                                        </g>
                                                        <circle id="SvgjsCircle2036" r="6.4964329268292715" cx="32.5"
                                                            cy="32.5" class="apexcharts-radialbar-hollow"
                                                            fill="transparent"></circle>
                                                    </g>
                                                </g>
                                            </g>
                                            <line id="SvgjsLine2039" x1="0" y1="0" x2="65"
                                                y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                                stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                            <line id="SvgjsLine2040" x1="0" y1="0" x2="65"
                                                y2="0" stroke-dasharray="0" stroke-width="0"
                                                stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
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
                    <li class="d-flex mb-4 pb-1">
                        <div class="avatar flex-shrink-0 me-3">
                            <img src="../../assets/img/avatars/3.png" alt="User" class="rounded">
                        </div>
                        <div class="d-flex w-100 align-items-start gap-2" style="position: relative;">
                            <div class="d-flex justify-content-between flex-grow-1 flex-wrap">
                                <div>
                                    <h6 class="mb-0">Paul</h6>
                                    <small class="text-muted">Branding</small>
                                </div>

                                <div class="user-progress d-flex align-items-center gap-2">
                                    <h6 class="mb-0">121h:</h6> <span class="text-muted">109h</span>
                                </div>
                            </div>

                            <div class="chart-progress" data-color="warning" data-series="70"
                                style="min-height: 37.7px;">
                                <div id="apexcharts8yh6cpb2"
                                    class="apexcharts-canvas apexcharts8yh6cpb2 apexcharts-theme-light"
                                    style="width: 45px; height: 37.7px;"><svg id="SvgjsSvg2041" width="45"
                                        height="37.7" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                        class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                        style="background: transparent;">
                                        <g id="SvgjsG2043" class="apexcharts-inner apexcharts-graphical"
                                            transform="translate(-5, -15)">
                                            <defs id="SvgjsDefs2042">
                                                <clipPath id="gridRectMask8yh6cpb2">
                                                    <rect id="SvgjsRect2045" width="71" height="77" x="-3" y="-1"
                                                        rx="0" ry="0" opacity="1" stroke-width="0"
                                                        stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                                <clipPath id="forecastMask8yh6cpb2"></clipPath>
                                                <clipPath id="nonForecastMask8yh6cpb2"></clipPath>
                                                <clipPath id="gridRectMarkerMask8yh6cpb2">
                                                    <rect id="SvgjsRect2046" width="69" height="79" x="-2" y="-2"
                                                        rx="0" ry="0" opacity="1" stroke-width="0"
                                                        stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                            </defs>
                                            <g id="SvgjsG2047" class="apexcharts-radialbar">
                                                <g id="SvgjsG2048">
                                                    <g id="SvgjsG2049" class="apexcharts-tracks">
                                                        <g id="SvgjsG2050"
                                                            class="apexcharts-radialbar-track apexcharts-track"
                                                            rel="1">
                                                            <path id="apexcharts-radialbarTrack-0"
                                                                d="M 32.5 18.753048780487802 A 13.746951219512198 13.746951219512198 0 1 1 32.49760070440326 18.75304898986584"
                                                                fill="none" fill-opacity="1" stroke="#8897aa1a"
                                                                stroke-opacity="1" stroke-linecap="butt"
                                                                stroke-width="4.501036585365854" stroke-dasharray="0"
                                                                class="apexcharts-radialbar-area"
                                                                data:pathOrig="M 32.5 18.753048780487802 A 13.746951219512198 13.746951219512198 0 1 1 32.49760070440326 18.75304898986584">
                                                            </path>
                                                        </g>
                                                    </g>
                                                    <g id="SvgjsG2052">
                                                        <g id="SvgjsG2054"
                                                            class="apexcharts-series apexcharts-radial-series"
                                                            seriesName="Progress" rel="1" data:realIndex="0">
                                                            <path id="SvgjsPath2055"
                                                                d="M 32.5 18.753048780487802 A 13.746951219512198 13.746951219512198 0 1 1 19.425872463491316 36.74804154767268"
                                                                fill="none" fill-opacity="0.85"
                                                                stroke="rgba(255,171,0,0.85)" stroke-opacity="1"
                                                                stroke-linecap="butt" stroke-width="4.640243902439025"
                                                                stroke-dasharray="0"
                                                                class="apexcharts-radialbar-area apexcharts-radialbar-slice-0"
                                                                data:angle="252" data:value="70" index="0" j="0"
                                                                data:pathOrig="M 32.5 18.753048780487802 A 13.746951219512198 13.746951219512198 0 1 1 19.425872463491316 36.74804154767268">
                                                            </path>
                                                        </g>
                                                        <circle id="SvgjsCircle2053" r="6.4964329268292715" cx="32.5"
                                                            cy="32.5" class="apexcharts-radialbar-hollow"
                                                            fill="transparent"></circle>
                                                    </g>
                                                </g>
                                            </g>
                                            <line id="SvgjsLine2056" x1="0" y1="0" x2="65"
                                                y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                                stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                            <line id="SvgjsLine2057" x1="0" y1="0" x2="65"
                                                y2="0" stroke-dasharray="0" stroke-width="0"
                                                stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                        </g>
                                        <g id="SvgjsG2044" class="apexcharts-annotations"></g>
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
                    <li class="d-flex mb-4 pb-1">
                        <div class="avatar flex-shrink-0 me-3">
                            <img src="../../assets/img/avatars/15.png" alt="User" class="rounded">
                        </div>
                        <div class="d-flex w-100 align-items-start gap-2" style="position: relative;">
                            <div class="d-flex justify-content-between flex-grow-1 flex-wrap">
                                <div>
                                    <h6 class="mb-0">Nannie</h6>
                                    <small class="text-muted">iOS Developer</small>
                                </div>

                                <div class="user-progress d-flex align-items-center gap-2">
                                    <h6 class="mb-0">112h:</h6> <span class="text-muted">160h</span>
                                </div>
                            </div>

                            <div class="chart-progress" data-color="primary" data-series="25"
                                style="min-height: 37.7px;">
                                <div id="apexchartsmi3bg3wf"
                                    class="apexcharts-canvas apexchartsmi3bg3wf apexcharts-theme-light"
                                    style="width: 45px; height: 37.7px;"><svg id="SvgjsSvg2058" width="45"
                                        height="37.7" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                        class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                        style="background: transparent;">
                                        <g id="SvgjsG2060" class="apexcharts-inner apexcharts-graphical"
                                            transform="translate(-5, -15)">
                                            <defs id="SvgjsDefs2059">
                                                <clipPath id="gridRectMaskmi3bg3wf">
                                                    <rect id="SvgjsRect2062" width="71" height="77" x="-3" y="-1"
                                                        rx="0" ry="0" opacity="1" stroke-width="0"
                                                        stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                                <clipPath id="forecastMaskmi3bg3wf"></clipPath>
                                                <clipPath id="nonForecastMaskmi3bg3wf"></clipPath>
                                                <clipPath id="gridRectMarkerMaskmi3bg3wf">
                                                    <rect id="SvgjsRect2063" width="69" height="79" x="-2" y="-2"
                                                        rx="0" ry="0" opacity="1" stroke-width="0"
                                                        stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                            </defs>
                                            <g id="SvgjsG2064" class="apexcharts-radialbar">
                                                <g id="SvgjsG2065">
                                                    <g id="SvgjsG2066" class="apexcharts-tracks">
                                                        <g id="SvgjsG2067"
                                                            class="apexcharts-radialbar-track apexcharts-track"
                                                            rel="1">
                                                            <path id="apexcharts-radialbarTrack-0"
                                                                d="M 32.5 18.753048780487802 A 13.746951219512198 13.746951219512198 0 1 1 32.49760070440326 18.75304898986584"
                                                                fill="none" fill-opacity="1" stroke="#8897aa1a"
                                                                stroke-opacity="1" stroke-linecap="butt"
                                                                stroke-width="4.501036585365854" stroke-dasharray="0"
                                                                class="apexcharts-radialbar-area"
                                                                data:pathOrig="M 32.5 18.753048780487802 A 13.746951219512198 13.746951219512198 0 1 1 32.49760070440326 18.75304898986584">
                                                            </path>
                                                        </g>
                                                    </g>
                                                    <g id="SvgjsG2069">
                                                        <g id="SvgjsG2071"
                                                            class="apexcharts-series apexcharts-radial-series"
                                                            seriesName="Progress" rel="1" data:realIndex="0">
                                                            <path id="SvgjsPath2072"
                                                                d="M 32.5 18.753048780487802 A 13.746951219512198 13.746951219512198 0 0 1 46.2469512195122 32.5"
                                                                fill="none" fill-opacity="0.85"
                                                                stroke="rgba(105,108,255,0.85)" stroke-opacity="1"
                                                                stroke-linecap="butt" stroke-width="4.640243902439025"
                                                                stroke-dasharray="0"
                                                                class="apexcharts-radialbar-area apexcharts-radialbar-slice-0"
                                                                data:angle="90" data:value="25" index="0" j="0"
                                                                data:pathOrig="M 32.5 18.753048780487802 A 13.746951219512198 13.746951219512198 0 0 1 46.2469512195122 32.5">
                                                            </path>
                                                        </g>
                                                        <circle id="SvgjsCircle2070" r="6.4964329268292715" cx="32.5"
                                                            cy="32.5" class="apexcharts-radialbar-hollow"
                                                            fill="transparent"></circle>
                                                    </g>
                                                </g>
                                            </g>
                                            <line id="SvgjsLine2073" x1="0" y1="0" x2="65"
                                                y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                                stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                            <line id="SvgjsLine2074" x1="0" y1="0" x2="65"
                                                y2="0" stroke-dasharray="0" stroke-width="0"
                                                stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                        </g>
                                        <g id="SvgjsG2061" class="apexcharts-annotations"></g>
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
                    <li class="d-flex mb-4 pb-1">
                        <div class="avatar flex-shrink-0 me-3">
                            <img src="../../assets/img/avatars/14.png" alt="User" class="rounded">
                        </div>
                        <div class="d-flex w-100 align-items-start gap-2" style="position: relative;">
                            <div class="d-flex justify-content-between flex-grow-1 flex-wrap">
                                <div>
                                    <h6 class="mb-0">Rodney</h6>
                                    <small class="text-muted">iOS Developer</small>
                                </div>

                                <div class="user-progress d-flex align-items-center gap-2">
                                    <h6 class="mb-0">125h:</h6> <span class="text-muted">166h</span>
                                </div>
                            </div>

                            <div class="chart-progress" data-color="danger" data-series="75"
                                style="min-height: 37.7px;">
                                <div id="apexchartsueharxcs"
                                    class="apexcharts-canvas apexchartsueharxcs apexcharts-theme-light"
                                    style="width: 45px; height: 37.7px;"><svg id="SvgjsSvg2075" width="45"
                                        height="37.7" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                        class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                        style="background: transparent;">
                                        <g id="SvgjsG2077" class="apexcharts-inner apexcharts-graphical"
                                            transform="translate(-5, -15)">
                                            <defs id="SvgjsDefs2076">
                                                <clipPath id="gridRectMaskueharxcs">
                                                    <rect id="SvgjsRect2079" width="71" height="77" x="-3" y="-1"
                                                        rx="0" ry="0" opacity="1" stroke-width="0"
                                                        stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                                <clipPath id="forecastMaskueharxcs"></clipPath>
                                                <clipPath id="nonForecastMaskueharxcs"></clipPath>
                                                <clipPath id="gridRectMarkerMaskueharxcs">
                                                    <rect id="SvgjsRect2080" width="69" height="79" x="-2" y="-2"
                                                        rx="0" ry="0" opacity="1" stroke-width="0"
                                                        stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                            </defs>
                                            <g id="SvgjsG2081" class="apexcharts-radialbar">
                                                <g id="SvgjsG2082">
                                                    <g id="SvgjsG2083" class="apexcharts-tracks">
                                                        <g id="SvgjsG2084"
                                                            class="apexcharts-radialbar-track apexcharts-track"
                                                            rel="1">
                                                            <path id="apexcharts-radialbarTrack-0"
                                                                d="M 32.5 18.753048780487802 A 13.746951219512198 13.746951219512198 0 1 1 32.49760070440326 18.75304898986584"
                                                                fill="none" fill-opacity="1" stroke="#8897aa1a"
                                                                stroke-opacity="1" stroke-linecap="butt"
                                                                stroke-width="4.501036585365854" stroke-dasharray="0"
                                                                class="apexcharts-radialbar-area"
                                                                data:pathOrig="M 32.5 18.753048780487802 A 13.746951219512198 13.746951219512198 0 1 1 32.49760070440326 18.75304898986584">
                                                            </path>
                                                        </g>
                                                    </g>
                                                    <g id="SvgjsG2086">
                                                        <g id="SvgjsG2088"
                                                            class="apexcharts-series apexcharts-radial-series"
                                                            seriesName="Progress" rel="1" data:realIndex="0">
                                                            <path id="SvgjsPath2089"
                                                                d="M 32.5 18.753048780487802 A 13.746951219512198 13.746951219512198 0 1 1 18.753048780487802 32.5"
                                                                fill="none" fill-opacity="0.85"
                                                                stroke="rgba(255,62,29,0.85)" stroke-opacity="1"
                                                                stroke-linecap="butt" stroke-width="4.640243902439025"
                                                                stroke-dasharray="0"
                                                                class="apexcharts-radialbar-area apexcharts-radialbar-slice-0"
                                                                data:angle="270" data:value="75" index="0" j="0"
                                                                data:pathOrig="M 32.5 18.753048780487802 A 13.746951219512198 13.746951219512198 0 1 1 18.753048780487802 32.5">
                                                            </path>
                                                        </g>
                                                        <circle id="SvgjsCircle2087" r="6.4964329268292715" cx="32.5"
                                                            cy="32.5" class="apexcharts-radialbar-hollow"
                                                            fill="transparent"></circle>
                                                    </g>
                                                </g>
                                            </g>
                                            <line id="SvgjsLine2090" x1="0" y1="0" x2="65"
                                                y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                                stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                            <line id="SvgjsLine2091" x1="0" y1="0" x2="65"
                                                y2="0" stroke-dasharray="0" stroke-width="0"
                                                stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                        </g>
                                        <g id="SvgjsG2078" class="apexcharts-annotations"></g>
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
                    <li class="d-flex mb-4 pb-1">
                        <div class="avatar flex-shrink-0 me-3">
                            <img src="../../assets/img/avatars/7.png" alt="User" class="rounded">
                        </div>
                        <div class="d-flex w-100 align-items-start gap-2" style="position: relative;">
                            <div class="d-flex justify-content-between flex-grow-1 flex-wrap">
                                <div>
                                    <h6 class="mb-0">Martin</h6>
                                    <small class="text-muted">Product Designer</small>
                                </div>

                                <div class="user-progress d-flex align-items-center gap-2">
                                    <h6 class="mb-0">76h:</h6> <span class="text-muted">89h</span>
                                </div>
                            </div>

                            <div class="chart-progress" data-color="info" data-series="60" style="min-height: 37.7px;">
                                <div id="apexchartsfk3y90dj"
                                    class="apexcharts-canvas apexchartsfk3y90dj apexcharts-theme-light"
                                    style="width: 45px; height: 37.7px;"><svg id="SvgjsSvg2092" width="45"
                                        height="37.7" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                        class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                        style="background: transparent;">
                                        <g id="SvgjsG2094" class="apexcharts-inner apexcharts-graphical"
                                            transform="translate(-5, -15)">
                                            <defs id="SvgjsDefs2093">
                                                <clipPath id="gridRectMaskfk3y90dj">
                                                    <rect id="SvgjsRect2096" width="71" height="77" x="-3" y="-1"
                                                        rx="0" ry="0" opacity="1" stroke-width="0"
                                                        stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                                <clipPath id="forecastMaskfk3y90dj"></clipPath>
                                                <clipPath id="nonForecastMaskfk3y90dj"></clipPath>
                                                <clipPath id="gridRectMarkerMaskfk3y90dj">
                                                    <rect id="SvgjsRect2097" width="69" height="79" x="-2" y="-2"
                                                        rx="0" ry="0" opacity="1" stroke-width="0"
                                                        stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                            </defs>
                                            <g id="SvgjsG2098" class="apexcharts-radialbar">
                                                <g id="SvgjsG2099">
                                                    <g id="SvgjsG2100" class="apexcharts-tracks">
                                                        <g id="SvgjsG2101"
                                                            class="apexcharts-radialbar-track apexcharts-track"
                                                            rel="1">
                                                            <path id="apexcharts-radialbarTrack-0"
                                                                d="M 32.5 18.753048780487802 A 13.746951219512198 13.746951219512198 0 1 1 32.49760070440326 18.75304898986584"
                                                                fill="none" fill-opacity="1" stroke="#8897aa1a"
                                                                stroke-opacity="1" stroke-linecap="butt"
                                                                stroke-width="4.501036585365854" stroke-dasharray="0"
                                                                class="apexcharts-radialbar-area"
                                                                data:pathOrig="M 32.5 18.753048780487802 A 13.746951219512198 13.746951219512198 0 1 1 32.49760070440326 18.75304898986584">
                                                            </path>
                                                        </g>
                                                    </g>
                                                    <g id="SvgjsG2103">
                                                        <g id="SvgjsG2105"
                                                            class="apexcharts-series apexcharts-radial-series"
                                                            seriesName="Progress" rel="1" data:realIndex="0">
                                                            <path id="SvgjsPath2106"
                                                                d="M 32.5 18.753048780487802 A 13.746951219512198 13.746951219512198 0 1 1 24.419744809186703 43.62151715742878"
                                                                fill="none" fill-opacity="0.85"
                                                                stroke="rgba(3,195,236,0.85)" stroke-opacity="1"
                                                                stroke-linecap="butt" stroke-width="4.640243902439025"
                                                                stroke-dasharray="0"
                                                                class="apexcharts-radialbar-area apexcharts-radialbar-slice-0"
                                                                data:angle="216" data:value="60" index="0" j="0"
                                                                data:pathOrig="M 32.5 18.753048780487802 A 13.746951219512198 13.746951219512198 0 1 1 24.419744809186703 43.62151715742878">
                                                            </path>
                                                        </g>
                                                        <circle id="SvgjsCircle2104" r="6.4964329268292715" cx="32.5"
                                                            cy="32.5" class="apexcharts-radialbar-hollow"
                                                            fill="transparent"></circle>
                                                    </g>
                                                </g>
                                            </g>
                                            <line id="SvgjsLine2107" x1="0" y1="0" x2="65"
                                                y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                                stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                            <line id="SvgjsLine2108" x1="0" y1="0" x2="65"
                                                y2="0" stroke-dasharray="0" stroke-width="0"
                                                stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                        </g>
                                        <g id="SvgjsG2095" class="apexcharts-annotations"></g>
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
                    <li class="d-flex">
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
                                    style="width: 45px; height: 37.7px;"><svg id="SvgjsSvg2109" width="45"
                                        height="37.7" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                        class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                        style="background: transparent;">
                                        <g id="SvgjsG2111" class="apexcharts-inner apexcharts-graphical"
                                            transform="translate(-5, -15)">
                                            <defs id="SvgjsDefs2110">
                                                <clipPath id="gridRectMask0tl2jwu2">
                                                    <rect id="SvgjsRect2113" width="71" height="77" x="-3" y="-1"
                                                        rx="0" ry="0" opacity="1" stroke-width="0"
                                                        stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                                <clipPath id="forecastMask0tl2jwu2"></clipPath>
                                                <clipPath id="nonForecastMask0tl2jwu2"></clipPath>
                                                <clipPath id="gridRectMarkerMask0tl2jwu2">
                                                    <rect id="SvgjsRect2114" width="69" height="79" x="-2" y="-2"
                                                        rx="0" ry="0" opacity="1" stroke-width="0"
                                                        stroke="none" stroke-dasharray="0" fill="#fff"></rect>
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
                                                                fill="none" fill-opacity="1" stroke="#8897aa1a"
                                                                stroke-opacity="1" stroke-linecap="butt"
                                                                stroke-width="4.501036585365854" stroke-dasharray="0"
                                                                class="apexcharts-radialbar-area"
                                                                data:pathOrig="M 32.5 18.753048780487802 A 13.746951219512198 13.746951219512198 0 1 1 32.49760070440326 18.75304898986584">
                                                            </path>
                                                        </g>
                                                    </g>
                                                    <g id="SvgjsG2120">
                                                        <g id="SvgjsG2122"
                                                            class="apexcharts-series apexcharts-radial-series"
                                                            seriesName="Progress" rel="1" data:realIndex="0">
                                                            <path id="SvgjsPath2123"
                                                                d="M 32.5 18.753048780487802 A 13.746951219512198 13.746951219512198 0 0 1 36.74804154767268 45.57412753650868"
                                                                fill="none" fill-opacity="0.85"
                                                                stroke="rgba(255,171,0,0.85)" stroke-opacity="1"
                                                                stroke-linecap="butt" stroke-width="4.640243902439025"
                                                                stroke-dasharray="0"
                                                                class="apexcharts-radialbar-area apexcharts-radialbar-slice-0"
                                                                data:angle="162" data:value="45" index="0" j="0"
                                                                data:pathOrig="M 32.5 18.753048780487802 A 13.746951219512198 13.746951219512198 0 0 1 36.74804154767268 45.57412753650868">
                                                            </path>
                                                        </g>
                                                        <circle id="SvgjsCircle2121" r="6.4964329268292715" cx="32.5"
                                                            cy="32.5" class="apexcharts-radialbar-hollow"
                                                            fill="transparent"></circle>
                                                    </g>
                                                </g>
                                            </g>
                                            <line id="SvgjsLine2124" x1="0" y1="0" x2="65"
                                                y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                                stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                            <line id="SvgjsLine2125" x1="0" y1="0" x2="65"
                                                y2="0" stroke-dasharray="0" stroke-width="0"
                                                stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
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
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection
