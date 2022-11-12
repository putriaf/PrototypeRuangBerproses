@extends('layout.layout')

@push('styles')
<style>
nav ul li a {
    color: black !important;
}

/* INTRO SECTION
–––––––––––––––––––––––––––––––––––––––––––––––––– */

.intro {
    background: #f45b69;
    padding: 100px 0;
}

.container {
    width: 90%;
    max-width: 1200px;
    margin: 0 auto;
    text-align: center;
}

h1 {
    font-size: 2.5rem;
}


/* TIMELINE
–––––––––––––––––––––––––––––––––––––––––––––––––– */

.timeline ul {
    background: #456990;
    padding: 50px 0;
}

.timeline ul li {
    list-style-type: none;
    position: relative;
    width: 6px;
    margin: 0 auto;
    padding-top: 50px;
    background: #fff;
}

.timeline ul li::after {
    content: "";
    position: absolute;
    left: 50%;
    bottom: 0;
    transform: translateX(-50%);
    width: 30px;
    height: 30px;
    border-radius: 50%;
    background: inherit;
    z-index: 1;
}

.timeline ul li div {
    position: relative;
    bottom: 0;
    width: 400px;
    padding: 15px;
    background: #f45b69;
}

.timeline ul li div::before {
    content: "";
    position: absolute;
    bottom: 7px;
    width: 0;
    height: 0;
    border-style: solid;
}

.timeline ul li:nth-child(odd) div {
    left: 45px;
}

.timeline ul li:nth-child(odd) div::before {
    left: -15px;
    border-width: 8px 16px 8px 0;
    border-color: transparent #f45b69 transparent transparent;
}

.timeline ul li:nth-child(even) div {
    left: -439px;
}

.timeline ul li:nth-child(even) div::before {
    right: -15px;
    border-width: 8px 0 8px 16px;
    border-color: transparent transparent transparent #f45b69;
}

time {
    display: block;
    font-size: 1.2rem;
    font-weight: bold;
    margin-bottom: 8px;
}


/* EFFECTS
–––––––––––––––––––––––––––––––––––––––––––––––––– */

.timeline ul li::after {
    transition: background 0.5s ease-in-out;
}

.timeline ul li.in-view::after {
    background: #f45b69;
}

.timeline ul li div {
    visibility: hidden;
    opacity: 0;
    transition: all 0.5s ease-in-out;
}

.timeline ul li:nth-child(odd) div {
    transform: translate3d(200px, 0, 0);
}

.timeline ul li:nth-child(even) div {
    transform: translate3d(-200px, 0, 0);
}

.timeline ul li.in-view div {
    transform: none;
    visibility: visible;
    opacity: 1;
}


/* GENERAL MEDIA QUERIES
–––––––––––––––––––––––––––––––––––––––––––––––––– */

@media screen and (max-width: 900px) {
    .timeline ul li div {
        width: 250px;
    }

    .timeline ul li:nth-child(even) div {
        left: -289px;
        /*250+45-6*/
    }
}

@media screen and (max-width: 600px) {
    .timeline ul li {
        margin-left: 20px;
    }

    .timeline ul li div {
        width: calc(100vw - 91px);
    }

    .timeline ul li:nth-child(even) div {
        left: 45px;
    }

    .timeline ul li:nth-child(even) div::before {
        left: -15px;
        border-width: 8px 16px 8px 0;
        border-color: transparent #f45b69 transparent transparent;
    }
}


/* EXTRA/CLIP PATH STYLES
–––––––––––––––––––––––––––––––––––––––––––––––––– */
.timeline-clippy ul li::after {
    width: 40px;
    height: 40px;
    border-radius: 0;
}

.timeline-rhombus ul li::after {
    clip-path: polygon(50% 0%, 100% 50%, 50% 100%, 0% 50%);
}

.timeline-rhombus ul li div::before {
    bottom: 12px;
}

.timeline-star ul li::after {
    clip-path: polygon(50% 0%,
            61% 35%,
            98% 35%,
            68% 57%,
            79% 91%,
            50% 70%,
            21% 91%,
            32% 57%,
            2% 35%,
            39% 35%);
}

