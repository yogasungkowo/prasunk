@extends('main.main')
@section('container')
    

<header>

        <section id="header">
            <div
                class="jumbotron jumbotron-fluid text-white d-flex align-items-center text-left justify-content-center">
                <div class="container col-xl-auto me-2">
                    <h1 class="fs-1 fw-bold">Hi, </h1>
                    <h1 class="fs-1 fw-bold">I'm Prayoga <span style="color: #8FFF00">$</span>ungkowo</h1>
                    <h1 class="fs-3 fw-bold" style="color: #8FFF00">$ ~ <span class="running-text"></span></h1>
                    <div class="social img-fluid mt-3">
                        <a href="https://www.instagram.com/prayogasungkowo/" target="_blank"><img class="me-3"
                                src="/asset/instagram.png" alt="instagram" style="width: 44px, height: 44px"></a>
                        <a href="https://www.linkedin.com/in/prayoga-sungkowo/" target="_blank"><img class="me-3"
                                src="/asset/linkedin_1.png" alt="linkedin" style="width: 40px; height: 40px"></a>
                        <a href="https://github.com/yogasungkowo" target="_blank"><img src="/asset/github.png"
                                alt="github" style="width: 44px; height: 44px"></a>
                    </div>
                    <h1 class="fs-3 mt-2 fw-bold" style="color: #8FFF00">$ ~ <a href="/asset/cv_yoga.pdf"
                            target="_blank" class="text-decoration-none"><span class="tulisan-merah"
                                style="color: #FF1E1E">Download My CV</span></a></h1>
                </div>
                <div data-aos="zoom-in-up" class="image-container container ms-1 my-5">
                    <img class="yoga rounded-4" src="/asset/prayoga_sungkowo.jpg" alt="Prayoga Sungkowo">
                </div>
            </div>
        </section>
    </header>

    <main>
        <section id="about">
            <h1 data-aos="fade-up" aos-hide class="text-white fw-bold fs-1 d-flex justify-content-center my-5">About
            </h1>
            <div data-aos="fade-up" class="container d-flex justify-content-center" data-bs-theme="dark">
                <div class="image-about">
                    <img data-aos="fade-up" class="yoga-about rounded-4" style="width: 315px; height: 475px"
                        src="/asset/yoga_4.jpg" alt="Prayoga Sungkowo">
                </div>
                <div class="about-text ms-5">
                    <h3 class="fs-3 fw-bold text-white mb-5"><span style="color:#8FFF00; font-weight:bold">$ ~</span>
                        Hello!</h3>
                    <h3 class="fs-3 fw-bold text-white my-5"><span style="color:#8FFF00; font-weight:bold">$ ~</span>
                        Name <span class="about-name" style="color: #8FFF00; margin-left: 100px"></span></h3>
                    <h3 class="fs-3 fw-bold text-white my-5"><span style="color:#8FFF00; font-weight:bold">$ ~</span>
                        Country <span class="about-country" style="color: #8FFF00; margin-left: 70px"></span>
                    </h3>
                    <h3 class="fs-3 fw-bold text-white my-5"><span style="color:#8FFF00; font-weight:bold">$ ~</span>
                        Email <span class="about-email" style="color: #8FFF00; margin-left: 105px"></span></h3>
                    <h3 class="fs-3 fw-bold text-white my-5"><span style="color:#8FFF00; font-weight:bold">$ ~</span>
                        Phone <span class="about-phone" style="color: #8FFF00; margin-left: 90px"></span></h3>
                    <h3 class="fs-3 fw-bold mt-5" style="color:#8FFF00">$ ~ <a class="text-decoration-none"
                            href="/asset/cv_yoga.pdf" target="_blank"><span class="tulisan-merah"
                                style="color:#FF1E1E; font-weight:bold">Download My CV</span></a></h3>
                </div>
            </div>
        </section>

        <section id="cert">
            <h1 data-aos="fade-up" class="text-white fw-bold fs-1 d-flex justify-content-center my-5">Certifications
            </h1>
            <div class="container d-flex justify-content-center" data-aos="fade-right"
                data-aos-easing="ease-in-sine">
                <div class="ps-5">
                    <img src="/asset/Sertifikat1.png" alt="Linux System Administration ADINUSA">
                </div>
                <div class="ms-5 col-md-7 align-items-center">
                    <h3 class="fw-bold fs-4" style="color: #8FFF00">$ ~ <span style="color: white">Linux System
                            Administrator - Adinusa</span></h3>
                    <p class="fw-bold fs-8 col-xl-9 " style="color: #C9C9C9">Certificates given after
                        successfully completing
                        courses and exams related to Linux System Administration at Adinusa, including
                    <ol class="fs-8" style="color:#C9C9C9">
                        <li>File Management</li>
                        <li>User Management</li>
                        <li>Storage Management</li>
                        <li>Container</li>
                    </ol>
                    </p>
                    <h3 class="fw-bold fs-4 pt-2" style="color: #8FFF00">$ ~ <a class="text-decoration-none"
                            href="https://adinusa.id/course/publisher/show/a5413e28-5a30-4535-b698-f3bfd38d4fe3"
                            target="_blank"><span class="tulisan-merah" style="color:#FF1E1E">See
                                Credentials</span></a></h3>
                </div>
            </div>
            <div class="container d-flex justify-content-center mt-5 align-items-center" data-aos="fade-right"
                data-aos-easing="ease-in-sine">
                <div class="ps-5">
                    <img src="/asset/Sertifikat2.png" alt="Linux System Administration ADINUSA">
                </div>
                <div class="ms-5 col-md-7 align-items-center">
                    <h3 class="fw-bold fs-4" style="color: #8FFF00">$ ~ <span style="color: white">Junior Web
                            Developer - BNSP</span></h3>
                    <p class="fw-bold fs-8 col-xl-9 " style="color: #C9C9C9">
                        Certification held by the National Professional Certification Agency (BNSP), after successfully
                        passing the eligibility test to hold the Junior Web Developer professional title.
                    <ol class="fw-bold" style="color:#C9C9C9">
                        <li>Web Development</li>
                    </ol>
                    </p>
                    <h3 class="fw-bold fs-4 pt-2" style="color: #8FFF00">$ ~ <a class="text-decoration-none"
                            href="https://adinusa.id/course/publisher/show/a5413e28-5a30-4535-b698-f3bfd38d4fe3"
                            target="_blank"><span class="tulisan-merah" style="color:#FF1E1E">See
                                Credentials</span></a></h3>
                </div>
            </div>
            <div class="container d-flex justify-content-center mt-5 align-items-center" data-aos="fade-right"
                data-aos-easing="ease-in-sine">
                <div class="ps-5">
                    <img src="/asset/Sertifikat3.png" alt="Linux System Administration ADINUSA">
                </div>
                <div class="ms-5 col-md-7 align-items-center">
                    <h3 class="fw-bold fs-4" style="color: #8FFF00">$ ~ <span style="color: white">IBM Cloud
                            Essentials</span></h3>
                    <p class="fw-bold fs-8 col-xl-9 " style="color: #C9C9C9">
                        Certificate awarded after successfully completing the IBM Cloud Essentials course, as well as
                        successfully completing the Final Exam from IBM Cloud Essentials.
                    <ol class="fw-bold" style="color:#C9C9C9">
                        <li>IBM Cloud Product</li>
                        <li>IBM Cloud Practitioner</li>
                    </ol>
                    </p>
                    <h3 class="fw-bold fs-4 pt-2" style="color: #8FFF00">$ ~ <a class="text-decoration-none"
                            href="https://adinusa.id/course/publisher/show/a5413e28-5a30-4535-b698-f3bfd38d4fe3"
                            target="_blank"><span class="tulisan-merah" style="color:#FF1E1E">See
                                Credentials</span></a></h3>
                </div>
            </div>
        </section>

        <section id="experience">
            <h1 data-aos="fade-up" class="text-white fw-bold fs-1 d-flex justify-content-center my-5">Experience</h1>
            <div class="container d-flex justify-content-center mt-5 align-items-center" data-aos="fade-right"
                data-aos-easing="ease-in-sine">
                <div class="ps-5">
                    <img class="rounded" style="width: 407px; height: 513px" src="/asset/experience1.jpg"
                        alt="HCAI Infinite Learning">
                </div>
                <div class="ms-5 col-md-7 align-items-center">
                    <h3 class="fw-bold fs-4" style="color: #8FFF00">$ ~ <span style="color: white">Hybrid Cloud and
                            AI - IBM &
                            RHCSA Course At Infinite Learning Indonesia</span></h3>
                    <p class="fw-bold fs-8 col-xl-9 " style="color: #C9C9C9">
                        At Infinite Learning, I am participating in the MBKM MSIB program from KampusMerdeka, which is
                        the Red Hat Certified System Administrator - IBM AI & Cybersecurity Independent Study. In this
                        program, I am learning:
                    <ol class="fw-bold" style="color:#C9C9C9">
                        <li>IBM Artificial Intelligence</li>
                        <li>IBM Cybersecurity</li>
                        <li>RedHat System Administration</li>
                        <li>Professional Soft Skills</li>
                        <li>Project Collaboration</li>
                        <li>IBM SkillsBuild</li>
                    </ol>
                    </p>
                    <h3 class="fw-bold fs-4 pt-2" style="color: #8FFF00">$ ~ <a class="text-decoration-none"
                            href="https://linkedin.com/in/prayoga-sungkowo/" target="_blank"><span
                                class="tulisan-merah" style="color:#FF1E1E">See More</span></a></h3>
                </div>
            </div>
            <div class="container d-flex justify-content-center mt-5 align-items-center" data-aos="fade-right"
                data-aos-easing="ease-in-sine">
                <div class="ps-5">
                    <img class="rounded-4" style="width: 407px; height: 513px" src="/asset/experience2.jpg"
                        alt="PT Mabar Feed Indonesia">
                </div>
                <div class="ms-5 col-md-7 align-items-center">
                    <h3 class="fw-bold fs-4" style="color: #8FFF00">$ ~ <span style="color: white">IT Support
                            Internship at PT Mabar Feed Indonesia</span></h3>
                    <p class="fw-bold fs-8 col-xl-9 " style="color: #C9C9C9">
                        I work as internship student at PT Mabar Feed Indonesia as IT Support Specialist. I do several
                        things like maintance the server, configuration the network, and migrating database.
                    </p>
                    <h3 class="fw-bold fs-4 pt-2" style="color: #8FFF00">$ ~ <a class="text-decoration-none"
                            href="https://linkedin.com/in/prayoga-sungkowo" target="_blank"><span
                                class="tulisan-merah" style="color:#FF1E1E">See More</span></a></h3>
                </div>
            </div>
        </section>

        <section id="article">
            <h1 data-aos="fade-up" class="text-white fw-bold fs-1 d-flex justify-content-center my-5">Article</h1>
            <div class="card_wrapper rounded-5">
                <div class="container" data-aos="fade-up">
                    <div class="row">
                        <div class="col-12">
                            <div class="owl-carousel slider_carousel">
                                @foreach ($post as $posts)
                                <div class="card_box">
                                    <div class="container-img">
                                        <img class="img-fluid w-100 rounded-5" src="{{ asset('/storage/article/'. $posts->image) }}"
                                        alt="Article Image">
                                    </div>
                                    <div class="card_text">
                                        <h4>{{ $posts->title }}</h4>
                                        <p class="post-body text-white">{!! Str::words($posts->body, 10, '...') !!}</p>
                                        <p>{{ $posts->created_at->diffForHumans() }}</p>
                                        <a href="/article/{{ $posts->slug }}" class="btn btn-dark">See more</a>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="contact">
            <div class="container d-flex justify-content-center">
                <div class="col-md-4">
                    <form method="POST" action="{{ route('contact.submit') }}" data-aos="fade-right">
                        @csrf
                        @method('POST')
                        <div class="group">
                            <input type="text" required>
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label>Name</label>
                        </div>

                        <div class="group">
                            <input type="email" required>
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label>Email</label>
                        </div>

                        <div class="group">
                            <textarea name="thoughts"></textarea>
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label>Your Thoughts</label>
                        </div>
                        <button class="btn btn-dark">
                            Submit
                        </button>
                    </form>
                </div>
                <div class="col-md-4" data-aos="fade-left">
                    <h1 class="fw-bold text-white contact-text">Contact</h1>
                    <h1 class="contact-text" style="color: #8FFF00">$ ~ <span
                            style="color: #ffff; font-weight: bold;">Me</span></h1>
                </div>
            </div>
        </section>

        <footer>
            <div class="p-3" style="background:#000000">
                <div class="social img-fluid mt-3 d-flex justify-content-center align-items-center">
                    <div class="logo-footer" style="margin-right: 100px">
                        <a class="text-decoration-none text-white fs-1" style="margin-left: 50px !important;"
                            href="#">Prasunk</a>
                    </div>
                    <a href="https://www.instagram.com/prayogasungkowo/" target="_blank"><img class="me-5"
                            src="/asset/instagram.png" alt="instagram" style="width: 44px, height: 44px"></a>
                    <a href="https://www.linkedin.com/in/prayoga-sungkowo/" target="_blank"><img class="me-5"
                            src="/asset/linkedin_1.png" alt="linkedin" style="width: 40px; height: 40px"></a>
                    <a href="https://github.com/yogasungkowo" target="_blank"><img src="/asset/github.png"
                            alt="github" style="width: 44px; height: 44px"></a>
                    <p class="text-white fs-5 align-items-center" style="margin-left: 50px">Made with love by <a
                            class="text-decoration-none" href="https://www.linkedin.com/in/prayoga-sungkowo/"
                            target="_blank"><span class="fw-bold" style="color: #FF1E1E;">Prayoga Sungkowo</span></a>
                    </p>
                </div>
            </div>
        </footer>
    </main>

    

</html>
@endsection