@extends('display.app')
@section('content')
<x-home-sub>About Us</x-home-sub>
<section id="about-container">
            <div class="about-img">
                <img src="images/a.png" alt="">
            </div>
            <div class="about-text">
                <h2>Welcome to OnlineAcademy, Enhance your skills with best Online Courses</h2>
                <p>Join millions of learners from around the world already learning with us. Find the right instructor for you. Choose from many topics, skill levels, and languages.</p>
                <x-fee image="{{asset('images/fe1.png')}}" heading="400+ Courses" paragraph="OnlineAcademy offers unlimited opportunities to learn new skills and earn degrees or certificates from leading universities and companies like Google, Microsoft, Yale, and more."/>
                <x-fee image="{{asset('images/fe2.png')}}" heading="Lifetime Access" paragraph="OnlineAcademy offers unlimited opportunities to learn new skills and earn degrees or certificates from leading universities and companies like Google, Microsoft, Yale, and more."/>
            </div>
    </section>
<x-card-collection id="features" cardClass="fea-base" heading="Awesome Feature" paragraph="All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary">
        <x-feacard  icon="fa-solid fa-graduation-cap" feaHeading="Scholarship Facility" feaparagraph="Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old." />
        <x-feacard icon="fa-solid fa-school" feaHeading="Dell Online Courses" feaparagraph="Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old." />
        <x-feacard  icon="fa-solid fa-award" feaHeading="Global Certification" feaparagraph="Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old." />
</x-card-collection>
<x-card-collection id="trust" cardClass="trust-img" heading="Trusted By" paragraph="All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary">
        <img src="{{ asset('images/trust (1).png')}}" alt="">
        <img src="{{ asset('images/trust (2).png')}}" alt="">
        <img src="{{ asset('images/trust (3).png')}}" alt="">
        <img src="{{ asset('images/trust (4).png')}}" alt="">
        <img src="{{ asset('images/trust (5).png')}}" alt="">
        <img src="{{ asset('images/trust (6).png')}}" alt="">
</x-card-collection>
@endsection