.timeline-heptagon ul li::after {
    clip-path: polygon(50% 0%,
            90% 20%,
            100% 60%,
            75% 100%,
            25% 100%,
            0% 60%,
            10% 20%);
}

.timeline-infinite ul li::after {
    animation: scaleAnimation 2s infinite;
}

@keyframes scaleAnimation {
    0% {
        transform: translateX(-50%) scale(1);
    }

    50% {
        transform: translateX(-50%) scale(1.25);
    }

    100% {
        transform: translateX(-50%) scale(1);
    }
}
</style>
@endpush

@section('content')
<section class="lg:mx-10 lg:my-10 font-quicksand overflow-x-hidden lg:pt-20">
    <div class=" text-center">
        <h1 class="text-3xl font-bold lg:mb-4">Ruang Berproses</h1>
        <p>Selalu ada ruang untuk kamu berproses menuju versi terbaikmu</p>
    </div>
    <div class="flex lg:mt-10 items-end">
        <div class="flex-auto w-2/3">
            <div class="lg:mb-8">
                <h2 class="text-xl font-semibold lg:mb-5">Visi</h2>
                <p>Setiap orang menyadari bahwa Kesehatan mental adalah penting dan setiap orang memiliki ruang untuk
                    berproses dengan dirinya.</p>
            </div>
            <div class="">
                <h2 class="text-xl font-semibold lg:mb-5">Misi</h2>
                <p>Mengadvokasi mengenai pentingnya akan Kesehatan mental dan mendampingi setiap orang yang ingin
                    berproses
                    dengan kondisi kesehatan mentalnya selaras dengan perubahan yang terus terjadi didalam proses
                    kehidupan
                </p>
            </div>
        </div>
        <div class="flex-auto w-1/3 lg:pl-32">
            <img src="{{ asset('img/ruang-berproses/rb-only-logo.png') }}" alt="" class="">
        </div>
    </div>
    <div class="text-center lg:mt-20">
        <h1 class="text-3xl font-bold lg:mb-4">Perjalanan Ruang Berproses</h1>
        <section class="timeline text-white">
            <ul>
                <li>
                    <div class="rounded">
                        <time>1934</time> At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                        praesentium At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                        praesentium
                    </div>
                </li>
                <li>
                    <div>
                        <time>1937</time> Proin quam velit, efficitur vel neque vitae, rhoncus commodo mi. Suspendisse
                        finibus mauris et bibendum molestie. Aenean ex augue, varius et pulvinar in, pretium non nisi.
                    </div>
                </li>
                <li>
                    <div>
                        <time>1940</time> Proin iaculis, nibh eget efficitur varius, libero tellus porta dolor, at
                        pulvinar tortor ex eget ligula. Integer eu dapibus arcu, sit amet sollicitudin eros.
                    </div>
                </li>
                <li>
                    <div>
                        <time>1943</time> In mattis elit vitae odio posuere, nec maximus massa varius. Suspendisse
                        varius volutpat mattis. Vestibulum id magna est.
                    </div>
                </li>
            </ul>
        </section>
    </div>
</section>
<script>
(function() {
    "use strict";

    // define variables
    var items = document.querySelectorAll(".timeline li");

    // check if an element is in viewport
    // http://stackoverflow.com/questions/123999/how-to-tell-if-a-dom-element-is-visible-in-the-current-viewport
    function isElementInViewport(el) {
        var rect = el.getBoundingClientRect();
        return (
            rect.top >= 0 &&
            rect.left >= 0 &&
            rect.bottom <=
            (window.innerHeight || document.documentElement.clientHeight) &&
            rect.right <= (window.innerWidth || document.documentElement.clientWidth)
        );
    }

    function callbackFunc() {
        for (var i = 0; i < items.length; i++) {
            if (isElementInViewport(items[i])) {
                items[i].classList.add("in-view");
            }
        }
    }

    // listen for events
    window.addEventListener("load", callbackFunc);
    window.addEventListener("resize", callbackFunc);
    window.addEventListener("scroll", callbackFunc);
})();
</script>
@endsection