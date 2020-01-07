@extends('layouts.app')

@section('content')

<div class="container">
    <div class="card text-center">
        <div class="card-header">
          Create a New Category
        </div>
        <div class="card-body">
            <form>
                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="name" class="form-control" id="name" placeholder="John Doe">
                </div>
                <div class="form-group">
                  <label for="email">Name</label>
                  <input type="email" class="form-control" id="email" placeholder="name@example.com">
                </div>
                <div class="form-group">
                  <label for="exampleFormControlSelect1">Example select</label>
                  <select class="form-control" id="exampleFormControlSelect1">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleFormControlSelect2">Example multiple select</label>
                  <select multiple class="form-control" id="exampleFormControlSelect2">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleFormControlTextarea1">Example textarea</label>
                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
              </form>
        </div>
    </div>
</div>


@endsection
