@extends('layout.bone')

@section('title','ព័ត៌មានអំពីយើង')


@section('style')

@endsection

@section('post')
        <!--meet our team-->

        <div class="container">

            <div class="row heading">
              <div class="col-md-6 col-md-offset-3">
                <h2 class="text-center bottom-line">Meet Our Team</h2>
                <p class="subheading text-center">Creative Nerds</p>
              </div>
            </div>
          
            <div class="row team-row" style="margin: 0 auto;">
          
              <div class="col-md-4 col-sm-6 team-wrap" data-aos="animate text on scroll">
                <div class="team-member text-center">
                  <div class="team-img" data-aos="fade-right">
                    <img src="image/Dara.jpg" alt="" style="width: 25rem;" class="rounded-circle border-warning">
                    <div class="overlay">
                      <div class="team-details text-center">
                        <p>
                          Our web design team will spend time with our digital marketing team.
                        </p>
                      </div>
                    </div>
                  </div>
                  <h6 class="team-title">Leav Chandara</h6>
                  <span>Co-Founder</span>
                </div>
              </div>
              <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
              <script>
                AOS.init({
                    offset: 400, // offset (in px) from the original trigger point
                    delay: 2, // values from 0 to 3000, with step 50ms
                    duration: 1500 // values from 0 to 3000, with step 50ms
                  });
              </script>
              <!-- end team member -->
          
          
              <div class="col-md-4 col-sm-6 team-wrap" data-aos="animate text on scroll">
                <div class="team-member last text-center">
                  <div class="team-img" data-aos="fade-left">
                    <img src="image/Nary.jpg" alt="" style="width: 25rem;" class="rounded-circle border-warning">
                    <div class="overlay">
                      <div class="team-details text-center">
                        <p>
                          Our web design team will spend time with our digital marketing team.
                        </p>
                      </div>
                    </div>
                  </div>
                  <h6 class="team-title">Ly Nary</h6>
                  <span>Co-Founder</span>
                </div>
              </div>
              <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
              <script>
                AOS.init({
                    offset: 400, // offset (in px) from the original trigger point
                    delay: 2, // values from 0 to 3000, with step 50ms
                    duration: 1500 // values from 0 to 3000, with step 50ms
                  });
              </script>
              <!-- end team member -->
          </div>
          <!--meet our team-->
@endsection