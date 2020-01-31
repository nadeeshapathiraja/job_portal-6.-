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
                        <th>Action</th>
                    </tr>

                    @foreach($viewUserLists as $viewUserList)
                    {{-- assign candidate profile data for viewCandidateLists variable --}}
                        <tr>
                            <td>{{$viewUserList->id}}</td>
                            <td>{{$viewUserList->name}}</td>
                            <td>{{$viewUserList->email}}</td>
                            <td>{{$viewUserList->userType}}</td>
                            <td>
                                <button type="button" class="btn btn-success">View</button>
                                <button type="button" class="btn btn-danger">Delete</button>
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