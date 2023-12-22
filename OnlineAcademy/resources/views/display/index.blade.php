@extends('display.app')
@section('content')
    <x-home></x-home>
    <!-- Features -->
    <x-card-collection id="features" cardClass="fea-base" heading="Awesome Feature" paragraph="All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary">
        <x-feacard  icon="fa-solid fa-graduation-cap" feaHeading="Scholarship Facility" feaparagraph="Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old." />
        <x-feacard icon="fa-solid fa-school" feaHeading="Dell Online Courses" feaparagraph="Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old." />
        <x-feacard  icon="fa-solid fa-award" feaHeading="Global Certification" feaparagraph="Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old." />
    </x-card-collection>
    <!-- courses -->
    <x-card-collection id="courses" cardClass="course-box" heading="Our Popular Courses" paragraph="All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary">
        <x-coursecard  image="{{asset('images/c1.jpg')}}" heading="JavaScript Beginners Course" link="#"/>
        <x-coursecard  image="{{asset('images/c2.jpg')}}" heading="C++ Beginners Course" link="#" />
        <x-coursecard  image="{{asset('images/c3.jpg')}}" heading="Python Beginners Course"  link="#" />
        <x-coursecard  image="{{asset('images/c4.jpg')}}" heading="Data Analysis Beginners Course"  link="#" />
        <x-coursecard  image="{{asset('images/c5.jpg')}}" heading="Fundamentals of Programming Beginners Course"  link="#" />
        <x-coursecard  image="{{asset('images/c6.jpg')}}" heading="Angular JS Beginners Course"  link="#" />
        <x-coursecard  image="{{asset('images/c7.jpeg')}}" heading="Vue JS Beginners Course"  link="#" />
    </x-card-collection>
     <!-- Registration -->
     <section id="registration" class="mb-20">
            <div class="reminder">
                <p>Get 100 Online Courses for Free</p>
                <h1>Register To Get It</h1>
                <div class="time">
                    <div class="date" id="days">
                        0 <br>Days 
                    </div>
                    <div class="date" id="hours">
                        0 <br>Hours 
                    </div>
                    <div class="date" id="minutes">
                        0 <br>Minutes
                    </div>
                    <div class="date" id="seconds">
                        0 <br>Seconds
                    </div>
                </div>
            </div>
            <div class="form">
                <h3>Create Free Account Now</h3>
                <input type="text" placeholder="Name" name="" id="">
                <input type="text" placeholder="Email Address" name="" id="">
                <input type="text" placeholder="Phone Number" name="" id="">
                <div class="btn">
                    <a href="#" class="yellow">Submit Form</a>
                </div>
            </div>
    </section>

     <!-- Profiles -->
     <section id="experts">
            <h1>Community Experts</h1>
            <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary</p>
            <div class="expert-box">
                <x-profile image="{{asset('images/pro1.webp')}}" name="Ema Irnik" designation="Python $ Algorithm Expert"/>
                <x-profile image="{{asset('images/pro2.webp')}}" name="Jason" designation="Data Analysis Expert"/>
                <x-profile image="{{asset('images/pro3.webp')}}" name="Maalik" designation="Full Stack Developer"/>
                <x-profile image="{{asset('images/pro4.webp')}}" name="Jenifier" designation="Design Expert"/>
            </div>
    </section>
@endsection