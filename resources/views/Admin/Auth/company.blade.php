<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<head>


    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="{{ asset('Front/css/adminlte.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('Front/css/all.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('Front/css/summernote-bs4.min.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title>company info</title>
</head>

<body>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">
                            Quick Example
                        </h3>
                    </div>
                    <form action="{{ route('company.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="company_name"> Company Name </label>
                                        <input type="text" class="form-control" value='{{ $company_name }}' name="comp_Na" placeholder="أسم الشركةاو المؤسسة" />
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="company_name"> Business Type </label>
                                        <input type="text" class="form-control" value='{{ $Business_Type }}' name="Business_Type" placeholder="مجال العمل" />
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="company_name"> Street Address </label>
                                        <input type="text" class="form-control" value='{{ $streetAddress }}' name="streetAddress" placeholder="الشارع" />
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for='Tele_Number'> Tele Number </label>
                                        <input type="text" class="form-control" value='{{ $Tele_Number }}' name="Tele_Number" placeholder="رقم التليفون" />
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for='fax'> Fax </label>
                                        <input type="text" class="form-control" value='{{ $fax }}' name="fax" placeholder="الفاكس" />
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for='postalCode'> Postal Code</label>
                                        <input type="postalCode" class="form-control" value='{{ $postalCode }}' name="postalCode" placeholder="رمز البريدي" />
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for='country'> Country </label>
                                        <input type="text" class="form-control" value='{{ $country }}' name="country" placeholder="أسم الدولة" />
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for='city'> City </label>
                                        <input type="text" class="form-control" value='{{ $city }}' name="city" placeholder="أسم المدينة" />
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="input-group-text" for='WBDescription'> WBDescription:- </label>
                                        <textarea class="form-control" name="WBDescription" id="WBDescription" placeholder="وصف الموقع" required> {{ $WBDescription }} </textarea>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="exampleInputFile">Company Logo</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="exampleInputFile" name="uploadlogo">
                                                <label class="custom-file-label" for="exampleInputFile">Choose
                                                    file</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text">Upload</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button value="حفظ" name="save" type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
    <script src="{{ asset('Front/JS/adminlte.js') }}" type="text/javascript" defer></script>
    <script src="{{ asset('Front/JS/jquery-1.11.0.min.js') }}" type="text/javascript" defer></script>
    <script src="{{ asset('Front/JS/jquery.overlayScrollbars.min.js') }}" type="text/javascript" defer></script>
    <script src="{{ asset('Front/JS/summernote-bs4.min.js') }}" type="text/javascript" defer></script>
    <script src="{{ asset('Front/JS/bootstrap.bundle.min.js') }}" type="text/javascript" defer></script>
    <script src="{{ asset('Front/JS/adminlte.js') }}" type="text/javascript" defer></script>
    <script>
        $(function() {
            // Summernote
            $('#WBDescription').summernote()
        });
    </script>
</body>

</html>
