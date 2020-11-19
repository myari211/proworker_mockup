@extends('talent.layouts.app')
@section('content')
<div class="container">
    <div class="row d-flex justify-content-center mt-4">
        <div class="col-lg-10">
            <div class="card shadow rounded-0 border-0">
                <div class="card-body">
                    @foreach($summary as $data)
                        <form method="post" action="/talent/profile/update_summary/{{ $data->id }}">
                            @csrf
                            <input type="hidden" name="primary" value="{{ Auth::user()->id }}">
                            <div class="row d-flex justify-content-center">
                                <div class="col-lg-10">
                                    <div class="md-form input-with-post-icon">
                                        <i class="fas fa-user input-prefix"></i>
                                        <input type="text" name="summary_name" class="form-control" id="summary_name" value="{{ $data->summary_name }}">
                                        <label for="summary_name">Summary Name</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row d-flex justify-content-center">
                                <div class="col-lg-10">
                                    <div class="md-form md-outline">
                                        <textarea id="form75" class="md-textarea form-control" rows="3" name="summary_details">{{ $data->summary_details }}</textarea>
                                        <label for="form75">Summary Details</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-4 d-flex justify-content-center">
                                <div class="col-lg-10">
                                    <button type="submit" class="btn btn-primary btn-md btn-block border-0 shadow">
                                        Save
                                    </button>
                                </div>
                            </div>
                        </form>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection