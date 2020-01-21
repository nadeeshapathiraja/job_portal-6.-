<!DOCTYPE html>
<html lang="en">
    <head>
    @include('common.head')
    </head>
    <body>

    {{-- Include Header --}}
    <header class="row">
        @include('common.header')
    </header>

    {{-- Content --}}
        <div class="container">
            
            <h1>Candidate Work Experence</h1>
            {{-- action="{{ route('candidateworkexps.store') }}" --}}
            <form method="post">

                <div class="form-group">
                    <label for="employername">Employer Name:</label>
                    <input type="text" class="form-control" name="employername"/>
                </div>

                <div class="form-group">
                    <label for="industry">Industry:</label>
                    <input type="text" class="form-control" name="industry"/>
                </div>

                <div class="form-group">
                    <label for="city">City:</label>
                    <input type="text" class="form-control" name="city"/>
                </div>

                <div class="form-group">
                    <label for="country">Country:</label>
                    <input type="text" class="form-control" name="country"/>
                </div>

                <div class="form-group">
                    <label for="state">State:</label>
                    <input type="text" class="form-control" name="state"/>
                </div>

                <div class="form-group">
                    <label for="position">Position:</label>
                    <input type="text" class="form-control" name="position"/>
                </div>

                <div class="form-group">
                    <label for="start_date">Start Date:</label>
                    <input type="date" class="form-control" name="start_date"/>
                </div>

                <div class="form-group">
                    <label for="end_date">End Date:</label>
                    <input type="date" class="form-control" name="end_date"/>
                </div>

                <div class="form-group">
                    <label for="still_working">Still Working:</label>
                    <input type="text" class="form-control" name="still_working"/>
                </div>

                <div class="form-group">
                    <label for="salary">Salary:</label>
                    <input type="text" class="form-control" name="salary"/>
                </div>

                <button type="submit" class="btn btn-primary-outline">Submit</button>
            </form>
        </div>

        {{-- Include Footer --}}

        
    </body>
</html>