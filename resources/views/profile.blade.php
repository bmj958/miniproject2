@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row m-y-2">
            <div class="col-lg-8 push-lg-4">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a href="" data-target="#profile" data-toggle="tab" class="nav-link active">Profile</a>
                    </li>
                </ul>
                <br/>
                <div class="tab-content p-b-3">
                    <div class="tab-pane active" id="profile">
                        <h4 class="m-y-2">MinJoo's Profile</h4>
                        <div class="row">
                            <div class="col-md-6">
                                <h5>About Me</h5>
                                <p>
                                    I am a South Korean who came to United States when I was 10. I previous lived in Rutherford, NJ and not live in Palisades Park, NJ.
                                </p>
                                <h5>Hobbies</h5>
                                <p>
                                    Music, soccer, basketball, bowling, shopping
                                </p>
                            </div>
                            <div class="col-md-6">
                                <h5>Recent Subjects</h5>
                                <a href="" class="tag tag-default tag-pill">Web Development</a>
                                <a href="" class="tag tag-default tag-pill">Humanities</a>
                                <a href="" class="tag tag-default tag-pill">Digital Crime</a>
                                <a href="" class="tag tag-default tag-pill">Computer Security</a>

                                <hr>
                                <span class="tag tag-primary"><i class="fa fa-user"></i> 2130 Followers</span>
                                <span class="tag tag-success"><i class="fa fa-cog"></i> 433 Forks</span>
                                <span class="tag tag-danger"><i class="fa fa-eye"></i> 2415 Views</span>
                            </div>
                            <div class="col-md-12">
                                <h4 class="m-t-2"><span class="fa fa-clock-o ion-clock pull-xs-right"></span> Recent Activity</h4>
                                <table class="table table-hover table-striped">
                                    <tbody>
                                    <tr>
                                        <td>
                                            <strong>MinJoo</strong> recently visited <strong> Korea</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>MinJoo</strong> got a new car <strong>`Maserati`</strong>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>MinJoo</strong> completed his project on <strong>`GITHUB`</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>MinJoo</strong> finished his homework and got a  <strong> 85</strong> marks
                                        </td>

                                    </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!--/row-->
                    </div>


                </div>
            </div>
        </div>
    </div>
@endsection
