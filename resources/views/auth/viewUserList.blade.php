<!DOCTYPE html>
<html lang="en">
    <head>
        @include('common.head')
    </head>
    <body>
        {{-- Header --}}
        <header class="row">
            @include('common.header')
        </header>

        {{-- Content --}}
        <div style="margin-top: 20px">
            <div class="container">
                <table class="table table-dark">
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>User Type</th>
                        <th>Approvel</th>
                        <th>Action</th>
                        <th>Approvel Action</th>

                    </tr>

                    @foreach($viewUserLists as $viewUserList)
                    {{-- assign candidate profile data for viewCandidateLists variable --}}
                        <tr>
                            <td>{{$viewUserList->id}}</td>
                            <td>{{$viewUserList->name}}</td>
                            <td>{{$viewUserList->email}}</td>
                            <td>{{$viewUserList->userType}}</td>
                            <td>
                                @if($viewUserList->userApprove)
                                    <button type="button" class="btn btn-outline-info">Approved User</button>
                                @else
                                    <button type="button" class="btn btn-outline-warning">Not Approved User</button>
                                @endif
                            </td>
                            <td>
                                <button type="button" class="btn btn-success">View</button>
                                <button type="button" class="btn btn-danger">Delete</button>
                            </td>
                            <td>
                                @if(!$viewUserList->userApprove)
                                <a href="/giveAccess/{{$viewUserList->id}}" class="btn btn-primary">Give Access For User</a>
                                @else
                                <a href="/cancleAccess/{{$viewUserList->id}}" class="btn btn-warning">Give Access For User</a>
                                @endif

                            </td>
                        </tr>
                    @endforeach


                </table>
            </div>
        </div>

        {{-- Footer --}}
        <header class="row">
            @include('common.footer')
        </header>

    </body>
</html>
