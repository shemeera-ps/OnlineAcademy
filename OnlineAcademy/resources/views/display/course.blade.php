@extends('display.app')
@section('content')
<x-home-sub>Courses</x-home-sub>
 <!-- courses -->
 <x-card-collection id="courses" cardClass="course-box" heading="Our Popular Courses" paragraph="All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary">
        <x-coursecard  image="{{asset('images/c1.jpg')}}" heading="JavaScript Beginners Course" link="{{ route('course-inner') }}"/>
        <x-coursecard  image="{{asset('images/c2.jpg')}}" heading="C++ Beginners Course" link="{{ route('course-inner') }}"/>
        <x-coursecard  image="{{asset('images/c3.jpg')}}" heading="Python Beginners Course" link="{{ route('course-inner') }}"/>
        <x-coursecard  image="{{asset('images/c4.jpg')}}" heading="Data Analysis Beginners Course" link="{{ route('course-inner') }}"/>
        <x-coursecard  image="{{asset('images/c5.jpg')}}" heading="Fundamentals of Programming Beginners Course" link="{{ route('course-inner') }}"/>
        <x-coursecard  image="{{asset('images/c6.jpg')}}" heading="Angular JS Beginners Course" link="{{ route('course-inner') }}"/>
        <x-coursecard  image="{{asset('images/c7.jpeg')}}" heading="Vue JS Beginners Course" link="{{ route('course-inner') }}"/>
        <x-coursecard  image="{{asset('images/c1.jpg')}}" heading="JavaScript Beginners Course" link="{{ route('course-inner') }}"/>
        <x-coursecard  image="{{asset('images/c2.jpg')}}" heading="C++ Beginners Course" link="{{ route('course-inner') }}"/>
        <x-coursecard  image="{{asset('images/c3.jpg')}}" heading="Python Beginners Course" link="{{ route('course-inner') }}"/>
</x-card-collection>
@endsection