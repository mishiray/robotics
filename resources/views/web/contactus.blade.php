@extends('web.layouts.app2')
@section('title', 'Contact Us')
@section('content')
<div class="contact">
   
   <section
   class="bg-dark text-light header-inner p-0 jarallax position-relative"
   data-jarallax
   data-speed="0.2"
   data-overlay
 >
   <img
     src="{{ $web_source }}/assets/img/inner-6.jpg"
     alt="Image"
     class="jarallax-img opacity-40"
     loading="lazy"
   />
   <div class="container py-0">
     <div class="row my-3">
       <div class="col">
         <nav aria-label="breadcrumb"></nav>
       </div>
     </div>
     <div class="row my-4 my-md-6" data-aos="fade-up">
       <div class="col-lg-9 col-xl-8">
         <h1 class="display-4">Get In Touch</h1>
       </div>
     </div>
   </div>
   <div class="divider ">
     <img
       src="{{ $web_source }}/assets/img/dividers/divider-1.svg"
       alt="graphical divider"
       data-inject-svg
     />
   </div>
 </section>
 <section>
   <div class="container">
     <div class="row text-center">
       <div class="col-sm-4 mb-3 mb-sm-0">
         <h3 class="h2">Visit</h3>
         <span class="lead">
           AiRol,
           Central Research Lab, <br> University Of Lagos
           <br />Akoka Yaba, <br />Lagos Nigeria
         </span>
       </div>
       <div class="col-sm-4 mb-3 mb-sm-0">
         <h3 class="h2">Email</h3>
         <a href="mailto:airol@unilag.edu.ng" class="lead"
           > airol@unilag.edu.ng </a
         >
       </div>
       <div class="col-sm-4 mb-3 mb-sm-0">
         <h3 class="h2">Call</h3>
         <span class="lead">
          +(234) 803 342 4289
         </span>
         <div class="text-small text-muted">Mon - Fri, 9am - 5pm</div>
       </div>
     </div>
   </div>
 </section>

 <section>
   <div class="container">
     <div class="row justify-content-center">
       <div class="col-md-11 col-lg-10 col-xl-8" id="contact_form1">
         <div class="text-center mb-4">
           <h2 class="h1">Leave a message</h2>
         </div>
         <form
                 method="post"
           action="{{route('contact.store')}}"
           data-form-email
           novalidate
         >
         @csrf @method('POST')
           <div class="row">
             <div class="col-md-6">
               <div class="form-group">
                 <label>Your Name *</label>
                 <input v-model="FORM.name"
                   name="name"
                   type="text"
                   class="form-control"
                   required
                 />
                 <div class="invalid-feedback">
                   Please type your name.
                 </div>
               </div>
             </div>
             <div class="col-md-6">
               <div class="form-group">
                 <label>Email Address *</label>
                 <input
                         v-model="FORM.email"
                   name="email"
                   type="email"
                   placeholder="you@yoursite.com"
                   class="form-control"
                   required
                 />
               </div>
             </div>
             <div class="col-md-6">
               <div class="form-group">
                 <label>Company Name</label>
                 <input
                         v-model="FORM.company"
                   name="company"
                   type="text"
                   class="form-control"
                   required
                 />
               </div>
             </div>
             <div class="col-md-6">
               <div class="form-group">
                 <label>Contact Number</label>
                 <input
                         v-model="FORM.phone"
                   name="mobile"
                   type="tel"
                   class="form-control"
                   required
                 />
               </div>
             </div>
             <div class="col-12">
               <div class="form-group">
                 <label>Message:</label>
                 <textarea
                         v-model="FORM.message"
                   class="form-control"
                   name="message"
                   rows="10"
                   placeholder="How can we help?"
                 ></textarea>
               </div>
             </div>
             <div class="col">
               <div
                 class="d-none alert alert-success"
                 role="alert"
                 data-success-message
               >
                 Thanks, a member of our team will be in touch shortly.
               </div>
               <div
                 class="d-none alert alert-danger"
                 role="alert"
                 data-error-message
               >
                 Please fill all fields correctly.
               </div>
               <button
                 type="submit"
                 class="btn btn-primary btn-loading"
                 data-loading-text="Sending"
               >
                 <img
                   class="icon"
                   src="{{ $web_source }}/assets/img/icons/theme/code/loading.svg"
                   alt="loading icon"
                   data-inject-svg
                 />
                 <span>Send Enquiry</span>
               </button>
             </div>
           </div>
         </form>
       </div>
     </div>
   </div>
 </section>   
</div>
@stop