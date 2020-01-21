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
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Nadeesha Pathiraja</td>
                        <td>0768352207</td>
                        <td>Maharagama</td>
                        <td>Mathugama</td>
                        <td>Male</td>
                        <td>Good Coding</td>
                    </tr>
        
                </table>
            </div>
        </div>

        {{-- Footer --}}
        <header class="row">
            @include('common.footer')
        </header>
        
    </body>
</html>