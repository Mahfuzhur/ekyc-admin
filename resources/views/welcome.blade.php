<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>eKYC</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <!-- Fonts -->

    </head>
    <body>
        <div class="container">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            <div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <a class="navbar-brand" href="#">eKYC</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarText">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="#">NID List</span></a>
                                </li>
{{--                                <li class="nav-item">--}}
{{--                                    <a class="nav-link" href="#">Features</a>--}}
{{--                                </li>--}}
{{--                                <li class="nav-item">--}}
{{--                                    <a class="nav-link" href="#">Pricing</a>--}}
{{--                                </li>--}}
                            </ul>
{{--                            <span class="navbar-text">--}}
{{--      Navbar text with an inline element--}}
{{--    </span>--}}
                        </div>
                    </nav>
                </div>

            </div>

            <div class="col-12">
                <div class="col-2">

                </div>
                <div class="col-8">
                    <form>
                        <div class="form-group">
                            <label for="name">নাম</label>
                            <input type="text" class="form-control" id="name" placeholder="নাম" required>
                        </div>
                        <div class="form-group">
                            <label for="b_name">Name</label>
                            <input type="text" class="form-control" id="b_name" placeholder="name" required>
                        </div>
                        <div class="form-group">
                            <label for="f_name">পিতা</label>
                            <input type="text" class="form-control" id="f_name" placeholder="পিতা" required>
                        </div>
                        <div class="form-group">
                            <label for="m_name">মাতা</label>
                            <input type="text" class="form-control" id="m_name" placeholder="মাতা" required>
                        </div>
                        <div class="form-group">
                            <label for="date_of_birth">Date of Birth</label>
                            <input type="date" class="form-control" id="date_of_birth" required>
                        </div>

                        <div class="form-group">
                            <label for="nid">NID No</label>
                            <input type="text" class="form-control" id="nid" placeholder="NID No" required>
                            <input type="hidden" class="form-control" id="pin">
                        </div>

                        <div class="form-group">
                            <label for="occupation">Occupation</label>
                            <select class="form-control" id="occupation" required>
                                <option disabled selected>Occupation</option>
                                <option>ছাত্র/ছাত্রী</option>
                                <option>ব্যবসা</option>
                                <option>চাকরি</option>
                                <option>অবসরপ্রাপ্ত</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="blood_group">Blood Group</label>
                            <select class="form-control" id="blood_group" required>
                                <option disabled selected>Blood Group</option>
                                <option>A+</option>
                                <option>A-</option>
                                <option>B+</option>
                                <option>B-</option>
                                <option>AB+</option>
                                <option>AB-</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="present">ঠিকানা</label>
                            <textarea class="form-control" id="present" rows="3" required></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="Submit">
                        </div>

                    </form>
                </div>
                <div class="">

                </div>

            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>
