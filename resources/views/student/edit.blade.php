@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('Edit Student') }}</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('student.update', $student->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="id" value="{{ old('id', $student->id) }}">
                        <div class="form-group">
                            <label for="fname">First Name</label>
                            <input type="text" class="form-control @error('fname') is-invalid @enderror" id="fname"
                                name="fname" value="{{ old('fname', $student->fname) }}" required>
                            @error('fname')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <div class="form-group">
                            <label for="lname">Last Name</label>
                            <input type="text" class="form-control @error('lname') is-invalid @enderror" id="lname"
                                name="lname" value="{{ old('lname', $student->lname) }}" required>
                            @error('lname')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <div class="form-group">
                            <label for="mname">Middle Name</label>
                            <input type="text" class="form-control @error('mname') is-invalid @enderror" id="mname"
                                name="mname" value="{{ old('mname', $student->mname) }}" required>
                            @error('mname')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <div class="form-group">
                            <label for="add">Address</label>
                            <input type="text" class="form-control @error('add') is-invalid @enderror" id="add" name="add"
                                value="{{ old('add', $student->add) }}" required>
                            @error('add')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <div class="form-group">
                            <label for="dobirth">Date of Birth</label>
                            <input type="date" class="form-control @error('dobirth') is-invalid @enderror" id="dobirth"
                                name="dobirth" value="{{ old('dobirth', $student->dobirth) }}" required>
                            @error('dobirth')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <button type="submit" class="btn btn-success col-12">Update Student</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection