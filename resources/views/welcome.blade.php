@extends('layout')

@section('title', 'Personal Portfolio')

@section('content')
    <!-- Header Start -->
    <div class="container-fluid bg-light my-6 mt-0" id="home">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 py-6 pb-0 pt-lg-0">
                    <h3 class="text-primary mb-3">I'm</h3>
                    <h1 class="display-3 mb-3">Mohammad Affan Shofi</h1>
                    <h2 class="typed-text-output d-inline"></h2>
                    <div class="typed-text d-none">Web Developer Enthusiast, Fullstack Developer, Web Designer</div>
                    <div class="d-flex align-items-center pt-5">
                        <a target="_blank" href="https://www.linkedin.com/in/mohammad-affan-shofi-4108ba249/" class="btn btn-primary py-3 px-4 me-5">LinkedIn</a>
                        <button type="button" class="btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/8uHWfFPNN4A" data-bs-target="#videoModal">
                            <span></span>
                        </button>
                        <h5 class="ms-4 mb-0 d-none d-sm-block">Play Video Tutorial</h5>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img class="img-fluid" src="{{ asset('img/profile.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

     <!-- Video Modal Start -->
     <div class="modal modal-video fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">Youtube Video Tutorial</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- 16:9 aspect ratio -->
                    <div class="ratio ratio-16x9">
                        <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always"
                            allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Modal End -->


    <!-- About Start -->
    <div class="container-xxl py-6" id="about">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="d-flex align-items-center mb-5">
                        <div class="years flex-shrink-0 text-center me-4">
                            <h1 class="display-1 mb-0">3</h1>
                            <h5 class="mb-0">Years</h5>
                        </div>
                        <h3 class="lh-base mb-0">Experience in designing and developing responsive and intuitive websites.</h3>
                    </div>
                    <p class="mb-4">As a passionate web developer, I have undertaken various projects that enhanced my skills. These projects include responsive design, web application development, and implementing the latest technologies. With a vision to become a professional web developer, I am committed to continuous learning.</p>
                    <p class="mb-3"><i class="far fa-check-circle text-primary me-3"></i>Diversified Projects</p>
                    <p class="mb-3"><i class="far fa-check-circle text-primary me-3"></i>Focused on Quality</p>
                    <p class="mb-3"><i class="far fa-check-circle text-primary me-3"></i>Continuous Learning</p>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <ul class="nav nav-pills rounded border border-1 border-primary mb-5">
                        <li class="nav-item w-100">
                            <button class="nav-link w-100 py-3 fs-5" data-bs-toggle="pill" href="#tab-1">Education</button>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane fade show p-0">
                            <div class="row gy-5 gx-6">
                                <div class="col-sm-6">
                                    <h5>Information System</h5>
                                    <hr class="text-primary my-2">
                                    <p class="text-primary mb-1">2022 - Now</p>
                                    <h6 class="mb-0">Sepuluh Nopember Institute of Technology University</h6>
                                </div>
                                <div class="col-sm-6">
                                    <h5>Science Major</h5>
                                    <hr class="text-primary my-2">
                                    <p class="text-primary mb-1">2019 - 2022</p>
                                    <h6 class="mb-0">Al-Izzah Batu Senior High School</h6>
                                </div>
                                <div class="col-sm-6">
                                    <h5>Junior High School</h5>
                                    <hr class="text-primary my-2">
                                    <p class="text-primary mb-1">2015 - 2018</p>
                                    <h6 class="mb-0">Al-Hidayah Islamic Integrated Junior High School</h6>
                                </div>
                                <div class="col-sm-6">
                                    <h5>Elementary School</h5>
                                    <hr class="text-primary my-2">
                                    <p class="text-primary mb-1">2009 - 2015</p>
                                    <h6 class="mb-0">Pajagalan 2 Public Elementary School</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Expertise Start -->
    <div class="container-xxl py-6 pb-5" id="skill">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="display-5 mb-5">Skills</h1>
                    <p class="mb-4">I have strong skills in web development, especially in HTML, CSS, and JavaScript. Additionally, I am proficient in using Bootstrap to accelerate the development of modern, responsive designs. My skills continue to grow as I learn new technologies and frameworks.</p>
                    <h3 class="mb-4">My Skills</h3>
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="skill mb-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="font-weight-bold">HTML</h6>
                                    <h6 class="font-weight-bold">95%</h6>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="skill mb-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="font-weight-bold">CSS</h6>
                                    <h6 class="font-weight-bold">90%</h6>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="skill mb-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="font-weight-bold">Bootstrap</h6>
                                    <h6 class="font-weight-bold">85%</h6>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-info" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="skill mb-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="font-weight-bold">Javascript</h6>
                                    <h6 class="font-weight-bold">80%</h6>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Expertise End -->


    <!-- Service Start -->
    @php
        // Array of services
        $services = [
            [
                'title' => 'Contoh 1',
                'link' => '/contoh1'
            ],
            [
                'title' => 'Contoh 2',
                'link' => '/contoh2'
            ],
            [
                'title' => 'Week 1',
                'link' => '/Week1'
            ],
        ];
    @endphp

        <div class="container-fluid bg-light my-5 py-6" id="service">
            <div class="container">
                <div class="row g-5 mb-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="col-lg-6">
                        <h1 class="display-5 mb-0">My Assignment</h1>
                    </div>
                </div>
                <div class="row g-4">
                    @foreach ($services as $service)
                        <div class="col-lg-6">
                            <a href="{{ $service['link'] }}" class="service-item-link">
                                <div class="service-item d-flex align-items-center justify-content-between bg-white rounded h-100 p-4 position-relative">
                                    <h4 class="mb-0">{{ $service['title'] }}</h4>
                                    <span class="icon-arrow">&gt;</span> <!-- Ikon panah di sebelah kanan -->
                                </div>
                            </a>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    <!-- Service End -->


    <!-- Contact Start -->
    <div class="container-xxl pb-5" id="contact">
        <div class="container py-5">
            <div class="row g-5 mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-lg-6">
                    <h1 class="display-5 mb-0">Let's Learn Together</h1>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-lg-5 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <p class="mb-2">My office:</p>
                    <h3 class="fw-bold"><a class="text-dark" href="https://www.google.com/maps?ll=-7.280604,112.796738&z=16&t=m&hl=id&gl=ID&mapclient=embed&cid=9502410386968605378" target="_blank">Kampus ITS, Surabaya, Jawa Timur, Indonesia</a></h3>
                    <hr class="w-100">
                    <p class="mb-2">Call me:</p>
                    <h3 class="fw-bold text-dark"><a class="text-dark" href="http://wa.me/6281336464103" target="_blank">+62 813 3646 4103</h3>
                    <hr class="w-100">
                    <p class="mb-2">Mail me:</p>
                    <h3 class="fw-bold text-dark"><a class="text-dark" href="http://mailto:affan8971@gmail.com" target="_blank">affan8971@gmail.com</h3>
                    <hr class="w-100">
                    <p class="mb-2">Follow me:</p>
                    <div class="d-flex pt-2">
                        <a target="_blank" class="btn btn-square btn-primary me-2" href="https://www.linkedin.com/in/mohammad-affan-shofi-4108ba249/"><i class="fab fa-linkedin-in"></i></a>
                        <a target="_blank" class="btn btn-square btn-primary me-2" href="https://www.instagram.com/mohammadaffans/"><i class="fab fa-instagram"></i></a>
                        <a target="_blank" class="btn btn-square btn-primary me-2" href="https://x.com/ShofiAffan"><i class="fab fa-twitter"></i></a>
                        <a target="_blank" class="btn btn-square btn-primary me-2" href="https://www.youtube.com/@MASChannelYoutube/featured"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                <div class="col-lg-7 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <p class="mb-4">Want to get in touch? Fill out the form below, and I'll respond promptly. Your message will be sent to my WhatsApp with the details you provide. Feel free to reach out with any questions or project ideas!</a>.</p>
                    <form action="" onsubmit="sendMessage()" method="post">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" placeholder="Your Name">
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input id="email" type="email" class="form-control" id="email" placeholder="Your Email">
                                    <label for="email">Your Email</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input id="subject"  type="text" class="form-control" placeholder="Subject">
                                    <label for="subject">Subject</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea id="message" class="form-control" placeholder="Leave a message here" style="height: 100px"></textarea>
                                    <label for="message">Message</label>
                                </div>
                            </div>
                            <button class="btn btn-primary py-3 px-5" type="submit">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


    <!-- Map Start -->
    <div class="container-xxl pt-5 px-0 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container-xxl pt-5 px-0">
            <div class="bg-dark">
                <iframe target="_blank"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.650011943026!2d112.7941626757505!3d-7.280603992726671!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fa16b145e469%3A0x83df57e6a93ef2c2!2sDepartemen%20Sistem%20Informasi%20ITS!5e0!3m2!1sid!2sid!4v1728314062398!5m2!1sid!2sid"
                frameborder="0" style="width: 100%; height: 450px; border:0;" allowfullscreen="" aria-hidden="false"
                tabindex="0"></iframe>
            </div>
        </div>
    </div>
    <!-- Map End -->
@endsection
