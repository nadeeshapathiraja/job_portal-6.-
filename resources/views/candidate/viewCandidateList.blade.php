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
                        <th>Mobile</th>
                        <th>Address</th>
                        <th>City</th>
                        <th>Gender</th>
                        <th>Skils</th>
                        <th>Action</th>
                    </tr>

                    @foreach($viewCandidateLists as $viewCandidateList)
                    {{-- assign candidate profile data for viewCandidateLists variable --}}
                        <tr>
                            <td>{{$viewCandidateList->candidate_profile_id}}</td>
                            <td>{{$viewCandidateList->firstname." "}}{{$viewCandidateList->lastname}}</td>
                            <td>{{$viewCandidateList->mobile}}</td>
                            <td>{{$viewCandidateList->address2}}</td>
                            <td>{{$viewCandidateList->city}}</td>
                            <td>{{$viewCandidateList->gender}}</td>
                            <td>{{$viewCandidateList->prefered_category}}</td>
                            <td>
                                <a href="/viewCandidate/{{$viewCandidateList->candidate_profile_id}}" class="btn btn-success">View</a>
                                <a href="/deleteCandidate/{{$viewCandidateList->candidate_profile_id}}" class="btn btn-danger">Delete</a>
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
