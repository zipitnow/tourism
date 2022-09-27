@extends('frontend.layout.layout')

@section('content')
    <!-- Head -->
    <section class="features-head bg-primary py-3">
        <div class="container grid">
            <div>
                <h1 class="xl">Afofida</h1>
                <p class="lead">
                    Welcome To The Holidays
                </p>
                <p>
                    Check out the features of Afofida that separate us from the
                    competitionoptio accusantium? provident voluptate facere non dolor nisi amet officia obcaecati
                    optio accusantium?
                </p>

            </div>
            <img src="../images/culture/img_header.png" alt="" />
        </div>
    </section>
    {{-- About Secction --}}

    <section id=" bg-light ">
        <div class="container-fluid bg-light ">
            <div class="row justify-content-center align-items-center p-5 ">
                <div class="col text-start text-md-end">
                    <div class="h1">About Us</div>
                    <div class="lead text-muted">WHO WE ARE</div>
                    <p class="lead my-4 text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Error
                        laudantium ex reprehenderit quam sed beatae.</p>
                    <a href="#bookpage" class="btn btn-secondary btn-md">Learn more</a>
                </div>
                <div class="col text-center d-none d-md-block ">
                    <img src="../images/culture/nkrumah.png" alt="" class="img-fluid">
                </div>
                <div class="col text-start text-md-end ">
                    <div class="h1">Our History</div>
                    <div class="lead text-muted"> WHERE WE BEGAN </div>

                    <p class="lead my-3 text-muted ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Error  reprehenderit quam sed beatae.</p>
                    <a href="#aboutpage" class="btn btn-secondary btn-md  mt-5">Learn more</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Genreal Service Info -->
    <!-- Toursit Sites -->
    <section class="artifact-wrapper">
        <div class="contain grid">
            <div class="info">
                <h1>Tourist Sites Available</h1>
                <p>And now outpour or sitting from the explore bust. The something still fiend soul a a and gaunt. From
                    smiling. lenore broken i here is. At before bore saintly there footfalls hear, raven syllable gently as
                    pallas thy. Then.</p>

                <a href="" class="btn" class="btn-lg">Explore More</a>
            </div>
            <div class="tour_gallery">
                <h1>Gallery</h1>


                <div class="slider ">
                    <div class="slide current">

                    </div>
                    <div class="slide ">
                    </div>
                    <div class="slide ">
                    </div>
                    <div class="button">
                        <button id="prev"><i class="fas fa-arrow-left"></i></button>
                        <button id="next"><i class="fas fa-arrow-right"></i></button>
                    </div>

                </div>



            </div>
        </div>
    </section>

    <!-- Artifacts -->
    <section class="artifact-wrapper">
        <div class=" contain grid">
            <div class="info">
                <h1>Artifact Available</h1>
                <p>AAnd now outpour or sitting from the explore bust. The something still fiend soul a a and gaunt. From
                    smiling. lenore broken i here is. At before bore saintly there footfalls hear, raven syllable gently as
                    pallas thy. Then.</p>

                <a href="" class="btn" class="btn-lg">Explore More</a>
            </div>
            <div class="tour_gallery">
                <h1>Gallery</h1>


                <div class="slider ">
                    <div class="slide current">

                    </div>
                    <div class="slide ">
                    </div>
                    <div class="slide ">
                    </div>
                    <div class="button">
                        <button id="prev"><i class="fas fa-arrow-left"></i></button>
                        <button id="next"><i class="fas fa-arrow-right"></i></button>
                    </div>

                </div>



            </div>
        </div>
    </section>
@endsection
