<style>
    .skill-item img {
        width: 36%;
    }
    #services {
        background-image: url({{asset('/profile/img/bg-stats.jpg')}});
        background-size: cover;
        background-position: center center;
        background-repeat: no-repeat;
    }
</style>
<section class=" d-flex flex-column" id="services">
    <div class="p-lg-5 p-3 skill-cover">
        <h3 class="text-center text-white">Services</h3>
        <div class="row text-center my-auto ">
            <div class="col-md-4 col-sm-6">
                <div class="skill-item">
                    <img src="{{ asset('/profile/img/webdesign.jpg') }}" alt="web-design">

                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="skill-item">
                    <i class="fa fa-css3 fa-5x"></i>
                    <p>CSS3</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="skill-item">
                    <i class="fa fa-code fa-5x"></i>
                    <p>JavaScript</p>
                </div>
            </div>
        </div>
    </div>
</section>
