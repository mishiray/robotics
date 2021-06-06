@extends('web.layouts.app')
@section('title', 'Contact Us')
@section('content')
<div class="contact">
    <div class="container">
       <div class="row">
           <div class="col-md-12">
                <div class="titlepage text_align_left">
                   <h2>Contact Us</h2>
                </div>
             </div>
       </div>
       <div class="row">
           <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem enim dolor temporibus necessitatibus excepturi ea eligendi, placeat at odit ab consectetur mollitia tenetur. Sed, nobis non quaerat dolore neque tempora!</p>
       </div>
       <div class="row">
          <div class="col-md-6">
             <form id="request" action="{{route('contact.store')}}" method="POST" class="main_form">
                <div class="row">
                   <div class="col-md-12 ">
                      <input class="contactus" placeholder="Full Name" type="type" name="name"> 
                   </div>
                   <div class="col-md-12">
                      <input class="contactus" placeholder="Phone" type="type" name="phone">                          
                   </div>
                   <div class="col-md-12">
                      <input class="contactus" placeholder="Email" type="type" name="email"> 
                   </div>
                   <div class="col-md-12">
                      <textarea class="textarea" placeholder="Message" type="type" Message="message"></textarea>
                   </div>
                   <div class="col-md-12">
                      <button class="send_btn">Send Now</button>
                   </div>
                </div>
             </form>
          </div>
           <div class="col-md-6">
             <div class="map-responsive">
                <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&amp;q=Eiffel+Tower+Paris+France" width="600" height="540" frameborder="0" style="border:0; width: 100%;" allowfullscreen=""></iframe>
             </div>
          </div>
       </div>
       <div class="row mt-2">
          <div class="col-md-12">
             <div class="titlepage text_align_center">
                <h2>Connect With Us</h2>
             </div>
          </div>
           <div class="row d-flex mx-auto">
            <a href="#" class="fa fa-facebook"></a>
            <a href="#" class="fa fa-twitter"></a>
            <a href="#" class="fa fa-instagram"></a>
            <a href="#" class="fa fa-linkedin"></a>
           </div>
       </div>
    </div>
 </div>
@stop