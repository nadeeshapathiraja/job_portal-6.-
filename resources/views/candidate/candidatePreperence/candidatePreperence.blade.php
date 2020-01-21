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
        <h1>Candidate Preperences</h1>
        {{-- action="{{ route('candidatepreferences.store') }}" --}}
        <form method="post">
            
            <div class="form-group">
                <label for="specialization">Specialization:</label>
                <input type="text" class="form-control" name="specialization"/>
            </div>

            <div class="form-group">
                <label for="location_country">Country:</label>
                <input type="text" class="form-control" name="location_country"/>
            </div>

            <div class="form-group">
                <label for="location_state">State:</label>
                <input type="text" class="form-control" name="location_state"/>
            </div>

            <div class="form-group">
                <label for="salary_currency">Salary Currency:</label>
                <input type="text" class="form-control" name="salary_currency"/>
            </div>

            <div class="form-group">
                <label for="salary_amount">Salary Amount:</label>
                <input type="text" class="form-control" name="salary_amount"/>
            </div>


            <button type="submit" class="btn btn-primary-outline">Submit</button>
        </form>
    </div>

    {{-- Include Footer --}}

    
</body>
</html>