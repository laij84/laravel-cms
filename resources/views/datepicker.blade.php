@extends('layouts.app')

@section('content')
<div class="container">
    <div class="columns">
        <div class="column">
            <h1 class="title">Datepicker</h1>

            <b-field label="Select a date">
                <b-datepicker
                    placeholder="Click to select..."
                    icon="today">
                </b-datepicker>
            </b-field>
        </div>
    </div>
</div>

@endsection


@section('scripts')
  <script>
    var app = new Vue({
      el: '#app',
      data: {
      },
      methods: {
      }
    });
</script>

@endsection