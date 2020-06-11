@extends('layout.main_layout')
@section('content')
<div class="container-fluid" style="padding:100px 10px 100px 10px;">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="header">
          <h4 class="title">My Subjects</h4>
        </div>

        <form method="POST" enctype="multipart/form-data" action="{{ route('storeSubject') }}">
          @csrf
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label>{{ __('Name') }}</label>
                <input name="name" type="text" class="form-control" placeholder="Subject Name" value="">
              </div>
            </div>
          </div>
          <button type="submit" class="btn btn-info btn-fill pull-right">{{ __('Submit') }}</button>
        </form>

        <div class="content">
          <form>
            <div class="row">
              <div class="col-md-12">             
                <table class="table table-borderless">
                  <tbody>
                    <tr>
                      <th>ID</th>
                      <th>Name</th>
                    </tr>
                    @foreach($subjects as $subject)
                    <tr>
                      <td>{{ $subject->id }}</td>
                      <td>{{ $subject->name }}</td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>                                                                      
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

