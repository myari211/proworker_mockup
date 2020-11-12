@extends('admin.layouts.app')
@section('content')
<div class="container">
    <div class="row d-flex justify-content-center mt-4">
        <div class="col-lg-10">
            <div class="card rounded-0 border-0 shadow">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4">
                            @if($avatar_count == 0)
                                <img src="{{ asset('img/avatar-default.png') }}" style="width:150px; height:180px;">
                            @else
                                @foreach($avatar as $data)
                                    <img src="{{ asset('img/image_web/'.$data->image) }}">
                                @endforeach
                            @endif
                        </div>
                        <div class="col-lg-8 p-0">
                            @foreach($user as $data)
                            <div class="row">
                                <div class="col-lg-12 d-flex justify-content-end pr-4">
                                    <h3>{{ $data->user_first_name }} {{ $data->user_last_name }}</h3>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <p class="text-muted">
                                        <span class="fas fa-envelope text-danger"></span>
                                        {{ $data->email }}
                                    </p>
                                </div>
                                <div class="col-lg-6">
                                    <p class="text-muted">
                                        <span class="fas fa-phone"></span>
                                        0{{ $data->user_telephone }}
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <p class="text-muted">
                                        <span class="fas fa-map-marked-alt text-success"></span>
                                        {{ $data->user_address }}
                                    </p>
                                </div>
                                <div class="col-lg-6">
                                    <p class="text-muted">
                                        <span class="fas fa-birthday-cake text-default"></span>
                                        {{ $data->user_birth_date }}
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    @if($data->user_gender == 'male')
                                        <p class="text-muted">
                                            <span class="fas fa-mars text-primary"></span>
                                            Male
                                        </p>
                                    @else
                                        <p class="text-muted">
                                            <span class="fas fa-venus"></span>
                                            Female
                                        </p>
                                    @endif
                                </div>
                                <div class="col-lg-6">
                                    <p class="text-muted">
                                        <span class="fas fa-flag text-info"></span>
                                        {{ $data->user_nationality }}
                                    </p>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4 d-flex justify-content-center">
        <div class="col-lg-10">
            <div class="card shadow rounded-0 border-0">
                <div class="card-body pl-4">
                    <div class="row d-flex justify-content-end pr-4">
                        <h3>Educa<span class="text-primary">tion</span></h3>
                    </div>
                    <div class="container">
                        @foreach($education as $data)
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="row">
                                        <label for="institute_name">Institute/University</label>
                                    </div>
                                    <div class="row">
                                        <h5 id="institute_name">{{ $data->education_institute_name }}</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-lg-6">
                                    <div class="row">
                                        <label for="education_degree">Degree</label>
                                    </div>
                                    <div class="row">   
                                        @if($data->education_degree == "elementary_school")
                                            <h5>Elementary School</h5>
                                        @elseif($data->education_degree == "junior_high_school")
                                            <h5>Junior High School</h5>
                                        @elseif($data->education_degree == "senior_high_school/vocational")
                                            <h5>Senior High School/Vocational
                                        @elseif($data->education_degree == "diploma")
                                            <h5>Diploma</h5>
                                        @elseif($data->education_degree == "banchelors_degree")
                                            <h5>Banchelor's Degree</h5>
                                        @elseif($data->education_degree == "master_degree")
                                            <h5>Master Degree</h5>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="row">
                                        <label for="field_of_study">Field Of Study</label>
                                    </div>
                                    <div class="row">
                                        <h5>{{ $data->education_field_of_study }}</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-lg-6">
                                    <div class="row">
                                        <label for="education_start_date">Start From</label>
                                    </div>
                                    <div class="row">
                                        <h5>{{ $data->education_start_date }}</h5>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="row">
                                        <label for="education_end_date">Until</label>
                                    </div>
                                    <div class="row">
                                        <h5>{{ $data->education_end_date }}</h5>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4 d-flex justify-content-center">
        <div class="col-lg-10">
            <div class="card rounded-0 border-0 shadow">
                <div class="card-body">

                </div>
            </div>
        </div>
    </div>
</div>
@endsection