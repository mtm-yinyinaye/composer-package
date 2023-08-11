<?php

namespace ComposerPackage;

class HelloWorld
{
    public static function sayHello()
    {
        return <<<HTML
            <html>
                <head>
                    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                    <style>
                        /* CSS Variables (start) */
                        :root {
                            --dark-grey-900: #1a1a1a;
                            --dark-grey-800: #242424;
                            --dark-grey-700: #2f2f2f;
                            --dark-grey-500: #3c3c3c4a;
                            --dark-grey-400: #545454a6;
                            --dark-grey-200: #8e8e8e;
                            --dark-grey-100: #a7a7a7;
                            --white: #fff;
                            --white-100: #ffffffde;
                            --white-200: #f1f1f1;
                            --yellow: #ffff00;
                        }

                        /* CSS Variables (end) */
                        html.dark {
                            color-scheme: dark;
                        }

                        /* Toggle Button (start) */
                        .dark-mode-toggle {
                            margin-right: 10px;
                        }

                        .dark-switch {
                            position: relative;
                            border-radius: 11px;
                            display: block;
                            width: 40px;
                            height: 22px;
                            flex-shrink: 0;
                            border: 1px solid var(--dark-grey-700);
                            background-color: var(--white-200);
                            transition: border-color .25s, background-color .25s;
                            cursor: pointer;
                        }

                        .dark-switch:hover {
                            border-color: var(--dark-grey-200);
                        }

                        .dark-switch-check {
                            position: absolute;
                            top: 1px;
                            left: 1px;
                            width: 18px;
                            height: 18px;
                            border-radius: 50%;
                            background-color: var(--white);
                            box-shadow: 0 1px 2px rgba(0, 0, 0, .04), 0 1px 2px rgba(0, 0, 0, .06);
                            transition: background-color .25s, transform .25s;
                        }

                        .dark-switch-icon {
                            position: relative;
                            display: block;
                            width: 18px;
                            height: 18px;
                            border-radius: 50%;
                            overflow: hidden;
                        }

                        .dark-switch-icon svg {
                            position: absolute;
                            top: 1px;
                            right: 1px;
                            width: 16px;
                            height: 16px;
                            fill: var(--dark-grey-100);
                        }

                        .dark .dark-switch-icon svg {
                            fill: var(--white-100);
                            transition: opacity .25s;
                        }

                        .dark-switch-appearance-sun,
                        .dark .dark-switch-appearance-moon {
                            opacity: 1;
                        }

                        .dark-switch-appearance-moon,
                        .dark .dark-switch-appearance-sun {
                            opacity: 0;
                        }

                        .dark .dark-switch-appearance .dark-switch-check {
                            transform: translate(18px);
                        }
                        /* Toggle Button (end) */
                        /* Dark Mode for whole page (start) */
                        .dark .c-main,
                        .dark .c-modal,
                        .dark .announcement-section,
                        .dark .c-input,
                        .dark .p-AD02002-info__item,
                        .dark .c-select__item,
                        .dark .c-btn.--bl,
                        .dark .ui-datepicker,
                        .dark .c-table-head,
                        .dark .c-table__th,
                        .dark .c-table__td,
                        .dark .c-table-body.--border .c-table__tr:nth-of-type(even) .c-table__td,
                        .dark .c-textarea,
                        .dark .p-AD02004-table__th1,
                        .dark .p-AD02004-table__th2,
                        .dark .p-AD02004-table__th3,
                        .dark .p-AD02004-table__th4,
                        .dark .p-AD02004-table__th5,
                        .dark .p-AD02004-table__td1,
                        .dark .p-AD02004-table__td2,
                        .dark .p-AD02004-table__td3,
                        .dark .p-AD02004-table__td4,
                        .dark .discount-input,
                        .dark .select2-container--default .select2-selection--multiple,
                        .dark .select2-dropdown,
                        .dark .account-c-input {
                            background-color: var(--dark-grey-800);
                        }

                        .dark .c-header,
                        .dark body,
                        .dark .value-container,
                        .dark .c-table-head,
                        .dark .u-heading-h1,
                        .dark .p-AD02002-info__item p,
                        .dark .c-select__item,
                        .dark .c-modal-header__title.--dialog {
                            color: var(--white-100);
                        }

                        .dark .c-header,
                        .dark .c-sidebar,
                        .dark .c-box.--frame,
                        .dark .graph-row,
                        .dark .total-percent,
                        .dark .circular-progress::before,
                        .dark .p-AD02016,
                        .dark section.p-AD02013,
                        .dark section.p-AD02011,
                        .dark section.p-AD02003,
                        .dark .p-AD02004-section,
                        .dark .p-AD02006-section,
                        .dark .p-AD02007-table .c-table__th,
                        .dark .p-AD02007-table .c-table__td,
                        .dark .dark-switch-check {
                            background-color: var(--dark-grey-900);
                        }

                        .dark .c-sidebar {
                            border-right: 1px solid var(--dark-grey-500);
                        }

                        .dark .c-sidebar-nav__list>.c-sidebar-nav__item {
                            border-bottom: 1px solid var(--dark-grey-500);
                        }

                        .dark a,
                        .dark .c-header-primary-nav__profile,
                        .dark .c-sidebar-nav__link.is-current,
                        .dark .c-btn.--frame.--search,
                        .dark .c-btn.--search,
                        .dark .c-btn.--bl,
                        .dark .c-btn.--edit,
                        .dark .u-link.--color,
                        .dark .c-btn.--gr,
                        .dark .c-btn,
                        .dark .c-btn.--frame.--shade {
                            color: var(--yellow);
                        }

                        .dark .dark-switch,
                        .dark .c-btn.--search,
                        .dark .c-btn.--frame.--search,
                        .dark .c-btn.--bl,
                        .dark .c-sidebar-nav__link.is-current,
                        .dark .c-checkbox__label,
                        .dark .c-btn.--edit,
                        .dark .c-checkbox__input:disabled+.c-checkbox__label,
                        .dark .c-btn.--frame.--shade,
                        .dark .c-radio__label,
                        .dark .c-btn:disabled,
                        .dark .c-btn.--gr,
                        .dark .select2-container--default .select2-selection--multiple .select2-selection__choice,
                        .dark .collapse-link,
                        .dark .collapse,
                        .dark .c-footer {
                            background-color: var(--dark-grey-700) !important;
                        }

                        .dark a:hover,
                        .dark .c-header-primary-nav__profile:hover,
                        .dark .c-sidebar-nav__link.is-current:hover,
                        .dark .c-btn.--frame.--search:hover,
                        .dark .c-btn.--search:hover,
                        .dark .c-btn.--bl:hover,
                        .dark .c-btn.--edit:hover,
                        .dark .u-link.--color:hover,
                        .dark .c-btn.--gr:hover,
                        .dark .c-btn:hover,
                        .dark .c-btn.--frame.--shade:hover {
                            color: var(--white-100);
                            transition: 0.5s;
                        }

                        .dark .c-input,
                        .dark .c-btn.--search,
                        .dark .c-btn.--frame.--search,
                        .dark .p-AD02002-info__item,
                        .dark .c-select__item,
                        .dark .c-btn.--bl,
                        .dark .c-table,
                        .dark .c-btn.--edit,
                        .dark .c-checkbox__label,
                        .dark .c-textarea,
                        .dark .c-checkbox__input:disabled+.c-checkbox__label,
                        .dark .c-btn.--gr,
                        .dark .p-AD02004-table__th1,
                        .dark .p-AD02004-table__th2,
                        .dark .p-AD02004-table__th3,
                        .dark .p-AD02004-table__th4,
                        .dark .p-AD02004-table__th5,
                        .dark .p-AD02004-table__td1,
                        .dark .p-AD02004-table__td2,
                        .dark .p-AD02004-table__td3,
                        .dark .p-AD02004-table__td4,
                        .dark .c-btn.--frame.--shade,
                        .dark .c-radio__label,
                        .dark .discount-input,
                        .dark .select2-container--default .select2-selection--multiple,
                        .dark .select2-dropdown,
                        .dark .account-c-input,
                        .dark .select2-container--default .select2-selection--multiple .select2-selection__choice,
                        .dark .collapse-link {
                            border: 1px solid var(--dark-grey-400) !important;
                        }

                        .dark .c-sidebar-nav__icon--announcement {
                            background: url("../../img/admin/belltwo.svg") no-repeat;
                            background-size: 24px 24px;
                        }

                        .dark .ui-state-highlight,
                        .dark .c-modal-header {
                            background-color: var(--dark-grey-400);
                        }

                        .dark .c-radio__input:checked+.c-radio__label:before {
                            background-color: var(--dark-grey-200);
                        }

                        .dark .ui-datepicker-prev:before {
                            border-left: 2px solid var(--white-100);
                            border-top: 2px solid var(--white-100);
                        }

                        .dark .ui-datepicker-next:before {
                            border-right: 2px solid var(--white-100);
                            border-top: 2px solid var(--white-100);
                        }

                        .dark .c-select:after {
                            border-color: var(--white-100) transparent transparent transparent;
                        }

                        .dark .c-table__th,
                        .dark .c-section-header__title,
                        .dark .p-AD02003-table-head .c-table__tr:last-of-type th {
                            border-bottom: 2px solid var(--dark-grey-400);
                        }

                        .dark .c-table__th,
                        .dark .c-table__td {
                            border-right: 1px solid var(--dark-grey-400) !important;
                        }

                        .dark .c-table__td,
                        .dark .p-AD02003-table-body .c-table__tr:nth-of-type(even) td {
                            border-bottom: 1px solid var(--dark-grey-400);
                        }

                        .dark .c-btn:disabled {
                            border: 0px !important;
                        }

                        .dark .c-section-header__title:before {
                            background-color: var(--yellow);
                        }

                        .dark .c-btn.--gr.--small,
                        .dark .c-input:disabled {
                            color: var(--dark-grey-200) !important;
                        }

                        .dark .p-AD02004-table__body {
                            border-top: 5px solid var(--dark-grey-400);
                        }

                        .dark .p-AD02004-box {
                            border: 2px solid var(--dark-grey-400);
                        }

                        .dark .p-AD02007-table,
                        .dark .p-AD02007-table .c-table__th,
                        .dark .p-AD02007-table .c-table__td {
                            border: 0 !important;
                        }

                        .dark .c-table.--sticky .c-table-head .c-table__th {
                            border-top: 1px solid var(--dark-grey-400);
                        }

                        .dark .location-icon {
                            border: 1px solid var(--white);
                        }

                        /* Dark Mode for whole page (end) */
                    </style>
                </head>
            <body>
                <div class="dark-mode-toggle">
                    <button class="dark-switch dark-switch-appearance" type="button" role="switch" aria-label="Toggle dark mode" aria-checked="false">
                        <span class="dark-switch-check">
                            <span class="dark-switch-icon">
                                <svg class="dark-switch-appearance-sun" viewBox="0 0 512 512" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <g>
                                        <g>
                                            <path d="M256,144c-61.75,0-112,50.25-112,112s50.25,112,112,112s112-50.25,112-112S317.75,144,256,144z M256,336    c-44.188,0-80-35.812-80-80c0-44.188,35.812-80,80-80c44.188,0,80,35.812,80,80C336,300.188,300.188,336,256,336z M256,112    c8.833,0,16-7.167,16-16V64c0-8.833-7.167-16-16-16s-16,7.167-16,16v32C240,104.833,247.167,112,256,112z M256,400    c-8.833,0-16,7.167-16,16v32c0,8.833,7.167,16,16,16s16-7.167,16-16v-32C272,407.167,264.833,400,256,400z M380.438,154.167    l22.625-22.625c6.25-6.25,6.25-16.375,0-22.625s-16.375-6.25-22.625,0l-22.625,22.625c-6.25,6.25-6.25,16.375,0,22.625    S374.188,160.417,380.438,154.167z M131.562,357.834l-22.625,22.625c-6.25,6.249-6.25,16.374,0,22.624s16.375,6.25,22.625,0    l22.625-22.624c6.25-6.271,6.25-16.376,0-22.625C147.938,351.583,137.812,351.562,131.562,357.834z M112,256    c0-8.833-7.167-16-16-16H64c-8.833,0-16,7.167-16,16s7.167,16,16,16h32C104.833,272,112,264.833,112,256z M448,240h-32    c-8.833,0-16,7.167-16,16s7.167,16,16,16h32c8.833,0,16-7.167,16-16S456.833,240,448,240z M131.541,154.167    c6.251,6.25,16.376,6.25,22.625,0c6.251-6.25,6.251-16.375,0-22.625l-22.625-22.625c-6.25-6.25-16.374-6.25-22.625,0    c-6.25,6.25-6.25,16.375,0,22.625L131.541,154.167z M380.459,357.812c-6.271-6.25-16.376-6.25-22.625,0    c-6.251,6.25-6.271,16.375,0,22.625l22.625,22.625c6.249,6.25,16.374,6.25,22.624,0s6.25-16.375,0-22.625L380.459,357.812z" />
                                        </g>
                                    </g>
                                </svg>
                                <svg class="dark-switch-appearance-moon" viewBox="0 0 512 512" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <path d="M349.852,343.15c-49.875,49.916-131.083,49.916-181,0c-49.916-49.918-49.916-131.125,0-181.021  c13.209-13.187,29.312-23.25,47.832-29.812c5.834-2.042,12.293-0.562,16.625,3.792c4.376,4.375,5.855,10.833,3.793,16.625  c-12.542,35.375-4,73.666,22.25,99.917c26.209,26.228,64.5,34.75,99.916,22.25c5.792-2.062,12.271-0.582,16.625,3.793  c4.376,4.332,5.834,10.812,3.771,16.625C373.143,313.838,363.06,329.941,349.852,343.15z M191.477,184.754  c-37.438,37.438-37.438,98.354,0,135.771c40,40.021,108.125,36.416,143-8.168c-35.959,2.25-71.375-10.729-97.75-37.084  c-26.375-26.354-39.333-61.771-37.084-97.729C196.769,179.796,194.039,182.192,191.477,184.754z" />
                                </svg>
                            </span>
                        </span>
                    </button>
                </div>
            </body>
            <script>
                $('.dark-switch').click(function () {
                    var darkMode = localStorage.getItem("dark-mode");
                    if (darkMode) {
                        localStorage.setItem("dark-mode", "false");
                    } else {
                        localStorage.setItem("dark-mode", "true");
                    }
                    document.documentElement.classList.toggle("dark");
                });
            </script>
            </html>
        HTML;
    }
}
