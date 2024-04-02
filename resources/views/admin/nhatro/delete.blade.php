<div class="row">
    <!-- ============================================================== -->
    <!-- modal  -->
    <!-- ============================================================== -->
    <div class="modal fade" id="exampleModal_delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete Warning</h5>
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
                                <form action="{{ route('delete_nhatro', $nhatro->id) }}" method="post"
                                    class="needs-validation" novalidate>
                                    @csrf
                                    @method('DELETE')
                                    <div class="row">
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2 ">
                                            <h4>Bạn có chắc chắn rằng muốn xóa dữ liệu nhà trọ
                                            </h4>
                                            <h3>Khi xóa dữ liệu sẽ mất và không thể khôi phục lại !</h3>
                                        </div>
                                    </div>
                                    <div class="modal-footer col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                        <button class="btn btn-primary" type="button" data-dismiss="modal"
                                            style="color: #000; font-weight: bold;">Close
                                        </button>
                                        <button class="btn btn-secondary" type="submit"
                                            style="color: #000; font-weight: bold;">Delete
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
