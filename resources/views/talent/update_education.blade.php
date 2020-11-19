@extends('talent.layouts.app')
@section('content')
<div class="container">
    <div class="row mt-4 d-flex justify-content-center">
        <div class="col-lg-10">
            <div class="card shadow rounded-0 border-0">
                <div class="card-body">
                    <div class="row d-flex justify-content-end pr-4">
                        <h3>Educa<span class="text-primary">tion</span></h3>
                    </div>
                    <div class="row mt-4 d-flex justify-content-center">
                        <div class="col-lg-10">
                            <div class="md-form input-with-post-icon">
                                <i class="fas fa-school input-prefix"></i>
                                <input type="text" name="education_institute_name" class="form-control" id="institute_name">
                                <label for="institute_name">Institute</label>
                            </div>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-10">
                            <div class="md-form input-with-post-icon">
                                <i class="fas fa-graduation-cap input-prefix"></i>
                                <input type="text" name="education_field_of_study" class="form-control" id="field_of_study">
                                <label for="field_of_study">Field Of Study</label>
                            </div>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-4">
                            <label for="degree">Degree</label>
                            <select name="education_degree" class="form-control" id="degree">
                                <option value="elementary_school">Elementary School</option>
                                <option value="junior_high_school">Junior High School</option>
                                <option value="senior_high_school/vocational">Senior High School/Vocational</option>
                                <option value="diploma">Diploma</option>
                                <option value="banchelors_degree">Bachelors Degree</option>
                                <option value="master_degree">Master Degree</option>
                            </select>
                        </div>
                        <div class="col-lg-3">
                            <div class="md-form">
                                <input type="date" name="education_start_date" class="form-control" id="education_start">
                                <label for="education_start">Start From</label>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="md-form">
                                <input type="date" name="education_end_date" class="form-control" id="education_end">
                                <label for="education_end">Until</label>
                            </div>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-10">
                            <div class="md-form">
                                <textarea id="form7" name="education_description" class="md-textarea form-control" rows="3"></textarea>
                                <label for="form7">Description</label>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4 d-flex justify-content-center">
                        <div class="col-lg-10">
                            <button type="submit" class="btn btn-primary btn-block btn-md">
                                Save
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection