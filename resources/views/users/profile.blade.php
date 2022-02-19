@extends('layouts.app')

@section('content')
    <section class="container-fluid profile-container">
        <form class="row main-profile" action="profile/edit" method="post" enctype="multipart/form-data">
            @csrf
            <div class="col-lg-4 profile align-self-center">
                <div class="avatar-user row justify-content-md-center">
                    @if (isset($users->avatar))
                        <img src="{{ $users->avatar }}" alt="ava-user">
                        <i class="fas fa-camera icon-upload-ava" id="icon-upload-ava"></i>
                        <input type="file" name="favauser" class="input-upload-ava" id="input-upload-ava">
                    @else
                        <img src="{{ asset('image/ava_teacher.png') }}" alt="ava-user">
                        <i class="fas fa-camera icon-upload-ava" id="icon-upload-ava"></i>
                        <input type="file" name="favauser" class="input-upload-ava" id="input-upload-ava">
                    @endif
                </div>
                <div class="profile-user row justify-content-md-center">
                    <div class="name-user col align-self-center">{{ $users->name }}</div>
                    <div class="email-user col align-self-center">{{ $users->email }}</div>
                </div>
                <hr>
                <div class="description-user">
                    <img src="{{ asset('image/birthday_icon.png') }}" alt="phone icon">
                    <p class="txt-user">{{ $users->date_of_birth }}</p>
                </div>
                <hr>
                <div class="description-user">
                    <img src="{{ asset('image/phone_user_icon.png') }}" alt="phone icon">
                    <p class="txt-user">{{ $users->phone }}</p>
                </div>
                <hr>
                <div class="description-user">
                    <img src="{{ asset('image/address_icon.png') }}" alt="adress icon">
                    <p class="txt-user">{{ $users->address }}</p>
                </div>
                <hr>
                <div class="about-user-profile">
                    <p>{{ $users->about_me }}</p>
                </div>

            </div>
            <div class="col-lg-8 edit-profile-container">
                <div class="txt-my-profile">
                    <p>My Profile</p>
                </div>
                <div class="img-your-courses row justify-content-md-center">
                    @foreach ($courses as $course)
                        <div class="img-your-course">
                            <img src="{{ asset($course->icon) }}" alt="{{ $course->name }}">
                        </div>
                    @endforeach
                    <div class="img-your-course">
                        <a href="/allcourses">
                            <img class="img_add" src="{{ asset('image/add_course.png') }}" alt="img_add">
                        </a>
                    </div>
                </div>
                <div class="txt-my-profile">
                    <p>Edit profile</p>
                </div>
                <div class="edit-profile-input">
                    <input type="hidden" name="fid" value="{{ $users->id }}">
                    <div class="row form-group">
                        <div class="col-lg-6">
                            <p class="edit-input-label">Name:</p>
                            <input type="text" id="fname" class="form-control edit-input-profile" name="fname"
                                   placeholder="Your name..." value="{{ $users->name }}">
                        </div>
                        <div class="col-lg-6">
                            <p class="edit-input-label">Email:</p>
                            <input type="text" id="femail" class="form-control edit-input-profile" name="femail"
                                   placeholder="Your email..." value="{{ $users->email }}">
                        </div>
                    </div>
                    <div class="row form-group ">
                        <div class="col-lg-6">
                            <p class="edit-input-label">Date of birthday:</p>
                            <input placeholder="Select date" type="text" id="datepicker"
                                   class="form-control edit-input-profile datepicker" value="{{ $users->date_of_birth }}">
                        </div>
                        <div class="col-lg-6">
                            <p class="edit-input-label">Phone:</p>
                            <input type="text" id="fphone" class="form-control edit-input-profile" name="fphone"
                                   placeholder="Your phone number..." value="{{ $users->phone }}">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-6">
                            <p class="edit-input-label">Address:</p>
                            <input type="text" id="fadress" class="form-control edit-input-profile" name="faddress"
                                   placeholder="Your address..." value="{{ $users->address }}">
                        </div>
                        <div class="col-lg-6">
                            <p class="edit-input-label">About me:</p>
                            <textarea id="fabout" class="form-control edit-input-profile" name="fabout"
                                      placeholder="Your about me..." rows="5">{{ $users->about_me }}</textarea>
                        </div>
                    </div>
                    <div class="row justify-content-md-center">
                        <div class="col-lg-6">
                            <input class="btn-save-profile" type="submit" value="Save">
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>
@endsection
