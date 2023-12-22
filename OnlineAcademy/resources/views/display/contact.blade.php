@extends('display.app')
@section('content')
<x-home-sub>Contact Us</x-home-sub>

<section id="contact">
    <div class="getin">
        <h2>Get in touch</h2>
        <p>Looking for help? Fill the form and start a new adventure.</p>
        <div class="getin-details">
            <h3>Headquaters</h3>
            <div>
                <i class="fa-solid fa-house get"></i>
                <p>744 New York Ave, Brooklyn , Kings, New York 10224</p>
            </div>
            <h3>Phone</h3>
            <div>
                <i class="fa-solid fa-phone get"></i>
                <p>+91 654 148 32 47<br>+91 278 694 3758</p>
            </div>
            <h3>Support</h3>
            <div>
                <i class="fa-solid fa-envelope get"></i>
                <p>support@gmail.com <br> helpwithus@gmail.com</p>
            </div>
            <h3>Follow Us</h3>
            <x-social-links></x-social-links>
        </div>
    </div>
    <div class="form">
        <h4>Let's Connect</h4>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
        <div class="form-row">
            <input type="text" name="" id="" placeholder="Your Name">
            <input type="text" name="" id="" placeholder="Email">
        </div>
        <div class="form-col">
            <input type="text" name="" id="" placeholder="Subject">
            <textarea name="" id="" cols="30" rows="8" placeholder="How can we help?"></textarea>
        </div>
        <div class="form-col">
            <button>Submit Message</button>
        </div>
    </div>
</section>
<section id="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14413.237128582781!2d76.30174824410227!3d9.980771121937885!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b080d08f976f3a9%3A0xe9cdb444f06ed454!2sErnakulam%2C%20Kerala!5e0!3m2!1sen!2sin!4v1702354299781!5m2!1sen!2sin" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>


@endsection