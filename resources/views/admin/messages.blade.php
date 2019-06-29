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
                    <h3 class="section-title">Messages</h3>
                    <hr>
                </div>
                <div class="row">

                        <div class="col-sm-12 wow fadeInUp" data-wow-delay="0.2s">
                            <div class="message-box">
                                <table class="table">
                                    <thead>
                                    <th>Sender</th>
                                    <th>Email</th>
                                    <th>Subject</th>
                                    <th>Message</th>
                                    <th>Action</th>
                                    </thead>
                                    @foreach($messages as $message)
                                        <tr>
                                            <td>
                                                {{ $message->name }}
                                            </td>
                                            <td>
                                                {{ $message->email }}
                                            </td>
                                            <td>
                                                {{ $message->subject }}
                                            </td>
                                            <td>
                                                <p class="article-content">
                                                    <?php
                                                    $cont =substr($message->message,0,100);
                                                    ?>
                                                    {!! $cont !!}...&nbsp;
                                                    <a href="" data-toggle="modal" data-target="#modal-{{ $message->id }}" style="color: #0a568c;">
                                                        Read more
                                                    </a>
                                                </p>
                                            </td>

                                            <td>
                                    <a href="mailto:{{$message->email}}" class="btn btn-outline-info btn-sm m-1" style="display: inline-block;">
                                        <i class="fas fa-reply"></i>
                                    </a>
                                    <form method="post" action="{{route('delete-message', $message->id)}}" class="form-btn m-1" style="display: inline-block;">
                                        @csrf
                                        <button class="btn btn-danger btn-sm" type="submit" onclick='return confirm("Are you sure you want to Delete this Message?")'>
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                            </td>

                                        </tr>

                                        <!-- Message Modal -->
                                        <div class="modal" id="modal-{{ $message->id }}">
                                            <div class="modal-dialog">
                                                <div class="modal-content">

                                                    <!-- Modal Header -->
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">{{ $message->subject }}</h4>
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    </div>

                                                    <!-- Modal body -->
                                                    <div class="modal-body">
                                                        <p>
                                                            {{ $message->message }}
                                                        </p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <p>{{ $message->name }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- End of Modal-->
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
            {{ $messages->links() }}
        </div>
    </div>
@endsection