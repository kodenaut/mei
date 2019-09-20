@extends('admin.layout')
<link href="{{asset('css/style.css')}}" rel="stylesheet">

@section('content')

    <div class="row">
        <!--==========================
    Schools Section
  ============================-->
        <section id="services" style="width: 100%;">
            <div class="container wow fadeIn">
                <div class="section-header">
                    <h3 class="section-title">High School Students</h3>
                    <hr>
                </div>
                <div class="row">

                    <div class="col-sm-12 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="message-box">
                            <table class="table">
                                <thead>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>School</th>
                                <th>Action</th>
                                </thead>
                                @foreach($students as $student)
                                    <tr>
                                        <td>
                                            {{ $student->name }}
                                        </td>
                                        <td>
                                            {{ $student->phone }}
                                        </td>
                                        <td>
                                            {{ $student->email }}
                                        </td>
                                        <td>
                                            {{ $student->school }}
                                        </td>

                                        <td>
                                            <a href="mailto:{{$student->email}}" class="btn btn-outline-info btn-sm m-1" style="display: inline-block;">
                                                <i class="fas fa-reply"></i>
                                            </a>
                                            <form method="post" action="{{route('delete-student', $student->id)}}" class="form-btn m-1" style="display: inline-block;">
                                                @csrf
                                                <button class="btn btn-danger btn-sm" type="submit" onclick='return confirm("Are you sure you want to Delete this Record?")'>
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
                                        </td>

                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- #schools -->
    </div>

    <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4 mx-auto">
            {{ $students->links() }}
        </div>
    </div>
@endsection