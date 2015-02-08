   <!-- Photos Section -->
    <section id="photos" class="photos-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Photos Section</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div id="image-container" class="col-md-12">
                <div class="col-md-4 thumb">
                    <!-- <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="This is my title" data-caption="Some lovely red flowers" data-image="http://onelive.us/wp-content/uploads/2014/08/flower-delivery-online.jpg" data-target="#image-gallery"> -->
                        <img class="img-responsive" src="images/photo1.jpg" alt="Short alt text">
                    <!--</a> -->
                </div>
                <div class="col-md-4 thumb">
                        <img class="img-responsive" src="images/photo2.jpg" alt="Short alt text">
                </div>
                <div class="col-md-4 thumb">
                        <img class="img-responsive" src="images/photo3.jpeg" alt="Short alt text">
                </div>
                <div class="col-md-4 thumb">
                        <img class="img-responsive" src="images/photo4.jpg" alt="Short alt text">
                </div>
                <div class="col-md-4 thumb">
                        <img class="img-responsive" src="images/photo5.jpg" alt="Short alt text">
                </div>
                <div class="col-md-4 thumb">
                        <img class="img-responsive" src="images/photo6.jpg" alt="Short alt text">
                </div>
            </div>
        </div>
        <div class="modal fade" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="image-gallery-title"></h4>
                    </div>
                    <div class="modal-body">
                        <img id="image-gallery-image" class="img-responsive" src="">
                    </div>
                    <div class="modal-footer">

                        <div class="col-md-2">
                            <button type="button" class="btn btn-primary" id="show-previous-image">Previous</button>
                        </div>

                        <div class="col-md-8 text-justify" id="image-gallery-caption">
                        </div>

                        <div class="col-md-2">
                            <button type="button" id="show-next-image" class="btn btn-default">Next</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>