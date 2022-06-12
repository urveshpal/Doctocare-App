@extends('common.main')
@section('main-section')
    <div class="container marketing py-5">
        <!-- Three columns of text below the carousel -->
        <div class="row">
            <div class="col-lg-4">
                <img src="{{ url('userDashboard/img/269.jpg') }}" class="bd-placeholder-img rounded-circle shadow"
                    width="140" height="140" alt="">
                <h2>Book an Appointment</h2>
                <p>Some representative placeholder content for the three columns of text below the carousel. This is the
                    first
                    column.</p>
                <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <img src="{{ url('userDashboard/img/medicine.jpg') }}" class="bd-placeholder-img rounded-circle shadow"
                    width="140" height="140" alt="">

                <h2>Order Medicines</h2>
                <p>Another exciting bit of representative placeholder content. This time, we've moved on to the second
                    column.
                </p>
                <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <img src="{{ url('userDashboard/img/ambulance.jpg') }}" class="bd-placeholder-img rounded-circle shadow"
                    width="140" height="140" alt="">

                <h2>Book an Ambulance</h2>
                <p>And lastly this, the third column of representative placeholder content.</p>
                <p class="align-item-center"><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->


        <!-- START THE FEATURETTES -->

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It’ll blow your
                        mind.</span>
                </h2>
                <p class="lead">Some great placeholder content for the first featurette here. Imagine some
                    exciting prose
                    here.</p>
            </div>
            <div class="col-md-5">
                <img src="{{ url('userDashboard/img/download.jpg') }}"
                    class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
                    height="500" alt="">

            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7 order-md-2">
                <h2 class="featurette-heading">Oh yeah, it’s that good. <span class="text-muted">See for
                        yourself.</span></h2>
                <p class="lead">Another featurette? Of course. More placeholder content here to give you an
                    idea of how this
                    layout would work with some actual real-world content in place.</p>
            </div>
            <div class="col-md-5 order-md-1">
                <img src="{{ url('userDashboard/img/download (1).jpg') }}"
                    class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
                    height="500" alt="">

            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
                <p class="lead">And yes, this is the last block of representative placeholder content. Again,
                    not really
                    intended to be actually read, simply here to give you a better view of what this would look like
                    with some
                    actual content. Your content.</p>
            </div>
            <div class="col-md-5">
                <img src="{{ url('userDashboard/img/download (2).jpg') }}"
                    class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
                    height="500" alt="">
            </div>
        </div>

        <hr class="featurette-divider">

        <!-- /END THE FEATURETTES -->

    </div><!-- /.container -->


    <!-- FOOTER -->
@endsection

</body>

</html>
