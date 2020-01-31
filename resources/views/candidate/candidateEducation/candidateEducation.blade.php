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
        <h1>Candidate Education</h1>
        
        <form method="post" action="/saveEducation">

            {{-- For secure data --}}
            {{csrf_field()}}
            
            <div class="form-group">
                <label for="degree">Degree:</label>
                <input type="text" class="form-control" name="degree"/>
            </div>
        
            <div class="form-group">
                <label for="school_type">School Type:</label>
                <input type="text" class="form-control" name="school_type"/>
            </div>
        
            <div class="form-group">
                <label for="school_name">School Name:</label>
                <input type="text" class="form-control" name="school_name"/>
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
                <label for="enrolldate">Enrole Date:</label>
                <input type="date" class="form-control" name="enrolldate"/>
            </div>
            
            <div class="form-group">
                <label for="still_studying">Still Studying:</label>
                <input type="text" class="form-control" name="still_studying"/>
            </div>
            
            <div class="form-group">
                <label for="grad_date">Undergraduate Date:</label>
                <input type="date" class="form-control" name="grad_date"/>
            </div>
            
            <div class="form-group">
                <label for="exp_graddate">Graduate Date:</label>
                <input type="date" class="form-control" name="exp_graddate"/>
            </div>
            
            <div class="form-group">
                <label for="is_graduated">Is Graduated:</label>
                <input type="text" class="form-control" name="is_graduated"/>
            </div>
            
            <div class="form-group">
                <label for="lastenrollyear">Last Enrole Year:</label>
                <input type="date" class="form-control" name="lastenrollyear"/>
            </div>
            
            <div class="form-group">
                <label for="future_study">Future Study:</label>
                <input type="text" class="form-control" name="future_study"/>
            </div>
            
            <div class="form-group">
                <label for="field_of_study">Fields Of Study:</label>
                <input type="text" class="form-control" name="field_of_study"/>
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="button" class="btn btn-warning">Clear</button>
        </form>
  
    </div>

    {{-- Include Footer --}}

    
</body>
</html>