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
        <h1>Candidate Language</h1>
        
        <form method="post" action="/saveLanguage" >
            
            {{-- For secure data --}}
            {{csrf_field()}}

            <div class="form-group">
                <label for="language_code">Language Code:</label>
                <input type="text" class="form-control" name="language_code"/>
            </div>

            <div class="form-group">
                <label for="spoken_level">Spoken Level:</label>
                <input type="text" class="form-control" name="spoken_level"/>
            </div>

            <div class="form-group">
                <label for="written_level">Written Level:</label>
                <input type="text" class="form-control" name="written_level"/>
            </div>

            <div class="form-group">
                <label for="default">Default:</label>
                <input type="text" class="form-control" name="default"/>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="button" class="btn btn-warning">Clear</button>
        </form>
    </div>

    {{-- Include Footer --}}

    
</body>
</html>