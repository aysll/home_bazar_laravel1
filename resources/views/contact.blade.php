@extends('layout')


@section('content')

<section id="contact">
    <div class="container-fluid">
      <div class="row text-center">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 green_contact">
            <h1>CONTACT</h1>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <ol class="breadcrumb bg-white m-t-2">
            <li><a href="/">Home</a> <i class="fa fa-angle-right" aria-hidden="true"></i></li>
            <li>product</li>
          </ol>
      </div>
      <hr>
      <div class="height"></div>
      <div class="row text-center contactPicture img-responsive">
          <div class="container contactInformation">
            <div class="row">
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
              <div class="contactEnvelope">
                <div class="row">
                  <i class="fa fa-4x fa-envelope" aria-hidden="true"></i>
                </div>
                <div class="row">
                  <p>support@gmail.com</p>
                </div>
              </div>
              </div>
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <div class="row">
                  <i class="fa fa-4x fa-phone" aria-hidden="true"></i>
                </div>
                <div class="row">
                  <p>(+994)507779825</p>
                </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row contact-padding text-center">
        <h2>GET IN TOUCH</h2>
      </div>
      <div class="row text-center">
        <p class="contactGray">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
      </div>
      <div class="col-md-8 col-md-offset-2">
        <div class="row text-center">
          <form class="text-center">
        <div class="form-group text-center">
          <label  for="contactName">Your Name</label>
          <input type="text" class="form-control" id="contactName">
        </div>
        <div class="form-group text-center">
          <label for="contactName">Your Email</label>
          <input type="email" class="form-control" id="contactName">
        </div>
        <div class="form-group text-center">
          <label for="comment">Your Message</label>
          <textarea class="form-control" rows="5" id="comment"></textarea>
        </div>
        <button type="submit" class="btn  btn-lg">Submit</button>
      </form>
        </div>
      </div>
      
      </div>
  </section>




@stop