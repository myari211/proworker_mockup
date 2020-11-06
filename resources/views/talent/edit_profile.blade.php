@extends('talent.layouts.app')
@section('content')
<div class="container">
    <div class="row mt-4">
        <div class="col-lg-4">
            <div class="card rounded-0 border-0 shadow">
                <div class="card-body">
                        @if($avatar === 0)
                            <div class="row d-flex justify-content-center">
                                <img src="{{ asset('img/registration.png') }}" class="profile rounded-circle border">
                            </div>
                        @else
                            <div class="row d-lfex justify-content-center">
                                @foreach($image as $data)
                                    <img src="{{ asset('avatar/'.$data->user_avatar) }}" class="profile rounded-circle border">
                                @endforeach
                            </div>
                        @endif
                    <div class="row mt-4">
                        <div class="col-lg-12">
                            <button type="button" class="btn btn-md btn-primary btn-block shadow" data-toggle="modal" data-target="#avatar">Change Avatar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card rounded-0 border-0 shadow">
                        <div class="card-body">
                            @if($count_profile !== 0)
                                @foreach($profile as $data)
                                    <div class="row d-flex justify-content-end pr-4">
                                        <h3>{{ $data->user_first_name }} {{ $data->user_last_name }}</h3>
                                    </div>
                                    <div class="row d-flex justify-content-center">
                                        <div class="col-lg-5">
                                            <p class="text-muted">
                                                <i class="fas fa-envelope"></i>
                                                {{ Auth::user()->email }}
                                            </p>
                                        </div>
                                        <div class="col-lg-5">
                                            <p class="text-muted">
                                                <i class="fas fa-phone"></i>
                                                0{{ $data->user_telephone }}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row d-flex justify-content-center">
                                        <div class="col-lg-5">
                                            <p class="text-muted">
                                                <i class="fas fa-map-marked-alt"></i>
                                                {{ $data->user_address }}
                                            </p>
                                        </div>
                                        <div class="col-lg-5">
                                            <p class="text-muted">
                                                <i class="fas fa-birthday-cake"></i>
                                                {{ $data->user_birth_date }}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row d-flex justify-content-center">
                                        <div class="col-lg-5">
                                            <p class="text-muted">
                                                @if($data->user_gender === 'female')
                                                    <i class="fas fa-mars"></i>
                                                    Female
                                                @else
                                                    <i class="fas fa-venus"></i>
                                                    Male
                                                @endif
                                            </p>
                                        </div>
                                        <div class="col-lg-5">
                                            <p class="text-muted">
                                                <i class="fas fa-flag"></i>
                                                {{ $data->user_nationality }}
                                            </p>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <form method="POST" action="/talent/profile/personal_information/{{ Auth::user()->id}}">
                                    @csrf
                                    <div class="row d-flex justify-content-end pr-4">
                                        <h3>Personal Info<span class="text-primary">rmation</span></h3>
                                    </div>
                                    <div class="row mt-4 d-flex justify-content-center">
                                        <div class="col-lg-5">
                                            <div class="md-form input-with-post-icon">
                                                <i class="fas fa-user input-prefix"></i>
                                                <input type="text" class="form-control" id="first_name" name="user_first_name">
                                                <label for="first_name">First Name</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-5">
                                            <div class="md-form input-with-post-icon">
                                                <i class="fas fa-user input-prefix"></i>
                                                <input type="text" class="form-control" id="last_name" name="user_last_name">
                                                <label for="last_name">Last Name</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row d-flex justify-content-center">
                                        <div class="col-lg-10">
                                            <div class="md-form input-with-post-icon">
                                                <i class="fas fa-map-marked-alt input-prefix"></i>
                                                <input type="text" class="form-control" id="address" name="user_address">
                                                <label for="address">Address</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row d-flex justify-content-center">
                                        <div class="col-lg-5">
                                            <div class="md-form input-with-post-icon">
                                                <input type="date" class="form-control" id="birthdate" name="user_birth_date">
                                                <label for="birthdate">Birth Date</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-5">
                                            <div class="md-form input-with-post-icon">
                                                <i class="fas fa-phone input-prefix"></i>
                                                <input type="number" class="form-control" id="telephone" name="user_telephone">
                                                <label for="telephone">Phone</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row d-flex justify-content-center mt-2">
                                        <div class="col-lg-5">
                                            <label>Gender</label>   
                                            <select name="user_gender" id="gender" class="form-control">
                                                <option value="female">Female</option>
                                                <option value="male">Male</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-5">
                                            <label for="nationality">Nationality</label>
                                            <select name="user_nationality" id="nationality" class="form-control">
                                                <option value="Indonesia">Indonesia</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mt-5 d-flex d-flex justify-content-center">
                                        <div class="col-md-10 d-flex justify-content-end">
                                            <button type="submit" class="btn btn-md shadow btn-primary shadow btn-block">
                                                Save
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-lg-12">
                    <div class="card rounded-0 shadow border-0">
                        <div class="card-body">
                            <div class="row d-flex justify-content-end pr-4">
                                <h3>Educa<span class="text-primary">tion</span></h3>
                            </div>
                            @if($education_count === 0)
                                <form method="post" action="/talent/education/{{ Auth::user()->id }}">
                                    @csrf
                                    <div class="row mt-4 d-flex justify-content-center">
                                        <div class="col-lg-10">
                                            <div class="md-form input-with-post-icon">
                                                <i class="fas fa-school input-prefix"></i>
                                                <input type="text" class="form-control" name="education_institute_name">
                                                <label>Insititute</label>
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
                                        <label>Degree</label>
                                            <select name="education_degree" class="form-control">
                                                <option value="elementary_school">Elementary School</option>
                                                <option value="junior_high_school">Junior High School</option>
                                                <option value="senior_high_school/vocational">Senior/Vocational High School</option>
                                                <option value="diploma">Diploma</option>
                                                <option value="banchelors_degree">Banchelors Degree</option>
                                                <option value="master_degree">Master Degree</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="md-form">
                                                <input type="date" name="education_start_date" class="form-control" id="education_start_date">
                                                <label for="education_start_date">Start From</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="md-form">
                                                <input type="date" name="education_end_date" class="form-control" id="education_end_date">
                                                <label for="education_end_date">Until</label>
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
                                    <div class="row mt-5 d-flex justify-content-center">
                                        <div class="col-lg-10 d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary border-0 btn-md btn-block">
                                                Save
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            @else
                                @foreach($education as $data)
                                    <div class="row mt-4 d-flex justify-content-center">
                                        <div class="col-lg-5">
                                            <label>Degree's</label>  
                                            @if($data->education_degree === "elementary_school")
                                                <h5>Elementary School</h5>
                                            @elseif($data->education_degree === "junior_high_school")
                                                <h5>Junior High School</h5>
                                            @elseif($data->education_degree === "diploma")
                                                <h5>Diploma</h5>
                                            @elseif($data->education_degree === "banchelors_degree")
                                                <h5>Banchelor's Degree</h5>
                                            @elseif($data->education_degree === "master_degree")
                                                <h5>Master Degree</h5>
                                            @else
                                                <h5>Senior/Vocational High School</h5>
                                            @endif
                                        </div>
                                        <div class="col-lg-5">
                                            <label>Field Of Study</label>
                                            <h5>{{ $data->education_field_of_study }}</h5>
                                        </div>
                                    </div>
                                    <div class="row mt-2 d-flex justify-content-center">
                                        <div class="col-lg-10">
                                            <label>Institute</label>
                                            <h5>{{ $data->education_institute_name }}</h5>
                                        </div>
                                    </div>
                                    <div class="row mt-2 d-flex justify-content-center">
                                        <div class="col-lg-5">
                                            <label>Start</label>
                                            <h6>{{ $data->education_start_date}}</h5>
                                        </div>
                                        <div class="col-lg-5">
                                            <label>Graduate</label>
                                            <h6>{{ $data->education_end_date}}</h5>
                                        </div>            
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-lg-12">
                    <div class="card shadow border-0 rounded-0 mb-4">
                        <div class="card-body">
                            <div class="row d-flex justify-content-end pr-4">
                                <h3>Skil<span class="text-primary">ls</span></h3>
                            </div>
                            
                            <form method="post" action="/talent/skills/{{ Auth::user()->id }}">
                                @csrf
                                <div class="controls">
                                <div class="entry">
                                <div class="row d-flex justify-content-center">
                                    <div class="col-lg-5">
                                        <div class="md-form input-with-post-icon">
                                            <i class="fas fa-user-tie input-prefix"></i>
                                            <input type="text" class="form-control" id="skill" name="skill">
                                            <label for="skill">Skill</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <label for="level">Level</label>
                                        <select name="skill_level" class="form-control" id="level">
                                            @foreach($level as $data)
                                                <option value="{{ $data->id }}">{{$data->level_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row d-flex justify-content-center mt-5">
                                    <div class="col-lg-10">
                                        <button type="button" class="btn btn-outline-primary btn-md btn-block d-flex justify-content-center align-items-center addSkill">
                                            Add Skill<i class="material-icons">add</i>
                                        </button>
                                    </div>
                                </div>
                                </div>
                                <div class="row mt-2 d-flex justify-content-center">
                                    <div class="col-lg-10">
                                        <button type="submit" class="btn btn-md btn-primary shadow btn-block">
                                            Save
                                        </button>
                                    </div>
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-lg-12">
                    <div class="card shadow border-0 rounded-0 mb-5">
                        <div class="card-body">
                            <div class="row d-flex justify-content-end pr-4">
                                <h3>Refe<span class="text-primary">ral</span></h3>
                            </div>
                            <div class="row d-flex justify-content-center">
                                <div class="col-lg-10">
                                    <div class="md-form input-with-post-icon">
                                        <i class="fas fa-user input-prefix"></i>
                                        <input type="text" name="recomendation" class="form-control" id="referal" name="recomendation">
                                        <label for="referal">Referal</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row d-flex justify-content-center mt-5">
                                <div class="col-lg-10 d-flex justify-content-end">
                                    <button type="button" class="btn btn-md btn-primary btn-block">Save</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="avatar" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<!-- Add .modal-dialog-centered to .modal-dialog to vertically center the modal -->
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Change Avatar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="/talent/profile/avatar/{{ Auth::user()->id }}" enctype="multipart/form-data">
                    <div class="row d-flex justify-content-center">
                        @csrf
                        <div class="col-lg-10">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-primary text-white" id="inputGroupFileAddon01">
                                        <i class="fas fa-image"></i>
                                    </span>
                                </div>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" name="user_avatar">
                                    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center mt-5">
                        <div class="col-lg-10">
                            <button type="submit" class="btn btn-md btn-primary btn-block">
                                Change Avatar
                                <i class="fas fa-image"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection