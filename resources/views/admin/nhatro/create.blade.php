<div class="row">
    <!-- ============================================================== -->
    <!-- modal  -->
    <!-- ============================================================== -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New +</h5>
                    <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </a>
                </div>
                <div class="row">
                    <!-- ============================================================== -->
                    <!-- validation form -->
                    <!-- ============================================================== -->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card" style="margin-bottom: 0px;">
                            <div class="card-body">
                                <form action="{{ route('add_nhatro') }}" method="post" class="needs-validation"
                                    enctype="multipart/form-data" novalidate>
                                    @csrf
                                    <div class="row">
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2 ">
                                            <label for="validationCustom01">Name</label>
                                            <input type="text" class="form-control" id="validationCustom01"
                                                placeholder="Name" name="name" required>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mb-2">
                                            <label for="validationCustom02">Acreage</label>
                                            <input type="number" class="form-control" id="validationCustom02"
                                                placeholder="Acreage" name="acreage" required>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mb-2">
                                            <label for="validationCustom03">Price</label>
                                            <input type="number" class="form-control" id="validationCustom03"
                                                placeholder="Price" name="price" required>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                                            <label for="validationCustom04">Floor</label>
                                            <input type="number" class="form-control" id="validationCustom04"
                                                placeholder="Floor" name="n_floor" required>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                                            <label for="validationCustom05">Room</label>
                                            <input type="number" class="form-control" id="validationCustom05"
                                                placeholder="Room" name="n_room" required>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                                            <label for="validationCustom06">Room In Floor</label>
                                            <input type="number" class="form-control" id="validationCustom06"
                                                placeholder="Room In Floor" name="room_in_floor" required>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12 mb-2">
                                            <label for="validationCustom07">Address</label>
                                            <input type="text" class="form-control" id="validationCustom07"
                                                placeholder="Address" name="address" required>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                                            <label for="validationCustom08">Status</label>
                                            <select class="form-control" id="validationCustom08" name="status">
                                                <option>Enable</option>
                                                <option>Disable</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2 ">
                                            <label for="description">Images</label>
                                            <input type="file" class="form-control" id="images"
                                                placeholder="Choose images" name="images[]" multiple></input>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2 ">
                                            <label for="validationCustom10">Description</label>
                                            <textarea type="text" class="form-control" id="validationCustom10" placeholder="Description" name="description"></textarea>
                                        </div>
                                    </div>
                                    <div class="modal-footer col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                        <button class="btn btn-secondary" type="button" data-dismiss="modal"
                                            style="color: #000; font-weight: bold;">Close
                                        </button>
                                        <button class="btn btn-primary" type="submit"
                                            style="color: #000; font-weight: bold;">Save
                                        </button>
                                    </div>
                                </form>
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
    <!-- ============================================================== -->
    <!-- modal  -->
    <!-- ============================================================== -->
</div>
