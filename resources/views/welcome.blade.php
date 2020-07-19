@extends('layouts.app')

@section('content')
    <!-- One -->
    <section id="oneB" class="wrapper">
        <div class="inner">
            <div class="flex flex-3">
                <article>
                    <header>
                        <h3>Houston EMS Log</h3>
                    </header>
                    <p>See the log and listen to the EMS dispatches yourself.</p>
                    <footer>
                        <a href="#" class="button special">More</a>
                    </footer>
                </article>
                <article>
                    <header>
                        <h3>Los Angeles EMS Log</h3>
                    </header>
                    <p>See the log and listen to the EMS dispatches yourself.</p>
                    <footer>
                        <a href="#" class="button special">More</a>
                    </footer>
                </article>
                <article>
                    <header>
                        <h3>Miami EMS Log</h3>
                    </header>
                    <p>See the log and listen to the EMS dispatches yourself.</p>
                    <footer>
                        <a href="#" class="button special">More</a>
                    </footer>
                </article>
            </div>
        </div>
    </section>

    <!-- Two -->
    <section id="two" class="wrapper style1 special">
        <div class="inner">
            <header>
                <h2>Coronavirus Deaths are Underreported</h2>
                <p>We aim to conclusively prove by how much.</p>
            </header>
            <article class="readable">
                <p>
                    Welcome to the Coronavirus EMS Tracker! Here we aim to log coronavirus-related EMS dispatches in America's hotspots.
                </p>
                <p>
                    The goal of this project is to independently log and record coronavirus-related EMS dispatches so that we can have
                    a much better realistic grasp of just how widespread <strong>and *DEADLY*</strong> COVID-19 really is.
                </p>
                <p>
                    This project was inspired by findings that Houston, Texas, has been dramatically undercounting the number of
                    coronavirus deaths, by mislabeling them as deaths by pneumonia and the coverall "Cardiac Arrest".
                </p>
                <p>
                    See our <a href="https://github.com/CovidResearch/ems.covidreporter.news/commits/master" target="_blank"><strong>GitHub repo</strong></a>
                    for the full source code!
                </p>
            </article>
            <div class="flex flex-4">
                <div class="box person">
                    <div class="image">
                        <a href="https://www.nytimes.com/interactive/2020/05/05/us/coronavirus-death-toll-us.html" target="_blank"><img src="/images/excess-deaths1.png" alt="Texas Excess Deaths" /></a>
                    </div>
                    <h3>Texas Excess Deaths</h3>
                    <p>2019-2020</p>
                </div>
                <div class="box person">
                    <div class="image">
                        <a href="https://www.bbc.com/news/world-53073046" target="_blank"><img src="/images/excess-deaths2.png" alt="Coronavirus: What's the True Death Toll?" /></a>
                    </div>
                    <h3>What's the True Coronavirus Death Toll?</h3>
                    <p>A BBC Expose</p>
                </div>
                <div class="box person">
                    <div class="image">
                        <a href="https://edhub.ama-assn.org/jn-learning/audio-player/18520900" target="_blank"><img src="/images/excess-deaths3.jpg" alt="Person 3" /></a>
                    </div>
                    <h3>An Estimation of Excess Deaths From COVID-19 in the United States</h3>
                    <p>A science study.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Three -->
    {{--<section id="three" class="wrapper special">--}}
    {{--    <div class="inner">--}}
    {{--        <header class="align-center">--}}
    {{--            <h2>Nunc Dignissim</h2>--}}
    {{--            <p>Aliquam erat volutpat nam dui </p>--}}
    {{--        </header>--}}
    {{--        <div class="flex flex-2">--}}
    {{--            <article>--}}
    {{--                <div class="image fit">--}}
    {{--                    <img src="images/pic01.jpg" alt="Pic 01" />--}}
    {{--                </div>--}}
    {{--                <header>--}}
    {{--                    <h3>Praesent placerat magna</h3>--}}
    {{--                </header>--}}
    {{--                <p>Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor lorem ipsum.</p>--}}
    {{--                <footer>--}}
    {{--                    <a href="#" class="button special">More</a>--}}
    {{--                </footer>--}}
    {{--            </article>--}}
    {{--            <article>--}}
    {{--                <div class="image fit">--}}
    {{--                    <img src="images/pic02.jpg" alt="Pic 02" />--}}
    {{--                </div>--}}
    {{--                <header>--}}
    {{--                    <h3>Fusce pellentesque tempus</h3>--}}
    {{--                </header>--}}
    {{--                <p>Sed adipiscing ornare risus. Morbi est est, blandit sit amet, sagittis vel, euismod vel, velit. Pellentesque egestas sem. Suspendisse commodo ullamcorper magna non comodo sodales tempus.</p>--}}
    {{--                <footer>--}}
    {{--                    <a href="#" class="button special">More</a>--}}
    {{--                </footer>--}}
    {{--            </article>--}}
    {{--        </div>--}}
    {{--    </div>--}}
    {{--</section>--}}
@endsection
