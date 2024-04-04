    <!-- ============================================================== -->
    <!-- modal  -->
    <!-- ============================================================== -->
    <div class="modal fade" id="exampleModal_detail" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document" style="max-width: 1200px;">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="classModalLabel"></h5>
                    <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </a>
                </div>
                <div class="row">
                    <!-- ============================================================== -->
                    <!-- validation form -->
                    <!-- ============================================================== -->
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
                        <div class="card" style="margin-bottom: 0px;">
                            <div class="card-body">
                                <label for="">Images</label>
                                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img class="d-block w-100" src="/assets/images/product-pic.jpg"
                                                alt="First slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="/assets/images/product-pic-2.jpg"
                                                alt="Second slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="/assets/images/product-pic-3.jpg"
                                                alt="Third slide">
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                                        data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span> </a>
                                    <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                                        data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span> </a>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8">
                        <div class="card" style="margin-bottom: 0px;">
                            <div class="card-body">

                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2 ">
                                        <label for="validationCustom01">Name</label>
                                        <input type="text" class="form-control" id="name" name="name"
                                            readonly disabled>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mb-2">
                                        <label for="validationCustom02">Acreage</label>
                                        <input type="number" class="form-control" id="acreage" placeholder="Acreage"
                                            name="acreage" readonly disabled>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mb-2">
                                        <label for="price">Price</label>
                                        <input type="number" class="form-control" id="price" placeholder="Price"
                                            name="price" readonly disabled>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                                        <label for="validationCustom04">Floor</label>
                                        <input type="number" class="form-control" id="n_floor" placeholder="Floor"
                                            name="n_floor" readonly disabled>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                                        <label for="n_room">Room</label>
                                        <input type="number" class="form-control" id="n_room" placeholder="Room"
                                            name="n_room" readonly disabled>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                                        <label for="room_in_floor">Room In Floor</label>
                                        <input type="number" class="form-control" id="room_in_floor"
                                            placeholder="Room In Floor" name="room_in_floor" readonly disabled>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12 mb-2">
                                        <label for="address">Address</label>
                                        <input type="text" class="form-control" id="address"
                                            placeholder="Address" name="address" readonly disabled>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                                        <label for="status">Status</label>
                                        <input type="text" class="form-control" id="status"
                                            placeholder="status" name="status" readonly disabled>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2 ">
                                        <label for="description">Description</label>
                                        <textarea type="text" class="form-control" id="description" placeholder="Description" name="description"
                                            readonly disabled></textarea>
                                    </div>
                                </div>
                                <div class="modal-footer col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                    <button class="btn btn-secondary" type="button" data-dismiss="modal"
                                        style="color: #000; font-weight: bold;">Close
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end validation form -->
                    <!-- ============================================================== -->
                </div>

            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('.detailsBtn').click(function() {
                var contactId = $(this).data('class-id');
                console.log(contactId);
                $.ajax({
                    url: '/nhatro/show/' + contactId,
                    type: 'GET',
                    success: function(data) {
                        $('#classModalLabel').text(data.name);
                        $('#name').val(data.name);
                        $('#acreage').val(data.acreage);
                        $('#price').val(data.price);
                        $('#n_floor').val(data.n_floor);
                        $('#n_room').val(data.n_room);
                        $('#room_in_floor').val(data.room_in_floor);
                        $('#address').val(data.address);
                        $('#status').val(data.status);
                        $('#description').val(data.description);
                        $('#exampleModal_detail').modal('show');
                    },
                    error: function() {
                        alert('Đã xảy ra lỗi khi lấy dữ liệu.');
                    }
                });
            });
        });
    </script>
