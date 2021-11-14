@extends('layouts.app')

@section('content')
    <div class="site-section" id="features-section">
        <div class="container-fluid">
           <div class="row justify-content-center main_div" >
              <div class="col-7 text-center  mb-5">
              </div>
           </div>
      </div>

        <div class="container2">
            <div class="row justify-content-center text-center"  style="background-color: #fff; height: 40px;">
              <div class="col-7 text-center  mb-5">
              </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row justify-content-center text-center"  style="background-color:#320d45; height: 25em;">
                <div class="container" >
                      <div class="row">
                         <div class="col-md-7 text-left">
                          <div id="artist_header">

                         <h1>Electric Bass <br><span class="subtitle regular">with Marvin Thoaks</span></h1>
                         <p>Marvin Thoaks, over the years, has taken bass playing to a distinctive level by creating series of electric bass guitar lessons which is available to his audience online on YouTube and Facebook. Students enrolled in this course will have access to video lessons, backing tracks, breakdown of bass lines in songs.</p>
                         <p><span class="fa fa-check-circle"></span>&nbsp;Gospel, Funk, Pop and Highlife bass lessons  </p>
                         <a href="{{route('series.index')}}"><div id="durdropsubmit" class="btn ml-4" >Browse Courses</div></a>
                         {{-- <p><span class="fa fa-check-circle"></span>&nbsp;Chord and Arpeggio exercises
                         </p> --}}

                        </div>

                        </div>
                        <div class="col-md-5 text-left">
                          <div id="video_header" class="embed-responsive embed-responsive-16by9 mt-5">


                           <video width="450" height="350" controls>
                            <source src="images/pics/MARVINVIDEO.MOV" type="video/mp4">

                          </video>


                        </div>
                        </div>
                   </div>
                     </div>
                </div>
            </div>

            <div class="container mt-3">
                <div class="row align-items-stretch">

              <div class="col-md-7 col-lg-7 mb-4 mb-lg-4" >

                <div class="artist_area">
                  <h2 class="medium mt-3">What You'll Learn</h2>
                  <p class="mt-3 mb-5" style="">You will benefit from a <span style="background-color: yellow;">systematic approah</span> to learning everything about the bass guitar. Courses are designed to give you several tips to help you become a <span style="background-color: yellow;">professional bassist</span>. The entire course duration lasts for many hours; however, the lessons have been divided into short sessions to make it convenient. Our library is constantly updated to unlock your playing skills. After the basics, you will be introduced to other styles of music such as Highlife, Soukos funk, R n B etc to unlock your <span style="background-color: yellow;">versatality</span> as a bassist.</p>

                    <h3 class="semibold">Top Quality Bass Lessons</h3>
                    <ul class="3month plan-bullets hidden fa-ul" style="display: block; line-height: 3em;">
                      <li><span class="fa-li"><span class="fa fa-check"></span></span>Pre-recorded videos of high-quality</li>
                      <li><span class="fa-li"><span class="fa fa-check"></span></span>Practice at your own pace</li>
                      <li><span class="fa-li"><span class="fa fa-check"></span></span>Slow motion and Looping Videos</li>
                    </ul>
                          <hr class="mt-3 mb-3">
                      <h1 class="medium mt-3">About Marvin Thoaks</h1>
                  <p class="mt-3 mb-3" style="">Marvin Thoaks is a Bass guitar instructor from Ghana, who teaches different styles of playing Bass Guitar from Funk, Reggae, Contemporary Gospel Bass, Blues, African Style Bass, Rhythm and Blues (RnB) and Jazz amongst others. Growing up, "I listened to a lot of music genres which has influenced my play greatly".</p>

                <hr>
                    <h1 class="mt-5 mb-3">Electric Bass Lessons</h1>
            <!-- ==========================================================Beginner Accordion=================================== -->
                <div class="accordion" id="accordionExample">
              <div class="awtab_content">
                <div class="" id="headingOne">
                  <h2 class="mb-0">
                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                      <h3 class="semibold clickable"><span class="tabplusminus">+</span>&nbsp;Beginner Bass</h3>
                    </button>
                  </h2>
                  </div>
                </div>

                 <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample" style="border: 2px solid #eee;">
              <div class="card-body">
                <ul class="awtab-data-list">
                  <li class="lesson_item">Getting to know the Bass</li>
                  <li class="lesson_item">Tuning your Bass</li>
                  <li class="lesson_item">Right hand warm ups</li>
                  <li class="lesson_item">Left hand warm ups  </li>
                  <li class="lesson_item">Arpeggio ( Triads, 7ths )</li>
                  <li class="lesson_item">Chord Tones ( Triads, 7ths )</li>
                  <li class="lesson_item">Arpeggios and Chord Tones Warm up</li>
                  <li class="lesson_item">Scales ( Major and Minor )</li>
                  <li class="lesson_item">Introduction to Highlife Bass  </li>
                  <li class="lesson_item">Developing Speed</li>
                  <li class="lesson_item">Pentatonics I</li>
                  <li class="lesson_item">Metronome Exercises</li>
                  <li class="lesson_item">Sight Reading I </li>
                  <li class="lesson_item">Ear training</li>
                  <li class="lesson_item">Introduction to Chords</li>
                </ul>
              </div>
            </div>
            </div>

            <!-- -=============================================================Intermediate Accordion========================================= -->
            <div class="accordion" id="accordionExample">
              <div class="awtab_content">
                <div class="" id="headingOne">
                  <h2 class="mb-0">
                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapsetwo" aria-expanded="false" aria-controls="collapseOne">
                      <h3 class="semibold clickable"><span class="tabplusminus">+</span>&nbsp;Intermediate Bass</h3>
                    </button>
                  </h2>
                  </div>
                </div>

                 <div id="collapsetwo" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample" style="border: 2px solid #eee;">
              <div class="card-body">
                <ul class="awtab-data-list">
                  <li class="lesson_item">Introduction to Harmonics on Bass</li>
                  <li class="lesson_item">Highlife Bass II</li>
                  <li class="lesson_item">Walking Basd and Soloing</li>
                  <li class="lesson_item">Funk Bass lines </li>
                  <li class="lesson_item">R n B Bass</li>
                  <li class="lesson_item">Pentatonic II</li>
                  <li class="lesson_item">Sight Reading II</li>
                  <li class="lesson_item">Slap Bass</li>
                  <li class="lesson_item">Approaching a New Song</li>


                </ul>
              </div>
            </div>
            </div>






            <!-- =======================================Advanced accordion================================================== -->
            <div class="accordion" id="accordionExample">
              <div class="awtab_content">
                <div class="" id="headingOne">
                  <h2 class="mb-0">
                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapsethree" aria-expanded="false" aria-controls="collapsethree">
                      <h3 class="semibold clickable"><span class="tabplusminus">+</span>&nbsp;Advanced Bass</h3>
                    </button>
                  </h2>
                  </div>
                </div>

                 <div id="collapsethree" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample" style="border: 2px solid #eee;">
              <div class="card-body">
                <ul class="awtab-data-list">
                  <li class="lesson_item">Getting to know the Bass</li>
                  <li class="lesson_item">Tuning your Bass</li>
                  <li class="lesson_item">Right hand warm ups</li>
                  <li class="lesson_item">Left hand warm ups  </li>
                  <li class="lesson_item">Arpeggio ( Triads, 7ths )</li>
                  <li class="lesson_item">Chord Tones ( Triads, 7ths )</li>
                  <li class="lesson_item">Arpeggios and Chord Tones Warm up</li>
                  <li class="lesson_item">Scales ( Major and Minor )</li>

                </ul>
              </div>
            </div>
            </div>



            </div>
            </div>

              <div class="col-md-5 col-lg-5 mb-4 mb-lg-4 myplan" >
                  <div class="select_plan" style=" position: absolute; ">
                          <h2 class="medium">Select A Plan</h2>
                          <form action="{{route('checkout')}}" method="post">
                              @csrf
                              <select class="form-control" id="select-option" name="plan_id" required>
                                  <option class="input-group"  value="" >Please select your plan</option>
                                  @foreach(\App\Models\Plan::all() as $plan)
                                      <option class="input-group"  value="{{$plan->id}}" >{{$plan->name}}</option>
                                  @endforeach

                              </select>
                              @if($errors->has('plan_id'))
                                  <span class="text-danger">{{$errors->first('plan_id')}}</span>
                              @endif

                              <a href="javascript:;" onclick="parentNode.submit();"><div id="durdropsubmit" class="mt-3 btn btn-submit" >Subscribe</div></a>
                          </form>

                          <h6 class="semibold mt-3" style="font-weight: 600;">What's In This Plan</h6>
                          <hr class="mt-3 mb-3">

                          <ul class="1month plan-bullets hidden fa-ul" style="display: none; line-height: 3em;" id="1month_ul">
                              <li><span class="fa-li"><span class="fa fa-check"></span></span>Unlimited Access to Beginners Course</li>
                              <li><span class="fa-li"><span class="fa fa-check"></span></span>Music Theory Workshop</li>
                              <li><span class="fa-li"><span class="fa fa-check"></span></span>Backing Tracks for Practice in key C</li>
                          </ul>
                          <ul class="3month plan-bullets hidden fa-ul" style="display: none; line-height: 3em;" id="3month_ul">
                              <li><span class="fa-li"><span class="fa fa-check"></span></span>Unlimited Access to Lessons</li>
                              <li><span class="fa-li"><span class="fa fa-check"></span></span>5 Submissions to Teacher</li>
                              <li><span class="fa-li"><span class="fa fa-check"></span></span>Music Theory Workshop</li>
                              <li><span class="fa-li"><span class="fa fa-check"></span></span>Backing Tracks for Practice in All Keys</li>
                          </ul>
                          <ul class="6month plan-bullets hidden fa-ul" style="display: none; line-height: 3em;" id="6month_ul">
                              <li><span class="fa-li"><span class="fa fa-check"></span></span>Unlimited Access to Lessons</li>
                              <li><span class="fa-li"><span class="fa fa-check"></span></span>10 Submissions to Teacher</li>
                              <li><span class="fa-li"><span class="fa fa-check"></span></span>Music Theory Workshop<</li>
                              <li><span class="fa-li"><span class="fa fa-check"></span></span>Backing Tracks for Practice in All Keys</li>
                              <li><span class="fa-li"><span class="fa fa-check"></span></span>VIP Bonus Content</li>
                          </ul>
                          <ul class="1 year plan-bullets hidden fa-ul" style="display: none; line-height: 3em;" id="1year_ul">
                              <li><span class="fa-li"><span class="fa fa-check"></span></span>Unlimited Access to Lessons</li>
                              <li><span class="fa-li"><span class="fa fa-check"></span></span>Unlimited Submissions to Teacher</li>
                              <li><span class="fa-li"><span class="fa fa-check"></span></span>Music Theory Workshop<</li>
                              <li><span class="fa-li"><span class="fa fa-check"></span></span>Backing Tracks for Practice in All Keys</li>
                              <li><span class="fa-li"><span class="fa fa-check"></span></span>VIP Bonus Content</li>
                          </ul>
                      </div>
              </div>



            </div>
            </div>
        </div>

    <div class="site-section bg-image2 overlay" id="contact-section" style="background-image: url('images/pics/contact.jpg');">
        <div class="container">
            <div class="col-12 text-center">
            <h2 class="section-title mb-3 text-white">Contact Us</h2>
          </div>
        </div>

        <div class="row justify-content-center">
          <div class="col-lg-7 mb-5">

            <form action="#" class="p-5 bg-white">

              <h2 class="h4 text-black mb-5">Contact Form</h2>

              <div class="row form-group">
                <div class="col-md-6 mb-3 mb-md-0">
                  <label class="text-black" for="fname">First Name</label>
                  <input type="text" id="fname" class="form-control rounded-0">
                </div>
                <div class="col-md-6">
                  <label class="text-black" for="lname">Last Name</label>
                  <input type="text" id="lname" class="form-control rounded-0">
                </div>
              </div>

              <div class="row form-group">

                <div class="col-md-12">
                  <label class="text-black" for="email">Email</label>
                  <input type="email" id="email" class="form-control rounded-0">
                </div>
              </div>

              <div class="row form-group">

                <div class="col-md-12">
                  <label class="text-black" for="subject">Subject</label>
                  <input type="subject" id="subject" class="form-control rounded-0">
                </div>

              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="message">Message</label>
                  <textarea name="message" id="message" cols="30" rows="7" class="form-control rounded-0" placeholder="Leave your message here..."></textarea>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Send Message" class="btn btn-primary mr-2 mb-2">
                </div>
              </div>


            </form>
          </div>

        </div>

    </div>


@endsection

