@extends('layouts.app')

@section('content')
    <div class="container">
        <br />

        <div class="text-center block-text" style="      background: black;
  color: #fff;">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="block-title block-title_md">Dr.Ho Clinic

                        </h2>

                    </div>
                    <div class="col-12 col-md-4">
                        <span class="icon-check icon-check_white m-b-15"></span>
                        <p>High quality doctor</p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                            class="bi bi-person-check" viewBox="0 0 16 16">
                            <path
                                d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm1.679-4.493-1.335 2.226a.75.75 0 0 1-1.174.144l-.774-.773a.5.5 0 0 1 .708-.708l.547.548 1.17-1.951a.5.5 0 1 1 .858.514ZM11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z" />
                            <path
                                d="M8.256 14a4.474 4.474 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10c.26 0 .507.009.74.025.226-.341.496-.65.804-.918C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4s1 1 1 1h5.256Z" />
                        </svg>
                    </div>
                    <div class="col-12 col-md-4">
                        <span class="icon-check icon-check_white m-b-15"></span>
                        <p>Good service</p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                            class="bi bi-hand-thumbs-up" viewBox="0 0 16 16">
                            <path
                                d="M8.864.046C7.908-.193 7.02.53 6.956 1.466c-.072 1.051-.23 2.016-.428 2.59-.125.36-.479 1.013-1.04 1.639-.557.623-1.282 1.178-2.131 1.41C2.685 7.288 2 7.87 2 8.72v4.001c0 .845.682 1.464 1.448 1.545 1.07.114 1.564.415 2.068.723l.048.03c.272.165.578.348.97.484.397.136.861.217 1.466.217h3.5c.937 0 1.599-.477 1.934-1.064a1.86 1.86 0 0 0 .254-.912c0-.152-.023-.312-.077-.464.201-.263.38-.578.488-.901.11-.33.172-.762.004-1.149.069-.13.12-.269.159-.403.077-.27.113-.568.113-.857 0-.288-.036-.585-.113-.856a2.144 2.144 0 0 0-.138-.362 1.9 1.9 0 0 0 .234-1.734c-.206-.592-.682-1.1-1.2-1.272-.847-.282-1.803-.276-2.516-.211a9.84 9.84 0 0 0-.443.05 9.365 9.365 0 0 0-.062-4.509A1.38 1.38 0 0 0 9.125.111L8.864.046zM11.5 14.721H8c-.51 0-.863-.069-1.14-.164-.281-.097-.506-.228-.776-.393l-.04-.024c-.555-.339-1.198-.731-2.49-.868-.333-.036-.554-.29-.554-.55V8.72c0-.254.226-.543.62-.65 1.095-.3 1.977-.996 2.614-1.708.635-.71 1.064-1.475 1.238-1.978.243-.7.407-1.768.482-2.85.025-.362.36-.594.667-.518l.262.066c.16.04.258.143.288.255a8.34 8.34 0 0 1-.145 4.725.5.5 0 0 0 .595.644l.003-.001.014-.003.058-.014a8.908 8.908 0 0 1 1.036-.157c.663-.06 1.457-.054 2.11.164.175.058.45.3.57.65.107.308.087.67-.266 1.022l-.353.353.353.354c.043.043.105.141.154.315.048.167.075.37.075.581 0 .212-.027.414-.075.582-.05.174-.111.272-.154.315l-.353.353.353.354c.047.047.109.177.005.488a2.224 2.224 0 0 1-.505.805l-.353.353.353.354c.006.005.041.05.041.17a.866.866 0 0 1-.121.416c-.165.288-.503.56-1.066.56z" />
                        </svg>
                    </div>
                    <div class="col-12 col-md-4">
                        <span class="icon-check icon-check_white m-b-15"></span>
                        <p>Afforable price</p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                            class="bi bi-tags" viewBox="0 0 16 16">
                            <path
                                d="M3 2v4.586l7 7L14.586 9l-7-7H3zM2 2a1 1 0 0 1 1-1h4.586a1 1 0 0 1 .707.293l7 7a1 1 0 0 1 0 1.414l-4.586 4.586a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 2 6.586V2z" />
                            <path
                                d="M5.5 5a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1zm0 1a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zM1 7.086a1 1 0 0 0 .293.707L8.75 15.25l-.043.043a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 0 7.586V3a1 1 0 0 1 1-1v5.086z" />
                        </svg>
                    </div>
                </div>
            </div>
            <br />
        </div>
        <br />
        <br />
        <section>
            <div class="row row-cols-1 row-cols-md-2 g-0">
                <div class="col">
                    <div class="card border-0">
                        <img src={{ asset('clinicPicture.jpg') }} class="card-img-top" alt="">
                    </div>
                </div>
                <div class="col" style="    padding-left: 30px;">
                    <div class="card border-0">
                        <div class="card-body">
                            <h3 class="card-title">Dr. Ho Clinic! A clinic started from 2015!</h3>
                            <p class="card-text">We are a committed group of medical professionals that are committed to
                                giving our patients the best possible care. You can obtain complete healthcare services at
                                our clinic in a friendly, secure setting that is tailored to your specific need.&nbsp;</p>
                            <p class="card-text">In our clinic, we hold the view that everyone, regardless of background or
                                circumstance, should have access to healthcare. By upholding the highest standards of
                                medical expertise, we work hard to offer all of our patients care that is both affordable
                                and compassionate.</p>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <br />
        <br />
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title">Experienced team!</h3>
                            <p class="card-text">
                                Our group of skilled medical professionals, nurses, and support personnel are here to make
                                certain that you get the best care possible. We practise patient-centered care, which
                                entails close collaboration with you to create a specialised treatment strategy that takes
                                into account your particular requirements and worries.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <img src={{ asset('doctors.jpg') }} class="card-img-top" alt="">
                    </div>
                </div>
            </div>
        </div>

        <h2 class="text-center">Our Founders</h2>
        <p class="lead text-center mb-5">
            Our founders all have 10+ years working as a doctor in the industry
        </p>
        <div class="row g-4">
            <div class="col-md-6 col-lg-3">
                <div class="card bg-light">
                    <div class="card-body text-center">
                        <img src="https://xsgames.co/randomusers/assets/avatars/male/67.jpg" class="rounded-circle mb-3"
                            alt="" width="100%" />
                        <h3 class="card-title mb-3">Dr. Ho</h3>
                        <p class="card-text">
                            Founder of Dr.Ho clicnic, he has 15 years experience in healthcare.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="card bg-light" style="height: 90%;">
                    <div class="card-body text-center">
                        <img src="https://xsgames.co/randomusers/assets/avatars/male/21.jpg" class="rounded-circle mb-3"
                            alt="" width="100%" />
                        <h3 class="card-title mb-3">Dr. Yong</h3>
                        <p class="card-text">
                            Co-founder of Dr. Ho clinic, he has 10 years experience in orthopedics.
                        </p>
                        <a href="#"><i class="bi bi-twitter text-dark mx-1"></i></a>
                        <a href="#"><i class="bi bi-facebook text-dark mx-1"></i></a>
                        <a href="#"><i class="bi bi-linkedin text-dark mx-1"></i></a>
                        <a href="#"><i class="bi bi-instagram text-dark mx-1"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="card bg-light">
                    <div class="card-body text-center">
                        <img src="https://xsgames.co/randomusers/assets/avatars/male/20.jpg" class="rounded-circle mb-3"
                            alt="" width="100%" />
                        <h3 class="card-title mb-3">Dr. Hai</h3>
                        <p class="card-text">
                            Co-founder of Dr. Ho clinic, he has 10 years experience in cardiology.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="card bg-light">
                    <div class="card-body text-center">
                        <img src="https://xsgames.co/randomusers/assets/avatars/female/23.jpg" class="rounded-circle mb-3"
                            alt="" width="100%" />
                        <h3 class="card-title mb-3">Dr. Wee</h3>
                        <p class="card-text">
                            Co-founder of Dr. Ho clinic, she has 10 years experience in dermatology.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br />
    <br />
    <h1 style="text-align: center;">Where our clinic located?</h1>
    <br /><br />
    <div class="google-map" style="text-align: center;">

        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63749.369116873386!2d101.3577783021111!3d3.004070075898394!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cdab41c005abe1%3A0x23801912ca427896!2sKelinik%20Ho!5e0!3m2!1sen!2smy!4v1680595177850!5m2!1sen!2smy"
            width="1100" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
@endsection
