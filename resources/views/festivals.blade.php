@extends('layout')

@section('title', 'Festivals')

@section('content')

    <h1>festivals</h1>

    <p>You have {{ 'n' }} festivals in the list.</p>

    <form action="" method="post">

    <ul class="festivals-list">

        {{--innentol for--}}
        <li>
            <div class="festival-block columns">
                <div class="col1">
                    <div class="poster">
                        <img src="https://picsum.photos/200/300" alt="">
                    </div>
                </div>

                <div class="col2">
                    <h2>The fancy name of the fancy festival</h2>
                    <div class="">
                        <span>11/08/2022</span>
                        <span>Bontida, Cluj</span>
                    </div>

                    <ul class="festival-concert-list">
                        <li>
                            <input type="checkbox" name="concert_unique_id" id="concert_unique_id">
                            <label for="concert_unique_id">
                                <strong>Justine biber</strong>
                                <small>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, quae? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus at blanditiis eos ipsam porro quasi quos repellendus sed tempora tempore?</small>
                            </label>

                        </li>
                        <li>
                            <input type="checkbox" name="concert_unique_id" id="concert_unique_id">
                            <label for="concert_unique_id">
                                <strong>Justine biber</strong>
                                <small>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, quae? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus at blanditiis eos ipsam porro quasi quos repellendus sed tempora tempore?</small>
                            </label>

                        </li>
                        <li>
                            <input type="checkbox" name="concert_unique_id" id="concert_unique_id">
                            <label for="concert_unique_id">
                                <strong>Justine biber</strong>
                                <small>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, quae? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus at blanditiis eos ipsam porro quasi quos repellendus sed tempora tempore?</small>
                            </label>

                        </li>
                    </ul>
                </div>
            </div>
        </li>

        {{--  --}}

        <li>
            <div class="festival-block columns">
                <div class="col1">
                    <div class="poster">
                        <img src="https://picsum.photos/200/300" alt="">
                    </div>


                </div>

                <div class="col2">
                    <h2>The fancy name of the fancy festival</h2>
                    <div class="">
                        <span>11/08/2022</span>
                        <span>Bontida, Cluj</span>
                    </div>

                    <ul class="festival-concert-list">
                        <li>
                            <input type="checkbox" name="concert_unique_id" id="concert_unique_id">
                            <label for="concert_unique_id">
                                <strong>Justine biber</strong>
                                <small>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, quae? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus at blanditiis eos ipsam porro quasi quos repellendus sed tempora tempore?</small>
                            </label>

                        </li>
                        <li>
                            <input type="checkbox" name="concert_unique_id" id="concert_unique_id">
                            <label for="concert_unique_id">
                                <strong>Justine biber</strong>
                                <small>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, quae? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus at blanditiis eos ipsam porro quasi quos repellendus sed tempora tempore?</small>
                            </label>

                        </li>
                        <li>
                            <input type="checkbox" name="concert_unique_id" id="concert_unique_id">
                            <label for="concert_unique_id">
                                <strong>Justine biber</strong>
                                <small>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, quae? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus at blanditiis eos ipsam porro quasi quos repellendus sed tempora tempore?</small>
                            </label>

                        </li>
                    </ul>
                </div>
            </div>
        </li>

        {{--idaig for--}}

    </ul>

    </form>

@endsection


