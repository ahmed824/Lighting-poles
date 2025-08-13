<?php
// components/loader.php
?>
<div id="page-loader" class="page-loader d-flex align-items-center justify-content-center position-fixed w-100 h-100">
    <div class="loader-content">
        <!-- Hidden gradient definitions -->
        <svg height="0" width="0" viewBox="0 0 64 64" class="position-absolute">
            <defs xmlns="http://www.w3.org/2000/svg">
                <!-- Gradient for L -->
                <linearGradient gradientUnits="userSpaceOnUse" y2="2" x2="0" y1="62" x1="0" id="gradientL">
                    <stop stop-color="#3024ae"></stop>
                    <stop stop-color="#4338ca" offset="1"></stop>
                </linearGradient>

                <!-- Animated gradient for P -->
                <linearGradient gradientUnits="userSpaceOnUse" y2="0" x2="0" y1="64" x1="0" id="gradientP">
                    <stop stop-color="#4338ca"></stop>
                    <stop stop-color="#6366f1" offset="1"></stop>
                    <animateTransform repeatCount="indefinite"
                        keySplines=".42,0,.58,1;.42,0,.58,1;.42,0,.58,1;.42,0,.58,1;.42,0,.58,1;.42,0,.58,1;.42,0,.58,1;.42,0,.58,1"
                        keyTimes="0; 0.125; 0.25; 0.375; 0.5; 0.625; 0.75; 0.875; 1" dur="8s"
                        values="0 32 32;-270 32 32;-270 32 32;-540 32 32;-540 32 32;-810 32 32;-810 32 32;-1080 32 32;-1080 32 32"
                        type="rotate" attributeName="gradientTransform">
                    </animateTransform>
                </linearGradient>

                <!-- Gradient for C -->
                <linearGradient gradientUnits="userSpaceOnUse" y2="2" x2="0" y1="62" x1="0" id="gradientC">
                    <stop stop-color="#6366f1"></stop>
                    <stop stop-color="#e0e7ff" offset="1"></stop>
                </linearGradient>
            </defs>
        </svg>

        <div class="lpc-loader d-flex align-items-center justify-content-center">
            <!-- Letter L -->
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 64 64" class="letter-svg">
                <path stroke-linejoin="round" stroke-linecap="round" stroke-width="6" stroke="url(#gradientL)"
                    d="M 12 8 L 12 48 L 52 48" class="l-path dash" pathLength="360">
                </path>
            </svg>

            <div class="letter-spacing"></div>

            <!-- Letter P -->
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 64 64" class="letter-svg">
                <path stroke-linejoin="round" stroke-linecap="round" stroke-width="6" stroke="url(#gradientP)"
                    d="M 12 8 L 12 56 M 12 8 L 38 8 C 45 8 50 13 50 20 C 50 27 45 32 38 32 L 12 32" class="p-path dash"
                    pathLength="360">
                </path>
            </svg>

            <div class="letter-spacing"></div>

            <!-- Letter C -->
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 64 64" class="letter-svg">
                <path stroke-linejoin="round" stroke-linecap="round" stroke-width="6" stroke="url(#gradientC)"
                    d="M 50 20 C 46 12 38 8 30 8 C 18 8 8 18 8 30 C 8 42 18 52 30 52 C 38 52 46 48 50 40"
                    class="c-path dash" pathLength="360">
                </path>
            </svg>
        </div>

        <!-- Loading text -->
        <div class="loading-text text-center mt-4">
            <!-- <p class="mb-0 text-light fw-light">Loading...</p> -->
        </div>
    </div>
</div>

<style>
    .page-loader {
        background: var(--dark-bg);
        z-index: 9999;
        top: 0;
        left: 0;
        transition: opacity 0.5s ease-out, visibility 0.5s ease-out;
    }

    .page-loader.fade-out {
        opacity: 0;
        visibility: hidden;
    }

    .loader-content {
        text-align: center;
        position: relative;
    }

    .lpc-loader {
        margin: 0.25rem 0;
    }

    .letter-spacing {
        width: 0.5rem;
    }

    .letter-svg {
        width: 80px;
        height: 80px;
    }

    .dash {
        animation: dashArray 2.5s ease-in-out infinite,
            dashOffset 2.5s linear infinite;
    }

    /* All letters use the same cool dash animation */
    .l-path {
        animation: dashArray 2.5s ease-in-out infinite,
            dashOffset 2.5s linear infinite;
        animation-delay: 0s;
    }

    .p-path {
        animation: dashArray 2.5s ease-in-out infinite,
            dashOffset 2.5s linear infinite;
        animation-delay: 0.8s;
    }

    .c-path {
        animation: dashArray 2.5s ease-in-out infinite,
            dashOffset 2.5s linear infinite;
        animation-delay: 1.6s;
    }

    @keyframes dashArray {
        0% {
            stroke-dasharray: 0 1 359 0;
        }

        50% {
            stroke-dasharray: 0 359 1 0;
        }

        100% {
            stroke-dasharray: 359 1 0 0;
        }
    }

    @keyframes dashOffset {
        0% {
            stroke-dashoffset: 365;
        }

        100% {
            stroke-dashoffset: 5;
        }
    }

    /* Glow effect */
    .lpc-loader::before {
        content: '';
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 300px;
        height: 100px;
        background: radial-gradient(ellipse, rgba(99, 102, 241, 0.2) 0%, transparent 70%);
        border-radius: 50%;
        animation: glow 3s ease-in-out infinite alternate;
        z-index: -1;
    }

    @keyframes glow {
        0% {
            opacity: 0.3;
            transform: translate(-50%, -50%) scale(0.8);
        }

        100% {
            opacity: 0.6;
            transform: translate(-50%, -50%) scale(1.2);
        }
    }

    .loading-text {
        color: var(--text-light);
        font-family: 'Poppins', sans-serif;
        font-size: 1.1rem;
        letter-spacing: 0.1em;
    }

    /* Responsive design */
    @media (max-width: 768px) {
        .letter-svg {
            width: 60px;
            height: 60px;
        }

        .loading-text {
            font-size: 1rem;
        }
    }

    @media (max-width: 480px) {
        .letter-svg {
            width: 50px;
            height: 50px;
        }

        .loading-text {
            font-size: 0.9rem;
        }
    }
</style>