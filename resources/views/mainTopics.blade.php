@extends('layouts.template')

@section('body')


<section id="as-group">
  <div class="col-10 p-5 mx-auto">
    <!-- Title -->
    <h2>Expert, personalised advice and information at your fingertips</h2>
    <div class="row">
      @foreach ($mainTopics as $mainTopic)
      <div class="col-sm-6 col-lg-3 group-box wow fadeInRight w-100 mt-4" data-wow-duration=".2s" data-wow-delay=".4s">
        <div class="group-wrapper">
          <div class="group-box-img">
            <a href="/mainTopics/{{$mainTopic->mainTopic_id}}" class="inline-link">
              <img src="{{$mainTopic->filename}}" class="img-fluid" alt="Your health">
            </a>
          </div>
          <div class="top-group p-1">
            <h3>{{$mainTopic->name}}</h3>
            <p>{{$mainTopic->description}}</p>
            <a href="/mainTopics/{{$mainTopic->mainTopic_id}}" class="inline-link">Choose a topic</a>
          </div>
        </div>
      </div>
    @endforeach

    </div>
  </div>
</section>







@endsection


{{-- @push('js')
<script type="text/javascript">
$.get("https://apidev-asksara.dlf.org.uk/authority", function(data, status){
console.log(data);
});
</script>
@endpush --}}
